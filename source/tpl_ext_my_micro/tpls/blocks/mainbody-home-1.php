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

defined('_JEXEC') or die;
?>

<div class="container ext-home">
	<div class="row">
		<?php if ($this->countModules('slider')) : ?>
		<div class="col-xs-12 col-md-3 home-1">
			<jdoc:include type="modules" name="<?php $this->_p('home-1') ?>" style="T3Xhtml" />
		</div>
		<?php endif ?>
		
		<?php if ($this->countModules('slider')) : ?>
		<div class="col-xs-12 col-md-9 home-2">
			<jdoc:include type="modules" name="<?php $this->_p('home-2') ?>" style="T3Xhtml" />
		</div>
		<?php endif ?>
	</div>
</div>
