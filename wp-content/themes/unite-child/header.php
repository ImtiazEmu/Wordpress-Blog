<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package unite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- favicon -->

<?php if ( of_get_option( 'custom_favicon' ) ) { ?>
<link rel="icon" href="<?php echo of_get_option( 'custom_favicon' ); ?>" />
<?php } ?>

<!--[if IE]><?php if ( of_get_option( 'custom_favicon' ) ) { ?><link rel="shortcut icon" href="<?php echo of_get_option( 'custom_favicon' ); ?>" /><?php } ?><![endif]-->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<div class="container">
		<?php do_action( 'before' ); ?>
		<header id="masthead" class="site-header col-sm-12" role="banner">

            <div class="header-banner">
                <div class="b-large">
                    <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/inc/img/banner-gt-1150.png" alt="Banner gt 1150">
                </div>

            </div>

			<div class="social-header col-md-6">
				<?php unite_social(); // Social icons in header ?>
			</div>

		</header><!-- #masthead -->
	</div>
    <header class="nav-container">
        <nav role="navigation" class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="forced-horizontal">
                        <ul class="nav navbar-nav">
                            <li class="de">
                                <a data-method="post" href="#"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/inc/img/EN.png" alt="En"></a>
                            </li>
                            <li class="login">
                                <a href="/users/sign_in?locale=de">Login</a>
                            </li>
                            <li class="position">
                                <a data-toggle="dropdown" class="dropdown-toggle" role="button" href="#" id="position">Position<span class="caret"></span></a>
                                <ul aria-labelledby="position" role="menu" class="dropdown-menu">
                                    <li role="presentation"><a href="#" tabindex="-1" role="menuitem"><span title="translation missing: de.home.header.current_location" class="translation_missing">Current Location</span></a></li>
                                    <li role="presentation"><a href="#" tabindex="-1" role="menuitem"><span title="translation missing: de.home.header.Get automatically" class="translation_missing">Get Automatically</span></a></li>
                                    <li role="presentation"><a href="#" tabindex="-1" role="menuitem"><span title="translation missing: de.home.header.Enter manually" class="translation_missing">Enter Manually</span></a></li>
                                </ul>
                            </li>
                            <li class="share">
                                <a data-toggle="dropdown" class="dropdown-toggle" role="button" href="#" id="share">Share<span class="caret"></span></a>
                                <ul aria-labelledby="share" role="menu" class="dropdown-menu">
                                    <li role="presentation"><a href="#" tabindex="-1" role="menuitem">News-blog</a></li>
                                    <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Newsletter</a></li>
                                    <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Recommend</a></li>
                                    <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Facebook</a></li>
                                </ul>
                            </li>
                            <li class="contact">
                                <a data-toggle="dropdown" class="dropdown-toggle" role="button" href="#" id="contact"><span title="translation missing: de.home.header.contact" class="translation_missing">Contact</span><span class="caret"></span></a>
                                <ul aria-labelledby="contact" role="menu" class="dropdown-menu">
                                    <li role="presentation"><a href="#" tabindex="-1" role="menuitem">General</a></li>
                                    <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Request product</a></li>
                                    <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Technical problem</a></li>
                                    <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Report misbehaviour</a></li>
                                </ul>
                            </li>
                            <li class="help dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Help<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Introduction</a></li>
                                    <li><a href="/de/home/frequently_asked_questions">FAQ</a></li>
                                    <li><a href="#">Version &amp; Entwicklung</a></li>
                                </ul>
                            </li>
                            <li class="about-farmilio">
                                <a data-toggle="dropdown" class="dropdown-toggle" role="button" href="#" id="about-farmilio"><span title="translation missing: de.home.footer.about_fermilio" class="translation_missing">About Fermilio</span> <span class="caret"></span></a>
                                <ul aria-labelledby="about-farmilio" role="menu" class="dropdown-menu">
                                    <li role="presentation"><a href="#" tabindex="-1" role="menuitem">News-blog</a></li>
                                    <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Facebook</a></li>
                                    <li role="presentation"><a href="http://localhost:3000/de/home/terms_and_conditions?tab=imprint" tabindex="-1" role="menuitem">Imprint</a></li>
                                </ul>
                            </li>
                            <li class="terms-and-conditions">
                                <a data-toggle="dropdown" class="dropdown-toggle" role="button" id="t-and-c" href="#">Terms and Conditions<span class="caret"></span></a>
                                <ul aria-labelledby="t-and-c" role="menu" class="dropdown-menu">
                                    <li role="presentation"><a href="http://localhost:3000/de/home/terms_and_conditions?tab=gtc" tabindex="-1" role="menuitem">General Terms ans Conditions</a></li>
                                    <li role="presentation"><a href="http://localhost:3000/de/home/terms_and_conditions?tab=stc" tabindex="-1" role="menuitem">Service Terms ans Conditions</a></li>
                                    <li role="presentation"><a href="http://localhost:3000/de/home/terms_and_conditions?tab=pdp" tabindex="-1" role="menuitem">Privacy and Data Protection Policy</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <div class="logo">
                        <a href="http://localhost:3000/de"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/inc/img/farmilio_logo.png" alt="Farmilio logo"></a>
                    </div>
                    <a class="navbar-brand" href="http://localhost:3000/de"><img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/inc/img/farmilio_logo_onlyname_positive_rgb_560.png" alt="Farmilio logo onlyname positive rgb 560"></a>
                </div>
                <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="login">
                            <a href="/users/sign_in?locale=de">Login</a>
                        </li>
                        <li class="position">
                            <a data-toggle="dropdown" class="dropdown-toggle" role="button" href="#" id="position">Position<span class="caret"></span></a>
                            <ul aria-labelledby="position" role="menu" class="dropdown-menu">
                                <li role="presentation"><a href="#" tabindex="-1" role="menuitem"><span title="translation missing: de.home.header.current_location" class="translation_missing">Current Location</span></a></li>
                                <li role="presentation"><a href="#" tabindex="-1" role="menuitem"><span title="translation missing: de.home.header.Get automatically" class="translation_missing">Get Automatically</span></a></li>
                                <li role="presentation"><a href="#" tabindex="-1" role="menuitem"><span title="translation missing: de.home.header.Enter manually" class="translation_missing">Enter Manually</span></a></li>
                            </ul>
                        </li>
                        <li class="share">
                            <a data-toggle="dropdown" class="dropdown-toggle" role="button" href="#" id="share">Share<span class="caret"></span></a>
                            <ul aria-labelledby="share" role="menu" class="dropdown-menu">
                                <li role="presentation"><a href="#" tabindex="-1" role="menuitem">News-blog</a></li>
                                <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Newsletter</a></li>
                                <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Recommend</a></li>
                                <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Facebook</a></li>
                            </ul>
                        </li>
                        <li class="contact">
                            <a data-toggle="dropdown" class="dropdown-toggle" role="button" href="#" id="contact"><span title="translation missing: de.home.header.contact" class="translation_missing">Contact</span><span class="caret"></span></a>
                            <ul aria-labelledby="contact" role="menu" class="dropdown-menu">
                                <li role="presentation"><a href="#" tabindex="-1" role="menuitem">General</a></li>
                                <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Request product</a></li>
                                <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Technical problem</a></li>
                                <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Report misbehaviour</a></li>
                            </ul>
                        </li>
                        <li class="help dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Help<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Introduction</a></li>
                                <li><a href="/de/home/frequently_asked_questions">FAQ</a></li>
                                <li><a href="#">Version &amp; Entwicklung</a></li>
                            </ul>
                        </li>
                        <li class="about-farmilio">
                            <a data-toggle="dropdown" class="dropdown-toggle" role="button" href="#" id="about-farmilio"><span title="translation missing: de.home.footer.about_fermilio" class="translation_missing">About Fermilio</span> <span class="caret"></span></a>
                            <ul aria-labelledby="about-farmilio" role="menu" class="dropdown-menu">
                                <li role="presentation"><a href="#" tabindex="-1" role="menuitem">News-blog</a></li>
                                <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Facebook</a></li>
                                <li role="presentation"><a href="http://localhost:3000/de/home/terms_and_conditions?tab=imprint" tabindex="-1" role="menuitem">Imprint</a></li>
                            </ul>
                        </li>
                        <li class="terms-and-conditions">
                            <a data-toggle="dropdown" class="dropdown-toggle" role="button" id="t-and-c" href="#">Terms and Conditions<span class="caret"></span></a>
                            <ul aria-labelledby="t-and-c" role="menu" class="dropdown-menu">
                                <li role="presentation"><a href="http://localhost:3000/de/home/terms_and_conditions?tab=gtc" tabindex="-1" role="menuitem">General Terms ans Conditions</a></li>
                                <li role="presentation"><a href="http://localhost:3000/de/home/terms_and_conditions?tab=stc" tabindex="-1" role="menuitem">Service Terms ans Conditions</a></li>
                                <li role="presentation"><a href="http://localhost:3000/de/home/terms_and_conditions?tab=pdp" tabindex="-1" role="menuitem">Privacy and Data Protection Policy</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

    </header>

	<div id="content" class="site-content container">
