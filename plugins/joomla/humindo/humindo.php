<?php
/*------------------------------------------------------------------------
# humindo.php - humindo
# ------------------------------------------------------------------------
# author    humindo - Richard Greslehner
# copyright Copyright (C) 2017 humindo.com. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.humindo.com
# Technical Support:  contact@humindo.com
-------------------------------------------------------------------------*/
// no direct access
defined('JPATH_BASE') or die( 'Restricted access' ); 
 
/**
 * Example system plugin
 */
class plgSystemHumindo extends JPlugin
{
	function onBeforeRender() {
		if ( JFactory::getApplication()->isSite()) {
			$document = JFactory::getDocument();
			$js_code = "
				(function() {
					var s = document.createElement('script');
					s.type = 'text/javascript';
					s.async = true;
					s.src = '//www.humindo.at/loader.js';
					var x = document.getElementsByTagName('head')[0];
					x.appendChild(s);
				})();
				";
			$document->addScriptDeclaration($js_code);
		}
	}
}
