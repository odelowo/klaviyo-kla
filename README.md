
# Kla Quiz Demo

## Introduction

Kla is a Quiz solution built to demo integration with the Klaviyo platform, by the author. This document will concentrate on the Klaviyo specific configurations, whilst also highlighting the limitations. This project has been developed for demo purposes and neither Klaviyo or the author can be made responsible if this repo does not perform as expected in a Production environment.    

## Limitations  
As this is a demo put together as part of an interview process, their are a number of nice to haves which have NOT been developed. These include:
* Friendly HTML creatives for email
* No SMS integration (due to security no phone numbers are captured in either the local database or sent in calls to Klaviyo)
* Form validation is limited
* Error logging is limited  
* The Solution is not optimised for Mobile, and has been developed for optimum use with Chrome

## Dependencies  
* UserSpice PHP Framework - https://userspice.com/ (release 5.4)
* PHPMyAdmin/MySql - version 5.1.1.  
* Web Server - dedicated hosting
* Composer version 2.2.17
* JQuery version 3.6.0
* Guzzle - version 6.5 (version managed through Composer)

## (Optional) Additional Implementation Specific Dependencies
* YAML for pushing local files over SFTP to remote server
* Staging environment - https://thatspurple.com/klaviyo-kla-dev/
* Production environment - https://thatspurple.com/klaviyo-kla/
* GitHub Repository Secrets used to keep FTP username and password secret

## Assumptions  
* The reader has access to a web server (either local or remote) where they may run PHP
* Web server has line of sight to a MySql Database
* The reader has set up and configured compressor

## Installation
* The installation process is out of scope as of writing


## Solution Breakdown
The solution relies leverages UserSpice for the user management - i.e. sign up, logged in sessions, etc. Though out of the box UserSpice easily integrates with mail servers, using the out of the box methods would have rendered this exercise mute. For this reason, user facing pages have been built from the ground up using styling elements from Klaviyo and out of the box function calls from UserSpice. All emails are triggered via Klaviyo using a purpose built class (Klaviyo) which is described in detail below.

## Getting Started
You can use either the Staging or Production link, though it is recommended to use the Production link as Staging may not be stable depending on when you access it. With regards to look and feel, both environments behave the same
* Staging environment - https://thatspurple.com/klaviyo-kla-dev/
* Production environment - https://thatspurple.com/klaviyo-kla/


## Klaviyo Class

#### Purpose
This class was created to manage all calls to Klaviyo's API end points. Whether that be in the case of web interactions (where the public key is returned), or with backed event APIs. The class extends the Client class from GuzzleHttp (vendor/guzzlehttp/src/Client.php)

#### Klaviyo Class Location

```http
  users/classes/Klaviyo.php
```

| Variables | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `privateKey` | `string` |Used for all calls to Klaviyo when a private key is required |
| `publicKey` | `string` |Used for all calls to Klaviyo when a public key is required |

#### Functions

| Function Name | parameters     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `returnPublicKey`      |  | Used in JavaScript calls from the front end |
| `subscribeToList`      | `listId` `email` | Used in the instance whereby a user has opted into the newsletter |
| `trackProfileActivity`      | `customerattr` `properties` `event` | This function is responsible for managing all eevent calls from the backend to Klaviyo |


#### returnPublicKey()
    public function returnPublicKey(){
        return self::$publicKey;
    }

#### subscribeToList($listId, $email)
This function receives a string value for both the list (to be subscribed to) and the email address (of the person who will be subscribed). This call is only made in the instance whereby a user signs up and checks the checkbox indicating that they would like to opt into marketing messages

    public function subscribeToList($listId, $email){

    $body = '{"profiles":[{"email":"'.$email.'", "email_consent":true}]}';

    $response = $this->request('POST', 'https://a.klaviyo.com/api/v2/list/'.$listId.'/subscribe?api_key='.self::$privateKey, [
      'body' => $body,
      'headers' => [
        'Accept' => 'application/json',
        'Content-Type' => 'application/json',
      ],
    ]);
    return $response;
  }

#### trackProfileActivity($customerattr, $properties, $event)
The below function works by receiving a multidimensional array for both the customer attributes (customerattr) and the event's properties (properties). Both arrays are then looped through to dynamically work out the key value pairs to be added to the event call to Klaviyo

    public function trackProfileActivity($customerattr, $properties, $event){
    //concatenate $data string by first looping through each customer attribute, and then each event attribute  
    $data = '{"token": "'.self::$publicKey.'", "event": "'.$event.'"';

    $firstRecord = TRUE;
    $data .= ', "customer_properties": {';
    foreach ($customerattr as [$attr, $val]) {
      if($firstRecord == TRUE){
        $data .= '"'.$attr.'":"'.$val.'"';
        $firstRecord = FALSE;
      }
      else {
        $data .= ', "'.$attr.'":"'.$val.'"';
      }
    }


    $firstRecord = TRUE;
    $data .= '}, "properties": {';
    foreach ($properties as [$prop, $val]) {
      if($firstRecord == TRUE){
        $data .= '"'.$prop.'":"'.$val.'"';
        $firstRecord = FALSE;
      }
      else {
        $data .= ', "'.$prop.'":"'.$val.'"';
      }
    }

    $data.='}}';

    $response = $this->request('POST', 'https://a.klaviyo.com/api/track', [
      'form_params' => [
        'data' => $data
      ],
      'headers' => [
        'Accept' => 'text/html',
        'Content-Type' => 'application/x-www-form-urlencoded',
      ],
    ]);
    return $response;
    }



## JavaScript Event Tracking
#### Purpose
Event tracking has been used to track logged in user behaviour on the website https://thatspurple.com/klaviyo-kla/ Every logged in page references both a header (platform/includes/header.php) and footer (platform/includes/footer.php). In addition to standardising the pages' cosmetics, the header.php file also calls the Klaviyo event JavaScript end point - allowing us to track user behaviour on the site

As this is the only header used for all of the logged in pages, there are reserved variables used to enrich the calls made to Klaviyo

#### Header Location

```http
  platform/includes/header.php
```
#### Reserved variables

| Variable Name | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `user`      | `object` | The current logged in user |
| `pageTitle`      | `string` | User friendly name which describes the page in question |
| `journey`      | `string` | Analytics best practise for tracking user journey |
| `journeyStep`      | `string` | Analytics best practise for tracking which step the user has reached in a web journey |
| `pageview_attr`      | `array` | Multidimensional array to enrich specific pages with additional meta data |

The above variables are used in one of two function calls

#### Identify
This function is computed in the header.php file after the values are assigned in the main

    $nl = "\r\n"; //new line
    $call = new Klaviyo(); //initialise Klaviyo class

    //script for tracking logged in user activity
    $script = '<script async type="text/javascript" src="//static.klaviyo.com/onsite/js/klaviyo.js?company_id='.$call->returnPublicKey().'"></script>'.$nl;
    $script .= "<script>".$nl;
    $script .= "var _learnq = _learnq || [];".$nl;
    $script .= "_learnq.push(['identify', {".$nl;
    $script .= "'$"."email' : '".$user->data()->email."',".$nl;
    $script .= "'$"."first_name' : '".$user->data()->fname."',".$nl;
    $script .= "'$"."last_name' : '".$user->data()->lname."',".$nl;
    $script .= "}]);".$nl.$nl;

#### Track
Like the identity call described above, this function is also computed in the header.php.  

Unlike the above function however, there may be X number of additional parameters required for tracking; for this reason $pageview_attr is looped through to determine both the attribute name and attribute value

    script .= "_learnq.push(['track', 'Page View', {".$nl;
    $script .= "'url' : '".$_SERVER['REQUEST_URI']."',".$nl;
    $script .= "'pageTitle' : '".$pageTitle."',".$nl;
    $script .= "'journey' : '".$journey."',".$nl;
    $script .= "'journeyStep' : '".$journeyStep."'";

    //add additional page view attributes automatically
    foreach ($pageview_attr as [$attr, $val]) {

        $script .= ",".$nl." '".$attr."' : '".$val."'";
    }

    $script .= $nl."}]);".$nl;
    $script .= "</script>".$nl;
