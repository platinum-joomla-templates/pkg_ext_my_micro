<?php
/*
*------------------------------------------------------------------------------ 
* @copyright      Copyright (C) 20011-2014 Ext-Joom.com. All Rights Reserved.
* @license        Commercial license; see http://www.ext-joom.com
* @authors        Ext-Joom.com
* @websites:  	  http://www.ext-joom.com 
* @date modified: 07/03/2014 - 13:00 
*------------------------------------------------------------------------------
*/

 
// no direct access
defined('_JEXEC') or die;
?>

<div class="span4 col-md-4">
	<div class="tpl-preview">
		<img src="<?php echo T3_TEMPLATE_URL ?>/template_preview.png" alt="Template Preview"/>
	</div>
</div>
<div class="span8 col-md-8">
	<div class="t3-admin-overview-header">
		<h2>
			<?php echo JText::_('T3_TPL_DESC_1') ?>
			<small><?php echo JText::_('T3_TPL_DESC_2') ?></small>
		</h2>
		<p><?php echo JText::_('T3_TPL_DESC_3') ?></p>
	</div>
	<div class="t3-admin-overview-body">
		<h4><?php echo JText::_('T3_TPL_DESC_4') ?></h4>
		<ul class="t3-admin-overview-features">
			<li><?php echo JText::_('T3_TPL_DESC_5') ?></li>
			<li><?php echo JText::_('T3_TPL_DESC_6') ?></li>
			<li><?php echo JText::_('T3_TPL_DESC_7') ?></li>
			<li><?php echo JText::_('T3_TPL_DESC_8') ?></li>
		</ul>
	</div>
</div>