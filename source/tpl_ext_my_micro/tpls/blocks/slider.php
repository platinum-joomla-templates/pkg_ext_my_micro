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

<?php if ($this->countModules('slider')) : ?>
<div class="wrap ext-slider-wrap">	
	<div class="ext-slider">
		<jdoc:include type="modules" name="<?php $this->_p('slider') ?>" style="raw" />
	</div>
</div>
<?php endif ?>