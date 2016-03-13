<?php
/*
* @Mask email
* Created By Juraj Vysvader
* https://www.unisoftdev.tech/
* @license http://www.gnu.org/copyleft/lgpl.html GNU/GPL
* @Copyright (C) 2016 Juraj Vysvader. All rights reserved.
*/

defined('_JEXEC') or die;

class plgContentMaskemail extends JPlugin{


	public function onContentPrepare($context, &$row, &$params, $page = 0)
		{
				$document = JFactory::getDocument();
				$document->addScript(JURI::base(). "plugins/content/maskemail/maskemail.js");
				$row->text = str_replace("@","unisoftdevmask",$row->text);
				
				
		}		
}

?>
