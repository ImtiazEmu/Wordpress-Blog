<?php
/**
 * The Header for Customizr.
 *
 * Displays all of the <head> section and everything up till <div id="main-wrapper">
 *
 * @package Customizr
 * @since Customizr 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>                          
<!--<![endif]-->

	<?php 
		//the '__before_body' hook is used by TC_header_main::$instance->tc_head_display()
		do_action( '__before_body' ); 
	?>

	<body <?php body_class(); ?> <?php echo tc__f('tc_body_attributes' , 'itemscope itemtype="http://schema.org/WebPage"') ?>>



<div style="display: none; width: 190px; position: absolute; left: 15px; top: 907px;" class="pac-container"></div>
		<?php do_action( '__before_header' ); ?>
<div class="header-banner">
    <div class="b-320">
        <img src="/assets/deletables/banner-320.png" alt="Banner 320">
    </div>
    <div class="b-480">
        <img src="/assets/deletables/banner-480.png" alt="Banner 480">
    </div>
    <div class="b-768">
        <img src="/assets/deletables/banner-768.png" alt="Banner 768">
    </div>
    <div class="b-large">
        <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/inc/assets/img/banner-gt-1150.png" alt="Banner gt 1150">
    </div>

</div>
	   	<header class="<?php echo tc__f('tc_header_classes', 'tc-header clearfix row-fluid') ?>" role="banner">
			<div class="container">
				<div class="row">
					<nav class="navbar navbar-default" role="navigation" style="padding: 20px; float: left !important;">
					  <div class="navbar-header">
				          <a href="#" class="brand" style="font-size:30px">Farmilio</a>
				      </div>
					</nav>
				</div>
			</div>
		</header>

		<?php 
		 	//This hook is filtered with the slider : TC_slider::$instance->tc_slider_display()
			do_action ( '__after_header' )
		?>