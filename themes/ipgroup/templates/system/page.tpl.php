<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>
<header>
    <div class="top-part__block">
        <div class="search__box-block">
            <div class="container">
                <input type="text" id="search" class="input-sm form-full" placeholder="Search Now">
                <a href="#!" class="search__close-btn">
                    <i class="fa fa-times" aria-hidden="true"></i> </a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                  <?php if (!empty($site_slogan)): ?>
                      <p class="lead"><?php print $site_slogan; ?></p>
                  <?php endif; ?>
                </div>
                <div class="col-sm-5">
                    <div class="social-link__block text-right">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i>
                        </a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="middel-part__block">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="logo">
                        <a href="<?php print $front_page; ?>">
                            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="top-info__block text-right">
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <p>
                                    13005 Greenvile Avenue
                                    <span> California, TX 70240</span>
                                </p>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>Call Us <span> +56 (0) 012 345 6789</span>
                                </p>
                            </li>
                            <li>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <p>Mail Us<span><a href="mailto:info@gmail.com">info@gmail.com</a></span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_nav stricky-header__top navbar-toggleable-md">
        <nav class="navbar navbar-default navbar-sticky bootsnav">
            <nav class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle hidden-lg-up" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <!-- End Header Navigation -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                  <?php if (!empty($primary_nav)): ?><?php print render($primary_nav); ?><?php endif; ?>
                </div>
                <!--navbar-collapse -->
    </div>
    </nav></div>
</header><!--Section End Here-->
<div class="main-container <?php print $container_class; ?>">
    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
          <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif; ?>
        <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
          <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?><?php print render($tabs); ?><?php endif; ?>
      <?php if (!empty($page['help'])): ?><?php print render($page['help']); ?><?php endif; ?>
      <?php if (!empty($action_links)): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>
</div>
<footer>
    <div class="top_footer_info__block ptb-20">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single_info__block">
                        <i class="fa fa-phone"></i>
                        <h4>0(000) 000 000 <span>Monday-Friday, 8am-7pm</span>
                        </h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_info__block">
                        <i class="fa fa-envelope-o"></i>
                        <h4>business@support.com
                            <span>Monday-Friday, 8am-7pm</span>
                        </h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_info__block">
                        <i class="fa fa-bullhorn"></i>
                        <h4>Request a quote <span>Get all the information</span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_footer__block pb-0 pt-60 pt-xs-40">
        <div class="container">
            <div class="row mb-60">
              <?php if (!empty($page['footer'])): ?><?php print render($page['footer']); ?><?php endif; ?>
            </div>
            <div class="copyriight_block ptb-20 mt-20">
                <div class="row">
                    <div class="col-sm-6">
                        <a href="#" class="footer__block-logo">
                            <img src="assets/images/footer_logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 text-right">
                        <p>
                            IPGroup, <?php print date('Y'); ?>, All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
