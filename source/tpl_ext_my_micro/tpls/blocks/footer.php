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

<!-- FOOTER -->
<footer id="t3-footer" class="wrap t3-footer">

	<?php if ($this->checkSpotlight('footnav', 'footer-1, footer-2, footer-3, footer-4, footer-5, footer-6')) : ?>
		<!-- FOOT NAVIGATION -->
		<div class="container hidden-xs">
			<?php $this->spotlight('footnav', 'footer-1, footer-2, footer-3, footer-4, footer-5, footer-6') ?>
		</div>
		<!-- //FOOT NAVIGATION -->
	<?php endif ?>

	<section class="t3-copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-6 copyright <?php $this->_c('footer') ?>">
					<jdoc:include type="modules" name="<?php $this->_p('footer') ?>" style="raw" />          
         		</div>
				
				<div class="col-md-6 copyright <?php $this->_c('footernav') ?>">
					<jdoc:include type="modules" name="<?php $this->_p('footernav') ?>" style="raw" />          
         		</div>
				
				<?php if ($this->getParam('t3-rmvlogo', 1)): ?>
					<div class="col-xs-12 poweredby text-hide">
						<a class="t3-logo t3-logo-color" href="http://platinum-joomla-templates.com/" title="<?php echo JText::_('T3_POWER_BY_TEXT') ?>"
						   target="_blank" <?php echo method_exists('T3', 'isHome') && T3::isHome() ? '' : 'rel="nofollow"' ?>><?php echo JText::_('T3_POWER_BY_HTML') ?></a>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>

</footer>
<!-- //FOOTER -->