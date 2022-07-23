<?php
require_once '../../users/init.php'; //initialisation script
if (!$user->isLoggedIn()) { //if already logged in, redirect
    Redirect::to($us_url_root.'index.php');
}
?>
<!DOCTYPE html>
<html lang="en" class="wf-proximanova-n7-active wf-proximanova-i7-active wf-proximanova-n6-active wf-proximanova-n4-active wf-proximanova-i4-active wf-active ADS-24-Outline-events-icons-ready ADS-20-Fill-events-icons-ready ADS-24-Fill-events-icons-ready kl-events-icons-ready ADS-16-Fill-events-icons-ready ADS-16-Outline-events-icons-ready">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <title>Kla | <?php echo $pageTitle; ?></title>
      <link rel="stylesheet" href="https://www.klaviyo.com/media/css/public_v4/base.css?v=3db444d">
      <script src="https://use.fortawesome.com/d537f022.js"></script>
    <script src="https://use.typekit.net/lfn1kdd.js"></script>
    <script>try{Typekit.load({ async: false });}catch(e){}</script>
      <link rel="shortcut icon" href="https://www.klaviyo.com/media/Favicon-16by16.png">
      <meta name="description" content="Klaviyo is email platform powered by data built for commerce and web businesses.">
      <meta name="author" content="Klaviyo">
      <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
      <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      <!-- <link href="css/straps.css?v=eed3f46" rel="stylesheet">
      <link rel="stylesheet" href="css/dashboard.css?v=eed3f46"> -->
      <!-- <script src="//use.typekit.net/xof6qxk.js"></script>
      <style type="text/css">.tk-proxima-nova{font-family:"proxima-nova",sans-serif;}</style>
      <style type="text/css">@font-face{font-family:proxima-nova;src:url(https://use.typekit.net/af/7d485b/00000000000000003b9ad1b1/27/l?subset_id=2&fvd=n7&v=3) format("woff2"),url(https://use.typekit.net/af/7d485b/00000000000000003b9ad1b1/27/d?subset_id=2&fvd=n7&v=3) format("woff"),url(https://use.typekit.net/af/7d485b/00000000000000003b9ad1b1/27/a?subset_id=2&fvd=n7&v=3) format("opentype");font-weight:700;font-style:normal;font-stretch:normal;font-display:auto;}@font-face{font-family:proxima-nova;src:url(https://use.typekit.net/af/347aea/00000000000000003b9ad1b2/27/l?subset_id=2&fvd=i7&v=3) format("woff2"),url(https://use.typekit.net/af/347aea/00000000000000003b9ad1b2/27/d?subset_id=2&fvd=i7&v=3) format("woff"),url(https://use.typekit.net/af/347aea/00000000000000003b9ad1b2/27/a?subset_id=2&fvd=i7&v=3) format("opentype");font-weight:700;font-style:italic;font-stretch:normal;font-display:auto;}@font-face{font-family:proxima-nova;src:url(https://use.typekit.net/af/04b81b/00000000000000003b9ad1bb/27/l?subset_id=2&fvd=n6&v=3) format("woff2"),url(https://use.typekit.net/af/04b81b/00000000000000003b9ad1bb/27/d?subset_id=2&fvd=n6&v=3) format("woff"),url(https://use.typekit.net/af/04b81b/00000000000000003b9ad1bb/27/a?subset_id=2&fvd=n6&v=3) format("opentype");font-weight:600;font-style:normal;font-stretch:normal;font-display:auto;}@font-face{font-family:proxima-nova;src:url(https://use.typekit.net/af/c9cde8/00000000000000003b9ad1b9/27/l?subset_id=2&fvd=n4&v=3) format("woff2"),url(https://use.typekit.net/af/c9cde8/00000000000000003b9ad1b9/27/d?subset_id=2&fvd=n4&v=3) format("woff"),url(https://use.typekit.net/af/c9cde8/00000000000000003b9ad1b9/27/a?subset_id=2&fvd=n4&v=3) format("opentype");font-weight:400;font-style:normal;font-stretch:normal;font-display:auto;}@font-face{font-family:proxima-nova;src:url(https://use.typekit.net/af/4ba64f/00000000000000003b9ad1ba/27/l?subset_id=2&fvd=i4&v=3) format("woff2"),url(https://use.typekit.net/af/4ba64f/00000000000000003b9ad1ba/27/d?subset_id=2&fvd=i4&v=3) format("woff"),url(https://use.typekit.net/af/4ba64f/00000000000000003b9ad1ba/27/a?subset_id=2&fvd=i4&v=3) format("opentype");font-weight:400;font-style:italic;font-stretch:normal;font-display:auto;}</style> -->
      <!-- <link href="css/app.css?v=eed3f46" rel="stylesheet">
      <link href="css/support.css?v=eed3f46" rel="stylesheet"> -->
      <style>.tippy-touch{cursor:pointer!important}.tippy-notransition{transition:none!important}.tippy-popper{max-width:400px;-webkit-perspective:800px;perspective:800px;z-index:9999;outline:0;transition-timing-function:cubic-bezier(.165,.84,.44,1);pointer-events:none}.tippy-popper.html-template{max-width:96%;max-width:calc(100% - 20px)}.tippy-popper[x-placement^=top] [x-arrow]{border-top:7px solid #333;border-right:7px solid transparent;border-left:7px solid transparent;bottom:-7px;margin:0 9px}.tippy-popper[x-placement^=top] [x-arrow].arrow-small{border-top:5px solid #333;border-right:5px solid transparent;border-left:5px solid transparent;bottom:-5px}.tippy-popper[x-placement^=top] [x-arrow].arrow-big{border-top:10px solid #333;border-right:10px solid transparent;border-left:10px solid transparent;bottom:-10px}.tippy-popper[x-placement^=top] [x-circle]{-webkit-transform-origin:0 33%;transform-origin:0 33%}.tippy-popper[x-placement^=top] [x-circle].enter{-webkit-transform:scale(1) translate(-50%,-55%);transform:scale(1) translate(-50%,-55%);opacity:1}.tippy-popper[x-placement^=top] [x-circle].leave{-webkit-transform:scale(.15) translate(-50%,-50%);transform:scale(.15) translate(-50%,-50%);opacity:0}.tippy-popper[x-placement^=top] .tippy-tooltip.light-theme [x-circle]{background-color:#fff}.tippy-popper[x-placement^=top] .tippy-tooltip.light-theme [x-arrow]{border-top:7px solid #fff;border-right:7px solid transparent;border-left:7px solid transparent}.tippy-popper[x-placement^=top] .tippy-tooltip.light-theme [x-arrow].arrow-small{border-top:5px solid #fff;border-right:5px solid transparent;border-left:5px solid transparent}.tippy-popper[x-placement^=top] .tippy-tooltip.light-theme [x-arrow].arrow-big{border-top:10px solid #fff;border-right:10px solid transparent;border-left:10px solid transparent}.tippy-popper[x-placement^=top] .tippy-tooltip.transparent-theme [x-circle]{background-color:rgba(0,0,0,.7)}.tippy-popper[x-placement^=top] .tippy-tooltip.transparent-theme [x-arrow]{border-top:7px solid rgba(0,0,0,.7);border-right:7px solid transparent;border-left:7px solid transparent}.tippy-popper[x-placement^=top] .tippy-tooltip.transparent-theme [x-arrow].arrow-small{border-top:5px solid rgba(0,0,0,.7);border-right:5px solid transparent;border-left:5px solid transparent}.tippy-popper[x-placement^=top] .tippy-tooltip.transparent-theme [x-arrow].arrow-big{border-top:10px solid rgba(0,0,0,.7);border-right:10px solid transparent;border-left:10px solid transparent}.tippy-popper[x-placement^=top] [data-animation=perspective]{-webkit-transform-origin:bottom;transform-origin:bottom}.tippy-popper[x-placement^=top] [data-animation=perspective].enter{opacity:1;-webkit-transform:translateY(-10px) rotateX(0);transform:translateY(-10px) rotateX(0)}.tippy-popper[x-placement^=top] [data-animation=perspective].leave{opacity:0;-webkit-transform:translateY(0) rotateX(90deg);transform:translateY(0) rotateX(90deg)}.tippy-popper[x-placement^=top] [data-animation=fade].enter{opacity:1;-webkit-transform:translateY(-10px);transform:translateY(-10px)}.tippy-popper[x-placement^=top] [data-animation=fade].leave{opacity:0;-webkit-transform:translateY(-10px);transform:translateY(-10px)}.tippy-popper[x-placement^=top] [data-animation=shift].enter{opacity:1;-webkit-transform:translateY(-10px);transform:translateY(-10px)}.tippy-popper[x-placement^=top] [data-animation=shift].leave{opacity:0;-webkit-transform:translateY(0);transform:translateY(0)}.tippy-popper[x-placement^=top] [data-animation=scale].enter{opacity:1;-webkit-transform:translateY(-10px) scale(1);transform:translateY(-10px) scale(1)}.tippy-popper[x-placement^=top] [data-animation=scale].leave{opacity:0;-webkit-transform:translateY(0) scale(0);transform:translateY(0) scale(0)}.tippy-popper[x-placement^=bottom] [x-arrow]{border-bottom:7px solid #333;border-right:7px solid transparent;border-left:7px solid transparent;top:-7px;margin:0 9px}.tippy-popper[x-placement^=bottom] [x-arrow].arrow-small{border-bottom:5px solid #333;border-right:5px solid transparent;border-left:5px solid transparent;top:-5px}.tippy-popper[x-placement^=bottom] [x-arrow].arrow-big{border-bottom:10px solid #333;border-right:10px solid transparent;border-left:10px solid transparent;top:-10px}.tippy-popper[x-placement^=bottom] [x-circle]{-webkit-transform-origin:0 -50%;transform-origin:0 -50%}.tippy-popper[x-placement^=bottom] [x-circle].enter{-webkit-transform:scale(1) translate(-50%,-45%);transform:scale(1) translate(-50%,-45%);opacity:1}.tippy-popper[x-placement^=bottom] [x-circle].leave{-webkit-transform:scale(.15) translate(-50%,-5%);transform:scale(.15) translate(-50%,-5%);opacity:0}.tippy-popper[x-placement^=bottom] .tippy-tooltip.light-theme [x-circle]{background-color:#fff}.tippy-popper[x-placement^=bottom] .tippy-tooltip.light-theme [x-arrow]{border-bottom:7px solid #fff;border-right:7px solid transparent;border-left:7px solid transparent}.tippy-popper[x-placement^=bottom] .tippy-tooltip.light-theme [x-arrow].arrow-small{border-bottom:5px solid #fff;border-right:5px solid transparent;border-left:5px solid transparent}.tippy-popper[x-placement^=bottom] .tippy-tooltip.light-theme [x-arrow].arrow-big{border-bottom:10px solid #fff;border-right:10px solid transparent;border-left:10px solid transparent}.tippy-popper[x-placement^=bottom] .tippy-tooltip.transparent-theme [x-circle]{background-color:rgba(0,0,0,.7)}.tippy-popper[x-placement^=bottom] .tippy-tooltip.transparent-theme [x-arrow]{border-bottom:7px solid rgba(0,0,0,.7);border-right:7px solid transparent;border-left:7px solid transparent}.tippy-popper[x-placement^=bottom] .tippy-tooltip.transparent-theme [x-arrow].arrow-small{border-bottom:5px solid rgba(0,0,0,.7);border-right:5px solid transparent;border-left:5px solid transparent}.tippy-popper[x-placement^=bottom] .tippy-tooltip.transparent-theme [x-arrow].arrow-big{border-bottom:10px solid rgba(0,0,0,.7);border-right:10px solid transparent;border-left:10px solid transparent}.tippy-popper[x-placement^=bottom] [data-animation=perspective]{-webkit-transform-origin:top;transform-origin:top}.tippy-popper[x-placement^=bottom] [data-animation=perspective].enter{opacity:1;-webkit-transform:translateY(10px) rotateX(0);transform:translateY(10px) rotateX(0)}.tippy-popper[x-placement^=bottom] [data-animation=perspective].leave{opacity:0;-webkit-transform:translateY(0) rotateX(-90deg);transform:translateY(0) rotateX(-90deg)}.tippy-popper[x-placement^=bottom] [data-animation=fade].enter{opacity:1;-webkit-transform:translateY(10px);transform:translateY(10px)}.tippy-popper[x-placement^=bottom] [data-animation=fade].leave{opacity:0;-webkit-transform:translateY(10px);transform:translateY(10px)}.tippy-popper[x-placement^=bottom] [data-animation=shift].enter{opacity:1;-webkit-transform:translateY(10px);transform:translateY(10px)}.tippy-popper[x-placement^=bottom] [data-animation=shift].leave{opacity:0;-webkit-transform:translateY(0);transform:translateY(0)}.tippy-popper[x-placement^=bottom] [data-animation=scale].enter{opacity:1;-webkit-transform:translateY(10px) scale(1);transform:translateY(10px) scale(1)}.tippy-popper[x-placement^=bottom] [data-animation=scale].leave{opacity:0;-webkit-transform:translateY(0) scale(0);transform:translateY(0) scale(0)}.tippy-popper[x-placement^=left] [x-arrow]{border-left:7px solid #333;border-top:7px solid transparent;border-bottom:7px solid transparent;right:-7px;margin:6px 0}.tippy-popper[x-placement^=left] [x-arrow].arrow-small{border-left:5px solid #333;border-top:5px solid transparent;border-bottom:5px solid transparent;right:-5px}.tippy-popper[x-placement^=left] [x-arrow].arrow-big{border-left:10px solid #333;border-top:10px solid transparent;border-bottom:10px solid transparent;right:-10px}.tippy-popper[x-placement^=left] [x-circle]{-webkit-transform-origin:50% 0;transform-origin:50% 0}.tippy-popper[x-placement^=left] [x-circle].enter{-webkit-transform:scale(1) translate(-50%,-50%);transform:scale(1) translate(-50%,-50%);opacity:1}.tippy-popper[x-placement^=left] [x-circle].leave{-webkit-transform:scale(.15) translate(-50%,-50%);transform:scale(.15) translate(-50%,-50%);opacity:0}.tippy-popper[x-placement^=left] .tippy-tooltip.light-theme [x-circle]{background-color:#fff}.tippy-popper[x-placement^=left] .tippy-tooltip.light-theme [x-arrow]{border-left:7px solid #fff;border-top:7px solid transparent;border-bottom:7px solid transparent}.tippy-popper[x-placement^=left] .tippy-tooltip.light-theme [x-arrow].arrow-small{border-left:5px solid #fff;border-top:5px solid transparent;border-bottom:5px solid transparent}.tippy-popper[x-placement^=left] .tippy-tooltip.light-theme [x-arrow].arrow-big{border-left:10px solid #fff;border-top:10px solid transparent;border-bottom:10px solid transparent}.tippy-popper[x-placement^=left] .tippy-tooltip.transparent-theme [x-circle]{background-color:rgba(0,0,0,.7)}.tippy-popper[x-placement^=left] .tippy-tooltip.transparent-theme [x-arrow]{border-left:7px solid rgba(0,0,0,.7);border-top:7px solid transparent;border-bottom:7px solid transparent}.tippy-popper[x-placement^=left] .tippy-tooltip.transparent-theme [x-arrow].arrow-small{border-left:5px solid rgba(0,0,0,.7);border-top:5px solid transparent;border-bottom:5px solid transparent}.tippy-popper[x-placement^=left] .tippy-tooltip.transparent-theme [x-arrow].arrow-big{border-left:10px solid rgba(0,0,0,.7);border-top:10px solid transparent;border-bottom:10px solid transparent}.tippy-popper[x-placement^=left] [data-animation=perspective]{-webkit-transform-origin:right;transform-origin:right}.tippy-popper[x-placement^=left] [data-animation=perspective].enter{opacity:1;-webkit-transform:translateX(-10px) rotateY(0);transform:translateX(-10px) rotateY(0)}.tippy-popper[x-placement^=left] [data-animation=perspective].leave{opacity:0;-webkit-transform:translateX(0) rotateY(-90deg);transform:translateX(0) rotateY(-90deg)}.tippy-popper[x-placement^=left] [data-animation=fade].enter{opacity:1;-webkit-transform:translateX(-10px);transform:translateX(-10px)}.tippy-popper[x-placement^=left] [data-animation=fade].leave{opacity:0;-webkit-transform:translateX(-10px);transform:translateX(-10px)}.tippy-popper[x-placement^=left] [data-animation=shift].enter{opacity:1;-webkit-transform:translateX(-10px);transform:translateX(-10px)}.tippy-popper[x-placement^=left] [data-animation=shift].leave{opacity:0;-webkit-transform:translateX(0);transform:translateX(0)}.tippy-popper[x-placement^=left] [data-animation=scale].enter{opacity:1;-webkit-transform:translateX(-10px) scale(1);transform:translateX(-10px) scale(1)}.tippy-popper[x-placement^=left] [data-animation=scale].leave{opacity:0;-webkit-transform:translateX(0) scale(0);transform:translateX(0) scale(0)}.tippy-popper[x-placement^=right] [x-arrow]{border-right:7px solid #333;border-top:7px solid transparent;border-bottom:7px solid transparent;left:-7px;margin:6px 0}.tippy-popper[x-placement^=right] [x-arrow].arrow-small{border-right:5px solid #333;border-top:5px solid transparent;border-bottom:5px solid transparent;left:-5px}.tippy-popper[x-placement^=right] [x-arrow].arrow-big{border-right:10px solid #333;border-top:10px solid transparent;border-bottom:10px solid transparent;left:-10px}.tippy-popper[x-placement^=right] [x-circle]{-webkit-transform-origin:-50% 0;transform-origin:-50% 0}.tippy-popper[x-placement^=right] [x-circle].enter{-webkit-transform:scale(1) translate(-50%,-50%);transform:scale(1) translate(-50%,-50%);opacity:1}.tippy-popper[x-placement^=right] [x-circle].leave{-webkit-transform:scale(.15) translate(-50%,-50%);transform:scale(.15) translate(-50%,-50%);opacity:0}.tippy-popper[x-placement^=right] .tippy-tooltip.light-theme [x-circle]{background-color:#fff}.tippy-popper[x-placement^=right] .tippy-tooltip.light-theme [x-arrow]{border-right:7px solid #fff;border-top:7px solid transparent;border-bottom:7px solid transparent}.tippy-popper[x-placement^=right] .tippy-tooltip.light-theme [x-arrow].arrow-small{border-right:5px solid #fff;border-top:5px solid transparent;border-bottom:5px solid transparent}.tippy-popper[x-placement^=right] .tippy-tooltip.light-theme [x-arrow].arrow-big{border-right:10px solid #fff;border-top:10px solid transparent;border-bottom:10px solid transparent}.tippy-popper[x-placement^=right] .tippy-tooltip.transparent-theme [x-circle]{background-color:rgba(0,0,0,.7)}.tippy-popper[x-placement^=right] .tippy-tooltip.transparent-theme [x-arrow]{border-right:7px solid rgba(0,0,0,.7);border-top:7px solid transparent;border-bottom:7px solid transparent}.tippy-popper[x-placement^=right] .tippy-tooltip.transparent-theme [x-arrow].arrow-small{border-right:5px solid rgba(0,0,0,.7);border-top:5px solid transparent;border-bottom:5px solid transparent}.tippy-popper[x-placement^=right] .tippy-tooltip.transparent-theme [x-arrow].arrow-big{border-right:10px solid rgba(0,0,0,.7);border-top:10px solid transparent;border-bottom:10px solid transparent}.tippy-popper[x-placement^=right] [data-animation=perspective]{-webkit-transform-origin:left;transform-origin:left}.tippy-popper[x-placement^=right] [data-animation=perspective].enter{opacity:1;-webkit-transform:translateX(10px) rotateY(0);transform:translateX(10px) rotateY(0)}.tippy-popper[x-placement^=right] [data-animation=perspective].leave{opacity:0;-webkit-transform:translateX(0) rotateY(90deg);transform:translateX(0) rotateY(90deg)}.tippy-popper[x-placement^=right] [data-animation=fade].enter{opacity:1;-webkit-transform:translateX(10px);transform:translateX(10px)}.tippy-popper[x-placement^=right] [data-animation=fade].leave{opacity:0;-webkit-transform:translateX(10px);transform:translateX(10px)}.tippy-popper[x-placement^=right] [data-animation=shift].enter{opacity:1;-webkit-transform:translateX(10px);transform:translateX(10px)}.tippy-popper[x-placement^=right] [data-animation=shift].leave{opacity:0;-webkit-transform:translateX(0);transform:translateX(0)}.tippy-popper[x-placement^=right] [data-animation=scale].enter{opacity:1;-webkit-transform:translateX(10px) scale(1);transform:translateX(10px) scale(1)}.tippy-popper[x-placement^=right] [data-animation=scale].leave{opacity:0;-webkit-transform:translateX(0) scale(0);transform:translateX(0) scale(0)}.tippy-popper .tippy-tooltip.transparent-theme{background-color:rgba(0,0,0,.7)}.tippy-popper .tippy-tooltip.transparent-theme[data-animatefill]{background-color:transparent}.tippy-popper .tippy-tooltip.light-theme{color:#26323d;box-shadow:0 4px 20px 4px rgba(0,20,60,.1),0 4px 80px -8px rgba(0,20,60,.2);background-color:#fff}.tippy-popper .tippy-tooltip.light-theme[data-animatefill]{background-color:transparent}.tippy-tooltip{position:relative;color:#fff;border-radius:4px;font-size:.95rem;padding:.4rem .8rem;text-align:center;will-change:transform;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;background-color:#333}.tippy-tooltip--small{padding:.25rem .5rem;font-size:.8rem}.tippy-tooltip--big{padding:.6rem 1.2rem;font-size:1.2rem}.tippy-tooltip[data-animatefill]{overflow:hidden;background-color:transparent}.tippy-tooltip[data-interactive]{pointer-events:auto}.tippy-tooltip[data-inertia]{transition-timing-function:cubic-bezier(.53,2,.36,.85)}.tippy-tooltip [x-arrow]{position:absolute;width:0;height:0}.tippy-tooltip [x-circle]{position:absolute;will-change:transform;background-color:#333;border-radius:50%;width:130%;width:calc(110% + 2rem);left:50%;top:50%;z-index:-1;overflow:hidden;transition:all ease}.tippy-tooltip [x-circle]:before{content:"";padding-top:90%;float:left}@media (max-width:450px){.tippy-popper{max-width:96%;max-width:calc(100% - 20px)}}
         /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uLy4uLy4uLy4uLy55YXJuL2NhY2hlL3JlYWN0LXRpcHB5LW5wbS0xLjQuMC0yNjVhNGMwZDA4LWNiZTM4NjNlZDguemlwL25vZGVfbW9kdWxlcy9yZWFjdC10aXBweS9kaXN0L3RpcHB5LmNzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQSxhQUFhLHdCQUF3QixDQUFDLG9CQUFvQix5QkFBeUIsQ0FBQyxjQUFjLGVBQWUsQ0FBQyx5QkFBeUIsQ0FBQyxpQkFBaUIsQ0FBQyxZQUFZLENBQUMsU0FBUyxDQUFDLHVEQUF1RCxDQUFDLG1CQUFtQixDQUFDLDRCQUE0QixhQUFhLENBQUMsMkJBQTJCLENBQUMsMENBQTBDLHlCQUF5QixDQUFDLGtDQUFrQyxDQUFDLGlDQUFpQyxDQUFDLFdBQVcsQ0FBQyxZQUFZLENBQUMsc0RBQXNELHlCQUF5QixDQUFDLGtDQUFrQyxDQUFDLGlDQUFpQyxDQUFDLFdBQVcsQ0FBQyxvREFBb0QsMEJBQTBCLENBQUMsbUNBQW1DLENBQUMsa0NBQWtDLENBQUMsWUFBWSxDQUFDLDJDQUEyQyw4QkFBOEIsQ0FBQyxzQkFBc0IsQ0FBQyxpREFBaUQsK0NBQStDLENBQUMsdUNBQXVDLENBQUMsU0FBUyxDQUFDLGlEQUFpRCxpREFBaUQsQ0FBQyx5Q0FBeUMsQ0FBQyxTQUFTLENBQUMsc0VBQXNFLHFCQUFxQixDQUFDLHFFQUFxRSx5QkFBeUIsQ0FBQyxrQ0FBa0MsQ0FBQyxpQ0FBaUMsQ0FBQyxpRkFBaUYseUJBQXlCLENBQUMsa0NBQWtDLENBQUMsaUNBQWlDLENBQUMsK0VBQStFLDBCQUEwQixDQUFDLG1DQUFtQyxDQUFDLGtDQUFrQyxDQUFDLDRFQUE0RSwrQkFBK0IsQ0FBQywyRUFBMkUsbUNBQW1DLENBQUMsa0NBQWtDLENBQUMsaUNBQWlDLENBQUMsdUZBQXVGLG1DQUFtQyxDQUFDLGtDQUFrQyxDQUFDLGlDQUFpQyxDQUFDLHFGQUFxRixvQ0FBb0MsQ0FBQyxtQ0FBbUMsQ0FBQyxrQ0FBa0MsQ0FB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QyxpQkFBaUIsQ0FBQyxVQUFVLENBQUMsdUJBQXVCLENBQUMsUUFBUSxDQUFDLE9BQU8sQ0FBQyxVQUFVLENBQUMsZUFBZSxDQUFDLG1CQUFtQixDQUFDLGlDQUFpQyxVQUFVLENBQUMsZUFBZSxDQUFDLFVBQVUsQ0FBQyx5QkFBeUIsY0FBYyxhQUFhLENBQUMsMkJBQTJCLENBQUMiLCJzb3VyY2VzQ29udGVudCI6WyIudGlwcHktdG91Y2h7Y3Vyc29yOnBvaW50ZXIhaW1wb3J0YW50fS50aXBweS1ub3RyYW5zaXRpb257dHJhbnNpdGlvbjpub25lIWltcG9ydGFudH0udGlwcHktcG9wcGVye21heC13aWR0aDo0MDBweDstd2Via2l0LXBlcnNwZWN0aXZlOjgwMHB4O3BlcnNwZWN0aXZlOjgwMHB4O3otaW5kZXg6OTk5OTtvdXRsaW5lOjA7dHJhbnNpdGlvbi10aW1pbmctZnVuY3Rpb246Y3ViaWMtYmV6aWVyKC4xNjUsLjg0LC40NCwxKTtwb2ludGVyLWV2ZW50czpub25lfS50aXBweS1wb3BwZXIuaHRtbC10ZW1wbGF0ZXttYXgtd2lkdGg6OTYlO21heC13aWR0aDpjYWxjKDEwMCUgLSAyMHB4KX0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj10b3BdIFt4LWFycm93XXtib3JkZXItdG9wOjdweCBzb2xpZCAjMzMzO2JvcmRlci1yaWdodDo3cHggc29saWQgdHJhbnNwYXJlbnQ7Ym9yZGVyLWxlZnQ6N3B4IHNvbGlkIHRyYW5zcGFyZW50O2JvdHRvbTotN3B4O21hcmdpbjowIDlweH0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj10b3BdIFt4LWFycm93XS5hcnJvdy1zbWFsbHtib3JkZXItdG9wOjVweCBzb2xpZCAjMzMzO2JvcmRlci1yaWdodDo1cHggc29saWQgdHJhbnNwYXJlbnQ7Ym9yZGVyLWxlZnQ6NXB4IHNvbGlkIHRyYW5zcGFyZW50O2JvdHRvbTotNXB4fS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePXRvcF0gW3gtYXJyb3ddLmFycm93LWJpZ3tib3JkZXItdG9wOjEwcHggc29saWQgIzMzMztib3JkZXItcmlnaHQ6MTBweCBzb2xpZCB0cmFuc3BhcmVudDtib3JkZXItbGVmdDoxMHB4IHNvbGlkIHRyYW5zcGFyZW50O2JvdHRvbTotMTBweH0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj10b3BdIFt4LWNpcmNsZV17LXdlYmtpdC10cmFuc2Zvcm0tb3JpZ2luOjAgMzMlO3RyYW5zZm9ybS1vcmlnaW46MCAzMyV9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49dG9wXSBbeC1jaXJjbGVdLmVudGVyey13ZWJraXQtdHJhbnNmb3JtOnNjYWxlKDEpIHRyYW5zbGF0ZSgtNTAlLC01NSUpO3RyYW5zZm9ybTpzY2FsZSgxKSB0cmFuc2xhdGUoLTUwJSwtNTUlKTtvcGFjaXR5OjF9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49dG9wXSBbeC1jaXJjbGVdLmxlYXZley13ZWJraXQtdHJhbnNmb3JtOnNjYWxlKC4xNSkgdHJhbnNsYXRlKC01MCUsLTUwJSk7dHJhbnNmb3JtOnNjYWxlKC4xNSkgdHJhbnNsYXRlKC01MCUsLTUwJSk7b3BhY2l0eTowfS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePXRvcF0gLnRpcHB5LXRvb2x0aXAubGlnaHQtdGhlbWUgW3gtY2lyY2xlXXtiYWNrZ3JvdW5kLWNvbG9yOiNmZmZ9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49dG9wXSAudGlwcHktdG9vbHRpcC5saWdodC10aGVtZSBbeC1hcnJvd117Ym9yZGVyLXRvcDo3cHggc29saWQgI2ZmZjtib3JkZXItcmlnaHQ6N3B4IHNvbGlkIHRyYW5zcGFyZW50O2JvcmRlci1sZWZ0OjdweCBzb2xpZCB0cmFuc3BhcmVudH0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj10b3BdIC50aXBweS10b29sdGlwLmxpZ2h0LXRoZW1lIFt4LWFycm93XS5hcnJvdy1zbWFsbHtib3JkZXItdG9wOjVweCBzb2xpZCAjZmZmO2JvcmRlci1yaWdodDo1cHggc29saWQgdHJhbnNwYXJlbnQ7Ym9yZGVyLWxlZnQ6NXB4IHNvbGlkIHRyYW5zcGFyZW50fS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePXRvcF0gLnRpcHB5LXRvb2x0aXAubGlnaHQtdGhlbWUgW3gtYXJyb3ddLmFycm93LWJpZ3tib3JkZXItdG9wOjEwcHggc29saWQgI2ZmZjtib3JkZXItcmlnaHQ6MTBweCBzb2xpZCB0cmFuc3BhcmVudDtib3JkZXItbGVmdDoxMHB4IHNvbGlkIHRyYW5zcGFyZW50fS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePXRvcF0gLnRpcHB5LXRvb2x0aXAudHJhbnNwYXJlbnQtdGhlbWUgW3gtY2lyY2xlXXtiYWNrZ3JvdW5kLWNvbG9yOnJnYmEoMCwwLDAsLjcpfS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePXRvcF0gLnRpcHB5LXRvb2x0aXAudHJhbnNwYXJlbnQtdGhlbWUgW3gtYXJyb3dde2JvcmRlci10b3A6N3B4IHNvbGlkIHJnYmEoMCwwLDAsLjcpO2JvcmRlci1yaWdodDo3cHggc29saWQgdHJhbnNwYXJlbnQ7Ym9yZGVyLWxlZnQ6N3B4IHNvbGlkIHRyYW5zcGFyZW50fS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePXRvcF0gLnRpcHB5LXRvb2x0aXAudHJhbnNwYXJlbnQtdGhlbWUgW3gtYXJyb3ddLmFycm93LXNtYWxse2JvcmRlci10b3A6NXB4IHNvbGlkIHJnYmEoMCwwLDAsLjcpO2JvcmRlci1yaWdodDo1cHggc29saWQgdHJhbnNwYXJlbnQ7Ym9yZGVyLWxlZnQ6NXB4IHNvbGlkIHRyYW5zcGFyZW50fS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePXRvcF0gLnRpcHB5LXRvb2x0aXAudHJhbnNwYXJlbnQtdGhlbWUgW3gtYXJyb3ddLmFycm93LWJpZ3tib3JkZXItdG9wOjEwcHggc29saWQgcmdiYSgwLDAsMCwuNyk7Ym9yZGVyLXJpZ2h0OjEwcHggc29saWQgdHJhbnNwYXJlbnQ7Ym9yZGVyLWxlZnQ6MTBweCBzb2xpZCB0cmFuc3BhcmVudH0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj10b3BdIFtkYXRhLWFuaW1hdGlvbj1wZXJzcGVjdGl2ZV17LXdlYmtpdC10cmFuc2Zvcm0tb3JpZ2luOmJvdHRvbTt0cmFuc2Zvcm0tb3JpZ2luOmJvdHRvbX0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj10b3BdIFtkYXRhLWFuaW1hdGlvbj1wZXJzcGVjdGl2ZV0uZW50ZXJ7b3BhY2l0eToxOy13ZWJraXQtdHJhbnNmb3JtOnRyYW5zbGF0ZVkoLTEwcHgpIHJvdGF0ZVgoMCk7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoLTEwcHgpIHJvdGF0ZVgoMCl9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49dG9wXSBbZGF0YS1hbmltYXRpb249cGVyc3BlY3RpdmVdLmxlYXZle29wYWNpdHk6MDstd2Via2l0LXRyYW5zZm9ybTp0cmFuc2xhdGVZKDApIHJvdGF0ZVgoOTBkZWcpO3RyYW5zZm9ybTp0cmFuc2xhdGVZKDApIHJvdGF0ZVgoOTBkZWcpfS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePXRvcF0gW2RhdGEtYW5pbWF0aW9uPWZhZGVdLmVudGVye29wYWNpdHk6MTstd2Via2l0LXRyYW5zZm9ybTp0cmFuc2xhdGVZKC0xMHB4KTt0cmFuc2Zvcm06dHJhbnNsYXRlWSgtMTBweCl9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49dG9wXSBbZGF0YS1hbmltYXRpb249ZmFkZV0ubGVhdmV7b3BhY2l0eTowOy13ZWJraXQtdHJhbnNmb3JtOnRyYW5zbGF0ZVkoLTEwcHgpO3RyYW5zZm9ybTp0cmFuc2xhdGVZKC0xMHB4KX0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj10b3BdIFtkYXRhLWFuaW1hdGlvbj1zaGlmdF0uZW50ZXJ7b3BhY2l0eToxOy13ZWJraXQtdHJhbnNmb3JtOnRyYW5zbGF0ZVkoLTEwcHgpO3RyYW5zZm9ybTp0cmFuc2xhdGVZKC0xMHB4KX0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj10b3BdIFtkYXRhLWFuaW1hdGlvbj1zaGlmdF0ubGVhdmV7b3BhY2l0eTowOy13ZWJraXQtdHJhbnNmb3JtOnRyYW5zbGF0ZVkoMCk7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoMCl9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49dG9wXSBbZGF0YS1hbmltYXRpb249c2NhbGVdLmVudGVye29wYWNpdHk6MTstd2Via2l0LXRyYW5zZm9ybTp0cmFuc2xhdGVZKC0xMHB4KSBzY2FsZSgxKTt0cmFuc2Zvcm06dHJhbnNsYXRlWSgtMTBweCkgc2NhbGUoMSl9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49dG9wXSBbZGF0YS1hbmltYXRpb249c2NhbGVdLmxlYXZle29wYWNpdHk6MDstd2Via2l0LXRyYW5zZm9ybTp0cmFuc2xhdGVZKDApIHNjYWxlKDApO3RyYW5zZm9ybTp0cmFuc2xhdGVZKDApIHNjYWxlKDApfS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePWJvdHRvbV0gW3gtYXJyb3dde2JvcmRlci1ib3R0b206N3B4IHNvbGlkICMzMzM7Ym9yZGVyLXJpZ2h0OjdweCBzb2xpZCB0cmFuc3BhcmVudDtib3JkZXItbGVmdDo3cHggc29saWQgdHJhbnNwYXJlbnQ7dG9wOi03cHg7bWFyZ2luOjAgOXB4fS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePWJvdHRvbV0gW3gtYXJyb3ddLmFycm93LXNtYWxse2JvcmRlci1ib3R0b206NXB4IHNvbGlkICMzMzM7Ym9yZGVyLXJpZ2h0OjVweCBzb2xpZCB0cmFuc3BhcmVudDtib3JkZXItbGVmdDo1cHggc29saWQgdHJhbnNwYXJlbnQ7dG9wOi01cHh9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49Ym90dG9tXSBbeC1hcnJvd10uYXJyb3ctYmlne2JvcmRlci1ib3R0b206MTBweCBzb2xpZCAjMzMzO2JvcmRlci1yaWdodDoxMHB4IHNvbGlkIHRyYW5zcGFyZW50O2JvcmRlci1sZWZ0OjEwcHggc29saWQgdHJhbnNwYXJlbnQ7dG9wOi0xMHB4fS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePWJvdHRvbV0gW3gtY2lyY2xlXXstd2Via2l0LXRyYW5zZm9ybS1vcmlnaW46MCAtNTAlO3RyYW5zZm9ybS1vcmlnaW46MCAtNTAlfS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePWJvdHRvbV0gW3gtY2lyY2xlXS5lbnRlcnstd2Via2l0LXRyYW5zZm9ybTpzY2FsZSgxKSB0cmFuc2xhdGUoLTUwJSwtNDUlKTt0cmFuc2Zvcm06c2NhbGUoMSkgdHJhbnNsYXRlKC01MCUsLTQ1JSk7b3BhY2l0eToxfS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePWJvdHRvbV0gW3gtY2lyY2xlXS5sZWF2ZXstd2Via2l0LXRyYW5zZm9ybTpzY2FsZSguMTUpIHRyYW5zbGF0ZSgtNTAlLC01JSk7dHJhbnNmb3JtOnNjYWxlKC4xNSkgdHJhbnNsYXRlKC01MCUsLTUlKTtvcGFjaXR5OjB9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49Ym90dG9tXSAudGlwcHktdG9vbHRpcC5saWdodC10aGVtZSBbeC1jaXJjbGVde2JhY2tncm91bmQtY29sb3I6I2ZmZn0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj1ib3R0b21dIC50aXBweS10b29sdGlwLmxpZ2h0LXRoZW1lIFt4LWFycm93XXtib3JkZXItYm90dG9tOjdweCBzb2xpZCAjZmZmO2JvcmRlci1yaWdodDo3cHggc29saWQgdHJhbnNwYXJlbnQ7Ym9yZGVyLWxlZnQ6N3B4IHNvbGlkIHRyYW5zcGFyZW50fS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePWJvdHRvbV0gLnRpcHB5LXRvb2x0aXAubGlnaHQtdGhlbWUgW3gtYXJyb3ddLmFycm93LXNtYWxse2JvcmRlci1ib3R0b206NXB4IHNvbGlkICNmZmY7Ym9yZGVyLXJpZ2h0OjVweCBzb2xpZCB0cmFuc3BhcmVudDtib3JkZXItbGVmdDo1cHggc29saWQgdHJhbnNwYXJlbnR9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49Ym90dG9tXSAudGlwcHktdG9vbHRpcC5saWdodC10aGVtZSBbeC1hcnJvd10uYXJyb3ctYmlne2JvcmRlci1ib3R0b206MTBweCBzb2xpZCAjZmZmO2JvcmRlci1yaWdodDoxMHB4IHNvbGlkIHRyYW5zcGFyZW50O2JvcmRlci1sZWZ0OjEwcHggc29saWQgdHJhbnNwYXJlbnR9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49Ym90dG9tXSAudGlwcHktdG9vbHRpcC50cmFuc3BhcmVudC10aGVtZSBbeC1jaXJjbGVde2JhY2tncm91bmQtY29sb3I6cmdiYSgwLDAsMCwuNyl9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49Ym90dG9tXSAudGlwcHktdG9vbHRpcC50cmFuc3BhcmVudC10aGVtZSBbeC1hcnJvd117Ym9yZGVyLWJvdHRvbTo3cHggc29saWQgcmdiYSgwLDAsMCwuNyk7Ym9yZGVyLXJpZ2h0OjdweCBzb2xpZCB0cmFuc3BhcmVudDtib3JkZXItbGVmdDo3cHggc29saWQgdHJhbnNwYXJlbnR9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49Ym90dG9tXSAudGlwcHktdG9vbHRpcC50cmFuc3BhcmVudC10aGVtZSBbeC1hcnJvd10uYXJyb3ctc21hbGx7Ym9yZGVyLWJvdHRvbTo1cHggc29saWQgcmdiYSgwLDAsMCwuNyk7Ym9yZGVyLXJpZ2h0OjVweCBzb2xpZCB0cmFuc3BhcmVudDtib3JkZXItbGVmdDo1cHggc29saWQgdHJhbnNwYXJlbnR9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49Ym90dG9tXSAudGlwcHktdG9vbHRpcC50cmFuc3BhcmVudC10aGVtZSBbeC1hcnJvd10uYXJyb3ctYmlne2JvcmRlci1ib3R0b206MTBweCBzb2xpZCByZ2JhKDAsMCwwLC43KTtib3JkZXItcmlnaHQ6MTBweCBzb2xpZCB0cmFuc3BhcmVudDtib3JkZXItbGVmdDoxMHB4IHNvbGlkIHRyYW5zcGFyZW50fS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePWJvdHRvbV0gW2RhdGEtYW5pbWF0aW9uPXBlcnNwZWN0aXZlXXstd2Via2l0LXRyYW5zZm9ybS1vcmlnaW46dG9wO3RyYW5zZm9ybS1vcmlnaW46dG9wfS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePWJvdHRvbV0gW2RhdGEtYW5pbWF0aW9uPXBlcnNwZWN0aXZlXS5lbnRlcntvcGFjaXR5OjE7LXdlYmtpdC10cmFuc2Zvcm06dHJhbnNsYXRlWSgxMHB4KSByb3RhdGVYKDApO3RyYW5zZm9ybTp0cmFuc2xhdGVZKDEwcHgpIHJvdGF0ZVgoMCl9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49Ym90dG9tXSBbZGF0YS1hbmltYXRpb249cGVyc3BlY3RpdmVdLmxlYXZle29wYWNpdHk6MDstd2Via2l0LXRyYW5zZm9ybTp0cmFuc2xhdGVZKDApIHJvdGF0ZVgoLTkwZGVnKTt0cmFuc2Zvcm06dHJhbnNsYXRlWSgwKSByb3RhdGVYKC05MGRlZyl9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49Ym90dG9tXSBbZGF0YS1hbmltYXRpb249ZmFkZV0uZW50ZXJ7b3BhY2l0eToxOy13ZWJraXQtdHJhbnNmb3JtOnRyYW5zbGF0ZVkoMTBweCk7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoMTBweCl9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49Ym90dG9tXSBbZGF0YS1hbmltYXRpb249ZmFkZV0ubGVhdmV7b3BhY2l0eTowOy13ZWJraXQtdHJhbnNmb3JtOnRyYW5zbGF0ZVkoMTBweCk7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoMTBweCl9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49Ym90dG9tXSBbZGF0YS1hbmltYXRpb249c2hpZnRdLmVudGVye29wYWNpdHk6MTstd2Via2l0LXRyYW5zZm9ybTp0cmFuc2xhdGVZKDEwcHgpO3RyYW5zZm9ybTp0cmFuc2xhdGVZKDEwcHgpfS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePWJvdHRvbV0gW2RhdGEtYW5pbWF0aW9uPXNoaWZ0XS5sZWF2ZXtvcGFjaXR5OjA7LXdlYmtpdC10cmFuc2Zvcm06dHJhbnNsYXRlWSgwKTt0cmFuc2Zvcm06dHJhbnNsYXRlWSgwKX0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj1ib3R0b21dIFtkYXRhLWFuaW1hdGlvbj1zY2FsZV0uZW50ZXJ7b3BhY2l0eToxOy13ZWJraXQtdHJhbnNmb3JtOnRyYW5zbGF0ZVkoMTBweCkgc2NhbGUoMSk7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoMTBweCkgc2NhbGUoMSl9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49Ym90dG9tXSBbZGF0YS1hbmltYXRpb249c2NhbGVdLmxlYXZle29wYWNpdHk6MDstd2Via2l0LXRyYW5zZm9ybTp0cmFuc2xhdGVZKDApIHNjYWxlKDApO3RyYW5zZm9ybTp0cmFuc2xhdGVZKDApIHNjYWxlKDApfS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePWxlZnRdIFt4LWFycm93XXtib3JkZXItbGVmdDo3cHggc29saWQgIzMzMztib3JkZXItdG9wOjdweCBzb2xpZCB0cmFuc3BhcmVudDtib3JkZXItYm90dG9tOjdweCBzb2xpZCB0cmFuc3BhcmVudDtyaWdodDotN3B4O21hcmdpbjo2cHggMH0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj1sZWZ0XSBbeC1hcnJvd10uYXJyb3ctc21hbGx7Ym9yZGVyLWxlZnQ6NXB4IHNvbGlkICMzMzM7Ym9yZGVyLXRvcDo1cHggc29saWQgdHJhbnNwYXJlbnQ7Ym9yZGVyLWJvdHRvbTo1cHggc29saWQgdHJhbnNwYXJlbnQ7cmlnaHQ6LTVweH0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj1sZWZ0XSBbeC1hcnJvd10uYXJyb3ctYmlne2JvcmRlci1sZWZ0OjEwcHggc29saWQgIzMzMztib3JkZXItdG9wOjEwcHggc29saWQgdHJhbnNwYXJlbnQ7Ym9yZGVyLWJvdHRvbToxMHB4IHNvbGlkIHRyYW5zcGFyZW50O3JpZ2h0Oi0xMHB4fS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePWxlZnRdIFt4LWNpcmNsZV17LXdlYmtpdC10cmFuc2Zvcm0tb3JpZ2luOjUwJSAwO3RyYW5zZm9ybS1vcmlnaW46NTAlIDB9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49bGVmdF0gW3gtY2lyY2xlXS5lbnRlcnstd2Via2l0LXRyYW5zZm9ybTpzY2FsZSgxKSB0cmFuc2xhdGUoLTUwJSwtNTAlKTt0cmFuc2Zvcm06c2NhbGUoMSkgdHJhbnNsYXRlKC01MCUsLTUwJSk7b3BhY2l0eToxfS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePWxlZnRdIFt4LWNpcmNsZV0ubGVhdmV7LXdlYmtpdC10cmFuc2Zvcm06c2NhbGUoLjE1KSB0cmFuc2xhdGUoLTUwJSwtNTAlKTt0cmFuc2Zvcm06c2NhbGUoLjE1KSB0cmFuc2xhdGUoLTUwJSwtNTAlKTtvcGFjaXR5OjB9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49bGVmdF0gLnRpcHB5LXRvb2x0aXAubGlnaHQtdGhlbWUgW3gtY2lyY2xlXXtiYWNrZ3JvdW5kLWNvbG9yOiNmZmZ9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49bGVmdF0gLnRpcHB5LXRvb2x0aXAubGlnaHQtdGhlbWUgW3gtYXJyb3dde2JvcmRlci1sZWZ0OjdweCBzb2xpZCAjZmZmO2JvcmRlci10b3A6N3B4IHNvbGlkIHRyYW5zcGFyZW50O2JvcmRlci1ib3R0b206N3B4IHNvbGlkIHRyYW5zcGFyZW50fS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePWxlZnRdIC50aXBweS10b29sdGlwLmxpZ2h0LXRoZW1lIFt4LWFycm93XS5hcnJvdy1zbWFsbHtib3JkZXItbGVmdDo1cHggc29saWQgI2ZmZjtib3JkZXItdG9wOjVweCBzb2xpZCB0cmFuc3BhcmVudDtib3JkZXItYm90dG9tOjVweCBzb2xpZCB0cmFuc3BhcmVudH0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj1sZWZ0XSAudGlwcHktdG9vbHRpcC5saWdodC10aGVtZSBbeC1hcnJvd10uYXJyb3ctYmlne2JvcmRlci1sZWZ0OjEwcHggc29saWQgI2ZmZjtib3JkZXItdG9wOjEwcHggc29saWQgdHJhbnNwYXJlbnQ7Ym9yZGVyLWJvdHRvbToxMHB4IHNvbGlkIHRyYW5zcGFyZW50fS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePWxlZnRdIC50aXBweS10b29sdGlwLnRyYW5zcGFyZW50LXRoZW1lIFt4LWNpcmNsZV17YmFja2dyb3VuZC1jb2xvcjpyZ2JhKDAsMCwwLC43KX0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj1sZWZ0XSAudGlwcHktdG9vbHRpcC50cmFuc3BhcmVudC10aGVtZSBbeC1hcnJvd117Ym9yZGVyLWxlZnQ6N3B4IHNvbGlkIHJnYmEoMCwwLDAsLjcpO2JvcmRlci10b3A6N3B4IHNvbGlkIHRyYW5zcGFyZW50O2JvcmRlci1ib3R0b206N3B4IHNvbGlkIHRyYW5zcGFyZW50fS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePWxlZnRdIC50aXBweS10b29sdGlwLnRyYW5zcGFyZW50LXRoZW1lIFt4LWFycm93XS5hcnJvdy1zbWFsbHtib3JkZXItbGVmdDo1cHggc29saWQgcmdiYSgwLDAsMCwuNyk7Ym9yZGVyLXRvcDo1cHggc29saWQgdHJhbnNwYXJlbnQ7Ym9yZGVyLWJvdHRvbTo1cHggc29saWQgdHJhbnNwYXJlbnR9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49bGVmdF0gLnRpcHB5LXRvb2x0aXAudHJhbnNwYXJlbnQtdGhlbWUgW3gtYXJyb3ddLmFycm93LWJpZ3tib3JkZXItbGVmdDoxMHB4IHNvbGlkIHJnYmEoMCwwLDAsLjcpO2JvcmRlci10b3A6MTBweCBzb2xpZCB0cmFuc3BhcmVudDtib3JkZXItYm90dG9tOjEwcHggc29saWQgdHJhbnNwYXJlbnR9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49bGVmdF0gW2RhdGEtYW5pbWF0aW9uPXBlcnNwZWN0aXZlXXstd2Via2l0LXRyYW5zZm9ybS1vcmlnaW46cmlnaHQ7dHJhbnNmb3JtLW9yaWdpbjpyaWdodH0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj1sZWZ0XSBbZGF0YS1hbmltYXRpb249cGVyc3BlY3RpdmVdLmVudGVye29wYWNpdHk6MTstd2Via2l0LXRyYW5zZm9ybTp0cmFuc2xhdGVYKC0xMHB4KSByb3RhdGVZKDApO3RyYW5zZm9ybTp0cmFuc2xhdGVYKC0xMHB4KSByb3RhdGVZKDApfS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePWxlZnRdIFtkYXRhLWFuaW1hdGlvbj1wZXJzcGVjdGl2ZV0ubGVhdmV7b3BhY2l0eTowOy13ZWJraXQtdHJhbnNmb3JtOnRyYW5zbGF0ZVgoMCkgcm90YXRlWSgtOTBkZWcpO3RyYW5zZm9ybTp0cmFuc2xhdGVYKDApIHJvdGF0ZVkoLTkwZGVnKX0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj1sZWZ0XSBbZGF0YS1hbmltYXRpb249ZmFkZV0uZW50ZXJ7b3BhY2l0eToxOy13ZWJraXQtdHJhbnNmb3JtOnRyYW5zbGF0ZVgoLTEwcHgpO3RyYW5zZm9ybTp0cmFuc2xhdGVYKC0xMHB4KX0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj1sZWZ0XSBbZGF0YS1hbmltYXRpb249ZmFkZV0ubGVhdmV7b3BhY2l0eTowOy13ZWJraXQtdHJhbnNmb3JtOnRyYW5zbGF0ZVgoLTEwcHgpO3RyYW5zZm9ybTp0cmFuc2xhdGVYKC0xMHB4KX0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj1sZWZ0XSBbZGF0YS1hbmltYXRpb249c2hpZnRdLmVudGVye29wYWNpdHk6MTstd2Via2l0LXRyYW5zZm9ybTp0cmFuc2xhdGVYKC0xMHB4KTt0cmFuc2Zvcm06dHJhbnNsYXRlWCgtMTBweCl9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49bGVmdF0gW2RhdGEtYW5pbWF0aW9uPXNoaWZ0XS5sZWF2ZXtvcGFjaXR5OjA7LXdlYmtpdC10cmFuc2Zvcm06dHJhbnNsYXRlWCgwKTt0cmFuc2Zvcm06dHJhbnNsYXRlWCgwKX0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj1sZWZ0XSBbZGF0YS1hbmltYXRpb249c2NhbGVdLmVudGVye29wYWNpdHk6MTstd2Via2l0LXRyYW5zZm9ybTp0cmFuc2xhdGVYKC0xMHB4KSBzY2FsZSgxKTt0cmFuc2Zvcm06dHJhbnNsYXRlWCgtMTBweCkgc2NhbGUoMSl9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49bGVmdF0gW2RhdGEtYW5pbWF0aW9uPXNjYWxlXS5sZWF2ZXtvcGFjaXR5OjA7LXdlYmtpdC10cmFuc2Zvcm06dHJhbnNsYXRlWCgwKSBzY2FsZSgwKTt0cmFuc2Zvcm06dHJhbnNsYXRlWCgwKSBzY2FsZSgwKX0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj1yaWdodF0gW3gtYXJyb3dde2JvcmRlci1yaWdodDo3cHggc29saWQgIzMzMztib3JkZXItdG9wOjdweCBzb2xpZCB0cmFuc3BhcmVudDtib3JkZXItYm90dG9tOjdweCBzb2xpZCB0cmFuc3BhcmVudDtsZWZ0Oi03cHg7bWFyZ2luOjZweCAwfS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePXJpZ2h0XSBbeC1hcnJvd10uYXJyb3ctc21hbGx7Ym9yZGVyLXJpZ2h0OjVweCBzb2xpZCAjMzMzO2JvcmRlci10b3A6NXB4IHNvbGlkIHRyYW5zcGFyZW50O2JvcmRlci1ib3R0b206NXB4IHNvbGlkIHRyYW5zcGFyZW50O2xlZnQ6LTVweH0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj1yaWdodF0gW3gtYXJyb3ddLmFycm93LWJpZ3tib3JkZXItcmlnaHQ6MTBweCBzb2xpZCAjMzMzO2JvcmRlci10b3A6MTBweCBzb2xpZCB0cmFuc3BhcmVudDtib3JkZXItYm90dG9tOjEwcHggc29saWQgdHJhbnNwYXJlbnQ7bGVmdDotMTBweH0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj1yaWdodF0gW3gtY2lyY2xlXXstd2Via2l0LXRyYW5zZm9ybS1vcmlnaW46LTUwJSAwO3RyYW5zZm9ybS1vcmlnaW46LTUwJSAwfS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePXJpZ2h0XSBbeC1jaXJjbGVdLmVudGVyey13ZWJraXQtdHJhbnNmb3JtOnNjYWxlKDEpIHRyYW5zbGF0ZSgtNTAlLC01MCUpO3RyYW5zZm9ybTpzY2FsZSgxKSB0cmFuc2xhdGUoLTUwJSwtNTAlKTtvcGFjaXR5OjF9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49cmlnaHRdIFt4LWNpcmNsZV0ubGVhdmV7LXdlYmtpdC10cmFuc2Zvcm06c2NhbGUoLjE1KSB0cmFuc2xhdGUoLTUwJSwtNTAlKTt0cmFuc2Zvcm06c2NhbGUoLjE1KSB0cmFuc2xhdGUoLTUwJSwtNTAlKTtvcGFjaXR5OjB9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49cmlnaHRdIC50aXBweS10b29sdGlwLmxpZ2h0LXRoZW1lIFt4LWNpcmNsZV17YmFja2dyb3VuZC1jb2xvcjojZmZmfS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePXJpZ2h0XSAudGlwcHktdG9vbHRpcC5saWdodC10aGVtZSBbeC1hcnJvd117Ym9yZGVyLXJpZ2h0OjdweCBzb2xpZCAjZmZmO2JvcmRlci10b3A6N3B4IHNvbGlkIHRyYW5zcGFyZW50O2JvcmRlci1ib3R0b206N3B4IHNvbGlkIHRyYW5zcGFyZW50fS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePXJpZ2h0XSAudGlwcHktdG9vbHRpcC5saWdodC10aGVtZSBbeC1hcnJvd10uYXJyb3ctc21hbGx7Ym9yZGVyLXJpZ2h0OjVweCBzb2xpZCAjZmZmO2JvcmRlci10b3A6NXB4IHNvbGlkIHRyYW5zcGFyZW50O2JvcmRlci1ib3R0b206NXB4IHNvbGlkIHRyYW5zcGFyZW50fS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePXJpZ2h0XSAudGlwcHktdG9vbHRpcC5saWdodC10aGVtZSBbeC1hcnJvd10uYXJyb3ctYmlne2JvcmRlci1yaWdodDoxMHB4IHNvbGlkICNmZmY7Ym9yZGVyLXRvcDoxMHB4IHNvbGlkIHRyYW5zcGFyZW50O2JvcmRlci1ib3R0b206MTBweCBzb2xpZCB0cmFuc3BhcmVudH0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj1yaWdodF0gLnRpcHB5LXRvb2x0aXAudHJhbnNwYXJlbnQtdGhlbWUgW3gtY2lyY2xlXXtiYWNrZ3JvdW5kLWNvbG9yOnJnYmEoMCwwLDAsLjcpfS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePXJpZ2h0XSAudGlwcHktdG9vbHRpcC50cmFuc3BhcmVudC10aGVtZSBbeC1hcnJvd117Ym9yZGVyLXJpZ2h0OjdweCBzb2xpZCByZ2JhKDAsMCwwLC43KTtib3JkZXItdG9wOjdweCBzb2xpZCB0cmFuc3BhcmVudDtib3JkZXItYm90dG9tOjdweCBzb2xpZCB0cmFuc3BhcmVudH0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj1yaWdodF0gLnRpcHB5LXRvb2x0aXAudHJhbnNwYXJlbnQtdGhlbWUgW3gtYXJyb3ddLmFycm93LXNtYWxse2JvcmRlci1yaWdodDo1cHggc29saWQgcmdiYSgwLDAsMCwuNyk7Ym9yZGVyLXRvcDo1cHggc29saWQgdHJhbnNwYXJlbnQ7Ym9yZGVyLWJvdHRvbTo1cHggc29saWQgdHJhbnNwYXJlbnR9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49cmlnaHRdIC50aXBweS10b29sdGlwLnRyYW5zcGFyZW50LXRoZW1lIFt4LWFycm93XS5hcnJvdy1iaWd7Ym9yZGVyLXJpZ2h0OjEwcHggc29saWQgcmdiYSgwLDAsMCwuNyk7Ym9yZGVyLXRvcDoxMHB4IHNvbGlkIHRyYW5zcGFyZW50O2JvcmRlci1ib3R0b206MTBweCBzb2xpZCB0cmFuc3BhcmVudH0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj1yaWdodF0gW2RhdGEtYW5pbWF0aW9uPXBlcnNwZWN0aXZlXXstd2Via2l0LXRyYW5zZm9ybS1vcmlnaW46bGVmdDt0cmFuc2Zvcm0tb3JpZ2luOmxlZnR9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49cmlnaHRdIFtkYXRhLWFuaW1hdGlvbj1wZXJzcGVjdGl2ZV0uZW50ZXJ7b3BhY2l0eToxOy13ZWJraXQtdHJhbnNmb3JtOnRyYW5zbGF0ZVgoMTBweCkgcm90YXRlWSgwKTt0cmFuc2Zvcm06dHJhbnNsYXRlWCgxMHB4KSByb3RhdGVZKDApfS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePXJpZ2h0XSBbZGF0YS1hbmltYXRpb249cGVyc3BlY3RpdmVdLmxlYXZle29wYWNpdHk6MDstd2Via2l0LXRyYW5zZm9ybTp0cmFuc2xhdGVYKDApIHJvdGF0ZVkoOTBkZWcpO3RyYW5zZm9ybTp0cmFuc2xhdGVYKDApIHJvdGF0ZVkoOTBkZWcpfS50aXBweS1wb3BwZXJbeC1wbGFjZW1lbnRePXJpZ2h0XSBbZGF0YS1hbmltYXRpb249ZmFkZV0uZW50ZXJ7b3BhY2l0eToxOy13ZWJraXQtdHJhbnNmb3JtOnRyYW5zbGF0ZVgoMTBweCk7dHJhbnNmb3JtOnRyYW5zbGF0ZVgoMTBweCl9LnRpcHB5LXBvcHBlclt4LXBsYWNlbWVudF49cmlnaHRdIFtkYXRhLWFuaW1hdGlvbj1mYWRlXS5sZWF2ZXtvcGFjaXR5OjA7LXdlYmtpdC10cmFuc2Zvcm06dHJhbnNsYXRlWCgxMHB4KTt0cmFuc2Zvcm06dHJhbnNsYXRlWCgxMHB4KX0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj1yaWdodF0gW2RhdGEtYW5pbWF0aW9uPXNoaWZ0XS5lbnRlcntvcGFjaXR5OjE7LXdlYmtpdC10cmFuc2Zvcm06dHJhbnNsYXRlWCgxMHB4KTt0cmFuc2Zvcm06dHJhbnNsYXRlWCgxMHB4KX0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj1yaWdodF0gW2RhdGEtYW5pbWF0aW9uPXNoaWZ0XS5sZWF2ZXtvcGFjaXR5OjA7LXdlYmtpdC10cmFuc2Zvcm06dHJhbnNsYXRlWCgwKTt0cmFuc2Zvcm06dHJhbnNsYXRlWCgwKX0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj1yaWdodF0gW2RhdGEtYW5pbWF0aW9uPXNjYWxlXS5lbnRlcntvcGFjaXR5OjE7LXdlYmtpdC10cmFuc2Zvcm06dHJhbnNsYXRlWCgxMHB4KSBzY2FsZSgxKTt0cmFuc2Zvcm06dHJhbnNsYXRlWCgxMHB4KSBzY2FsZSgxKX0udGlwcHktcG9wcGVyW3gtcGxhY2VtZW50Xj1yaWdodF0gW2RhdGEtYW5pbWF0aW9uPXNjYWxlXS5sZWF2ZXtvcGFjaXR5OjA7LXdlYmtpdC10cmFuc2Zvcm06dHJhbnNsYXRlWCgwKSBzY2FsZSgwKTt0cmFuc2Zvcm06dHJhbnNsYXRlWCgwKSBzY2FsZSgwKX0udGlwcHktcG9wcGVyIC50aXBweS10b29sdGlwLnRyYW5zcGFyZW50LXRoZW1le2JhY2tncm91bmQtY29sb3I6cmdiYSgwLDAsMCwuNyl9LnRpcHB5LXBvcHBlciAudGlwcHktdG9vbHRpcC50cmFuc3BhcmVudC10aGVtZVtkYXRhLWFuaW1hdGVmaWxsXXtiYWNrZ3JvdW5kLWNvbG9yOnRyYW5zcGFyZW50fS50aXBweS1wb3BwZXIgLnRpcHB5LXRvb2x0aXAubGlnaHQtdGhlbWV7Y29sb3I6IzI2MzIzZDtib3gtc2hhZG93OjAgNHB4IDIwcHggNHB4IHJnYmEoMCwyMCw2MCwuMSksMCA0cHggODBweCAtOHB4IHJnYmEoMCwyMCw2MCwuMik7YmFja2dyb3VuZC1jb2xvcjojZmZmfS50aXBweS1wb3BwZXIgLnRpcHB5LXRvb2x0aXAubGlnaHQtdGhlbWVbZGF0YS1hbmltYXRlZmlsbF17YmFja2dyb3VuZC1jb2xvcjp0cmFuc3BhcmVudH0udGlwcHktdG9vbHRpcHtwb3NpdGlvbjpyZWxhdGl2ZTtjb2xvcjojZmZmO2JvcmRlci1yYWRpdXM6NHB4O2ZvbnQtc2l6ZTouOTVyZW07cGFkZGluZzouNHJlbSAuOHJlbTt0ZXh0LWFsaWduOmNlbnRlcjt3aWxsLWNoYW5nZTp0cmFuc2Zvcm07LXdlYmtpdC1mb250LXNtb290aGluZzphbnRpYWxpYXNlZDstbW96LW9zeC1mb250LXNtb290aGluZzpncmF5c2NhbGU7YmFja2dyb3VuZC1jb2xvcjojMzMzfS50aXBweS10b29sdGlwLS1zbWFsbHtwYWRkaW5nOi4yNXJlbSAuNXJlbTtmb250LXNpemU6LjhyZW19LnRpcHB5LXRvb2x0aXAtLWJpZ3twYWRkaW5nOi42cmVtIDEuMnJlbTtmb250LXNpemU6MS4ycmVtfS50aXBweS10b29sdGlwW2RhdGEtYW5pbWF0ZWZpbGxde292ZXJmbG93OmhpZGRlbjtiYWNrZ3JvdW5kLWNvbG9yOnRyYW5zcGFyZW50fS50aXBweS10b29sdGlwW2RhdGEtaW50ZXJhY3RpdmVde3BvaW50ZXItZXZlbnRzOmF1dG99LnRpcHB5LXRvb2x0aXBbZGF0YS1pbmVydGlhXXt0cmFuc2l0aW9uLXRpbWluZy1mdW5jdGlvbjpjdWJpYy1iZXppZXIoLjUzLDIsLjM2LC44NSl9LnRpcHB5LXRvb2x0aXAgW3gtYXJyb3dde3Bvc2l0aW9uOmFic29sdXRlO3dpZHRoOjA7aGVpZ2h0OjB9LnRpcHB5LXRvb2x0aXAgW3gtY2lyY2xlXXtwb3NpdGlvbjphYnNvbHV0ZTt3aWxsLWNoYW5nZTp0cmFuc2Zvcm07YmFja2dyb3VuZC1jb2xvcjojMzMzO2JvcmRlci1yYWRpdXM6NTAlO3dpZHRoOjEzMCU7d2lkdGg6Y2FsYygxMTAlICsgMnJlbSk7bGVmdDo1MCU7dG9wOjUwJTt6LWluZGV4Oi0xO292ZXJmbG93OmhpZGRlbjt0cmFuc2l0aW9uOmFsbCBlYXNlfS50aXBweS10b29sdGlwIFt4LWNpcmNsZV06YmVmb3Jle2NvbnRlbnQ6XCJcIjtwYWRkaW5nLXRvcDo5MCU7ZmxvYXQ6bGVmdH1AbWVkaWEgKG1heC13aWR0aDo0NTBweCl7LnRpcHB5LXBvcHBlcnttYXgtd2lkdGg6OTYlO21heC13aWR0aDpjYWxjKDEwMCUgLSAyMHB4KX19XG4iXSwic291cmNlUm9vdCI6IiJ9 */
      </style>
      <link href="https://use.typekit.net/mib2hab.css" rel="stylesheet">
      <style data-klaviyo-fender="active" data-styled-version="5.2.1"></style>


      <script src="../js/jquery-3.6.0.min.js"></script>

      <style>.react-grid-layout {
         position: relative;
         transition: height 200ms ease;
         }
         .react-grid-item {
         transition: all 200ms ease;
         transition-property: left, top;
         }
         .react-grid-item img {
         pointer-events: none;
         user-select: none;
         }
         .react-grid-item.cssTransforms {
         transition-property: transform;
         }
         .react-grid-item.resizing {
         z-index: 1;
         will-change: width, height;
         }
         .react-grid-item.react-draggable-dragging {
         transition: none;
         z-index: 3;
         will-change: transform;
         }
         .react-grid-item.dropping {
         visibility: hidden;
         }
         .react-grid-item.react-grid-placeholder {
         background: red;
         opacity: 0.2;
         transition-duration: 100ms;
         z-index: 2;
         -webkit-user-select: none;
         -moz-user-select: none;
         -ms-user-select: none;
         -o-user-select: none;
         user-select: none;
         }
         .react-grid-item > .react-resizable-handle {
         position: absolute;
         width: 20px;
         height: 20px;
         }
         .react-grid-item > .react-resizable-handle::after {
         content: "";
         position: absolute;
         right: 3px;
         bottom: 3px;
         width: 5px;
         height: 5px;
         border-right: 2px solid rgba(0, 0, 0, 0.4);
         border-bottom: 2px solid rgba(0, 0, 0, 0.4);
         }
         .react-resizable-hide > .react-resizable-handle {
         display: none;
         }
         .react-grid-item > .react-resizable-handle.react-resizable-handle-sw {
         bottom: 0;
         left: 0;
         cursor: sw-resize;
         transform: rotate(90deg);
         }
         .react-grid-item > .react-resizable-handle.react-resizable-handle-se {
         bottom: 0;
         right: 0;
         cursor: se-resize;
         }
         .react-grid-item > .react-resizable-handle.react-resizable-handle-nw {
         top: 0;
         left: 0;
         cursor: nw-resize;
         transform: rotate(180deg);
         }
         .react-grid-item > .react-resizable-handle.react-resizable-handle-ne {
         top: 0;
         right: 0;
         cursor: ne-resize;
         transform: rotate(270deg);
         }
         .react-grid-item > .react-resizable-handle.react-resizable-handle-w,
         .react-grid-item > .react-resizable-handle.react-resizable-handle-e {
         top: 50%;
         margin-top: -10px;
         cursor: ew-resize;
         }
         .react-grid-item > .react-resizable-handle.react-resizable-handle-w {
         left: 0;
         transform: rotate(135deg);
         }
         .react-grid-item > .react-resizable-handle.react-resizable-handle-e {
         right: 0;
         transform: rotate(315deg);
         }
         .react-grid-item > .react-resizable-handle.react-resizable-handle-n,
         .react-grid-item > .react-resizable-handle.react-resizable-handle-s {
         left: 50%;
         margin-left: -10px;
         cursor: ns-resize;
         }
         .react-grid-item > .react-resizable-handle.react-resizable-handle-n {
         top: 0;
         transform: rotate(225deg);
         }
         .react-grid-item > .react-resizable-handle.react-resizable-handle-s {
         bottom: 0;
         transform: rotate(45deg);
         }
         /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uLy4uLy4uLy4uLy55YXJuL19fdmlydHVhbF9fL3JlYWN0LWdyaWQtbGF5b3V0LXZpcnR1YWwtMjRkNWVlMWRkNC8wL2NhY2hlL3JlYWN0LWdyaWQtbGF5b3V0LW5wbS0xLjMuMy1kMjEyM2FjOGE3LThhMTI3NWM1ZDAuemlwL25vZGVfbW9kdWxlcy9yZWFjdC1ncmlkLWxheW91dC9jc3Mvc3R5bGVzLmNzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtFQUNFLGtCQUFrQjtFQUNsQiw2QkFBNkI7QUFDL0I7QUFDQTtFQUNFLDBCQUEwQjtFQUMxQiw4QkFBOEI7QUFDaEM7QUFDQTtFQUNFLG9CQUFvQjtFQUNwQixpQkFBaUI7QUFDbkI7QUFDQTtFQUNFLDhCQUE4QjtBQUNoQztBQUNBO0VBQ0UsVUFBVTtFQUNWLDBCQUEwQjtBQUM1Qjs7QUFFQTtFQUNFLGdCQUFnQjtFQUNoQixVQUFVO0VBQ1Ysc0JBQXNCO0FBQ3hCOztBQUVBO0VBQ0Usa0JBQWtCO0FBQ3BCOztBQUVBO0VBQ0UsZUFBZTtFQUNmLFlBQVk7RUFDWiwwQkFBMEI7RUFDMUIsVUFBVTtFQUNWLHlCQUF5QjtFQUN6QixzQkFBc0I7RUFDdEIscUJBQXFCO0VBQ3JCLG9CQUFvQjtFQUNwQixpQkFBaUI7QUFDbkI7O0FBRUE7RUFDRSxrQkFBa0I7RUFDbEIsV0FBVztFQUNYLFlBQVk7QUFDZDs7QUFFQTtFQUNFLFdBQVc7RUFDWCxrQkFBa0I7RUFDbEIsVUFBVTtFQUNWLFdBQVc7RUFDWCxVQUFVO0VBQ1YsV0FBVztFQUNYLDBDQUEwQztFQUMxQywyQ0FBMkM7QUFDN0M7O0FBRUE7RUFDRSxhQUFhO0FBQ2Y7O0FBRUE7RUFDRSxTQUFTO0VBQ1QsT0FBTztFQUNQLGlCQUFpQjtFQUNqQix3QkFBd0I7QUFDMUI7QUFDQTtFQUNFLFNBQVM7RUFDVCxRQUFRO0VBQ1IsaUJBQWlCO0FBQ25CO0FBQ0E7RUFDRSxNQUFNO0VBQ04sT0FBTztFQUNQLGlCQUFpQjtFQUNqQix5QkFBeUI7QUFDM0I7QUFDQTtFQUNFLE1BQU07RUFDTixRQUFRO0VBQ1IsaUJBQWlCO0VBQ2pCLHlCQUF5QjtBQUMzQjtBQUNBOztFQUVFLFFBQVE7RUFDUixpQkFBaUI7RUFDakIsaUJBQWlCO0FBQ25CO0FBQ0E7RUFDRSxPQUFPO0VBQ1AseUJBQXlCO0FBQzNCO0FBQ0E7RUFDRSxRQUFRO0VBQ1IseUJBQXlCO0FBQzNCO0FBQ0E7O0VBRUUsU0FBUztFQUNULGtCQUFrQjtFQUNsQixpQkFBaUI7QUFDbkI7QUFDQTtFQUNFLE1BQU07RUFDTix5QkFBeUI7QUFDM0I7QUFDQTtFQUNFLFNBQVM7RUFDVCx3QkFBd0I7QUFDMUIiLCJzb3VyY2VzQ29udGVudCI6WyIucmVhY3QtZ3JpZC1sYXlvdXQge1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIHRyYW5zaXRpb246IGhlaWdodCAyMDBtcyBlYXNlO1xufVxuLnJlYWN0LWdyaWQtaXRlbSB7XG4gIHRyYW5zaXRpb246IGFsbCAyMDBtcyBlYXNlO1xuICB0cmFuc2l0aW9uLXByb3BlcnR5OiBsZWZ0LCB0b3A7XG59XG4ucmVhY3QtZ3JpZC1pdGVtIGltZyB7XG4gIHBvaW50ZXItZXZlbnRzOiBub25lO1xuICB1c2VyLXNlbGVjdDogbm9uZTsgIFxufVxuLnJlYWN0LWdyaWQtaXRlbS5jc3NUcmFuc2Zvcm1zIHtcbiAgdHJhbnNpdGlvbi1wcm9wZXJ0eTogdHJhbnNmb3JtO1xufVxuLnJlYWN0LWdyaWQtaXRlbS5yZXNpemluZyB7XG4gIHotaW5kZXg6IDE7XG4gIHdpbGwtY2hhbmdlOiB3aWR0aCwgaGVpZ2h0O1xufVxuXG4ucmVhY3QtZ3JpZC1pdGVtLnJlYWN0LWRyYWdnYWJsZS1kcmFnZ2luZyB7XG4gIHRyYW5zaXRpb246IG5vbmU7XG4gIHotaW5kZXg6IDM7XG4gIHdpbGwtY2hhbmdlOiB0cmFuc2Zvcm07XG59XG5cbi5yZWFjdC1ncmlkLWl0ZW0uZHJvcHBpbmcge1xuICB2aXNpYmlsaXR5OiBoaWRkZW47XG59XG5cbi5yZWFjdC1ncmlkLWl0ZW0ucmVhY3QtZ3JpZC1wbGFjZWhvbGRlciB7XG4gIGJhY2tncm91bmQ6IHJlZDtcbiAgb3BhY2l0eTogMC4yO1xuICB0cmFuc2l0aW9uLWR1cmF0aW9uOiAxMDBtcztcbiAgei1pbmRleDogMjtcbiAgLXdlYmtpdC11c2VyLXNlbGVjdDogbm9uZTtcbiAgLW1vei11c2VyLXNlbGVjdDogbm9uZTtcbiAgLW1zLXVzZXItc2VsZWN0OiBub25lO1xuICAtby11c2VyLXNlbGVjdDogbm9uZTtcbiAgdXNlci1zZWxlY3Q6IG5vbmU7XG59XG5cbi5yZWFjdC1ncmlkLWl0ZW0gPiAucmVhY3QtcmVzaXphYmxlLWhhbmRsZSB7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgd2lkdGg6IDIwcHg7XG4gIGhlaWdodDogMjBweDtcbn1cblxuLnJlYWN0LWdyaWQtaXRlbSA+IC5yZWFjdC1yZXNpemFibGUtaGFuZGxlOjphZnRlciB7XG4gIGNvbnRlbnQ6IFwiXCI7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgcmlnaHQ6IDNweDtcbiAgYm90dG9tOiAzcHg7XG4gIHdpZHRoOiA1cHg7XG4gIGhlaWdodDogNXB4O1xuICBib3JkZXItcmlnaHQ6IDJweCBzb2xpZCByZ2JhKDAsIDAsIDAsIDAuNCk7XG4gIGJvcmRlci1ib3R0b206IDJweCBzb2xpZCByZ2JhKDAsIDAsIDAsIDAuNCk7XG59XG5cbi5yZWFjdC1yZXNpemFibGUtaGlkZSA+IC5yZWFjdC1yZXNpemFibGUtaGFuZGxlIHtcbiAgZGlzcGxheTogbm9uZTtcbn1cblxuLnJlYWN0LWdyaWQtaXRlbSA+IC5yZWFjdC1yZXNpemFibGUtaGFuZGxlLnJlYWN0LXJlc2l6YWJsZS1oYW5kbGUtc3cge1xuICBib3R0b206IDA7XG4gIGxlZnQ6IDA7XG4gIGN1cnNvcjogc3ctcmVzaXplO1xuICB0cmFuc2Zvcm06IHJvdGF0ZSg5MGRlZyk7XG59XG4ucmVhY3QtZ3JpZC1pdGVtID4gLnJlYWN0LXJlc2l6YWJsZS1oYW5kbGUucmVhY3QtcmVzaXphYmxlLWhhbmRsZS1zZSB7XG4gIGJvdHRvbTogMDtcbiAgcmlnaHQ6IDA7XG4gIGN1cnNvcjogc2UtcmVzaXplO1xufVxuLnJlYWN0LWdyaWQtaXRlbSA+IC5yZWFjdC1yZXNpemFibGUtaGFuZGxlLnJlYWN0LXJlc2l6YWJsZS1oYW5kbGUtbncge1xuICB0b3A6IDA7XG4gIGxlZnQ6IDA7XG4gIGN1cnNvcjogbnctcmVzaXplO1xuICB0cmFuc2Zvcm06IHJvdGF0ZSgxODBkZWcpO1xufVxuLnJlYWN0LWdyaWQtaXRlbSA+IC5yZWFjdC1yZXNpemFibGUtaGFuZGxlLnJlYWN0LXJlc2l6YWJsZS1oYW5kbGUtbmUge1xuICB0b3A6IDA7XG4gIHJpZ2h0OiAwO1xuICBjdXJzb3I6IG5lLXJlc2l6ZTtcbiAgdHJhbnNmb3JtOiByb3RhdGUoMjcwZGVnKTtcbn1cbi5yZWFjdC1ncmlkLWl0ZW0gPiAucmVhY3QtcmVzaXphYmxlLWhhbmRsZS5yZWFjdC1yZXNpemFibGUtaGFuZGxlLXcsXG4ucmVhY3QtZ3JpZC1pdGVtID4gLnJlYWN0LXJlc2l6YWJsZS1oYW5kbGUucmVhY3QtcmVzaXphYmxlLWhhbmRsZS1lIHtcbiAgdG9wOiA1MCU7XG4gIG1hcmdpbi10b3A6IC0xMHB4O1xuICBjdXJzb3I6IGV3LXJlc2l6ZTtcbn1cbi5yZWFjdC1ncmlkLWl0ZW0gPiAucmVhY3QtcmVzaXphYmxlLWhhbmRsZS5yZWFjdC1yZXNpemFibGUtaGFuZGxlLXcge1xuICBsZWZ0OiAwO1xuICB0cmFuc2Zvcm06IHJvdGF0ZSgxMzVkZWcpO1xufVxuLnJlYWN0LWdyaWQtaXRlbSA+IC5yZWFjdC1yZXNpemFibGUtaGFuZGxlLnJlYWN0LXJlc2l6YWJsZS1oYW5kbGUtZSB7XG4gIHJpZ2h0OiAwO1xuICB0cmFuc2Zvcm06IHJvdGF0ZSgzMTVkZWcpO1xufVxuLnJlYWN0LWdyaWQtaXRlbSA+IC5yZWFjdC1yZXNpemFibGUtaGFuZGxlLnJlYWN0LXJlc2l6YWJsZS1oYW5kbGUtbixcbi5yZWFjdC1ncmlkLWl0ZW0gPiAucmVhY3QtcmVzaXphYmxlLWhhbmRsZS5yZWFjdC1yZXNpemFibGUtaGFuZGxlLXMge1xuICBsZWZ0OiA1MCU7XG4gIG1hcmdpbi1sZWZ0OiAtMTBweDtcbiAgY3Vyc29yOiBucy1yZXNpemU7XG59XG4ucmVhY3QtZ3JpZC1pdGVtID4gLnJlYWN0LXJlc2l6YWJsZS1oYW5kbGUucmVhY3QtcmVzaXphYmxlLWhhbmRsZS1uIHtcbiAgdG9wOiAwO1xuICB0cmFuc2Zvcm06IHJvdGF0ZSgyMjVkZWcpO1xufVxuLnJlYWN0LWdyaWQtaXRlbSA+IC5yZWFjdC1yZXNpemFibGUtaGFuZGxlLnJlYWN0LXJlc2l6YWJsZS1oYW5kbGUtcyB7XG4gIGJvdHRvbTogMDtcbiAgdHJhbnNmb3JtOiByb3RhdGUoNDVkZWcpO1xufVxuIl0sInNvdXJjZVJvb3QiOiIifQ== */
      </style>
      <style>.ReactTable{position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;border:1px solid rgba(0,0,0,0.1);}.ReactTable *{box-sizing:border-box}.ReactTable .rt-table{-webkit-box-flex:1;-ms-flex:auto 1;flex:auto 1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:stretch;-ms-flex-align:stretch;align-items:stretch;width:100%;border-collapse:collapse;overflow:auto}.ReactTable .rt-thead{-webkit-box-flex:1;-ms-flex:1 0 auto;flex:1 0 auto;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}.ReactTable .rt-thead.-headerGroups{background:rgba(0,0,0,0.03);border-bottom:1px solid rgba(0,0,0,0.05)}.ReactTable .rt-thead.-filters{border-bottom:1px solid rgba(0,0,0,0.05);}.ReactTable .rt-thead.-filters input,.ReactTable .rt-thead.-filters select{border:1px solid rgba(0,0,0,0.1);background:#fff;padding:5px 7px;font-size:inherit;border-radius:3px;font-weight:normal;outline:none}.ReactTable .rt-thead.-filters .rt-th{border-right:1px solid rgba(0,0,0,0.02)}.ReactTable .rt-thead.-header{box-shadow:0 2px 15px 0 rgba(0,0,0,0.15)}.ReactTable .rt-thead .rt-tr{text-align:center}.ReactTable .rt-thead .rt-th,.ReactTable .rt-thead .rt-td{padding:5px 5px;line-height:normal;position:relative;border-right:1px solid rgba(0,0,0,0.05);transition:box-shadow .3s cubic-bezier(.175,.885,.32,1.275);box-shadow:inset 0 0 0 0 transparent;}.ReactTable .rt-thead .rt-th.-sort-asc,.ReactTable .rt-thead .rt-td.-sort-asc{box-shadow:inset 0 3px 0 0 rgba(0,0,0,0.6)}.ReactTable .rt-thead .rt-th.-sort-desc,.ReactTable .rt-thead .rt-td.-sort-desc{box-shadow:inset 0 -3px 0 0 rgba(0,0,0,0.6)}.ReactTable .rt-thead .rt-th.-cursor-pointer,.ReactTable .rt-thead .rt-td.-cursor-pointer{cursor:pointer}.ReactTable .rt-thead .rt-th:last-child,.ReactTable .rt-thead .rt-td:last-child{border-right:0}.ReactTable .rt-thead .rt-th:focus{outline:none}.ReactTable .rt-thead .rt-resizable-header{overflow:visible;}.ReactTable .rt-thead .rt-resizable-header:last-child{overflow:hidden}.ReactTable .rt-thead .rt-resizable-header-content{overflow:hidden;text-overflow:ellipsis}.ReactTable .rt-thead .rt-header-pivot{border-right-color:#f7f7f7}.ReactTable .rt-thead .rt-header-pivot:after,.ReactTable .rt-thead .rt-header-pivot:before{left:100%;top:50%;border:solid transparent;content:" ";height:0;width:0;position:absolute;pointer-events:none}.ReactTable .rt-thead .rt-header-pivot:after{border-color:rgba(255,255,255,0);border-left-color:#fff;border-width:8px;margin-top:-8px}.ReactTable .rt-thead .rt-header-pivot:before{border-color:rgba(102,102,102,0);border-left-color:#f7f7f7;border-width:10px;margin-top:-10px}.ReactTable .rt-tbody{-webkit-box-flex:99999;-ms-flex:99999 1 auto;flex:99999 1 auto;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;overflow:auto;}.ReactTable .rt-tbody .rt-tr-group{border-bottom:solid 1px rgba(0,0,0,0.05);}.ReactTable .rt-tbody .rt-tr-group:last-child{border-bottom:0}.ReactTable .rt-tbody .rt-td{border-right:1px solid rgba(0,0,0,0.02);}.ReactTable .rt-tbody .rt-td:last-child{border-right:0}.ReactTable .rt-tbody .rt-expandable{cursor:pointer;text-overflow:clip}.ReactTable .rt-tr-group{-webkit-box-flex:1;-ms-flex:1 0 auto;flex:1 0 auto;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:stretch;-ms-flex-align:stretch;align-items:stretch}.ReactTable .rt-tr{-webkit-box-flex:1;-ms-flex:1 0 auto;flex:1 0 auto;display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex}.ReactTable .rt-th,.ReactTable .rt-td{-webkit-box-flex:1;-ms-flex:1 0 0px;flex:1 0 0;white-space:nowrap;text-overflow:ellipsis;padding:7px 5px;overflow:hidden;transition:.3s ease;transition-property:width,min-width,padding,opacity;}.ReactTable .rt-th.-hidden,.ReactTable .rt-td.-hidden{width:0 !important;min-width:0 !important;padding:0 !important;border:0 !important;opacity:0 !important}.ReactTable .rt-expander{display:inline-block;position:relative;margin:0;color:transparent;margin:0 10px;}.ReactTable .rt-expander:after{content:'';position:absolute;width:0;height:0;top:50%;left:50%;-webkit-transform:translate(-50%,-50%) rotate(-90deg);transform:translate(-50%,-50%) rotate(-90deg);border-left:5.04px solid transparent;border-right:5.04px solid transparent;border-top:7px solid rgba(0,0,0,0.8);transition:all .3s cubic-bezier(.175,.885,.32,1.275);cursor:pointer}.ReactTable .rt-expander.-open:after{-webkit-transform:translate(-50%,-50%) rotate(0);transform:translate(-50%,-50%) rotate(0)}.ReactTable .rt-resizer{display:inline-block;position:absolute;width:36px;top:0;bottom:0;right:-18px;cursor:col-resize;z-index:10}.ReactTable .rt-tfoot{-webkit-box-flex:1;-ms-flex:1 0 auto;flex:1 0 auto;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;box-shadow:0 0 15px 0 rgba(0,0,0,0.15);}.ReactTable .rt-tfoot .rt-td{border-right:1px solid rgba(0,0,0,0.05);}.ReactTable .rt-tfoot .rt-td:last-child{border-right:0}.ReactTable.-striped .rt-tr.-odd{background:rgba(0,0,0,0.03)}.ReactTable.-highlight .rt-tbody .rt-tr:not(.-padRow):hover{background:rgba(0,0,0,0.05)}.ReactTable .-pagination{z-index:1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:stretch;-ms-flex-align:stretch;align-items:stretch;-ms-flex-wrap:wrap;flex-wrap:wrap;padding:3px;box-shadow:0 0 15px 0 rgba(0,0,0,0.1);border-top:2px solid rgba(0,0,0,0.1);}.ReactTable .-pagination input,.ReactTable .-pagination select{border:1px solid rgba(0,0,0,0.1);background:#fff;padding:5px 7px;font-size:inherit;border-radius:3px;font-weight:normal;outline:none}.ReactTable .-pagination .-btn{-webkit-appearance:none;-moz-appearance:none;appearance:none;display:block;width:100%;height:100%;border:0;border-radius:3px;padding:6px;font-size:1em;color:rgba(0,0,0,0.6);background:rgba(0,0,0,0.1);transition:all .1s ease;cursor:pointer;outline:none;}.ReactTable .-pagination .-btn[disabled]{opacity:.5;cursor:default}.ReactTable .-pagination .-btn:not([disabled]):hover{background:rgba(0,0,0,0.3);color:#fff}.ReactTable .-pagination .-previous,.ReactTable .-pagination .-next{-webkit-box-flex:1;-ms-flex:1;flex:1;text-align:center}.ReactTable .-pagination .-center{-webkit-box-flex:1.5;-ms-flex:1.5;flex:1.5;text-align:center;margin-bottom:0;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-ms-flex-pack:distribute;justify-content:space-around}.ReactTable .-pagination .-pageInfo{display:inline-block;margin:3px 10px;white-space:nowrap}.ReactTable .-pagination .-pageJump{display:inline-block;}.ReactTable .-pagination .-pageJump input{width:70px;text-align:center}.ReactTable .-pagination .-pageSizeOptions{margin:3px 10px}.ReactTable .rt-noData{display:block;position:absolute;left:50%;top:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);background:rgba(255,255,255,0.8);transition:all .3s ease;z-index:1;pointer-events:none;padding:20px;color:rgba(0,0,0,0.5)}.ReactTable .-loading{display:block;position:absolute;left:0;right:0;top:0;bottom:0;background:rgba(255,255,255,0.8);transition:all .3s ease;z-index:-1;opacity:0;pointer-events:none;}.ReactTable .-loading > div{position:absolute;display:block;text-align:center;width:100%;top:50%;left:0;font-size:15px;color:rgba(0,0,0,0.6);-webkit-transform:translateY(-52%);transform:translateY(-52%);transition:all .3s cubic-bezier(.25,.46,.45,.94)}.ReactTable .-loading.-active{opacity:1;z-index:2;pointer-events:all;}.ReactTable .-loading.-active > div{-webkit-transform:translateY(50%);transform:translateY(50%)}.ReactTable .rt-resizing .rt-th,.ReactTable .rt-resizing .rt-td{transition:none !important;cursor:col-resize;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
         /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uLy4uLy4uLy4uLy55YXJuL19fdmlydHVhbF9fL3JlYWN0LXRhYmxlLXZpcnR1YWwtZmJlYzkzOWE2Yy8wL2NhY2hlL3JlYWN0LXRhYmxlLW5wbS02LjEwLjAtNDllMmNjNGQwZi00MmNkNzY3YjZhLnppcC9ub2RlX21vZHVsZXMvcmVhY3QtdGFibGUvcmVhY3QtdGFibGUuY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBLFlBQVksaUJBQWlCLENBQUMsbUJBQW1CLENBQUMsbUJBQW1CLENBQUMsWUFBWSxDQUFDLDJCQUEyQixDQUFDLDRCQUE0QixDQUFDLHlCQUF5QixDQUFDLHFCQUFxQixDQUFDLGdDQUFnQyxDQUFDLENBQUMsY0FBYyxxQkFBcUIsQ0FBQyxzQkFBc0Isa0JBQWtCLENBQUMsZUFBZSxDQUFDLFdBQVcsQ0FBQyxtQkFBbUIsQ0FBQyxtQkFBbUIsQ0FBQyxZQUFZLENBQUMsMkJBQTJCLENBQUMsNEJBQTRCLENBQUMseUJBQXlCLENBQUMscUJBQXFCLENBQUMseUJBQXlCLENBQUMsc0JBQXNCLENBQUMsbUJBQW1CLENBQUMsVUFBVSxDQUFDLHdCQUF3QixDQUFDLGFBQWEsQ0FBQyxzQkFBc0Isa0JBQWtCLENBQUMsaUJBQWlCLENBQUMsYUFBYSxDQUFDLG1CQUFtQixDQUFDLG1CQUFtQixDQUFDLFlBQVksQ0FBQywyQkFBMkIsQ0FBQyw0QkFBNEIsQ0FBQyx5QkFBeUIsQ0FBQyxxQkFBcUIsQ0FBQyx3QkFBd0IsQ0FBQyxxQkFBcUIsQ0FBQyxvQkFBb0IsQ0FBQyxnQkFBZ0IsQ0FBQyxDQUFDLG9DQUFvQywyQkFBMkIsQ0FBQyx3Q0FBd0MsQ0FBQywrQkFBK0Isd0NBQXdDLENBQUMsQ0FBQywyRUFBMkUsZ0NBQWdDLENBQUMsZUFBZSxDQUFDLGVBQWUsQ0FBQyxpQkFBaUIsQ0FBQyxpQkFBaUIsQ0FBQyxrQkFBa0IsQ0FBQyxZQUFZLENBQUMsc0NBQXNDLHVDQUF1QyxDQUFDLDhCQUE4Qix3Q0FBd0MsQ0FBQyw2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QyxtQkFBbUIsQ0FBQyxZQUFZLENBQUMscUJBQXFCLENBQUMsc0JBQXNCLGFBQWEsQ0FBQyxpQkFBaUIsQ0FBQyxNQUFNLENBQUMsT0FBTyxDQUFDLEtBQUssQ0FBQyxRQUFRLENBQUMsZ0NBQWdDLENBQUMsdUJBQXVCLENBQUMsVUFBVSxDQUFDLFNBQVMsQ0FBQyxtQkFBbUIsQ0FBQyxDQUFDLDRCQUE0QixpQkFBaUIsQ0FBQyxhQUFhLENBQUMsaUJBQWlCLENBQUMsVUFBVSxDQUFDLE9BQU8sQ0FBQyxNQUFNLENBQUMsY0FBYyxDQUFDLHFCQUFxQixDQUFDLGtDQUFrQyxDQUFDLDBCQUEwQixDQUFDLGdEQUFnRCxDQUFDLDhCQUE4QixTQUFTLENBQUMsU0FBUyxDQUFDLGtCQUFrQixDQUFDLENBQUMsb0NBQW9DLGlDQUFpQyxDQUFDLHlCQUF5QixDQUFDLGdFQUFnRSwwQkFBMEIsQ0FBQyxpQkFBaUIsQ0FBQyx3QkFBd0IsQ0FBQyxxQkFBcUIsQ0FBQyxvQkFBb0IsQ0FBQyxnQkFBZ0IiLCJzb3VyY2VzQ29udGVudCI6WyIuUmVhY3RUYWJsZXtwb3NpdGlvbjpyZWxhdGl2ZTtkaXNwbGF5Oi13ZWJraXQtYm94O2Rpc3BsYXk6LW1zLWZsZXhib3g7ZGlzcGxheTpmbGV4Oy13ZWJraXQtYm94LW9yaWVudDp2ZXJ0aWNhbDstd2Via2l0LWJveC1kaXJlY3Rpb246bm9ybWFsOy1tcy1mbGV4LWRpcmVjdGlvbjpjb2x1bW47ZmxleC1kaXJlY3Rpb246Y29sdW1uO2JvcmRlcjoxcHggc29saWQgcmdiYSgwLDAsMCwwLjEpO30uUmVhY3RUYWJsZSAqe2JveC1zaXppbmc6Ym9yZGVyLWJveH0uUmVhY3RUYWJsZSAucnQtdGFibGV7LXdlYmtpdC1ib3gtZmxleDoxOy1tcy1mbGV4OmF1dG8gMTtmbGV4OmF1dG8gMTtkaXNwbGF5Oi13ZWJraXQtYm94O2Rpc3BsYXk6LW1zLWZsZXhib3g7ZGlzcGxheTpmbGV4Oy13ZWJraXQtYm94LW9yaWVudDp2ZXJ0aWNhbDstd2Via2l0LWJveC1kaXJlY3Rpb246bm9ybWFsOy1tcy1mbGV4LWRpcmVjdGlvbjpjb2x1bW47ZmxleC1kaXJlY3Rpb246Y29sdW1uOy13ZWJraXQtYm94LWFsaWduOnN0cmV0Y2g7LW1zLWZsZXgtYWxpZ246c3RyZXRjaDthbGlnbi1pdGVtczpzdHJldGNoO3dpZHRoOjEwMCU7Ym9yZGVyLWNvbGxhcHNlOmNvbGxhcHNlO292ZXJmbG93OmF1dG99LlJlYWN0VGFibGUgLnJ0LXRoZWFkey13ZWJraXQtYm94LWZsZXg6MTstbXMtZmxleDoxIDAgYXV0bztmbGV4OjEgMCBhdXRvO2Rpc3BsYXk6LXdlYmtpdC1ib3g7ZGlzcGxheTotbXMtZmxleGJveDtkaXNwbGF5OmZsZXg7LXdlYmtpdC1ib3gtb3JpZW50OnZlcnRpY2FsOy13ZWJraXQtYm94LWRpcmVjdGlvbjpub3JtYWw7LW1zLWZsZXgtZGlyZWN0aW9uOmNvbHVtbjtmbGV4LWRpcmVjdGlvbjpjb2x1bW47LXdlYmtpdC11c2VyLXNlbGVjdDpub25lOy1tb3otdXNlci1zZWxlY3Q6bm9uZTstbXMtdXNlci1zZWxlY3Q6bm9uZTt1c2VyLXNlbGVjdDpub25lO30uUmVhY3RUYWJsZSAucnQtdGhlYWQuLWhlYWRlckdyb3Vwc3tiYWNrZ3JvdW5kOnJnYmEoMCwwLDAsMC4wMyk7Ym9yZGVyLWJvdHRvbToxcHggc29saWQgcmdiYSgwLDAsMCwwLjA1KX0uUmVhY3RUYWJsZSAucnQtdGhlYWQuLWZpbHRlcnN7Ym9yZGVyLWJvdHRvbToxcHggc29saWQgcmdiYSgwLDAsMCwwLjA1KTt9LlJlYWN0VGFibGUgLnJ0LXRoZWFkLi1maWx0ZXJzIGlucHV0LC5SZWFjdFRhYmxlIC5ydC10aGVhZC4tZmlsdGVycyBzZWxlY3R7Ym9yZGVyOjFweCBzb2xpZCByZ2JhKDAsMCwwLDAuMSk7YmFja2dyb3VuZDojZmZmO3BhZGRpbmc6NXB4IDdweDtmb250LXNpemU6aW5oZXJpdDtib3JkZXItcmFkaXVzOjNweDtmb250LXdlaWdodDpub3JtYWw7b3V0bGluZTpub25lfS5SZWFjdFRhYmxlIC5ydC10aGVhZC4tZmlsdGVycyAucnQtdGh7Ym9yZGVyLXJpZ2h0OjFweCBzb2xpZCByZ2JhKDAsMCwwLDAuMDIpfS5SZWFjdFRhYmxlIC5ydC10aGVhZC4taGVhZGVye2JveC1zaGFkb3c6MCAycHggMTVweCAwIHJnYmEoMCwwLDAsMC4xNSl9LlJlYWN0VGFibGUgLnJ0LXRoZWFkIC5ydC10cnt0ZXh0LWFsaWduOmNlbnRlcn0uUmVhY3RUYWJsZSAucnQtdGhlYWQgLnJ0LXRoLC5SZWFjdFRhYmxlIC5ydC10aGVhZCAucnQtdGR7cGFkZGluZzo1cHggNXB4O2xpbmUtaGVpZ2h0Om5vcm1hbDtwb3NpdGlvbjpyZWxhdGl2ZTtib3JkZXItcmlnaHQ6MXB4IHNvbGlkIHJnYmEoMCwwLDAsMC4wNSk7dHJhbnNpdGlvbjpib3gtc2hhZG93IC4zcyBjdWJpYy1iZXppZXIoLjE3NSwuODg1LC4zMiwxLjI3NSk7Ym94LXNoYWRvdzppbnNldCAwIDAgMCAwIHRyYW5zcGFyZW50O30uUmVhY3RUYWJsZSAucnQtdGhlYWQgLnJ0LXRoLi1zb3J0LWFzYywuUmVhY3RUYWJsZSAucnQtdGhlYWQgLnJ0LXRkLi1zb3J0LWFzY3tib3gtc2hhZG93Omluc2V0IDAgM3B4IDAgMCByZ2JhKDAsMCwwLDAuNil9LlJlYWN0VGFibGUgLnJ0LXRoZWFkIC5ydC10aC4tc29ydC1kZXNjLC5SZWFjdFRhYmxlIC5ydC10aGVhZCAucnQtdGQuLXNvcnQtZGVzY3tib3gtc2hhZG93Omluc2V0IDAgLTNweCAwIDAgcmdiYSgwLDAsMCwwLjYpfS5SZWFjdFRhYmxlIC5ydC10aGVhZCAucnQtdGguLWN1cnNvci1wb2ludGVyLC5SZWFjdFRhYmxlIC5ydC10aGVhZCAucnQtdGQuLWN1cnNvci1wb2ludGVye2N1cnNvcjpwb2ludGVyfS5SZWFjdFRhYmxlIC5ydC10aGVhZCAucnQtdGg6bGFzdC1jaGlsZCwuUmVhY3RUYWJsZSAucnQtdGhlYWQgLnJ0LXRkOmxhc3QtY2hpbGR7Ym9yZGVyLXJpZ2h0OjB9LlJlYWN0VGFibGUgLnJ0LXRoZWFkIC5ydC10aDpmb2N1c3tvdXRsaW5lOm5vbmV9LlJlYWN0VGFibGUgLnJ0LXRoZWFkIC5ydC1yZXNpemFibGUtaGVhZGVye292ZXJmbG93OnZpc2libGU7fS5SZWFjdFRhYmxlIC5ydC10aGVhZCAucnQtcmVzaXphYmxlLWhlYWRlcjpsYXN0LWNoaWxke292ZXJmbG93OmhpZGRlbn0uUmVhY3RUYWJsZSAucnQtdGhlYWQgLnJ0LXJlc2l6YWJsZS1oZWFkZXItY29udGVudHtvdmVyZmxvdzpoaWRkZW47dGV4dC1vdmVyZmxvdzplbGxpcHNpc30uUmVhY3RUYWJsZSAucnQtdGhlYWQgLnJ0LWhlYWRlci1waXZvdHtib3JkZXItcmlnaHQtY29sb3I6I2Y3ZjdmN30uUmVhY3RUYWJsZSAucnQtdGhlYWQgLnJ0LWhlYWRlci1waXZvdDphZnRlciwuUmVhY3RUYWJsZSAucnQtdGhlYWQgLnJ0LWhlYWRlci1waXZvdDpiZWZvcmV7bGVmdDoxMDAlO3RvcDo1MCU7Ym9yZGVyOnNvbGlkIHRyYW5zcGFyZW50O2NvbnRlbnQ6XCIgXCI7aGVpZ2h0OjA7d2lkdGg6MDtwb3NpdGlvbjphYnNvbHV0ZTtwb2ludGVyLWV2ZW50czpub25lfS5SZWFjdFRhYmxlIC5ydC10aGVhZCAucnQtaGVhZGVyLXBpdm90OmFmdGVye2JvcmRlci1jb2xvcjpyZ2JhKDI1NSwyNTUsMjU1LDApO2JvcmRlci1sZWZ0LWNvbG9yOiNmZmY7Ym9yZGVyLXdpZHRoOjhweDttYXJnaW4tdG9wOi04cHh9LlJlYWN0VGFibGUgLnJ0LXRoZWFkIC5ydC1oZWFkZXItcGl2b3Q6YmVmb3Jle2JvcmRlci1jb2xvcjpyZ2JhKDEwMiwxMDIsMTAyLDApO2JvcmRlci1sZWZ0LWNvbG9yOiNmN2Y3Zjc7Ym9yZGVyLXdpZHRoOjEwcHg7bWFyZ2luLXRvcDotMTBweH0uUmVhY3RUYWJsZSAucnQtdGJvZHl7LXdlYmtpdC1ib3gtZmxleDo5OTk5OTstbXMtZmxleDo5OTk5OSAxIGF1dG87ZmxleDo5OTk5OSAxIGF1dG87ZGlzcGxheTotd2Via2l0LWJveDtkaXNwbGF5Oi1tcy1mbGV4Ym94O2Rpc3BsYXk6ZmxleDstd2Via2l0LWJveC1vcmllbnQ6dmVydGljYWw7LXdlYmtpdC1ib3gtZGlyZWN0aW9uOm5vcm1hbDstbXMtZmxleC1kaXJlY3Rpb246Y29sdW1uO2ZsZXgtZGlyZWN0aW9uOmNvbHVtbjtvdmVyZmxvdzphdXRvO30uUmVhY3RUYWJsZSAucnQtdGJvZHkgLnJ0LXRyLWdyb3Vwe2JvcmRlci1ib3R0b206c29saWQgMXB4IHJnYmEoMCwwLDAsMC4wNSk7fS5SZWFjdFRhYmxlIC5ydC10Ym9keSAucnQtdHItZ3JvdXA6bGFzdC1jaGlsZHtib3JkZXItYm90dG9tOjB9LlJlYWN0VGFibGUgLnJ0LXRib2R5IC5ydC10ZHtib3JkZXItcmlnaHQ6MXB4IHNvbGlkIHJnYmEoMCwwLDAsMC4wMik7fS5SZWFjdFRhYmxlIC5ydC10Ym9keSAucnQtdGQ6bGFzdC1jaGlsZHtib3JkZXItcmlnaHQ6MH0uUmVhY3RUYWJsZSAucnQtdGJvZHkgLnJ0LWV4cGFuZGFibGV7Y3Vyc29yOnBvaW50ZXI7dGV4dC1vdmVyZmxvdzpjbGlwfS5SZWFjdFRhYmxlIC5ydC10ci1ncm91cHstd2Via2l0LWJveC1mbGV4OjE7LW1zLWZsZXg6MSAwIGF1dG87ZmxleDoxIDAgYXV0bztkaXNwbGF5Oi13ZWJraXQtYm94O2Rpc3BsYXk6LW1zLWZsZXhib3g7ZGlzcGxheTpmbGV4Oy13ZWJraXQtYm94LW9yaWVudDp2ZXJ0aWNhbDstd2Via2l0LWJveC1kaXJlY3Rpb246bm9ybWFsOy1tcy1mbGV4LWRpcmVjdGlvbjpjb2x1bW47ZmxleC1kaXJlY3Rpb246Y29sdW1uOy13ZWJraXQtYm94LWFsaWduOnN0cmV0Y2g7LW1zLWZsZXgtYWxpZ246c3RyZXRjaDthbGlnbi1pdGVtczpzdHJldGNofS5SZWFjdFRhYmxlIC5ydC10cnstd2Via2l0LWJveC1mbGV4OjE7LW1zLWZsZXg6MSAwIGF1dG87ZmxleDoxIDAgYXV0bztkaXNwbGF5Oi13ZWJraXQtaW5saW5lLWJveDtkaXNwbGF5Oi1tcy1pbmxpbmUtZmxleGJveDtkaXNwbGF5OmlubGluZS1mbGV4fS5SZWFjdFRhYmxlIC5ydC10aCwuUmVhY3RUYWJsZSAucnQtdGR7LXdlYmtpdC1ib3gtZmxleDoxOy1tcy1mbGV4OjEgMCAwcHg7ZmxleDoxIDAgMDt3aGl0ZS1zcGFjZTpub3dyYXA7dGV4dC1vdmVyZmxvdzplbGxpcHNpcztwYWRkaW5nOjdweCA1cHg7b3ZlcmZsb3c6aGlkZGVuO3RyYW5zaXRpb246LjNzIGVhc2U7dHJhbnNpdGlvbi1wcm9wZXJ0eTp3aWR0aCxtaW4td2lkdGgscGFkZGluZyxvcGFjaXR5O30uUmVhY3RUYWJsZSAucnQtdGguLWhpZGRlbiwuUmVhY3RUYWJsZSAucnQtdGQuLWhpZGRlbnt3aWR0aDowICFpbXBvcnRhbnQ7bWluLXdpZHRoOjAgIWltcG9ydGFudDtwYWRkaW5nOjAgIWltcG9ydGFudDtib3JkZXI6MCAhaW1wb3J0YW50O29wYWNpdHk6MCAhaW1wb3J0YW50fS5SZWFjdFRhYmxlIC5ydC1leHBhbmRlcntkaXNwbGF5OmlubGluZS1ibG9jaztwb3NpdGlvbjpyZWxhdGl2ZTttYXJnaW46MDtjb2xvcjp0cmFuc3BhcmVudDttYXJnaW46MCAxMHB4O30uUmVhY3RUYWJsZSAucnQtZXhwYW5kZXI6YWZ0ZXJ7Y29udGVudDonJztwb3NpdGlvbjphYnNvbHV0ZTt3aWR0aDowO2hlaWdodDowO3RvcDo1MCU7bGVmdDo1MCU7LXdlYmtpdC10cmFuc2Zvcm06dHJhbnNsYXRlKC01MCUsLTUwJSkgcm90YXRlKC05MGRlZyk7dHJhbnNmb3JtOnRyYW5zbGF0ZSgtNTAlLC01MCUpIHJvdGF0ZSgtOTBkZWcpO2JvcmRlci1sZWZ0OjUuMDRweCBzb2xpZCB0cmFuc3BhcmVudDtib3JkZXItcmlnaHQ6NS4wNHB4IHNvbGlkIHRyYW5zcGFyZW50O2JvcmRlci10b3A6N3B4IHNvbGlkIHJnYmEoMCwwLDAsMC44KTt0cmFuc2l0aW9uOmFsbCAuM3MgY3ViaWMtYmV6aWVyKC4xNzUsLjg4NSwuMzIsMS4yNzUpO2N1cnNvcjpwb2ludGVyfS5SZWFjdFRhYmxlIC5ydC1leHBhbmRlci4tb3BlbjphZnRlcnstd2Via2l0LXRyYW5zZm9ybTp0cmFuc2xhdGUoLTUwJSwtNTAlKSByb3RhdGUoMCk7dHJhbnNmb3JtOnRyYW5zbGF0ZSgtNTAlLC01MCUpIHJvdGF0ZSgwKX0uUmVhY3RUYWJsZSAucnQtcmVzaXplcntkaXNwbGF5OmlubGluZS1ibG9jaztwb3NpdGlvbjphYnNvbHV0ZTt3aWR0aDozNnB4O3RvcDowO2JvdHRvbTowO3JpZ2h0Oi0xOHB4O2N1cnNvcjpjb2wtcmVzaXplO3otaW5kZXg6MTB9LlJlYWN0VGFibGUgLnJ0LXRmb290ey13ZWJraXQtYm94LWZsZXg6MTstbXMtZmxleDoxIDAgYXV0bztmbGV4OjEgMCBhdXRvO2Rpc3BsYXk6LXdlYmtpdC1ib3g7ZGlzcGxheTotbXMtZmxleGJveDtkaXNwbGF5OmZsZXg7LXdlYmtpdC1ib3gtb3JpZW50OnZlcnRpY2FsOy13ZWJraXQtYm94LWRpcmVjdGlvbjpub3JtYWw7LW1zLWZsZXgtZGlyZWN0aW9uOmNvbHVtbjtmbGV4LWRpcmVjdGlvbjpjb2x1bW47Ym94LXNoYWRvdzowIDAgMTVweCAwIHJnYmEoMCwwLDAsMC4xNSk7fS5SZWFjdFRhYmxlIC5ydC10Zm9vdCAucnQtdGR7Ym9yZGVyLXJpZ2h0OjFweCBzb2xpZCByZ2JhKDAsMCwwLDAuMDUpO30uUmVhY3RUYWJsZSAucnQtdGZvb3QgLnJ0LXRkOmxhc3QtY2hpbGR7Ym9yZGVyLXJpZ2h0OjB9LlJlYWN0VGFibGUuLXN0cmlwZWQgLnJ0LXRyLi1vZGR7YmFja2dyb3VuZDpyZ2JhKDAsMCwwLDAuMDMpfS5SZWFjdFRhYmxlLi1oaWdobGlnaHQgLnJ0LXRib2R5IC5ydC10cjpub3QoLi1wYWRSb3cpOmhvdmVye2JhY2tncm91bmQ6cmdiYSgwLDAsMCwwLjA1KX0uUmVhY3RUYWJsZSAuLXBhZ2luYXRpb257ei1pbmRleDoxO2Rpc3BsYXk6LXdlYmtpdC1ib3g7ZGlzcGxheTotbXMtZmxleGJveDtkaXNwbGF5OmZsZXg7LXdlYmtpdC1ib3gtcGFjazpqdXN0aWZ5Oy1tcy1mbGV4LXBhY2s6anVzdGlmeTtqdXN0aWZ5LWNvbnRlbnQ6c3BhY2UtYmV0d2Vlbjstd2Via2l0LWJveC1hbGlnbjpzdHJldGNoOy1tcy1mbGV4LWFsaWduOnN0cmV0Y2g7YWxpZ24taXRlbXM6c3RyZXRjaDstbXMtZmxleC13cmFwOndyYXA7ZmxleC13cmFwOndyYXA7cGFkZGluZzozcHg7Ym94LXNoYWRvdzowIDAgMTVweCAwIHJnYmEoMCwwLDAsMC4xKTtib3JkZXItdG9wOjJweCBzb2xpZCByZ2JhKDAsMCwwLDAuMSk7fS5SZWFjdFRhYmxlIC4tcGFnaW5hdGlvbiBpbnB1dCwuUmVhY3RUYWJsZSAuLXBhZ2luYXRpb24gc2VsZWN0e2JvcmRlcjoxcHggc29saWQgcmdiYSgwLDAsMCwwLjEpO2JhY2tncm91bmQ6I2ZmZjtwYWRkaW5nOjVweCA3cHg7Zm9udC1zaXplOmluaGVyaXQ7Ym9yZGVyLXJhZGl1czozcHg7Zm9udC13ZWlnaHQ6bm9ybWFsO291dGxpbmU6bm9uZX0uUmVhY3RUYWJsZSAuLXBhZ2luYXRpb24gLi1idG57LXdlYmtpdC1hcHBlYXJhbmNlOm5vbmU7LW1vei1hcHBlYXJhbmNlOm5vbmU7YXBwZWFyYW5jZTpub25lO2Rpc3BsYXk6YmxvY2s7d2lkdGg6MTAwJTtoZWlnaHQ6MTAwJTtib3JkZXI6MDtib3JkZXItcmFkaXVzOjNweDtwYWRkaW5nOjZweDtmb250LXNpemU6MWVtO2NvbG9yOnJnYmEoMCwwLDAsMC42KTtiYWNrZ3JvdW5kOnJnYmEoMCwwLDAsMC4xKTt0cmFuc2l0aW9uOmFsbCAuMXMgZWFzZTtjdXJzb3I6cG9pbnRlcjtvdXRsaW5lOm5vbmU7fS5SZWFjdFRhYmxlIC4tcGFnaW5hdGlvbiAuLWJ0bltkaXNhYmxlZF17b3BhY2l0eTouNTtjdXJzb3I6ZGVmYXVsdH0uUmVhY3RUYWJsZSAuLXBhZ2luYXRpb24gLi1idG46bm90KFtkaXNhYmxlZF0pOmhvdmVye2JhY2tncm91bmQ6cmdiYSgwLDAsMCwwLjMpO2NvbG9yOiNmZmZ9LlJlYWN0VGFibGUgLi1wYWdpbmF0aW9uIC4tcHJldmlvdXMsLlJlYWN0VGFibGUgLi1wYWdpbmF0aW9uIC4tbmV4dHstd2Via2l0LWJveC1mbGV4OjE7LW1zLWZsZXg6MTtmbGV4OjE7dGV4dC1hbGlnbjpjZW50ZXJ9LlJlYWN0VGFibGUgLi1wYWdpbmF0aW9uIC4tY2VudGVyey13ZWJraXQtYm94LWZsZXg6MS41Oy1tcy1mbGV4OjEuNTtmbGV4OjEuNTt0ZXh0LWFsaWduOmNlbnRlcjttYXJnaW4tYm90dG9tOjA7ZGlzcGxheTotd2Via2l0LWJveDtkaXNwbGF5Oi1tcy1mbGV4Ym94O2Rpc3BsYXk6ZmxleDstd2Via2l0LWJveC1vcmllbnQ6aG9yaXpvbnRhbDstd2Via2l0LWJveC1kaXJlY3Rpb246bm9ybWFsOy1tcy1mbGV4LWRpcmVjdGlvbjpyb3c7ZmxleC1kaXJlY3Rpb246cm93Oy1tcy1mbGV4LXdyYXA6d3JhcDtmbGV4LXdyYXA6d3JhcDstd2Via2l0LWJveC1hbGlnbjpjZW50ZXI7LW1zLWZsZXgtYWxpZ246Y2VudGVyO2FsaWduLWl0ZW1zOmNlbnRlcjstbXMtZmxleC1wYWNrOmRpc3RyaWJ1dGU7anVzdGlmeS1jb250ZW50OnNwYWNlLWFyb3VuZH0uUmVhY3RUYWJsZSAuLXBhZ2luYXRpb24gLi1wYWdlSW5mb3tkaXNwbGF5OmlubGluZS1ibG9jazttYXJnaW46M3B4IDEwcHg7d2hpdGUtc3BhY2U6bm93cmFwfS5SZWFjdFRhYmxlIC4tcGFnaW5hdGlvbiAuLXBhZ2VKdW1we2Rpc3BsYXk6aW5saW5lLWJsb2NrO30uUmVhY3RUYWJsZSAuLXBhZ2luYXRpb24gLi1wYWdlSnVtcCBpbnB1dHt3aWR0aDo3MHB4O3RleHQtYWxpZ246Y2VudGVyfS5SZWFjdFRhYmxlIC4tcGFnaW5hdGlvbiAuLXBhZ2VTaXplT3B0aW9uc3ttYXJnaW46M3B4IDEwcHh9LlJlYWN0VGFibGUgLnJ0LW5vRGF0YXtkaXNwbGF5OmJsb2NrO3Bvc2l0aW9uOmFic29sdXRlO2xlZnQ6NTAlO3RvcDo1MCU7LXdlYmtpdC10cmFuc2Zvcm06dHJhbnNsYXRlKC01MCUsLTUwJSk7dHJhbnNmb3JtOnRyYW5zbGF0ZSgtNTAlLC01MCUpO2JhY2tncm91bmQ6cmdiYSgyNTUsMjU1LDI1NSwwLjgpO3RyYW5zaXRpb246YWxsIC4zcyBlYXNlO3otaW5kZXg6MTtwb2ludGVyLWV2ZW50czpub25lO3BhZGRpbmc6MjBweDtjb2xvcjpyZ2JhKDAsMCwwLDAuNSl9LlJlYWN0VGFibGUgLi1sb2FkaW5ne2Rpc3BsYXk6YmxvY2s7cG9zaXRpb246YWJzb2x1dGU7bGVmdDowO3JpZ2h0OjA7dG9wOjA7Ym90dG9tOjA7YmFja2dyb3VuZDpyZ2JhKDI1NSwyNTUsMjU1LDAuOCk7dHJhbnNpdGlvbjphbGwgLjNzIGVhc2U7ei1pbmRleDotMTtvcGFjaXR5OjA7cG9pbnRlci1ldmVudHM6bm9uZTt9LlJlYWN0VGFibGUgLi1sb2FkaW5nID4gZGl2e3Bvc2l0aW9uOmFic29sdXRlO2Rpc3BsYXk6YmxvY2s7dGV4dC1hbGlnbjpjZW50ZXI7d2lkdGg6MTAwJTt0b3A6NTAlO2xlZnQ6MDtmb250LXNpemU6MTVweDtjb2xvcjpyZ2JhKDAsMCwwLDAuNik7LXdlYmtpdC10cmFuc2Zvcm06dHJhbnNsYXRlWSgtNTIlKTt0cmFuc2Zvcm06dHJhbnNsYXRlWSgtNTIlKTt0cmFuc2l0aW9uOmFsbCAuM3MgY3ViaWMtYmV6aWVyKC4yNSwuNDYsLjQ1LC45NCl9LlJlYWN0VGFibGUgLi1sb2FkaW5nLi1hY3RpdmV7b3BhY2l0eToxO3otaW5kZXg6Mjtwb2ludGVyLWV2ZW50czphbGw7fS5SZWFjdFRhYmxlIC4tbG9hZGluZy4tYWN0aXZlID4gZGl2ey13ZWJraXQtdHJhbnNmb3JtOnRyYW5zbGF0ZVkoNTAlKTt0cmFuc2Zvcm06dHJhbnNsYXRlWSg1MCUpfS5SZWFjdFRhYmxlIC5ydC1yZXNpemluZyAucnQtdGgsLlJlYWN0VGFibGUgLnJ0LXJlc2l6aW5nIC5ydC10ZHt0cmFuc2l0aW9uOm5vbmUgIWltcG9ydGFudDtjdXJzb3I6Y29sLXJlc2l6ZTstd2Via2l0LXVzZXItc2VsZWN0Om5vbmU7LW1vei11c2VyLXNlbGVjdDpub25lOy1tcy11c2VyLXNlbGVjdDpub25lO3VzZXItc2VsZWN0Om5vbmV9Il0sInNvdXJjZVJvb3QiOiIifQ== */
      </style>
      <style>.emoji-mart,
         .emoji-mart * {
         box-sizing: border-box;
         line-height: 1.15;
         }
         .emoji-mart {
         font-family: -apple-system, BlinkMacSystemFont, "Helvetica Neue", sans-serif;
         font-size: 16px;
         display: inline-block;
         color: #222427;
         border: 1px solid #d9d9d9;
         border-radius: 5px;
         background: #fff;
         }
         .emoji-mart .emoji-mart-emoji {
         padding: 6px;
         }
         .emoji-mart-bar {
         border: 0 solid #d9d9d9;
         }
         .emoji-mart-bar:first-child {
         border-bottom-width: 1px;
         border-top-left-radius: 5px;
         border-top-right-radius: 5px;
         }
         .emoji-mart-bar:last-child {
         border-top-width: 1px;
         border-bottom-left-radius: 5px;
         border-bottom-right-radius: 5px;
         }
         .emoji-mart-anchors {
         display: flex;
         flex-direction: row;
         justify-content: space-between;
         padding: 0 6px;
         line-height: 0;
         }
         .emoji-mart-anchor {
         position: relative;
         display: block;
         flex: 1 1 auto;
         color: #858585;
         text-align: center;
         padding: 12px 4px;
         overflow: hidden;
         transition: color .1s ease-out;
         margin: 0;
         box-shadow: none;
         background: none;
         border: none;
         }
         .emoji-mart-anchor:focus { outline: 0 }
         .emoji-mart-anchor:hover,
         .emoji-mart-anchor:focus,
         .emoji-mart-anchor-selected {
         color: #464646;
         }
         .emoji-mart-anchor-selected .emoji-mart-anchor-bar {
         bottom: 0;
         }
         .emoji-mart-anchor-bar {
         position: absolute;
         bottom: -3px; left: 0;
         width: 100%; height: 3px;
         background-color: #464646;
         }
         .emoji-mart-anchors i {
         display: inline-block;
         width: 100%;
         max-width: 22px;
         }
         .emoji-mart-anchors svg,
         .emoji-mart-anchors img {
         fill: currentColor;
         height: 18px;
         width: 18px;
         }
         .emoji-mart-scroll {
         overflow-y: scroll;
         overflow-x: hidden;
         height: 270px;
         padding: 0 6px 6px 6px;
         will-change: transform; /* avoids "repaints on scroll" in mobile Chrome */
         }
         .emoji-mart-search {
         margin-top: 6px;
         padding: 0 6px;
         position: relative;
         }
         .emoji-mart-search input {
         font-size: 16px;
         display: block;
         width: 100%;
         padding: 5px 25px 6px 10px;
         border-radius: 5px;
         border: 1px solid #d9d9d9;
         outline: 0;
         }
         .emoji-mart-search input,
         .emoji-mart-search input::-webkit-search-decoration,
         .emoji-mart-search input::-webkit-search-cancel-button,
         .emoji-mart-search input::-webkit-search-results-button,
         .emoji-mart-search input::-webkit-search-results-decoration {
         /* remove webkit/blink styles for <input type="search">
         * via https://stackoverflow.com/a/9422689 */
         -webkit-appearance: none;
         }
         .emoji-mart-search-icon {
         position: absolute;
         top: 7px;
         right: 11px;
         z-index: 2;
         padding: 2px 5px 1px;
         border: none;
         background: none;
         }
         .emoji-mart-category .emoji-mart-emoji span {
         z-index: 1;
         position: relative;
         text-align: center;
         cursor: default;
         }
         .emoji-mart-category .emoji-mart-emoji:hover:before {
         z-index: 0;
         content: "";
         position: absolute;
         top: 0; left: 0;
         width: 100%; height: 100%;
         background-color: #f4f4f4;
         border-radius: 100%;
         }
         .emoji-mart-category-label {
         z-index: 2;
         position: relative;
         position: -webkit-sticky;
         position: sticky;
         top: 0;
         }
         .emoji-mart-category-label span {
         display: block;
         width: 100%;
         font-weight: 500;
         padding: 5px 6px;
         background-color: #fff;
         background-color: rgba(255, 255, 255, .95);
         }
         .emoji-mart-category-list {
         margin: 0;
         padding: 0;
         }
         .emoji-mart-category-list li {
         list-style: none;
         margin: 0;
         padding: 0;
         display: inline-block;
         }
         .emoji-mart-emoji {
         position: relative;
         display: inline-block;
         font-size: 0;
         margin: 0;
         padding: 0;
         border: none;
         background: none;
         box-shadow: none;
         }
         .emoji-mart-emoji-native {
         font-family: "Segoe UI Emoji", "Segoe UI Symbol", "Segoe UI", "Apple Color Emoji", "Twemoji Mozilla", "Noto Color Emoji", "Android Emoji";
         }
         .emoji-mart-no-results {
         font-size: 14px;
         text-align: center;
         padding-top: 70px;
         color: #858585;
         }
         .emoji-mart-no-results-img {
         display: block;
         margin-left: auto;
         margin-right: auto;
         width: 50%;
         }
         .emoji-mart-no-results .emoji-mart-category-label {
         display: none;
         }
         .emoji-mart-no-results .emoji-mart-no-results-label {
         margin-top: .2em;
         }
         .emoji-mart-no-results .emoji-mart-emoji:hover:before {
         content: none;
         }
         .emoji-mart-preview {
         position: relative;
         height: 70px;
         }
         .emoji-mart-preview-emoji,
         .emoji-mart-preview-data,
         .emoji-mart-preview-skins {
         position: absolute;
         top: 50%;
         transform: translateY(-50%);
         }
         .emoji-mart-preview-emoji {
         left: 12px;
         }
         .emoji-mart-preview-data {
         left: 68px; right: 12px;
         word-break: break-all;
         }
         .emoji-mart-preview-skins {
         right: 30px;
         text-align: right;
         }
         .emoji-mart-preview-skins.custom {
         right: 10px;
         text-align: right;
         }
         .emoji-mart-preview-name {
         font-size: 14px;
         }
         .emoji-mart-preview-shortname {
         font-size: 12px;
         color: #888;
         }
         .emoji-mart-preview-shortname + .emoji-mart-preview-shortname,
         .emoji-mart-preview-shortname + .emoji-mart-preview-emoticon,
         .emoji-mart-preview-emoticon + .emoji-mart-preview-emoticon {
         margin-left: .5em;
         }
         .emoji-mart-preview-emoticon {
         font-size: 11px;
         color: #bbb;
         }
         .emoji-mart-title span {
         display: inline-block;
         vertical-align: middle;
         }
         .emoji-mart-title .emoji-mart-emoji {
         padding: 0;
         }
         .emoji-mart-title-label {
         color: #999A9C;
         font-size: 26px;
         font-weight: 300;
         }
         .emoji-mart-skin-swatches {
         font-size: 0;
         padding: 2px 0;
         border: 1px solid #d9d9d9;
         border-radius: 12px;
         background-color: #fff;
         }
         .emoji-mart-skin-swatches.custom {
         font-size: 0;
         border: none;
         background-color: #fff;
         }
         .emoji-mart-skin-swatches.opened .emoji-mart-skin-swatch {
         width: 16px;
         padding: 0 2px;
         }
         .emoji-mart-skin-swatches.opened .emoji-mart-skin-swatch.selected:after {
         opacity: .75;
         }
         .emoji-mart-skin-swatch {
         display: inline-block;
         width: 0;
         vertical-align: middle;
         transition-property: width, padding;
         transition-duration: .125s;
         transition-timing-function: ease-out;
         }
         .emoji-mart-skin-swatch:nth-child(1) { transition-delay: 0s }
         .emoji-mart-skin-swatch:nth-child(2) { transition-delay: .03s }
         .emoji-mart-skin-swatch:nth-child(3) { transition-delay: .06s }
         .emoji-mart-skin-swatch:nth-child(4) { transition-delay: .09s }
         .emoji-mart-skin-swatch:nth-child(5) { transition-delay: .12s }
         .emoji-mart-skin-swatch:nth-child(6) { transition-delay: .15s }
         .emoji-mart-skin-swatch.selected {
         position: relative;
         width: 16px;
         padding: 0 2px;
         }
         .emoji-mart-skin-swatch.selected:after {
         content: "";
         position: absolute;
         top: 50%; left: 50%;
         width: 4px; height: 4px;
         margin: -2px 0 0 -2px;
         background-color: #fff;
         border-radius: 100%;
         pointer-events: none;
         opacity: 0;
         transition: opacity .2s ease-out;
         }
         .emoji-mart-skin-swatch.custom {
         display: inline-block;
         width: 0;
         height: 38px;
         overflow: hidden;
         vertical-align: middle;
         transition-property: width, height;
         transition-duration: .125s;
         transition-timing-function: ease-out;
         cursor: default;
         }
         .emoji-mart-skin-swatch.custom.selected {
         position: relative;
         width: 36px;
         height: 38px;
         padding: 0 2px 0 0;
         }
         .emoji-mart-skin-swatch.custom.selected:after {
         content: "";
         width: 0;
         height: 0;
         }
         .emoji-mart-skin-swatches.custom .emoji-mart-skin-swatch.custom:hover {
         background-color: #f4f4f4;
         border-radius: 10%;
         }
         .emoji-mart-skin-swatches.custom.opened .emoji-mart-skin-swatch.custom {
         width: 36px;
         height: 38px;
         padding: 0 2px 0 0;
         }
         .emoji-mart-skin-swatches.custom.opened .emoji-mart-skin-swatch.custom.selected:after {
         opacity: .75;
         }
         .emoji-mart-skin-text.opened {
         display: inline-block;
         vertical-align: middle;
         text-align: left;
         color: #888;
         font-size: 11px;
         padding: 5px 2px;
         width: 95px;
         height: 40px;
         border-radius: 10%;
         background-color: #fff;
         }
         .emoji-mart-skin {
         display: inline-block;
         width: 100%;
         padding-top: 100%;
         max-width: 12px;
         border-radius: 100%;
         }
         .emoji-mart-skin-tone-1 { background-color: #ffc93a }
         .emoji-mart-skin-tone-2 { background-color: #fadcbc }
         .emoji-mart-skin-tone-3 { background-color: #e0bb95 }
         .emoji-mart-skin-tone-4 { background-color: #bf8f68 }
         .emoji-mart-skin-tone-5 { background-color: #9b643d }
         .emoji-mart-skin-tone-6 { background-color: #594539 }
         /* For screenreaders only, via https://stackoverflow.com/a/19758620 */
         .emoji-mart-sr-only {
         position: absolute;
         width: 1px;
         height: 1px;
         padding: 0;
         margin: -1px;
         overflow: hidden;
         clip: rect(0, 0, 0, 0);
         border: 0;
         }
         /*
         * Dark mode styles
         */
         .emoji-mart-dark {
         color: #fff;
         border-color: #555453;
         background-color: #222;
         }
         .emoji-mart-dark .emoji-mart-bar {
         border-color: #555453;
         }
         .emoji-mart-dark .emoji-mart-search input {
         color: #fff;
         border-color: #555453;
         background-color: #2f2f2f;
         }
         .emoji-mart-dark .emoji-mart-search-icon svg {
         fill: #fff;
         }
         .emoji-mart-dark .emoji-mart-category .emoji-mart-emoji:hover:before {
         background-color: #444;
         }
         .emoji-mart-dark .emoji-mart-category-label span {
         background-color: #222;
         color: #fff;
         }
         .emoji-mart-dark .emoji-mart-skin-swatches {
         border-color: #555453;
         background-color: #222;
         }
         .emoji-mart-dark .emoji-mart-anchor:hover,
         .emoji-mart-dark .emoji-mart-anchor:focus,
         .emoji-mart-dark .emoji-mart-anchor-selected {
         color: #bfbfbf;
         }
         /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uLy4uLy4uLy4uLy55YXJuL19fdmlydHVhbF9fL2Vtb2ppLW1hcnQtdmlydHVhbC1kY2NhNTAzZTNlLzAvY2FjaGUvZW1vamktbWFydC1ucG0tMy4wLjEtNmU5MmVkYThkZS02MjgyYzZiZmVhLnppcC9ub2RlX21vZHVsZXMvZW1vamktbWFydC9jc3MvZW1vamktbWFydC5jc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7O0VBRUUsc0JBQXNCO0VBQ3RCLGlCQUFpQjtBQUNuQjs7QUFFQTtFQUNFLDRFQUE0RTtFQUM1RSxlQUFlO0VBQ2YscUJBQXFCO0VBQ3JCLGNBQWM7RUFDZCx5QkFBeUI7RUFDekIsa0JBQWtCO0VBQ2xCLGdCQUFnQjtBQUNsQjs7QUFFQTtFQUNFLFlBQVk7QUFDZDs7QUFFQTtFQUNFLHVCQUF1QjtBQUN6QjtBQUNBO0VBQ0Usd0JBQXdCO0VBQ3hCLDJCQUEyQjtFQUMzQiw0QkFBNEI7QUFDOUI7QUFDQTtFQUNFLHFCQUFxQjtFQUNyQiw4QkFBOEI7RUFDOUIsK0JBQStCO0FBQ2pDOztBQUVBO0VBQ0UsYUFBYTtFQUNiLG1CQUFtQjtFQUNuQiw4QkFBOEI7RUFDOUIsY0FBYztFQUNkLGNBQWM7QUFDaEI7O0FBRUE7RUFDRSxrQkFBa0I7RUFDbEIsY0FBYztFQUNkLGNBQWM7RUFDZCxjQUFjO0VBQ2Qsa0JBQWtCO0VBQ2xCLGlCQUFpQjtFQUNqQixnQkFBZ0I7RUFDaEIsOEJBQThCO0VBQzlCLFNBQVM7RUFDVCxnQkFBZ0I7RUFDaEIsZ0JBQWdCO0VBQ2hCLFlBQVk7QUFDZDtBQUNBLDJCQUEyQixXQUFXO0FBQ3RDOzs7RUFHRSxjQUFjO0FBQ2hCOztBQUVBO0VBQ0UsU0FBUztBQUNYOztBQUVBO0VBQ0Usa0JBQWtCO0VBQ2xCLFlBQVksRUFBRSxPQUFPO0VBQ3JCLFdBQVcsRUFBRSxXQUFXO0VBQ3hCLHlCQUF5QjtBQUMzQjs7QUFFQTtFQUNFLHFCQUFxQjtFQUNyQixXQUFXO0VBQ1gsZUFBZTtBQUNqQjs7QUFFQTs7RUFFRSxrQkFBa0I7RUFDbEIsWUFBWTtFQUNaLFdBQVc7QUFDYjs7QUFFQTtFQUNFLGtCQUFrQjtFQUNsQixrQkFBa0I7RUFDbEIsYUFBYTtFQUNiLHNCQUFzQjtFQUN0QixzQkFBc0IsRUFBRSxpREFBaUQ7QUFDM0U7O0FBRUE7RUFDRSxlQUFlO0VBQ2YsY0FBYztFQUNkLGtCQUFrQjtBQUNwQjs7QUFFQTtFQUNFLGVBQWU7RUFDZixjQUFjO0VBQ2QsV0FBVztFQUNYLDBCQUEwQjtFQUMxQixrQkFBa0I7RUFDbEIseUJBQXlCO0VBQ3pCLFVBQVU7QUFDWjs7QUFFQTs7Ozs7RUFLRTs4Q0FDNEM7RUFDNUMsd0JBQXdCO0FBQzFCOztBQUVBO0VBQ0Usa0JBQWtCO0VBQ2xCLFFBQVE7RUFDUixXQUFXO0VBQ1gsVUFBVTtFQUNWLG9CQUFvQjtFQUNwQixZQUFZO0VBQ1osZ0JBQWdCO0FBQ2xCOztBQUVBO0VBQ0UsVUFBVTtFQUNWLGtCQUFrQjtFQUNsQixrQkFBa0I7RUFDbEIsZUFBZTtBQUNqQjs7QUFFQTtFQUNFLFVBQVU7RUFDVixXQUFXO0VBQ1gsa0JBQWtCO0VBQ2xCLE1BQU0sRUFBRSxPQUFPO0VBQ2YsV0FBVyxFQUFFLFlBQVk7RUFDekIseUJBQXlCO0VBQ3pCLG1CQUFtQjtBQUNyQjs7QUFFQTtFQUNFLFVBQVU7RUFDVixrQkFBa0I7RUFDbEIsd0JBQXdCO0VBQ3hCLGdCQUFnQjtFQUNoQixNQUFNO0FBQ1I7O0FBRUE7RUFDRSxjQUFjO0VBQ2QsV0FBVztFQUNYLGdCQUFnQjtFQUNoQixnQkFBZ0I7RUFDaEIsc0JBQXNCO0VBQ3RCLDBDQUEwQztBQUM1Qzs7QUFFQTtFQUNFLFNBQVM7RUFDVCxVQUFVO0FBQ1o7O0FBRUE7RUFDRSxnQkFBZ0I7RUFDaEIsU0FBUztFQUNULFVBQVU7RUFDVixxQkFBcUI7QUFDdkI7O0FBRUE7RUFDRSxrQkFBa0I7RUFDbEIscUJBQXFCO0VBQ3JCLFlBQVk7RUFDWixTQUFTO0VBQ1QsVUFBVTtFQUNWLFlBQVk7RUFDWixnQkFBZ0I7RUFDaEIsZ0JBQWdCO0FBQ2xCOztBQUVBO0VBQ0UseUlBQXlJO0FBQzNJOztBQUVBO0VBQ0UsZUFBZTtFQUNmLGtCQUFrQjtFQUNsQixpQkFBaUI7RUFDakIsY0FBYztBQUNoQjtBQUNBO0VBQ0UsY0FBYztFQUNkLGlCQUFpQjtFQUNqQixrQkFBa0I7RUFDbEIsVUFBVTtBQUNaO0FBQ0E7RUFDRSxhQUFhO0FBQ2Y7QUFDQTtFQUNFLGdCQUFnQjtBQUNsQjtBQUNBO0VBQ0UsYUFBYTtBQUNmOztBQUVBO0VBQ0Usa0JBQWtCO0VBQ2xCLFlBQVk7QUFDZDs7QUFFQTs7O0VBR0Usa0JBQWtCO0VBQ2xCLFFBQVE7RUFDUiwyQkFBMkI7QUFDN0I7O0FBRUE7RUFDRSxVQUFVO0FBQ1o7O0FBRUE7RUFDRSxVQUFVLEVBQUUsV0FBVztFQUN2QixxQkFBcUI7QUFDdkI7O0FBRUE7RUFDRSxXQUFXO0VBQ1gsaUJBQWlCO0FBQ25COztBQUVBO0VBQ0UsV0FBVztFQUNYLGlCQUFpQjtBQUNuQjs7QUFFQTtFQUNFLGVBQWU7QUFDakI7O0FBRUE7RUFDRSxlQUFlO0VBQ2YsV0FBVztBQUNiO0FBQ0E7OztFQUdFLGlCQUFpQjtBQUNuQjs7QUFFQTtFQUNFLGVBQWU7RUFDZixXQUFXO0FBQ2I7O0FBRUE7RUFDRSxxQkFBcUI7RUFDckIsc0JBQXNCO0FBQ3hCOztBQUVBO0VBQ0UsVUFBVTtBQUNaOztBQUVBO0VBQ0UsY0FBYztFQUNkLGVBQWU7RUFDZixnQkFBZ0I7QUFDbEI7O0FBRUE7RUFDRSxZQUFZO0VBQ1osY0FBYztFQUNkLHlCQUF5QjtFQUN6QixtQkFBbUI7RUFDbkIsc0JBQXNCO0FBQ3hCOztBQUVBO0VBQ0UsWUFBWTtFQUNaLFlBQVk7RUFDWixzQkFBc0I7QUFDeEI7O0FBRUE7RUFDRSxXQUFXO0VBQ1gsY0FBYztBQUNoQjs7QUFFQTtFQUNFLFlBQVk7QUFDZDs7QUFFQTtFQUNFLHFCQUFxQjtFQUNyQixRQUFRO0VBQ1Isc0JBQXNCO0VBQ3RCLG1DQUFtQztFQUNuQywwQkFBMEI7RUFDMUIsb0NBQW9DO0FBQ3RDOztBQUVBLHVDQUF1QyxxQkFBcUI7QUFDNUQsdUNBQXVDLHVCQUF1QjtBQUM5RCx1Q0FBdUMsdUJBQXVCO0FBQzlELHVDQUF1Qyx1QkFBdUI7QUFDOUQsdUNBQXVDLHVCQUF1QjtBQUM5RCx1Q0FBdUMsdUJBQXVCOztBQUU5RDtFQUNFLGtCQUFrQjtFQUNsQixXQUFXO0VBQ1gsY0FBYztBQUNoQjs7QUFFQTtFQUNFLFdBQVc7RUFDWCxrQkFBa0I7RUFDbEIsUUFBUSxFQUFFLFNBQVM7RUFDbkIsVUFBVSxFQUFFLFdBQVc7RUFDdkIscUJBQXFCO0VBQ3JCLHNCQUFzQjtFQUN0QixtQkFBbUI7RUFDbkIsb0JBQW9CO0VBQ3BCLFVBQVU7RUFDVixnQ0FBZ0M7QUFDbEM7O0FBRUE7RUFDRSxxQkFBcUI7RUFDckIsUUFBUTtFQUNSLFlBQVk7RUFDWixnQkFBZ0I7RUFDaEIsc0JBQXNCO0VBQ3RCLGtDQUFrQztFQUNsQywwQkFBMEI7RUFDMUIsb0NBQW9DO0VBQ3BDLGVBQWU7QUFDakI7O0FBRUE7RUFDRSxrQkFBa0I7RUFDbEIsV0FBVztFQUNYLFlBQVk7RUFDWixrQkFBa0I7QUFDcEI7O0FBRUE7RUFDRSxXQUFXO0VBQ1gsUUFBUTtFQUNSLFNBQVM7QUFDWDs7QUFFQTtFQUNFLHlCQUF5QjtFQUN6QixrQkFBa0I7QUFDcEI7O0FBRUE7RUFDRSxXQUFXO0VBQ1gsWUFBWTtFQUNaLGtCQUFrQjtBQUNwQjs7QUFFQTtFQUNFLFlBQVk7QUFDZDs7QUFFQTtFQUNFLHFCQUFxQjtFQUNyQixzQkFBc0I7RUFDdEIsZ0JBQWdCO0VBQ2hCLFdBQVc7RUFDWCxlQUFlO0VBQ2YsZ0JBQWdCO0VBQ2hCLFdBQVc7RUFDWCxZQUFZO0VBQ1osa0JBQWtCO0VBQ2xCLHNCQUFzQjtBQUN4Qjs7QUFFQTtFQUNFLHFCQUFxQjtFQUNyQixXQUFXO0VBQ1gsaUJBQWlCO0VBQ2pCLGVBQWU7RUFDZixtQkFBbUI7QUFDckI7O0FBRUEsMEJBQTBCLDBCQUEwQjtBQUNwRCwwQkFBMEIsMEJBQTBCO0FBQ3BELDBCQUEwQiwwQkFBMEI7QUFDcEQsMEJBQTBCLDBCQUEwQjtBQUNwRCwwQkFBMEIsMEJBQTBCO0FBQ3BELDBCQUEwQiwwQkFBMEI7O0FBRXBELHFFQUFxRTtBQUNyRTtFQUNFLGtCQUFrQjtFQUNsQixVQUFVO0VBQ1YsV0FBVztFQUNYLFVBQVU7RUFDVixZQUFZO0VBQ1osZ0JBQWdCO0VBQ2hCLHNCQUFzQjtFQUN0QixTQUFTO0FBQ1g7O0FBRUE7O0VBRUU7O0FBRUY7RUFDRSxXQUFXO0VBQ1gscUJBQXFCO0VBQ3JCLHNCQUFzQjtBQUN4Qjs7QUFFQTtFQUNFLHFCQUFxQjtBQUN2Qjs7QUFFQTtFQUNFLFdBQVc7RUFDWCxxQkFBcUI7RUFDckIseUJBQXlCO0FBQzNCOztBQUVBO0VBQ0UsVUFBVTtBQUNaOztBQUVBO0VBQ0Usc0JBQXNCO0FBQ3hCOztBQUVBO0VBQ0Usc0JBQXNCO0VBQ3RCLFdBQVc7QUFDYjs7QUFFQTtFQUNFLHFCQUFxQjtFQUNyQixzQkFBc0I7QUFDeEI7O0FBRUE7OztFQUdFLGNBQWM7QUFDaEIiLCJzb3VyY2VzQ29udGVudCI6WyIuZW1vamktbWFydCxcbi5lbW9qaS1tYXJ0ICoge1xuICBib3gtc2l6aW5nOiBib3JkZXItYm94O1xuICBsaW5lLWhlaWdodDogMS4xNTtcbn1cblxuLmVtb2ppLW1hcnQge1xuICBmb250LWZhbWlseTogLWFwcGxlLXN5c3RlbSwgQmxpbmtNYWNTeXN0ZW1Gb250LCBcIkhlbHZldGljYSBOZXVlXCIsIHNhbnMtc2VyaWY7XG4gIGZvbnQtc2l6ZTogMTZweDtcbiAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICBjb2xvcjogIzIyMjQyNztcbiAgYm9yZGVyOiAxcHggc29saWQgI2Q5ZDlkOTtcbiAgYm9yZGVyLXJhZGl1czogNXB4O1xuICBiYWNrZ3JvdW5kOiAjZmZmO1xufVxuXG4uZW1vamktbWFydCAuZW1vamktbWFydC1lbW9qaSB7XG4gIHBhZGRpbmc6IDZweDtcbn1cblxuLmVtb2ppLW1hcnQtYmFyIHtcbiAgYm9yZGVyOiAwIHNvbGlkICNkOWQ5ZDk7XG59XG4uZW1vamktbWFydC1iYXI6Zmlyc3QtY2hpbGQge1xuICBib3JkZXItYm90dG9tLXdpZHRoOiAxcHg7XG4gIGJvcmRlci10b3AtbGVmdC1yYWRpdXM6IDVweDtcbiAgYm9yZGVyLXRvcC1yaWdodC1yYWRpdXM6IDVweDtcbn1cbi5lbW9qaS1tYXJ0LWJhcjpsYXN0LWNoaWxkIHtcbiAgYm9yZGVyLXRvcC13aWR0aDogMXB4O1xuICBib3JkZXItYm90dG9tLWxlZnQtcmFkaXVzOiA1cHg7XG4gIGJvcmRlci1ib3R0b20tcmlnaHQtcmFkaXVzOiA1cHg7XG59XG5cbi5lbW9qaS1tYXJ0LWFuY2hvcnMge1xuICBkaXNwbGF5OiBmbGV4O1xuICBmbGV4LWRpcmVjdGlvbjogcm93O1xuICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWJldHdlZW47XG4gIHBhZGRpbmc6IDAgNnB4O1xuICBsaW5lLWhlaWdodDogMDtcbn1cblxuLmVtb2ppLW1hcnQtYW5jaG9yIHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICBkaXNwbGF5OiBibG9jaztcbiAgZmxleDogMSAxIGF1dG87XG4gIGNvbG9yOiAjODU4NTg1O1xuICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gIHBhZGRpbmc6IDEycHggNHB4O1xuICBvdmVyZmxvdzogaGlkZGVuO1xuICB0cmFuc2l0aW9uOiBjb2xvciAuMXMgZWFzZS1vdXQ7XG4gIG1hcmdpbjogMDtcbiAgYm94LXNoYWRvdzogbm9uZTtcbiAgYmFja2dyb3VuZDogbm9uZTtcbiAgYm9yZGVyOiBub25lO1xufVxuLmVtb2ppLW1hcnQtYW5jaG9yOmZvY3VzIHsgb3V0bGluZTogMCB9XG4uZW1vamktbWFydC1hbmNob3I6aG92ZXIsXG4uZW1vamktbWFydC1hbmNob3I6Zm9jdXMsXG4uZW1vamktbWFydC1hbmNob3Itc2VsZWN0ZWQge1xuICBjb2xvcjogIzQ2NDY0Njtcbn1cblxuLmVtb2ppLW1hcnQtYW5jaG9yLXNlbGVjdGVkIC5lbW9qaS1tYXJ0LWFuY2hvci1iYXIge1xuICBib3R0b206IDA7XG59XG5cbi5lbW9qaS1tYXJ0LWFuY2hvci1iYXIge1xuICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gIGJvdHRvbTogLTNweDsgbGVmdDogMDtcbiAgd2lkdGg6IDEwMCU7IGhlaWdodDogM3B4O1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjNDY0NjQ2O1xufVxuXG4uZW1vamktbWFydC1hbmNob3JzIGkge1xuICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gIHdpZHRoOiAxMDAlO1xuICBtYXgtd2lkdGg6IDIycHg7XG59XG5cbi5lbW9qaS1tYXJ0LWFuY2hvcnMgc3ZnLFxuLmVtb2ppLW1hcnQtYW5jaG9ycyBpbWcge1xuICBmaWxsOiBjdXJyZW50Q29sb3I7XG4gIGhlaWdodDogMThweDtcbiAgd2lkdGg6IDE4cHg7XG59XG5cbi5lbW9qaS1tYXJ0LXNjcm9sbCB7XG4gIG92ZXJmbG93LXk6IHNjcm9sbDtcbiAgb3ZlcmZsb3cteDogaGlkZGVuO1xuICBoZWlnaHQ6IDI3MHB4O1xuICBwYWRkaW5nOiAwIDZweCA2cHggNnB4O1xuICB3aWxsLWNoYW5nZTogdHJhbnNmb3JtOyAvKiBhdm9pZHMgXCJyZXBhaW50cyBvbiBzY3JvbGxcIiBpbiBtb2JpbGUgQ2hyb21lICovXG59XG5cbi5lbW9qaS1tYXJ0LXNlYXJjaCB7XG4gIG1hcmdpbi10b3A6IDZweDtcbiAgcGFkZGluZzogMCA2cHg7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbn1cblxuLmVtb2ppLW1hcnQtc2VhcmNoIGlucHV0IHtcbiAgZm9udC1zaXplOiAxNnB4O1xuICBkaXNwbGF5OiBibG9jaztcbiAgd2lkdGg6IDEwMCU7XG4gIHBhZGRpbmc6IDVweCAyNXB4IDZweCAxMHB4O1xuICBib3JkZXItcmFkaXVzOiA1cHg7XG4gIGJvcmRlcjogMXB4IHNvbGlkICNkOWQ5ZDk7XG4gIG91dGxpbmU6IDA7XG59XG5cbi5lbW9qaS1tYXJ0LXNlYXJjaCBpbnB1dCxcbi5lbW9qaS1tYXJ0LXNlYXJjaCBpbnB1dDo6LXdlYmtpdC1zZWFyY2gtZGVjb3JhdGlvbixcbi5lbW9qaS1tYXJ0LXNlYXJjaCBpbnB1dDo6LXdlYmtpdC1zZWFyY2gtY2FuY2VsLWJ1dHRvbixcbi5lbW9qaS1tYXJ0LXNlYXJjaCBpbnB1dDo6LXdlYmtpdC1zZWFyY2gtcmVzdWx0cy1idXR0b24sXG4uZW1vamktbWFydC1zZWFyY2ggaW5wdXQ6Oi13ZWJraXQtc2VhcmNoLXJlc3VsdHMtZGVjb3JhdGlvbiB7XG4gIC8qIHJlbW92ZSB3ZWJraXQvYmxpbmsgc3R5bGVzIGZvciA8aW5wdXQgdHlwZT1cInNlYXJjaFwiPlxuICAgKiB2aWEgaHR0cHM6Ly9zdGFja292ZXJmbG93LmNvbS9hLzk0MjI2ODkgKi9cbiAgLXdlYmtpdC1hcHBlYXJhbmNlOiBub25lO1xufVxuXG4uZW1vamktbWFydC1zZWFyY2gtaWNvbiB7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgdG9wOiA3cHg7XG4gIHJpZ2h0OiAxMXB4O1xuICB6LWluZGV4OiAyO1xuICBwYWRkaW5nOiAycHggNXB4IDFweDtcbiAgYm9yZGVyOiBub25lO1xuICBiYWNrZ3JvdW5kOiBub25lO1xufVxuXG4uZW1vamktbWFydC1jYXRlZ29yeSAuZW1vamktbWFydC1lbW9qaSBzcGFuIHtcbiAgei1pbmRleDogMTtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gIGN1cnNvcjogZGVmYXVsdDtcbn1cblxuLmVtb2ppLW1hcnQtY2F0ZWdvcnkgLmVtb2ppLW1hcnQtZW1vamk6aG92ZXI6YmVmb3JlIHtcbiAgei1pbmRleDogMDtcbiAgY29udGVudDogXCJcIjtcbiAgcG9zaXRpb246IGFic29sdXRlO1xuICB0b3A6IDA7IGxlZnQ6IDA7XG4gIHdpZHRoOiAxMDAlOyBoZWlnaHQ6IDEwMCU7XG4gIGJhY2tncm91bmQtY29sb3I6ICNmNGY0ZjQ7XG4gIGJvcmRlci1yYWRpdXM6IDEwMCU7XG59XG5cbi5lbW9qaS1tYXJ0LWNhdGVnb3J5LWxhYmVsIHtcbiAgei1pbmRleDogMjtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICBwb3NpdGlvbjogLXdlYmtpdC1zdGlja3k7XG4gIHBvc2l0aW9uOiBzdGlja3k7XG4gIHRvcDogMDtcbn1cblxuLmVtb2ppLW1hcnQtY2F0ZWdvcnktbGFiZWwgc3BhbiB7XG4gIGRpc3BsYXk6IGJsb2NrO1xuICB3aWR0aDogMTAwJTtcbiAgZm9udC13ZWlnaHQ6IDUwMDtcbiAgcGFkZGluZzogNXB4IDZweDtcbiAgYmFja2dyb3VuZC1jb2xvcjogI2ZmZjtcbiAgYmFja2dyb3VuZC1jb2xvcjogcmdiYSgyNTUsIDI1NSwgMjU1LCAuOTUpO1xufVxuXG4uZW1vamktbWFydC1jYXRlZ29yeS1saXN0IHtcbiAgbWFyZ2luOiAwO1xuICBwYWRkaW5nOiAwO1xufVxuXG4uZW1vamktbWFydC1jYXRlZ29yeS1saXN0IGxpIHtcbiAgbGlzdC1zdHlsZTogbm9uZTtcbiAgbWFyZ2luOiAwO1xuICBwYWRkaW5nOiAwO1xuICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG59XG5cbi5lbW9qaS1tYXJ0LWVtb2ppIHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gIGZvbnQtc2l6ZTogMDtcbiAgbWFyZ2luOiAwO1xuICBwYWRkaW5nOiAwO1xuICBib3JkZXI6IG5vbmU7XG4gIGJhY2tncm91bmQ6IG5vbmU7XG4gIGJveC1zaGFkb3c6IG5vbmU7XG59XG5cbi5lbW9qaS1tYXJ0LWVtb2ppLW5hdGl2ZSB7XG4gIGZvbnQtZmFtaWx5OiBcIlNlZ29lIFVJIEVtb2ppXCIsIFwiU2Vnb2UgVUkgU3ltYm9sXCIsIFwiU2Vnb2UgVUlcIiwgXCJBcHBsZSBDb2xvciBFbW9qaVwiLCBcIlR3ZW1vamkgTW96aWxsYVwiLCBcIk5vdG8gQ29sb3IgRW1vamlcIiwgXCJBbmRyb2lkIEVtb2ppXCI7XG59XG5cbi5lbW9qaS1tYXJ0LW5vLXJlc3VsdHMge1xuICBmb250LXNpemU6IDE0cHg7XG4gIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgcGFkZGluZy10b3A6IDcwcHg7XG4gIGNvbG9yOiAjODU4NTg1O1xufVxuLmVtb2ppLW1hcnQtbm8tcmVzdWx0cy1pbWcge1xuICBkaXNwbGF5OiBibG9jaztcbiAgbWFyZ2luLWxlZnQ6IGF1dG87XG4gIG1hcmdpbi1yaWdodDogYXV0bztcbiAgd2lkdGg6IDUwJTtcbn1cbi5lbW9qaS1tYXJ0LW5vLXJlc3VsdHMgLmVtb2ppLW1hcnQtY2F0ZWdvcnktbGFiZWwge1xuICBkaXNwbGF5OiBub25lO1xufVxuLmVtb2ppLW1hcnQtbm8tcmVzdWx0cyAuZW1vamktbWFydC1uby1yZXN1bHRzLWxhYmVsIHtcbiAgbWFyZ2luLXRvcDogLjJlbTtcbn1cbi5lbW9qaS1tYXJ0LW5vLXJlc3VsdHMgLmVtb2ppLW1hcnQtZW1vamk6aG92ZXI6YmVmb3JlIHtcbiAgY29udGVudDogbm9uZTtcbn1cblxuLmVtb2ppLW1hcnQtcHJldmlldyB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgaGVpZ2h0OiA3MHB4O1xufVxuXG4uZW1vamktbWFydC1wcmV2aWV3LWVtb2ppLFxuLmVtb2ppLW1hcnQtcHJldmlldy1kYXRhLFxuLmVtb2ppLW1hcnQtcHJldmlldy1za2lucyB7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgdG9wOiA1MCU7XG4gIHRyYW5zZm9ybTogdHJhbnNsYXRlWSgtNTAlKTtcbn1cblxuLmVtb2ppLW1hcnQtcHJldmlldy1lbW9qaSB7XG4gIGxlZnQ6IDEycHg7XG59XG5cbi5lbW9qaS1tYXJ0LXByZXZpZXctZGF0YSB7XG4gIGxlZnQ6IDY4cHg7IHJpZ2h0OiAxMnB4O1xuICB3b3JkLWJyZWFrOiBicmVhay1hbGw7XG59XG5cbi5lbW9qaS1tYXJ0LXByZXZpZXctc2tpbnMge1xuICByaWdodDogMzBweDtcbiAgdGV4dC1hbGlnbjogcmlnaHQ7XG59XG5cbi5lbW9qaS1tYXJ0LXByZXZpZXctc2tpbnMuY3VzdG9tIHtcbiAgcmlnaHQ6IDEwcHg7XG4gIHRleHQtYWxpZ246IHJpZ2h0O1xufVxuXG4uZW1vamktbWFydC1wcmV2aWV3LW5hbWUge1xuICBmb250LXNpemU6IDE0cHg7XG59XG5cbi5lbW9qaS1tYXJ0LXByZXZpZXctc2hvcnRuYW1lIHtcbiAgZm9udC1zaXplOiAxMnB4O1xuICBjb2xvcjogIzg4ODtcbn1cbi5lbW9qaS1tYXJ0LXByZXZpZXctc2hvcnRuYW1lICsgLmVtb2ppLW1hcnQtcHJldmlldy1zaG9ydG5hbWUsXG4uZW1vamktbWFydC1wcmV2aWV3LXNob3J0bmFtZSArIC5lbW9qaS1tYXJ0LXByZXZpZXctZW1vdGljb24sXG4uZW1vamktbWFydC1wcmV2aWV3LWVtb3RpY29uICsgLmVtb2ppLW1hcnQtcHJldmlldy1lbW90aWNvbiB7XG4gIG1hcmdpbi1sZWZ0OiAuNWVtO1xufVxuXG4uZW1vamktbWFydC1wcmV2aWV3LWVtb3RpY29uIHtcbiAgZm9udC1zaXplOiAxMXB4O1xuICBjb2xvcjogI2JiYjtcbn1cblxuLmVtb2ppLW1hcnQtdGl0bGUgc3BhbiB7XG4gIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgdmVydGljYWwtYWxpZ246IG1pZGRsZTtcbn1cblxuLmVtb2ppLW1hcnQtdGl0bGUgLmVtb2ppLW1hcnQtZW1vamkge1xuICBwYWRkaW5nOiAwO1xufVxuXG4uZW1vamktbWFydC10aXRsZS1sYWJlbCB7XG4gIGNvbG9yOiAjOTk5QTlDO1xuICBmb250LXNpemU6IDI2cHg7XG4gIGZvbnQtd2VpZ2h0OiAzMDA7XG59XG5cbi5lbW9qaS1tYXJ0LXNraW4tc3dhdGNoZXMge1xuICBmb250LXNpemU6IDA7XG4gIHBhZGRpbmc6IDJweCAwO1xuICBib3JkZXI6IDFweCBzb2xpZCAjZDlkOWQ5O1xuICBib3JkZXItcmFkaXVzOiAxMnB4O1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZmZmO1xufVxuXG4uZW1vamktbWFydC1za2luLXN3YXRjaGVzLmN1c3RvbSB7XG4gIGZvbnQtc2l6ZTogMDtcbiAgYm9yZGVyOiBub25lO1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZmZmO1xufVxuXG4uZW1vamktbWFydC1za2luLXN3YXRjaGVzLm9wZW5lZCAuZW1vamktbWFydC1za2luLXN3YXRjaCB7XG4gIHdpZHRoOiAxNnB4O1xuICBwYWRkaW5nOiAwIDJweDtcbn1cblxuLmVtb2ppLW1hcnQtc2tpbi1zd2F0Y2hlcy5vcGVuZWQgLmVtb2ppLW1hcnQtc2tpbi1zd2F0Y2guc2VsZWN0ZWQ6YWZ0ZXIge1xuICBvcGFjaXR5OiAuNzU7XG59XG5cbi5lbW9qaS1tYXJ0LXNraW4tc3dhdGNoIHtcbiAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICB3aWR0aDogMDtcbiAgdmVydGljYWwtYWxpZ246IG1pZGRsZTtcbiAgdHJhbnNpdGlvbi1wcm9wZXJ0eTogd2lkdGgsIHBhZGRpbmc7XG4gIHRyYW5zaXRpb24tZHVyYXRpb246IC4xMjVzO1xuICB0cmFuc2l0aW9uLXRpbWluZy1mdW5jdGlvbjogZWFzZS1vdXQ7XG59XG5cbi5lbW9qaS1tYXJ0LXNraW4tc3dhdGNoOm50aC1jaGlsZCgxKSB7IHRyYW5zaXRpb24tZGVsYXk6IDBzIH1cbi5lbW9qaS1tYXJ0LXNraW4tc3dhdGNoOm50aC1jaGlsZCgyKSB7IHRyYW5zaXRpb24tZGVsYXk6IC4wM3MgfVxuLmVtb2ppLW1hcnQtc2tpbi1zd2F0Y2g6bnRoLWNoaWxkKDMpIHsgdHJhbnNpdGlvbi1kZWxheTogLjA2cyB9XG4uZW1vamktbWFydC1za2luLXN3YXRjaDpudGgtY2hpbGQoNCkgeyB0cmFuc2l0aW9uLWRlbGF5OiAuMDlzIH1cbi5lbW9qaS1tYXJ0LXNraW4tc3dhdGNoOm50aC1jaGlsZCg1KSB7IHRyYW5zaXRpb24tZGVsYXk6IC4xMnMgfVxuLmVtb2ppLW1hcnQtc2tpbi1zd2F0Y2g6bnRoLWNoaWxkKDYpIHsgdHJhbnNpdGlvbi1kZWxheTogLjE1cyB9XG5cbi5lbW9qaS1tYXJ0LXNraW4tc3dhdGNoLnNlbGVjdGVkIHtcbiAgcG9zaXRpb246IHJlbGF0aXZlO1xuICB3aWR0aDogMTZweDtcbiAgcGFkZGluZzogMCAycHg7XG59XG5cbi5lbW9qaS1tYXJ0LXNraW4tc3dhdGNoLnNlbGVjdGVkOmFmdGVyIHtcbiAgY29udGVudDogXCJcIjtcbiAgcG9zaXRpb246IGFic29sdXRlO1xuICB0b3A6IDUwJTsgbGVmdDogNTAlO1xuICB3aWR0aDogNHB4OyBoZWlnaHQ6IDRweDtcbiAgbWFyZ2luOiAtMnB4IDAgMCAtMnB4O1xuICBiYWNrZ3JvdW5kLWNvbG9yOiAjZmZmO1xuICBib3JkZXItcmFkaXVzOiAxMDAlO1xuICBwb2ludGVyLWV2ZW50czogbm9uZTtcbiAgb3BhY2l0eTogMDtcbiAgdHJhbnNpdGlvbjogb3BhY2l0eSAuMnMgZWFzZS1vdXQ7XG59XG5cbi5lbW9qaS1tYXJ0LXNraW4tc3dhdGNoLmN1c3RvbSB7XG4gIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgd2lkdGg6IDA7XG4gIGhlaWdodDogMzhweDtcbiAgb3ZlcmZsb3c6IGhpZGRlbjtcbiAgdmVydGljYWwtYWxpZ246IG1pZGRsZTtcbiAgdHJhbnNpdGlvbi1wcm9wZXJ0eTogd2lkdGgsIGhlaWdodDtcbiAgdHJhbnNpdGlvbi1kdXJhdGlvbjogLjEyNXM7XG4gIHRyYW5zaXRpb24tdGltaW5nLWZ1bmN0aW9uOiBlYXNlLW91dDtcbiAgY3Vyc29yOiBkZWZhdWx0O1xufVxuXG4uZW1vamktbWFydC1za2luLXN3YXRjaC5jdXN0b20uc2VsZWN0ZWQge1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gIHdpZHRoOiAzNnB4O1xuICBoZWlnaHQ6IDM4cHg7XG4gIHBhZGRpbmc6IDAgMnB4IDAgMDtcbn1cblxuLmVtb2ppLW1hcnQtc2tpbi1zd2F0Y2guY3VzdG9tLnNlbGVjdGVkOmFmdGVyIHtcbiAgY29udGVudDogXCJcIjtcbiAgd2lkdGg6IDA7XG4gIGhlaWdodDogMDtcbn1cblxuLmVtb2ppLW1hcnQtc2tpbi1zd2F0Y2hlcy5jdXN0b20gLmVtb2ppLW1hcnQtc2tpbi1zd2F0Y2guY3VzdG9tOmhvdmVyIHtcbiAgYmFja2dyb3VuZC1jb2xvcjogI2Y0ZjRmNDtcbiAgYm9yZGVyLXJhZGl1czogMTAlO1xufVxuXG4uZW1vamktbWFydC1za2luLXN3YXRjaGVzLmN1c3RvbS5vcGVuZWQgLmVtb2ppLW1hcnQtc2tpbi1zd2F0Y2guY3VzdG9tIHtcbiAgd2lkdGg6IDM2cHg7XG4gIGhlaWdodDogMzhweDtcbiAgcGFkZGluZzogMCAycHggMCAwO1xufVxuXG4uZW1vamktbWFydC1za2luLXN3YXRjaGVzLmN1c3RvbS5vcGVuZWQgLmVtb2ppLW1hcnQtc2tpbi1zd2F0Y2guY3VzdG9tLnNlbGVjdGVkOmFmdGVyIHtcbiAgb3BhY2l0eTogLjc1O1xufVxuXG4uZW1vamktbWFydC1za2luLXRleHQub3BlbmVkIHtcbiAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICB2ZXJ0aWNhbC1hbGlnbjogbWlkZGxlO1xuICB0ZXh0LWFsaWduOiBsZWZ0O1xuICBjb2xvcjogIzg4ODtcbiAgZm9udC1zaXplOiAxMXB4O1xuICBwYWRkaW5nOiA1cHggMnB4O1xuICB3aWR0aDogOTVweDtcbiAgaGVpZ2h0OiA0MHB4O1xuICBib3JkZXItcmFkaXVzOiAxMCU7XG4gIGJhY2tncm91bmQtY29sb3I6ICNmZmY7XG59XG5cbi5lbW9qaS1tYXJ0LXNraW4ge1xuICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gIHdpZHRoOiAxMDAlO1xuICBwYWRkaW5nLXRvcDogMTAwJTtcbiAgbWF4LXdpZHRoOiAxMnB4O1xuICBib3JkZXItcmFkaXVzOiAxMDAlO1xufVxuXG4uZW1vamktbWFydC1za2luLXRvbmUtMSB7IGJhY2tncm91bmQtY29sb3I6ICNmZmM5M2EgfVxuLmVtb2ppLW1hcnQtc2tpbi10b25lLTIgeyBiYWNrZ3JvdW5kLWNvbG9yOiAjZmFkY2JjIH1cbi5lbW9qaS1tYXJ0LXNraW4tdG9uZS0zIHsgYmFja2dyb3VuZC1jb2xvcjogI2UwYmI5NSB9XG4uZW1vamktbWFydC1za2luLXRvbmUtNCB7IGJhY2tncm91bmQtY29sb3I6ICNiZjhmNjggfVxuLmVtb2ppLW1hcnQtc2tpbi10b25lLTUgeyBiYWNrZ3JvdW5kLWNvbG9yOiAjOWI2NDNkIH1cbi5lbW9qaS1tYXJ0LXNraW4tdG9uZS02IHsgYmFja2dyb3VuZC1jb2xvcjogIzU5NDUzOSB9XG5cbi8qIEZvciBzY3JlZW5yZWFkZXJzIG9ubHksIHZpYSBodHRwczovL3N0YWNrb3ZlcmZsb3cuY29tL2EvMTk3NTg2MjAgKi9cbi5lbW9qaS1tYXJ0LXNyLW9ubHkge1xuICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gIHdpZHRoOiAxcHg7XG4gIGhlaWdodDogMXB4O1xuICBwYWRkaW5nOiAwO1xuICBtYXJnaW46IC0xcHg7XG4gIG92ZXJmbG93OiBoaWRkZW47XG4gIGNsaXA6IHJlY3QoMCwgMCwgMCwgMCk7XG4gIGJvcmRlcjogMDtcbn1cblxuLypcbiAqIERhcmsgbW9kZSBzdHlsZXNcbiAqL1xuXG4uZW1vamktbWFydC1kYXJrIHtcbiAgY29sb3I6ICNmZmY7XG4gIGJvcmRlci1jb2xvcjogIzU1NTQ1MztcbiAgYmFja2dyb3VuZC1jb2xvcjogIzIyMjtcbn1cblxuLmVtb2ppLW1hcnQtZGFyayAuZW1vamktbWFydC1iYXIge1xuICBib3JkZXItY29sb3I6ICM1NTU0NTM7XG59XG5cbi5lbW9qaS1tYXJ0LWRhcmsgLmVtb2ppLW1hcnQtc2VhcmNoIGlucHV0IHtcbiAgY29sb3I6ICNmZmY7XG4gIGJvcmRlci1jb2xvcjogIzU1NTQ1MztcbiAgYmFja2dyb3VuZC1jb2xvcjogIzJmMmYyZjtcbn1cblxuLmVtb2ppLW1hcnQtZGFyayAuZW1vamktbWFydC1zZWFyY2gtaWNvbiBzdmcge1xuICBmaWxsOiAjZmZmO1xufVxuXG4uZW1vamktbWFydC1kYXJrIC5lbW9qaS1tYXJ0LWNhdGVnb3J5IC5lbW9qaS1tYXJ0LWVtb2ppOmhvdmVyOmJlZm9yZSB7XG4gIGJhY2tncm91bmQtY29sb3I6ICM0NDQ7XG59XG5cbi5lbW9qaS1tYXJ0LWRhcmsgLmVtb2ppLW1hcnQtY2F0ZWdvcnktbGFiZWwgc3BhbiB7XG4gIGJhY2tncm91bmQtY29sb3I6ICMyMjI7XG4gIGNvbG9yOiAjZmZmO1xufVxuXG4uZW1vamktbWFydC1kYXJrIC5lbW9qaS1tYXJ0LXNraW4tc3dhdGNoZXMge1xuICBib3JkZXItY29sb3I6ICM1NTU0NTM7XG4gIGJhY2tncm91bmQtY29sb3I6ICMyMjI7XG59XG5cbi5lbW9qaS1tYXJ0LWRhcmsgLmVtb2ppLW1hcnQtYW5jaG9yOmhvdmVyLFxuLmVtb2ppLW1hcnQtZGFyayAuZW1vamktbWFydC1hbmNob3I6Zm9jdXMsXG4uZW1vamktbWFydC1kYXJrIC5lbW9qaS1tYXJ0LWFuY2hvci1zZWxlY3RlZCB7XG4gIGNvbG9yOiAjYmZiZmJmO1xufVxuIl0sInNvdXJjZVJvb3QiOiIifQ== */
      </style>
      <style>/**
         * Copyright (c) Tiny Technologies, Inc. All rights reserved.
         * Licensed under the LGPL or a commercial license.
         * For LGPL see License.txt in the project root for license information.
         * For commercial licenses see https://www.tiny.cloud/
         */
         .tox{box-shadow:none;box-sizing:content-box;color:#222f3e;cursor:auto;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;font-size:16px;font-style:normal;font-weight:400;line-height:normal;-webkit-tap-highlight-color:transparent;text-decoration:none;text-shadow:none;text-transform:none;vertical-align:initial;white-space:normal}.tox :not(svg):not(rect){box-sizing:inherit;color:inherit;cursor:inherit;direction:inherit;font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;line-height:inherit;-webkit-tap-highlight-color:inherit;text-align:inherit;text-decoration:inherit;text-shadow:inherit;text-transform:inherit;vertical-align:inherit;white-space:inherit}.tox :not(svg):not(rect){background:0 0;border:0;box-shadow:none;float:none;height:auto;margin:0;max-width:none;outline:0;padding:0;position:static;width:auto}.tox:not([dir=rtl]){direction:ltr;text-align:left}.tox[dir=rtl]{direction:rtl;text-align:right}.tox-tinymce{border:1px solid #ccc;border-radius:0;box-shadow:none;box-sizing:border-box;display:flex;flex-direction:column;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;overflow:hidden;position:relative;visibility:inherit!important}.tox-tinymce-inline{border:none;box-shadow:none}.tox-tinymce-inline .tox-editor-header{background-color:transparent;border:1px solid #ccc;border-radius:0;box-shadow:none}.tox-tinymce-aux{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;z-index:1300}.tox-tinymce :focus,.tox-tinymce-aux :focus{outline:0}button::-moz-focus-inner{border:0}.tox[dir=rtl] .tox-icon--flip svg{transform:rotateY(180deg)}.tox .accessibility-issue__header{align-items:center;display:flex;margin-bottom:4px}.tox .accessibility-issue__description{align-items:stretch;border:1px solid #ccc;border-radius:3px;display:flex;justify-content:space-between}.tox .accessibility-issue__description>div{padding-bottom:4px}.tox .accessibility-issue__description>div>div{align-items:center;display:flex;margin-bottom:4px}.tox .accessibility-issue__description>:last-child:not(:only-child){border-color:#ccc;border-style:solid}.tox .accessibility-issue__repair{margin-top:16px}.tox .tox-dialog__body-content .accessibility-issue--info .accessibility-issue__description{background-color:rgba(32,122,183,.1);border-color:rgba(32,122,183,.4);color:#222f3e}.tox .tox-dialog__body-content .accessibility-issue--info .accessibility-issue__description>:last-child{border-color:rgba(32,122,183,.4)}.tox .tox-dialog__body-content .accessibility-issue--info .tox-form__group h2{color:#207ab7}.tox .tox-dialog__body-content .accessibility-issue--info .tox-icon svg{fill:#207ab7}.tox .tox-dialog__body-content .accessibility-issue--info a .tox-icon{color:#207ab7}.tox .tox-dialog__body-content .accessibility-issue--warn .accessibility-issue__description{background-color:rgba(255,165,0,.1);border-color:rgba(255,165,0,.5);color:#222f3e}.tox .tox-dialog__body-content .accessibility-issue--warn .accessibility-issue__description>:last-child{border-color:rgba(255,165,0,.5)}.tox .tox-dialog__body-content .accessibility-issue--warn .tox-form__group h2{color:#cc8500}.tox .tox-dialog__body-content .accessibility-issue--warn .tox-icon svg{fill:#cc8500}.tox .tox-dialog__body-content .accessibility-issue--warn a .tox-icon{color:#cc8500}.tox .tox-dialog__body-content .accessibility-issue--error .accessibility-issue__description{background-color:rgba(204,0,0,.1);border-color:rgba(204,0,0,.4);color:#222f3e}.tox .tox-dialog__body-content .accessibility-issue--error .accessibility-issue__description>:last-child{border-color:rgba(204,0,0,.4)}.tox .tox-dialog__body-content .accessibility-issue--error .tox-form__group h2{color:#c00}.tox .tox-dialog__body-content .accessibility-issue--error .tox-icon svg{fill:#c00}.tox .tox-dialog__body-content .accessibility-issue--error a .tox-icon{color:#c00}.tox .tox-dialog__body-content .accessibility-issue--success .accessibility-issue__description{background-color:rgba(120,171,70,.1);border-color:rgba(120,171,70,.4);color:#222f3e}.tox .tox-dialog__body-content .accessibility-issue--success .accessibility-issue__description>:last-child{border-color:rgba(120,171,70,.4)}.tox .tox-dialog__body-content .accessibility-issue--success .tox-form__group h2{color:#78ab46}.tox .tox-dialog__body-content .accessibility-issue--success .tox-icon svg{fill:#78ab46}.tox .tox-dialog__body-content .accessibility-issue--success a .tox-icon{color:#78ab46}.tox .tox-dialog__body-content .accessibility-issue__header h1,.tox .tox-dialog__body-content .tox-form__group .accessibility-issue__description h2{margin-top:0}.tox:not([dir=rtl]) .tox-dialog__body-content .accessibility-issue__header .tox-button{margin-left:4px}.tox:not([dir=rtl]) .tox-dialog__body-content .accessibility-issue__header>:nth-last-child(2){margin-left:auto}.tox:not([dir=rtl]) .tox-dialog__body-content .accessibility-issue__description{padding:4px 4px 4px 8px}.tox:not([dir=rtl]) .tox-dialog__body-content .accessibility-issue__description>:last-child{border-left-width:1px;padding-left:4px}.tox[dir=rtl] .tox-dialog__body-content .accessibility-issue__header .tox-button{margin-right:4px}.tox[dir=rtl] .tox-dialog__body-content .accessibility-issue__header>:nth-last-child(2){margin-right:auto}.tox[dir=rtl] .tox-dialog__body-content .accessibility-issue__description{padding:4px 8px 4px 4px}.tox[dir=rtl] .tox-dialog__body-content .accessibility-issue__description>:last-child{border-right-width:1px;padding-right:4px}.tox .tox-anchorbar{display:flex;flex:0 0 auto}.tox .tox-bar{display:flex;flex:0 0 auto}.tox .tox-button{background-color:#207ab7;background-image:none;background-position:0 0;background-repeat:repeat;border-color:#207ab7;border-radius:3px;border-style:solid;border-width:1px;box-shadow:none;box-sizing:border-box;color:#fff;cursor:pointer;display:inline-block;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;font-size:14px;font-style:normal;font-weight:700;letter-spacing:normal;line-height:24px;margin:0;outline:0;padding:4px 16px;text-align:center;text-decoration:none;text-transform:none;white-space:nowrap}.tox .tox-button[disabled]{background-color:#207ab7;background-image:none;border-color:#207ab7;box-shadow:none;color:rgba(255,255,255,.5);cursor:not-allowed}.tox .tox-button:focus:not(:disabled){background-color:#1c6ca1;background-image:none;border-color:#1c6ca1;box-shadow:none;color:#fff}.tox .tox-button:hover:not(:disabled){background-color:#1c6ca1;background-image:none;border-color:#1c6ca1;box-shadow:none;color:#fff}.tox .tox-button:active:not(:disabled){background-color:#185d8c;background-image:none;border-color:#185d8c;box-shadow:none;color:#fff}.tox .tox-button--secondary{background-color:#f0f0f0;background-image:none;background-position:0 0;background-repeat:repeat;border-color:#f0f0f0;border-radius:3px;border-style:solid;border-width:1px;box-shadow:none;color:#222f3e;font-size:14px;font-style:normal;font-weight:700;letter-spacing:normal;outline:0;padding:4px 16px;text-decoration:none;text-transform:none}.tox .tox-button--secondary[disabled]{background-color:#f0f0f0;background-image:none;border-color:#f0f0f0;box-shadow:none;color:rgba(34,47,62,.5)}.tox .tox-button--secondary:focus:not(:disabled){background-color:#e3e3e3;background-image:none;border-color:#e3e3e3;box-shadow:none;color:#222f3e}.tox .tox-button--secondary:hover:not(:disabled){background-color:#e3e3e3;background-image:none;border-color:#e3e3e3;box-shadow:none;color:#222f3e}.tox .tox-button--secondary:active:not(:disabled){background-color:#d6d6d6;background-image:none;border-color:#d6d6d6;box-shadow:none;color:#222f3e}.tox .tox-button--icon,.tox .tox-button.tox-button--icon,.tox .tox-button.tox-button--secondary.tox-button--icon{padding:4px}.tox .tox-button--icon .tox-icon svg,.tox .tox-button.tox-button--icon .tox-icon svg,.tox .tox-button.tox-button--secondary.tox-button--icon .tox-icon svg{display:block;fill:currentColor}.tox .tox-button-link{background:0;border:none;box-sizing:border-box;cursor:pointer;display:inline-block;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;white-space:nowrap}.tox .tox-button-link--sm{font-size:14px}.tox .tox-button--naked{background-color:transparent;border-color:transparent;box-shadow:unset;color:#222f3e}.tox .tox-button--naked[disabled]{background-color:#f0f0f0;border-color:#f0f0f0;box-shadow:none;color:rgba(34,47,62,.5)}.tox .tox-button--naked:hover:not(:disabled){background-color:#e3e3e3;border-color:#e3e3e3;box-shadow:none;color:#222f3e}.tox .tox-button--naked:focus:not(:disabled){background-color:#e3e3e3;border-color:#e3e3e3;box-shadow:none;color:#222f3e}.tox .tox-button--naked:active:not(:disabled){background-color:#d6d6d6;border-color:#d6d6d6;box-shadow:none;color:#222f3e}.tox .tox-button--naked .tox-icon svg{fill:currentColor}.tox .tox-button--naked.tox-button--icon:hover:not(:disabled){color:#222f3e}.tox .tox-checkbox{align-items:center;border-radius:3px;cursor:pointer;display:flex;height:36px;min-width:36px}.tox .tox-checkbox__input{height:1px;overflow:hidden;position:absolute;top:auto;width:1px}.tox .tox-checkbox__icons{align-items:center;border-radius:3px;box-shadow:0 0 0 2px transparent;box-sizing:content-box;display:flex;height:24px;justify-content:center;padding:calc(4px - 1px);width:24px}.tox .tox-checkbox__icons .tox-checkbox-icon__unchecked svg{display:block;fill:rgba(34,47,62,.3)}.tox .tox-checkbox__icons .tox-checkbox-icon__indeterminate svg{display:none;fill:#207ab7}.tox .tox-checkbox__icons .tox-checkbox-icon__checked svg{display:none;fill:#207ab7}.tox .tox-checkbox--disabled{color:rgba(34,47,62,.5);cursor:not-allowed}.tox .tox-checkbox--disabled .tox-checkbox__icons .tox-checkbox-icon__checked svg{fill:rgba(34,47,62,.5)}.tox .tox-checkbox--disabled .tox-checkbox__icons .tox-checkbox-icon__unchecked svg{fill:rgba(34,47,62,.5)}.tox .tox-checkbox--disabled .tox-checkbox__icons .tox-checkbox-icon__indeterminate svg{fill:rgba(34,47,62,.5)}.tox input.tox-checkbox__input:checked+.tox-checkbox__icons .tox-checkbox-icon__unchecked svg{display:none}.tox input.tox-checkbox__input:checked+.tox-checkbox__icons .tox-checkbox-icon__checked svg{display:block}.tox input.tox-checkbox__input:indeterminate+.tox-checkbox__icons .tox-checkbox-icon__unchecked svg{display:none}.tox input.tox-checkbox__input:indeterminate+.tox-checkbox__icons .tox-checkbox-icon__indeterminate svg{display:block}.tox input.tox-checkbox__input:focus+.tox-checkbox__icons{border-radius:3px;box-shadow:inset 0 0 0 1px #207ab7;padding:calc(4px - 1px)}.tox:not([dir=rtl]) .tox-checkbox__label{margin-left:4px}.tox:not([dir=rtl]) .tox-checkbox__input{left:-10000px}.tox:not([dir=rtl]) .tox-bar .tox-checkbox{margin-left:4px}.tox[dir=rtl] .tox-checkbox__label{margin-right:4px}.tox[dir=rtl] .tox-checkbox__input{right:-10000px}.tox[dir=rtl] .tox-bar .tox-checkbox{margin-right:4px}.tox .tox-collection--toolbar .tox-collection__group{display:flex;padding:0}.tox .tox-collection--grid .tox-collection__group{display:flex;flex-wrap:wrap;max-height:208px;overflow-x:hidden;overflow-y:auto;padding:0}.tox .tox-collection--list .tox-collection__group{border-bottom-width:0;border-color:#ccc;border-left-width:0;border-right-width:0;border-style:solid;border-top-width:1px;padding:4px 0}.tox .tox-collection--list .tox-collection__group:first-child{border-top-width:0}.tox .tox-collection__group-heading{background-color:#e6e6e6;color:rgba(34,47,62,.7);cursor:default;font-size:12px;font-style:normal;font-weight:400;margin-bottom:4px;margin-top:-4px;padding:4px 8px;text-transform:none;-webkit-touch-callout:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.tox .tox-collection__item{align-items:center;color:#222f3e;cursor:pointer;display:flex;-webkit-touch-callout:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.tox .tox-collection--list .tox-collection__item{padding:4px 8px}.tox .tox-collection--toolbar .tox-collection__item{border-radius:3px;padding:4px}.tox .tox-collection--grid .tox-collection__item{border-radius:3px;padding:4px}.tox .tox-collection--list .tox-collection__item--enabled{background-color:#fff;color:#222f3e}.tox .tox-collection--list .tox-collection__item--active{background-color:#dee0e2}.tox .tox-collection--toolbar .tox-collection__item--enabled{background-color:#c8cbcf;color:#222f3e}.tox .tox-collection--toolbar .tox-collection__item--active{background-color:#dee0e2}.tox .tox-collection--grid .tox-collection__item--enabled{background-color:#c8cbcf;color:#222f3e}.tox .tox-collection--grid .tox-collection__item--active:not(.tox-collection__item--state-disabled){background-color:#dee0e2;color:#222f3e}.tox .tox-collection--list .tox-collection__item--active:not(.tox-collection__item--state-disabled){color:#222f3e}.tox .tox-collection--toolbar .tox-collection__item--active:not(.tox-collection__item--state-disabled){color:#222f3e}.tox .tox-collection__item-checkmark,.tox .tox-collection__item-icon{align-items:center;display:flex;height:24px;justify-content:center;width:24px}.tox .tox-collection__item-checkmark svg,.tox .tox-collection__item-icon svg{fill:currentColor}.tox .tox-collection--toolbar-lg .tox-collection__item-icon{height:48px;width:48px}.tox .tox-collection__item-label{color:currentColor;display:inline-block;flex:1;-ms-flex-preferred-size:auto;font-size:14px;font-style:normal;font-weight:400;line-height:24px;text-transform:none;word-break:break-all}.tox .tox-collection__item-accessory{color:rgba(34,47,62,.7);display:inline-block;font-size:14px;height:24px;line-height:24px;text-transform:none}.tox .tox-collection__item-caret{align-items:center;display:flex;min-height:24px}.tox .tox-collection__item-caret::after{content:'';font-size:0;min-height:inherit}.tox .tox-collection__item-caret svg{fill:#222f3e}.tox .tox-collection__item--state-disabled{background-color:transparent;color:rgba(34,47,62,.5);cursor:not-allowed}.tox .tox-collection__item--state-disabled .tox-collection__item-caret svg{fill:rgba(34,47,62,.5)}.tox .tox-collection--list .tox-collection__item:not(.tox-collection__item--enabled) .tox-collection__item-checkmark svg{display:none}.tox .tox-collection--list .tox-collection__item:not(.tox-collection__item--enabled) .tox-collection__item-accessory+.tox-collection__item-checkmark{display:none}.tox .tox-collection--horizontal{background-color:#fff;border:1px solid #ccc;border-radius:3px;box-shadow:0 1px 3px rgba(0,0,0,.15);display:flex;flex:0 0 auto;flex-shrink:0;flex-wrap:nowrap;margin-bottom:0;overflow-x:auto;padding:0}.tox .tox-collection--horizontal .tox-collection__group{align-items:center;display:flex;flex-wrap:nowrap;margin:0;padding:0 4px}.tox .tox-collection--horizontal .tox-collection__item{height:34px;margin:2px 0 3px 0;padding:0 4px}.tox .tox-collection--horizontal .tox-collection__item-label{white-space:nowrap}.tox .tox-collection--horizontal .tox-collection__item-caret{margin-left:4px}.tox .tox-collection__item-container{display:flex}.tox .tox-collection__item-container--row{align-items:center;flex:1 1 auto;flex-direction:row}.tox .tox-collection__item-container--row.tox-collection__item-container--align-left{margin-right:auto}.tox .tox-collection__item-container--row.tox-collection__item-container--align-right{justify-content:flex-end;margin-left:auto}.tox .tox-collection__item-container--row.tox-collection__item-container--valign-top{align-items:flex-start;margin-bottom:auto}.tox .tox-collection__item-container--row.tox-collection__item-container--valign-middle{align-items:center}.tox .tox-collection__item-container--row.tox-collection__item-container--valign-bottom{align-items:flex-end;margin-top:auto}.tox .tox-collection__item-container--column{-ms-grid-row-align:center;align-self:center;flex:1 1 auto;flex-direction:column}.tox .tox-collection__item-container--column.tox-collection__item-container--align-left{align-items:flex-start}.tox .tox-collection__item-container--column.tox-collection__item-container--align-right{align-items:flex-end}.tox .tox-collection__item-container--column.tox-collection__item-container--valign-top{align-self:flex-start}.tox .tox-collection__item-container--column.tox-collection__item-container--valign-middle{-ms-grid-row-align:center;align-self:center}.tox .tox-collection__item-container--column.tox-collection__item-container--valign-bottom{align-self:flex-end}.tox:not([dir=rtl]) .tox-collection--horizontal .tox-collection__group:not(:last-of-type){border-right:1px solid #ccc}.tox:not([dir=rtl]) .tox-collection--list .tox-collection__item>:not(:first-child){margin-left:8px}.tox:not([dir=rtl]) .tox-collection--list .tox-collection__item>.tox-collection__item-label:first-child{margin-left:4px}.tox:not([dir=rtl]) .tox-collection__item-accessory{margin-left:16px;text-align:right}.tox:not([dir=rtl]) .tox-collection .tox-collection__item-caret{margin-left:16px}.tox[dir=rtl] .tox-collection--horizontal .tox-collection__group:not(:last-of-type){border-left:1px solid #ccc}.tox[dir=rtl] .tox-collection--list .tox-collection__item>:not(:first-child){margin-right:8px}.tox[dir=rtl] .tox-collection--list .tox-collection__item>.tox-collection__item-label:first-child{margin-right:4px}.tox[dir=rtl] .tox-collection__item-accessory{margin-right:16px;text-align:left}.tox[dir=rtl] .tox-collection .tox-collection__item-caret{margin-right:16px;transform:rotateY(180deg)}.tox[dir=rtl] .tox-collection--horizontal .tox-collection__item-caret{margin-right:4px}.tox .tox-color-picker-container{display:flex;flex-direction:row;height:225px;margin:0}.tox .tox-sv-palette{box-sizing:border-box;display:flex;height:100%}.tox .tox-sv-palette-spectrum{height:100%}.tox .tox-sv-palette,.tox .tox-sv-palette-spectrum{width:225px}.tox .tox-sv-palette-thumb{background:0 0;border:1px solid #000;border-radius:50%;box-sizing:content-box;height:12px;position:absolute;width:12px}.tox .tox-sv-palette-inner-thumb{border:1px solid #fff;border-radius:50%;height:10px;position:absolute;width:10px}.tox .tox-hue-slider{box-sizing:border-box;height:100%;width:25px}.tox .tox-hue-slider-spectrum{background:linear-gradient(to bottom,red,#ff0080,#f0f,#8000ff,#00f,#0080ff,#0ff,#00ff80,#0f0,#80ff00,#ff0,#ff8000,red);height:100%;width:100%}.tox .tox-hue-slider,.tox .tox-hue-slider-spectrum{width:20px}.tox .tox-hue-slider-thumb{background:#fff;border:1px solid #000;box-sizing:content-box;height:4px;width:100%}.tox .tox-rgb-form{display:flex;flex-direction:column;justify-content:space-between}.tox .tox-rgb-form div{align-items:center;display:flex;justify-content:space-between;margin-bottom:5px;width:inherit}.tox .tox-rgb-form input{width:6em}.tox .tox-rgb-form input.tox-invalid{border:1px solid red!important}.tox .tox-rgb-form .tox-rgba-preview{border:1px solid #000;flex-grow:2;margin-bottom:0}.tox:not([dir=rtl]) .tox-sv-palette{margin-right:15px}.tox:not([dir=rtl]) .tox-hue-slider{margin-right:15px}.tox:not([dir=rtl]) .tox-hue-slider-thumb{margin-left:-1px}.tox:not([dir=rtl]) .tox-rgb-form label{margin-right:.5em}.tox[dir=rtl] .tox-sv-palette{margin-left:15px}.tox[dir=rtl] .tox-hue-slider{margin-left:15px}.tox[dir=rtl] .tox-hue-slider-thumb{margin-right:-1px}.tox[dir=rtl] .tox-rgb-form label{margin-left:.5em}.tox .tox-toolbar .tox-swatches,.tox .tox-toolbar__overflow .tox-swatches,.tox .tox-toolbar__primary .tox-swatches{margin:2px 0 3px 4px}.tox .tox-collection--list .tox-collection__group .tox-swatches-menu{border:0;margin:-4px 0}.tox .tox-swatches__row{display:flex}.tox .tox-swatch{height:30px;transition:transform .15s,box-shadow .15s;width:30px}.tox .tox-swatch:focus,.tox .tox-swatch:hover{box-shadow:0 0 0 1px rgba(127,127,127,.3) inset;transform:scale(.8)}.tox .tox-swatch--remove{align-items:center;display:flex;justify-content:center}.tox .tox-swatch--remove svg path{stroke:#e74c3c}.tox .tox-swatches__picker-btn{align-items:center;background-color:transparent;border:0;cursor:pointer;display:flex;height:30px;justify-content:center;outline:0;padding:0;width:30px}.tox .tox-swatches__picker-btn svg{height:24px;width:24px}.tox .tox-swatches__picker-btn:hover{background:#dee0e2}.tox:not([dir=rtl]) .tox-swatches__picker-btn{margin-left:auto}.tox[dir=rtl] .tox-swatches__picker-btn{margin-right:auto}.tox .tox-comment-thread{background:#fff;position:relative}.tox .tox-comment-thread>:not(:first-child){margin-top:8px}.tox .tox-comment{background:#fff;border:1px solid #ccc;border-radius:3px;box-shadow:0 4px 8px 0 rgba(34,47,62,.1);padding:8px 8px 16px 8px;position:relative}.tox .tox-comment__header{align-items:center;color:#222f3e;display:flex;justify-content:space-between}.tox .tox-comment__date{color:rgba(34,47,62,.7);font-size:12px}.tox .tox-comment__body{color:#222f3e;font-size:14px;font-style:normal;font-weight:400;line-height:1.3;margin-top:8px;position:relative;text-transform:initial}.tox .tox-comment__body textarea{resize:none;white-space:normal;width:100%}.tox .tox-comment__expander{padding-top:8px}.tox .tox-comment__expander p{color:rgba(34,47,62,.7);font-size:14px;font-style:normal}.tox .tox-comment__body p{margin:0}.tox .tox-comment__buttonspacing{padding-top:16px;text-align:center}.tox .tox-comment-thread__overlay::after{background:#fff;bottom:0;content:"";display:flex;left:0;opacity:.9;position:absolute;right:0;top:0;z-index:5}.tox .tox-comment__reply{display:flex;flex-shrink:0;flex-wrap:wrap;justify-content:flex-end;margin-top:8px}.tox .tox-comment__reply>:first-child{margin-bottom:8px;width:100%}.tox .tox-comment__edit{display:flex;flex-wrap:wrap;justify-content:flex-end;margin-top:16px}.tox .tox-comment__gradient::after{background:linear-gradient(rgba(255,255,255,0),#fff);bottom:0;content:"";display:block;height:5em;margin-top:-40px;position:absolute;width:100%}.tox .tox-comment__overlay{background:#fff;bottom:0;display:flex;flex-direction:column;flex-grow:1;left:0;opacity:.9;position:absolute;right:0;text-align:center;top:0;z-index:5}.tox .tox-comment__loading-text{align-items:center;color:#222f3e;display:flex;flex-direction:column;position:relative}.tox .tox-comment__loading-text>div{padding-bottom:16px}.tox .tox-comment__overlaytext{bottom:0;flex-direction:column;font-size:14px;left:0;padding:1em;position:absolute;right:0;top:0;z-index:10}.tox .tox-comment__overlaytext p{background-color:#fff;box-shadow:0 0 8px 8px #fff;color:#222f3e;text-align:center}.tox .tox-comment__overlaytext div:nth-of-type(2){font-size:.8em}.tox .tox-comment__busy-spinner{align-items:center;background-color:#fff;bottom:0;display:flex;justify-content:center;left:0;position:absolute;right:0;top:0;z-index:20}.tox .tox-comment__scroll{display:flex;flex-direction:column;flex-shrink:1;overflow:auto}.tox .tox-conversations{margin:8px}.tox:not([dir=rtl]) .tox-comment__edit{margin-left:8px}.tox:not([dir=rtl]) .tox-comment__buttonspacing>:last-child,.tox:not([dir=rtl]) .tox-comment__edit>:last-child,.tox:not([dir=rtl]) .tox-comment__reply>:last-child{margin-left:8px}.tox[dir=rtl] .tox-comment__edit{margin-right:8px}.tox[dir=rtl] .tox-comment__buttonspacing>:last-child,.tox[dir=rtl] .tox-comment__edit>:last-child,.tox[dir=rtl] .tox-comment__reply>:last-child{margin-right:8px}.tox .tox-user{align-items:center;display:flex}.tox .tox-user__avatar svg{fill:rgba(34,47,62,.7)}.tox .tox-user__name{color:rgba(34,47,62,.7);font-size:12px;font-style:normal;font-weight:700;text-transform:uppercase}.tox:not([dir=rtl]) .tox-user__avatar svg{margin-right:8px}.tox:not([dir=rtl]) .tox-user__avatar+.tox-user__name{margin-left:8px}.tox[dir=rtl] .tox-user__avatar svg{margin-left:8px}.tox[dir=rtl] .tox-user__avatar+.tox-user__name{margin-right:8px}.tox .tox-dialog-wrap{align-items:center;bottom:0;display:flex;justify-content:center;left:0;position:fixed;right:0;top:0;z-index:1100}.tox .tox-dialog-wrap__backdrop{background-color:rgba(255,255,255,.75);bottom:0;left:0;position:absolute;right:0;top:0;z-index:1}.tox .tox-dialog-wrap__backdrop--opaque{background-color:#fff}.tox .tox-dialog{background-color:#fff;border-color:#ccc;border-radius:3px;border-style:solid;border-width:1px;box-shadow:0 16px 16px -10px rgba(34,47,62,.15),0 0 40px 1px rgba(34,47,62,.15);display:flex;flex-direction:column;max-height:100%;max-width:480px;overflow:hidden;position:relative;width:95vw;z-index:2}@media only screen and (max-width:767px){body:not(.tox-force-desktop) .tox .tox-dialog{align-self:flex-start;margin:8px auto;width:calc(100vw - 16px)}}.tox .tox-dialog-inline{z-index:1100}.tox .tox-dialog__header{align-items:center;background-color:#fff;border-bottom:none;color:#222f3e;display:flex;font-size:16px;justify-content:space-between;padding:8px 16px 0 16px;position:relative}.tox .tox-dialog__header .tox-button{z-index:1}.tox .tox-dialog__draghandle{cursor:grab;height:100%;left:0;position:absolute;top:0;width:100%}.tox .tox-dialog__draghandle:active{cursor:grabbing}.tox .tox-dialog__dismiss{margin-left:auto}.tox .tox-dialog__title{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;font-size:20px;font-style:normal;font-weight:400;line-height:1.3;margin:0;text-transform:none}.tox .tox-dialog__body{color:#222f3e;display:flex;flex:1;-ms-flex-preferred-size:auto;font-size:16px;font-style:normal;font-weight:400;line-height:1.3;min-width:0;text-align:left;text-transform:none}@media only screen and (max-width:767px){body:not(.tox-force-desktop) .tox .tox-dialog__body{flex-direction:column}}.tox .tox-dialog__body-nav{align-items:flex-start;display:flex;flex-direction:column;padding:16px 16px}@media only screen and (max-width:767px){body:not(.tox-force-desktop) .tox .tox-dialog__body-nav{flex-direction:row;-webkit-overflow-scrolling:touch;overflow-x:auto;padding-bottom:0}}.tox .tox-dialog__body-nav-item{border-bottom:2px solid transparent;color:rgba(34,47,62,.7);display:inline-block;font-size:14px;line-height:1.3;margin-bottom:8px;text-decoration:none;white-space:nowrap}.tox .tox-dialog__body-nav-item:focus{background-color:rgba(32,122,183,.1)}.tox .tox-dialog__body-nav-item--active{border-bottom:2px solid #207ab7;color:#207ab7}.tox .tox-dialog__body-content{box-sizing:border-box;display:flex;flex:1;flex-direction:column;-ms-flex-preferred-size:auto;max-height:650px;overflow:auto;-webkit-overflow-scrolling:touch;padding:16px 16px}.tox .tox-dialog__body-content>*{margin-bottom:0;margin-top:16px}.tox .tox-dialog__body-content>:first-child{margin-top:0}.tox .tox-dialog__body-content>:last-child{margin-bottom:0}.tox .tox-dialog__body-content>:only-child{margin-bottom:0;margin-top:0}.tox .tox-dialog__body-content a{color:#207ab7;cursor:pointer;text-decoration:none}.tox .tox-dialog__body-content a:focus,.tox .tox-dialog__body-content a:hover{color:#185d8c;text-decoration:none}.tox .tox-dialog__body-content a:active{color:#185d8c;text-decoration:none}.tox .tox-dialog__body-content svg{fill:#222f3e}.tox .tox-dialog__body-content ul{display:block;list-style-type:disc;margin-bottom:16px;-webkit-margin-end:0;margin-inline-end:0;-webkit-margin-start:0;margin-inline-start:0;-webkit-padding-start:2.5rem;padding-inline-start:2.5rem}.tox .tox-dialog__body-content .tox-form__group h1{color:#222f3e;font-size:20px;font-style:normal;font-weight:700;letter-spacing:normal;margin-bottom:16px;margin-top:2rem;text-transform:none}.tox .tox-dialog__body-content .tox-form__group h2{color:#222f3e;font-size:16px;font-style:normal;font-weight:700;letter-spacing:normal;margin-bottom:16px;margin-top:2rem;text-transform:none}.tox .tox-dialog__body-content .tox-form__group p{margin-bottom:16px}.tox .tox-dialog__body-content .tox-form__group h1:first-child,.tox .tox-dialog__body-content .tox-form__group h2:first-child,.tox .tox-dialog__body-content .tox-form__group p:first-child{margin-top:0}.tox .tox-dialog__body-content .tox-form__group h1:last-child,.tox .tox-dialog__body-content .tox-form__group h2:last-child,.tox .tox-dialog__body-content .tox-form__group p:last-child{margin-bottom:0}.tox .tox-dialog__body-content .tox-form__group h1:only-child,.tox .tox-dialog__body-content .tox-form__group h2:only-child,.tox .tox-dialog__body-content .tox-form__group p:only-child{margin-bottom:0;margin-top:0}.tox .tox-dialog--width-lg{height:650px;max-width:1200px}.tox .tox-dialog--width-md{max-width:800px}.tox .tox-dialog--width-md .tox-dialog__body-content{overflow:auto}.tox .tox-dialog__body-content--centered{text-align:center}.tox .tox-dialog__footer{align-items:center;background-color:#fff;border-top:1px solid #ccc;display:flex;justify-content:space-between;padding:8px 16px}.tox .tox-dialog__footer-end,.tox .tox-dialog__footer-start{display:flex}.tox .tox-dialog__busy-spinner{align-items:center;background-color:rgba(255,255,255,.75);bottom:0;display:flex;justify-content:center;left:0;position:absolute;right:0;top:0;z-index:3}.tox .tox-dialog__table{border-collapse:collapse;width:100%}.tox .tox-dialog__table thead th{font-weight:700;padding-bottom:8px}.tox .tox-dialog__table tbody tr{border-bottom:1px solid #ccc}.tox .tox-dialog__table tbody tr:last-child{border-bottom:none}.tox .tox-dialog__table td{padding-bottom:8px;padding-top:8px}.tox .tox-dialog__popups{position:absolute;width:100%;z-index:1100}.tox .tox-dialog__body-iframe{display:flex;flex:1;flex-direction:column;-ms-flex-preferred-size:auto}.tox .tox-dialog__body-iframe .tox-navobj{display:flex;flex:1;-ms-flex-preferred-size:auto}.tox .tox-dialog__body-iframe .tox-navobj :nth-child(2){flex:1;-ms-flex-preferred-size:auto;height:100%}.tox .tox-dialog-dock-fadeout{opacity:0;visibility:hidden}.tox .tox-dialog-dock-fadein{opacity:1;visibility:visible}.tox .tox-dialog-dock-transition{transition:visibility 0s linear .3s,opacity .3s ease}.tox .tox-dialog-dock-transition.tox-dialog-dock-fadein{transition-delay:0s}.tox.tox-platform-ie .tox-dialog-wrap{position:-ms-device-fixed}@media only screen and (max-width:767px){body:not(.tox-force-desktop) .tox:not([dir=rtl]) .tox-dialog__body-nav{margin-right:0}}@media only screen and (max-width:767px){body:not(.tox-force-desktop) .tox:not([dir=rtl]) .tox-dialog__body-nav-item:not(:first-child){margin-left:8px}}.tox:not([dir=rtl]) .tox-dialog__footer .tox-dialog__footer-end>*,.tox:not([dir=rtl]) .tox-dialog__footer .tox-dialog__footer-start>*{margin-left:8px}.tox[dir=rtl] .tox-dialog__body{text-align:right}@media only screen and (max-width:767px){body:not(.tox-force-desktop) .tox[dir=rtl] .tox-dialog__body-nav{margin-left:0}}@media only screen and (max-width:767px){body:not(.tox-force-desktop) .tox[dir=rtl] .tox-dialog__body-nav-item:not(:first-child){margin-right:8px}}.tox[dir=rtl] .tox-dialog__footer .tox-dialog__footer-end>*,.tox[dir=rtl] .tox-dialog__footer .tox-dialog__footer-start>*{margin-right:8px}body.tox-dialog__disable-scroll{overflow:hidden}.tox .tox-dropzone-container{display:flex;flex:1;-ms-flex-preferred-size:auto}.tox .tox-dropzone{align-items:center;background:#fff;border:2px dashed #ccc;box-sizing:border-box;display:flex;flex-direction:column;flex-grow:1;justify-content:center;min-height:100px;padding:10px}.tox .tox-dropzone p{color:rgba(34,47,62,.7);margin:0 0 16px 0}.tox .tox-edit-area{display:flex;flex:1;-ms-flex-preferred-size:auto;overflow:hidden;position:relative}.tox .tox-edit-area__iframe{background-color:#fff;border:0;box-sizing:border-box;flex:1;-ms-flex-preferred-size:auto;height:100%;position:absolute;width:100%}.tox.tox-inline-edit-area{border:1px dotted #ccc}.tox .tox-editor-container{display:flex;flex:1 1 auto;flex-direction:column;overflow:hidden}.tox .tox-editor-header{z-index:1}.tox:not(.tox-tinymce-inline) .tox-editor-header{box-shadow:none;transition:box-shadow .5s}.tox.tox-tinymce--toolbar-bottom .tox-editor-header,.tox.tox-tinymce-inline .tox-editor-header{margin-bottom:-1px}.tox.tox-tinymce--toolbar-sticky-on .tox-editor-header{background-color:transparent;box-shadow:0 4px 4px -3px rgba(0,0,0,.25)}.tox-editor-dock-fadeout{opacity:0;visibility:hidden}.tox-editor-dock-fadein{opacity:1;visibility:visible}.tox-editor-dock-transition{transition:visibility 0s linear .25s,opacity .25s ease}.tox-editor-dock-transition.tox-editor-dock-fadein{transition-delay:0s}.tox .tox-control-wrap{flex:1;position:relative}.tox .tox-control-wrap:not(.tox-control-wrap--status-invalid) .tox-control-wrap__status-icon-invalid,.tox .tox-control-wrap:not(.tox-control-wrap--status-unknown) .tox-control-wrap__status-icon-unknown,.tox .tox-control-wrap:not(.tox-control-wrap--status-valid) .tox-control-wrap__status-icon-valid{display:none}.tox .tox-control-wrap svg{display:block}.tox .tox-control-wrap__status-icon-wrap{position:absolute;top:50%;transform:translateY(-50%)}.tox .tox-control-wrap__status-icon-invalid svg{fill:#c00}.tox .tox-control-wrap__status-icon-unknown svg{fill:orange}.tox .tox-control-wrap__status-icon-valid svg{fill:green}.tox:not([dir=rtl]) .tox-control-wrap--status-invalid .tox-textfield,.tox:not([dir=rtl]) .tox-control-wrap--status-unknown .tox-textfield,.tox:not([dir=rtl]) .tox-control-wrap--status-valid .tox-textfield{padding-right:32px}.tox:not([dir=rtl]) .tox-control-wrap__status-icon-wrap{right:4px}.tox[dir=rtl] .tox-control-wrap--status-invalid .tox-textfield,.tox[dir=rtl] .tox-control-wrap--status-unknown .tox-textfield,.tox[dir=rtl] .tox-control-wrap--status-valid .tox-textfield{padding-left:32px}.tox[dir=rtl] .tox-control-wrap__status-icon-wrap{left:4px}.tox .tox-autocompleter{max-width:25em}.tox .tox-autocompleter .tox-menu{max-width:25em}.tox .tox-autocompleter .tox-autocompleter-highlight{font-weight:700}.tox .tox-color-input{display:flex;position:relative;z-index:1}.tox .tox-color-input .tox-textfield{z-index:-1}.tox .tox-color-input span{border-color:rgba(34,47,62,.2);border-radius:3px;border-style:solid;border-width:1px;box-shadow:none;box-sizing:border-box;height:24px;position:absolute;top:6px;width:24px}.tox .tox-color-input span:focus:not([aria-disabled=true]),.tox .tox-color-input span:hover:not([aria-disabled=true]){border-color:#207ab7;cursor:pointer}.tox .tox-color-input span::before{background-image:linear-gradient(45deg,rgba(0,0,0,.25) 25%,transparent 25%),linear-gradient(-45deg,rgba(0,0,0,.25) 25%,transparent 25%),linear-gradient(45deg,transparent 75%,rgba(0,0,0,.25) 75%),linear-gradient(-45deg,transparent 75%,rgba(0,0,0,.25) 75%);background-position:0 0,0 6px,6px -6px,-6px 0;background-size:12px 12px;border:1px solid #fff;border-radius:3px;box-sizing:border-box;content:'';height:24px;left:-1px;position:absolute;top:-1px;width:24px;z-index:-1}.tox .tox-color-input span[aria-disabled=true]{cursor:not-allowed}.tox:not([dir=rtl]) .tox-color-input .tox-textfield{padding-left:36px}.tox:not([dir=rtl]) .tox-color-input span{left:6px}.tox[dir=rtl] .tox-color-input .tox-textfield{padding-right:36px}.tox[dir=rtl] .tox-color-input span{right:6px}.tox .tox-label,.tox .tox-toolbar-label{color:rgba(34,47,62,.7);display:block;font-size:14px;font-style:normal;font-weight:400;line-height:1.3;padding:0 8px 0 0;text-transform:none;white-space:nowrap}.tox .tox-toolbar-label{padding:0 8px}.tox[dir=rtl] .tox-label{padding:0 0 0 8px}.tox .tox-form{display:flex;flex:1;flex-direction:column;-ms-flex-preferred-size:auto}.tox .tox-form__group{box-sizing:border-box;margin-bottom:4px}.tox .tox-form-group--maximize{flex:1}.tox .tox-form__group--error{color:#c00}.tox .tox-form__group--collection{display:flex}.tox .tox-form__grid{display:flex;flex-direction:row;flex-wrap:wrap;justify-content:space-between}.tox .tox-form__grid--2col>.tox-form__group{width:calc(50% - (8px / 2))}.tox .tox-form__grid--3col>.tox-form__group{width:calc(100% / 3 - (8px / 2))}.tox .tox-form__grid--4col>.tox-form__group{width:calc(25% - (8px / 2))}.tox .tox-form__controls-h-stack{align-items:center;display:flex}.tox .tox-form__group--inline{align-items:center;display:flex}.tox .tox-form__group--stretched{display:flex;flex:1;flex-direction:column;-ms-flex-preferred-size:auto}.tox .tox-form__group--stretched .tox-textarea{flex:1;-ms-flex-preferred-size:auto}.tox .tox-form__group--stretched .tox-navobj{display:flex;flex:1;-ms-flex-preferred-size:auto}.tox .tox-form__group--stretched .tox-navobj :nth-child(2){flex:1;-ms-flex-preferred-size:auto;height:100%}.tox:not([dir=rtl]) .tox-form__controls-h-stack>:not(:first-child){margin-left:4px}.tox[dir=rtl] .tox-form__controls-h-stack>:not(:first-child){margin-right:4px}.tox .tox-lock.tox-locked .tox-lock-icon__unlock,.tox .tox-lock:not(.tox-locked) .tox-lock-icon__lock{display:none}.tox .tox-listboxfield .tox-listbox--select,.tox .tox-textarea,.tox .tox-textfield,.tox .tox-toolbar-textfield{-webkit-appearance:none;-moz-appearance:none;appearance:none;background-color:#fff;border-color:#ccc;border-radius:3px;border-style:solid;border-width:1px;box-shadow:none;box-sizing:border-box;color:#222f3e;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;font-size:16px;line-height:24px;margin:0;min-height:34px;outline:0;padding:5px 4.75px;resize:none;width:100%}.tox .tox-textarea[disabled],.tox .tox-textfield[disabled]{background-color:#f2f2f2;color:rgba(34,47,62,.85);cursor:not-allowed}.tox .tox-listboxfield .tox-listbox--select:focus,.tox .tox-textarea:focus,.tox .tox-textfield:focus{background-color:#fff;border-color:#207ab7;box-shadow:none;outline:0}.tox .tox-toolbar-textfield{border-width:0;margin-bottom:3px;margin-top:2px;max-width:250px}.tox .tox-naked-btn{background-color:transparent;border:0;border-color:transparent;box-shadow:unset;color:#207ab7;cursor:pointer;display:block;margin:0;padding:0}.tox .tox-naked-btn svg{display:block;fill:#222f3e}.tox:not([dir=rtl]) .tox-toolbar-textfield+*{margin-left:4px}.tox[dir=rtl] .tox-toolbar-textfield+*{margin-right:4px}.tox .tox-listboxfield{cursor:pointer;position:relative}.tox .tox-listboxfield .tox-listbox--select[disabled]{background-color:#f2f2f2;color:rgba(34,47,62,.85);cursor:not-allowed}.tox .tox-listbox__select-label{cursor:default;flex:1;margin:0 4px}.tox .tox-listbox__select-chevron{align-items:center;display:flex;justify-content:center;width:16px}.tox .tox-listbox__select-chevron svg{fill:#222f3e}.tox .tox-listboxfield .tox-listbox--select{align-items:center;display:flex}.tox:not([dir=rtl]) .tox-listboxfield svg{right:8px}.tox[dir=rtl] .tox-listboxfield svg{left:8px}.tox .tox-selectfield{cursor:pointer;position:relative}.tox .tox-selectfield select{-webkit-appearance:none;-moz-appearance:none;appearance:none;background-color:#fff;border-color:#ccc;border-radius:3px;border-style:solid;border-width:1px;box-shadow:none;box-sizing:border-box;color:#222f3e;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;font-size:16px;line-height:24px;margin:0;min-height:34px;outline:0;padding:5px 4.75px;resize:none;width:100%}.tox .tox-selectfield select[disabled]{background-color:#f2f2f2;color:rgba(34,47,62,.85);cursor:not-allowed}.tox .tox-selectfield select::-ms-expand{display:none}.tox .tox-selectfield select:focus{background-color:#fff;border-color:#207ab7;box-shadow:none;outline:0}.tox .tox-selectfield svg{pointer-events:none;position:absolute;top:50%;transform:translateY(-50%)}.tox:not([dir=rtl]) .tox-selectfield select[size="0"],.tox:not([dir=rtl]) .tox-selectfield select[size="1"]{padding-right:24px}.tox:not([dir=rtl]) .tox-selectfield svg{right:8px}.tox[dir=rtl] .tox-selectfield select[size="0"],.tox[dir=rtl] .tox-selectfield select[size="1"]{padding-left:24px}.tox[dir=rtl] .tox-selectfield svg{left:8px}.tox .tox-textarea{-webkit-appearance:textarea;-moz-appearance:textarea;appearance:textarea;white-space:pre-wrap}.tox-fullscreen{border:0;height:100%;margin:0;overflow:hidden;-ms-scroll-chaining:none;overscroll-behavior:none;padding:0;touch-action:pinch-zoom;width:100%}.tox.tox-tinymce.tox-fullscreen .tox-statusbar__resize-handle{display:none}.tox-shadowhost.tox-fullscreen,.tox.tox-tinymce.tox-fullscreen{left:0;position:fixed;top:0;z-index:1200}.tox.tox-tinymce.tox-fullscreen{background-color:transparent}.tox-fullscreen .tox.tox-tinymce-aux,.tox-fullscreen~.tox.tox-tinymce-aux{z-index:1201}.tox .tox-help__more-link{list-style:none;margin-top:1em}.tox .tox-image-tools{width:100%}.tox .tox-image-tools__toolbar{align-items:center;display:flex;justify-content:center}.tox .tox-image-tools__image{background-color:#666;height:380px;overflow:auto;position:relative;width:100%}.tox .tox-image-tools__image,.tox .tox-image-tools__image+.tox-image-tools__toolbar{margin-top:8px}.tox .tox-image-tools__image-bg{background:url(data:image/gif;base64,R0lGODdhDAAMAIABAMzMzP///ywAAAAADAAMAAACFoQfqYeabNyDMkBQb81Uat85nxguUAEAOw==)}.tox .tox-image-tools__toolbar>.tox-spacer{flex:1;-ms-flex-preferred-size:auto}.tox .tox-croprect-block{background:#000;opacity:.5;position:absolute;zoom:1}.tox .tox-croprect-handle{border:2px solid #fff;height:20px;left:0;position:absolute;top:0;width:20px}.tox .tox-croprect-handle-move{border:0;cursor:move;position:absolute}.tox .tox-croprect-handle-nw{border-width:2px 0 0 2px;cursor:nw-resize;left:100px;margin:-2px 0 0 -2px;top:100px}.tox .tox-croprect-handle-ne{border-width:2px 2px 0 0;cursor:ne-resize;left:200px;margin:-2px 0 0 -20px;top:100px}.tox .tox-croprect-handle-sw{border-width:0 0 2px 2px;cursor:sw-resize;left:100px;margin:-20px 2px 0 -2px;top:200px}.tox .tox-croprect-handle-se{border-width:0 2px 2px 0;cursor:se-resize;left:200px;margin:-20px 0 0 -20px;top:200px}.tox:not([dir=rtl]) .tox-image-tools__toolbar>.tox-slider:not(:first-of-type){margin-left:8px}.tox:not([dir=rtl]) .tox-image-tools__toolbar>.tox-button+.tox-slider{margin-left:32px}.tox:not([dir=rtl]) .tox-image-tools__toolbar>.tox-slider+.tox-button{margin-left:32px}.tox[dir=rtl] .tox-image-tools__toolbar>.tox-slider:not(:first-of-type){margin-right:8px}.tox[dir=rtl] .tox-image-tools__toolbar>.tox-button+.tox-slider{margin-right:32px}.tox[dir=rtl] .tox-image-tools__toolbar>.tox-slider+.tox-button{margin-right:32px}.tox .tox-insert-table-picker{display:flex;flex-wrap:wrap;width:170px}.tox .tox-insert-table-picker>div{border-color:#ccc;border-style:solid;border-width:0 1px 1px 0;box-sizing:border-box;height:17px;width:17px}.tox .tox-collection--list .tox-collection__group .tox-insert-table-picker{margin:-4px 0}.tox .tox-insert-table-picker .tox-insert-table-picker__selected{background-color:rgba(32,122,183,.5);border-color:rgba(32,122,183,.5)}.tox .tox-insert-table-picker__label{color:rgba(34,47,62,.7);display:block;font-size:14px;padding:4px;text-align:center;width:100%}.tox:not([dir=rtl]) .tox-insert-table-picker>div:nth-child(10n){border-right:0}.tox[dir=rtl] .tox-insert-table-picker>div:nth-child(10n+1){border-right:0}.tox .tox-menu{background-color:#fff;border:1px solid #ccc;border-radius:3px;box-shadow:0 4px 8px 0 rgba(34,47,62,.1);display:inline-block;overflow:hidden;vertical-align:top;z-index:1150}.tox .tox-menu.tox-collection.tox-collection--list{padding:0}.tox .tox-menu.tox-collection.tox-collection--toolbar{padding:4px}.tox .tox-menu.tox-collection.tox-collection--grid{padding:4px}.tox .tox-menu__label blockquote,.tox .tox-menu__label code,.tox .tox-menu__label h1,.tox .tox-menu__label h2,.tox .tox-menu__label h3,.tox .tox-menu__label h4,.tox .tox-menu__label h5,.tox .tox-menu__label h6,.tox .tox-menu__label p{margin:0}.tox .tox-menubar{background:url("data:image/svg+xml;charset=utf8,%3Csvg height=%2739px%27 viewBox=%270 0 40 39px%27 width=%2740%27 xmlns=%27http://www.w3.org/2000/svg%27%3E%3Crect x=%270%27 y=%2738px%27 width=%27100%27 height=%271%27 fill=%27%23cccccc%27/%3E%3C/svg%3E") left 0 top 0 #fff;background-color:#fff;display:flex;flex:0 0 auto;flex-shrink:0;flex-wrap:wrap;padding:0 4px 0 4px}.tox.tox-tinymce:not(.tox-tinymce-inline) .tox-editor-header:not(:first-child) .tox-menubar{border-top:1px solid #ccc}.tox .tox-mbtn{align-items:center;background:0 0;border:0;border-radius:3px;box-shadow:none;color:#222f3e;display:flex;flex:0 0 auto;font-size:14px;font-style:normal;font-weight:400;height:34px;justify-content:center;margin:2px 0 3px 0;outline:0;overflow:hidden;padding:0 4px;text-transform:none;width:auto}.tox .tox-mbtn[disabled]{background-color:transparent;border:0;box-shadow:none;color:rgba(34,47,62,.5);cursor:not-allowed}.tox .tox-mbtn:focus:not(:disabled){background:#dee0e2;border:0;box-shadow:none;color:#222f3e}.tox .tox-mbtn--active{background:#c8cbcf;border:0;box-shadow:none;color:#222f3e}.tox .tox-mbtn:hover:not(:disabled):not(.tox-mbtn--active){background:#dee0e2;border:0;box-shadow:none;color:#222f3e}.tox .tox-mbtn__select-label{cursor:default;font-weight:400;margin:0 4px}.tox .tox-mbtn[disabled] .tox-mbtn__select-label{cursor:not-allowed}.tox .tox-mbtn__select-chevron{align-items:center;display:flex;justify-content:center;width:16px;display:none}.tox .tox-notification{border-radius:3px;border-style:solid;border-width:1px;box-shadow:none;box-sizing:border-box;display:-ms-grid;display:grid;font-size:14px;font-weight:400;-ms-grid-columns:minmax(40px,1fr) auto minmax(40px,1fr);grid-template-columns:minmax(40px,1fr) auto minmax(40px,1fr);margin-top:4px;opacity:0;padding:4px;transition:transform .1s ease-in,opacity 150ms ease-in}.tox .tox-notification p{font-size:14px;font-weight:400}.tox .tox-notification a{cursor:pointer;text-decoration:underline}.tox .tox-notification--in{opacity:1}.tox .tox-notification--success{background-color:#e4eeda;border-color:#d7e6c8;color:#222f3e}.tox .tox-notification--success p{color:#222f3e}.tox .tox-notification--success a{color:#547831}.tox .tox-notification--success svg{fill:#222f3e}.tox .tox-notification--error{background-color:#f8dede;border-color:#f2bfbf;color:#222f3e}.tox .tox-notification--error p{color:#222f3e}.tox .tox-notification--error a{color:#c00}.tox .tox-notification--error svg{fill:#222f3e}.tox .tox-notification--warn,.tox .tox-notification--warning{background-color:#fffaea;border-color:#ffe89d;color:#222f3e}.tox .tox-notification--warn p,.tox .tox-notification--warning p{color:#222f3e}.tox .tox-notification--warn a,.tox .tox-notification--warning a{color:#222f3e}.tox .tox-notification--warn svg,.tox .tox-notification--warning svg{fill:#222f3e}.tox .tox-notification--info{background-color:#d9edf7;border-color:#779ecb;color:#222f3e}.tox .tox-notification--info p{color:#222f3e}.tox .tox-notification--info a{color:#222f3e}.tox .tox-notification--info svg{fill:#222f3e}.tox .tox-notification__body{-ms-grid-row-align:center;align-self:center;color:#222f3e;font-size:14px;-ms-grid-column-span:1;grid-column-end:3;-ms-grid-column:2;grid-column-start:2;-ms-grid-row-span:1;grid-row-end:2;-ms-grid-row:1;grid-row-start:1;text-align:center;white-space:normal;word-break:break-all;word-break:break-word}.tox .tox-notification__body>*{margin:0}.tox .tox-notification__body>*+*{margin-top:1rem}.tox .tox-notification__icon{-ms-grid-row-align:center;align-self:center;-ms-grid-column-span:1;grid-column-end:2;-ms-grid-column:1;grid-column-start:1;-ms-grid-row-span:1;grid-row-end:2;-ms-grid-row:1;grid-row-start:1;-ms-grid-column-align:end;justify-self:end}.tox .tox-notification__icon svg{display:block}.tox .tox-notification__dismiss{-ms-grid-row-align:start;align-self:start;-ms-grid-column-span:1;grid-column-end:4;-ms-grid-column:3;grid-column-start:3;-ms-grid-row-span:1;grid-row-end:2;-ms-grid-row:1;grid-row-start:1;-ms-grid-column-align:end;justify-self:end}.tox .tox-notification .tox-progress-bar{-ms-grid-column-span:3;grid-column-end:4;-ms-grid-column:1;grid-column-start:1;-ms-grid-row-span:1;grid-row-end:3;-ms-grid-row:2;grid-row-start:2;-ms-grid-column-align:center;justify-self:center}.tox .tox-pop{display:inline-block;position:relative}.tox .tox-pop--resizing{transition:width .1s ease}.tox .tox-pop--resizing .tox-toolbar,.tox .tox-pop--resizing .tox-toolbar__group{flex-wrap:nowrap}.tox .tox-pop--transition{transition:.15s ease;transition-property:left,right,top,bottom}.tox .tox-pop--transition::after,.tox .tox-pop--transition::before{transition:all .15s,visibility 0s,opacity 75ms ease 75ms}.tox .tox-pop__dialog{background-color:#fff;border:1px solid #ccc;border-radius:3px;box-shadow:0 1px 3px rgba(0,0,0,.15);min-width:0;overflow:hidden}.tox .tox-pop__dialog>:not(.tox-toolbar){margin:4px 4px 4px 8px}.tox .tox-pop__dialog .tox-toolbar{background-color:transparent;margin-bottom:-1px}.tox .tox-pop::after,.tox .tox-pop::before{border-style:solid;content:'';display:block;height:0;opacity:1;position:absolute;width:0}.tox .tox-pop.tox-pop--inset::after,.tox .tox-pop.tox-pop--inset::before{opacity:0;transition:all 0s .15s,visibility 0s,opacity 75ms ease}.tox .tox-pop.tox-pop--bottom::after,.tox .tox-pop.tox-pop--bottom::before{left:50%;top:100%}.tox .tox-pop.tox-pop--bottom::after{border-color:#fff transparent transparent transparent;border-width:8px;margin-left:-8px;margin-top:-1px}.tox .tox-pop.tox-pop--bottom::before{border-color:#ccc transparent transparent transparent;border-width:9px;margin-left:-9px}.tox .tox-pop.tox-pop--top::after,.tox .tox-pop.tox-pop--top::before{left:50%;top:0;transform:translateY(-100%)}.tox .tox-pop.tox-pop--top::after{border-color:transparent transparent #fff transparent;border-width:8px;margin-left:-8px;margin-top:1px}.tox .tox-pop.tox-pop--top::before{border-color:transparent transparent #ccc transparent;border-width:9px;margin-left:-9px}.tox .tox-pop.tox-pop--left::after,.tox .tox-pop.tox-pop--left::before{left:0;top:calc(50% - 1px);transform:translateY(-50%)}.tox .tox-pop.tox-pop--left::after{border-color:transparent #fff transparent transparent;border-width:8px;margin-left:-15px}.tox .tox-pop.tox-pop--left::before{border-color:transparent #ccc transparent transparent;border-width:10px;margin-left:-19px}.tox .tox-pop.tox-pop--right::after,.tox .tox-pop.tox-pop--right::before{left:100%;top:calc(50% + 1px);transform:translateY(-50%)}.tox .tox-pop.tox-pop--right::after{border-color:transparent transparent transparent #fff;border-width:8px;margin-left:-1px}.tox .tox-pop.tox-pop--right::before{border-color:transparent transparent transparent #ccc;border-width:10px;margin-left:-1px}.tox .tox-pop.tox-pop--align-left::after,.tox .tox-pop.tox-pop--align-left::before{left:20px}.tox .tox-pop.tox-pop--align-right::after,.tox .tox-pop.tox-pop--align-right::before{left:calc(100% - 20px)}.tox .tox-sidebar-wrap{display:flex;flex-direction:row;flex-grow:1;-ms-flex-preferred-size:0;min-height:0}.tox .tox-sidebar{background-color:#fff;display:flex;flex-direction:row;justify-content:flex-end}.tox .tox-sidebar__slider{display:flex;overflow:hidden}.tox .tox-sidebar__pane-container{display:flex}.tox .tox-sidebar__pane{display:flex}.tox .tox-sidebar--sliding-closed{opacity:0}.tox .tox-sidebar--sliding-open{opacity:1}.tox .tox-sidebar--sliding-growing,.tox .tox-sidebar--sliding-shrinking{transition:width .5s ease,opacity .5s ease}.tox .tox-selector{background-color:#4099ff;border-color:#4099ff;border-style:solid;border-width:1px;box-sizing:border-box;display:inline-block;height:10px;position:absolute;width:10px}.tox.tox-platform-touch .tox-selector{height:12px;width:12px}.tox .tox-slider{align-items:center;display:flex;flex:1;-ms-flex-preferred-size:auto;height:24px;justify-content:center;position:relative}.tox .tox-slider__rail{background-color:transparent;border:1px solid #ccc;border-radius:3px;height:10px;min-width:120px;width:100%}.tox .tox-slider__handle{background-color:#207ab7;border:2px solid #185d8c;border-radius:3px;box-shadow:none;height:24px;left:50%;position:absolute;top:50%;transform:translateX(-50%) translateY(-50%);width:14px}.tox .tox-source-code{overflow:auto}.tox .tox-spinner{display:flex}.tox .tox-spinner>div{animation:tam-bouncing-dots 1.5s ease-in-out 0s infinite both;background-color:rgba(34,47,62,.7);border-radius:100%;height:8px;width:8px}.tox .tox-spinner>div:nth-child(1){animation-delay:-.32s}.tox .tox-spinner>div:nth-child(2){animation-delay:-.16s}@keyframes tam-bouncing-dots{0%,100%,80%{transform:scale(0)}40%{transform:scale(1)}}.tox:not([dir=rtl]) .tox-spinner>div:not(:first-child){margin-left:4px}.tox[dir=rtl] .tox-spinner>div:not(:first-child){margin-right:4px}.tox .tox-statusbar{align-items:center;background-color:#fff;border-top:1px solid #ccc;color:rgba(34,47,62,.7);display:flex;flex:0 0 auto;font-size:12px;font-weight:400;height:18px;overflow:hidden;padding:0 8px;position:relative;text-transform:uppercase}.tox .tox-statusbar__text-container{display:flex;flex:1 1 auto;justify-content:flex-end;overflow:hidden}.tox .tox-statusbar__path{display:flex;flex:1 1 auto;margin-right:auto;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.tox .tox-statusbar__path>*{display:inline;white-space:nowrap}.tox .tox-statusbar__wordcount{flex:0 0 auto;margin-left:1ch}.tox .tox-statusbar a,.tox .tox-statusbar__path-item,.tox .tox-statusbar__wordcount{color:rgba(34,47,62,.7);text-decoration:none}.tox .tox-statusbar a:focus:not(:disabled):not([aria-disabled=true]),.tox .tox-statusbar a:hover:not(:disabled):not([aria-disabled=true]),.tox .tox-statusbar__path-item:focus:not(:disabled):not([aria-disabled=true]),.tox .tox-statusbar__path-item:hover:not(:disabled):not([aria-disabled=true]),.tox .tox-statusbar__wordcount:focus:not(:disabled):not([aria-disabled=true]),.tox .tox-statusbar__wordcount:hover:not(:disabled):not([aria-disabled=true]){cursor:pointer;text-decoration:underline}.tox .tox-statusbar__resize-handle{align-items:flex-end;align-self:stretch;cursor:nwse-resize;display:flex;flex:0 0 auto;justify-content:flex-end;margin-left:auto;margin-right:-8px;padding-left:1ch}.tox .tox-statusbar__resize-handle svg{display:block;fill:rgba(34,47,62,.7)}.tox .tox-statusbar__resize-handle:focus svg{background-color:#dee0e2;border-radius:1px;box-shadow:0 0 0 2px #dee0e2}.tox:not([dir=rtl]) .tox-statusbar__path>*{margin-right:4px}.tox:not([dir=rtl]) .tox-statusbar__branding{margin-left:1ch}.tox[dir=rtl] .tox-statusbar{flex-direction:row-reverse}.tox[dir=rtl] .tox-statusbar__path>*{margin-left:4px}.tox .tox-throbber{z-index:1299}.tox .tox-throbber__busy-spinner{align-items:center;background-color:rgba(255,255,255,.6);bottom:0;display:flex;justify-content:center;left:0;position:absolute;right:0;top:0}.tox .tox-tbtn{align-items:center;background:0 0;border:0;border-radius:3px;box-shadow:none;color:#222f3e;display:flex;flex:0 0 auto;font-size:14px;font-style:normal;font-weight:400;height:34px;justify-content:center;margin:2px 0 3px 0;outline:0;overflow:hidden;padding:0;text-transform:none;width:34px}.tox .tox-tbtn svg{display:block;fill:#222f3e}.tox .tox-tbtn.tox-tbtn-more{padding-left:5px;padding-right:5px;width:inherit}.tox .tox-tbtn:focus{background:#dee0e2;border:0;box-shadow:none}.tox .tox-tbtn:hover{background:#dee0e2;border:0;box-shadow:none;color:#222f3e}.tox .tox-tbtn:hover svg{fill:#222f3e}.tox .tox-tbtn:active{background:#c8cbcf;border:0;box-shadow:none;color:#222f3e}.tox .tox-tbtn:active svg{fill:#222f3e}.tox .tox-tbtn--disabled,.tox .tox-tbtn--disabled:hover,.tox .tox-tbtn:disabled,.tox .tox-tbtn:disabled:hover{background:0 0;border:0;box-shadow:none;color:rgba(34,47,62,.5);cursor:not-allowed}.tox .tox-tbtn--disabled svg,.tox .tox-tbtn--disabled:hover svg,.tox .tox-tbtn:disabled svg,.tox .tox-tbtn:disabled:hover svg{fill:rgba(34,47,62,.5)}.tox .tox-tbtn--enabled,.tox .tox-tbtn--enabled:hover{background:#c8cbcf;border:0;box-shadow:none;color:#222f3e}.tox .tox-tbtn--enabled:hover>*,.tox .tox-tbtn--enabled>*{transform:none}.tox .tox-tbtn--enabled svg,.tox .tox-tbtn--enabled:hover svg{fill:#222f3e}.tox .tox-tbtn:focus:not(.tox-tbtn--disabled){color:#222f3e}.tox .tox-tbtn:focus:not(.tox-tbtn--disabled) svg{fill:#222f3e}.tox .tox-tbtn:active>*{transform:none}.tox .tox-tbtn--md{height:51px;width:51px}.tox .tox-tbtn--lg{flex-direction:column;height:68px;width:68px}.tox .tox-tbtn--return{-ms-grid-row-align:stretch;align-self:stretch;height:unset;width:16px}.tox .tox-tbtn--labeled{padding:0 4px;width:unset}.tox .tox-tbtn__vlabel{display:block;font-size:10px;font-weight:400;letter-spacing:-.025em;margin-bottom:4px;white-space:nowrap}.tox .tox-tbtn--select{margin:2px 0 3px 0;padding:0 4px;width:auto}.tox .tox-tbtn__select-label{cursor:default;font-weight:400;margin:0 4px}.tox .tox-tbtn__select-chevron{align-items:center;display:flex;justify-content:center;width:16px}.tox .tox-tbtn__select-chevron svg{fill:rgba(34,47,62,.5)}.tox .tox-tbtn--bespoke .tox-tbtn__select-label{overflow:hidden;text-overflow:ellipsis;white-space:nowrap;width:7em}.tox .tox-split-button{border:0;border-radius:3px;box-sizing:border-box;display:flex;margin:2px 0 3px 0;overflow:hidden}.tox .tox-split-button:hover{box-shadow:0 0 0 1px #dee0e2 inset}.tox .tox-split-button:focus{background:#dee0e2;box-shadow:none;color:#222f3e}.tox .tox-split-button>*{border-radius:0}.tox .tox-split-button__chevron{width:16px}.tox .tox-split-button__chevron svg{fill:rgba(34,47,62,.5)}.tox .tox-split-button .tox-tbtn{margin:0}.tox.tox-platform-touch .tox-split-button .tox-tbtn:first-child{width:30px}.tox.tox-platform-touch .tox-split-button__chevron{width:20px}.tox .tox-split-button.tox-tbtn--disabled .tox-tbtn:focus,.tox .tox-split-button.tox-tbtn--disabled .tox-tbtn:hover,.tox .tox-split-button.tox-tbtn--disabled:focus,.tox .tox-split-button.tox-tbtn--disabled:hover{background:0 0;box-shadow:none;color:rgba(34,47,62,.5)}.tox .tox-toolbar-overlord{background-color:#fff}.tox .tox-toolbar,.tox .tox-toolbar__overflow,.tox .tox-toolbar__primary{background:url("data:image/svg+xml;charset=utf8,%3Csvg height=%2739px%27 viewBox=%270 0 40 39px%27 width=%2740%27 xmlns=%27http://www.w3.org/2000/svg%27%3E%3Crect x=%270%27 y=%2738px%27 width=%27100%27 height=%271%27 fill=%27%23cccccc%27/%3E%3C/svg%3E") left 0 top 0 #fff;background-color:#fff;display:flex;flex:0 0 auto;flex-shrink:0;flex-wrap:wrap;padding:0 0}.tox .tox-toolbar__overflow.tox-toolbar__overflow--closed{height:0;opacity:0;padding-bottom:0;padding-top:0;visibility:hidden}.tox .tox-toolbar__overflow--growing{transition:height .3s ease,opacity .2s linear .1s}.tox .tox-toolbar__overflow--shrinking{transition:opacity .3s ease,height .2s linear .1s,visibility 0s linear .3s}.tox .tox-menubar+.tox-toolbar,.tox .tox-menubar+.tox-toolbar-overlord .tox-toolbar__primary{border-top:1px solid #ccc;margin-top:-1px}.tox .tox-toolbar--scrolling{flex-wrap:nowrap;overflow-x:auto}.tox .tox-pop .tox-toolbar{border-width:0}.tox .tox-toolbar--no-divider{background-image:none}.tox-tinymce:not(.tox-tinymce-inline) .tox-editor-header:not(:first-child) .tox-toolbar-overlord:first-child .tox-toolbar__primary,.tox-tinymce:not(.tox-tinymce-inline) .tox-editor-header:not(:first-child) .tox-toolbar:first-child{border-top:1px solid #ccc}.tox.tox-tinymce-aux .tox-toolbar__overflow{background-color:#fff;border:1px solid #ccc;border-radius:3px;box-shadow:0 1px 3px rgba(0,0,0,.15)}.tox .tox-toolbar__group{align-items:center;display:flex;flex-wrap:wrap;margin:0 0;padding:0 4px 0 4px}.tox .tox-toolbar__group--pull-right{margin-left:auto}.tox .tox-toolbar--scrolling .tox-toolbar__group{flex-shrink:0;flex-wrap:nowrap}.tox:not([dir=rtl]) .tox-toolbar__group:not(:last-of-type){border-right:1px solid #ccc}.tox[dir=rtl] .tox-toolbar__group:not(:last-of-type){border-left:1px solid #ccc}.tox .tox-tooltip{display:inline-block;padding:8px;position:relative}.tox .tox-tooltip__body{background-color:#222f3e;border-radius:3px;box-shadow:0 2px 4px rgba(34,47,62,.3);color:rgba(255,255,255,.75);font-size:14px;font-style:normal;font-weight:400;padding:4px 8px;text-transform:none}.tox .tox-tooltip__arrow{position:absolute}.tox .tox-tooltip--down .tox-tooltip__arrow{border-left:8px solid transparent;border-right:8px solid transparent;border-top:8px solid #222f3e;bottom:0;left:50%;position:absolute;transform:translateX(-50%)}.tox .tox-tooltip--up .tox-tooltip__arrow{border-bottom:8px solid #222f3e;border-left:8px solid transparent;border-right:8px solid transparent;left:50%;position:absolute;top:0;transform:translateX(-50%)}.tox .tox-tooltip--right .tox-tooltip__arrow{border-bottom:8px solid transparent;border-left:8px solid #222f3e;border-top:8px solid transparent;position:absolute;right:0;top:50%;transform:translateY(-50%)}.tox .tox-tooltip--left .tox-tooltip__arrow{border-bottom:8px solid transparent;border-right:8px solid #222f3e;border-top:8px solid transparent;left:0;position:absolute;top:50%;transform:translateY(-50%)}.tox .tox-well{border:1px solid #ccc;border-radius:3px;padding:8px;width:100%}.tox .tox-well>:first-child{margin-top:0}.tox .tox-well>:last-child{margin-bottom:0}.tox .tox-well>:only-child{margin:0}.tox .tox-custom-editor{border:1px solid #ccc;border-radius:3px;display:flex;flex:1;position:relative}.tox .tox-dialog-loading::before{background-color:rgba(0,0,0,.5);content:"";height:100%;position:absolute;width:100%;z-index:1000}.tox .tox-tab{cursor:pointer}.tox .tox-dialog__content-js{display:flex;flex:1;-ms-flex-preferred-size:auto}.tox .tox-dialog__body-content .tox-collection{display:flex;flex:1;-ms-flex-preferred-size:auto}.tox .tox-image-tools-edit-panel{height:60px}.tox .tox-image-tools__sidebar{height:60px}
         /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uLy4uLy4uLy4uLy55YXJuL2NhY2hlL3RpbnltY2UtbnBtLTUuMTAuNS1iYzhhOWJiNmEyLWEzMjUxOTIyMDEuemlwL25vZGVfbW9kdWxlcy90aW55bWNlL3NraW5zL3VpL294aWRlL3NraW4ubWluLmNzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTs7Ozs7RUFLRTtBQUNGLEtBQUssZUFBZSxDQUFDLHNCQUFzQixDQUFDLGFBQWEsQ0FBQyxXQUFXLENBQUMsdUhBQXVILENBQUMsY0FBYyxDQUFDLGlCQUFpQixDQUFDLGVBQWUsQ0FBQyxrQkFBa0IsQ0FBQyx1Q0FBdUMsQ0FBQyxvQkFBb0IsQ0FBQyxnQkFBZ0IsQ0FBQyxtQkFBbUIsQ0FBQyxzQkFBc0IsQ0FBQyxrQkFBa0IsQ0FBQyx5QkFBeUIsa0JBQWtCLENBQUMsYUFBYSxDQUFDLGNBQWMsQ0FBQyxpQkFBaUIsQ0FBQyxtQkFBbUIsQ0FBQyxpQkFBaUIsQ0FBQyxrQkFBa0IsQ0FBQyxtQkFBbUIsQ0FBQyxtQkFBbUIsQ0FBQyxtQ0FBbUMsQ0FBQyxrQkFBa0IsQ0FBQyx1QkFBdUIsQ0FBQyxtQkFBbUIsQ0FBQyxzQkFBc0IsQ0FBQyxzQkFBc0IsQ0FBQyxtQkFBbUIsQ0FBQyx5QkFBeUIsY0FBYyxDQUFDLFFBQVEsQ0FBQyxlQUFlLENBQUMsVUFBVSxDQUFDLFdBQVcsQ0FBQyxRQUFRLENBQUMsY0FBYyxDQUFDLFNBQVMsQ0FBQyxTQUFTLENBQUMsZUFBZSxDQUFDLFVBQVUsQ0FBQyxvQkFBb0IsYUFBYSxDQUFDLGVBQWUsQ0FBQyxjQUFjLGFBQWEsQ0FBQyxnQkFBZ0IsQ0FBQyxhQUFhLHFCQUFxQixDQUFDLGVBQWUsQ0FBQyxlQUFlLENBQUMscUJBQXFCLENBQUMsWUFBWSxDQUFDLHFCQUFxQixDQUFDLHVIQUF1SCxDQUFDLGVBQWUsQ0FBQyxpQkFBaUIsQ0FBQyw0QkFBNEIsQ0FBQyxvQkFBb0IsV0FBVyxDQUFDLGVBQWUsQ0FBQyx1Q0FBdUMsNEJBQTRCLENBQUMs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QkFBNkIsWUFBWSxDQUFDLE1BQU0sQ0FBQyw0QkFBNEIsQ0FBQywrQ0FBK0MsWUFBWSxDQUFDLE1BQU0sQ0FBQyw0QkFBNEIsQ0FBQyxpQ0FBaUMsV0FBVyxDQUFDLCtCQUErQixXQUFXIiwic291cmNlc0NvbnRlbnQiOlsiLyoqXG4gKiBDb3B5cmlnaHQgKGMpIFRpbnkgVGVjaG5vbG9naWVzLCBJbmMuIEFsbCByaWdodHMgcmVzZXJ2ZWQuXG4gKiBMaWNlbnNlZCB1bmRlciB0aGUgTEdQTCBvciBhIGNvbW1lcmNpYWwgbGljZW5zZS5cbiAqIEZvciBMR1BMIHNlZSBMaWNlbnNlLnR4dCBpbiB0aGUgcHJvamVjdCByb290IGZvciBsaWNlbnNlIGluZm9ybWF0aW9uLlxuICogRm9yIGNvbW1lcmNpYWwgbGljZW5zZXMgc2VlIGh0dHBzOi8vd3d3LnRpbnkuY2xvdWQvXG4gKi9cbi50b3h7Ym94LXNoYWRvdzpub25lO2JveC1zaXppbmc6Y29udGVudC1ib3g7Y29sb3I6IzIyMmYzZTtjdXJzb3I6YXV0bztmb250LWZhbWlseTotYXBwbGUtc3lzdGVtLEJsaW5rTWFjU3lzdGVtRm9udCxcIlNlZ29lIFVJXCIsUm9ib3RvLE94eWdlbi1TYW5zLFVidW50dSxDYW50YXJlbGwsXCJIZWx2ZXRpY2EgTmV1ZVwiLHNhbnMtc2VyaWY7Zm9udC1zaXplOjE2cHg7Zm9udC1zdHlsZTpub3JtYWw7Zm9udC13ZWlnaHQ6NDAwO2xpbmUtaGVpZ2h0Om5vcm1hbDstd2Via2l0LXRhcC1oaWdobGlnaHQtY29sb3I6dHJhbnNwYXJlbnQ7dGV4dC1kZWNvcmF0aW9uOm5vbmU7dGV4dC1zaGFkb3c6bm9uZTt0ZXh0LXRyYW5zZm9ybTpub25lO3ZlcnRpY2FsLWFsaWduOmluaXRpYWw7d2hpdGUtc3BhY2U6bm9ybWFsfS50b3ggOm5vdChzdmcpOm5vdChyZWN0KXtib3gtc2l6aW5nOmluaGVyaXQ7Y29sb3I6aW5oZXJpdDtjdXJzb3I6aW5oZXJpdDtkaXJlY3Rpb246aW5oZXJpdDtmb250LWZhbWlseTppbmhlcml0O2ZvbnQtc2l6ZTppbmhlcml0O2ZvbnQtc3R5bGU6aW5oZXJpdDtmb250LXdlaWdodDppbmhlcml0O2xpbmUtaGVpZ2h0OmluaGVyaXQ7LXdlYmtpdC10YXAtaGlnaGxpZ2h0LWNvbG9yOmluaGVyaXQ7dGV4dC1hbGlnbjppbmhlcml0O3RleHQtZGVjb3JhdGlvbjppbmhlcml0O3RleHQtc2hhZG93OmluaGVyaXQ7dGV4dC10cmFuc2Zvcm06aW5oZXJpdDt2ZXJ0aWNhbC1hbGlnbjppbmhlcml0O3doaXRlLXNwYWNlOmluaGVyaXR9LnRveCA6bm90KHN2Zyk6bm90KHJlY3Qpe2JhY2tncm91bmQ6MCAwO2JvcmRlcjowO2JveC1zaGFkb3c6bm9uZTtmbG9hdDpub25lO2hlaWdodDphdXRvO21hcmdpbjowO21heC13aWR0aDpub25lO291dGxpbmU6MDtwYWRkaW5nOjA7cG9zaXRpb246c3RhdGljO3dpZHRoOmF1dG99LnRveDpub3QoW2Rpcj1ydGxdKXtkaXJlY3Rpb246bHRyO3RleHQtYWxpZ246bGVmdH0udG94W2Rpcj1ydGxde2RpcmVjdGlvbjpydGw7dGV4dC1hbGlnbjpyaWdodH0udG94LXRpbnltY2V7Ym9yZGVyOjFweCBzb2xpZCAjY2NjO2JvcmRlci1yYWRpdXM6MDtib3gtc2hhZG93Om5vbmU7Ym94LXNpemluZzpib3JkZXItYm94O2Rpc3BsYXk6ZmxleDtmbGV4LWRpcmVjdGlvbjpjb2x1bW47Zm9udC1mYW1pbHk6LWFwcGxlLXN5c3RlbSxCbGlua01hY1N5c3RlbUZvbnQsXCJTZWdvZSBVSVwiLFJvYm90byxPeHlnZW4tU2FucyxVYnVudHUsQ2FudGFyZWxsLFwiSGVsdmV0aWNhIE5ldWVcIixzYW5zLXNlcmlmO292ZXJmbG93OmhpZGRlbjtwb3NpdGlvbjpyZWxhdGl2ZTt2aXNpYmlsaXR5OmluaGVyaXQhaW1wb3J0YW50fS50b3gtdGlueW1jZS1pbmxpbmV7Ym9yZGVyOm5vbmU7Ym94LXNoYWRvdzpub25lfS50b3gtdGlueW1jZS1pbmxpbmUgLnRveC1lZGl0b3ItaGVhZGVye2JhY2tncm91bmQtY29sb3I6dHJhbnNwYXJlbnQ7Ym9yZGVyOjFweCBzb2xpZCAjY2NjO2JvcmRlci1yYWRpdXM6MDtib3gtc2hhZG93Om5vbmV9LnRveC10aW55bWNlLWF1eHtmb250LWZhbWlseTotYXBwbGUtc3lzdGVtLEJsaW5rTWFjU3lzdGVtRm9udCxcIlNlZ29lIFVJXCIsUm9ib3RvLE94eWdlbi1TYW5zLFVidW50dSxDYW50YXJlbGwsXCJIZWx2ZXRpY2EgTmV1ZVwiLHNhbnMtc2VyaWY7ei1pbmRleDoxMzAwfS50b3gtdGlueW1jZSA6Zm9jdXMsLnRveC10aW55bWNlLWF1eCA6Zm9jdXN7b3V0bGluZTowfWJ1dHRvbjo6LW1vei1mb2N1cy1pbm5lcntib3JkZXI6MH0udG94W2Rpcj1ydGxdIC50b3gtaWNvbi0tZmxpcCBzdmd7dHJhbnNmb3JtOnJvdGF0ZVkoMTgwZGVnKX0udG94IC5hY2Nlc3NpYmlsaXR5LWlzc3VlX19oZWFkZXJ7YWxpZ24taXRlbXM6Y2VudGVyO2Rpc3BsYXk6ZmxleDttYXJnaW4tYm90dG9tOjRweH0udG94IC5hY2Nlc3NpYmlsaXR5LWlzc3VlX19kZXNjcmlwdGlvbnthbGlnbi1pdGVtczpzdHJldGNoO2JvcmRlcjoxcHggc29saWQgI2NjYztib3JkZXItcmFkaXVzOjNweDtkaXNwbGF5OmZsZXg7anVzdGlmeS1jb250ZW50OnNwYWNlLWJldHdlZW59LnRveCAuYWNjZXNzaWJpbGl0eS1pc3N1ZV9fZGVzY3JpcHRpb24+ZGl2e3BhZGRpbmctYm90dG9tOjRweH0udG94IC5hY2Nlc3NpYmlsaXR5LWlzc3VlX19kZXNjcmlwdGlvbj5kaXY+ZGl2e2FsaWduLWl0ZW1zOmNlbnRlcjtkaXNwbGF5OmZsZXg7bWFyZ2luLWJvdHRvbTo0cHh9LnRveCAuYWNjZXNzaWJpbGl0eS1pc3N1ZV9fZGVzY3JpcHRpb24+Omxhc3QtY2hpbGQ6bm90KDpvbmx5LWNoaWxkKXtib3JkZXItY29sb3I6I2NjYztib3JkZXItc3R5bGU6c29saWR9LnRveCAuYWNjZXNzaWJpbGl0eS1pc3N1ZV9fcmVwYWlye21hcmdpbi10b3A6MTZweH0udG94IC50b3gtZGlhbG9nX19ib2R5LWNvbnRlbnQgLmFjY2Vzc2liaWxpdHktaXNzdWUtLWluZm8gLmFjY2Vzc2liaWxpdHktaXNzdWVfX2Rlc2NyaXB0aW9ue2JhY2tncm91bmQtY29sb3I6cmdiYSgzMiwxMjIsMTgzLC4xKTtib3JkZXItY29sb3I6cmdiYSgzMiwxMjIsMTgzLC40KTtjb2xvcjojMjIyZjNlfS50b3ggLnRveC1kaWFsb2dfX2JvZHktY29udGVudCAuYWNjZXNzaWJpbGl0eS1pc3N1ZS0taW5mbyAuYWNjZXNzaWJpbGl0eS1pc3N1ZV9fZGVzY3JpcHRpb24+Omxhc3QtY2hpbGR7Ym9yZGVyLWNvbG9yOnJnYmEoMzIsMTIyLDE4MywuNCl9LnRveCAudG94LWRpYWxvZ19fYm9keS1jb250ZW50IC5hY2Nlc3NpYmlsaXR5LWlzc3VlLS1pbmZvIC50b3gtZm9ybV9fZ3JvdXAgaDJ7Y29sb3I6IzIwN2FiN30udG94IC50b3gtZGlhbG9nX19ib2R5LWNvbnRlbnQgLmFjY2Vzc2liaWxpdHktaXNzdWUtLWluZm8gLnRveC1pY29uIHN2Z3tmaWxsOiMyMDdhYjd9LnRveCAudG94LWRpYWxvZ19fYm9keS1jb250ZW50IC5hY2Nlc3NpYmlsaXR5LWlzc3VlLS1pbmZvIGEgLnRveC1pY29ue2NvbG9yOiMyMDdhYjd9LnRveCAudG94LWRpYWxvZ19fYm9keS1jb250ZW50IC5hY2Nlc3NpYmlsaXR5LWlzc3VlLS13YXJuIC5hY2Nlc3NpYmlsaXR5LWlzc3VlX19kZXNjcmlwdGlvbntiYWNrZ3JvdW5kLWNvbG9yOnJnYmEoMjU1LDE2NSwwLC4xKTtib3JkZXItY29sb3I6cmdiYSgyNTUsMTY1LDAsLjUpO2NvbG9yOiMyMjJmM2V9LnRveCAudG94LWRpYWxvZ19fYm9keS1jb250ZW50IC5hY2Nlc3NpYmlsaXR5LWlzc3VlLS13YXJuIC5hY2Nlc3NpYmlsaXR5LWlzc3VlX19kZXNjcmlwdGlvbj46bGFzdC1jaGlsZHtib3JkZXItY29sb3I6cmdiYSgyNTUsMTY1LDAsLjUpfS50b3ggLnRveC1kaWFsb2dfX2JvZHktY29udGVudCAuYWNjZXNzaWJpbGl0eS1pc3N1ZS0td2FybiAudG94LWZvcm1fX2dyb3VwIGgye2NvbG9yOiNjYzg1MDB9LnRveCAudG94LWRpYWxvZ19fYm9keS1jb250ZW50IC5hY2Nlc3NpYmlsaXR5LWlzc3VlLS13YXJuIC50b3gtaWNvbiBzdmd7ZmlsbDojY2M4NTAwfS50b3ggLnRveC1kaWFsb2dfX2JvZHktY29udGVudCAuYWNjZXNzaWJpbGl0eS1pc3N1ZS0td2FybiBhIC50b3gtaWNvbntjb2xvcjojY2M4NTAwfS50b3ggLnRveC1kaWFsb2dfX2JvZHktY29udGVudCAuYWNjZXNzaWJpbGl0eS1pc3N1ZS0tZXJyb3IgLmFjY2Vzc2liaWxpdHktaXNzdWVfX2Rlc2NyaXB0aW9ue2JhY2tncm91bmQtY29sb3I6cmdiYSgyMDQsMCwwLC4xKTtib3JkZXItY29sb3I6cmdiYSgyMDQsMCwwLC40KTtjb2xvcjojMjIyZjNlfS50b3ggLnRveC1kaWFsb2dfX2JvZHktY29udGVudCAuYWNjZXNzaWJpbGl0eS1pc3N1ZS0tZXJyb3IgLmFjY2Vzc2liaWxpdHktaXNzdWVfX2Rlc2NyaXB0aW9uPjpsYXN0LWNoaWxke2JvcmRlci1jb2xvcjpyZ2JhKDIwNCwwLDAsLjQpfS50b3ggLnRveC1kaWFsb2dfX2JvZHktY29udGVudCAuYWNjZXNzaWJpbGl0eS1pc3N1ZS0tZXJyb3IgLnRveC1mb3JtX19ncm91cCBoMntjb2xvcjojYzAwfS50b3ggLnRveC1kaWFsb2dfX2JvZHktY29udGVudCAuYWNjZXNzaWJpbGl0eS1pc3N1ZS0tZXJyb3IgLnRveC1pY29uIHN2Z3tmaWxsOiNjMDB9LnRveCAudG94LWRpYWxvZ19fYm9keS1jb250ZW50IC5hY2Nlc3NpYmlsaXR5LWlzc3VlLS1lcnJvciBhIC50b3gtaWNvbntjb2xvcjojYzAwfS50b3ggLnRveC1kaWFsb2dfX2JvZHktY29udGVudCAuYWNjZXNzaWJpbGl0eS1pc3N1ZS0tc3VjY2VzcyAuYWNjZXNzaWJpbGl0eS1pc3N1ZV9fZGVzY3JpcHRpb257YmFja2dyb3VuZC1jb2xvcjpyZ2JhKDEyMCwxNzEsNzAsLjEpO2JvcmRlci1jb2xvcjpyZ2JhKDEyMCwxNzEsNzAsLjQpO2NvbG9yOiMyMjJmM2V9LnRveCAudG94LWRpYWxvZ19fYm9keS1jb250ZW50IC5hY2Nlc3NpYmlsaXR5LWlzc3VlLS1zdWNjZXNzIC5hY2Nlc3NpYmlsaXR5LWlzc3VlX19kZXNjcmlwdGlvbj46bGFzdC1jaGlsZHtib3JkZXItY29sb3I6cmdiYSgxMjAsMTcxLDcwLC40KX0udG94IC50b3gtZGlhbG9nX19ib2R5LWNvbnRlbnQgLmFjY2Vzc2liaWxpdHktaXNzdWUtLXN1Y2Nlc3MgLnRveC1mb3JtX19ncm91cCBoMntjb2xvcjojNzhhYjQ2fS50b3ggLnRveC1kaWFsb2dfX2JvZHktY29udGVudCAuYWNjZXNzaWJpbGl0eS1pc3N1ZS0tc3VjY2VzcyAudG94LWljb24gc3Zne2ZpbGw6Izc4YWI0Nn0udG94IC50b3gtZGlhbG9nX19ib2R5LWNvbnRlbnQgLmFjY2Vzc2liaWxpdHktaXNzdWUtLXN1Y2Nlc3MgYSAudG94LWljb257Y29sb3I6Izc4YWI0Nn0udG94IC50b3gtZGlhbG9nX19ib2R5LWNvbnRlbnQgLmFjY2Vzc2liaWxpdHktaXNzdWVfX2hlYWRlciBoMSwudG94IC50b3gtZGlhbG9nX19ib2R5LWNvbnRlbnQgLnRveC1mb3JtX19ncm91cCAuYWNjZXNzaWJpbGl0eS1pc3N1ZV9fZGVzY3JpcHRpb24gaDJ7bWFyZ2luLXRvcDowfS50b3g6bm90KFtkaXI9cnRsXSkgLnRveC1kaWFsb2dfX2JvZHktY29udGVudCAuYWNjZXNzaWJpbGl0eS1pc3N1ZV9faGVhZGVyIC50b3gtYnV0dG9ue21hcmdpbi1sZWZ0OjRweH0udG94Om5vdChbZGlyPXJ0bF0pIC50b3gtZGlhbG9nX19ib2R5LWNvbnRlbnQgLmFjY2Vzc2liaWxpdHktaXNzdWVfX2hlYWRlcj46bnRoLWxhc3QtY2hpbGQoMil7bWFyZ2luLWxlZnQ6YXV0b30udG94Om5vdChbZGlyPXJ0bF0pIC50b3gtZGlhbG9nX19ib2R5LWNvbnRlbnQgLmFjY2Vzc2liaWxpdHktaXNzdWVfX2Rlc2NyaXB0aW9ue3BhZGRpbmc6NHB4IDRweCA0cHggOHB4fS50b3g6bm90KFtkaXI9cnRsXSkgLnRveC1kaWFsb2dfX2JvZHktY29udGVudCAuYWNjZXNzaWJpbGl0eS1pc3N1ZV9fZGVzY3JpcHRpb24+Omxhc3QtY2hpbGR7Ym9yZGVyLWxlZnQtd2lkdGg6MXB4O3BhZGRpbmctbGVmdDo0cHh9LnRveFtkaXI9cnRsXSAudG94LWRpYWxvZ19fYm9keS1jb250ZW50IC5hY2Nlc3NpYmlsaXR5LWlzc3VlX19oZWFkZXIgLnRveC1idXR0b257bWFyZ2luLXJpZ2h0OjRweH0udG94W2Rpcj1ydGxdIC50b3gtZGlhbG9nX19ib2R5LWNvbnRlbnQgLmFjY2Vzc2liaWxpdHktaXNzdWVfX2hlYWRlcj46bnRoLWxhc3QtY2hpbGQoMil7bWFyZ2luLXJpZ2h0OmF1dG99LnRveFtkaXI9cnRsXSAudG94LWRpYWxvZ19fYm9keS1jb250ZW50IC5hY2Nlc3NpYmlsaXR5LWlzc3VlX19kZXNjcmlwdGlvbntwYWRkaW5nOjRweCA4cHggNHB4IDRweH0udG94W2Rpcj1ydGxdIC50b3gtZGlhbG9nX19ib2R5LWNvbnRlbnQgLmFjY2Vzc2liaWxpdHktaXNzdWVfX2Rlc2NyaXB0aW9uPjpsYXN0LWNoaWxke2JvcmRlci1yaWdodC13aWR0aDoxcHg7cGFkZGluZy1yaWdodDo0cHh9LnRveCAudG94LWFuY2hvcmJhcntkaXNwbGF5OmZsZXg7ZmxleDowIDAgYXV0b30udG94IC50b3gtYmFye2Rpc3BsYXk6ZmxleDtmbGV4OjAgMCBhdXRvfS50b3ggLnRveC1idXR0b257YmFja2dyb3VuZC1jb2xvcjojMjA3YWI3O2JhY2tncm91bmQtaW1hZ2U6bm9uZTtiYWNrZ3JvdW5kLXBvc2l0aW9uOjAgMDtiYWNrZ3JvdW5kLXJlcGVhdDpyZXBlYXQ7Ym9yZGVyLWNvbG9yOiMyMDdhYjc7Ym9yZGVyLXJhZGl1czozcHg7Ym9yZGVyLXN0eWxlOnNvbGlkO2JvcmRlci13aWR0aDoxcHg7Ym94LXNoYWRvdzpub25lO2JveC1zaXppbmc6Ym9yZGVyLWJveDtjb2xvcjojZmZmO2N1cnNvcjpwb2ludGVyO2Rpc3BsYXk6aW5saW5lLWJsb2NrO2ZvbnQtZmFtaWx5Oi1hcHBsZS1zeXN0ZW0sQmxpbmtNYWNTeXN0ZW1Gb250LFwiU2Vnb2UgVUlcIixSb2JvdG8sT3h5Z2VuLVNhbnMsVWJ1bnR1LENhbnRhcmVsbCxcIkhlbHZldGljYSBOZXVlXCIsc2Fucy1zZXJpZjtmb250LXNpemU6MTRweDtmb250LXN0eWxlOm5vcm1hbDtmb250LXdlaWdodDo3MDA7bGV0dGVyLXNwYWNpbmc6bm9ybWFsO2xpbmUtaGVpZ2h0OjI0cHg7bWFyZ2luOjA7b3V0bGluZTowO3BhZGRpbmc6NHB4IDE2cHg7dGV4dC1hbGlnbjpjZW50ZXI7dGV4dC1kZWNvcmF0aW9uOm5vbmU7dGV4dC10cmFuc2Zvcm06bm9uZTt3aGl0ZS1zcGFjZTpub3dyYXB9LnRveCAudG94LWJ1dHRvbltkaXNhYmxlZF17YmFja2dyb3VuZC1jb2xvcjojMjA3YWI3O2JhY2tncm91bmQtaW1hZ2U6bm9uZTtib3JkZXItY29sb3I6IzIwN2FiNztib3gtc2hhZG93Om5vbmU7Y29sb3I6cmdiYSgyNTUsMjU1LDI1NSwuNSk7Y3Vyc29yOm5vdC1hbGxvd2VkfS50b3ggLnRveC1idXR0b246Zm9jdXM6bm90KDpkaXNhYmxlZCl7YmFja2dyb3VuZC1jb2xvcjojMWM2Y2ExO2JhY2tncm91bmQtaW1hZ2U6bm9uZTtib3JkZXItY29sb3I6IzFjNmNhMTtib3gtc2hhZG93Om5vbmU7Y29sb3I6I2ZmZn0udG94IC50b3gtYnV0dG9uOmhvdmVyOm5vdCg6ZGlzYWJsZWQpe2JhY2tncm91bmQtY29sb3I6IzFjNmNhMTtiYWNrZ3JvdW5kLWltYWdlOm5vbmU7Ym9yZGVyLWNvbG9yOiMxYzZjYTE7Ym94LXNoYWRvdzpub25lO2NvbG9yOiNmZmZ9LnRveCAudG94LWJ1dHRvbjphY3RpdmU6bm90KDpkaXNhYmxlZCl7YmFja2dyb3VuZC1jb2xvcjojMTg1ZDhjO2JhY2tncm91bmQtaW1hZ2U6bm9uZTtib3JkZXItY29sb3I6IzE4NWQ4Yztib3gtc2hhZG93Om5vbmU7Y29sb3I6I2ZmZn0udG94IC50b3gtYnV0dG9uLS1zZWNvbmRhcnl7YmFja2dyb3VuZC1jb2xvcjojZjBmMGYwO2JhY2tncm91bmQtaW1hZ2U6bm9uZTtiYWNrZ3JvdW5kLXBvc2l0aW9uOjAgMDtiYWNrZ3JvdW5kLXJlcGVhdDpyZXBlYXQ7Ym9yZGVyLWNvbG9yOiNmMGYwZjA7Ym9yZGVyLXJhZGl1czozcHg7Ym9yZGVyLXN0eWxlOnNvbGlkO2JvcmRlci13aWR0aDoxcHg7Ym94LXNoYWRvdzpub25lO2NvbG9yOiMyMjJmM2U7Zm9udC1zaXplOjE0cHg7Zm9udC1zdHlsZTpub3JtYWw7Zm9udC13ZWlnaHQ6NzAwO2xldHRlci1zcGFjaW5nOm5vcm1hbDtvdXRsaW5lOjA7cGFkZGluZzo0cHggMTZweDt0ZXh0LWRlY29yYXRpb246bm9uZTt0ZXh0LXRyYW5zZm9ybTpub25lfS50b3ggLnRveC1idXR0b24tLXNlY29uZGFyeVtkaXNhYmxlZF17YmFja2dyb3VuZC1jb2xvcjojZjBmMGYwO2JhY2tncm91bmQtaW1hZ2U6bm9uZTtib3JkZXItY29sb3I6I2YwZjBmMDtib3gtc2hhZG93Om5vbmU7Y29sb3I6cmdiYSgzNCw0Nyw2MiwuNSl9LnRveCAudG94LWJ1dHRvbi0tc2Vjb25kYXJ5OmZvY3VzOm5vdCg6ZGlzYWJsZWQpe2JhY2tncm91bmQtY29sb3I6I2UzZTNlMztiYWNrZ3JvdW5kLWltYWdlOm5vbmU7Ym9yZGVyLWNvbG9yOiNlM2UzZTM7Ym94LXNoYWRvdzpub25lO2NvbG9yOiMyMjJmM2V9LnRveCAudG94LWJ1dHRvbi0tc2Vjb25kYXJ5OmhvdmVyOm5vdCg6ZGlzYWJsZWQpe2JhY2tncm91bmQtY29sb3I6I2UzZTNlMztiYWNrZ3JvdW5kLWltYWdlOm5vbmU7Ym9yZGVyLWNvbG9yOiNlM2UzZTM7Ym94LXNoYWRvdzpub25lO2NvbG9yOiMyMjJmM2V9LnRveCAudG94LWJ1dHRvbi0tc2Vjb25kYXJ5OmFjdGl2ZTpub3QoOmRpc2FibGVkKXtiYWNrZ3JvdW5kLWNvbG9yOiNkNmQ2ZDY7YmFja2dyb3VuZC1pbWFnZTpub25lO2JvcmRlci1jb2xvcjojZDZkNmQ2O2JveC1zaGFkb3c6bm9uZTtjb2xvcjojMjIyZjNlfS50b3ggLnRveC1idXR0b24tLWljb24sLnRveCAudG94LWJ1dHRvbi50b3gtYnV0dG9uLS1pY29uLC50b3ggLnRveC1idXR0b24udG94LWJ1dHRvbi0tc2Vjb25kYXJ5LnRveC1idXR0b24tLWljb257cGFkZGluZzo0cHh9LnRveCAudG94LWJ1dHRvbi0taWNvbiAudG94LWljb24gc3ZnLC50b3ggLnRveC1idXR0b24udG94LWJ1dHRvbi0taWNvbiAudG94LWljb24gc3ZnLC50b3ggLnRveC1idXR0b24udG94LWJ1dHRvbi0tc2Vjb25kYXJ5LnRveC1idXR0b24tLWljb24gLnRveC1pY29uIHN2Z3tkaXNwbGF5OmJsb2NrO2ZpbGw6Y3VycmVudENvbG9yfS50b3ggLnRveC1idXR0b24tbGlua3tiYWNrZ3JvdW5kOjA7Ym9yZGVyOm5vbmU7Ym94LXNpemluZzpib3JkZXItYm94O2N1cnNvcjpwb2ludGVyO2Rpc3BsYXk6aW5saW5lLWJsb2NrO2ZvbnQtZmFtaWx5Oi1hcHBsZS1zeXN0ZW0sQmxpbmtNYWNTeXN0ZW1Gb250LFwiU2Vnb2UgVUlcIixSb2JvdG8sT3h5Z2VuLVNhbnMsVWJ1bnR1LENhbnRhcmVsbCxcIkhlbHZldGljYSBOZXVlXCIsc2Fucy1zZXJpZjtmb250LXNpemU6MTZweDtmb250LXdlaWdodDo0MDA7bGluZS1oZWlnaHQ6MS4zO21hcmdpbjowO3BhZGRpbmc6MDt3aGl0ZS1zcGFjZTpub3dyYXB9LnRveCAudG94LWJ1dHRvbi1saW5rLS1zbXtmb250LXNpemU6MTRweH0udG94IC50b3gtYnV0dG9uLS1uYWtlZHtiYWNrZ3JvdW5kLWNvbG9yOnRyYW5zcGFyZW50O2JvcmRlci1jb2xvcjp0cmFuc3BhcmVudDtib3gtc2hhZG93OnVuc2V0O2NvbG9yOiMyMjJmM2V9LnRveCAudG94LWJ1dHRvbi0tbmFrZWRbZGlzYWJsZWRde2JhY2tncm91bmQtY29sb3I6I2YwZjBmMDtib3JkZXItY29sb3I6I2YwZjBmMDtib3gtc2hhZG93Om5vbmU7Y29sb3I6cmdiYSgzNCw0Nyw2MiwuNSl9LnRveCAudG94LWJ1dHRvbi0tbmFrZWQ6aG92ZXI6bm90KDpkaXNhYmxlZCl7YmFja2dyb3VuZC1jb2xvcjojZTNlM2UzO2JvcmRlci1jb2xvcjojZTNlM2UzO2JveC1zaGFkb3c6bm9uZTtjb2xvcjojMjIyZjNlfS50b3ggLnRveC1idXR0b24tLW5ha2VkOmZvY3VzOm5vdCg6ZGlzYWJsZWQpe2JhY2tncm91bmQtY29sb3I6I2UzZTNlMztib3JkZXItY29sb3I6I2UzZTNlMztib3gtc2hhZG93Om5vbmU7Y29sb3I6IzIyMmYzZX0udG94IC50b3gtYnV0dG9uLS1uYWtlZDphY3RpdmU6bm90KDpkaXNhYmxlZCl7YmFja2dyb3VuZC1jb2xvcjojZDZkNmQ2O2JvcmRlci1jb2xvcjojZDZkNmQ2O2JveC1zaGFkb3c6bm9uZTtjb2xvcjojMjIyZjNlfS50b3ggLnRveC1idXR0b24tLW5ha2VkIC50b3gtaWNvbiBzdmd7ZmlsbDpjdXJyZW50Q29sb3J9LnRveCAudG94LWJ1dHRvbi0tbmFrZWQudG94LWJ1dHRvbi0taWNvbjpob3Zlcjpub3QoOmRpc2FibGVkKXtjb2xvcjojMjIyZjNlfS50b3ggLnRveC1jaGVja2JveHthbGlnbi1pdGVtczpjZW50ZXI7Ym9yZGVyLXJhZGl1czozcHg7Y3Vyc29yOnBvaW50ZXI7ZGlzcGxheTpmbGV4O2hlaWdodDozNnB4O21pbi13aWR0aDozNnB4fS50b3ggLnRveC1jaGVja2JveF9faW5wdXR7aGVpZ2h0OjFweDtvdmVyZmxvdzpoaWRkZW47cG9zaXRpb246YWJzb2x1dGU7dG9wOmF1dG87d2lkdGg6MXB4fS50b3ggLnRveC1jaGVja2JveF9faWNvbnN7YWxpZ24taXRlbXM6Y2VudGVyO2JvcmRlci1yYWRpdXM6M3B4O2JveC1zaGFkb3c6MCAwIDAgMnB4IHRyYW5zcGFyZW50O2JveC1zaXppbmc6Y29udGVudC1ib3g7ZGlzcGxheTpmbGV4O2hlaWdodDoyNHB4O2p1c3RpZnktY29udGVudDpjZW50ZXI7cGFkZGluZzpjYWxjKDRweCAtIDFweCk7d2lkdGg6MjRweH0udG94IC50b3gtY2hlY2tib3hfX2ljb25zIC50b3gtY2hlY2tib3gtaWNvbl9fdW5jaGVja2VkIHN2Z3tkaXNwbGF5OmJsb2NrO2ZpbGw6cmdiYSgzNCw0Nyw2MiwuMyl9LnRveCAudG94LWNoZWNrYm94X19pY29ucyAudG94LWNoZWNrYm94LWljb25fX2luZGV0ZXJtaW5hdGUgc3Zne2Rpc3BsYXk6bm9uZTtmaWxsOiMyMDdhYjd9LnRveCAudG94LWNoZWNrYm94X19pY29ucyAudG94LWNoZWNrYm94LWljb25fX2NoZWNrZWQgc3Zne2Rpc3BsYXk6bm9uZTtmaWxsOiMyMDdhYjd9LnRveCAudG94LWNoZWNrYm94LS1kaXNhYmxlZHtjb2xvcjpyZ2JhKDM0LDQ3LDYyLC41KTtjdXJzb3I6bm90LWFsbG93ZWR9LnRveCAudG94LWNoZWNrYm94LS1kaXNhYmxlZCAudG94LWNoZWNrYm94X19pY29ucyAudG94LWNoZWNrYm94LWljb25fX2NoZWNrZWQgc3Zne2ZpbGw6cmdiYSgzNCw0Nyw2MiwuNSl9LnRveCAudG94LWNoZWNrYm94LS1kaXNhYmxlZCAudG94LWNoZWNrYm94X19pY29ucyAudG94LWNoZWNrYm94LWljb25fX3VuY2hlY2tlZCBzdmd7ZmlsbDpyZ2JhKDM0LDQ3LDYyLC41KX0udG94IC50b3gtY2hlY2tib3gtLWRpc2FibGVkIC50b3gtY2hlY2tib3hfX2ljb25zIC50b3gtY2hlY2tib3gtaWNvbl9faW5kZXRlcm1pbmF0ZSBzdmd7ZmlsbDpyZ2JhKDM0LDQ3LDYyLC41KX0udG94IGlucHV0LnRveC1jaGVja2JveF9faW5wdXQ6Y2hlY2tlZCsudG94LWNoZWNrYm94X19pY29ucyAudG94LWNoZWNrYm94LWljb25fX3VuY2hlY2tlZCBzdmd7ZGlzcGxheTpub25lfS50b3ggaW5wdXQudG94LWNoZWNrYm94X19pbnB1dDpjaGVja2VkKy50b3gtY2hlY2tib3hfX2ljb25zIC50b3gtY2hlY2tib3gtaWNvbl9fY2hlY2tlZCBzdmd7ZGlzcGxheTpibG9ja30udG94IGlucHV0LnRveC1jaGVja2JveF9faW5wdXQ6aW5kZXRlcm1pbmF0ZSsudG94LWNoZWNrYm94X19pY29ucyAudG94LWNoZWNrYm94LWljb25fX3VuY2hlY2tlZCBzdmd7ZGlzcGxheTpub25lfS50b3ggaW5wdXQudG94LWNoZWNrYm94X19pbnB1dDppbmRldGVybWluYXRlKy50b3gtY2hlY2tib3hfX2ljb25zIC50b3gtY2hlY2tib3gtaWNvbl9faW5kZXRlcm1pbmF0ZSBzdmd7ZGlzcGxheTpibG9ja30udG94IGlucHV0LnRveC1jaGVja2JveF9faW5wdXQ6Zm9jdXMrLnRveC1jaGVja2JveF9faWNvbnN7Ym9yZGVyLXJhZGl1czozcHg7Ym94LXNoYWRvdzppbnNldCAwIDAgMCAxcHggIzIwN2FiNztwYWRkaW5nOmNhbGMoNHB4IC0gMXB4KX0udG94Om5vdChbZGlyPXJ0bF0pIC50b3gtY2hlY2tib3hfX2xhYmVse21hcmdpbi1sZWZ0OjRweH0udG94Om5vdChbZGlyPXJ0bF0pIC50b3gtY2hlY2tib3hfX2lucHV0e2xlZnQ6LTEwMDAwcHh9LnRveDpub3QoW2Rpcj1ydGxdKSAudG94LWJhciAudG94LWNoZWNrYm94e21hcmdpbi1sZWZ0OjRweH0udG94W2Rpcj1ydGxdIC50b3gtY2hlY2tib3hfX2xhYmVse21hcmdpbi1yaWdodDo0cHh9LnRveFtkaXI9cnRsXSAudG94LWNoZWNrYm94X19pbnB1dHtyaWdodDotMTAwMDBweH0udG94W2Rpcj1ydGxdIC50b3gtYmFyIC50b3gtY2hlY2tib3h7bWFyZ2luLXJpZ2h0OjRweH0udG94IC50b3gtY29sbGVjdGlvbi0tdG9vbGJhciAudG94LWNvbGxlY3Rpb25fX2dyb3Vwe2Rpc3BsYXk6ZmxleDtwYWRkaW5nOjB9LnRveCAudG94LWNvbGxlY3Rpb24tLWdyaWQgLnRveC1jb2xsZWN0aW9uX19ncm91cHtkaXNwbGF5OmZsZXg7ZmxleC13cmFwOndyYXA7bWF4LWhlaWdodDoyMDhweDtvdmVyZmxvdy14OmhpZGRlbjtvdmVyZmxvdy15OmF1dG87cGFkZGluZzowfS50b3ggLnRveC1jb2xsZWN0aW9uLS1saXN0IC50b3gtY29sbGVjdGlvbl9fZ3JvdXB7Ym9yZGVyLWJvdHRvbS13aWR0aDowO2JvcmRlci1jb2xvcjojY2NjO2JvcmRlci1sZWZ0LXdpZHRoOjA7Ym9yZGVyLXJpZ2h0LXdpZHRoOjA7Ym9yZGVyLXN0eWxlOnNvbGlkO2JvcmRlci10b3Atd2lkdGg6MXB4O3BhZGRpbmc6NHB4IDB9LnRveCAudG94LWNvbGxlY3Rpb24tLWxpc3QgLnRveC1jb2xsZWN0aW9uX19ncm91cDpmaXJzdC1jaGlsZHtib3JkZXItdG9wLXdpZHRoOjB9LnRveCAudG94LWNvbGxlY3Rpb25fX2dyb3VwLWhlYWRpbmd7YmFja2dyb3VuZC1jb2xvcjojZTZlNmU2O2NvbG9yOnJnYmEoMzQsNDcsNjIsLjcpO2N1cnNvcjpkZWZhdWx0O2ZvbnQtc2l6ZToxMnB4O2ZvbnQtc3R5bGU6bm9ybWFsO2ZvbnQtd2VpZ2h0OjQwMDttYXJnaW4tYm90dG9tOjRweDttYXJnaW4tdG9wOi00cHg7cGFkZGluZzo0cHggOHB4O3RleHQtdHJhbnNmb3JtOm5vbmU7LXdlYmtpdC10b3VjaC1jYWxsb3V0Om5vbmU7LXdlYmtpdC11c2VyLXNlbGVjdDpub25lOy1tb3otdXNlci1zZWxlY3Q6bm9uZTstbXMtdXNlci1zZWxlY3Q6bm9uZTt1c2VyLXNlbGVjdDpub25lfS50b3ggLnRveC1jb2xsZWN0aW9uX19pdGVte2FsaWduLWl0ZW1zOmNlbnRlcjtjb2xvcjojMjIyZjNlO2N1cnNvcjpwb2ludGVyO2Rpc3BsYXk6ZmxleDstd2Via2l0LXRvdWNoLWNhbGxvdXQ6bm9uZTstd2Via2l0LXVzZXItc2VsZWN0Om5vbmU7LW1vei11c2VyLXNlbGVjdDpub25lOy1tcy11c2VyLXNlbGVjdDpub25lO3VzZXItc2VsZWN0Om5vbmV9LnRveCAudG94LWNvbGxlY3Rpb24tLWxpc3QgLnRveC1jb2xsZWN0aW9uX19pdGVte3BhZGRpbmc6NHB4IDhweH0udG94IC50b3gtY29sbGVjdGlvbi0tdG9vbGJhciAudG94LWNvbGxlY3Rpb25fX2l0ZW17Ym9yZGVyLXJhZGl1czozcHg7cGFkZGluZzo0cHh9LnRveCAudG94LWNvbGxlY3Rpb24tLWdyaWQgLnRveC1jb2xsZWN0aW9uX19pdGVte2JvcmRlci1yYWRpdXM6M3B4O3BhZGRpbmc6NHB4fS50b3ggLnRveC1jb2xsZWN0aW9uLS1saXN0IC50b3gtY29sbGVjdGlvbl9faXRlbS0tZW5hYmxlZHtiYWNrZ3JvdW5kLWNvbG9yOiNmZmY7Y29sb3I6IzIyMmYzZX0udG94IC50b3gtY29sbGVjdGlvbi0tbGlzdCAudG94LWNvbGxlY3Rpb25fX2l0ZW0tLWFjdGl2ZXtiYWNrZ3JvdW5kLWNvbG9yOiNkZWUwZTJ9LnRveCAudG94LWNvbGxlY3Rpb24tLXRvb2xiYXIgLnRveC1jb2xsZWN0aW9uX19pdGVtLS1lbmFibGVke2JhY2tncm91bmQtY29sb3I6I2M4Y2JjZjtjb2xvcjojMjIyZjNlfS50b3ggLnRveC1jb2xsZWN0aW9uLS10b29sYmFyIC50b3gtY29sbGVjdGlvbl9faXRlbS0tYWN0aXZle2JhY2tncm91bmQtY29sb3I6I2RlZTBlMn0udG94IC50b3gtY29sbGVjdGlvbi0tZ3JpZCAudG94LWNvbGxlY3Rpb25fX2l0ZW0tLWVuYWJsZWR7YmFja2dyb3VuZC1jb2xvcjojYzhjYmNmO2NvbG9yOiMyMjJmM2V9LnRveCAudG94LWNvbGxlY3Rpb24tLWdyaWQgLnRveC1jb2xsZWN0aW9uX19pdGVtLS1hY3RpdmU6bm90KC50b3gtY29sbGVjdGlvbl9faXRlbS0tc3RhdGUtZGlzYWJsZWQpe2JhY2tncm91bmQtY29sb3I6I2RlZTBlMjtjb2xvcjojMjIyZjNlfS50b3ggLnRveC1jb2xsZWN0aW9uLS1saXN0IC50b3gtY29sbGVjdGlvbl9faXRlbS0tYWN0aXZlOm5vdCgudG94LWNvbGxlY3Rpb25fX2l0ZW0tLXN0YXRlLWRpc2FibGVkKXtjb2xvcjojMjIyZjNlfS50b3ggLnRveC1jb2xsZWN0aW9uLS10b29sYmFyIC50b3gtY29sbGVjdGlvbl9faXRlbS0tYWN0aXZlOm5vdCgudG94LWNvbGxlY3Rpb25fX2l0ZW0tLXN0YXRlLWRpc2FibGVkKXtjb2xvcjojMjIyZjNlfS50b3ggLnRveC1jb2xsZWN0aW9uX19pdGVtLWNoZWNrbWFyaywudG94IC50b3gtY29sbGVjdGlvbl9faXRlbS1pY29ue2FsaWduLWl0ZW1zOmNlbnRlcjtkaXNwbGF5OmZsZXg7aGVpZ2h0OjI0cHg7anVzdGlmeS1jb250ZW50OmNlbnRlcjt3aWR0aDoyNHB4fS50b3ggLnRveC1jb2xsZWN0aW9uX19pdGVtLWNoZWNrbWFyayBzdmcsLnRveCAudG94LWNvbGxlY3Rpb25fX2l0ZW0taWNvbiBzdmd7ZmlsbDpjdXJyZW50Q29sb3J9LnRveCAudG94LWNvbGxlY3Rpb24tLXRvb2xiYXItbGcgLnRveC1jb2xsZWN0aW9uX19pdGVtLWljb257aGVpZ2h0OjQ4cHg7d2lkdGg6NDhweH0udG94IC50b3gtY29sbGVjdGlvbl9faXRlbS1sYWJlbHtjb2xvcjpjdXJyZW50Q29sb3I7ZGlzcGxheTppbmxpbmUtYmxvY2s7ZmxleDoxOy1tcy1mbGV4LXByZWZlcnJlZC1zaXplOmF1dG87Zm9udC1zaXplOjE0cHg7Zm9udC1zdHlsZTpub3JtYWw7Zm9udC13ZWlnaHQ6NDAwO2xpbmUtaGVpZ2h0OjI0cHg7dGV4dC10cmFuc2Zvcm06bm9uZTt3b3JkLWJyZWFrOmJyZWFrLWFsbH0udG94IC50b3gtY29sbGVjdGlvbl9faXRlbS1hY2Nlc3Nvcnl7Y29sb3I6cmdiYSgzNCw0Nyw2MiwuNyk7ZGlzcGxheTppbmxpbmUtYmxvY2s7Zm9udC1zaXplOjE0cHg7aGVpZ2h0OjI0cHg7bGluZS1oZWlnaHQ6MjRweDt0ZXh0LXRyYW5zZm9ybTpub25lfS50b3ggLnRveC1jb2xsZWN0aW9uX19pdGVtLWNhcmV0e2FsaWduLWl0ZW1zOmNlbnRlcjtkaXNwbGF5OmZsZXg7bWluLWhlaWdodDoyNHB4fS50b3ggLnRveC1jb2xsZWN0aW9uX19pdGVtLWNhcmV0OjphZnRlcntjb250ZW50OicnO2ZvbnQtc2l6ZTowO21pbi1oZWlnaHQ6aW5oZXJpdH0udG94IC50b3gtY29sbGVjdGlvbl9faXRlbS1jYXJldCBzdmd7ZmlsbDojMjIyZjNlfS50b3ggLnRveC1jb2xsZWN0aW9uX19pdGVtLS1zdGF0ZS1kaXNhYmxlZHtiYWNrZ3JvdW5kLWNvbG9yOnRyYW5zcGFyZW50O2NvbG9yOnJnYmEoMzQsNDcsNjIsLjUpO2N1cnNvcjpub3QtYWxsb3dlZH0udG94IC50b3gtY29sbGVjdGlvbl9faXRlbS0tc3RhdGUtZGlzYWJsZWQgLnRveC1jb2xsZWN0aW9uX19pdGVtLWNhcmV0IHN2Z3tmaWxsOnJnYmEoMzQsNDcsNjIsLjUpfS50b3ggLnRveC1jb2xsZWN0aW9uLS1saXN0IC50b3gtY29sbGVjdGlvbl9faXRlbTpub3QoLnRveC1jb2xsZWN0aW9uX19pdGVtLS1lbmFibGVkKSAudG94LWNvbGxlY3Rpb25fX2l0ZW0tY2hlY2ttYXJrIHN2Z3tkaXNwbGF5Om5vbmV9LnRveCAudG94LWNvbGxlY3Rpb24tLWxpc3QgLnRveC1jb2xsZWN0aW9uX19pdGVtOm5vdCgudG94LWNvbGxlY3Rpb25fX2l0ZW0tLWVuYWJsZWQpIC50b3gtY29sbGVjdGlvbl9faXRlbS1hY2Nlc3NvcnkrLnRveC1jb2xsZWN0aW9uX19pdGVtLWNoZWNrbWFya3tkaXNwbGF5Om5vbmV9LnRveCAudG94LWNvbGxlY3Rpb24tLWhvcml6b250YWx7YmFja2dyb3VuZC1jb2xvcjojZmZmO2JvcmRlcjoxcHggc29saWQgI2NjYztib3JkZXItcmFkaXVzOjNweDtib3gtc2hhZG93OjAgMXB4IDNweCByZ2JhKDAsMCwwLC4xNSk7ZGlzcGxheTpmbGV4O2ZsZXg6MCAwIGF1dG87ZmxleC1zaHJpbms6MDtmbGV4LXdyYXA6bm93cmFwO21hcmdpbi1ib3R0b206MDtvdmVyZmxvdy14OmF1dG87cGFkZGluZzowfS50b3ggLnRveC1jb2xsZWN0aW9uLS1ob3Jpem9udGFsIC50b3gtY29sbGVjdGlvbl9fZ3JvdXB7YWxpZ24taXRlbXM6Y2VudGVyO2Rpc3BsYXk6ZmxleDtmbGV4LXdyYXA6bm93cmFwO21hcmdpbjowO3BhZGRpbmc6MCA0cHh9LnRveCAudG94LWNvbGxlY3Rpb24tLWhvcml6b250YWwgLnRveC1jb2xsZWN0aW9uX19pdGVte2hlaWdodDozNHB4O21hcmdpbjoycHggMCAzcHggMDtwYWRkaW5nOjAgNHB4fS50b3ggLnRveC1jb2xsZWN0aW9uLS1ob3Jpem9udGFsIC50b3gtY29sbGVjdGlvbl9faXRlbS1sYWJlbHt3aGl0ZS1zcGFjZTpub3dyYXB9LnRveCAudG94LWNvbGxlY3Rpb24tLWhvcml6b250YWwgLnRveC1jb2xsZWN0aW9uX19pdGVtLWNhcmV0e21hcmdpbi1sZWZ0OjRweH0udG94IC50b3gtY29sbGVjdGlvbl9faXRlbS1jb250YWluZXJ7ZGlzcGxheTpmbGV4fS50b3ggLnRveC1jb2xsZWN0aW9uX19pdGVtLWNvbnRhaW5lci0tcm93e2FsaWduLWl0ZW1zOmNlbnRlcjtmbGV4OjEgMSBhdXRvO2ZsZXgtZGlyZWN0aW9uOnJvd30udG94IC50b3gtY29sbGVjdGlvbl9faXRlbS1jb250YWluZXItLXJvdy50b3gtY29sbGVjdGlvbl9faXRlbS1jb250YWluZXItLWFsaWduLWxlZnR7bWFyZ2luLXJpZ2h0OmF1dG99LnRveCAudG94LWNvbGxlY3Rpb25fX2l0ZW0tY29udGFpbmVyLS1yb3cudG94LWNvbGxlY3Rpb25fX2l0ZW0tY29udGFpbmVyLS1hbGlnbi1yaWdodHtqdXN0aWZ5LWNvbnRlbnQ6ZmxleC1lbmQ7bWFyZ2luLWxlZnQ6YXV0b30udG94IC50b3gtY29sbGVjdGlvbl9faXRlbS1jb250YWluZXItLXJvdy50b3gtY29sbGVjdGlvbl9faXRlbS1jb250YWluZXItLXZhbGlnbi10b3B7YWxpZ24taXRlbXM6ZmxleC1zdGFydDttYXJnaW4tYm90dG9tOmF1dG99LnRveCAudG94LWNvbGxlY3Rpb25fX2l0ZW0tY29udGFpbmVyLS1yb3cudG94LWNvbGxlY3Rpb25fX2l0ZW0tY29udGFpbmVyLS12YWxpZ24tbWlkZGxle2FsaWduLWl0ZW1zOmNlbnRlcn0udG94IC50b3gtY29sbGVjdGlvbl9faXRlbS1jb250YWluZXItLXJvdy50b3gtY29sbGVjdGlvbl9faXRlbS1jb250YWluZXItLXZhbGlnbi1ib3R0b217YWxpZ24taXRlbXM6ZmxleC1lbmQ7bWFyZ2luLXRvcDphdXRvfS50b3ggLnRveC1jb2xsZWN0aW9uX19pdGVtLWNvbnRhaW5lci0tY29sdW1uey1tcy1ncmlkLXJvdy1hbGlnbjpjZW50ZXI7YWxpZ24tc2VsZjpjZW50ZXI7ZmxleDoxIDEgYXV0bztmbGV4LWRpcmVjdGlvbjpjb2x1bW59LnRveCAudG94LWNvbGxlY3Rpb25fX2l0ZW0tY29udGFpbmVyLS1jb2x1bW4udG94LWNvbGxlY3Rpb25fX2l0ZW0tY29udGFpbmVyLS1hbGlnbi1sZWZ0e2FsaWduLWl0ZW1zOmZsZXgtc3RhcnR9LnRveCAudG94LWNvbGxlY3Rpb25fX2l0ZW0tY29udGFpbmVyLS1jb2x1bW4udG94LWNvbGxlY3Rpb25fX2l0ZW0tY29udGFpbmVyLS1hbGlnbi1yaWdodHthbGlnbi1pdGVtczpmbGV4LWVuZH0udG94IC50b3gtY29sbGVjdGlvbl9faXRlbS1jb250YWluZXItLWNvbHVtbi50b3gtY29sbGVjdGlvbl9faXRlbS1jb250YWluZXItLXZhbGlnbi10b3B7YWxpZ24tc2VsZjpmbGV4LXN0YXJ0fS50b3ggLnRveC1jb2xsZWN0aW9uX19pdGVtLWNvbnRhaW5lci0tY29sdW1uLnRveC1jb2xsZWN0aW9uX19pdGVtLWNvbnRhaW5lci0tdmFsaWduLW1pZGRsZXstbXMtZ3JpZC1yb3ctYWxpZ246Y2VudGVyO2FsaWduLXNlbGY6Y2VudGVyfS50b3ggLnRveC1jb2xsZWN0aW9uX19pdGVtLWNvbnRhaW5lci0tY29sdW1uLnRveC1jb2xsZWN0aW9uX19pdGVtLWNvbnRhaW5lci0tdmFsaWduLWJvdHRvbXthbGlnbi1zZWxmOmZsZXgtZW5kfS50b3g6bm90KFtkaXI9cnRsXSkgLnRveC1jb2xsZWN0aW9uLS1ob3Jpem9udGFsIC50b3gtY29sbGVjdGlvbl9fZ3JvdXA6bm90KDpsYXN0LW9mLXR5cGUpe2JvcmRlci1yaWdodDoxcHggc29saWQgI2NjY30udG94Om5vdChbZGlyPXJ0bF0pIC50b3gtY29sbGVjdGlvbi0tbGlzdCAudG94LWNvbGxlY3Rpb25fX2l0ZW0+Om5vdCg6Zmlyc3QtY2hpbGQpe21hcmdpbi1sZWZ0OjhweH0udG94Om5vdChbZGlyPXJ0bF0pIC50b3gtY29sbGVjdGlvbi0tbGlzdCAudG94LWNvbGxlY3Rpb25fX2l0ZW0+LnRveC1jb2xsZWN0aW9uX19pdGVtLWxhYmVsOmZpcnN0LWNoaWxke21hcmdpbi1sZWZ0OjRweH0udG94Om5vdChbZGlyPXJ0bF0pIC50b3gtY29sbGVjdGlvbl9faXRlbS1hY2Nlc3Nvcnl7bWFyZ2luLWxlZnQ6MTZweDt0ZXh0LWFsaWduOnJpZ2h0fS50b3g6bm90KFtkaXI9cnRsXSkgLnRveC1jb2xsZWN0aW9uIC50b3gtY29sbGVjdGlvbl9faXRlbS1jYXJldHttYXJnaW4tbGVmdDoxNnB4fS50b3hbZGlyPXJ0bF0gLnRveC1jb2xsZWN0aW9uLS1ob3Jpem9udGFsIC50b3gtY29sbGVjdGlvbl9fZ3JvdXA6bm90KDpsYXN0LW9mLXR5cGUpe2JvcmRlci1sZWZ0OjFweCBzb2xpZCAjY2NjfS50b3hbZGlyPXJ0bF0gLnRveC1jb2xsZWN0aW9uLS1saXN0IC50b3gtY29sbGVjdGlvbl9faXRlbT46bm90KDpmaXJzdC1jaGlsZCl7bWFyZ2luLXJpZ2h0OjhweH0udG94W2Rpcj1ydGxdIC50b3gtY29sbGVjdGlvbi0tbGlzdCAudG94LWNvbGxlY3Rpb25fX2l0ZW0+LnRveC1jb2xsZWN0aW9uX19pdGVtLWxhYmVsOmZpcnN0LWNoaWxke21hcmdpbi1yaWdodDo0cHh9LnRveFtkaXI9cnRsXSAudG94LWNvbGxlY3Rpb25fX2l0ZW0tYWNjZXNzb3J5e21hcmdpbi1yaWdodDoxNnB4O3RleHQtYWxpZ246bGVmdH0udG94W2Rpcj1ydGxdIC50b3gtY29sbGVjdGlvbiAudG94LWNvbGxlY3Rpb25fX2l0ZW0tY2FyZXR7bWFyZ2luLXJpZ2h0OjE2cHg7dHJhbnNmb3JtOnJvdGF0ZVkoMTgwZGVnKX0udG94W2Rpcj1ydGxdIC50b3gtY29sbGVjdGlvbi0taG9yaXpvbnRhbCAudG94LWNvbGxlY3Rpb25fX2l0ZW0tY2FyZXR7bWFyZ2luLXJpZ2h0OjRweH0udG94IC50b3gtY29sb3ItcGlja2VyLWNvbnRhaW5lcntkaXNwbGF5OmZsZXg7ZmxleC1kaXJlY3Rpb246cm93O2hlaWdodDoyMjVweDttYXJnaW46MH0udG94IC50b3gtc3YtcGFsZXR0ZXtib3gtc2l6aW5nOmJvcmRlci1ib3g7ZGlzcGxheTpmbGV4O2hlaWdodDoxMDAlfS50b3ggLnRveC1zdi1wYWxldHRlLXNwZWN0cnVte2hlaWdodDoxMDAlfS50b3ggLnRveC1zdi1wYWxldHRlLC50b3ggLnRveC1zdi1wYWxldHRlLXNwZWN0cnVte3dpZHRoOjIyNXB4fS50b3ggLnRveC1zdi1wYWxldHRlLXRodW1ie2JhY2tncm91bmQ6MCAwO2JvcmRlcjoxcHggc29saWQgIzAwMDtib3JkZXItcmFkaXVzOjUwJTtib3gtc2l6aW5nOmNvbnRlbnQtYm94O2hlaWdodDoxMnB4O3Bvc2l0aW9uOmFic29sdXRlO3dpZHRoOjEycHh9LnRveCAudG94LXN2LXBhbGV0dGUtaW5uZXItdGh1bWJ7Ym9yZGVyOjFweCBzb2xpZCAjZmZmO2JvcmRlci1yYWRpdXM6NTAlO2hlaWdodDoxMHB4O3Bvc2l0aW9uOmFic29sdXRlO3dpZHRoOjEwcHh9LnRveCAudG94LWh1ZS1zbGlkZXJ7Ym94LXNpemluZzpib3JkZXItYm94O2hlaWdodDoxMDAlO3dpZHRoOjI1cHh9LnRveCAudG94LWh1ZS1zbGlkZXItc3BlY3RydW17YmFja2dyb3VuZDpsaW5lYXItZ3JhZGllbnQodG8gYm90dG9tLHJlZCwjZmYwMDgwLCNmMGYsIzgwMDBmZiwjMDBmLCMwMDgwZmYsIzBmZiwjMDBmZjgwLCMwZjAsIzgwZmYwMCwjZmYwLCNmZjgwMDAscmVkKTtoZWlnaHQ6MTAwJTt3aWR0aDoxMDAlfS50b3ggLnRveC1odWUtc2xpZGVyLC50b3ggLnRveC1odWUtc2xpZGVyLXNwZWN0cnVte3dpZHRoOjIwcHh9LnRveCAudG94LWh1ZS1zbGlkZXItdGh1bWJ7YmFja2dyb3VuZDojZmZmO2JvcmRlcjoxcHggc29saWQgIzAwMDtib3gtc2l6aW5nOmNvbnRlbnQtYm94O2hlaWdodDo0cHg7d2lkdGg6MTAwJX0udG94IC50b3gtcmdiLWZvcm17ZGlzcGxheTpmbGV4O2ZsZXgtZGlyZWN0aW9uOmNvbHVtbjtqdXN0aWZ5LWNvbnRlbnQ6c3BhY2UtYmV0d2Vlbn0udG94IC50b3gtcmdiLWZvcm0gZGl2e2FsaWduLWl0ZW1zOmNlbnRlcjtkaXNwbGF5OmZsZXg7anVzdGlmeS1jb250ZW50OnNwYWNlLWJldHdlZW47bWFyZ2luLWJvdHRvbTo1cHg7d2lkdGg6aW5oZXJpdH0udG94IC50b3gtcmdiLWZvcm0gaW5wdXR7d2lkdGg6NmVtfS50b3ggLnRveC1yZ2ItZm9ybSBpbnB1dC50b3gtaW52YWxpZHtib3JkZXI6MXB4IHNvbGlkIHJlZCFpbXBvcnRhbnR9LnRveCAudG94LXJnYi1mb3JtIC50b3gtcmdiYS1wcmV2aWV3e2JvcmRlcjoxcHggc29saWQgIzAwMDtmbGV4LWdyb3c6MjttYXJnaW4tYm90dG9tOjB9LnRveDpub3QoW2Rpcj1ydGxdKSAudG94LXN2LXBhbGV0dGV7bWFyZ2luLXJpZ2h0OjE1cHh9LnRveDpub3QoW2Rpcj1ydGxdKSAudG94LWh1ZS1zbGlkZXJ7bWFyZ2luLXJpZ2h0OjE1cHh9LnRveDpub3QoW2Rpcj1ydGxdKSAudG94LWh1ZS1zbGlkZXItdGh1bWJ7bWFyZ2luLWxlZnQ6LTFweH0udG94Om5vdChbZGlyPXJ0bF0pIC50b3gtcmdiLWZvcm0gbGFiZWx7bWFyZ2luLXJpZ2h0Oi41ZW19LnRveFtkaXI9cnRsXSAudG94LXN2LXBhbGV0dGV7bWFyZ2luLWxlZnQ6MTVweH0udG94W2Rpcj1ydGxdIC50b3gtaHVlLXNsaWRlcnttYXJnaW4tbGVmdDoxNXB4fS50b3hbZGlyPXJ0bF0gLnRveC1odWUtc2xpZGVyLXRodW1ie21hcmdpbi1yaWdodDotMXB4fS50b3hbZGlyPXJ0bF0gLnRveC1yZ2ItZm9ybSBsYWJlbHttYXJnaW4tbGVmdDouNWVtfS50b3ggLnRveC10b29sYmFyIC50b3gtc3dhdGNoZXMsLnRveCAudG94LXRvb2xiYXJfX292ZXJmbG93IC50b3gtc3dhdGNoZXMsLnRveCAudG94LXRvb2xiYXJfX3ByaW1hcnkgLnRveC1zd2F0Y2hlc3ttYXJnaW46MnB4IDAgM3B4IDRweH0udG94IC50b3gtY29sbGVjdGlvbi0tbGlzdCAudG94LWNvbGxlY3Rpb25fX2dyb3VwIC50b3gtc3dhdGNoZXMtbWVudXtib3JkZXI6MDttYXJnaW46LTRweCAwfS50b3ggLnRveC1zd2F0Y2hlc19fcm93e2Rpc3BsYXk6ZmxleH0udG94IC50b3gtc3dhdGNoe2hlaWdodDozMHB4O3RyYW5zaXRpb246dHJhbnNmb3JtIC4xNXMsYm94LXNoYWRvdyAuMTVzO3dpZHRoOjMwcHh9LnRveCAudG94LXN3YXRjaDpmb2N1cywudG94IC50b3gtc3dhdGNoOmhvdmVye2JveC1zaGFkb3c6MCAwIDAgMXB4IHJnYmEoMTI3LDEyNywxMjcsLjMpIGluc2V0O3RyYW5zZm9ybTpzY2FsZSguOCl9LnRveCAudG94LXN3YXRjaC0tcmVtb3Zle2FsaWduLWl0ZW1zOmNlbnRlcjtkaXNwbGF5OmZsZXg7anVzdGlmeS1jb250ZW50OmNlbnRlcn0udG94IC50b3gtc3dhdGNoLS1yZW1vdmUgc3ZnIHBhdGh7c3Ryb2tlOiNlNzRjM2N9LnRveCAudG94LXN3YXRjaGVzX19waWNrZXItYnRue2FsaWduLWl0ZW1zOmNlbnRlcjtiYWNrZ3JvdW5kLWNvbG9yOnRyYW5zcGFyZW50O2JvcmRlcjowO2N1cnNvcjpwb2ludGVyO2Rpc3BsYXk6ZmxleDtoZWlnaHQ6MzBweDtqdXN0aWZ5LWNvbnRlbnQ6Y2VudGVyO291dGxpbmU6MDtwYWRkaW5nOjA7d2lkdGg6MzBweH0udG94IC50b3gtc3dhdGNoZXNfX3BpY2tlci1idG4gc3Zne2hlaWdodDoyNHB4O3dpZHRoOjI0cHh9LnRveCAudG94LXN3YXRjaGVzX19waWNrZXItYnRuOmhvdmVye2JhY2tncm91bmQ6I2RlZTBlMn0udG94Om5vdChbZGlyPXJ0bF0pIC50b3gtc3dhdGNoZXNfX3BpY2tlci1idG57bWFyZ2luLWxlZnQ6YXV0b30udG94W2Rpcj1ydGxdIC50b3gtc3dhdGNoZXNfX3BpY2tlci1idG57bWFyZ2luLXJpZ2h0OmF1dG99LnRveCAudG94LWNvbW1lbnQtdGhyZWFke2JhY2tncm91bmQ6I2ZmZjtwb3NpdGlvbjpyZWxhdGl2ZX0udG94IC50b3gtY29tbWVudC10aHJlYWQ+Om5vdCg6Zmlyc3QtY2hpbGQpe21hcmdpbi10b3A6OHB4fS50b3ggLnRveC1jb21tZW50e2JhY2tncm91bmQ6I2ZmZjtib3JkZXI6MXB4IHNvbGlkICNjY2M7Ym9yZGVyLXJhZGl1czozcHg7Ym94LXNoYWRvdzowIDRweCA4cHggMCByZ2JhKDM0LDQ3LDYyLC4xKTtwYWRkaW5nOjhweCA4cHggMTZweCA4cHg7cG9zaXRpb246cmVsYXRpdmV9LnRveCAudG94LWNvbW1lbnRfX2hlYWRlcnthbGlnbi1pdGVtczpjZW50ZXI7Y29sb3I6IzIyMmYzZTtkaXNwbGF5OmZsZXg7anVzdGlmeS1jb250ZW50OnNwYWNlLWJldHdlZW59LnRveCAudG94LWNvbW1lbnRfX2RhdGV7Y29sb3I6cmdiYSgzNCw0Nyw2MiwuNyk7Zm9udC1zaXplOjEycHh9LnRveCAudG94LWNvbW1lbnRfX2JvZHl7Y29sb3I6IzIyMmYzZTtmb250LXNpemU6MTRweDtmb250LXN0eWxlOm5vcm1hbDtmb250LXdlaWdodDo0MDA7bGluZS1oZWlnaHQ6MS4zO21hcmdpbi10b3A6OHB4O3Bvc2l0aW9uOnJlbGF0aXZlO3RleHQtdHJhbnNmb3JtOmluaXRpYWx9LnRveCAudG94LWNvbW1lbnRfX2JvZHkgdGV4dGFyZWF7cmVzaXplOm5vbmU7d2hpdGUtc3BhY2U6bm9ybWFsO3dpZHRoOjEwMCV9LnRveCAudG94LWNvbW1lbnRfX2V4cGFuZGVye3BhZGRpbmctdG9wOjhweH0udG94IC50b3gtY29tbWVudF9fZXhwYW5kZXIgcHtjb2xvcjpyZ2JhKDM0LDQ3LDYyLC43KTtmb250LXNpemU6MTRweDtmb250LXN0eWxlOm5vcm1hbH0udG94IC50b3gtY29tbWVudF9fYm9keSBwe21hcmdpbjowfS50b3ggLnRveC1jb21tZW50X19idXR0b25zcGFjaW5ne3BhZGRpbmctdG9wOjE2cHg7dGV4dC1hbGlnbjpjZW50ZXJ9LnRveCAudG94LWNvbW1lbnQtdGhyZWFkX19vdmVybGF5OjphZnRlcntiYWNrZ3JvdW5kOiNmZmY7Ym90dG9tOjA7Y29udGVudDpcIlwiO2Rpc3BsYXk6ZmxleDtsZWZ0OjA7b3BhY2l0eTouOTtwb3NpdGlvbjphYnNvbHV0ZTtyaWdodDowO3RvcDowO3otaW5kZXg6NX0udG94IC50b3gtY29tbWVudF9fcmVwbHl7ZGlzcGxheTpmbGV4O2ZsZXgtc2hyaW5rOjA7ZmxleC13cmFwOndyYXA7anVzdGlmeS1jb250ZW50OmZsZXgtZW5kO21hcmdpbi10b3A6OHB4fS50b3ggLnRveC1jb21tZW50X19yZXBseT46Zmlyc3QtY2hpbGR7bWFyZ2luLWJvdHRvbTo4cHg7d2lkdGg6MTAwJX0udG94IC50b3gtY29tbWVudF9fZWRpdHtkaXNwbGF5OmZsZXg7ZmxleC13cmFwOndyYXA7anVzdGlmeS1jb250ZW50OmZsZXgtZW5kO21hcmdpbi10b3A6MTZweH0udG94IC50b3gtY29tbWVudF9fZ3JhZGllbnQ6OmFmdGVye2JhY2tncm91bmQ6bGluZWFyLWdyYWRpZW50KHJnYmEoMjU1LDI1NSwyNTUsMCksI2ZmZik7Ym90dG9tOjA7Y29udGVudDpcIlwiO2Rpc3BsYXk6YmxvY2s7aGVpZ2h0OjVlbTttYXJnaW4tdG9wOi00MHB4O3Bvc2l0aW9uOmFic29sdXRlO3dpZHRoOjEwMCV9LnRveCAudG94LWNvbW1lbnRfX292ZXJsYXl7YmFja2dyb3VuZDojZmZmO2JvdHRvbTowO2Rpc3BsYXk6ZmxleDtmbGV4LWRpcmVjdGlvbjpjb2x1bW47ZmxleC1ncm93OjE7bGVmdDowO29wYWNpdHk6Ljk7cG9zaXRpb246YWJzb2x1dGU7cmlnaHQ6MDt0ZXh0LWFsaWduOmNlbnRlcjt0b3A6MDt6LWluZGV4OjV9LnRveCAudG94LWNvbW1lbnRfX2xvYWRpbmctdGV4dHthbGlnbi1pdGVtczpjZW50ZXI7Y29sb3I6IzIyMmYzZTtkaXNwbGF5OmZsZXg7ZmxleC1kaXJlY3Rpb246Y29sdW1uO3Bvc2l0aW9uOnJlbGF0aXZlfS50b3ggLnRveC1jb21tZW50X19sb2FkaW5nLXRleHQ+ZGl2e3BhZGRpbmctYm90dG9tOjE2cHh9LnRveCAudG94LWNvbW1lbnRfX292ZXJsYXl0ZXh0e2JvdHRvbTowO2ZsZXgtZGlyZWN0aW9uOmNvbHVtbjtmb250LXNpemU6MTRweDtsZWZ0OjA7cGFkZGluZzoxZW07cG9zaXRpb246YWJzb2x1dGU7cmlnaHQ6MDt0b3A6MDt6LWluZGV4OjEwfS50b3ggLnRveC1jb21tZW50X19vdmVybGF5dGV4dCBwe2JhY2tncm91bmQtY29sb3I6I2ZmZjtib3gtc2hhZG93OjAgMCA4cHggOHB4ICNmZmY7Y29sb3I6IzIyMmYzZTt0ZXh0LWFsaWduOmNlbnRlcn0udG94IC50b3gtY29tbWVudF9fb3ZlcmxheXRleHQgZGl2Om50aC1vZi10eXBlKDIpe2ZvbnQtc2l6ZTouOGVtfS50b3ggLnRveC1jb21tZW50X19idXN5LXNwaW5uZXJ7YWxpZ24taXRlbXM6Y2VudGVyO2JhY2tncm91bmQtY29sb3I6I2ZmZjtib3R0b206MDtkaXNwbGF5OmZsZXg7anVzdGlmeS1jb250ZW50OmNlbnRlcjtsZWZ0OjA7cG9zaXRpb246YWJzb2x1dGU7cmlnaHQ6MDt0b3A6MDt6LWluZGV4OjIwfS50b3ggLnRveC1jb21tZW50X19zY3JvbGx7ZGlzcGxheTpmbGV4O2ZsZXgtZGlyZWN0aW9uOmNvbHVtbjtmbGV4LXNocmluazoxO292ZXJmbG93OmF1dG99LnRveCAudG94LWNvbnZlcnNhdGlvbnN7bWFyZ2luOjhweH0udG94Om5vdChbZGlyPXJ0bF0pIC50b3gtY29tbWVudF9fZWRpdHttYXJnaW4tbGVmdDo4cHh9LnRveDpub3QoW2Rpcj1ydGxdKSAudG94LWNvbW1lbnRfX2J1dHRvbnNwYWNpbmc+Omxhc3QtY2hpbGQsLnRveDpub3QoW2Rpcj1ydGxdKSAudG94LWNvbW1lbnRfX2VkaXQ+Omxhc3QtY2hpbGQsLnRveDpub3QoW2Rpcj1ydGxdKSAudG94LWNvbW1lbnRfX3JlcGx5PjpsYXN0LWNoaWxke21hcmdpbi1sZWZ0OjhweH0udG94W2Rpcj1ydGxdIC50b3gtY29tbWVudF9fZWRpdHttYXJnaW4tcmlnaHQ6OHB4fS50b3hbZGlyPXJ0bF0gLnRveC1jb21tZW50X19idXR0b25zcGFjaW5nPjpsYXN0LWNoaWxkLC50b3hbZGlyPXJ0bF0gLnRveC1jb21tZW50X19lZGl0PjpsYXN0LWNoaWxkLC50b3hbZGlyPXJ0bF0gLnRveC1jb21tZW50X19yZXBseT46bGFzdC1jaGlsZHttYXJnaW4tcmlnaHQ6OHB4fS50b3ggLnRveC11c2Vye2FsaWduLWl0ZW1zOmNlbnRlcjtkaXNwbGF5OmZsZXh9LnRveCAudG94LXVzZXJfX2F2YXRhciBzdmd7ZmlsbDpyZ2JhKDM0LDQ3LDYyLC43KX0udG94IC50b3gtdXNlcl9fbmFtZXtjb2xvcjpyZ2JhKDM0LDQ3LDYyLC43KTtmb250LXNpemU6MTJweDtmb250LXN0eWxlOm5vcm1hbDtmb250LXdlaWdodDo3MDA7dGV4dC10cmFuc2Zvcm06dXBwZXJjYXNlfS50b3g6bm90KFtkaXI9cnRsXSkgLnRveC11c2VyX19hdmF0YXIgc3Zne21hcmdpbi1yaWdodDo4cHh9LnRveDpub3QoW2Rpcj1ydGxdKSAudG94LXVzZXJfX2F2YXRhcisudG94LXVzZXJfX25hbWV7bWFyZ2luLWxlZnQ6OHB4fS50b3hbZGlyPXJ0bF0gLnRveC11c2VyX19hdmF0YXIgc3Zne21hcmdpbi1sZWZ0OjhweH0udG94W2Rpcj1ydGxdIC50b3gtdXNlcl9fYXZhdGFyKy50b3gtdXNlcl9fbmFtZXttYXJnaW4tcmlnaHQ6OHB4fS50b3ggLnRveC1kaWFsb2ctd3JhcHthbGlnbi1pdGVtczpjZW50ZXI7Ym90dG9tOjA7ZGlzcGxheTpmbGV4O2p1c3RpZnktY29udGVudDpjZW50ZXI7bGVmdDowO3Bvc2l0aW9uOmZpeGVkO3JpZ2h0OjA7dG9wOjA7ei1pbmRleDoxMTAwfS50b3ggLnRveC1kaWFsb2ctd3JhcF9fYmFja2Ryb3B7YmFja2dyb3VuZC1jb2xvcjpyZ2JhKDI1NSwyNTUsMjU1LC43NSk7Ym90dG9tOjA7bGVmdDowO3Bvc2l0aW9uOmFic29sdXRlO3JpZ2h0OjA7dG9wOjA7ei1pbmRleDoxfS50b3ggLnRveC1kaWFsb2ctd3JhcF9fYmFja2Ryb3AtLW9wYXF1ZXtiYWNrZ3JvdW5kLWNvbG9yOiNmZmZ9LnRveCAudG94LWRpYWxvZ3tiYWNrZ3JvdW5kLWNvbG9yOiNmZmY7Ym9yZGVyLWNvbG9yOiNjY2M7Ym9yZGVyLXJhZGl1czozcHg7Ym9yZGVyLXN0eWxlOnNvbGlkO2JvcmRlci13aWR0aDoxcHg7Ym94LXNoYWRvdzowIDE2cHggMTZweCAtMTBweCByZ2JhKDM0LDQ3LDYyLC4xNSksMCAwIDQwcHggMXB4IHJnYmEoMzQsNDcsNjIsLjE1KTtkaXNwbGF5OmZsZXg7ZmxleC1kaXJlY3Rpb246Y29sdW1uO21heC1oZWlnaHQ6MTAwJTttYXgtd2lkdGg6NDgwcHg7b3ZlcmZsb3c6aGlkZGVuO3Bvc2l0aW9uOnJlbGF0aXZlO3dpZHRoOjk1dnc7ei1pbmRleDoyfUBtZWRpYSBvbmx5IHNjcmVlbiBhbmQgKG1heC13aWR0aDo3NjdweCl7Ym9keTpub3QoLnRveC1mb3JjZS1kZXNrdG9wKSAudG94IC50b3gtZGlhbG9ne2FsaWduLXNlbGY6ZmxleC1zdGFydDttYXJnaW46OHB4IGF1dG87d2lkdGg6Y2FsYygxMDB2dyAtIDE2cHgpfX0udG94IC50b3gtZGlhbG9nLWlubGluZXt6LWluZGV4OjExMDB9LnRveCAudG94LWRpYWxvZ19faGVhZGVye2FsaWduLWl0ZW1zOmNlbnRlcjtiYWNrZ3JvdW5kLWNvbG9yOiNmZmY7Ym9yZGVyLWJvdHRvbTpub25lO2NvbG9yOiMyMjJmM2U7ZGlzcGxheTpmbGV4O2ZvbnQtc2l6ZToxNnB4O2p1c3RpZnktY29udGVudDpzcGFjZS1iZXR3ZWVuO3BhZGRpbmc6OHB4IDE2cHggMCAxNnB4O3Bvc2l0aW9uOnJlbGF0aXZlfS50b3ggLnRveC1kaWFsb2dfX2hlYWRlciAudG94LWJ1dHRvbnt6LWluZGV4OjF9LnRveCAudG94LWRpYWxvZ19fZHJhZ2hhbmRsZXtjdXJzb3I6Z3JhYjtoZWlnaHQ6MTAwJTtsZWZ0OjA7cG9zaXRpb246YWJzb2x1dGU7dG9wOjA7d2lkdGg6MTAwJX0udG94IC50b3gtZGlhbG9nX19kcmFnaGFuZGxlOmFjdGl2ZXtjdXJzb3I6Z3JhYmJpbmd9LnRveCAudG94LWRpYWxvZ19fZGlzbWlzc3ttYXJnaW4tbGVmdDphdXRvfS50b3ggLnRveC1kaWFsb2dfX3RpdGxle2ZvbnQtZmFtaWx5Oi1hcHBsZS1zeXN0ZW0sQmxpbmtNYWNTeXN0ZW1Gb250LFwiU2Vnb2UgVUlcIixSb2JvdG8sT3h5Z2VuLVNhbnMsVWJ1bnR1LENhbnRhcmVsbCxcIkhlbHZldGljYSBOZXVlXCIsc2Fucy1zZXJpZjtmb250LXNpemU6MjBweDtmb250LXN0eWxlOm5vcm1hbDtmb250LXdlaWdodDo0MDA7bGluZS1oZWlnaHQ6MS4zO21hcmdpbjowO3RleHQtdHJhbnNmb3JtOm5vbmV9LnRveCAudG94LWRpYWxvZ19fYm9keXtjb2xvcjojMjIyZjNlO2Rpc3BsYXk6ZmxleDtmbGV4OjE7LW1zLWZsZXgtcHJlZmVycmVkLXNpemU6YXV0bztmb250LXNpemU6MTZweDtmb250LXN0eWxlOm5vcm1hbDtmb250LXdlaWdodDo0MDA7bGluZS1oZWlnaHQ6MS4zO21pbi13aWR0aDowO3RleHQtYWxpZ246bGVmdDt0ZXh0LXRyYW5zZm9ybTpub25lfUBtZWRpYSBvbmx5IHNjcmVlbiBhbmQgKG1heC13aWR0aDo3NjdweCl7Ym9keTpub3QoLnRveC1mb3JjZS1kZXNrdG9wKSAudG94IC50b3gtZGlhbG9nX19ib2R5e2ZsZXgtZGlyZWN0aW9uOmNvbHVtbn19LnRveCAudG94LWRpYWxvZ19fYm9keS1uYXZ7YWxpZ24taXRlbXM6ZmxleC1zdGFydDtkaXNwbGF5OmZsZXg7ZmxleC1kaXJlY3Rpb246Y29sdW1uO3BhZGRpbmc6MTZweCAxNnB4fUBtZWRpYSBvbmx5IHNjcmVlbiBhbmQgKG1heC13aWR0aDo3NjdweCl7Ym9keTpub3QoLnRveC1mb3JjZS1kZXNrdG9wKSAudG94IC50b3gtZGlhbG9nX19ib2R5LW5hdntmbGV4LWRpcmVjdGlvbjpyb3c7LXdlYmtpdC1vdmVyZmxvdy1zY3JvbGxpbmc6dG91Y2g7b3ZlcmZsb3cteDphdXRvO3BhZGRpbmctYm90dG9tOjB9fS50b3ggLnRveC1kaWFsb2dfX2JvZHktbmF2LWl0ZW17Ym9yZGVyLWJvdHRvbToycHggc29saWQgdHJhbnNwYXJlbnQ7Y29sb3I6cmdiYSgzNCw0Nyw2MiwuNyk7ZGlzcGxheTppbmxpbmUtYmxvY2s7Zm9udC1zaXplOjE0cHg7bGluZS1oZWlnaHQ6MS4zO21hcmdpbi1ib3R0b206OHB4O3RleHQtZGVjb3JhdGlvbjpub25lO3doaXRlLXNwYWNlOm5vd3JhcH0udG94IC50b3gtZGlhbG9nX19ib2R5LW5hdi1pdGVtOmZvY3Vze2JhY2tncm91bmQtY29sb3I6cmdiYSgzMiwxMjIsMTgzLC4xKX0udG94IC50b3gtZGlhbG9nX19ib2R5LW5hdi1pdGVtLS1hY3RpdmV7Ym9yZGVyLWJvdHRvbToycHggc29saWQgIzIwN2FiNztjb2xvcjojMjA3YWI3fS50b3ggLnRveC1kaWFsb2dfX2JvZHktY29udGVudHtib3gtc2l6aW5nOmJvcmRlci1ib3g7ZGlzcGxheTpmbGV4O2ZsZXg6MTtmbGV4LWRpcmVjdGlvbjpjb2x1bW47LW1zLWZsZXgtcHJlZmVycmVkLXNpemU6YXV0bzttYXgtaGVpZ2h0OjY1MHB4O292ZXJmbG93OmF1dG87LXdlYmtpdC1vdmVyZmxvdy1zY3JvbGxpbmc6dG91Y2g7cGFkZGluZzoxNnB4IDE2cHh9LnRveCAudG94LWRpYWxvZ19fYm9keS1jb250ZW50Pip7bWFyZ2luLWJvdHRvbTowO21hcmdpbi10b3A6MTZweH0udG94IC50b3gtZGlhbG9nX19ib2R5LWNvbnRlbnQ+OmZpcnN0LWNoaWxke21hcmdpbi10b3A6MH0udG94IC50b3gtZGlhbG9nX19ib2R5LWNvbnRlbnQ+Omxhc3QtY2hpbGR7bWFyZ2luLWJvdHRvbTowfS50b3ggLnRveC1kaWFsb2dfX2JvZHktY29udGVudD46b25seS1jaGlsZHttYXJnaW4tYm90dG9tOjA7bWFyZ2luLXRvcDowfS50b3ggLnRveC1kaWFsb2dfX2JvZHktY29udGVudCBhe2NvbG9yOiMyMDdhYjc7Y3Vyc29yOnBvaW50ZXI7dGV4dC1kZWNvcmF0aW9uOm5vbmV9LnRveCAudG94LWRpYWxvZ19fYm9keS1jb250ZW50IGE6Zm9jdXMsLnRveCAudG94LWRpYWxvZ19fYm9keS1jb250ZW50IGE6aG92ZXJ7Y29sb3I6IzE4NWQ4Yzt0ZXh0LWRlY29yYXRpb246bm9uZX0udG94IC50b3gtZGlhbG9nX19ib2R5LWNvbnRlbnQgYTphY3RpdmV7Y29sb3I6IzE4NWQ4Yzt0ZXh0LWRlY29yYXRpb246bm9uZX0udG94IC50b3gtZGlhbG9nX19ib2R5LWNvbnRlbnQgc3Zne2ZpbGw6IzIyMmYzZX0udG94IC50b3gtZGlhbG9nX19ib2R5LWNvbnRlbnQgdWx7ZGlzcGxheTpibG9jaztsaXN0LXN0eWxlLXR5cGU6ZGlzYzttYXJnaW4tYm90dG9tOjE2cHg7LXdlYmtpdC1tYXJnaW4tZW5kOjA7bWFyZ2luLWlubGluZS1lbmQ6MDstd2Via2l0LW1hcmdpbi1zdGFydDowO21hcmdpbi1pbmxpbmUtc3RhcnQ6MDstd2Via2l0LXBhZGRpbmctc3RhcnQ6Mi41cmVtO3BhZGRpbmctaW5saW5lLXN0YXJ0OjIuNXJlbX0udG94IC50b3gtZGlhbG9nX19ib2R5LWNvbnRlbnQgLnRveC1mb3JtX19ncm91cCBoMXtjb2xvcjojMjIyZjNlO2ZvbnQtc2l6ZToyMHB4O2ZvbnQtc3R5bGU6bm9ybWFsO2ZvbnQtd2VpZ2h0OjcwMDtsZXR0ZXItc3BhY2luZzpub3JtYWw7bWFyZ2luLWJvdHRvbToxNnB4O21hcmdpbi10b3A6MnJlbTt0ZXh0LXRyYW5zZm9ybTpub25lfS50b3ggLnRveC1kaWFsb2dfX2JvZHktY29udGVudCAudG94LWZvcm1fX2dyb3VwIGgye2NvbG9yOiMyMjJmM2U7Zm9udC1zaXplOjE2cHg7Zm9udC1zdHlsZTpub3JtYWw7Zm9udC13ZWlnaHQ6NzAwO2xldHRlci1zcGFjaW5nOm5vcm1hbDttYXJnaW4tYm90dG9tOjE2cHg7bWFyZ2luLXRvcDoycmVtO3RleHQtdHJhbnNmb3JtOm5vbmV9LnRveCAudG94LWRpYWxvZ19fYm9keS1jb250ZW50IC50b3gtZm9ybV9fZ3JvdXAgcHttYXJnaW4tYm90dG9tOjE2cHh9LnRveCAudG94LWRpYWxvZ19fYm9keS1jb250ZW50IC50b3gtZm9ybV9fZ3JvdXAgaDE6Zmlyc3QtY2hpbGQsLnRveCAudG94LWRpYWxvZ19fYm9keS1jb250ZW50IC50b3gtZm9ybV9fZ3JvdXAgaDI6Zmlyc3QtY2hpbGQsLnRveCAudG94LWRpYWxvZ19fYm9keS1jb250ZW50IC50b3gtZm9ybV9fZ3JvdXAgcDpmaXJzdC1jaGlsZHttYXJnaW4tdG9wOjB9LnRveCAudG94LWRpYWxvZ19fYm9keS1jb250ZW50IC50b3gtZm9ybV9fZ3JvdXAgaDE6bGFzdC1jaGlsZCwudG94IC50b3gtZGlhbG9nX19ib2R5LWNvbnRlbnQgLnRveC1mb3JtX19ncm91cCBoMjpsYXN0LWNoaWxkLC50b3ggLnRveC1kaWFsb2dfX2JvZHktY29udGVudCAudG94LWZvcm1fX2dyb3VwIHA6bGFzdC1jaGlsZHttYXJnaW4tYm90dG9tOjB9LnRveCAudG94LWRpYWxvZ19fYm9keS1jb250ZW50IC50b3gtZm9ybV9fZ3JvdXAgaDE6b25seS1jaGlsZCwudG94IC50b3gtZGlhbG9nX19ib2R5LWNvbnRlbnQgLnRveC1mb3JtX19ncm91cCBoMjpvbmx5LWNoaWxkLC50b3ggLnRveC1kaWFsb2dfX2JvZHktY29udGVudCAudG94LWZvcm1fX2dyb3VwIHA6b25seS1jaGlsZHttYXJnaW4tYm90dG9tOjA7bWFyZ2luLXRvcDowfS50b3ggLnRveC1kaWFsb2ctLXdpZHRoLWxne2hlaWdodDo2NTBweDttYXgtd2lkdGg6MTIwMHB4fS50b3ggLnRveC1kaWFsb2ctLXdpZHRoLW1ke21heC13aWR0aDo4MDBweH0udG94IC50b3gtZGlhbG9nLS13aWR0aC1tZCAudG94LWRpYWxvZ19fYm9keS1jb250ZW50e292ZXJmbG93OmF1dG99LnRveCAudG94LWRpYWxvZ19fYm9keS1jb250ZW50LS1jZW50ZXJlZHt0ZXh0LWFsaWduOmNlbnRlcn0udG94IC50b3gtZGlhbG9nX19mb290ZXJ7YWxpZ24taXRlbXM6Y2VudGVyO2JhY2tncm91bmQtY29sb3I6I2ZmZjtib3JkZXItdG9wOjFweCBzb2xpZCAjY2NjO2Rpc3BsYXk6ZmxleDtqdXN0aWZ5LWNvbnRlbnQ6c3BhY2UtYmV0d2VlbjtwYWRkaW5nOjhweCAxNnB4fS50b3ggLnRveC1kaWFsb2dfX2Zvb3Rlci1lbmQsLnRveCAudG94LWRpYWxvZ19fZm9vdGVyLXN0YXJ0e2Rpc3BsYXk6ZmxleH0udG94IC50b3gtZGlhbG9nX19idXN5LXNwaW5uZXJ7YWxpZ24taXRlbXM6Y2VudGVyO2JhY2tncm91bmQtY29sb3I6cmdiYSgyNTUsMjU1LDI1NSwuNzUpO2JvdHRvbTowO2Rpc3BsYXk6ZmxleDtqdXN0aWZ5LWNvbnRlbnQ6Y2VudGVyO2xlZnQ6MDtwb3NpdGlvbjphYnNvbHV0ZTtyaWdodDowO3RvcDowO3otaW5kZXg6M30udG94IC50b3gtZGlhbG9nX190YWJsZXtib3JkZXItY29sbGFwc2U6Y29sbGFwc2U7d2lkdGg6MTAwJX0udG94IC50b3gtZGlhbG9nX190YWJsZSB0aGVhZCB0aHtmb250LXdlaWdodDo3MDA7cGFkZGluZy1ib3R0b206OHB4fS50b3ggLnRveC1kaWFsb2dfX3RhYmxlIHRib2R5IHRye2JvcmRlci1ib3R0b206MXB4IHNvbGlkICNjY2N9LnRveCAudG94LWRpYWxvZ19fdGFibGUgdGJvZHkgdHI6bGFzdC1jaGlsZHtib3JkZXItYm90dG9tOm5vbmV9LnRveCAudG94LWRpYWxvZ19fdGFibGUgdGR7cGFkZGluZy1ib3R0b206OHB4O3BhZGRpbmctdG9wOjhweH0udG94IC50b3gtZGlhbG9nX19wb3B1cHN7cG9zaXRpb246YWJzb2x1dGU7d2lkdGg6MTAwJTt6LWluZGV4OjExMDB9LnRveCAudG94LWRpYWxvZ19fYm9keS1pZnJhbWV7ZGlzcGxheTpmbGV4O2ZsZXg6MTtmbGV4LWRpcmVjdGlvbjpjb2x1bW47LW1zLWZsZXgtcHJlZmVycmVkLXNpemU6YXV0b30udG94IC50b3gtZGlhbG9nX19ib2R5LWlmcmFtZSAudG94LW5hdm9iantkaXNwbGF5OmZsZXg7ZmxleDoxOy1tcy1mbGV4LXByZWZlcnJlZC1zaXplOmF1dG99LnRveCAudG94LWRpYWxvZ19fYm9keS1pZnJhbWUgLnRveC1uYXZvYmogOm50aC1jaGlsZCgyKXtmbGV4OjE7LW1zLWZsZXgtcHJlZmVycmVkLXNpemU6YXV0bztoZWlnaHQ6MTAwJX0udG94IC50b3gtZGlhbG9nLWRvY2stZmFkZW91dHtvcGFjaXR5OjA7dmlzaWJpbGl0eTpoaWRkZW59LnRveCAudG94LWRpYWxvZy1kb2NrLWZhZGVpbntvcGFjaXR5OjE7dmlzaWJpbGl0eTp2aXNpYmxlfS50b3ggLnRveC1kaWFsb2ctZG9jay10cmFuc2l0aW9ue3RyYW5zaXRpb246dmlzaWJpbGl0eSAwcyBsaW5lYXIgLjNzLG9wYWNpdHkgLjNzIGVhc2V9LnRveCAudG94LWRpYWxvZy1kb2NrLXRyYW5zaXRpb24udG94LWRpYWxvZy1kb2NrLWZhZGVpbnt0cmFuc2l0aW9uLWRlbGF5OjBzfS50b3gudG94LXBsYXRmb3JtLWllIC50b3gtZGlhbG9nLXdyYXB7cG9zaXRpb246LW1zLWRldmljZS1maXhlZH1AbWVkaWEgb25seSBzY3JlZW4gYW5kIChtYXgtd2lkdGg6NzY3cHgpe2JvZHk6bm90KC50b3gtZm9yY2UtZGVza3RvcCkgLnRveDpub3QoW2Rpcj1ydGxdKSAudG94LWRpYWxvZ19fYm9keS1uYXZ7bWFyZ2luLXJpZ2h0OjB9fUBtZWRpYSBvbmx5IHNjcmVlbiBhbmQgKG1heC13aWR0aDo3NjdweCl7Ym9keTpub3QoLnRveC1mb3JjZS1kZXNrdG9wKSAudG94Om5vdChbZGlyPXJ0bF0pIC50b3gtZGlhbG9nX19ib2R5LW5hdi1pdGVtOm5vdCg6Zmlyc3QtY2hpbGQpe21hcmdpbi1sZWZ0OjhweH19LnRveDpub3QoW2Rpcj1ydGxdKSAudG94LWRpYWxvZ19fZm9vdGVyIC50b3gtZGlhbG9nX19mb290ZXItZW5kPiosLnRveDpub3QoW2Rpcj1ydGxdKSAudG94LWRpYWxvZ19fZm9vdGVyIC50b3gtZGlhbG9nX19mb290ZXItc3RhcnQ+KnttYXJnaW4tbGVmdDo4cHh9LnRveFtkaXI9cnRsXSAudG94LWRpYWxvZ19fYm9keXt0ZXh0LWFsaWduOnJpZ2h0fUBtZWRpYSBvbmx5IHNjcmVlbiBhbmQgKG1heC13aWR0aDo3NjdweCl7Ym9keTpub3QoLnRveC1mb3JjZS1kZXNrdG9wKSAudG94W2Rpcj1ydGxdIC50b3gtZGlhbG9nX19ib2R5LW5hdnttYXJnaW4tbGVmdDowfX1AbWVkaWEgb25seSBzY3JlZW4gYW5kIChtYXgtd2lkdGg6NzY3cHgpe2JvZHk6bm90KC50b3gtZm9yY2UtZGVza3RvcCkgLnRveFtkaXI9cnRsXSAudG94LWRpYWxvZ19fYm9keS1uYXYtaXRlbTpub3QoOmZpcnN0LWNoaWxkKXttYXJnaW4tcmlnaHQ6OHB4fX0udG94W2Rpcj1ydGxdIC50b3gtZGlhbG9nX19mb290ZXIgLnRveC1kaWFsb2dfX2Zvb3Rlci1lbmQ+KiwudG94W2Rpcj1ydGxdIC50b3gtZGlhbG9nX19mb290ZXIgLnRveC1kaWFsb2dfX2Zvb3Rlci1zdGFydD4qe21hcmdpbi1yaWdodDo4cHh9Ym9keS50b3gtZGlhbG9nX19kaXNhYmxlLXNjcm9sbHtvdmVyZmxvdzpoaWRkZW59LnRveCAudG94LWRyb3B6b25lLWNvbnRhaW5lcntkaXNwbGF5OmZsZXg7ZmxleDoxOy1tcy1mbGV4LXByZWZlcnJlZC1zaXplOmF1dG99LnRveCAudG94LWRyb3B6b25le2FsaWduLWl0ZW1zOmNlbnRlcjtiYWNrZ3JvdW5kOiNmZmY7Ym9yZGVyOjJweCBkYXNoZWQgI2NjYztib3gtc2l6aW5nOmJvcmRlci1ib3g7ZGlzcGxheTpmbGV4O2ZsZXgtZGlyZWN0aW9uOmNvbHVtbjtmbGV4LWdyb3c6MTtqdXN0aWZ5LWNvbnRlbnQ6Y2VudGVyO21pbi1oZWlnaHQ6MTAwcHg7cGFkZGluZzoxMHB4fS50b3ggLnRveC1kcm9wem9uZSBwe2NvbG9yOnJnYmEoMzQsNDcsNjIsLjcpO21hcmdpbjowIDAgMTZweCAwfS50b3ggLnRveC1lZGl0LWFyZWF7ZGlzcGxheTpmbGV4O2ZsZXg6MTstbXMtZmxleC1wcmVmZXJyZWQtc2l6ZTphdXRvO292ZXJmbG93OmhpZGRlbjtwb3NpdGlvbjpyZWxhdGl2ZX0udG94IC50b3gtZWRpdC1hcmVhX19pZnJhbWV7YmFja2dyb3VuZC1jb2xvcjojZmZmO2JvcmRlcjowO2JveC1zaXppbmc6Ym9yZGVyLWJveDtmbGV4OjE7LW1zLWZsZXgtcHJlZmVycmVkLXNpemU6YXV0bztoZWlnaHQ6MTAwJTtwb3NpdGlvbjphYnNvbHV0ZTt3aWR0aDoxMDAlfS50b3gudG94LWlubGluZS1lZGl0LWFyZWF7Ym9yZGVyOjFweCBkb3R0ZWQgI2NjY30udG94IC50b3gtZWRpdG9yLWNvbnRhaW5lcntkaXNwbGF5OmZsZXg7ZmxleDoxIDEgYXV0bztmbGV4LWRpcmVjdGlvbjpjb2x1bW47b3ZlcmZsb3c6aGlkZGVufS50b3ggLnRveC1lZGl0b3ItaGVhZGVye3otaW5kZXg6MX0udG94Om5vdCgudG94LXRpbnltY2UtaW5saW5lKSAudG94LWVkaXRvci1oZWFkZXJ7Ym94LXNoYWRvdzpub25lO3RyYW5zaXRpb246Ym94LXNoYWRvdyAuNXN9LnRveC50b3gtdGlueW1jZS0tdG9vbGJhci1ib3R0b20gLnRveC1lZGl0b3ItaGVhZGVyLC50b3gudG94LXRpbnltY2UtaW5saW5lIC50b3gtZWRpdG9yLWhlYWRlcnttYXJnaW4tYm90dG9tOi0xcHh9LnRveC50b3gtdGlueW1jZS0tdG9vbGJhci1zdGlja3ktb24gLnRveC1lZGl0b3ItaGVhZGVye2JhY2tncm91bmQtY29sb3I6dHJhbnNwYXJlbnQ7Ym94LXNoYWRvdzowIDRweCA0cHggLTNweCByZ2JhKDAsMCwwLC4yNSl9LnRveC1lZGl0b3ItZG9jay1mYWRlb3V0e29wYWNpdHk6MDt2aXNpYmlsaXR5OmhpZGRlbn0udG94LWVkaXRvci1kb2NrLWZhZGVpbntvcGFjaXR5OjE7dmlzaWJpbGl0eTp2aXNpYmxlfS50b3gtZWRpdG9yLWRvY2stdHJhbnNpdGlvbnt0cmFuc2l0aW9uOnZpc2liaWxpdHkgMHMgbGluZWFyIC4yNXMsb3BhY2l0eSAuMjVzIGVhc2V9LnRveC1lZGl0b3ItZG9jay10cmFuc2l0aW9uLnRveC1lZGl0b3ItZG9jay1mYWRlaW57dHJhbnNpdGlvbi1kZWxheTowc30udG94IC50b3gtY29udHJvbC13cmFwe2ZsZXg6MTtwb3NpdGlvbjpyZWxhdGl2ZX0udG94IC50b3gtY29udHJvbC13cmFwOm5vdCgudG94LWNvbnRyb2wtd3JhcC0tc3RhdHVzLWludmFsaWQpIC50b3gtY29udHJvbC13cmFwX19zdGF0dXMtaWNvbi1pbnZhbGlkLC50b3ggLnRveC1jb250cm9sLXdyYXA6bm90KC50b3gtY29udHJvbC13cmFwLS1zdGF0dXMtdW5rbm93bikgLnRveC1jb250cm9sLXdyYXBfX3N0YXR1cy1pY29uLXVua25vd24sLnRveCAudG94LWNvbnRyb2wtd3JhcDpub3QoLnRveC1jb250cm9sLXdyYXAtLXN0YXR1cy12YWxpZCkgLnRveC1jb250cm9sLXdyYXBfX3N0YXR1cy1pY29uLXZhbGlke2Rpc3BsYXk6bm9uZX0udG94IC50b3gtY29udHJvbC13cmFwIHN2Z3tkaXNwbGF5OmJsb2NrfS50b3ggLnRveC1jb250cm9sLXdyYXBfX3N0YXR1cy1pY29uLXdyYXB7cG9zaXRpb246YWJzb2x1dGU7dG9wOjUwJTt0cmFuc2Zvcm06dHJhbnNsYXRlWSgtNTAlKX0udG94IC50b3gtY29udHJvbC13cmFwX19zdGF0dXMtaWNvbi1pbnZhbGlkIHN2Z3tmaWxsOiNjMDB9LnRveCAudG94LWNvbnRyb2wtd3JhcF9fc3RhdHVzLWljb24tdW5rbm93biBzdmd7ZmlsbDpvcmFuZ2V9LnRveCAudG94LWNvbnRyb2wtd3JhcF9fc3RhdHVzLWljb24tdmFsaWQgc3Zne2ZpbGw6Z3JlZW59LnRveDpub3QoW2Rpcj1ydGxdKSAudG94LWNvbnRyb2wtd3JhcC0tc3RhdHVzLWludmFsaWQgLnRveC10ZXh0ZmllbGQsLnRveDpub3QoW2Rpcj1ydGxdKSAudG94LWNvbnRyb2wtd3JhcC0tc3RhdHVzLXVua25vd24gLnRveC10ZXh0ZmllbGQsLnRveDpub3QoW2Rpcj1ydGxdKSAudG94LWNvbnRyb2wtd3JhcC0tc3RhdHVzLXZhbGlkIC50b3gtdGV4dGZpZWxke3BhZGRpbmctcmlnaHQ6MzJweH0udG94Om5vdChbZGlyPXJ0bF0pIC50b3gtY29udHJvbC13cmFwX19zdGF0dXMtaWNvbi13cmFwe3JpZ2h0OjRweH0udG94W2Rpcj1ydGxdIC50b3gtY29udHJvbC13cmFwLS1zdGF0dXMtaW52YWxpZCAudG94LXRleHRmaWVsZCwudG94W2Rpcj1ydGxdIC50b3gtY29udHJvbC13cmFwLS1zdGF0dXMtdW5rbm93biAudG94LXRleHRmaWVsZCwudG94W2Rpcj1ydGxdIC50b3gtY29udHJvbC13cmFwLS1zdGF0dXMtdmFsaWQgLnRveC10ZXh0ZmllbGR7cGFkZGluZy1sZWZ0OjMycHh9LnRveFtkaXI9cnRsXSAudG94LWNvbnRyb2wtd3JhcF9fc3RhdHVzLWljb24td3JhcHtsZWZ0OjRweH0udG94IC50b3gtYXV0b2NvbXBsZXRlcnttYXgtd2lkdGg6MjVlbX0udG94IC50b3gtYXV0b2NvbXBsZXRlciAudG94LW1lbnV7bWF4LXdpZHRoOjI1ZW19LnRveCAudG94LWF1dG9jb21wbGV0ZXIgLnRveC1hdXRvY29tcGxldGVyLWhpZ2hsaWdodHtmb250LXdlaWdodDo3MDB9LnRveCAudG94LWNvbG9yLWlucHV0e2Rpc3BsYXk6ZmxleDtwb3NpdGlvbjpyZWxhdGl2ZTt6LWluZGV4OjF9LnRveCAudG94LWNvbG9yLWlucHV0IC50b3gtdGV4dGZpZWxke3otaW5kZXg6LTF9LnRveCAudG94LWNvbG9yLWlucHV0IHNwYW57Ym9yZGVyLWNvbG9yOnJnYmEoMzQsNDcsNjIsLjIpO2JvcmRlci1yYWRpdXM6M3B4O2JvcmRlci1zdHlsZTpzb2xpZDtib3JkZXItd2lkdGg6MXB4O2JveC1zaGFkb3c6bm9uZTtib3gtc2l6aW5nOmJvcmRlci1ib3g7aGVpZ2h0OjI0cHg7cG9zaXRpb246YWJzb2x1dGU7dG9wOjZweDt3aWR0aDoyNHB4fS50b3ggLnRveC1jb2xvci1pbnB1dCBzcGFuOmZvY3VzOm5vdChbYXJpYS1kaXNhYmxlZD10cnVlXSksLnRveCAudG94LWNvbG9yLWlucHV0IHNwYW46aG92ZXI6bm90KFthcmlhLWRpc2FibGVkPXRydWVdKXtib3JkZXItY29sb3I6IzIwN2FiNztjdXJzb3I6cG9pbnRlcn0udG94IC50b3gtY29sb3ItaW5wdXQgc3Bhbjo6YmVmb3Jle2JhY2tncm91bmQtaW1hZ2U6bGluZWFyLWdyYWRpZW50KDQ1ZGVnLHJnYmEoMCwwLDAsLjI1KSAyNSUsdHJhbnNwYXJlbnQgMjUlKSxsaW5lYXItZ3JhZGllbnQoLTQ1ZGVnLHJnYmEoMCwwLDAsLjI1KSAyNSUsdHJhbnNwYXJlbnQgMjUlKSxsaW5lYXItZ3JhZGllbnQoNDVkZWcsdHJhbnNwYXJlbnQgNzUlLHJnYmEoMCwwLDAsLjI1KSA3NSUpLGxpbmVhci1ncmFkaWVudCgtNDVkZWcsdHJhbnNwYXJlbnQgNzUlLHJnYmEoMCwwLDAsLjI1KSA3NSUpO2JhY2tncm91bmQtcG9zaXRpb246MCAwLDAgNnB4LDZweCAtNnB4LC02cHggMDtiYWNrZ3JvdW5kLXNpemU6MTJweCAxMnB4O2JvcmRlcjoxcHggc29saWQgI2ZmZjtib3JkZXItcmFkaXVzOjNweDtib3gtc2l6aW5nOmJvcmRlci1ib3g7Y29udGVudDonJztoZWlnaHQ6MjRweDtsZWZ0Oi0xcHg7cG9zaXRpb246YWJzb2x1dGU7dG9wOi0xcHg7d2lkdGg6MjRweDt6LWluZGV4Oi0xfS50b3ggLnRveC1jb2xvci1pbnB1dCBzcGFuW2FyaWEtZGlzYWJsZWQ9dHJ1ZV17Y3Vyc29yOm5vdC1hbGxvd2VkfS50b3g6bm90KFtkaXI9cnRsXSkgLnRveC1jb2xvci1pbnB1dCAudG94LXRleHRmaWVsZHtwYWRkaW5nLWxlZnQ6MzZweH0udG94Om5vdChbZGlyPXJ0bF0pIC50b3gtY29sb3ItaW5wdXQgc3BhbntsZWZ0OjZweH0udG94W2Rpcj1ydGxdIC50b3gtY29sb3ItaW5wdXQgLnRveC10ZXh0ZmllbGR7cGFkZGluZy1yaWdodDozNnB4fS50b3hbZGlyPXJ0bF0gLnRveC1jb2xvci1pbnB1dCBzcGFue3JpZ2h0OjZweH0udG94IC50b3gtbGFiZWwsLnRveCAudG94LXRvb2xiYXItbGFiZWx7Y29sb3I6cmdiYSgzNCw0Nyw2MiwuNyk7ZGlzcGxheTpibG9jaztmb250LXNpemU6MTRweDtmb250LXN0eWxlOm5vcm1hbDtmb250LXdlaWdodDo0MDA7bGluZS1oZWlnaHQ6MS4zO3BhZGRpbmc6MCA4cHggMCAwO3RleHQtdHJhbnNmb3JtOm5vbmU7d2hpdGUtc3BhY2U6bm93cmFwfS50b3ggLnRveC10b29sYmFyLWxhYmVse3BhZGRpbmc6MCA4cHh9LnRveFtkaXI9cnRsXSAudG94LWxhYmVse3BhZGRpbmc6MCAwIDAgOHB4fS50b3ggLnRveC1mb3Jte2Rpc3BsYXk6ZmxleDtmbGV4OjE7ZmxleC1kaXJlY3Rpb246Y29sdW1uOy1tcy1mbGV4LXByZWZlcnJlZC1zaXplOmF1dG99LnRveCAudG94LWZvcm1fX2dyb3Vwe2JveC1zaXppbmc6Ym9yZGVyLWJveDttYXJnaW4tYm90dG9tOjRweH0udG94IC50b3gtZm9ybS1ncm91cC0tbWF4aW1pemV7ZmxleDoxfS50b3ggLnRveC1mb3JtX19ncm91cC0tZXJyb3J7Y29sb3I6I2MwMH0udG94IC50b3gtZm9ybV9fZ3JvdXAtLWNvbGxlY3Rpb257ZGlzcGxheTpmbGV4fS50b3ggLnRveC1mb3JtX19ncmlke2Rpc3BsYXk6ZmxleDtmbGV4LWRpcmVjdGlvbjpyb3c7ZmxleC13cmFwOndyYXA7anVzdGlmeS1jb250ZW50OnNwYWNlLWJldHdlZW59LnRveCAudG94LWZvcm1fX2dyaWQtLTJjb2w+LnRveC1mb3JtX19ncm91cHt3aWR0aDpjYWxjKDUwJSAtICg4cHggLyAyKSl9LnRveCAudG94LWZvcm1fX2dyaWQtLTNjb2w+LnRveC1mb3JtX19ncm91cHt3aWR0aDpjYWxjKDEwMCUgLyAzIC0gKDhweCAvIDIpKX0udG94IC50b3gtZm9ybV9fZ3JpZC0tNGNvbD4udG94LWZvcm1fX2dyb3Vwe3dpZHRoOmNhbGMoMjUlIC0gKDhweCAvIDIpKX0udG94IC50b3gtZm9ybV9fY29udHJvbHMtaC1zdGFja3thbGlnbi1pdGVtczpjZW50ZXI7ZGlzcGxheTpmbGV4fS50b3ggLnRveC1mb3JtX19ncm91cC0taW5saW5le2FsaWduLWl0ZW1zOmNlbnRlcjtkaXNwbGF5OmZsZXh9LnRveCAudG94LWZvcm1fX2dyb3VwLS1zdHJldGNoZWR7ZGlzcGxheTpmbGV4O2ZsZXg6MTtmbGV4LWRpcmVjdGlvbjpjb2x1bW47LW1zLWZsZXgtcHJlZmVycmVkLXNpemU6YXV0b30udG94IC50b3gtZm9ybV9fZ3JvdXAtLXN0cmV0Y2hlZCAudG94LXRleHRhcmVhe2ZsZXg6MTstbXMtZmxleC1wcmVmZXJyZWQtc2l6ZTphdXRvfS50b3ggLnRveC1mb3JtX19ncm91cC0tc3RyZXRjaGVkIC50b3gtbmF2b2Jqe2Rpc3BsYXk6ZmxleDtmbGV4OjE7LW1zLWZsZXgtcHJlZmVycmVkLXNpemU6YXV0b30udG94IC50b3gtZm9ybV9fZ3JvdXAtLXN0cmV0Y2hlZCAudG94LW5hdm9iaiA6bnRoLWNoaWxkKDIpe2ZsZXg6MTstbXMtZmxleC1wcmVmZXJyZWQtc2l6ZTphdXRvO2hlaWdodDoxMDAlfS50b3g6bm90KFtkaXI9cnRsXSkgLnRveC1mb3JtX19jb250cm9scy1oLXN0YWNrPjpub3QoOmZpcnN0LWNoaWxkKXttYXJnaW4tbGVmdDo0cHh9LnRveFtkaXI9cnRsXSAudG94LWZvcm1fX2NvbnRyb2xzLWgtc3RhY2s+Om5vdCg6Zmlyc3QtY2hpbGQpe21hcmdpbi1yaWdodDo0cHh9LnRveCAudG94LWxvY2sudG94LWxvY2tlZCAudG94LWxvY2staWNvbl9fdW5sb2NrLC50b3ggLnRveC1sb2NrOm5vdCgudG94LWxvY2tlZCkgLnRveC1sb2NrLWljb25fX2xvY2t7ZGlzcGxheTpub25lfS50b3ggLnRveC1saXN0Ym94ZmllbGQgLnRveC1saXN0Ym94LS1zZWxlY3QsLnRveCAudG94LXRleHRhcmVhLC50b3ggLnRveC10ZXh0ZmllbGQsLnRveCAudG94LXRvb2xiYXItdGV4dGZpZWxkey13ZWJraXQtYXBwZWFyYW5jZTpub25lOy1tb3otYXBwZWFyYW5jZTpub25lO2FwcGVhcmFuY2U6bm9uZTtiYWNrZ3JvdW5kLWNvbG9yOiNmZmY7Ym9yZGVyLWNvbG9yOiNjY2M7Ym9yZGVyLXJhZGl1czozcHg7Ym9yZGVyLXN0eWxlOnNvbGlkO2JvcmRlci13aWR0aDoxcHg7Ym94LXNoYWRvdzpub25lO2JveC1zaXppbmc6Ym9yZGVyLWJveDtjb2xvcjojMjIyZjNlO2ZvbnQtZmFtaWx5Oi1hcHBsZS1zeXN0ZW0sQmxpbmtNYWNTeXN0ZW1Gb250LFwiU2Vnb2UgVUlcIixSb2JvdG8sT3h5Z2VuLVNhbnMsVWJ1bnR1LENhbnRhcmVsbCxcIkhlbHZldGljYSBOZXVlXCIsc2Fucy1zZXJpZjtmb250LXNpemU6MTZweDtsaW5lLWhlaWdodDoyNHB4O21hcmdpbjowO21pbi1oZWlnaHQ6MzRweDtvdXRsaW5lOjA7cGFkZGluZzo1cHggNC43NXB4O3Jlc2l6ZTpub25lO3dpZHRoOjEwMCV9LnRveCAudG94LXRleHRhcmVhW2Rpc2FibGVkXSwudG94IC50b3gtdGV4dGZpZWxkW2Rpc2FibGVkXXtiYWNrZ3JvdW5kLWNvbG9yOiNmMmYyZjI7Y29sb3I6cmdiYSgzNCw0Nyw2MiwuODUpO2N1cnNvcjpub3QtYWxsb3dlZH0udG94IC50b3gtbGlzdGJveGZpZWxkIC50b3gtbGlzdGJveC0tc2VsZWN0OmZvY3VzLC50b3ggLnRveC10ZXh0YXJlYTpmb2N1cywudG94IC50b3gtdGV4dGZpZWxkOmZvY3Vze2JhY2tncm91bmQtY29sb3I6I2ZmZjtib3JkZXItY29sb3I6IzIwN2FiNztib3gtc2hhZG93Om5vbmU7b3V0bGluZTowfS50b3ggLnRveC10b29sYmFyLXRleHRmaWVsZHtib3JkZXItd2lkdGg6MDttYXJnaW4tYm90dG9tOjNweDttYXJnaW4tdG9wOjJweDttYXgtd2lkdGg6MjUwcHh9LnRveCAudG94LW5ha2VkLWJ0bntiYWNrZ3JvdW5kLWNvbG9yOnRyYW5zcGFyZW50O2JvcmRlcjowO2JvcmRlci1jb2xvcjp0cmFuc3BhcmVudDtib3gtc2hhZG93OnVuc2V0O2NvbG9yOiMyMDdhYjc7Y3Vyc29yOnBvaW50ZXI7ZGlzcGxheTpibG9jazttYXJnaW46MDtwYWRkaW5nOjB9LnRveCAudG94LW5ha2VkLWJ0biBzdmd7ZGlzcGxheTpibG9jaztmaWxsOiMyMjJmM2V9LnRveDpub3QoW2Rpcj1ydGxdKSAudG94LXRvb2xiYXItdGV4dGZpZWxkKyp7bWFyZ2luLWxlZnQ6NHB4fS50b3hbZGlyPXJ0bF0gLnRveC10b29sYmFyLXRleHRmaWVsZCsqe21hcmdpbi1yaWdodDo0cHh9LnRveCAudG94LWxpc3Rib3hmaWVsZHtjdXJzb3I6cG9pbnRlcjtwb3NpdGlvbjpyZWxhdGl2ZX0udG94IC50b3gtbGlzdGJveGZpZWxkIC50b3gtbGlzdGJveC0tc2VsZWN0W2Rpc2FibGVkXXtiYWNrZ3JvdW5kLWNvbG9yOiNmMmYyZjI7Y29sb3I6cmdiYSgzNCw0Nyw2MiwuODUpO2N1cnNvcjpub3QtYWxsb3dlZH0udG94IC50b3gtbGlzdGJveF9fc2VsZWN0LWxhYmVse2N1cnNvcjpkZWZhdWx0O2ZsZXg6MTttYXJnaW46MCA0cHh9LnRveCAudG94LWxpc3Rib3hfX3NlbGVjdC1jaGV2cm9ue2FsaWduLWl0ZW1zOmNlbnRlcjtkaXNwbGF5OmZsZXg7anVzdGlmeS1jb250ZW50OmNlbnRlcjt3aWR0aDoxNnB4fS50b3ggLnRveC1saXN0Ym94X19zZWxlY3QtY2hldnJvbiBzdmd7ZmlsbDojMjIyZjNlfS50b3ggLnRveC1saXN0Ym94ZmllbGQgLnRveC1saXN0Ym94LS1zZWxlY3R7YWxpZ24taXRlbXM6Y2VudGVyO2Rpc3BsYXk6ZmxleH0udG94Om5vdChbZGlyPXJ0bF0pIC50b3gtbGlzdGJveGZpZWxkIHN2Z3tyaWdodDo4cHh9LnRveFtkaXI9cnRsXSAudG94LWxpc3Rib3hmaWVsZCBzdmd7bGVmdDo4cHh9LnRveCAudG94LXNlbGVjdGZpZWxke2N1cnNvcjpwb2ludGVyO3Bvc2l0aW9uOnJlbGF0aXZlfS50b3ggLnRveC1zZWxlY3RmaWVsZCBzZWxlY3R7LXdlYmtpdC1hcHBlYXJhbmNlOm5vbmU7LW1vei1hcHBlYXJhbmNlOm5vbmU7YXBwZWFyYW5jZTpub25lO2JhY2tncm91bmQtY29sb3I6I2ZmZjtib3JkZXItY29sb3I6I2NjYztib3JkZXItcmFkaXVzOjNweDtib3JkZXItc3R5bGU6c29saWQ7Ym9yZGVyLXdpZHRoOjFweDtib3gtc2hhZG93Om5vbmU7Ym94LXNpemluZzpib3JkZXItYm94O2NvbG9yOiMyMjJmM2U7Zm9udC1mYW1pbHk6LWFwcGxlLXN5c3RlbSxCbGlua01hY1N5c3RlbUZvbnQsXCJTZWdvZSBVSVwiLFJvYm90byxPeHlnZW4tU2FucyxVYnVudHUsQ2FudGFyZWxsLFwiSGVsdmV0aWNhIE5ldWVcIixzYW5zLXNlcmlmO2ZvbnQtc2l6ZToxNnB4O2xpbmUtaGVpZ2h0OjI0cHg7bWFyZ2luOjA7bWluLWhlaWdodDozNHB4O291dGxpbmU6MDtwYWRkaW5nOjVweCA0Ljc1cHg7cmVzaXplOm5vbmU7d2lkdGg6MTAwJX0udG94IC50b3gtc2VsZWN0ZmllbGQgc2VsZWN0W2Rpc2FibGVkXXtiYWNrZ3JvdW5kLWNvbG9yOiNmMmYyZjI7Y29sb3I6cmdiYSgzNCw0Nyw2MiwuODUpO2N1cnNvcjpub3QtYWxsb3dlZH0udG94IC50b3gtc2VsZWN0ZmllbGQgc2VsZWN0OjotbXMtZXhwYW5ke2Rpc3BsYXk6bm9uZX0udG94IC50b3gtc2VsZWN0ZmllbGQgc2VsZWN0OmZvY3Vze2JhY2tncm91bmQtY29sb3I6I2ZmZjtib3JkZXItY29sb3I6IzIwN2FiNztib3gtc2hhZG93Om5vbmU7b3V0bGluZTowfS50b3ggLnRveC1zZWxlY3RmaWVsZCBzdmd7cG9pbnRlci1ldmVudHM6bm9uZTtwb3NpdGlvbjphYnNvbHV0ZTt0b3A6NTAlO3RyYW5zZm9ybTp0cmFuc2xhdGVZKC01MCUpfS50b3g6bm90KFtkaXI9cnRsXSkgLnRveC1zZWxlY3RmaWVsZCBzZWxlY3Rbc2l6ZT1cIjBcIl0sLnRveDpub3QoW2Rpcj1ydGxdKSAudG94LXNlbGVjdGZpZWxkIHNlbGVjdFtzaXplPVwiMVwiXXtwYWRkaW5nLXJpZ2h0OjI0cHh9LnRveDpub3QoW2Rpcj1ydGxdKSAudG94LXNlbGVjdGZpZWxkIHN2Z3tyaWdodDo4cHh9LnRveFtkaXI9cnRsXSAudG94LXNlbGVjdGZpZWxkIHNlbGVjdFtzaXplPVwiMFwiXSwudG94W2Rpcj1ydGxdIC50b3gtc2VsZWN0ZmllbGQgc2VsZWN0W3NpemU9XCIxXCJde3BhZGRpbmctbGVmdDoyNHB4fS50b3hbZGlyPXJ0bF0gLnRveC1zZWxlY3RmaWVsZCBzdmd7bGVmdDo4cHh9LnRveCAudG94LXRleHRhcmVhey13ZWJraXQtYXBwZWFyYW5jZTp0ZXh0YXJlYTstbW96LWFwcGVhcmFuY2U6dGV4dGFyZWE7YXBwZWFyYW5jZTp0ZXh0YXJlYTt3aGl0ZS1zcGFjZTpwcmUtd3JhcH0udG94LWZ1bGxzY3JlZW57Ym9yZGVyOjA7aGVpZ2h0OjEwMCU7bWFyZ2luOjA7b3ZlcmZsb3c6aGlkZGVuOy1tcy1zY3JvbGwtY2hhaW5pbmc6bm9uZTtvdmVyc2Nyb2xsLWJlaGF2aW9yOm5vbmU7cGFkZGluZzowO3RvdWNoLWFjdGlvbjpwaW5jaC16b29tO3dpZHRoOjEwMCV9LnRveC50b3gtdGlueW1jZS50b3gtZnVsbHNjcmVlbiAudG94LXN0YXR1c2Jhcl9fcmVzaXplLWhhbmRsZXtkaXNwbGF5Om5vbmV9LnRveC1zaGFkb3dob3N0LnRveC1mdWxsc2NyZWVuLC50b3gudG94LXRpbnltY2UudG94LWZ1bGxzY3JlZW57bGVmdDowO3Bvc2l0aW9uOmZpeGVkO3RvcDowO3otaW5kZXg6MTIwMH0udG94LnRveC10aW55bWNlLnRveC1mdWxsc2NyZWVue2JhY2tncm91bmQtY29sb3I6dHJhbnNwYXJlbnR9LnRveC1mdWxsc2NyZWVuIC50b3gudG94LXRpbnltY2UtYXV4LC50b3gtZnVsbHNjcmVlbn4udG94LnRveC10aW55bWNlLWF1eHt6LWluZGV4OjEyMDF9LnRveCAudG94LWhlbHBfX21vcmUtbGlua3tsaXN0LXN0eWxlOm5vbmU7bWFyZ2luLXRvcDoxZW19LnRveCAudG94LWltYWdlLXRvb2xze3dpZHRoOjEwMCV9LnRveCAudG94LWltYWdlLXRvb2xzX190b29sYmFye2FsaWduLWl0ZW1zOmNlbnRlcjtkaXNwbGF5OmZsZXg7anVzdGlmeS1jb250ZW50OmNlbnRlcn0udG94IC50b3gtaW1hZ2UtdG9vbHNfX2ltYWdle2JhY2tncm91bmQtY29sb3I6IzY2NjtoZWlnaHQ6MzgwcHg7b3ZlcmZsb3c6YXV0bztwb3NpdGlvbjpyZWxhdGl2ZTt3aWR0aDoxMDAlfS50b3ggLnRveC1pbWFnZS10b29sc19faW1hZ2UsLnRveCAudG94LWltYWdlLXRvb2xzX19pbWFnZSsudG94LWltYWdlLXRvb2xzX190b29sYmFye21hcmdpbi10b3A6OHB4fS50b3ggLnRveC1pbWFnZS10b29sc19faW1hZ2UtYmd7YmFja2dyb3VuZDp1cmwoZGF0YTppbWFnZS9naWY7YmFzZTY0LFIwbEdPRGRoREFBTUFJQUJBTXpNelAvLy95d0FBQUFBREFBTUFBQUNGb1FmcVllYWJOeURNa0JRYjgxVWF0ODVueGd1VUFFQU93PT0pfS50b3ggLnRveC1pbWFnZS10b29sc19fdG9vbGJhcj4udG94LXNwYWNlcntmbGV4OjE7LW1zLWZsZXgtcHJlZmVycmVkLXNpemU6YXV0b30udG94IC50b3gtY3JvcHJlY3QtYmxvY2t7YmFja2dyb3VuZDojMDAwO29wYWNpdHk6LjU7cG9zaXRpb246YWJzb2x1dGU7em9vbToxfS50b3ggLnRveC1jcm9wcmVjdC1oYW5kbGV7Ym9yZGVyOjJweCBzb2xpZCAjZmZmO2hlaWdodDoyMHB4O2xlZnQ6MDtwb3NpdGlvbjphYnNvbHV0ZTt0b3A6MDt3aWR0aDoyMHB4fS50b3ggLnRveC1jcm9wcmVjdC1oYW5kbGUtbW92ZXtib3JkZXI6MDtjdXJzb3I6bW92ZTtwb3NpdGlvbjphYnNvbHV0ZX0udG94IC50b3gtY3JvcHJlY3QtaGFuZGxlLW53e2JvcmRlci13aWR0aDoycHggMCAwIDJweDtjdXJzb3I6bnctcmVzaXplO2xlZnQ6MTAwcHg7bWFyZ2luOi0ycHggMCAwIC0ycHg7dG9wOjEwMHB4fS50b3ggLnRveC1jcm9wcmVjdC1oYW5kbGUtbmV7Ym9yZGVyLXdpZHRoOjJweCAycHggMCAwO2N1cnNvcjpuZS1yZXNpemU7bGVmdDoyMDBweDttYXJnaW46LTJweCAwIDAgLTIwcHg7dG9wOjEwMHB4fS50b3ggLnRveC1jcm9wcmVjdC1oYW5kbGUtc3d7Ym9yZGVyLXdpZHRoOjAgMCAycHggMnB4O2N1cnNvcjpzdy1yZXNpemU7bGVmdDoxMDBweDttYXJnaW46LTIwcHggMnB4IDAgLTJweDt0b3A6MjAwcHh9LnRveCAudG94LWNyb3ByZWN0LWhhbmRsZS1zZXtib3JkZXItd2lkdGg6MCAycHggMnB4IDA7Y3Vyc29yOnNlLXJlc2l6ZTtsZWZ0OjIwMHB4O21hcmdpbjotMjBweCAwIDAgLTIwcHg7dG9wOjIwMHB4fS50b3g6bm90KFtkaXI9cnRsXSkgLnRveC1pbWFnZS10b29sc19fdG9vbGJhcj4udG94LXNsaWRlcjpub3QoOmZpcnN0LW9mLXR5cGUpe21hcmdpbi1sZWZ0OjhweH0udG94Om5vdChbZGlyPXJ0bF0pIC50b3gtaW1hZ2UtdG9vbHNfX3Rvb2xiYXI+LnRveC1idXR0b24rLnRveC1zbGlkZXJ7bWFyZ2luLWxlZnQ6MzJweH0udG94Om5vdChbZGlyPXJ0bF0pIC50b3gtaW1hZ2UtdG9vbHNfX3Rvb2xiYXI+LnRveC1zbGlkZXIrLnRveC1idXR0b257bWFyZ2luLWxlZnQ6MzJweH0udG94W2Rpcj1ydGxdIC50b3gtaW1hZ2UtdG9vbHNfX3Rvb2xiYXI+LnRveC1zbGlkZXI6bm90KDpmaXJzdC1vZi10eXBlKXttYXJnaW4tcmlnaHQ6OHB4fS50b3hbZGlyPXJ0bF0gLnRveC1pbWFnZS10b29sc19fdG9vbGJhcj4udG94LWJ1dHRvbisudG94LXNsaWRlcnttYXJnaW4tcmlnaHQ6MzJweH0udG94W2Rpcj1ydGxdIC50b3gtaW1hZ2UtdG9vbHNfX3Rvb2xiYXI+LnRveC1zbGlkZXIrLnRveC1idXR0b257bWFyZ2luLXJpZ2h0OjMycHh9LnRveCAudG94LWluc2VydC10YWJsZS1waWNrZXJ7ZGlzcGxheTpmbGV4O2ZsZXgtd3JhcDp3cmFwO3dpZHRoOjE3MHB4fS50b3ggLnRveC1pbnNlcnQtdGFibGUtcGlja2VyPmRpdntib3JkZXItY29sb3I6I2NjYztib3JkZXItc3R5bGU6c29saWQ7Ym9yZGVyLXdpZHRoOjAgMXB4IDFweCAwO2JveC1zaXppbmc6Ym9yZGVyLWJveDtoZWlnaHQ6MTdweDt3aWR0aDoxN3B4fS50b3ggLnRveC1jb2xsZWN0aW9uLS1saXN0IC50b3gtY29sbGVjdGlvbl9fZ3JvdXAgLnRveC1pbnNlcnQtdGFibGUtcGlja2Vye21hcmdpbjotNHB4IDB9LnRveCAudG94LWluc2VydC10YWJsZS1waWNrZXIgLnRveC1pbnNlcnQtdGFibGUtcGlja2VyX19zZWxlY3RlZHtiYWNrZ3JvdW5kLWNvbG9yOnJnYmEoMzIsMTIyLDE4MywuNSk7Ym9yZGVyLWNvbG9yOnJnYmEoMzIsMTIyLDE4MywuNSl9LnRveCAudG94LWluc2VydC10YWJsZS1waWNrZXJfX2xhYmVse2NvbG9yOnJnYmEoMzQsNDcsNjIsLjcpO2Rpc3BsYXk6YmxvY2s7Zm9udC1zaXplOjE0cHg7cGFkZGluZzo0cHg7dGV4dC1hbGlnbjpjZW50ZXI7d2lkdGg6MTAwJX0udG94Om5vdChbZGlyPXJ0bF0pIC50b3gtaW5zZXJ0LXRhYmxlLXBpY2tlcj5kaXY6bnRoLWNoaWxkKDEwbil7Ym9yZGVyLXJpZ2h0OjB9LnRveFtkaXI9cnRsXSAudG94LWluc2VydC10YWJsZS1waWNrZXI+ZGl2Om50aC1jaGlsZCgxMG4rMSl7Ym9yZGVyLXJpZ2h0OjB9LnRveCAudG94LW1lbnV7YmFja2dyb3VuZC1jb2xvcjojZmZmO2JvcmRlcjoxcHggc29saWQgI2NjYztib3JkZXItcmFkaXVzOjNweDtib3gtc2hhZG93OjAgNHB4IDhweCAwIHJnYmEoMzQsNDcsNjIsLjEpO2Rpc3BsYXk6aW5saW5lLWJsb2NrO292ZXJmbG93OmhpZGRlbjt2ZXJ0aWNhbC1hbGlnbjp0b3A7ei1pbmRleDoxMTUwfS50b3ggLnRveC1tZW51LnRveC1jb2xsZWN0aW9uLnRveC1jb2xsZWN0aW9uLS1saXN0e3BhZGRpbmc6MH0udG94IC50b3gtbWVudS50b3gtY29sbGVjdGlvbi50b3gtY29sbGVjdGlvbi0tdG9vbGJhcntwYWRkaW5nOjRweH0udG94IC50b3gtbWVudS50b3gtY29sbGVjdGlvbi50b3gtY29sbGVjdGlvbi0tZ3JpZHtwYWRkaW5nOjRweH0udG94IC50b3gtbWVudV9fbGFiZWwgYmxvY2txdW90ZSwudG94IC50b3gtbWVudV9fbGFiZWwgY29kZSwudG94IC50b3gtbWVudV9fbGFiZWwgaDEsLnRveCAudG94LW1lbnVfX2xhYmVsIGgyLC50b3ggLnRveC1tZW51X19sYWJlbCBoMywudG94IC50b3gtbWVudV9fbGFiZWwgaDQsLnRveCAudG94LW1lbnVfX2xhYmVsIGg1LC50b3ggLnRveC1tZW51X19sYWJlbCBoNiwudG94IC50b3gtbWVudV9fbGFiZWwgcHttYXJnaW46MH0udG94IC50b3gtbWVudWJhcntiYWNrZ3JvdW5kOnVybChcImRhdGE6aW1hZ2Uvc3ZnK3htbDtjaGFyc2V0PXV0ZjgsJTNDc3ZnIGhlaWdodD0nMzlweCcgdmlld0JveD0nMCAwIDQwIDM5cHgnIHdpZHRoPSc0MCcgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJyUzRSUzQ3JlY3QgeD0nMCcgeT0nMzhweCcgd2lkdGg9JzEwMCcgaGVpZ2h0PScxJyBmaWxsPSclMjNjY2NjY2MnLyUzRSUzQy9zdmclM0VcIikgbGVmdCAwIHRvcCAwICNmZmY7YmFja2dyb3VuZC1jb2xvcjojZmZmO2Rpc3BsYXk6ZmxleDtmbGV4OjAgMCBhdXRvO2ZsZXgtc2hyaW5rOjA7ZmxleC13cmFwOndyYXA7cGFkZGluZzowIDRweCAwIDRweH0udG94LnRveC10aW55bWNlOm5vdCgudG94LXRpbnltY2UtaW5saW5lKSAudG94LWVkaXRvci1oZWFkZXI6bm90KDpmaXJzdC1jaGlsZCkgLnRveC1tZW51YmFye2JvcmRlci10b3A6MXB4IHNvbGlkICNjY2N9LnRveCAudG94LW1idG57YWxpZ24taXRlbXM6Y2VudGVyO2JhY2tncm91bmQ6MCAwO2JvcmRlcjowO2JvcmRlci1yYWRpdXM6M3B4O2JveC1zaGFkb3c6bm9uZTtjb2xvcjojMjIyZjNlO2Rpc3BsYXk6ZmxleDtmbGV4OjAgMCBhdXRvO2ZvbnQtc2l6ZToxNHB4O2ZvbnQtc3R5bGU6bm9ybWFsO2ZvbnQtd2VpZ2h0OjQwMDtoZWlnaHQ6MzRweDtqdXN0aWZ5LWNvbnRlbnQ6Y2VudGVyO21hcmdpbjoycHggMCAzcHggMDtvdXRsaW5lOjA7b3ZlcmZsb3c6aGlkZGVuO3BhZGRpbmc6MCA0cHg7dGV4dC10cmFuc2Zvcm06bm9uZTt3aWR0aDphdXRvfS50b3ggLnRveC1tYnRuW2Rpc2FibGVkXXtiYWNrZ3JvdW5kLWNvbG9yOnRyYW5zcGFyZW50O2JvcmRlcjowO2JveC1zaGFkb3c6bm9uZTtjb2xvcjpyZ2JhKDM0LDQ3LDYyLC41KTtjdXJzb3I6bm90LWFsbG93ZWR9LnRveCAudG94LW1idG46Zm9jdXM6bm90KDpkaXNhYmxlZCl7YmFja2dyb3VuZDojZGVlMGUyO2JvcmRlcjowO2JveC1zaGFkb3c6bm9uZTtjb2xvcjojMjIyZjNlfS50b3ggLnRveC1tYnRuLS1hY3RpdmV7YmFja2dyb3VuZDojYzhjYmNmO2JvcmRlcjowO2JveC1zaGFkb3c6bm9uZTtjb2xvcjojMjIyZjNlfS50b3ggLnRveC1tYnRuOmhvdmVyOm5vdCg6ZGlzYWJsZWQpOm5vdCgudG94LW1idG4tLWFjdGl2ZSl7YmFja2dyb3VuZDojZGVlMGUyO2JvcmRlcjowO2JveC1zaGFkb3c6bm9uZTtjb2xvcjojMjIyZjNlfS50b3ggLnRveC1tYnRuX19zZWxlY3QtbGFiZWx7Y3Vyc29yOmRlZmF1bHQ7Zm9udC13ZWlnaHQ6NDAwO21hcmdpbjowIDRweH0udG94IC50b3gtbWJ0bltkaXNhYmxlZF0gLnRveC1tYnRuX19zZWxlY3QtbGFiZWx7Y3Vyc29yOm5vdC1hbGxvd2VkfS50b3ggLnRveC1tYnRuX19zZWxlY3QtY2hldnJvbnthbGlnbi1pdGVtczpjZW50ZXI7ZGlzcGxheTpmbGV4O2p1c3RpZnktY29udGVudDpjZW50ZXI7d2lkdGg6MTZweDtkaXNwbGF5Om5vbmV9LnRveCAudG94LW5vdGlmaWNhdGlvbntib3JkZXItcmFkaXVzOjNweDtib3JkZXItc3R5bGU6c29saWQ7Ym9yZGVyLXdpZHRoOjFweDtib3gtc2hhZG93Om5vbmU7Ym94LXNpemluZzpib3JkZXItYm94O2Rpc3BsYXk6LW1zLWdyaWQ7ZGlzcGxheTpncmlkO2ZvbnQtc2l6ZToxNHB4O2ZvbnQtd2VpZ2h0OjQwMDstbXMtZ3JpZC1jb2x1bW5zOm1pbm1heCg0MHB4LDFmcikgYXV0byBtaW5tYXgoNDBweCwxZnIpO2dyaWQtdGVtcGxhdGUtY29sdW1uczptaW5tYXgoNDBweCwxZnIpIGF1dG8gbWlubWF4KDQwcHgsMWZyKTttYXJnaW4tdG9wOjRweDtvcGFjaXR5OjA7cGFkZGluZzo0cHg7dHJhbnNpdGlvbjp0cmFuc2Zvcm0gLjFzIGVhc2UtaW4sb3BhY2l0eSAxNTBtcyBlYXNlLWlufS50b3ggLnRveC1ub3RpZmljYXRpb24gcHtmb250LXNpemU6MTRweDtmb250LXdlaWdodDo0MDB9LnRveCAudG94LW5vdGlmaWNhdGlvbiBhe2N1cnNvcjpwb2ludGVyO3RleHQtZGVjb3JhdGlvbjp1bmRlcmxpbmV9LnRveCAudG94LW5vdGlmaWNhdGlvbi0taW57b3BhY2l0eToxfS50b3ggLnRveC1ub3RpZmljYXRpb24tLXN1Y2Nlc3N7YmFja2dyb3VuZC1jb2xvcjojZTRlZWRhO2JvcmRlci1jb2xvcjojZDdlNmM4O2NvbG9yOiMyMjJmM2V9LnRveCAudG94LW5vdGlmaWNhdGlvbi0tc3VjY2VzcyBwe2NvbG9yOiMyMjJmM2V9LnRveCAudG94LW5vdGlmaWNhdGlvbi0tc3VjY2VzcyBhe2NvbG9yOiM1NDc4MzF9LnRveCAudG94LW5vdGlmaWNhdGlvbi0tc3VjY2VzcyBzdmd7ZmlsbDojMjIyZjNlfS50b3ggLnRveC1ub3RpZmljYXRpb24tLWVycm9ye2JhY2tncm91bmQtY29sb3I6I2Y4ZGVkZTtib3JkZXItY29sb3I6I2YyYmZiZjtjb2xvcjojMjIyZjNlfS50b3ggLnRveC1ub3RpZmljYXRpb24tLWVycm9yIHB7Y29sb3I6IzIyMmYzZX0udG94IC50b3gtbm90aWZpY2F0aW9uLS1lcnJvciBhe2NvbG9yOiNjMDB9LnRveCAudG94LW5vdGlmaWNhdGlvbi0tZXJyb3Igc3Zne2ZpbGw6IzIyMmYzZX0udG94IC50b3gtbm90aWZpY2F0aW9uLS13YXJuLC50b3ggLnRveC1ub3RpZmljYXRpb24tLXdhcm5pbmd7YmFja2dyb3VuZC1jb2xvcjojZmZmYWVhO2JvcmRlci1jb2xvcjojZmZlODlkO2NvbG9yOiMyMjJmM2V9LnRveCAudG94LW5vdGlmaWNhdGlvbi0td2FybiBwLC50b3ggLnRveC1ub3RpZmljYXRpb24tLXdhcm5pbmcgcHtjb2xvcjojMjIyZjNlfS50b3ggLnRveC1ub3RpZmljYXRpb24tLXdhcm4gYSwudG94IC50b3gtbm90aWZpY2F0aW9uLS13YXJuaW5nIGF7Y29sb3I6IzIyMmYzZX0udG94IC50b3gtbm90aWZpY2F0aW9uLS13YXJuIHN2ZywudG94IC50b3gtbm90aWZpY2F0aW9uLS13YXJuaW5nIHN2Z3tmaWxsOiMyMjJmM2V9LnRveCAudG94LW5vdGlmaWNhdGlvbi0taW5mb3tiYWNrZ3JvdW5kLWNvbG9yOiNkOWVkZjc7Ym9yZGVyLWNvbG9yOiM3NzllY2I7Y29sb3I6IzIyMmYzZX0udG94IC50b3gtbm90aWZpY2F0aW9uLS1pbmZvIHB7Y29sb3I6IzIyMmYzZX0udG94IC50b3gtbm90aWZpY2F0aW9uLS1pbmZvIGF7Y29sb3I6IzIyMmYzZX0udG94IC50b3gtbm90aWZpY2F0aW9uLS1pbmZvIHN2Z3tmaWxsOiMyMjJmM2V9LnRveCAudG94LW5vdGlmaWNhdGlvbl9fYm9keXstbXMtZ3JpZC1yb3ctYWxpZ246Y2VudGVyO2FsaWduLXNlbGY6Y2VudGVyO2NvbG9yOiMyMjJmM2U7Zm9udC1zaXplOjE0cHg7LW1zLWdyaWQtY29sdW1uLXNwYW46MTtncmlkLWNvbHVtbi1lbmQ6MzstbXMtZ3JpZC1jb2x1bW46MjtncmlkLWNvbHVtbi1zdGFydDoyOy1tcy1ncmlkLXJvdy1zcGFuOjE7Z3JpZC1yb3ctZW5kOjI7LW1zLWdyaWQtcm93OjE7Z3JpZC1yb3ctc3RhcnQ6MTt0ZXh0LWFsaWduOmNlbnRlcjt3aGl0ZS1zcGFjZTpub3JtYWw7d29yZC1icmVhazpicmVhay1hbGw7d29yZC1icmVhazpicmVhay13b3JkfS50b3ggLnRveC1ub3RpZmljYXRpb25fX2JvZHk+KnttYXJnaW46MH0udG94IC50b3gtbm90aWZpY2F0aW9uX19ib2R5PiorKnttYXJnaW4tdG9wOjFyZW19LnRveCAudG94LW5vdGlmaWNhdGlvbl9faWNvbnstbXMtZ3JpZC1yb3ctYWxpZ246Y2VudGVyO2FsaWduLXNlbGY6Y2VudGVyOy1tcy1ncmlkLWNvbHVtbi1zcGFuOjE7Z3JpZC1jb2x1bW4tZW5kOjI7LW1zLWdyaWQtY29sdW1uOjE7Z3JpZC1jb2x1bW4tc3RhcnQ6MTstbXMtZ3JpZC1yb3ctc3BhbjoxO2dyaWQtcm93LWVuZDoyOy1tcy1ncmlkLXJvdzoxO2dyaWQtcm93LXN0YXJ0OjE7LW1zLWdyaWQtY29sdW1uLWFsaWduOmVuZDtqdXN0aWZ5LXNlbGY6ZW5kfS50b3ggLnRveC1ub3RpZmljYXRpb25fX2ljb24gc3Zne2Rpc3BsYXk6YmxvY2t9LnRveCAudG94LW5vdGlmaWNhdGlvbl9fZGlzbWlzc3stbXMtZ3JpZC1yb3ctYWxpZ246c3RhcnQ7YWxpZ24tc2VsZjpzdGFydDstbXMtZ3JpZC1jb2x1bW4tc3BhbjoxO2dyaWQtY29sdW1uLWVuZDo0Oy1tcy1ncmlkLWNvbHVtbjozO2dyaWQtY29sdW1uLXN0YXJ0OjM7LW1zLWdyaWQtcm93LXNwYW46MTtncmlkLXJvdy1lbmQ6MjstbXMtZ3JpZC1yb3c6MTtncmlkLXJvdy1zdGFydDoxOy1tcy1ncmlkLWNvbHVtbi1hbGlnbjplbmQ7anVzdGlmeS1zZWxmOmVuZH0udG94IC50b3gtbm90aWZpY2F0aW9uIC50b3gtcHJvZ3Jlc3MtYmFyey1tcy1ncmlkLWNvbHVtbi1zcGFuOjM7Z3JpZC1jb2x1bW4tZW5kOjQ7LW1zLWdyaWQtY29sdW1uOjE7Z3JpZC1jb2x1bW4tc3RhcnQ6MTstbXMtZ3JpZC1yb3ctc3BhbjoxO2dyaWQtcm93LWVuZDozOy1tcy1ncmlkLXJvdzoyO2dyaWQtcm93LXN0YXJ0OjI7LW1zLWdyaWQtY29sdW1uLWFsaWduOmNlbnRlcjtqdXN0aWZ5LXNlbGY6Y2VudGVyfS50b3ggLnRveC1wb3B7ZGlzcGxheTppbmxpbmUtYmxvY2s7cG9zaXRpb246cmVsYXRpdmV9LnRveCAudG94LXBvcC0tcmVzaXppbmd7dHJhbnNpdGlvbjp3aWR0aCAuMXMgZWFzZX0udG94IC50b3gtcG9wLS1yZXNpemluZyAudG94LXRvb2xiYXIsLnRveCAudG94LXBvcC0tcmVzaXppbmcgLnRveC10b29sYmFyX19ncm91cHtmbGV4LXdyYXA6bm93cmFwfS50b3ggLnRveC1wb3AtLXRyYW5zaXRpb257dHJhbnNpdGlvbjouMTVzIGVhc2U7dHJhbnNpdGlvbi1wcm9wZXJ0eTpsZWZ0LHJpZ2h0LHRvcCxib3R0b219LnRveCAudG94LXBvcC0tdHJhbnNpdGlvbjo6YWZ0ZXIsLnRveCAudG94LXBvcC0tdHJhbnNpdGlvbjo6YmVmb3Jle3RyYW5zaXRpb246YWxsIC4xNXMsdmlzaWJpbGl0eSAwcyxvcGFjaXR5IDc1bXMgZWFzZSA3NW1zfS50b3ggLnRveC1wb3BfX2RpYWxvZ3tiYWNrZ3JvdW5kLWNvbG9yOiNmZmY7Ym9yZGVyOjFweCBzb2xpZCAjY2NjO2JvcmRlci1yYWRpdXM6M3B4O2JveC1zaGFkb3c6MCAxcHggM3B4IHJnYmEoMCwwLDAsLjE1KTttaW4td2lkdGg6MDtvdmVyZmxvdzpoaWRkZW59LnRveCAudG94LXBvcF9fZGlhbG9nPjpub3QoLnRveC10b29sYmFyKXttYXJnaW46NHB4IDRweCA0cHggOHB4fS50b3ggLnRveC1wb3BfX2RpYWxvZyAudG94LXRvb2xiYXJ7YmFja2dyb3VuZC1jb2xvcjp0cmFuc3BhcmVudDttYXJnaW4tYm90dG9tOi0xcHh9LnRveCAudG94LXBvcDo6YWZ0ZXIsLnRveCAudG94LXBvcDo6YmVmb3Jle2JvcmRlci1zdHlsZTpzb2xpZDtjb250ZW50OicnO2Rpc3BsYXk6YmxvY2s7aGVpZ2h0OjA7b3BhY2l0eToxO3Bvc2l0aW9uOmFic29sdXRlO3dpZHRoOjB9LnRveCAudG94LXBvcC50b3gtcG9wLS1pbnNldDo6YWZ0ZXIsLnRveCAudG94LXBvcC50b3gtcG9wLS1pbnNldDo6YmVmb3Jle29wYWNpdHk6MDt0cmFuc2l0aW9uOmFsbCAwcyAuMTVzLHZpc2liaWxpdHkgMHMsb3BhY2l0eSA3NW1zIGVhc2V9LnRveCAudG94LXBvcC50b3gtcG9wLS1ib3R0b206OmFmdGVyLC50b3ggLnRveC1wb3AudG94LXBvcC0tYm90dG9tOjpiZWZvcmV7bGVmdDo1MCU7dG9wOjEwMCV9LnRveCAudG94LXBvcC50b3gtcG9wLS1ib3R0b206OmFmdGVye2JvcmRlci1jb2xvcjojZmZmIHRyYW5zcGFyZW50IHRyYW5zcGFyZW50IHRyYW5zcGFyZW50O2JvcmRlci13aWR0aDo4cHg7bWFyZ2luLWxlZnQ6LThweDttYXJnaW4tdG9wOi0xcHh9LnRveCAudG94LXBvcC50b3gtcG9wLS1ib3R0b206OmJlZm9yZXtib3JkZXItY29sb3I6I2NjYyB0cmFuc3BhcmVudCB0cmFuc3BhcmVudCB0cmFuc3BhcmVudDtib3JkZXItd2lkdGg6OXB4O21hcmdpbi1sZWZ0Oi05cHh9LnRveCAudG94LXBvcC50b3gtcG9wLS10b3A6OmFmdGVyLC50b3ggLnRveC1wb3AudG94LXBvcC0tdG9wOjpiZWZvcmV7bGVmdDo1MCU7dG9wOjA7dHJhbnNmb3JtOnRyYW5zbGF0ZVkoLTEwMCUpfS50b3ggLnRveC1wb3AudG94LXBvcC0tdG9wOjphZnRlcntib3JkZXItY29sb3I6dHJhbnNwYXJlbnQgdHJhbnNwYXJlbnQgI2ZmZiB0cmFuc3BhcmVudDtib3JkZXItd2lkdGg6OHB4O21hcmdpbi1sZWZ0Oi04cHg7bWFyZ2luLXRvcDoxcHh9LnRveCAudG94LXBvcC50b3gtcG9wLS10b3A6OmJlZm9yZXtib3JkZXItY29sb3I6dHJhbnNwYXJlbnQgdHJhbnNwYXJlbnQgI2NjYyB0cmFuc3BhcmVudDtib3JkZXItd2lkdGg6OXB4O21hcmdpbi1sZWZ0Oi05cHh9LnRveCAudG94LXBvcC50b3gtcG9wLS1sZWZ0OjphZnRlciwudG94IC50b3gtcG9wLnRveC1wb3AtLWxlZnQ6OmJlZm9yZXtsZWZ0OjA7dG9wOmNhbGMoNTAlIC0gMXB4KTt0cmFuc2Zvcm06dHJhbnNsYXRlWSgtNTAlKX0udG94IC50b3gtcG9wLnRveC1wb3AtLWxlZnQ6OmFmdGVye2JvcmRlci1jb2xvcjp0cmFuc3BhcmVudCAjZmZmIHRyYW5zcGFyZW50IHRyYW5zcGFyZW50O2JvcmRlci13aWR0aDo4cHg7bWFyZ2luLWxlZnQ6LTE1cHh9LnRveCAudG94LXBvcC50b3gtcG9wLS1sZWZ0OjpiZWZvcmV7Ym9yZGVyLWNvbG9yOnRyYW5zcGFyZW50ICNjY2MgdHJhbnNwYXJlbnQgdHJhbnNwYXJlbnQ7Ym9yZGVyLXdpZHRoOjEwcHg7bWFyZ2luLWxlZnQ6LTE5cHh9LnRveCAudG94LXBvcC50b3gtcG9wLS1yaWdodDo6YWZ0ZXIsLnRveCAudG94LXBvcC50b3gtcG9wLS1yaWdodDo6YmVmb3Jle2xlZnQ6MTAwJTt0b3A6Y2FsYyg1MCUgKyAxcHgpO3RyYW5zZm9ybTp0cmFuc2xhdGVZKC01MCUpfS50b3ggLnRveC1wb3AudG94LXBvcC0tcmlnaHQ6OmFmdGVye2JvcmRlci1jb2xvcjp0cmFuc3BhcmVudCB0cmFuc3BhcmVudCB0cmFuc3BhcmVudCAjZmZmO2JvcmRlci13aWR0aDo4cHg7bWFyZ2luLWxlZnQ6LTFweH0udG94IC50b3gtcG9wLnRveC1wb3AtLXJpZ2h0OjpiZWZvcmV7Ym9yZGVyLWNvbG9yOnRyYW5zcGFyZW50IHRyYW5zcGFyZW50IHRyYW5zcGFyZW50ICNjY2M7Ym9yZGVyLXdpZHRoOjEwcHg7bWFyZ2luLWxlZnQ6LTFweH0udG94IC50b3gtcG9wLnRveC1wb3AtLWFsaWduLWxlZnQ6OmFmdGVyLC50b3ggLnRveC1wb3AudG94LXBvcC0tYWxpZ24tbGVmdDo6YmVmb3Jle2xlZnQ6MjBweH0udG94IC50b3gtcG9wLnRveC1wb3AtLWFsaWduLXJpZ2h0OjphZnRlciwudG94IC50b3gtcG9wLnRveC1wb3AtLWFsaWduLXJpZ2h0OjpiZWZvcmV7bGVmdDpjYWxjKDEwMCUgLSAyMHB4KX0udG94IC50b3gtc2lkZWJhci13cmFwe2Rpc3BsYXk6ZmxleDtmbGV4LWRpcmVjdGlvbjpyb3c7ZmxleC1ncm93OjE7LW1zLWZsZXgtcHJlZmVycmVkLXNpemU6MDttaW4taGVpZ2h0OjB9LnRveCAudG94LXNpZGViYXJ7YmFja2dyb3VuZC1jb2xvcjojZmZmO2Rpc3BsYXk6ZmxleDtmbGV4LWRpcmVjdGlvbjpyb3c7anVzdGlmeS1jb250ZW50OmZsZXgtZW5kfS50b3ggLnRveC1zaWRlYmFyX19zbGlkZXJ7ZGlzcGxheTpmbGV4O292ZXJmbG93OmhpZGRlbn0udG94IC50b3gtc2lkZWJhcl9fcGFuZS1jb250YWluZXJ7ZGlzcGxheTpmbGV4fS50b3ggLnRveC1zaWRlYmFyX19wYW5le2Rpc3BsYXk6ZmxleH0udG94IC50b3gtc2lkZWJhci0tc2xpZGluZy1jbG9zZWR7b3BhY2l0eTowfS50b3ggLnRveC1zaWRlYmFyLS1zbGlkaW5nLW9wZW57b3BhY2l0eToxfS50b3ggLnRveC1zaWRlYmFyLS1zbGlkaW5nLWdyb3dpbmcsLnRveCAudG94LXNpZGViYXItLXNsaWRpbmctc2hyaW5raW5ne3RyYW5zaXRpb246d2lkdGggLjVzIGVhc2Usb3BhY2l0eSAuNXMgZWFzZX0udG94IC50b3gtc2VsZWN0b3J7YmFja2dyb3VuZC1jb2xvcjojNDA5OWZmO2JvcmRlci1jb2xvcjojNDA5OWZmO2JvcmRlci1zdHlsZTpzb2xpZDtib3JkZXItd2lkdGg6MXB4O2JveC1zaXppbmc6Ym9yZGVyLWJveDtkaXNwbGF5OmlubGluZS1ibG9jaztoZWlnaHQ6MTBweDtwb3NpdGlvbjphYnNvbHV0ZTt3aWR0aDoxMHB4fS50b3gudG94LXBsYXRmb3JtLXRvdWNoIC50b3gtc2VsZWN0b3J7aGVpZ2h0OjEycHg7d2lkdGg6MTJweH0udG94IC50b3gtc2xpZGVye2FsaWduLWl0ZW1zOmNlbnRlcjtkaXNwbGF5OmZsZXg7ZmxleDoxOy1tcy1mbGV4LXByZWZlcnJlZC1zaXplOmF1dG87aGVpZ2h0OjI0cHg7anVzdGlmeS1jb250ZW50OmNlbnRlcjtwb3NpdGlvbjpyZWxhdGl2ZX0udG94IC50b3gtc2xpZGVyX19yYWlse2JhY2tncm91bmQtY29sb3I6dHJhbnNwYXJlbnQ7Ym9yZGVyOjFweCBzb2xpZCAjY2NjO2JvcmRlci1yYWRpdXM6M3B4O2hlaWdodDoxMHB4O21pbi13aWR0aDoxMjBweDt3aWR0aDoxMDAlfS50b3ggLnRveC1zbGlkZXJfX2hhbmRsZXtiYWNrZ3JvdW5kLWNvbG9yOiMyMDdhYjc7Ym9yZGVyOjJweCBzb2xpZCAjMTg1ZDhjO2JvcmRlci1yYWRpdXM6M3B4O2JveC1zaGFkb3c6bm9uZTtoZWlnaHQ6MjRweDtsZWZ0OjUwJTtwb3NpdGlvbjphYnNvbHV0ZTt0b3A6NTAlO3RyYW5zZm9ybTp0cmFuc2xhdGVYKC01MCUpIHRyYW5zbGF0ZVkoLTUwJSk7d2lkdGg6MTRweH0udG94IC50b3gtc291cmNlLWNvZGV7b3ZlcmZsb3c6YXV0b30udG94IC50b3gtc3Bpbm5lcntkaXNwbGF5OmZsZXh9LnRveCAudG94LXNwaW5uZXI+ZGl2e2FuaW1hdGlvbjp0YW0tYm91bmNpbmctZG90cyAxLjVzIGVhc2UtaW4tb3V0IDBzIGluZmluaXRlIGJvdGg7YmFja2dyb3VuZC1jb2xvcjpyZ2JhKDM0LDQ3LDYyLC43KTtib3JkZXItcmFkaXVzOjEwMCU7aGVpZ2h0OjhweDt3aWR0aDo4cHh9LnRveCAudG94LXNwaW5uZXI+ZGl2Om50aC1jaGlsZCgxKXthbmltYXRpb24tZGVsYXk6LS4zMnN9LnRveCAudG94LXNwaW5uZXI+ZGl2Om50aC1jaGlsZCgyKXthbmltYXRpb24tZGVsYXk6LS4xNnN9QGtleWZyYW1lcyB0YW0tYm91bmNpbmctZG90c3swJSwxMDAlLDgwJXt0cmFuc2Zvcm06c2NhbGUoMCl9NDAle3RyYW5zZm9ybTpzY2FsZSgxKX19LnRveDpub3QoW2Rpcj1ydGxdKSAudG94LXNwaW5uZXI+ZGl2Om5vdCg6Zmlyc3QtY2hpbGQpe21hcmdpbi1sZWZ0OjRweH0udG94W2Rpcj1ydGxdIC50b3gtc3Bpbm5lcj5kaXY6bm90KDpmaXJzdC1jaGlsZCl7bWFyZ2luLXJpZ2h0OjRweH0udG94IC50b3gtc3RhdHVzYmFye2FsaWduLWl0ZW1zOmNlbnRlcjtiYWNrZ3JvdW5kLWNvbG9yOiNmZmY7Ym9yZGVyLXRvcDoxcHggc29saWQgI2NjYztjb2xvcjpyZ2JhKDM0LDQ3LDYyLC43KTtkaXNwbGF5OmZsZXg7ZmxleDowIDAgYXV0bztmb250LXNpemU6MTJweDtmb250LXdlaWdodDo0MDA7aGVpZ2h0OjE4cHg7b3ZlcmZsb3c6aGlkZGVuO3BhZGRpbmc6MCA4cHg7cG9zaXRpb246cmVsYXRpdmU7dGV4dC10cmFuc2Zvcm06dXBwZXJjYXNlfS50b3ggLnRveC1zdGF0dXNiYXJfX3RleHQtY29udGFpbmVye2Rpc3BsYXk6ZmxleDtmbGV4OjEgMSBhdXRvO2p1c3RpZnktY29udGVudDpmbGV4LWVuZDtvdmVyZmxvdzpoaWRkZW59LnRveCAudG94LXN0YXR1c2Jhcl9fcGF0aHtkaXNwbGF5OmZsZXg7ZmxleDoxIDEgYXV0bzttYXJnaW4tcmlnaHQ6YXV0bztvdmVyZmxvdzpoaWRkZW47dGV4dC1vdmVyZmxvdzplbGxpcHNpczt3aGl0ZS1zcGFjZTpub3dyYXB9LnRveCAudG94LXN0YXR1c2Jhcl9fcGF0aD4qe2Rpc3BsYXk6aW5saW5lO3doaXRlLXNwYWNlOm5vd3JhcH0udG94IC50b3gtc3RhdHVzYmFyX193b3JkY291bnR7ZmxleDowIDAgYXV0bzttYXJnaW4tbGVmdDoxY2h9LnRveCAudG94LXN0YXR1c2JhciBhLC50b3ggLnRveC1zdGF0dXNiYXJfX3BhdGgtaXRlbSwudG94IC50b3gtc3RhdHVzYmFyX193b3JkY291bnR7Y29sb3I6cmdiYSgzNCw0Nyw2MiwuNyk7dGV4dC1kZWNvcmF0aW9uOm5vbmV9LnRveCAudG94LXN0YXR1c2JhciBhOmZvY3VzOm5vdCg6ZGlzYWJsZWQpOm5vdChbYXJpYS1kaXNhYmxlZD10cnVlXSksLnRveCAudG94LXN0YXR1c2JhciBhOmhvdmVyOm5vdCg6ZGlzYWJsZWQpOm5vdChbYXJpYS1kaXNhYmxlZD10cnVlXSksLnRveCAudG94LXN0YXR1c2Jhcl9fcGF0aC1pdGVtOmZvY3VzOm5vdCg6ZGlzYWJsZWQpOm5vdChbYXJpYS1kaXNhYmxlZD10cnVlXSksLnRveCAudG94LXN0YXR1c2Jhcl9fcGF0aC1pdGVtOmhvdmVyOm5vdCg6ZGlzYWJsZWQpOm5vdChbYXJpYS1kaXNhYmxlZD10cnVlXSksLnRveCAudG94LXN0YXR1c2Jhcl9fd29yZGNvdW50OmZvY3VzOm5vdCg6ZGlzYWJsZWQpOm5vdChbYXJpYS1kaXNhYmxlZD10cnVlXSksLnRveCAudG94LXN0YXR1c2Jhcl9fd29yZGNvdW50OmhvdmVyOm5vdCg6ZGlzYWJsZWQpOm5vdChbYXJpYS1kaXNhYmxlZD10cnVlXSl7Y3Vyc29yOnBvaW50ZXI7dGV4dC1kZWNvcmF0aW9uOnVuZGVybGluZX0udG94IC50b3gtc3RhdHVzYmFyX19yZXNpemUtaGFuZGxle2FsaWduLWl0ZW1zOmZsZXgtZW5kO2FsaWduLXNlbGY6c3RyZXRjaDtjdXJzb3I6bndzZS1yZXNpemU7ZGlzcGxheTpmbGV4O2ZsZXg6MCAwIGF1dG87anVzdGlmeS1jb250ZW50OmZsZXgtZW5kO21hcmdpbi1sZWZ0OmF1dG87bWFyZ2luLXJpZ2h0Oi04cHg7cGFkZGluZy1sZWZ0OjFjaH0udG94IC50b3gtc3RhdHVzYmFyX19yZXNpemUtaGFuZGxlIHN2Z3tkaXNwbGF5OmJsb2NrO2ZpbGw6cmdiYSgzNCw0Nyw2MiwuNyl9LnRveCAudG94LXN0YXR1c2Jhcl9fcmVzaXplLWhhbmRsZTpmb2N1cyBzdmd7YmFja2dyb3VuZC1jb2xvcjojZGVlMGUyO2JvcmRlci1yYWRpdXM6MXB4O2JveC1zaGFkb3c6MCAwIDAgMnB4ICNkZWUwZTJ9LnRveDpub3QoW2Rpcj1ydGxdKSAudG94LXN0YXR1c2Jhcl9fcGF0aD4qe21hcmdpbi1yaWdodDo0cHh9LnRveDpub3QoW2Rpcj1ydGxdKSAudG94LXN0YXR1c2Jhcl9fYnJhbmRpbmd7bWFyZ2luLWxlZnQ6MWNofS50b3hbZGlyPXJ0bF0gLnRveC1zdGF0dXNiYXJ7ZmxleC1kaXJlY3Rpb246cm93LXJldmVyc2V9LnRveFtkaXI9cnRsXSAudG94LXN0YXR1c2Jhcl9fcGF0aD4qe21hcmdpbi1sZWZ0OjRweH0udG94IC50b3gtdGhyb2JiZXJ7ei1pbmRleDoxMjk5fS50b3ggLnRveC10aHJvYmJlcl9fYnVzeS1zcGlubmVye2FsaWduLWl0ZW1zOmNlbnRlcjtiYWNrZ3JvdW5kLWNvbG9yOnJnYmEoMjU1LDI1NSwyNTUsLjYpO2JvdHRvbTowO2Rpc3BsYXk6ZmxleDtqdXN0aWZ5LWNvbnRlbnQ6Y2VudGVyO2xlZnQ6MDtwb3NpdGlvbjphYnNvbHV0ZTtyaWdodDowO3RvcDowfS50b3ggLnRveC10YnRue2FsaWduLWl0ZW1zOmNlbnRlcjtiYWNrZ3JvdW5kOjAgMDtib3JkZXI6MDtib3JkZXItcmFkaXVzOjNweDtib3gtc2hhZG93Om5vbmU7Y29sb3I6IzIyMmYzZTtkaXNwbGF5OmZsZXg7ZmxleDowIDAgYXV0bztmb250LXNpemU6MTRweDtmb250LXN0eWxlOm5vcm1hbDtmb250LXdlaWdodDo0MDA7aGVpZ2h0OjM0cHg7anVzdGlmeS1jb250ZW50OmNlbnRlcjttYXJnaW46MnB4IDAgM3B4IDA7b3V0bGluZTowO292ZXJmbG93OmhpZGRlbjtwYWRkaW5nOjA7dGV4dC10cmFuc2Zvcm06bm9uZTt3aWR0aDozNHB4fS50b3ggLnRveC10YnRuIHN2Z3tkaXNwbGF5OmJsb2NrO2ZpbGw6IzIyMmYzZX0udG94IC50b3gtdGJ0bi50b3gtdGJ0bi1tb3Jle3BhZGRpbmctbGVmdDo1cHg7cGFkZGluZy1yaWdodDo1cHg7d2lkdGg6aW5oZXJpdH0udG94IC50b3gtdGJ0bjpmb2N1c3tiYWNrZ3JvdW5kOiNkZWUwZTI7Ym9yZGVyOjA7Ym94LXNoYWRvdzpub25lfS50b3ggLnRveC10YnRuOmhvdmVye2JhY2tncm91bmQ6I2RlZTBlMjtib3JkZXI6MDtib3gtc2hhZG93Om5vbmU7Y29sb3I6IzIyMmYzZX0udG94IC50b3gtdGJ0bjpob3ZlciBzdmd7ZmlsbDojMjIyZjNlfS50b3ggLnRveC10YnRuOmFjdGl2ZXtiYWNrZ3JvdW5kOiNjOGNiY2Y7Ym9yZGVyOjA7Ym94LXNoYWRvdzpub25lO2NvbG9yOiMyMjJmM2V9LnRveCAudG94LXRidG46YWN0aXZlIHN2Z3tmaWxsOiMyMjJmM2V9LnRveCAudG94LXRidG4tLWRpc2FibGVkLC50b3ggLnRveC10YnRuLS1kaXNhYmxlZDpob3ZlciwudG94IC50b3gtdGJ0bjpkaXNhYmxlZCwudG94IC50b3gtdGJ0bjpkaXNhYmxlZDpob3ZlcntiYWNrZ3JvdW5kOjAgMDtib3JkZXI6MDtib3gtc2hhZG93Om5vbmU7Y29sb3I6cmdiYSgzNCw0Nyw2MiwuNSk7Y3Vyc29yOm5vdC1hbGxvd2VkfS50b3ggLnRveC10YnRuLS1kaXNhYmxlZCBzdmcsLnRveCAudG94LXRidG4tLWRpc2FibGVkOmhvdmVyIHN2ZywudG94IC50b3gtdGJ0bjpkaXNhYmxlZCBzdmcsLnRveCAudG94LXRidG46ZGlzYWJsZWQ6aG92ZXIgc3Zne2ZpbGw6cmdiYSgzNCw0Nyw2MiwuNSl9LnRveCAudG94LXRidG4tLWVuYWJsZWQsLnRveCAudG94LXRidG4tLWVuYWJsZWQ6aG92ZXJ7YmFja2dyb3VuZDojYzhjYmNmO2JvcmRlcjowO2JveC1zaGFkb3c6bm9uZTtjb2xvcjojMjIyZjNlfS50b3ggLnRveC10YnRuLS1lbmFibGVkOmhvdmVyPiosLnRveCAudG94LXRidG4tLWVuYWJsZWQ+Knt0cmFuc2Zvcm06bm9uZX0udG94IC50b3gtdGJ0bi0tZW5hYmxlZCBzdmcsLnRveCAudG94LXRidG4tLWVuYWJsZWQ6aG92ZXIgc3Zne2ZpbGw6IzIyMmYzZX0udG94IC50b3gtdGJ0bjpmb2N1czpub3QoLnRveC10YnRuLS1kaXNhYmxlZCl7Y29sb3I6IzIyMmYzZX0udG94IC50b3gtdGJ0bjpmb2N1czpub3QoLnRveC10YnRuLS1kaXNhYmxlZCkgc3Zne2ZpbGw6IzIyMmYzZX0udG94IC50b3gtdGJ0bjphY3RpdmU+Knt0cmFuc2Zvcm06bm9uZX0udG94IC50b3gtdGJ0bi0tbWR7aGVpZ2h0OjUxcHg7d2lkdGg6NTFweH0udG94IC50b3gtdGJ0bi0tbGd7ZmxleC1kaXJlY3Rpb246Y29sdW1uO2hlaWdodDo2OHB4O3dpZHRoOjY4cHh9LnRveCAudG94LXRidG4tLXJldHVybnstbXMtZ3JpZC1yb3ctYWxpZ246c3RyZXRjaDthbGlnbi1zZWxmOnN0cmV0Y2g7aGVpZ2h0OnVuc2V0O3dpZHRoOjE2cHh9LnRveCAudG94LXRidG4tLWxhYmVsZWR7cGFkZGluZzowIDRweDt3aWR0aDp1bnNldH0udG94IC50b3gtdGJ0bl9fdmxhYmVse2Rpc3BsYXk6YmxvY2s7Zm9udC1zaXplOjEwcHg7Zm9udC13ZWlnaHQ6NDAwO2xldHRlci1zcGFjaW5nOi0uMDI1ZW07bWFyZ2luLWJvdHRvbTo0cHg7d2hpdGUtc3BhY2U6bm93cmFwfS50b3ggLnRveC10YnRuLS1zZWxlY3R7bWFyZ2luOjJweCAwIDNweCAwO3BhZGRpbmc6MCA0cHg7d2lkdGg6YXV0b30udG94IC50b3gtdGJ0bl9fc2VsZWN0LWxhYmVse2N1cnNvcjpkZWZhdWx0O2ZvbnQtd2VpZ2h0OjQwMDttYXJnaW46MCA0cHh9LnRveCAudG94LXRidG5fX3NlbGVjdC1jaGV2cm9ue2FsaWduLWl0ZW1zOmNlbnRlcjtkaXNwbGF5OmZsZXg7anVzdGlmeS1jb250ZW50OmNlbnRlcjt3aWR0aDoxNnB4fS50b3ggLnRveC10YnRuX19zZWxlY3QtY2hldnJvbiBzdmd7ZmlsbDpyZ2JhKDM0LDQ3LDYyLC41KX0udG94IC50b3gtdGJ0bi0tYmVzcG9rZSAudG94LXRidG5fX3NlbGVjdC1sYWJlbHtvdmVyZmxvdzpoaWRkZW47dGV4dC1vdmVyZmxvdzplbGxpcHNpczt3aGl0ZS1zcGFjZTpub3dyYXA7d2lkdGg6N2VtfS50b3ggLnRveC1zcGxpdC1idXR0b257Ym9yZGVyOjA7Ym9yZGVyLXJhZGl1czozcHg7Ym94LXNpemluZzpib3JkZXItYm94O2Rpc3BsYXk6ZmxleDttYXJnaW46MnB4IDAgM3B4IDA7b3ZlcmZsb3c6aGlkZGVufS50b3ggLnRveC1zcGxpdC1idXR0b246aG92ZXJ7Ym94LXNoYWRvdzowIDAgMCAxcHggI2RlZTBlMiBpbnNldH0udG94IC50b3gtc3BsaXQtYnV0dG9uOmZvY3Vze2JhY2tncm91bmQ6I2RlZTBlMjtib3gtc2hhZG93Om5vbmU7Y29sb3I6IzIyMmYzZX0udG94IC50b3gtc3BsaXQtYnV0dG9uPip7Ym9yZGVyLXJhZGl1czowfS50b3ggLnRveC1zcGxpdC1idXR0b25fX2NoZXZyb257d2lkdGg6MTZweH0udG94IC50b3gtc3BsaXQtYnV0dG9uX19jaGV2cm9uIHN2Z3tmaWxsOnJnYmEoMzQsNDcsNjIsLjUpfS50b3ggLnRveC1zcGxpdC1idXR0b24gLnRveC10YnRue21hcmdpbjowfS50b3gudG94LXBsYXRmb3JtLXRvdWNoIC50b3gtc3BsaXQtYnV0dG9uIC50b3gtdGJ0bjpmaXJzdC1jaGlsZHt3aWR0aDozMHB4fS50b3gudG94LXBsYXRmb3JtLXRvdWNoIC50b3gtc3BsaXQtYnV0dG9uX19jaGV2cm9ue3dpZHRoOjIwcHh9LnRveCAudG94LXNwbGl0LWJ1dHRvbi50b3gtdGJ0bi0tZGlzYWJsZWQgLnRveC10YnRuOmZvY3VzLC50b3ggLnRveC1zcGxpdC1idXR0b24udG94LXRidG4tLWRpc2FibGVkIC50b3gtdGJ0bjpob3ZlciwudG94IC50b3gtc3BsaXQtYnV0dG9uLnRveC10YnRuLS1kaXNhYmxlZDpmb2N1cywudG94IC50b3gtc3BsaXQtYnV0dG9uLnRveC10YnRuLS1kaXNhYmxlZDpob3ZlcntiYWNrZ3JvdW5kOjAgMDtib3gtc2hhZG93Om5vbmU7Y29sb3I6cmdiYSgzNCw0Nyw2MiwuNSl9LnRveCAudG94LXRvb2xiYXItb3ZlcmxvcmR7YmFja2dyb3VuZC1jb2xvcjojZmZmfS50b3ggLnRveC10b29sYmFyLC50b3ggLnRveC10b29sYmFyX19vdmVyZmxvdywudG94IC50b3gtdG9vbGJhcl9fcHJpbWFyeXtiYWNrZ3JvdW5kOnVybChcImRhdGE6aW1hZ2Uvc3ZnK3htbDtjaGFyc2V0PXV0ZjgsJTNDc3ZnIGhlaWdodD0nMzlweCcgdmlld0JveD0nMCAwIDQwIDM5cHgnIHdpZHRoPSc0MCcgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJyUzRSUzQ3JlY3QgeD0nMCcgeT0nMzhweCcgd2lkdGg9JzEwMCcgaGVpZ2h0PScxJyBmaWxsPSclMjNjY2NjY2MnLyUzRSUzQy9zdmclM0VcIikgbGVmdCAwIHRvcCAwICNmZmY7YmFja2dyb3VuZC1jb2xvcjojZmZmO2Rpc3BsYXk6ZmxleDtmbGV4OjAgMCBhdXRvO2ZsZXgtc2hyaW5rOjA7ZmxleC13cmFwOndyYXA7cGFkZGluZzowIDB9LnRveCAudG94LXRvb2xiYXJfX292ZXJmbG93LnRveC10b29sYmFyX19vdmVyZmxvdy0tY2xvc2Vke2hlaWdodDowO29wYWNpdHk6MDtwYWRkaW5nLWJvdHRvbTowO3BhZGRpbmctdG9wOjA7dmlzaWJpbGl0eTpoaWRkZW59LnRveCAudG94LXRvb2xiYXJfX292ZXJmbG93LS1ncm93aW5ne3RyYW5zaXRpb246aGVpZ2h0IC4zcyBlYXNlLG9wYWNpdHkgLjJzIGxpbmVhciAuMXN9LnRveCAudG94LXRvb2xiYXJfX292ZXJmbG93LS1zaHJpbmtpbmd7dHJhbnNpdGlvbjpvcGFjaXR5IC4zcyBlYXNlLGhlaWdodCAuMnMgbGluZWFyIC4xcyx2aXNpYmlsaXR5IDBzIGxpbmVhciAuM3N9LnRveCAudG94LW1lbnViYXIrLnRveC10b29sYmFyLC50b3ggLnRveC1tZW51YmFyKy50b3gtdG9vbGJhci1vdmVybG9yZCAudG94LXRvb2xiYXJfX3ByaW1hcnl7Ym9yZGVyLXRvcDoxcHggc29saWQgI2NjYzttYXJnaW4tdG9wOi0xcHh9LnRveCAudG94LXRvb2xiYXItLXNjcm9sbGluZ3tmbGV4LXdyYXA6bm93cmFwO292ZXJmbG93LXg6YXV0b30udG94IC50b3gtcG9wIC50b3gtdG9vbGJhcntib3JkZXItd2lkdGg6MH0udG94IC50b3gtdG9vbGJhci0tbm8tZGl2aWRlcntiYWNrZ3JvdW5kLWltYWdlOm5vbmV9LnRveC10aW55bWNlOm5vdCgudG94LXRpbnltY2UtaW5saW5lKSAudG94LWVkaXRvci1oZWFkZXI6bm90KDpmaXJzdC1jaGlsZCkgLnRveC10b29sYmFyLW92ZXJsb3JkOmZpcnN0LWNoaWxkIC50b3gtdG9vbGJhcl9fcHJpbWFyeSwudG94LXRpbnltY2U6bm90KC50b3gtdGlueW1jZS1pbmxpbmUpIC50b3gtZWRpdG9yLWhlYWRlcjpub3QoOmZpcnN0LWNoaWxkKSAudG94LXRvb2xiYXI6Zmlyc3QtY2hpbGR7Ym9yZGVyLXRvcDoxcHggc29saWQgI2NjY30udG94LnRveC10aW55bWNlLWF1eCAudG94LXRvb2xiYXJfX292ZXJmbG93e2JhY2tncm91bmQtY29sb3I6I2ZmZjtib3JkZXI6MXB4IHNvbGlkICNjY2M7Ym9yZGVyLXJhZGl1czozcHg7Ym94LXNoYWRvdzowIDFweCAzcHggcmdiYSgwLDAsMCwuMTUpfS50b3ggLnRveC10b29sYmFyX19ncm91cHthbGlnbi1pdGVtczpjZW50ZXI7ZGlzcGxheTpmbGV4O2ZsZXgtd3JhcDp3cmFwO21hcmdpbjowIDA7cGFkZGluZzowIDRweCAwIDRweH0udG94IC50b3gtdG9vbGJhcl9fZ3JvdXAtLXB1bGwtcmlnaHR7bWFyZ2luLWxlZnQ6YXV0b30udG94IC50b3gtdG9vbGJhci0tc2Nyb2xsaW5nIC50b3gtdG9vbGJhcl9fZ3JvdXB7ZmxleC1zaHJpbms6MDtmbGV4LXdyYXA6bm93cmFwfS50b3g6bm90KFtkaXI9cnRsXSkgLnRveC10b29sYmFyX19ncm91cDpub3QoOmxhc3Qtb2YtdHlwZSl7Ym9yZGVyLXJpZ2h0OjFweCBzb2xpZCAjY2NjfS50b3hbZGlyPXJ0bF0gLnRveC10b29sYmFyX19ncm91cDpub3QoOmxhc3Qtb2YtdHlwZSl7Ym9yZGVyLWxlZnQ6MXB4IHNvbGlkICNjY2N9LnRveCAudG94LXRvb2x0aXB7ZGlzcGxheTppbmxpbmUtYmxvY2s7cGFkZGluZzo4cHg7cG9zaXRpb246cmVsYXRpdmV9LnRveCAudG94LXRvb2x0aXBfX2JvZHl7YmFja2dyb3VuZC1jb2xvcjojMjIyZjNlO2JvcmRlci1yYWRpdXM6M3B4O2JveC1zaGFkb3c6MCAycHggNHB4IHJnYmEoMzQsNDcsNjIsLjMpO2NvbG9yOnJnYmEoMjU1LDI1NSwyNTUsLjc1KTtmb250LXNpemU6MTRweDtmb250LXN0eWxlOm5vcm1hbDtmb250LXdlaWdodDo0MDA7cGFkZGluZzo0cHggOHB4O3RleHQtdHJhbnNmb3JtOm5vbmV9LnRveCAudG94LXRvb2x0aXBfX2Fycm93e3Bvc2l0aW9uOmFic29sdXRlfS50b3ggLnRveC10b29sdGlwLS1kb3duIC50b3gtdG9vbHRpcF9fYXJyb3d7Ym9yZGVyLWxlZnQ6OHB4IHNvbGlkIHRyYW5zcGFyZW50O2JvcmRlci1yaWdodDo4cHggc29saWQgdHJhbnNwYXJlbnQ7Ym9yZGVyLXRvcDo4cHggc29saWQgIzIyMmYzZTtib3R0b206MDtsZWZ0OjUwJTtwb3NpdGlvbjphYnNvbHV0ZTt0cmFuc2Zvcm06dHJhbnNsYXRlWCgtNTAlKX0udG94IC50b3gtdG9vbHRpcC0tdXAgLnRveC10b29sdGlwX19hcnJvd3tib3JkZXItYm90dG9tOjhweCBzb2xpZCAjMjIyZjNlO2JvcmRlci1sZWZ0OjhweCBzb2xpZCB0cmFuc3BhcmVudDtib3JkZXItcmlnaHQ6OHB4IHNvbGlkIHRyYW5zcGFyZW50O2xlZnQ6NTAlO3Bvc2l0aW9uOmFic29sdXRlO3RvcDowO3RyYW5zZm9ybTp0cmFuc2xhdGVYKC01MCUpfS50b3ggLnRveC10b29sdGlwLS1yaWdodCAudG94LXRvb2x0aXBfX2Fycm93e2JvcmRlci1ib3R0b206OHB4IHNvbGlkIHRyYW5zcGFyZW50O2JvcmRlci1sZWZ0OjhweCBzb2xpZCAjMjIyZjNlO2JvcmRlci10b3A6OHB4IHNvbGlkIHRyYW5zcGFyZW50O3Bvc2l0aW9uOmFic29sdXRlO3JpZ2h0OjA7dG9wOjUwJTt0cmFuc2Zvcm06dHJhbnNsYXRlWSgtNTAlKX0udG94IC50b3gtdG9vbHRpcC0tbGVmdCAudG94LXRvb2x0aXBfX2Fycm93e2JvcmRlci1ib3R0b206OHB4IHNvbGlkIHRyYW5zcGFyZW50O2JvcmRlci1yaWdodDo4cHggc29saWQgIzIyMmYzZTtib3JkZXItdG9wOjhweCBzb2xpZCB0cmFuc3BhcmVudDtsZWZ0OjA7cG9zaXRpb246YWJzb2x1dGU7dG9wOjUwJTt0cmFuc2Zvcm06dHJhbnNsYXRlWSgtNTAlKX0udG94IC50b3gtd2VsbHtib3JkZXI6MXB4IHNvbGlkICNjY2M7Ym9yZGVyLXJhZGl1czozcHg7cGFkZGluZzo4cHg7d2lkdGg6MTAwJX0udG94IC50b3gtd2VsbD46Zmlyc3QtY2hpbGR7bWFyZ2luLXRvcDowfS50b3ggLnRveC13ZWxsPjpsYXN0LWNoaWxke21hcmdpbi1ib3R0b206MH0udG94IC50b3gtd2VsbD46b25seS1jaGlsZHttYXJnaW46MH0udG94IC50b3gtY3VzdG9tLWVkaXRvcntib3JkZXI6MXB4IHNvbGlkICNjY2M7Ym9yZGVyLXJhZGl1czozcHg7ZGlzcGxheTpmbGV4O2ZsZXg6MTtwb3NpdGlvbjpyZWxhdGl2ZX0udG94IC50b3gtZGlhbG9nLWxvYWRpbmc6OmJlZm9yZXtiYWNrZ3JvdW5kLWNvbG9yOnJnYmEoMCwwLDAsLjUpO2NvbnRlbnQ6XCJcIjtoZWlnaHQ6MTAwJTtwb3NpdGlvbjphYnNvbHV0ZTt3aWR0aDoxMDAlO3otaW5kZXg6MTAwMH0udG94IC50b3gtdGFie2N1cnNvcjpwb2ludGVyfS50b3ggLnRveC1kaWFsb2dfX2NvbnRlbnQtanN7ZGlzcGxheTpmbGV4O2ZsZXg6MTstbXMtZmxleC1wcmVmZXJyZWQtc2l6ZTphdXRvfS50b3ggLnRveC1kaWFsb2dfX2JvZHktY29udGVudCAudG94LWNvbGxlY3Rpb257ZGlzcGxheTpmbGV4O2ZsZXg6MTstbXMtZmxleC1wcmVmZXJyZWQtc2l6ZTphdXRvfS50b3ggLnRveC1pbWFnZS10b29scy1lZGl0LXBhbmVse2hlaWdodDo2MHB4fS50b3ggLnRveC1pbWFnZS10b29sc19fc2lkZWJhcntoZWlnaHQ6NjBweH1cbiJdLCJzb3VyY2VSb290IjoiIn0= */
      </style>
      <style id="kl-custom-fonts">
         @import 'https://fonts.googleapis.com/css2?family=Caveat:ital,wght@0,400&family=EB+Garamond:ital,wght@0,400&family=Inter:ital,wght@0,400;0,700;0,800&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Lato:ital,wght@0,400&family=Lobster:ital,wght@0,400&family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900&family=Oswald:ital,wght@0,400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Slabo+27px:ital,wght@0,400&display=swap';
         .kl-private-quill-wrapper-Lkqws1.kl-private-quill-wrapper-Lkqws1.kl-private-quill-wrapper-Lkqws1 .ql-font-caveat {font-family: 'Caveat'}
         .kl-private-quill-wrapper-Lkqws1.kl-private-quill-wrapper-Lkqws1.kl-private-quill-wrapper-Lkqws1 .ql-font-eb-garamond {font-family: 'EB Garamond'}
         .kl-private-quill-wrapper-Lkqws1.kl-private-quill-wrapper-Lkqws1.kl-private-quill-wrapper-Lkqws1 .ql-font-inter {font-family: 'Inter'}
         .kl-private-quill-wrapper-Lkqws1.kl-private-quill-wrapper-Lkqws1.kl-private-quill-wrapper-Lkqws1 .ql-font-kanit {font-family: 'Kanit'}
         .kl-private-quill-wrapper-Lkqws1.kl-private-quill-wrapper-Lkqws1.kl-private-quill-wrapper-Lkqws1 .ql-font-lato {font-family: 'Lato'}
         .kl-private-quill-wrapper-Lkqws1.kl-private-quill-wrapper-Lkqws1.kl-private-quill-wrapper-Lkqws1 .ql-font-lobster {font-family: 'Lobster'}
         .kl-private-quill-wrapper-Lkqws1.kl-private-quill-wrapper-Lkqws1.kl-private-quill-wrapper-Lkqws1 .ql-font-nunito-sans {font-family: 'Nunito Sans'}
         .kl-private-quill-wrapper-Lkqws1.kl-private-quill-wrapper-Lkqws1.kl-private-quill-wrapper-Lkqws1 .ql-font-oswald {font-family: 'Oswald'}
         .kl-private-quill-wrapper-Lkqws1.kl-private-quill-wrapper-Lkqws1.kl-private-quill-wrapper-Lkqws1 .ql-font-poppins {font-family: 'Poppins'}
         .kl-private-quill-wrapper-Lkqws1.kl-private-quill-wrapper-Lkqws1.kl-private-quill-wrapper-Lkqws1 .ql-font-slabo-27px {font-family: 'Slabo 27px'}
      </style>
      <style>
        body {
            font-family: proxima-nova,var(--typography-paragraph-font-family);
            font-weight: var(--typography-paragraph-font-weight);
            color: var(--typography-paragraph-color);
        }

        :root, ::after, ::before {
    --typography-color-primary-base: #373F47;
    --typography-color-primary-inverse: #FFFFFF;
    --typography-color-secondary-base: #606A72;
    --typography-color-secondary-inverse: #F6F8F9;
    --typography-color-link-base-base: #2B98D3;
    --typography-color-link-base-inverse: #2B98D3;
    --typography-color-link-hovered-base: #2B98D3;
    --typography-color-link-hovered-inverse: #2B98D3;
    --typography-color-link-active-base: #2B98D3;
    --typography-color-link-active-inverse: #2B98D3;
    --typography-color-link-visited-base: #2B98D3;
    --typography-color-link-visited-inverse: #2B98D3;
    --typography-color-link-disabled-base: #91979F;
    --typography-color-link-disabled-inverse: #F2F4F5;
    --typography-color-negative-base: #D0331F;
    --typography-color-negative-inverse: #D0331F;
    --typography-display1-font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif;
    --typography-display1-font-size: 5rem;
    --typography-display1-line-height: 5.5rem;
    --typography-display1-font-weight: 400;
    --typography-display2-font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif;
    --typography-display2-font-size: 4rem;
    --typography-display2-line-height: 4.5rem;
    --typography-display2-font-weight: 400;
    --typography-display3-font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif;
    --typography-display3-font-size: 3rem;
    --typography-display3-line-height: 3.5rem;
    --typography-display3-font-weight: 400;
    --typography-heading1-font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif;
    --typography-heading1-font-size: 2.5rem;
    --typography-heading1-line-height: 3rem;
    --typography-heading1-font-weight: 400;
    --typography-heading2-font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif;
    --typography-heading2-mono-font-family: ui-monospace,Menlo,Monaco,"Cascadia Mono","Segoe UI Mono","Roboto Mono","Oxygen Mono","Ubuntu Monospace","Cantarell","Source Code Pro","Fira Mono","Droid Sans Mono","Courier New",monospace;
    --typography-heading2-font-size: 2.25rem;
    --typography-heading2-line-height: 2.75rem;
    --typography-heading2-font-weight: 400;
    --typography-heading2-mono-font-weight: 500;
    --typography-heading3-font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif;
    --typography-heading3-mono-font-family: ui-monospace,Menlo,Monaco,"Cascadia Mono","Segoe UI Mono","Roboto Mono","Oxygen Mono","Ubuntu Monospace","Cantarell","Source Code Pro","Fira Mono","Droid Sans Mono","Courier New",monospace;
    --typography-heading3-font-size: 2rem;
    --typography-heading3-line-height: 2.5rem;
    --typography-heading3-font-weight: 400;
    --typography-heading3-mono-font-weight: 700;
    --typography-heading4-font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif;
    --typography-heading4-font-size: 1.5rem;
    --typography-heading4-line-height: 2rem;
    --typography-heading4-font-weight: 400;
    --typography-heading5-font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif;
    --typography-heading5-font-size: 1.25rem;
    --typography-heading5-line-height: 1.75rem;
    --typography-heading5-font-weight: 700;
    --typography-heading6-font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif;
    --typography-heading6-font-size: 1rem;
    --typography-heading6-line-height: 1.5rem;
    --typography-heading6-font-weight: 700;
    --typography-paragraph-font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif;
    --typography-paragraph-font-size: 1rem;
    --typography-paragraph-line-height: 1.5rem;
    --typography-paragraph-emphasis-font-weight: 600;
    --typography-paragraph-font-weight: 400;
    --typography-UI1-font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif;
    --typography-UI1-mono-font-family: ui-monospace,Menlo,Monaco,"Cascadia Mono","Segoe UI Mono","Roboto Mono","Oxygen Mono","Ubuntu Monospace","Cantarell","Source Code Pro","Fira Mono","Droid Sans Mono","Courier New",monospace;
    --typography-UI1-font-size: 1rem;
    --typography-UI1-line-height: 1.5rem;
    --typography-UI1-emphasis-font-weight: 500;
    --typography-UI1-font-weight: 400;
    --typography-UI2-font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif;
    --typography-UI2-mono-font-family: ui-monospace,Menlo,Monaco,"Cascadia Mono","Segoe UI Mono","Roboto Mono","Oxygen Mono","Ubuntu Monospace","Cantarell","Source Code Pro","Fira Mono","Droid Sans Mono","Courier New",monospace;
    --typography-UI2-font-size: 0.875rem;
    --typography-UI2-line-height: 1.25rem;
    --typography-UI2-emphasis-font-weight: 500;
    --typography-UI2-font-weight: 400;
    --typography-UI3-font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif;
    --typography-UI3-mono-font-family: ui-monospace,Menlo,Monaco,"Cascadia Mono","Segoe UI Mono","Roboto Mono","Oxygen Mono","Ubuntu Monospace","Cantarell","Source Code Pro","Fira Mono","Droid Sans Mono","Courier New",monospace;
    --typography-UI3-font-size: 0.75rem;
    --typography-UI3-line-height: 1rem;
    --typography-UI3-emphasis-font-weight: 500;
    --typography-UI3-font-weight: 400;
    --color-background-default-base: #FFFFFF;
    --color-background-default-focused: #FFFFFF;
    --color-background-default-hovered: #FFFFFF;
    --color-background-default-pressed: #FFFFFF;
    --color-background-default-selected: #FFFFFF;
    --color-background-default-disabled: #EBEEEF;
    --color-background-primary-base: #2B98D3;
    --color-background-primary-focused: #1170A3;
    --color-background-primary-hovered: #1170A3;
    --color-background-primary-pressed: #184A65;
    --color-background-primary-selected: #184A65;
    --color-background-primary-disabled: #94CBE8;
    --color-background-secondary-base: #DFE3E6;
    --color-background-secondary-focused: #B4BBC3;
    --color-background-secondary-hovered: #B4BBC3;
    --color-background-secondary-pressed: #606A72;
    --color-background-secondary-selected: #606A72;
    --color-background-secondary-disabled: #EBEEEF;
    --color-background-tertiary-base: #FFFFFF;
    --color-background-tertiary-focused: #B4BBC3;
    --color-background-tertiary-hovered: #B4BBC3;
    --color-background-tertiary-pressed: #91979F;
    --color-background-tertiary-selected: #91979F;
    --color-background-tertiary-disabled: #FFFFFF;
    --color-background-neutral-emphasis-base: #91979F;
    --color-background-neutral-emphasis-focused: #606A72;
    --color-background-neutral-emphasis-hovered: #606A72;
    --color-background-neutral-emphasis-pressed: #373F47;
    --color-background-neutral-emphasis-selected: #373F47;
    --color-background-neutral-emphasis-disabled: #DFE3E6;
    --color-background-neutral-subtle-base: #F2F4F5;
    --color-background-neutral-subtle-focused: #DFE3E6;
    --color-background-neutral-subtle-hovered: #DFE3E6;
    --color-background-neutral-subtle-pressed: #B4BBC3;
    --color-background-neutral-subtle-selected: #B4BBC3;
    --color-background-neutral-subtle-disabled: #F6F8F9;
    --color-background-positive-emphasis-base: #24CE78;
    --color-background-positive-emphasis-focused: #2CB46F;
    --color-background-positive-emphasis-hovered: #2CB46F;
    --color-background-positive-emphasis-pressed: #26915B;
    --color-background-positive-emphasis-selected: #000000;
    --color-background-positive-emphasis-disabled: #9EEFC6;
    --color-background-positive-subtle-base: #E8FFF3;
    --color-background-positive-subtle-focused: #9EEFC6;
    --color-background-positive-subtle-hovered: #9EEFC6;
    --color-background-positive-subtle-pressed: #24CE78;
    --color-background-positive-subtle-selected: #24CE78;
    --color-background-positive-subtle-disabled: #E8FFF3;
    --color-background-positive-state-base: #FFFFFF;
    --color-background-negative-emphasis-base: #D0331F;
    --color-background-negative-emphasis-focused: #AD2A1A;
    --color-background-negative-emphasis-hovered: #AD2A1A;
    --color-background-negative-emphasis-pressed: #901E10;
    --color-background-negative-emphasis-selected: #901E10;
    --color-background-negative-emphasis-disabled: #E89D93;
    --color-background-negative-subtle-base: #FFEBE8;
    --color-background-negative-subtle-focused: #E89D93;
    --color-background-negative-subtle-hovered: #E89D93;
    --color-background-negative-subtle-pressed: #D0331F;
    --color-background-negative-subtle-selected: #D0331F;
    --color-background-negative-subtle-disabled: #FFEBE8;
    --color-background-negative-state-base: #FFFFFF;
    --color-background-attention-emphasis-base: #F8BE00;
    --color-background-attention-emphasis-focused: #CEA214;
    --color-background-attention-emphasis-hovered: #CEA214;
    --color-background-attention-emphasis-pressed: #91761F;
    --color-background-attention-emphasis-selected: #91761F;
    --color-background-attention-emphasis-disabled: #FFE388;
    --color-background-attention-subtle-base: #FFF9E4;
    --color-background-attention-subtle-focused: #FFE388;
    --color-background-attention-subtle-hovered: #FFE388;
    --color-background-attention-subtle-pressed: #F8BE00;
    --color-background-attention-subtle-selected: #F8BE00;
    --color-background-attention-subtle-disabled: #FFF9E4;
    --color-background-attention-state-base: #FFFFFF;
    --color-background-info-emphasis-base: #1170A3;
    --color-background-info-emphasis-focused: #184A65;
    --color-background-info-emphasis-hovered: #184A65;
    --color-background-info-emphasis-pressed: #184A65;
    --color-background-info-emphasis-selected: #184A65;
    --color-background-info-emphasis-disabled: #94CBE8;
    --color-background-info-subtle-base: #EAF8FF;
    --color-background-info-subtle-focused: #D7F0FD;
    --color-background-info-subtle-hovered: #D7F0FD;
    --color-background-info-subtle-pressed: #94CBE8;
    --color-background-info-subtle-selected: #94CBE8;
    --color-background-info-subtle-disabled: #F6F8F9;
    --color-background-inverse-base: #232426;
    --color-background-inverse-focused: #3D3E3F;
    --color-background-inverse-hovered: #3D3E3F;
    --color-background-inverse-pressed: #4B4B4D;
    --color-background-inverse-selected: #FFFFFF;
    --color-background-inverse-disabled: #3D3E3F;
    --color-border-default-base: #91979F;
    --color-border-default-focused: #2B98D3;
    --color-border-default-hovered: #2B98D3;
    --color-border-default-pressed: #91979F;
    --color-border-default-selected: #91979F;
    --color-border-default-disabled: #91979F;
    --color-border-primary-base: #2B98D3;
    --color-border-primary-focused: #1170A3;
    --color-border-primary-hovered: #1170A3;
    --color-border-primary-pressed: #184A65;
    --color-border-primary-selected: #184A65;
    --color-border-primary-disabled: #94CBE8;
    --color-border-secondary-base: #DFE3E6;
    --color-border-secondary-focused: #B4BBC3;
    --color-border-secondary-hovered: #B4BBC3;
    --color-border-secondary-pressed: #606A72;
    --color-border-secondary-selected: #606A72;
    --color-border-secondary-disabled: #EBEEEF;
    --color-border-tertiary-base: #B4BBC3;
    --color-border-tertiary-focused: #B4BBC3;
    --color-border-tertiary-hovered: #B4BBC3;
    --color-border-tertiary-pressed: #91979F;
    --color-border-tertiary-selected: #91979F;
    --color-border-tertiary-disabled: #DFE3E6;
    --color-border-neutral-emphasis-base: #91979F;
    --color-border-neutral-emphasis-focused: #606A72;
    --color-border-neutral-emphasis-hovered: #606A72;
    --color-border-neutral-emphasis-pressed: #373F47;
    --color-border-neutral-emphasis-selected: #373F47;
    --color-border-neutral-emphasis-disabled: #DFE3E6;
    --color-border-neutral-subtle-base: #DFE3E6;
    --color-border-neutral-subtle-focused: #B4BBC3;
    --color-border-neutral-subtle-hovered: #B4BBC3;
    --color-border-neutral-subtle-pressed: #606A72;
    --color-border-neutral-subtle-selected: #606A72;
    --color-border-neutral-subtle-disabled: #F6F8F9;
    --color-border-positive-emphasis-base: #24CE78;
    --color-border-positive-emphasis-focused: #2CB46F;
    --color-border-positive-emphasis-hovered: #2CB46F;
    --color-border-positive-emphasis-pressed: #26915B;
    --color-border-positive-emphasis-selected: #26915B;
    --color-border-positive-emphasis-disabled: #9EEFC6;
    --color-border-positive-subtle-base: #9EEFC6;
    --color-border-positive-subtle-focused: #24CE78;
    --color-border-positive-subtle-hovered: #24CE78;
    --color-border-positive-subtle-pressed: #2CB46F;
    --color-border-positive-subtle-selected: #2CB46F;
    --color-border-positive-subtle-disabled: #E8FFF3;
    --color-border-positive-state-base: #24CE78;
    --color-border-negative-emphasis-base: #D0331F;
    --color-border-negative-emphasis-focused: #AD2A1A;
    --color-border-negative-emphasis-hovered: #AD2A1A;
    --color-border-negative-emphasis-pressed: #901E10;
    --color-border-negative-emphasis-selected: #901E10;
    --color-border-negative-emphasis-disabled: #E89D93;
    --color-border-negative-subtle-base: #E89D93;
    --color-border-negative-subtle-focused: #AD2A1A;
    --color-border-negative-subtle-hovered: #AD2A1A;
    --color-border-negative-subtle-pressed: #901E10;
    --color-border-negative-subtle-selected: #901E10;
    --color-border-negative-subtle-disabled: #FFEBE8;
    --color-border-negative-state-base: #D0331F;
    --color-border-attention-emphasis-base: #F8BE00;
    --color-border-attention-emphasis-focused: #CEA214;
    --color-border-attention-emphasis-hovered: #CEA214;
    --color-border-attention-emphasis-pressed: #91761F;
    --color-border-attention-emphasis-selected: #91761F;
    --color-border-attention-emphasis-disabled: #FFE388;
    --color-border-attention-subtle-base: #FFE388;
    --color-border-attention-subtle-focused: #F8BE00;
    --color-border-attention-subtle-hovered: #F8BE00;
    --color-border-attention-subtle-pressed: #CEA214;
    --color-border-attention-subtle-selected: #CEA214;
    --color-border-attention-subtle-disabled: #FFF9E4;
    --color-border-attention-state-base: #F8BE00;
    --color-border-info-emphasis-base: #1170A3;
    --color-border-info-emphasis-focused: #184A65;
    --color-border-info-emphasis-hovered: #184A65;
    --color-border-info-emphasis-pressed: #184A65;
    --color-border-info-emphasis-selected: #184A65;
    --color-border-info-emphasis-disabled: #94CBE8;
    --color-border-info-subtle-base: #94CBE8;
    --color-border-info-subtle-focused: #2B98D3;
    --color-border-info-subtle-hovered: #2B98D3;
    --color-border-info-subtle-pressed: #2B98D3;
    --color-border-info-subtle-selected: #1170A3;
    --color-border-info-subtle-disabled: #F6F8F9;
    --color-border-inverse-base: #FFFFFF;
    --color-border-inverse-focused: #FFFFFF;
    --color-border-inverse-hovered: #FFFFFF;
    --color-border-inverse-pressed: #FFFFFF;
    --color-border-inverse-selected: #F3F3F4;
    --color-border-inverse-disabled: #3D3E3F;
    --color-data-categorical-10: #3373BA;
    --color-data-categorical-20: #56B58F;
    --color-data-categorical-30: #F2CB46;
    --color-data-categorical-40: #E88E47;
    --color-data-categorical-50: #449CE3;
    --color-data-categorical-60: #87D0B3;
    --color-data-categorical-70: #8F8BF3;
    --color-data-divergent-negative-10: #E89D93;
    --color-data-divergent-negative-20: #AD2A1A;
    --color-data-divergent-neutral: #E4E6EA;
    --color-data-divergent-positive-10: #9EEFC6;
    --color-data-divergent-positive-20: #24CE78;
    --color-foreground-default-base: #606A72;
    --color-foreground-default-focused: #606A72;
    --color-foreground-default-hovered: #606A72;
    --color-foreground-default-pressed: #606A72;
    --color-foreground-default-selected: #606A72;
    --color-foreground-default-disabled: #606A72;
    --color-foreground-primary-base: #FFFFFF;
    --color-foreground-primary-focused: #FFFFFF;
    --color-foreground-primary-hovered: #FFFFFF;
    --color-foreground-primary-pressed: #FFFFFF;
    --color-foreground-primary-selected: #FFFFFF;
    --color-foreground-primary-disabled: #FFFFFF;
    --color-foreground-secondary-base: #606A72;
    --color-foreground-secondary-focused: #FFFFFF;
    --color-foreground-secondary-hovered: #FFFFFF;
    --color-foreground-secondary-pressed: #FFFFFF;
    --color-foreground-secondary-selected: #FFFFFF;
    --color-foreground-secondary-disabled: #91979F;
    --color-foreground-tertiary-base: #606A72;
    --color-foreground-tertiary-focused: #FFFFFF;
    --color-foreground-tertiary-hovered: #FFFFFF;
    --color-foreground-tertiary-pressed: #FFFFFF;
    --color-foreground-tertiary-selected: #FFFFFF;
    --color-foreground-tertiary-disabled: #B4BBC3;
    --color-foreground-neutral-emphasis-base: #FFFFFF;
    --color-foreground-neutral-emphasis-focused: #FFFFFF;
    --color-foreground-neutral-emphasis-hovered: #FFFFFF;
    --color-foreground-neutral-emphasis-pressed: #FFFFFF;
    --color-foreground-neutral-emphasis-selected: #FFFFFF;
    --color-foreground-neutral-emphasis-disabled: #FFFFFF;
    --color-foreground-neutral-subtle-base: #606A72;
    --color-foreground-neutral-subtle-focused: #606A72;
    --color-foreground-neutral-subtle-hovered: #606A72;
    --color-foreground-neutral-subtle-pressed: #606A72;
    --color-foreground-neutral-subtle-selected: #606A72;
    --color-foreground-neutral-subtle-disabled: #B4BBC3;
    --color-foreground-positive-emphasis-base: #FFFFFF;
    --color-foreground-positive-emphasis-focused: #FFFFFF;
    --color-foreground-positive-emphasis-hovered: #FFFFFF;
    --color-foreground-positive-emphasis-pressed: #FFFFFF;
    --color-foreground-positive-emphasis-selected: #FFFFFF;
    --color-foreground-positive-emphasis-disabled: #FFFFFF;
    --color-foreground-positive-subtle-base: #24CE78;
    --color-foreground-positive-subtle-focused: #24CE78;
    --color-foreground-positive-subtle-hovered: #24CE78;
    --color-foreground-positive-subtle-pressed: #2CB46F;
    --color-foreground-positive-subtle-selected: #2CB46F;
    --color-foreground-positive-subtle-disabled: #9EEFC6;
    --color-foreground-positive-state-base: #606A72;
    --color-foreground-negative-emphasis-base: #FFFFFF;
    --color-foreground-negative-emphasis-focused: #FFFFFF;
    --color-foreground-negative-emphasis-hovered: #FFFFFF;
    --color-foreground-negative-emphasis-pressed: #FFFFFF;
    --color-foreground-negative-emphasis-selected: #FFFFFF;
    --color-foreground-negative-emphasis-disabled: #FFFFFF;
    --color-foreground-negative-subtle-base: #AD2A1A;
    --color-foreground-negative-subtle-focused: #AD2A1A;
    --color-foreground-negative-subtle-hovered: #AD2A1A;
    --color-foreground-negative-subtle-pressed: #901E10;
    --color-foreground-negative-subtle-selected: #901E10;
    --color-foreground-negative-subtle-disabled: #E89D93;
    --color-foreground-negative-state-base: #606A72;
    --color-foreground-attention-emphasis-base: #FFFFFF;
    --color-foreground-attention-emphasis-focused: #FFFFFF;
    --color-foreground-attention-emphasis-hovered: #FFFFFF;
    --color-foreground-attention-emphasis-pressed: #FFFFFF;
    --color-foreground-attention-emphasis-selected: #FFFFFF;
    --color-foreground-attention-emphasis-disabled: #FFFFFF;
    --color-foreground-attention-subtle-base: #F8BE00;
    --color-foreground-attention-subtle-focused: #F8BE00;
    --color-foreground-attention-subtle-hovered: #F8BE00;
    --color-foreground-attention-subtle-pressed: #CEA214;
    --color-foreground-attention-subtle-selected: #CEA214;
    --color-foreground-attention-subtle-disabled: #FFE388;
    --color-foreground-attention-state-base: #606A72;
    --color-foreground-info-emphasis-base: #FFFFFF;
    --color-foreground-info-emphasis-focused: #FFFFFF;
    --color-foreground-info-emphasis-hovered: #FFFFFF;
    --color-foreground-info-emphasis-pressed: #FFFFFF;
    --color-foreground-info-emphasis-selected: #FFFFFF;
    --color-foreground-info-emphasis-disabled: #FFFFFF;
    --color-foreground-info-subtle-base: #2B98D3;
    --color-foreground-info-subtle-focused: #1170A3;
    --color-foreground-info-subtle-hovered: #1170A3;
    --color-foreground-info-subtle-pressed: #1170A3;
    --color-foreground-info-subtle-selected: #1170A3;
    --color-foreground-info-subtle-disabled: #1170A3;
    --color-foreground-inverse-base: #FFFFFF;
    --color-foreground-inverse-focused: #FFFFFF;
    --color-foreground-inverse-hovered: #FFFFFF;
    --color-foreground-inverse-pressed: #FFFFFF;
    --color-foreground-inverse-selected: #232426;
    --color-foreground-inverse-disabled: #909192;
    --color-outline-default-focused: #94CBE866;
    --color-outline-negative-focused: #E89D93;
    --color-surface-app-background: #F6F8F9;
    --color-surface-app-frame: #FFFFFF;
    --color-surface-primary-base: #FFFFFF;
    --color-surface-primary-focused: #FFFFFF;
    --color-surface-primary-hovered: #F6F8F9;
    --color-surface-primary-pressed: #FFFFFF;
    --color-surface-primary-selected: #FFFFFF;
    --color-surface-primary-disabled: #FFFFFF;
    --color-surface-secondary-base: #F2F4F5;
    --color-surface-secondary-focused: #F2F4F5;
    --color-surface-secondary-hovered: #EBEEEF;
    --color-surface-secondary-pressed: #F2F4F5;
    --color-surface-secondary-selected: #F2F4F5;
    --color-surface-secondary-disabled: #F2F4F5;
    --color-surface-inverse: #373F47;
    --color-surface-overlay-emphasis: rgba(55,63,71,0.8);
    --color-surface-overlay-subtle: rgba(96,106,114,0.8);
    --color-surface-overlay-inverse: rgba(255,255,255,0.1);
    --elevation-shadow-100: rgba(55,63,71,5%) 0px 0px 0px 1px,rgba(55,63,71,16%) 0px 1px 4px;
    --elevation-shadow-200: rgba(55,63,71,8%) 0px 2px 8px,rgba(55,63,71,12%) 0px 1px 2px;
    --elevation-shadow-300: rgba(55,63,71,4%) 0px 0px 0px 1px,rgba(55,63,71,8%) 0px 4px 4px 0px,rgba(55,63,71,8%) 0px 8px 24px 0px;
    --elevation-shadow-400: rgba(55,63,71,15%) 0px 0px 0px 1px,rgba(55,63,71,15%) 0px 8px 16px;
    --elevation-shadow-500: rgba(55,63,71,20%) 0px 8px 16px 0px;
    --elevation-shadow-600: rgba(55,63,71,8%) 0px 0px 0px 2px,rgba(55,63,71,12%) 0px 8px 20px 0px,rgba(55,63,71,12%) 0px 16px 32px 0px;
    --elevation-shadow-700: rgba(55,63,71,8%) 0px 0px 0px 2px,rgba(55,63,71,14%) 0px 12px 24px 0px,rgba(55,63,71,16%) 0px 20px 48px 0px;
    --elevation-shadow-800: rgba(55,63,71,18%) 0px 4px 16px 0px,rgba(55,63,71,22%) 0px 24px 56px 0px;
    --elevation-zIndex-buried: -100;
    --elevation-zIndex-base: 0;
    --elevation-zIndex-xs: 101;
    --elevation-zIndex-sm: 200;
    --elevation-zIndex-md: 300;
    --elevation-zIndex-lg: 400;
    --elevation-zIndex-xl: 500;
    --unit-border-radius-none: 0;
    --unit-border-radius-xs: 2px;
    --unit-border-radius-sm: 4px;
    --unit-border-radius-md: 6px;
    --unit-border-radius-lg: 8px;
    --unit-border-radius-xl: 12px;
    --unit-border-radius-circle: 50%;
    --unit-border-radius-pill: 9999px;
    --unit-border-style-none: none;
    --unit-border-style-dashed: dashed;
    --unit-border-style-dotted: dotted;
    --unit-border-style-solid: solid;
    --unit-border-width-none: 0;
    --unit-border-width-xs: 1px;
    --unit-border-width-sm: 2px;
    --unit-border-width-md: 3px;
    --unit-border-width-lg: 4px;
    --unit-outline-style-none: none;
    --unit-outline-style-dashed: dashed;
    --unit-outline-style-dotted: dotted;
    --unit-outline-style-solid: solid;
    --unit-outline-width-none: 0;
    --unit-outline-width-xs: 1px;
    --unit-outline-width-sm: 2px;
    --unit-outline-width-md: 3px;
    --unit-outline-width-lg: 4px;
    --unit-width-xs-fluid-breakpoint-bottom: 0px;
    --unit-width-xs-fluid-breakpoint-top: 767px;
    --unit-width-xs-fluid-columns: 4;
    --unit-width-xs-fluid-margin: 1.5rem;
    --unit-width-xs-fluid-gutter: 1rem;
    --unit-width-sm-fluid-breakpoint-bottom: 768px;
    --unit-width-sm-fluid-breakpoint-top: 1279px;
    --unit-width-sm-fluid-columns: 6;
    --unit-width-sm-fluid-margin: 1.5rem;
    --unit-width-sm-fluid-gutter: 1rem;
    --unit-width-md-fluid-breakpoint-bottom: 1280px;
    --unit-width-md-fluid-breakpoint-top: 1759px;
    --unit-width-md-fluid-columns: 12;
    --unit-width-md-fluid-margin: 1.5rem;
    --unit-width-md-fluid-gutter: 1.5rem;
    --unit-width-md-fixed-breakpoint-bottom: 1280px;
    --unit-width-md-fixed-breakpoint-top: 1759px;
    --unit-width-md-fixed-columns: 12;
    --unit-width-md-fixed-margin: 1.5rem;
    --unit-width-md-fixed-gutter: 1.5rem;
    --unit-width-lg-fluid-breakpoint-bottom: 1760px;
    --unit-width-lg-fluid-breakpoint-top: 2159px;
    --unit-width-lg-fluid-columns: 16;
    --unit-width-lg-fluid-margin: 2rem;
    --unit-width-lg-fluid-gutter: 1.5rem;
    --unit-width-lg-fixed-breakpoint-bottom: 1760px;
    --unit-width-lg-fixed-breakpoint-top: 2159px;
    --unit-width-lg-fixed-columns: 12;
    --unit-width-lg-fixed-margin: 1.5rem;
    --unit-width-lg-fixed-gutter: 1.5rem;
    --unit-width-xl-fluid-breakpoint-bottom: 2160px;
    --unit-width-xl-fluid-breakpoint-top: 3199px;
    --unit-width-xl-fluid-columns: 16;
    --unit-width-xl-fluid-margin: 3rem;
    --unit-width-xl-fluid-gutter: 2rem;
    --unit-width-xl-fixed-breakpoint-bottom: 2160px;
    --unit-width-xl-fixed-breakpoint-top: 3199px;
    --unit-width-xl-fixed-columns: 12;
    --unit-width-xl-fixed-margin: 1.5rem;
    --unit-width-xl-fixed-gutter: 1.5rem;
    --unit-width-xxl-fluid-breakpoint-bottom: 3200px;
    --unit-width-xxl-fluid-columns: 16;
    --unit-width-xxl-fluid-margin: 2rem;
    --unit-width-xxl-fluid-gutter: 2rem;
    --unit-width-xxl-fixed-breakpoint-bottom: 3200px;
    --unit-width-xxl-fixed-columns: 12;
    --unit-width-xxl-fixed-margin: 1.5rem;
    --unit-width-xxl-fixed-gutter: 1.5rem;
    --unit-space-0: 0;
    --unit-space-12: 0.125rem;
    --unit-space-25: 0.25rem;
    --unit-space-50: 0.5rem;
    --unit-space-75: 0.75rem;
    --unit-space-100: 1rem;
    --unit-space-125: 1.25rem;
    --unit-space-150: 1.5rem;
    --unit-space-200: 2rem;
    --unit-space-225: 2.25rem;
    --unit-space-250: 2.5rem;
    --unit-space-275: 2.75rem;
    --unit-space-300: 3rem;
    --unit-space-350: 3.5rem;
    --unit-space-400: 4rem;
    --unit-space-450: 4.5rem;
    --unit-space-500: 5rem;
    --unit-space-600: 6rem;
    --unit-space-750: 7.5rem;
    --unit-space-1000: 10rem;
    --unit-size-control-xs: 1.25rem;
    --unit-size-control-sm: 1.5rem;
    --unit-size-control-md: 2rem;
    --unit-size-control-lg: 2.5rem;
    --unit-size-control-xl: 3rem;
    --unit-aspect-ratio-1x1: 1;
    --unit-aspect-ratio-3x2: 3 / 2;
    --unit-aspect-ratio-3x4: 3 / 4;
    --unit-aspect-ratio-4x5: 4 / 5;
}

:root, ::after, ::before {
    --typography-color-primary-base: #373F47;
    --typography-color-primary-inverse: #FFFFFF;
    --typography-color-secondary-base: #606A72;
    --typography-color-secondary-inverse: #F6F8F9;
    --typography-color-link-base-base: #2B98D3;
    --typography-color-link-base-inverse: #2B98D3;
    --typography-color-link-hovered-base: #2B98D3;
    --typography-color-link-hovered-inverse: #2B98D3;
    --typography-color-link-active-base: #2B98D3;
    --typography-color-link-active-inverse: #2B98D3;
    --typography-color-link-visited-base: #2B98D3;
    --typography-color-link-visited-inverse: #2B98D3;
    --typography-color-link-disabled-base: #91979F;
    --typography-color-link-disabled-inverse: #F2F4F5;
    --typography-color-negative-base: #D0331F;
    --typography-color-negative-inverse: #D0331F;
    --typography-display1-font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif;
    --typography-display1-font-size: 5rem;
    --typography-display1-line-height: 5.5rem;
    --typography-display1-font-weight: 400;
    --typography-display2-font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif;
    --typography-display2-font-size: 4rem;
    --typography-display2-line-height: 4.5rem;
    --typography-display2-font-weight: 400;
    --typography-display3-font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif;
    --typography-display3-font-size: 3rem;
    --typography-display3-line-height: 3.5rem;
    --typography-display3-font-weight: 400;
    --typography-heading1-font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif;
    --typography-heading1-font-size: 2.5rem;
    --typography-heading1-line-height: 3rem;
    --typography-heading1-font-weight: 400;
    --typography-heading2-font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif;
    --typography-heading2-mono-font-family: ui-monospace,Menlo,Monaco,"Cascadia Mono","Segoe UI Mono","Roboto Mono","Oxygen Mono","Ubuntu Monospace","Cantarell","Source Code Pro","Fira Mono","Droid Sans Mono","Courier New",monospace;
    --typography-heading2-font-size: 2.25rem;
    --typography-heading2-line-height: 2.75rem;
    --typography-heading2-font-weight: 400;
    --typography-heading2-mono-font-weight: 500;
    --typography-heading3-font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif;
    --typography-heading3-mono-font-family: ui-monospace,Menlo,Monaco,"Cascadia Mono","Segoe UI Mono","Roboto Mono","Oxygen Mono","Ubuntu Monospace","Cantarell","Source Code Pro","Fira Mono","Droid Sans Mono","Courier New",monospace;
    --typography-heading3-font-size: 2rem;
    --typography-heading3-line-height: 2.5rem;
    --typography-heading3-font-weight: 400;
    --typography-heading3-mono-font-weight: 700;
    --typography-heading4-font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif;
    --typography-heading4-font-size: 1.5rem;
    --typography-heading4-line-height: 2rem;
    --typography-heading4-font-weight: 400;
    --typography-heading5-font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif;
    --typography-heading5-font-size: 1.25rem;
    --typography-heading5-line-height: 1.75rem;
    --typography-heading5-font-weight: 700;
    --typography-heading6-font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif;
    --typography-heading6-font-size: 1rem;
    --typography-heading6-line-height: 1.5rem;
    --typography-heading6-font-weight: 700;
    --typography-paragraph-font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif;
    --typography-paragraph-font-size: 1rem;
    --typography-paragraph-line-height: 1.5rem;
    --typography-paragraph-emphasis-font-weight: 600;
    --typography-paragraph-font-weight: 400;
    --typography-UI1-font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif;
    --typography-UI1-mono-font-family: ui-monospace,Menlo,Monaco,"Cascadia Mono","Segoe UI Mono","Roboto Mono","Oxygen Mono","Ubuntu Monospace","Cantarell","Source Code Pro","Fira Mono","Droid Sans Mono","Courier New",monospace;
    --typography-UI1-font-size: 1rem;
    --typography-UI1-line-height: 1.5rem;
    --typography-UI1-emphasis-font-weight: 500;
    --typography-UI1-font-weight: 400;
    --typography-UI2-font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif;
    --typography-UI2-mono-font-family: ui-monospace,Menlo,Monaco,"Cascadia Mono","Segoe UI Mono","Roboto Mono","Oxygen Mono","Ubuntu Monospace","Cantarell","Source Code Pro","Fira Mono","Droid Sans Mono","Courier New",monospace;
    --typography-UI2-font-size: 0.875rem;
    --typography-UI2-line-height: 1.25rem;
    --typography-UI2-emphasis-font-weight: 500;
    --typography-UI2-font-weight: 400;
    --typography-UI3-font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",Arial,sans-serif;
    --typography-UI3-mono-font-family: ui-monospace,Menlo,Monaco,"Cascadia Mono","Segoe UI Mono","Roboto Mono","Oxygen Mono","Ubuntu Monospace","Cantarell","Source Code Pro","Fira Mono","Droid Sans Mono","Courier New",monospace;
    --typography-UI3-font-size: 0.75rem;
    --typography-UI3-line-height: 1rem;
    --typography-UI3-emphasis-font-weight: 500;
    --typography-UI3-font-weight: 400;
    --color-background-default-base: #FFFFFF;
    --color-background-default-focused: #FFFFFF;
    --color-background-default-hovered: #FFFFFF;
    --color-background-default-pressed: #FFFFFF;
    --color-background-default-selected: #FFFFFF;
    --color-background-default-disabled: #EBEEEF;
    --color-background-primary-base: #2B98D3;
    --color-background-primary-focused: #1170A3;
    --color-background-primary-hovered: #1170A3;
    --color-background-primary-pressed: #184A65;
    --color-background-primary-selected: #184A65;
    --color-background-primary-disabled: #94CBE8;
    --color-background-secondary-base: #DFE3E6;
    --color-background-secondary-focused: #B4BBC3;
    --color-background-secondary-hovered: #B4BBC3;
    --color-background-secondary-pressed: #606A72;
    --color-background-secondary-selected: #606A72;
    --color-background-secondary-disabled: #EBEEEF;
    --color-background-tertiary-base: #FFFFFF;
    --color-background-tertiary-focused: #B4BBC3;
    --color-background-tertiary-hovered: #B4BBC3;
    --color-background-tertiary-pressed: #91979F;
    --color-background-tertiary-selected: #91979F;
    --color-background-tertiary-disabled: #FFFFFF;
    --color-background-neutral-emphasis-base: #91979F;
    --color-background-neutral-emphasis-focused: #606A72;
    --color-background-neutral-emphasis-hovered: #606A72;
    --color-background-neutral-emphasis-pressed: #373F47;
    --color-background-neutral-emphasis-selected: #373F47;
    --color-background-neutral-emphasis-disabled: #DFE3E6;
    --color-background-neutral-subtle-base: #F2F4F5;
    --color-background-neutral-subtle-focused: #DFE3E6;
    --color-background-neutral-subtle-hovered: #DFE3E6;
    --color-background-neutral-subtle-pressed: #B4BBC3;
    --color-background-neutral-subtle-selected: #B4BBC3;
    --color-background-neutral-subtle-disabled: #F6F8F9;
    --color-background-positive-emphasis-base: #24CE78;
    --color-background-positive-emphasis-focused: #2CB46F;
    --color-background-positive-emphasis-hovered: #2CB46F;
    --color-background-positive-emphasis-pressed: #26915B;
    --color-background-positive-emphasis-selected: #000000;
    --color-background-positive-emphasis-disabled: #9EEFC6;
    --color-background-positive-subtle-base: #E8FFF3;
    --color-background-positive-subtle-focused: #9EEFC6;
    --color-background-positive-subtle-hovered: #9EEFC6;
    --color-background-positive-subtle-pressed: #24CE78;
    --color-background-positive-subtle-selected: #24CE78;
    --color-background-positive-subtle-disabled: #E8FFF3;
    --color-background-positive-state-base: #FFFFFF;
    --color-background-negative-emphasis-base: #D0331F;
    --color-background-negative-emphasis-focused: #AD2A1A;
    --color-background-negative-emphasis-hovered: #AD2A1A;
    --color-background-negative-emphasis-pressed: #901E10;
    --color-background-negative-emphasis-selected: #901E10;
    --color-background-negative-emphasis-disabled: #E89D93;
    --color-background-negative-subtle-base: #FFEBE8;
    --color-background-negative-subtle-focused: #E89D93;
    --color-background-negative-subtle-hovered: #E89D93;
    --color-background-negative-subtle-pressed: #D0331F;
    --color-background-negative-subtle-selected: #D0331F;
    --color-background-negative-subtle-disabled: #FFEBE8;
    --color-background-negative-state-base: #FFFFFF;
    --color-background-attention-emphasis-base: #F8BE00;
    --color-background-attention-emphasis-focused: #CEA214;
    --color-background-attention-emphasis-hovered: #CEA214;
    --color-background-attention-emphasis-pressed: #91761F;
    --color-background-attention-emphasis-selected: #91761F;
    --color-background-attention-emphasis-disabled: #FFE388;
    --color-background-attention-subtle-base: #FFF9E4;
    --color-background-attention-subtle-focused: #FFE388;
    --color-background-attention-subtle-hovered: #FFE388;
    --color-background-attention-subtle-pressed: #F8BE00;
    --color-background-attention-subtle-selected: #F8BE00;
    --color-background-attention-subtle-disabled: #FFF9E4;
    --color-background-attention-state-base: #FFFFFF;
    --color-background-info-emphasis-base: #1170A3;
    --color-background-info-emphasis-focused: #184A65;
    --color-background-info-emphasis-hovered: #184A65;
    --color-background-info-emphasis-pressed: #184A65;
    --color-background-info-emphasis-selected: #184A65;
    --color-background-info-emphasis-disabled: #94CBE8;
    --color-background-info-subtle-base: #EAF8FF;
    --color-background-info-subtle-focused: #D7F0FD;
    --color-background-info-subtle-hovered: #D7F0FD;
    --color-background-info-subtle-pressed: #94CBE8;
    --color-background-info-subtle-selected: #94CBE8;
    --color-background-info-subtle-disabled: #F6F8F9;
    --color-background-inverse-base: #232426;
    --color-background-inverse-focused: #3D3E3F;
    --color-background-inverse-hovered: #3D3E3F;
    --color-background-inverse-pressed: #4B4B4D;
    --color-background-inverse-selected: #FFFFFF;
    --color-background-inverse-disabled: #3D3E3F;
    --color-border-default-base: #91979F;
    --color-border-default-focused: #2B98D3;
    --color-border-default-hovered: #2B98D3;
    --color-border-default-pressed: #91979F;
    --color-border-default-selected: #91979F;
    --color-border-default-disabled: #91979F;
    --color-border-primary-base: #2B98D3;
    --color-border-primary-focused: #1170A3;
    --color-border-primary-hovered: #1170A3;
    --color-border-primary-pressed: #184A65;
    --color-border-primary-selected: #184A65;
    --color-border-primary-disabled: #94CBE8;
    --color-border-secondary-base: #DFE3E6;
    --color-border-secondary-focused: #B4BBC3;
    --color-border-secondary-hovered: #B4BBC3;
    --color-border-secondary-pressed: #606A72;
    --color-border-secondary-selected: #606A72;
    --color-border-secondary-disabled: #EBEEEF;
    --color-border-tertiary-base: #B4BBC3;
    --color-border-tertiary-focused: #B4BBC3;
    --color-border-tertiary-hovered: #B4BBC3;
    --color-border-tertiary-pressed: #91979F;
    --color-border-tertiary-selected: #91979F;
    --color-border-tertiary-disabled: #DFE3E6;
    --color-border-neutral-emphasis-base: #91979F;
    --color-border-neutral-emphasis-focused: #606A72;
    --color-border-neutral-emphasis-hovered: #606A72;
    --color-border-neutral-emphasis-pressed: #373F47;
    --color-border-neutral-emphasis-selected: #373F47;
    --color-border-neutral-emphasis-disabled: #DFE3E6;
    --color-border-neutral-subtle-base: #DFE3E6;
    --color-border-neutral-subtle-focused: #B4BBC3;
    --color-border-neutral-subtle-hovered: #B4BBC3;
    --color-border-neutral-subtle-pressed: #606A72;
    --color-border-neutral-subtle-selected: #606A72;
    --color-border-neutral-subtle-disabled: #F6F8F9;
    --color-border-positive-emphasis-base: #24CE78;
    --color-border-positive-emphasis-focused: #2CB46F;
    --color-border-positive-emphasis-hovered: #2CB46F;
    --color-border-positive-emphasis-pressed: #26915B;
    --color-border-positive-emphasis-selected: #26915B;
    --color-border-positive-emphasis-disabled: #9EEFC6;
    --color-border-positive-subtle-base: #9EEFC6;
    --color-border-positive-subtle-focused: #24CE78;
    --color-border-positive-subtle-hovered: #24CE78;
    --color-border-positive-subtle-pressed: #2CB46F;
    --color-border-positive-subtle-selected: #2CB46F;
    --color-border-positive-subtle-disabled: #E8FFF3;
    --color-border-positive-state-base: #24CE78;
    --color-border-negative-emphasis-base: #D0331F;
    --color-border-negative-emphasis-focused: #AD2A1A;
    --color-border-negative-emphasis-hovered: #AD2A1A;
    --color-border-negative-emphasis-pressed: #901E10;
    --color-border-negative-emphasis-selected: #901E10;
    --color-border-negative-emphasis-disabled: #E89D93;
    --color-border-negative-subtle-base: #E89D93;
    --color-border-negative-subtle-focused: #AD2A1A;
    --color-border-negative-subtle-hovered: #AD2A1A;
    --color-border-negative-subtle-pressed: #901E10;
    --color-border-negative-subtle-selected: #901E10;
    --color-border-negative-subtle-disabled: #FFEBE8;
    --color-border-negative-state-base: #D0331F;
    --color-border-attention-emphasis-base: #F8BE00;
    --color-border-attention-emphasis-focused: #CEA214;
    --color-border-attention-emphasis-hovered: #CEA214;
    --color-border-attention-emphasis-pressed: #91761F;
    --color-border-attention-emphasis-selected: #91761F;
    --color-border-attention-emphasis-disabled: #FFE388;
    --color-border-attention-subtle-base: #FFE388;
    --color-border-attention-subtle-focused: #F8BE00;
    --color-border-attention-subtle-hovered: #F8BE00;
    --color-border-attention-subtle-pressed: #CEA214;
    --color-border-attention-subtle-selected: #CEA214;
    --color-border-attention-subtle-disabled: #FFF9E4;
    --color-border-attention-state-base: #F8BE00;
    --color-border-info-emphasis-base: #1170A3;
    --color-border-info-emphasis-focused: #184A65;
    --color-border-info-emphasis-hovered: #184A65;
    --color-border-info-emphasis-pressed: #184A65;
    --color-border-info-emphasis-selected: #184A65;
    --color-border-info-emphasis-disabled: #94CBE8;
    --color-border-info-subtle-base: #94CBE8;
    --color-border-info-subtle-focused: #2B98D3;
    --color-border-info-subtle-hovered: #2B98D3;
    --color-border-info-subtle-pressed: #2B98D3;
    --color-border-info-subtle-selected: #1170A3;
    --color-border-info-subtle-disabled: #F6F8F9;
    --color-border-inverse-base: #FFFFFF;
    --color-border-inverse-focused: #FFFFFF;
    --color-border-inverse-hovered: #FFFFFF;
    --color-border-inverse-pressed: #FFFFFF;
    --color-border-inverse-selected: #F3F3F4;
    --color-border-inverse-disabled: #3D3E3F;
    --color-data-categorical-10: #3373BA;
    --color-data-categorical-20: #56B58F;
    --color-data-categorical-30: #F2CB46;
    --color-data-categorical-40: #E88E47;
    --color-data-categorical-50: #449CE3;
    --color-data-categorical-60: #87D0B3;
    --color-data-categorical-70: #8F8BF3;
    --color-data-divergent-negative-10: #E89D93;
    --color-data-divergent-negative-20: #AD2A1A;
    --color-data-divergent-neutral: #E4E6EA;
    --color-data-divergent-positive-10: #9EEFC6;
    --color-data-divergent-positive-20: #24CE78;
    --color-foreground-default-base: #606A72;
    --color-foreground-default-focused: #606A72;
    --color-foreground-default-hovered: #606A72;
    --color-foreground-default-pressed: #606A72;
    --color-foreground-default-selected: #606A72;
    --color-foreground-default-disabled: #606A72;
    --color-foreground-primary-base: #FFFFFF;
    --color-foreground-primary-focused: #FFFFFF;
    --color-foreground-primary-hovered: #FFFFFF;
    --color-foreground-primary-pressed: #FFFFFF;
    --color-foreground-primary-selected: #FFFFFF;
    --color-foreground-primary-disabled: #FFFFFF;
    --color-foreground-secondary-base: #606A72;
    --color-foreground-secondary-focused: #FFFFFF;
    --color-foreground-secondary-hovered: #FFFFFF;
    --color-foreground-secondary-pressed: #FFFFFF;
    --color-foreground-secondary-selected: #FFFFFF;
    --color-foreground-secondary-disabled: #91979F;
    --color-foreground-tertiary-base: #606A72;
    --color-foreground-tertiary-focused: #FFFFFF;
    --color-foreground-tertiary-hovered: #FFFFFF;
    --color-foreground-tertiary-pressed: #FFFFFF;
    --color-foreground-tertiary-selected: #FFFFFF;
    --color-foreground-tertiary-disabled: #B4BBC3;
    --color-foreground-neutral-emphasis-base: #FFFFFF;
    --color-foreground-neutral-emphasis-focused: #FFFFFF;
    --color-foreground-neutral-emphasis-hovered: #FFFFFF;
    --color-foreground-neutral-emphasis-pressed: #FFFFFF;
    --color-foreground-neutral-emphasis-selected: #FFFFFF;
    --color-foreground-neutral-emphasis-disabled: #FFFFFF;
    --color-foreground-neutral-subtle-base: #606A72;
    --color-foreground-neutral-subtle-focused: #606A72;
    --color-foreground-neutral-subtle-hovered: #606A72;
    --color-foreground-neutral-subtle-pressed: #606A72;
    --color-foreground-neutral-subtle-selected: #606A72;
    --color-foreground-neutral-subtle-disabled: #B4BBC3;
    --color-foreground-positive-emphasis-base: #FFFFFF;
    --color-foreground-positive-emphasis-focused: #FFFFFF;
    --color-foreground-positive-emphasis-hovered: #FFFFFF;
    --color-foreground-positive-emphasis-pressed: #FFFFFF;
    --color-foreground-positive-emphasis-selected: #FFFFFF;
    --color-foreground-positive-emphasis-disabled: #FFFFFF;
    --color-foreground-positive-subtle-base: #24CE78;
    --color-foreground-positive-subtle-focused: #24CE78;
    --color-foreground-positive-subtle-hovered: #24CE78;
    --color-foreground-positive-subtle-pressed: #2CB46F;
    --color-foreground-positive-subtle-selected: #2CB46F;
    --color-foreground-positive-subtle-disabled: #9EEFC6;
    --color-foreground-positive-state-base: #606A72;
    --color-foreground-negative-emphasis-base: #FFFFFF;
    --color-foreground-negative-emphasis-focused: #FFFFFF;
    --color-foreground-negative-emphasis-hovered: #FFFFFF;
    --color-foreground-negative-emphasis-pressed: #FFFFFF;
    --color-foreground-negative-emphasis-selected: #FFFFFF;
    --color-foreground-negative-emphasis-disabled: #FFFFFF;
    --color-foreground-negative-subtle-base: #AD2A1A;
    --color-foreground-negative-subtle-focused: #AD2A1A;
    --color-foreground-negative-subtle-hovered: #AD2A1A;
    --color-foreground-negative-subtle-pressed: #901E10;
    --color-foreground-negative-subtle-selected: #901E10;
    --color-foreground-negative-subtle-disabled: #E89D93;
    --color-foreground-negative-state-base: #606A72;
    --color-foreground-attention-emphasis-base: #FFFFFF;
    --color-foreground-attention-emphasis-focused: #FFFFFF;
    --color-foreground-attention-emphasis-hovered: #FFFFFF;
    --color-foreground-attention-emphasis-pressed: #FFFFFF;
    --color-foreground-attention-emphasis-selected: #FFFFFF;
    --color-foreground-attention-emphasis-disabled: #FFFFFF;
    --color-foreground-attention-subtle-base: #F8BE00;
    --color-foreground-attention-subtle-focused: #F8BE00;
    --color-foreground-attention-subtle-hovered: #F8BE00;
    --color-foreground-attention-subtle-pressed: #CEA214;
    --color-foreground-attention-subtle-selected: #CEA214;
    --color-foreground-attention-subtle-disabled: #FFE388;
    --color-foreground-attention-state-base: #606A72;
    --color-foreground-info-emphasis-base: #FFFFFF;
    --color-foreground-info-emphasis-focused: #FFFFFF;
    --color-foreground-info-emphasis-hovered: #FFFFFF;
    --color-foreground-info-emphasis-pressed: #FFFFFF;
    --color-foreground-info-emphasis-selected: #FFFFFF;
    --color-foreground-info-emphasis-disabled: #FFFFFF;
    --color-foreground-info-subtle-base: #2B98D3;
    --color-foreground-info-subtle-focused: #1170A3;
    --color-foreground-info-subtle-hovered: #1170A3;
    --color-foreground-info-subtle-pressed: #1170A3;
    --color-foreground-info-subtle-selected: #1170A3;
    --color-foreground-info-subtle-disabled: #1170A3;
    --color-foreground-inverse-base: #FFFFFF;
    --color-foreground-inverse-focused: #FFFFFF;
    --color-foreground-inverse-hovered: #FFFFFF;
    --color-foreground-inverse-pressed: #FFFFFF;
    --color-foreground-inverse-selected: #232426;
    --color-foreground-inverse-disabled: #909192;
    --color-outline-default-focused: #94CBE866;
    --color-outline-negative-focused: #E89D93;
    --color-surface-app-background: #F6F8F9;
    --color-surface-app-frame: #FFFFFF;
    --color-surface-primary-base: #FFFFFF;
    --color-surface-primary-focused: #FFFFFF;
    --color-surface-primary-hovered: #F6F8F9;
    --color-surface-primary-pressed: #FFFFFF;
    --color-surface-primary-selected: #FFFFFF;
    --color-surface-primary-disabled: #FFFFFF;
    --color-surface-secondary-base: #F2F4F5;
    --color-surface-secondary-focused: #F2F4F5;
    --color-surface-secondary-hovered: #EBEEEF;
    --color-surface-secondary-pressed: #F2F4F5;
    --color-surface-secondary-selected: #F2F4F5;
    --color-surface-secondary-disabled: #F2F4F5;
    --color-surface-inverse: #373F47;
    --color-surface-overlay-emphasis: rgba(55,63,71,0.8);
    --color-surface-overlay-subtle: rgba(96,106,114,0.8);
    --color-surface-overlay-inverse: rgba(255,255,255,0.1);
    --elevation-shadow-100: rgba(55,63,71,5%) 0px 0px 0px 1px,rgba(55,63,71,16%) 0px 1px 4px;
    --elevation-shadow-200: rgba(55,63,71,8%) 0px 2px 8px,rgba(55,63,71,12%) 0px 1px 2px;
    --elevation-shadow-300: rgba(55,63,71,4%) 0px 0px 0px 1px,rgba(55,63,71,8%) 0px 4px 4px 0px,rgba(55,63,71,8%) 0px 8px 24px 0px;
    --elevation-shadow-400: rgba(55,63,71,15%) 0px 0px 0px 1px,rgba(55,63,71,15%) 0px 8px 16px;
    --elevation-shadow-500: rgba(55,63,71,20%) 0px 8px 16px 0px;
    --elevation-shadow-600: rgba(55,63,71,8%) 0px 0px 0px 2px,rgba(55,63,71,12%) 0px 8px 20px 0px,rgba(55,63,71,12%) 0px 16px 32px 0px;
    --elevation-shadow-700: rgba(55,63,71,8%) 0px 0px 0px 2px,rgba(55,63,71,14%) 0px 12px 24px 0px,rgba(55,63,71,16%) 0px 20px 48px 0px;
    --elevation-shadow-800: rgba(55,63,71,18%) 0px 4px 16px 0px,rgba(55,63,71,22%) 0px 24px 56px 0px;
    --elevation-zIndex-buried: -100;
    --elevation-zIndex-base: 0;
    --elevation-zIndex-xs: 101;
    --elevation-zIndex-sm: 200;
    --elevation-zIndex-md: 300;
    --elevation-zIndex-lg: 400;
    --elevation-zIndex-xl: 500;
    --unit-border-radius-none: 0;
    --unit-border-radius-xs: 2px;
    --unit-border-radius-sm: 4px;
    --unit-border-radius-md: 6px;
    --unit-border-radius-lg: 8px;
    --unit-border-radius-xl: 12px;
    --unit-border-radius-circle: 50%;
    --unit-border-radius-pill: 9999px;
    --unit-border-style-none: none;
    --unit-border-style-dashed: dashed;
    --unit-border-style-dotted: dotted;
    --unit-border-style-solid: solid;
    --unit-border-width-none: 0;
    --unit-border-width-xs: 1px;
    --unit-border-width-sm: 2px;
    --unit-border-width-md: 3px;
    --unit-border-width-lg: 4px;
    --unit-outline-style-none: none;
    --unit-outline-style-dashed: dashed;
    --unit-outline-style-dotted: dotted;
    --unit-outline-style-solid: solid;
    --unit-outline-width-none: 0;
    --unit-outline-width-xs: 1px;
    --unit-outline-width-sm: 2px;
    --unit-outline-width-md: 3px;
    --unit-outline-width-lg: 4px;
    --unit-width-xs-fluid-breakpoint-bottom: 0px;
    --unit-width-xs-fluid-breakpoint-top: 767px;
    --unit-width-xs-fluid-columns: 4;
    --unit-width-xs-fluid-margin: 1.5rem;
    --unit-width-xs-fluid-gutter: 1rem;
    --unit-width-sm-fluid-breakpoint-bottom: 768px;
    --unit-width-sm-fluid-breakpoint-top: 1279px;
    --unit-width-sm-fluid-columns: 6;
    --unit-width-sm-fluid-margin: 1.5rem;
    --unit-width-sm-fluid-gutter: 1rem;
    --unit-width-md-fluid-breakpoint-bottom: 1280px;
    --unit-width-md-fluid-breakpoint-top: 1759px;
    --unit-width-md-fluid-columns: 12;
    --unit-width-md-fluid-margin: 1.5rem;
    --unit-width-md-fluid-gutter: 1.5rem;
    --unit-width-md-fixed-breakpoint-bottom: 1280px;
    --unit-width-md-fixed-breakpoint-top: 1759px;
    --unit-width-md-fixed-columns: 12;
    --unit-width-md-fixed-margin: 1.5rem;
    --unit-width-md-fixed-gutter: 1.5rem;
    --unit-width-lg-fluid-breakpoint-bottom: 1760px;
    --unit-width-lg-fluid-breakpoint-top: 2159px;
    --unit-width-lg-fluid-columns: 16;
    --unit-width-lg-fluid-margin: 2rem;
    --unit-width-lg-fluid-gutter: 1.5rem;
    --unit-width-lg-fixed-breakpoint-bottom: 1760px;
    --unit-width-lg-fixed-breakpoint-top: 2159px;
    --unit-width-lg-fixed-columns: 12;
    --unit-width-lg-fixed-margin: 1.5rem;
    --unit-width-lg-fixed-gutter: 1.5rem;
    --unit-width-xl-fluid-breakpoint-bottom: 2160px;
    --unit-width-xl-fluid-breakpoint-top: 3199px;
    --unit-width-xl-fluid-columns: 16;
    --unit-width-xl-fluid-margin: 3rem;
    --unit-width-xl-fluid-gutter: 2rem;
    --unit-width-xl-fixed-breakpoint-bottom: 2160px;
    --unit-width-xl-fixed-breakpoint-top: 3199px;
    --unit-width-xl-fixed-columns: 12;
    --unit-width-xl-fixed-margin: 1.5rem;
    --unit-width-xl-fixed-gutter: 1.5rem;
    --unit-width-xxl-fluid-breakpoint-bottom: 3200px;
    --unit-width-xxl-fluid-columns: 16;
    --unit-width-xxl-fluid-margin: 2rem;
    --unit-width-xxl-fluid-gutter: 2rem;
    --unit-width-xxl-fixed-breakpoint-bottom: 3200px;
    --unit-width-xxl-fixed-columns: 12;
    --unit-width-xxl-fixed-margin: 1.5rem;
    --unit-width-xxl-fixed-gutter: 1.5rem;
    --unit-space-0: 0;
    --unit-space-12: 0.125rem;
    --unit-space-25: 0.25rem;
    --unit-space-50: 0.5rem;
    --unit-space-75: 0.75rem;
    --unit-space-100: 1rem;
    --unit-space-125: 1.25rem;
    --unit-space-150: 1.5rem;
    --unit-space-200: 2rem;
    --unit-space-225: 2.25rem;
    --unit-space-250: 2.5rem;
    --unit-space-275: 2.75rem;
    --unit-space-300: 3rem;
    --unit-space-350: 3.5rem;
    --unit-space-400: 4rem;
    --unit-space-450: 4.5rem;
    --unit-space-500: 5rem;
    --unit-space-600: 6rem;
    --unit-space-750: 7.5rem;
    --unit-space-1000: 10rem;
    --unit-size-control-xs: 1.25rem;
    --unit-size-control-sm: 1.5rem;
    --unit-size-control-md: 2rem;
    --unit-size-control-lg: 2.5rem;
    --unit-size-control-xl: 3rem;
    --unit-aspect-ratio-1x1: 1;
    --unit-aspect-ratio-3x2: 3 / 2;
    --unit-aspect-ratio-3x4: 3 / 4;
    --unit-aspect-ratio-4x5: 4 / 5;
    }

    .jLKXdq {
        display: flex;
        flex-direction: column;
        align-content: flex-end;
        position: fixed;
        z-index: 2000;
        top: 75px;
        right: 24px;
    }

    .bEAbRd {
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: stretch;
        overflow: hidden;
    }

    .imeWfR {
      flex: 0 0 auto;
  }

  .hrlJdN {
      background: var(--color-background-inverse-base);
      color: rgb(223, 227, 230);
      height: 64px;
      position: relative;
      z-index: 3;
      font-size: 13px;
      border-bottom: 1px solid rgba(55, 63, 71, 0.15);
      min-width: 1038px;
      display: flex;
      -webkit-box-align: center;
      align-items: center;
      -webkit-box-pack: justify;
      justify-content: space-between;
    }

    .hrlJdN > div {
        display: flex;
        -webkit-box-align: center;
        align-items: center;
    }

    .hrlJdN > div > * {
        flex: 1 0 auto;
    }

    .kyNVPk a {
      padding-left: 16px;
      padding-right: 16px;
      width: 151.45px;
      height: 64px;
      background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTI2IiBoZWlnaHQ9IjM5IiB2aWV3Qm94PSIwIDAgMTI2IDM5IiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cGF0aCBkPSJNNzAuOTg0IDcuNzQxMDNDNzEuNjQ5MiA3Ljc0NDM0IDcyLjI4OTIgNy40NzYxOSA3Mi43NjYzIDYuOTk0MThDNzMuMjQzNSA2LjUxMjE4IDczLjUxOTcgNS44NTQ4IDczLjUzNTcgNS4xNjMzMkM3My41MjgzIDQuNDYyMDggNzMuMjU3IDMuNzkxNzUgNzIuNzgwMSAzLjI5NTg3QzcyLjMwMzEgMi43OTk5OSA3MS42NTg0IDIuNTE3OTkgNzAuOTg0IDIuNTEwMjVDNzAuMzE4OSAyLjUyNjg2IDY5LjY4NjYgMi44MTQwOCA2OS4yMjMgMy4zMTAxN0M2OC43NTk0IDMuODA2MjYgNjguNTAxNSA0LjQ3MTY0IDY4LjUwNDcgNS4xNjMzMkM2OC41MTAxIDUuODQ1MiA2OC43NzMxIDYuNDk3NTUgNjkuMjM2OSA2Ljk3OTczQzY5LjcwMDcgNy40NjE5MiA3MC4zMjgxIDcuNzM1MzMgNzAuOTg0IDcuNzQxMDNaIiBmaWxsPSJ3aGl0ZSIvPgo8cGF0aCBkPSJNODguMzIzNyAxMC4yMTk3SDk0LjQ3ODFWMTAuNzI3M0M5NC4xMzY4IDEwLjc4OTkgOTMuODA3MiAxMC45MDg0IDkzLjUwMTYgMTEuMDc4M0M5Mi45MzkgMTEuMzUxOSA5MS44MTM4IDEyLjY3ODUgOTAuOTQ5OCAxNC45MDEyQzg5LjQ4NzEgMTguNzYzOCA4Ny45NDk5IDIzLjMyNjQgODYuMzM2NSAyOC41NTUyTDg1LjczNTcgMzAuNTM4Qzg1LjQ3MjUgMzEuNDM0MyA4NS4yNDc1IDMyLjAxOTIgODUuMTM1IDMyLjM3MjJDODUuMDIyNCAzMi43MjUxIDg0Ljg3MTggMzMuMjY4NCA4NC42MTA1IDMzLjkzMDdDODQuNDYxNyAzNC40Mjg3IDg0LjI3MDIgMzQuOTExOCA4NC4wMzg0IDM1LjM3NDJDODMuNzM3IDM1Ljk1OTIgODMuMTc0NCAzNy4xNTg4IDgyLjcyNDMgMzcuNTE5N0M4Mi4wMTExIDM4LjE0NDMgODAuOTYwMiAzOC44NDYyIDc5LjY0ODEgMzguNzI5MkM3Ny4wOTY0IDM4LjcyOTIgNzUuMTgzNSAzNi43NDYzIDc1LjE0NTMgMzQuNDAwNkM3NS4xNDUzIDMyLjgwMDUgNzYuMTIxOCAzMS43NDc2IDc3LjU4NDYgMzEuNzQ3NkM3OC42MzU0IDMxLjc0NzYgNzkuNTcxOCAzMi4zNDI0IDc5LjU3MTggMzMuNTc5N0M3OS41NzE4IDM0LjQ3OCA3OC43MDk4IDM1LjQxMzkgNzguNzA5OCAzNS44ODE4Qzc4LjcwOTggMzcuMDkxNCA3OS4zODQ5IDM3LjY2NjQgODAuNjk4OSAzNy42NjY0QzgxLjc0NzkgMzcuNjY2NCA4Mi42MDYxIDM2Ljk2NDUgODMuMjQ4OCAzNS41NjA2Qzg0LjExMjcgMzMuOTYwNCA4NC4xODcxIDMyLjIwNTYgODMuNDczOCAzMC4yNTQ1TDc4LjA3MjggMTUuMzkzQzc2LjgzMzIgMTEuOTYwNyA3NS44OTQ4IDEwLjgzMjQgNzQuNzMzNCAxMC43MTE1VjEwLjIwMzlIODMuMjQ4OFYxMC43MTE1QzgyLjIzNjEgMTAuODI4NSA4MS43MTE2IDExLjQ1MzEgODEuNzExNiAxMi41ODMzQzgxLjcxMTYgMTMuNDAyMiA4Mi4wMTExIDE0LjY1MTQgODIuNTczNyAxNi4yNTE2TDgzLjU4NjQgMTkuMTM2NkM4NC43NDk3IDIyLjI1NzYgODUuNjg0MiAyNC45ODggODYuMTc2MyAyNi43MDUyQzg3LjI2MzMgMjMuMTU1OSA4OC4yNzQxIDIwLjAzNDggODkuMjUyNSAxNy4zMDQ1Qzg5Ljk2NTggMTUuMjc2IDkwLjMwMzMgMTMuODMyNSA5MC4zMDMzIDEyLjk3MzlDOTAuMzAzMyAxMS40NTMxIDg5LjUxNTcgMTAuNzUxMSA4OC4zMTQyIDEwLjc1MTFMODguMzIzNyAxMC4yMTk3WiIgZmlsbD0id2hpdGUiLz4KPHBhdGggZD0iTTI5LjA4MDEgMjkuMjE3NEMyNy45OTMxIDI5LjAxOTEgMjcuMDU0OCAyOC4wMDc4IDI3LjA1NDggMjUuODYyNFYwTDIwLjg2NDIgMS40MDM4NlYxLjk1MTEzQzIxLjkxNSAxLjgzNDE0IDIyLjk2MiAyLjgwNzcyIDIyLjk2MiA0Ljg3NTg0VjI1Ljg2MjRDMjIuOTYyIDI3Ljg5MDggMjEuOTExMiAyOS4wNjA3IDIwLjg2NDIgMjkuMjE3NEMyMC43NjU3IDI5LjIzNTQgMjAuNjY2NCAyOS4yNDggMjAuNTY2NiAyOS4yNTVDMjAuMDMwNiAyOS4yOTMzIDE5LjQ5MzcgMjkuMTk0NiAxOS4wMDI4IDI4Ljk2NzVDMTguMTcxMyAyOC41OTA4IDE3LjQ3NzEgMjcuOTE4NiAxNi44ODk3IDI2LjkxNTNMMTQuMDI5IDIyLjE1NjRDMTMuNDI3NiAyMS4xNTQyIDEyLjUzMDcgMjAuMzgxMSAxMS40NzIxIDE5Ljk1MjJDMTAuNDEzNSAxOS41MjM0IDkuMjQ5OTIgMTkuNDYxOSA4LjE1NDk1IDE5Ljc3N0wxMS4zODE4IDE2LjA3MUMxMy44MTkyIDEzLjI2MzMgMTYuMDcxNSAxMS40Njg4IDE4LjIwOTQgMTAuNzI3MlYxMC4yMTk2SDExLjExMVYxMC43MjcyQzEyLjk0OTUgMTEuNDY4OCAxMi44MzcgMTMuMTA2NyAxMC43Mjk2IDE1LjY4NDRMNi4xOTA2IDIxLjE4MjhWMEwwIDEuNDAzODZWMS45NTExM0MxLjA1MDg0IDEuOTUxMTMgMi4wOTc4NiAzLjA0MTcgMi4wOTc4NiA0Ljk1MzE3VjI1Ljg2MjRDMi4wOTc4NiAyOC4xNjQ1IDEuMDg1MTcgMjkuMDYwNyAwIDI5LjIxNzRWMjkuNzI1SDguMjIzNjFWMjkuMjE3NEM2Ljg3MzM1IDI5LjAxOTEgNi4xOTgyMiAyNy45MzA1IDYuMTk4MjIgMjUuODYyNFYyMi4wMDE3TDcuOTYwNDIgMTkuOTczM0wxMi4yMjg2IDI3LjI2NjJDMTMuMjQxMyAyOS4wMjMgMTQuMTc5NiAyOS43MjUgMTUuNjgwNSAyOS43MjVIMjkuOTY1MVYyOS4zMjg0QzI5Ljk2NTEgMjkuMzI4NCAyOS41NTY5IDI5LjI5ODYgMjkuMDgwMSAyOS4yMTc0WiIgZmlsbD0id2hpdGUiLz4KPHBhdGggZD0iTTQ2LjEyMjYgMjYuNzUwNlYyNi42Mjc3VjE4LjAyNkM0Ni4wNDA1IDEyLjMyMTQgNDMuNzQwNSA5LjcyMzg1IDM4LjQ3MyA5LjcyMzg1QzM2Ljc4OTUgOS43MTA4NiAzNS4xNTA5IDEwLjI4NzggMzMuODIxNSAxMS4zNjE3QzMyLjQzMzEgMTIuNDU0MiAzMS43NTggMTMuNzAzNCAzMS43NTggMTUuMTQ2OUMzMS43NTggMTYuNTUwOCAzMi41MDc1IDE3LjYwMzcgMzMuNzQ1MiAxNy42MDM3QzM1LjA1OTIgMTcuNjAzNyAzNS45OTc1IDE2LjgyNDQgMzUuOTk3NSAxNS43MzE5QzM1Ljk5NzUgMTQuOTEzIDM1LjQ3MTIgMTMuNzgwOCAzNS40NzEyIDEzLjAwMTVDMzUuNDcxMiAxMS41OTU3IDM2LjQ4NTggMTAuMzg2MSAzOC4yNDggMTAuMzg2MUM0MC41MDAzIDEwLjM4NjEgNDIuMTExOCAxMi4xNDI5IDQyLjExMTggMTYuMDQzMlYxOC4zODNMNDAuMjM3MSAxOC44NTA5QzM5LjI2MDcgMTkuMDQ5MiAzOC40MzY4IDE5LjI0NzUgMzcuNzk3OSAxOS40NDU4QzM3LjE1OSAxOS42NDQxIDM2LjMzNTEgMTkuOTEzNyAzNS4zNTg3IDIwLjMwMjRDMzMuNDA3NiAyMS4wODM2IDMyLjM1ODcgMjEuODI1MiAzMS40NTY2IDIzLjIyOTFDMzEuMDE0OCAyMy45MDg3IDMwLjc3OTUgMjQuNzEwOCAzMC43ODE1IDI1LjUzMTFDMzAuNzgxNSAyOC43NjcyIDMyLjk1NzYgMzAuMjUwMyAzNS45OTc1IDMwLjI1MDNDMzguMzk4NiAzMC4yNTAzIDQwLjk1NjEgMjguOTIzOCA0Mi4xMTE4IDI2LjQyNzRDNDIuMTI4NCAyNy4yMTQ4IDQyLjMxIDI3Ljk4ODkgNDIuNjQzOSAyOC42OTU4QzQzLjkxNiAzMS4zNzI2IDQ4LjEyODkgMjkuNzkwMyA0OC4xMjg5IDI5Ljc5MDNWMjkuMjgyN0M0Ni4yODQ3IDI5LjU4MjEgNDYuMTMyMSAyNy4zMDE4IDQ2LjEyMjYgMjYuNzUwNlpNNDIuMTE3NiAyNC4wNUM0Mi4xMTc2IDI1LjMzNjggNDEuNjY3NSAyNi4zODk3IDQwLjc2NzMgMjcuMTMxM0MzOS45MDUzIDI3Ljg3MjkgMzkuMDA1MSAyOC4yNjM1IDM4LjA2NjggMjguMjYzNUMzNi4yMjgzIDI4LjI2MzUgMzUuMDI2OCAyNy4wMTQzIDM1LjAyNjggMjQuNzEyMkMzNS4wMjY4IDIzLjYyMTcgMzUuNTk4OSAyMi42MDY0IDM2LjA3NzYgMjIuMDIxNUMzNi40NTY2IDIxLjYxNzkgMzYuOTAxNSAyMS4yODc2IDM3LjM5MTcgMjEuMDQ1OUMzOC4wMjg2IDIwLjY5NSAzOC4zNDUyIDIwLjUxNDUgMzguNzgwMSAyMC4zMDQzTDQwLjQ5NjUgMTkuNjQyMUM0MS4zNTg1IDE5LjI5MTEgNDEuODgzIDE5LjA5NjggNDIuMTA4IDE4Ljk3OThMNDIuMTE3NiAyNC4wNVoiIGZpbGw9IndoaXRlIi8+CjxwYXRoIGQ9Ik0xMjUuMDA2IDEwLjIxOTZIMTEwLjQxNFYwSDEyNS4wMDZMMTIxLjk0MyA1LjEwOTgxTDEyNS4wMDYgMTAuMjE5NloiIGZpbGw9IndoaXRlIi8+CjxwYXRoIGQ9Ik05NS4zNDU5IDI3LjI0MjVDOTMuNTMwNyAyNS4yOTc5IDkyLjUzMDIgMjIuNjg1IDkyLjU2MzQgMTkuOTc1NEM5Mi41NDM2IDE4LjYzODggOTIuNzc5NCAxNy4zMTE0IDkzLjI1NzEgMTYuMDcwNEM5My43MzQ3IDE0LjgyOTMgOTQuNDQ0OCAxMy42OTkzIDk1LjM0NTkgMTIuNzQ1OUM5Ny4xODYzIDEwLjcxNTQgOTkuNDQwNiA5LjY5ODI0IDEwMi4wNzIgOS42OTgyNEMxMDQuNjY0IDkuNjk4MjQgMTA2LjkyIDEwLjcxNTQgMTA4Ljc2MSAxMi43NDU5QzEwOS42NzQgMTMuNjkxOCAxMTAuMzk1IDE0LjgxOTcgMTEwLjg3OSAxNi4wNjE5QzExMS4zNjMgMTcuMzA0MSAxMTEuNjAyIDE4LjYzNTIgMTExLjU4IDE5Ljk3NTRDMTExLjU5OCAyMS4zMjA3IDExMS4zNTkgMjIuNjU2NSAxMTAuODc1IDIzLjkwNDNDMTEwLjM5MSAyNS4xNTIyIDEwOS42NzIgMjYuMjg3MSAxMDguNzYxIDI3LjI0MjVDMTA2LjkyIDI5LjIyNTQgMTA0LjY2NCAzMC4yNTA1IDEwMi4wNzIgMzAuMjUwNUM5OS40NDA2IDMwLjI1MDUgOTcuMTg2MyAyOS4yMzUzIDk1LjM0NTkgMjcuMjQyNVpNMTA1LjQ1NCAxMy4wNzExQzEwNC43MTIgMTEuNTYyMSAxMDMuNzM3IDEwLjY3NzggMTAyLjU5MyAxMC40Mzk4QzEwMC4yNzIgOS45NTQwMyA5OC4yMiAxMi40MzQ2IDk3LjQ1NTIgMTYuMzc4NUM5Ny4xMjg5IDE4LjE0NzkgOTcuMDQ5OSAxOS45NTcxIDk3LjIyMDcgMjEuNzVDOTcuMzg4NCAyMy41NDM0IDk3Ljg2NzggMjUuMjkwMiA5OC42MzU3IDI2LjkwNTRDOTkuMzc5NSAyOC40MTY0IDEwMC4zNTIgMjkuMjk4NyAxMDEuNDk2IDI5LjUzNjdDMTAzLjgxNyAzMC4wMjI1IDEwNS45MjkgMjcuNDM2OCAxMDYuNjk5IDIzLjQ1MzNDMTA3LjMzOCAyMC4xMjQxIDEwNy4wMTQgMTYuMDY5MSAxMDUuNDQ0IDEzLjA2OTFMMTA1LjQ1NCAxMy4wNzExWiIgZmlsbD0id2hpdGUiLz4KPHBhdGggZD0iTTczLjE2MDEgMjUuODYyNVYxMC4yMTk3SDU5Ljk1MzJWMTAuNjg5N0M2MS43MTczIDEwLjk2MzMgNjIuNTU2NCAxMi4zNDczIDYxLjc1NTQgMTQuNTkxOUM1Ny42MjgzIDI2LjI1NTEgNTcuODkxNSAyNS43MzE2IDU3LjYyODMgMjYuNjY3NUM1Ny4zNjUyIDI1Ljc2OTMgNTYuNzY0NCAyMy41NjI0IDU1Ljc4OTggMjAuNzk0M0M1NC44MTUzIDE4LjAyNjIgNTQuMTc2NCAxNi4xOTAxIDUzLjkxMzIgMTUuMzcxMkM1Mi45MDA1IDEyLjEzMzIgNTMuMjM4MSAxMC45MjM2IDU0Ljg4OTcgMTAuNzI5M1YxMC4yMjE3SDQ2LjMzNDJWMTAuNzI5M0M0Ny42MTAxIDExLjAwMyA0OC43MzUzIDEyLjUyMzggNDkuNjczNiAxNS4yNTQyTDUwLjk4NzcgMTguODAzNUM1Mi40MzE0IDIyLjYzODMgNTQuMTI2OCAyNy45MjQ2IDU0LjY5MzIgMjkuNzI3MUg1Ny41MzY4QzU4LjQ1MjIgMjYuOTUxMSA2Mi4xMjU0IDE1Ljg3MjggNjIuNjE3NCAxNC43NDY2QzYzLjE0NzYgMTMuNDYzNyA2My43NDg0IDEyLjQ5MjEgNjQuNDE5NyAxMS44MTk5QzY0Ljc0MzcgMTEuNDU4MSA2NS4xMzgzIDExLjE3MjIgNjUuNTc3IDEwLjk4MTRDNjYuMDE1NyAxMC43OTA2IDY2LjQ4ODUgMTAuNjk5MyA2Ni45NjM4IDEwLjcxMzVDNjYuOTYzOCAxMC43MTM1IDY5LjAyNTQgMTAuNzEzNSA2OS4wMjU0IDEyLjc4MTZWMTQuNTM2NEM2OS4wMjU0IDE0LjU1NDIgNjkuMDI1NCAxNC41NzIxIDY5LjAyNTQgMTQuNTg5OVYyNS44NjI1QzY5LjAyNTQgMjguMDQzNiA2OC4wMTI3IDI5LjA2MDggNjYuOTYxOSAyOS4yMTc1VjI5LjcyNTFINzUuMTQxN1YyOS4yMTc1Qzc0LjA2MDMgMjkuMDYwOCA3My4xNjAxIDI4LjA0NzYgNzMuMTYwMSAyNS44NjI1WiIgZmlsbD0id2hpdGUiLz4KPC9zdmc+Cg==);
      background-size: 130.26px 30px;
      background-repeat: no-repeat;
      line-height: 40px;
      font-size: 0px;
      display: block;
      color: rgb(223, 227, 230);
      text-decoration: none;
      box-sizing: border-box;
      background-position: calc(50% - 10px) calc(50% + 3px);
  }

  .hrlJdN > div > * {
    flex: 1 0 auto;
  }

  .chOITk {
        margin: 0px;
        padding: 0px 0px 0px 8px;
        position: relative;
    }

    .chOITk input {
      background: transparent;
      color: rgb(145, 151, 159);
      width: 200px;
      border: 1px solid rgb(96, 106, 114);
      padding: 4px 24px 4px 8px;
      line-height: 18px;
      height: 32px;
      box-sizing: border-box;
  }

  .hdtWvd {
      position: absolute;
      background: transparent;
      width: 24px;
      height: 100%;
      border: 0px;
      padding: 0px 8px 0px 0px;
      right: 0px;
      top: 0px;
      color: rgb(145, 151, 159);
      z-index: 1;
      box-sizing: border-box;
  }

  .kNoAOY {
      height: 64px;
      list-style: none;
      margin: 0px 16px;
      display: flex;
      -webkit-box-align: center;
      align-items: center;
  }

  .fDXMBh {
    position: relative;
  }

  .fCsKlY {
      background: unset;
      border: unset;
      color: unset;
      cursor: pointer;
      font-size: 18px;
      margin: 0px 16px 0px 0px;
      position: relative;
      padding: 0px;
  }

  .bRPFxC {
    background: rgb(255, 255, 255);
    border: 1px solid rgb(223, 227, 230);
    box-shadow: rgb(38 42 45 / 40%) 0px 5px 10px;
    color: rgb(48, 59, 67);
    cursor: default;
    font-size: 14px;
    margin-top: 8px;
    position: absolute;
    right: -20px;

    width: 400px;
    z-index: 10000;
    overflow: visible !important;
}

.jpALXp {
    background: rgb(242, 244, 245);
    border-bottom: 1px solid rgb(223, 227, 230);
    box-sizing: border-box;
    font-weight: 700;
    padding: 16px 16px 8px;
}

.dlKiVV {
    padding: 24px;
    text-align: center;
}

.fOAfGa {
    color: rgb(223, 227, 230);
    margin: 0px;
    height: 64px;
    list-style: none;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
}

fOAfGa > li {
    height: 100%;
    display: inline-flex;
    -webkit-box-align: center;
    align-items: center;
}

.fOAfGa > li > a {
    font-size: 14px;
    height: 100%;
    align-self: center;
    padding: 0px 16px;
    display: block;
    line-height: 64px;
    color: rgb(223, 227, 230);
    font-weight: 600;
}

.fOAfGa > li .upgrade-button {
    margin: 0px;
    height: 32px;
    font-weight: 700;
    line-height: 32px;
}

.jzFvdv {
    height: 100%;
    padding: 0px;
}

.hVVsZf {
    all: unset;
    -webkit-box-align: center;
    align-items: center;
    color: rgb(223, 227, 230);
    cursor: pointer;
    display: flex;
    height: 100%;
    background: transparent;
    padding: 0px 16px;
}

.eYzgLE {
    width: 32px;
    height: 32px;
    margin-right: 8px;
    border-radius: 4px;
}

.hOUigR > * {
    flex-shrink: 0;
}

.jxEkZL {
    margin-right: 8px;
    max-width: 220px;
    overflow-x: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.eTeurt {
    list-style: none;
    margin: 0px;
    padding: 0px;
    min-width: 160px;
    background-color: rgb(255, 255, 255);
    border: 1px solid rgb(145, 151, 159);
    box-shadow: rgb(0 0 0 / 20%) 0px 5px 10px;
    position: absolute;
    right: 0px;
    z-index: 1000;
}

.eTeurt li {
    display: block;
    height: auto;
    padding: 0px;
}

.jzFvdv li {
    all: unset;
    line-height: 24px;
    color: rgb(55, 63, 71);
    margin: 0px;
    padding: 0px;
    border-bottom: 1px solid rgb(235, 238, 239);
}
.eTeurt li button {
    all: unset;
    box-sizing: border-box;
    width: 100%;
    color: inherit;
}

.eTeurt li a, .eTeurt li button {
    color: rgb(55, 63, 71);
    display: block;
    padding: 8px;
}

.ffIWqC {
    flex: 1 1 auto;
    display: flex;
    overflow: hidden;
}

.hOUigR {
    flex: 0 0 auto;
    display: flex;
    flex-direction: column;
    justify-content: stretch;
    overflow: auto;
}

.cFwWTC {
    box-sizing: border-box;
    background: rgb(223, 227, 230);
    padding: 0px;
    font-size: 14px;
    position: relative;
    width: 204px;
    list-style: none;
    margin: 0px;
    flex: 1 1 0%;
}

.cFwWTC .list-section {
    border-top: 1px solid rgb(180, 187, 195);
    margin: 0px 16px 0px 0px;
    padding: 14px 0px;
}

.cFwWTC li > a, .cFwWTC li button {
    color: rgb(55, 63, 71);
    font-weight: normal;
    padding: 0px 16px;
    text-shadow: none;
    margin: 0px;
    height: 32px;
    width: 100%;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    line-height: 32px;
    font-size: 14px;
    text-align: left;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    text-decoration: none;
    border: none;
    background: transparent;
    box-sizing: border-box;
    outline: none;
}

.cFwWTC li {
    position: relative;
    margin: 0px;
    padding: 2px 0px;
}

.cFwWTC li.list.active .list-link {
    background: rgb(180, 187, 195);
    color: rgb(55, 63, 71);
    font-weight: 600;
}

.cFwWTC li.list.active .list-link .fa {
    color: rgb(55, 63, 71);
}

.JBHSX {
    flex: 1 1 auto;
    display: flex;
    flex-direction: column;
    justify-content: stretch;
    overflow: auto;
}

.JBHSX > :not(.Page) {
    flex-shrink: 0;
}

.fFlAMv {
    display: block;
    -webkit-font-smoothing: antialiased;
    font-size: 24px;
    font-weight: 400;
    line-height: 1.3;
    color: rgb(48, 59, 67);
    font-family: proxima-nova, sans-serif;
    white-space: initial;
}

.dmVVOt {
    min-height: calc(100vh - 65px);
    display: flex;
    flex-direction: column;
}

.eozvv {
    display: flex;
    flex-direction: row;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    justify-content: space-between;
}

.gqsDCz {
    display: flex;
}

.bfKHbK {
    padding-left: 24px;
    padding-bottom: 8px;
    padding-top: 24px;
}

.bQruIQ {
    display: flex;
    padding-right: 24px;
    padding-top: 24px;
}

.cFwWTC .list-link .icon, .cFwWTC .list-link .fa {
    font-size: 18px;
    line-height: 18px;
    color: rgb(96, 106, 114);
}

.cFwWTC .list-link .icon, .cFwWTC .list-link .fa, .cFwWTC .list-link span {
    margin-right: 8px;
    display: inline-block;
    width: 18px;
    text-align: center;
}

.iEVnqI {
    padding-left: 8px;
}

.gUnzwu {
    height: 44px;
    border-bottom: 1px solid rgb(223, 227, 230);
    background-color: transparent;
    display: flex;
    -webkit-box-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    align-items: center;
}

.dRnQDU {
    -webkit-box-flex: 0;
    flex-grow: 0;
    padding: 0px 8px;
    height: 100%;
}

.bOeHSo {
    height: 100%;
    margin-bottom: -4px;
    font-family: proxima-nova;
    font-size: 16px;
    display: flex;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    cursor: pointer;
    color: var(--typography-color-primary-base);
    padding: 0px 8px;
}

.kfHeHc {
    height: 4px;
    width: 100%;
    background-color: var(--color-border-neutral-subtle-selected);
    display: block;
}

.eiJVlm {
    height: 100%;
    margin-bottom: -4px;
    font-family: proxima-nova;
    font-size: 16px;
    display: flex;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    cursor: pointer;
    color: var(--typography-color-secondary-base);
    padding: 0px 8px;
}

.coNUBW {
    background-color: rgb(246, 248, 249);
    flex: 1 1 0%;
}

.dmVVOt > :last-child {
    flex: 1 1 0%;
    display: flex;
    flex-direction: column;
}

.khhmlX {
    position: relative;
    background-color: rgb(246, 248, 249);
    margin: 0px auto;
    max-width: 826px;
    min-width: 500px;
    display: flex;
    flex-direction: column;
}

.izgCeZ {
    display: flex;
    padding-left: 4px;
}

.hiaYEj {
    margin-top: 0px !important;
}

.khhmlX > div:first-child {
    margin-top: 16px;
}

.khhmlX > div:last-of-type {
    margin-bottom: 16px;
}

.fIrQJB {
    min-height: 650px;
    margin: 0px !important;
}

.hzZglw {
    display: flex;
    padding-top: 32px;
    padding-bottom: 24px;
    flex-direction: column;
}

.gLCdlk {
    margin: 0px !important;
}

.crhGTk {
    display: block;
    font-size: 14px;
    line-height: 1.3;
    font-family: proxima-nova, sans-serif;
    white-space: initial;
}

.bZntlp {
    display: flex;
    padding-top: 4px;
    flex-direction: column;
}

.iQtoNF {
    display: block;
    font-size: 20px;
    font-weight: 600;
    line-height: 1.3;
    color: rgb(48, 59, 67);
    font-family: proxima-nova, sans-serif;
    white-space: initial;
}

.gOYaCR {
    display: flex;
    flex-direction: row;
    margin-top: 0px !important;
    margin-bottom: 0px !important;
}

.jcRCgj {
    width: 32px;
    margin-right: 16px;
    display: flex;
    flex-direction: column;
    -webkit-box-align: center;
    align-items: center;
}

.clJZwQ {
    box-sizing: border-box;
    height: 32px;
    width: 32px;
    border-radius: 50%;
    display: flex;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    color: inherit;
    background-color: transparent;
    border: 2px solid rgb(43, 152, 211);
    font-weight: 600;
    font-size: 14px;
}

.kdZuwc {
    width: 2px;
    background: rgb(180, 187, 195);
    height: calc((100% - 32px) - 7px);
    position: relative;
    top: 3.5px;
}

.hnROve {
    padding-bottom: 24px;
}

.eTHBEo {
    overflow: hidden;
    display: flex;
    flex: 1 1 0%;
}

.duLLRa {
    border-radius: var(--unit-border-radius-sm);
    box-shadow: var(--elevation-shadow-100);
    background-color: var(--color-background-default-base);
    box-sizing: border-box;
}

.ieXTLi {
    width: 778px;
    height: 312px;
}

.bFrScN {
    display: grid;
    grid-template-columns: 1fr 1fr;
}

.rCLou {
    height: 100%;
}

.dMBLqp {
    display: flex;
    padding-top: 40px;
    padding-left: 40px;
    flex-direction: column;
    width: 357px;
}

.hzasTd {
    display: flex;
    padding-left: 8px;
    flex-direction: column;
}

.beqNie {
    height: 200px;
}

.hggARp {
    display: block;
    font-size: 30px;
    font-weight: 700;
    color: rgb(48, 59, 67);
    font-family: proxima-nova, sans-serif;
    white-space: initial;
}

.flBrfX {
    width: 329px;
    line-height: 32px;
}

.cqfoVD {
    display: flex;
    padding-top: 24px;
    flex-direction: column;
}

.hOghAS {
    display: flex;
    align-items: flex-start;
}

.iBlvSW {
    display: flex;
    padding-right: 4px;
    flex-direction: column;
}

.kl {
    display: inline-block;
    font: normal normal normal 14px/1 Klaviyo;
    font-size: inherit;
}

.crhGTk {
    display: block;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.3;
    color: rgb(48, 59, 67);
    font-family: proxima-nova, sans-serif;
    white-space: initial;
}

.jEytGK {
    width: 309px;
    height: 32px;
}

.flacFc {
    display: flex;
    padding-top: 32px;
    flex-direction: column;
}

.gAXjwL {
    box-sizing: border-box;
    height: 32px;
    width: 32px;
    border-radius: 50%;
    display: flex;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    color: rgb(145, 151, 159);
    background-color: transparent;
    border: 2px solid rgb(180, 187, 195);
    font-weight: 600;
    font-size: 14px;
}

.kRGAvY {
    width: 778px;
}

.giItA-D {
    display: flex;
    padding-top: 4px;
    padding-bottom: 4px;
    flex-direction: column;
}

.fhHHqE {
    display: block;
    font-size: 16px;
    font-weight: 600;
    line-height: 1.3;
    color: rgb(48, 59, 67);
    font-family: proxima-nova, sans-serif;
    white-space: initial;
}

.crhGTk {
    display: block;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.3;
    color: rgb(48, 59, 67);
    font-family: proxima-nova, sans-serif;
    white-space: initial;
}
      </style>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- SO - fix broken icons -->
   <body id="page-basic" class="styles_2015">
      <div id="fender-root">
         <div class="ToastRack__ToastContainer-sc-1ijo1mb-1 jLKXdq" style=""></div>
         <div class="Site__StyledSite-sc-1c4yg3i-0 bEAbRd" style="">
            <header role="banner" class="SiteHead__StyledSiteHead-sc-1cjjxai-0 imeWfR">
               <nav class="styles__StyledHeader-sc-qpxf0f-0 hrlJdN">
                  <div>
                    <a href="index.php"><img src="images/logo.png"></a>
                     <form action="/search" method="GET" id="search-form" class="styles__StyledSearch-sc-us72y0-0 chOITk"><input type="text" placeholder="Global Search..." id="search" name="q"><button type="submit" class="styles__StyledButton-sc-us72y0-1 hdtWvd"><i class="fa fa-search search-icon"></i></button></form>
                  </div>
                  <div>
                     <ul class="AlertsNav__StyledNav-sc-yjf5fo-0 kNoAOY"></ul>
                     <div class="styles__StyledNotifications-sc-n7rdk0-0 fDXMBh">
                        <button type="button" class="styles__StyledNotificationToggle-sc-n7rdk0-1 fCsKlY fa fa-bell-o dropdown-toggle" aria-expanded="false" aria-controls="kl-notification-list" data-testid="notification-toggle"></button>
                        <div id="kl-notification-list" class="styles__StyledNotificationsList-sc-n7rdk0-2 bRPFxC" style="display: none;">
                           <div class="styles__StyledNotificationsHeader-sc-n7rdk0-4 jpALXp"><span>Inbox</span></div>
                           <div>
                              <div class="styles__StyledNoRecords-sc-n7rdk0-6 dlKiVV">You don't currently have any notifications.</div>
                           </div>
                        </div>
                     </div>
                     <ul class="UserNav__StyledNav-sc-juwt59-0 fOAfGa">
                        <li>
                           <div class="styles__StyledUserDropdown-sc-irwd2-0 jzFvdv">
                              <button type="button" aria-expanded="false" aria-controls="kl-user-menu" class="styles__StyledUserToggleButton-sc-irwd2-4 hVVsZf dropdown-toggle"><span><img src="https://secure.gravatar.com/avatar/af80e6f1dc41855f975cebd490f4223f?d=https%3A%2F%2Fwww.klaviyo.com%2Fmedia%2Fimages%2Fletters%2Fo-g.png" width="32" height="32" title="odelowo@live.co.uk" alt="Profile Avatar" class="styles__StyledAvatar-sc-irwd2-1 eYzgLE"></span><span class="styles__StyledUsername-sc-irwd2-5 jxEkZL">That's Purple</span><span class="fa fa-caret-down"></span></button>
                              <ul id="kl-user-menu" class="styles__StyledUserMenu-sc-irwd2-2 eTeurt" style="display: none;">
                                 <li><a href="account.php">Account</a></li>
                                 <li><a href="<?=$us_url_root?>users/logout.php">Logout</a></li>
                              </ul>
                           </div>
                        </li>
                     </ul>
                  </div>
               </nav>
            </header>
            <div class="SiteBody__StyledSiteBody-sc-s35vk9-0 ffIWqC">
               <aside class="SiteSidebar__StyledSiteSidebar-sc-esccow-0 hOUigR">
                  <ul id="lists" class="Sidebar__StyledSidebar-sc-14npny-0 cFwWTC">
                     <div class="list-section">
                        <li class="list <?php echo ($menuItemSelected == 'dashboard') ? 'active' : ''; ?>"><a href="<?php echo ($menuItemSelected == 'dashboard') ? '#' : 'index.php'; ?>" class="list-link"><i class="fa fa-home fa"></i>Dashboard</a></li>
                     </div>
                     <div class="list-section">
                        <li class="list <?php echo ($menuItemSelected == 'create-quiz') ? 'active' : ''; ?>"><a href="<?php echo ($menuItemSelected == 'create-quiz') ? '#' : 'create-quiz.php'; ?>" class="list-link"><i class="fa fa fa-paper-plane"></i>Create Quiz</a></li>
                        <li class="list <?php echo ($menuItemSelected == 'view-results') ? 'active' : ''; ?>"><a href="<?php echo ($menuItemSelected == 'view-results') ? '#' : 'view-results.php'; ?>" class="list-link"><i class="fa fa fa-share-alt fa-area-chart"></i>View Quiz Results</a></li>
                        <li class="list <?php echo ($menuItemSelected == 'answered-questions') ? 'active' : ''; ?>"><a href="<?php echo ($menuItemSelected == 'answered-questions') ? '#' : 'answered-questions.php'; ?>" class="list-link"><i class="fa fa-tachometer"></i>Answered Quizes</a></li>
                     </div>
                  </ul>
               </aside>
               <div class="SiteMain__StyledSiteMain-sc-3324pj-0 JBHSX">
                  <div class="Dashboard__Container-sc-8cv9bh-0 dmVVOt">
                     <div class="Box__StyledBox-sc-16nrscc-0 eozvv">
                        <div class="Box__StyledBox-sc-16nrscc-0 gqsDCz"><span data-cy="page-title" class="TextStyleTemplate-sc-1jbnw9u-0 fFlAMv Dashboard__StyledH1-sc-8cv9bh-1 bfKHbK"><?php echo $title; ?></span></div>
                        <div class="Box__StyledBox-sc-16nrscc-0 bQruIQ"></div>
                     </div>
