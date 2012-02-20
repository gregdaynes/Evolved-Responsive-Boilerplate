<?php // no direct access
defined('_JEXEC') or die('Restricted access');

// setup
$app = JFactory::getApplication();
$document = JFactory::getDocument();
$dir = 'templates/'.$app->getTemplate();

// cleaner
$this->setGenerator('/humans.txt');
unset($document->_links['/index.php?format=feed&amp;type=rss']);
unset($document->_links['/index.php?format=feed&amp;type=atom']);
unset($document->_scripts['/media/system/js/core.js']);
unset($document->_scripts['/media/system/js/mootools-core.js']);
unset($document->_scripts['/media/system/js/caption.js']);
unset($document->_script['text/javascript']);
unset($document->_metaTags['http-equiv']);

// meta data
$document->setMetaData('charset', 'utf-8' );
$document->setMetaData('X-UA-Compatible', 'IE=edge,chrome=1', true);

// stylesheets
$document->addStylesheet($dir.'/css/bootstrap.css');
$document->addStylesheet($dir.'/css/responsive.css');

// javascript
$document->addScript($dir.'/js/modernizr-2.5.3.js');
$document->addScript($dir.'/js/mootools-core-1.4.4-full-nocompat.js', 'text/javascript', true);
$document->addScript($dir.'/js/mootools-more-1.4.0.1.js', 'text/javascript', true);

// inline scripts
$ga = "var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)}(document,'script'));";
$document->addScriptDeclaration($ga);