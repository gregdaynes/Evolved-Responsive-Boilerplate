<?php // no direct access
defined('_JEXEC') or die('Restricted access');

// setup
$app = JFactory::getApplication();
$document = JFactory::getDocument();
$dir = 'templates/'.$app->getTemplate();

JError::raiseWarning(200, 'test message');
JError::raiseNotice(100, 'test');

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
$document->addStylesheet($dir.'/css/template_css.css');

// javascript
$document->addScript($dir.'/js/modernizr-2.5.3.js');
$document->addScript($dir.'/js/jquery-1.7.1.js');
$document->addScript($dir.'/bootstrap/js/bootstrap-alert.js');
$document->addScript($dir.'/bootstrap/js/bootstrap-button.js');
$document->addScript($dir.'/bootstrap/js/bootstrap-carousel.js');
$document->addScript($dir.'/bootstrap/js/bootstrap-collapse.js');
$document->addScript($dir.'/bootstrap/js/bootstrap-dropdown.js');
$document->addScript($dir.'/bootstrap/js/bootstrap-modal.js');
//$document->addScript($dir.'/bootstrap/js/bootstrap-popover.js');
$document->addScript($dir.'/bootstrap/js/bootstrap-scrollspy.js');
$document->addScript($dir.'/bootstrap/js/bootstrap-tab.js');
$document->addScript($dir.'/bootstrap/js/bootstrap-tooltip.js');
$document->addScript($dir.'/bootstrap/js/bootstrap-transition.js');
$document->addScript($dir.'/bootstrap/js/bootstrap-typeahead.js');
$document->addScript($dir.'/js/error.js', 'text/javascript');
$document->addScript($dir.'/js/responsive-images.js', 'text/javascript');

// inline scripts
$ga = "var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)}(document,'script'));";
//$document->addScriptDeclaration($ga);

		
// load mobile helper
require_once('mobile.php');