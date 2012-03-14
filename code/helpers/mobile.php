<?php 

/**
* Mobile meta & links
*
* https://raw.github.com/gist/472519/0c3dd379521a386cf4d98269b8987456100b08b4/mobile-meta-links.html
*
* Reference
*
* Custom Icon and Image Creation Guidelines:
* http://developer.apple.com/library/safari/#documentation/UserExperience/Conceptual/MobileHIG/IconsImages/IconsImages.html
*
* Configuring Web Applications:
* http://developer.apple.com/library/safari/#documentation/appleapplications/reference/safariwebcontent/configuringwebapplications/configuringwebapplications.html
*
* Configuring the Viewport:
* http://developer.apple.com/library/safari/#documentation/appleapplications/reference/safariwebcontent/UsingtheViewport/UsingtheViewport.html
*
* Optimizing Web Content:
* http://developer.apple.com/library/safari/#documentation/appleapplications/reference/safariwebcontent/OptimizingforSafarioniPhone/OptimizingforSafarioniPhone.html
*/


/**
* VIEWPORT
*/

// optimized for mobile
// <meta name="viewport" content="width=device-width, initial-scale=1" />
$document->setMetaData('viewport', 'width=device-width, initial-scale=1');

// optimized for mobile, zoom/scaling disabled
// <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
$document->setMetaData('viewport', 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0');


/**
* BROWSER CHROME
*/

// status bar styles: default, black, or black-translucent
// <meta name="apple-mobile-web-app-status-bar-style" content="black" />	
$document->setMetaData('apple-mobile-web-app-status-bar-style', 'black');

// hides browser chrome
// <meta name="apple-mobile-web-app-capable" content="yes" />
$document->setMetaData('apple-mobile-web-app-capable', 'yes');


/**
* HOME SCREEN ICONS
*/

// home screen icon
// <link rel="apple-touch-icon" href="/customIcon.png" />
$document->addHeadLink($dir.'/icons/customIcon.png', 'apple-touch-icon');

// home screen icon - ipad
// <link rel="apple-touch-icon" href="/customIcon.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px)" />
// <link rel="apple-touch-icon" sizes="72x72" href="/customIcon.png" />
$document->addHeadLink($dir.'/icons/customIcon72.png', 'apple-touch-icon', 'rel', array('sizes'=>'72x72'));

// home screen icon - high res
// <link rel="apple-touch-icon" href="/customIcon.png" media="screen and (-webkit-min-device-pixel-ratio: 2)" />
// <link rel="apple-touch-icon" sizes="114x114" href="/customIcon.png" />
$document->addHeadLink($dir.'/icons/customIcon114.png', 'apple-touch-icon', 'rel', array('sizes'=>'114x114'));

// home screen icon, omits iOS embellishments, works in Android
// <link rel="apple-touch-icon-precomposed" href="/customIcon.png" /> 
$document->addHeadLink($dir.'/icons/customIconPrecomposed.png', 'apple-touch-icon-precomposed');

// home screen icon, omits iOS embellishments - ipad
// <link rel="apple-touch-icon-precomposed" href="/customIcon.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px)" />
// <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/customIcon.png" /> 
$document->addHeadLink($dir.'/icons/customIconPrecomposed72.png', 'apple-touch-icon-precomposed', 'rel', array('sizes'=>'72x72'));

// home screen icon, omits iOS embellishments - high res
// <link rel="apple-touch-icon-precomposed" href="/customIcon.png" media="screen and (-webkit-min-device-pixel-ratio: 2)" /> 
// <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/customIcon.png" /> 
$document->addHeadLink($dir.'/icons/customIconPrecomposed114.png', 'apple-touch-icon-precomposed', 'rel', array('sizes'=>'114x114'));


/**
* STARTUP IMAGES
*/

// startup image for web apps - iPad - landscape (748x1024) 
//     Note: iPad landscape startup image has to be exactly 748x1024 pixels (portrait, with contents rotated).-->
//<link rel="apple-touch-startup-image" href="img/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />


// startup image for web apps - iPad - portrait (768x1004)
// <link rel="apple-touch-startup-image" href="img/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />


// startup image for web apps (320x460)
// <link rel="apple-touch-startup-image" href="img/iphone.png" media="screen and (max-device-width: 320px)" />
