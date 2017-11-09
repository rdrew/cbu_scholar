<?php

/**
* @file
* Default theme implementation to display a single Drupal page.
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
* - $secondary_menu_heading: The title of the menu used by the secondary links.
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
* - $page['branding']: Items for the branding region.
* - $page['header']: Items for the header region.
* - $page['navigation']: Items for the navigation region.
* - $page['help']: Dynamic help text, mostly for admin pages.
* - $page['highlighted']: Items for the highlighted content region.
* - $page['content']: The main content of the current page.
* - $page['sidebar_first']: Items for the first sidebar.
* - $page['sidebar_second']: Items for the second sidebar.
* - $page['footer']: Items for the footer region.
*
* @see template_preprocess()
* @see template_preprocess_page()
* @see template_process()
* @see omega_preprocess_page()
*/
?>
<div class="l-page">
    <header class="l-header" role="banner">




        <div class="grid-container top-bar">
            <div class="top-bar-left">
                <div class="logo-wrapper">

                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-logo">
                        <svg class="logo logo--header" viewBox="0 0 188 176" preserveAspectRatio="xMidYMid meet">
                            <polygon class="logo__bg-back" fill="#F89624" points="188,175.536 90.504,161.325 0,175.536 0,0 188,0"></polygon>
                            <polygon class="logo__bg-front" fill="#DD6E26" points="188,171.049 90.504,156.838 0,171.049 0,0 188,0"></polygon>
                            <g class="logo__name">
                            <g>
                            <path fill="#FFFFFF" d="M52.203 36.086c-0.114-1.574-1.802-2.623-3.489-2.623c-4.059 0-4.812 3.717-4.812 6.611 c0 3.398 1.028 6.611 4.608 6.611c1.754 0 3.35-0.865 3.625-2.62h2.394c-0.229 2.757-3.01 4.582-6.224 4.582 c-4.858 0-6.794-3.966-6.794-8.573c0-4.035 1.78-8.731 7.296-8.571c3.17 0.09 5.541 1.642 5.791 4.583H52.203z" transform="matrix(1 0 0 1 0 0)"></path>
                            <path fill="#FFFFFF" d="M61.798 42.744c-1.321 0.066-3.077 0.546-3.077 2.209c0 1.416 0.982 2.121 2.256 2.121 c2.555 0 3.033-2.212 2.988-4.331H61.798z M63.966 41.238c0-1.982-0.116-3.146-2.417-3.146c-1.094 0-2.121 0.638-2.144 1.824 h-2.279c0.113-2.508 2.076-3.398 4.332-3.398c2.349 0 4.671 0.707 4.671 3.899v5.472c0 0.502 0.023 1.459 0.093 2.418h-1.459 c-0.206 0-0.593 0.114-0.616-0.161c-0.045-0.524-0.09-1.026-0.113-1.55h-0.048c-0.704 1.438-1.981 2.052-3.555 2.052 c-1.982 0-3.99-1.025-3.99-3.259c0-3.215 2.849-4.151 5.563-4.151H63.966z" transform="matrix(1 0 0 1 0 0)"></path>
                            <path fill="#FFFFFF" d="M75.044 38.092c-2.46 0-3.235 2.417-3.235 4.491c0 2.143 0.614 4.491 3.03 4.491 c2.644 0 3.444-2.348 3.444-4.491C78.284 40.44 77.645 38.092 75.044 38.092 M69.643 38.913c-0.022-0.684-0.069-1.369-0.115-2.052 h2.211l0.071 1.823h0.044c0.663-1.64 2.1-2.165 3.899-2.165c3.214 0 4.812 2.965 4.812 6.065c0 2.941-1.37 6.064-5.497 6.064 c-0.933 0-2.441-0.456-3.194-1.642H71.81v5.677h-2.167V38.913z" transform="matrix(1 0 0 1 0 0)"></path>
                            <path fill="#FFFFFF" d="M90.639 41.489c0.046-1.916-0.821-3.396-2.918-3.396c-1.802 0-2.875 1.527-2.875 3.396H90.639z M84.846 42.996c-0.159 2.005 0.662 4.079 2.875 4.079c1.688 0 2.532-0.66 2.78-2.325h2.281c-0.342 2.599-2.351 3.898-5.084 3.898 c-3.672 0-5.13-2.597-5.13-5.973c0-3.351 1.687-6.157 5.312-6.157c3.42 0.069 5.039 2.233 5.039 5.404v1.073H84.846z" transform="matrix(1 0 0 1 0 0)"></path>
                            <path fill="#FFFFFF" d="M43.789 68.887h3.807c1.755 0 3.214-0.776 3.214-2.805s-1.459-2.804-3.214-2.804h-3.807V68.887z M43.789 61.315h2.828c2.164 0.069 3.694-0.318 3.694-2.484c0-2.167-1.53-2.553-3.694-2.485h-2.828V61.315z M41.508 70.847V54.386 h5.882c2.828 0 5.313 1.093 5.313 4.287c0 1.708-1.163 3.102-2.782 3.557v0.045c2.119 0.32 3.284 2.212 3.284 4.265 c0 1.914-1.253 3.351-2.988 3.989c-0.843 0.319-1.846 0.343-2.828 0.319H41.508z" transform="matrix(1 0 0 1 0 0)"></path>
                            <path fill="#FFFFFF" d="M58.63 70.847h-2.167V59.402h2.167v2.212h0.045c0.319-1.573 1.779-2.372 3.353-2.372 c0.272 0 0.501 0.023 0.752 0.023v2.05c-0.295-0.113-0.64-0.113-0.936-0.113c-2.737 0.091-3.214 1.549-3.214 3.966V70.847z" transform="matrix(1 0 0 1 0 0)"></path>
                            <path fill="#FFFFFF" d="M72.241 64.03c0.045-1.916-0.823-3.397-2.921-3.397c-1.799 0-2.869 1.527-2.869 3.397H72.241z M66.451 65.536c-0.162 2.005 0.657 4.08 2.869 4.08c1.689 0 2.532-0.661 2.784-2.325h2.279c-0.341 2.598-2.348 3.898-5.084 3.898 c-3.669 0-5.131-2.599-5.131-5.974c0-3.352 1.687-6.157 5.313-6.157c3.42 0.068 5.038 2.234 5.038 5.403v1.074H66.451z" transform="matrix(1 0 0 1 0 0)"></path>
                            <path fill="#FFFFFF" d="M77.642 59.402v-2.44l2.166-0.683v3.123l2.645-0.069v1.618l-2.645-0.021v7.386 c0 0.822 0.638 1.209 1.415 1.209c0.34 0 0.797-0.046 1.139-0.137v1.665c-0.501 0.022-0.98 0.137-1.484 0.137 c-0.521 0-0.933-0.025-1.457-0.115c-0.342-0.068-0.912-0.25-1.277-0.753c-0.388-0.548-0.501-0.591-0.501-2.119V60.93l-1.961 0.021 v-1.618L77.642 59.402z" transform="matrix(1 0 0 1 0 0)"></path>
                            <path fill="#FFFFFF" d="M89.817 69.616c2.576 0 3.419-2.051 3.419-4.491c0-2.441-0.843-4.492-3.419-4.492 c-2.578 0-3.422 2.051-3.422 4.492C86.396 67.565 87.24 69.616 89.817 69.616 M95.517 65.125c0 3.557-1.938 6.065-5.699 6.065 c-3.762 0-5.699-2.508-5.699-6.065c0-3.559 1.937-6.065 5.699-6.065C93.578 59.06 95.517 61.566 95.517 65.125" transform="matrix(1 0 0 1 0 0)"></path>
                            <path fill="#FFFFFF" d="M100.736 61.09h0.045c0.729-1.438 2.327-2.03 3.465-2.03c0.799 0 4.332 0.206 4.332 3.876v7.911h-2.164 v-7.204c0-1.894-0.798-2.919-2.623-2.919c0 0-1.187-0.068-2.097 0.843c-0.321 0.32-0.913 0.822-0.913 3.056v6.224h-2.168V59.402 h2.123V61.09z" transform="matrix(1 0 0 1 0 0)"></path>
                            <path fill="#FFFFFF" d="M54.781 87.823c0.068 4.24-2.166 6.863-6.634 6.863c-4.47 0-6.705-2.623-6.637-6.863v-9.942h2.281v10.488 c0.069 2.827 1.756 4.354 4.356 4.354c2.597 0 4.287-1.526 4.353-4.354V77.881h2.281V87.823z" transform="matrix(1 0 0 1 0 0)"></path>
                            <path fill="#FFFFFF" d="M60.958 84.583h0.045c0.73-1.435 2.325-2.029 3.466-2.029c0.798 0 4.333 0.206 4.333 3.877v7.913h-2.166 v-7.208c0-1.891-0.797-2.917-2.624-2.917c0 0-1.184-0.068-2.096 0.843c-0.321 0.321-0.913 0.822-0.913 3.055v6.227h-2.166V82.896 h2.121V84.583z" transform="matrix(1 0 0 1 0 0)"></path>
                            </g>
                            <path fill="#FFFFFF" d="M72.607 82.896h2.167v11.448h-2.167V82.896z M72.403 77.881h2.576v2.348h-2.576V77.881z" transform="matrix(1 0 0 1 0 0)"></path>
                            <polygon fill="#FFFFFF" points="82.229,94.344 77.441,82.896 79.833,82.896 83.482,91.971 87.038,82.896 89.41,82.896 84.394,94.344" transform="matrix(1 0 0 1 0 0)"></polygon>
                            <g>
                            <path fill="#FFFFFF" d="M98.756 87.526c0.046-1.916-0.821-3.397-2.918-3.397c-1.802 0-2.872 1.528-2.872 3.397H98.756z M92.966 89.031c-0.16 2.004 0.66 4.079 2.872 4.079c1.688 0 2.53-0.659 2.781-2.323h2.281c-0.342 2.598-2.35 3.898-5.087 3.898 c-3.67 0-5.128-2.6-5.128-5.974c0-3.352 1.688-6.158 5.313-6.158c3.418 0.069 5.039 2.235 5.039 5.405v1.073H92.966z" transform="matrix(1 0 0 1 0 0)"></path>
                            <path fill="#FFFFFF" d="M106.256 94.344h-2.164V82.896h2.164v2.213h0.047c0.317-1.573 1.779-2.371 3.351-2.371 c0.274 0 0.501 0.021 0.751 0.021v2.051c-0.295-0.113-0.637-0.113-0.936-0.113c-2.733 0.091-3.213 1.55-3.213 3.967V94.344z" transform="matrix(1 0 0 1 0 0)"></path>
                            <path fill="#FFFFFF" d="M116.765 82.554c2.167 0 4.606 0.914 4.446 3.512h-2.279c0.092-1.459-1.025-1.938-2.279-1.938 c-1.163 0-2.1 0.547-2.1 1.824c0 1.275 1.962 1.366 2.783 1.62c1.938 0.638 4.172 0.863 4.172 3.442 c0 2.804-2.736 3.671-5.085 3.671c-2.395 0-4.398-1.096-4.378-3.742h2.283c0.043 1.415 1.002 2.167 2.324 2.167 c1.275 0 2.575-0.501 2.575-1.983c0-2.552-6.954-0.637-6.954-5.107C112.273 83.626 114.691 82.554 116.765 82.554" transform="matrix(1 0 0 1 0 0)"></path>
                            </g>
                            <path fill="#FFFFFF" d="M124.357 82.896h2.167v11.448h-2.167V82.896z M124.15 77.881h2.577v2.348h-2.577V77.881z" transform="matrix(1 0 0 1 0 0)"></path>
                            <g>
                            <path fill="#FFFFFF" d="M130.537 82.896v-2.439l2.165-0.683v3.122l2.643-0.066v1.618l-2.643-0.022v7.386 c0 0.822 0.636 1.209 1.412 1.209c0.343 0 0.8-0.045 1.14-0.137v1.664c-0.501 0.023-0.98 0.139-1.48 0.139 c-0.525 0-0.935-0.024-1.461-0.115c-0.342-0.068-0.91-0.252-1.275-0.752c-0.387-0.548-0.5-0.592-0.5-2.121v-7.273l-1.963 0.022 v-1.618L130.537 82.896z" transform="matrix(1 0 0 1 0 0)"></path>
                            </g>
                            <polygon fill="#FFFFFF" points="141.363,98.719 139.154,98.719 140.886,94.298 136.122,82.896 138.537,82.896 142.116,91.926 145.766,82.896 148.092,82.896" transform="matrix(1 0 0 1 0 0)"></polygon>
                            </g>
                            <g class="logo__happen">
                            <path fill="#FFFFFF" d="M68.159 127.129l-0.511-0.016c-1.683 0-2.573-0.536-3.033-0.986c-0.592-0.592-0.88-1.43-0.88-2.557 c0-2.468 1.849-3.882 5.075-3.882c3.773 0 5.032 3.151 5.043 3.179l0.075 0.2l-0.106 0.179 C72.296 125.82 70.393 127.129 68.159 127.129 M68.515 117.883c-2.275 0-6.586 1.188-6.586 5.688c0 1.613 0.476 2.908 1.416 3.834 c0.697 0.694 2.02 1.518 4.384 1.518c0.22 0.006 0.353 0.009 0.486 0.009c1.818 0 3.483-0.671 4.947-2.003l0.725-0.654v1.315h1.805 v-12.196c0-3.483-2.539-5.738-6.465-5.738c-3.384 0-4.957 1.102-6.625 2.431l1.135 1.405c1.492-1.195 2.721-2.028 5.49-2.028 c2.961 0 4.661 1.433 4.661 3.931v5.569l-0.761-0.874C73.107 120.068 71.185 117.883 68.515 117.883"></path>
                            <path fill="#FFFFFF" d="M79.686 136.93h1.807v-22.855l0.094-0.118c0.898-1.136 2.501-2.495 5.01-2.495 c1.967 0 6.549 0.764 6.549 7.827c0 6.416-4.648 7.825-6.438 7.825c-0.611 0-1.127-0.012-1.665-0.172l-0.014 1.853 c0.537 0.108 1.068 0.128 1.679 0.128c3.185 0 8.242-2.616 8.242-9.634c0-7.104-4.316-9.634-8.353-9.634 c-1.626 0-3.118 0.445-4.43 1.328l-0.674 0.451v-0.782h-1.807V136.93z"></path>
                            <path fill="#FFFFFF" d="M97.613 136.93h1.807v-22.855l0.093-0.118c0.896-1.136 2.495-2.495 5.009-2.495 c1.969 0 6.546 0.764 6.546 7.827c0 6.416-4.644 7.825-6.433 7.825c-0.616 0-1.131-0.012-1.671-0.172l-0.01 1.853 c0.534 0.108 1.071 0.128 1.681 0.128c3.184 0 8.24-2.616 8.24-9.634c0-7.104-4.315-9.634-8.354-9.634 c-1.632 0-3.121 0.445-4.428 1.328l-0.674 0.451v-0.782h-1.807V136.93z"></path>
                            <path fill="#FFFFFF" d="M117.892 120.215v-0.816c0-5.361 3.085-8.16 6.13-8.16c2.115 0 4.684 0.881 5.559 3.348l0.131 0.379 L117.892 120.215z M124.021 109.434c-3.944 0-7.939 3.416-7.939 9.965c0 6.895 4.548 9.352 8.803 9.352 c4.513 0 7.585-3.813 7.884-6.584h-1.819c-0.312 1.887-2.561 4.775-6.064 4.775c-1.961 0-5.422-0.584-6.598-4.514l-0.109-0.365 l13.539-6.01c-0.039-0.308-0.097-0.654-0.097-0.654C131.012 111.661 128.17 109.434 124.021 109.434"></path>
                            <polygon fill="#FFFFFF" points="56.652,127.558 58.459,127.558 58.459,102.477 56.652,102.477 56.652,113.217 43.316,113.217 43.316,102.477 41.509,102.477 41.509,127.558 43.316,127.558 43.316,115.012 56.652,115.012"></polygon>
                            <path fill="#FFFFFF" d="M147.941 127.558h1.805v-12.302c0-2.16-1.221-5.822-5.795-5.822c-2.885 0-4.916 1.279-6.188 2.242 l-0.695 0.521v-1.574h-1.804v16.935h1.804v-13.259l0.109-0.123c1.107-1.263 3.012-2.934 6.773-2.934c3.699 0 3.99 3.068 3.99 4.014 V127.558z"></path>
                            <path fill="#FFFFFF" d="M155.078 126.248c0 0.785-0.64 1.426-1.426 1.426s-1.427-0.641-1.427-1.426 c0-0.787 0.641-1.426 1.427-1.426S155.078 125.461 155.078 126.248"></path>
                            </g>
                        </svg>
                    </a>
                </div>

            </div>
            <div class="top-bar-right">
                <?php print render($page['header']); ?>

                <button type="button" class="mobile-menu__button button" data-toggle="offCanvas">Open Menu</button>
            </div>
        </div>





    </header>

<!-- showcase -->

<!-- /showcase -->


    <div class="l-main">
       <!-- <div class="content grid-container l-content" role="main">
            <?php print render($page['highlighted']); ?>
            <a id="main-content"></a>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?>
            <h1><?php print $title; ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php print $messages; ?>
            <?php print render($tabs); ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            <?php print $feed_icons; ?>
        </div>-->

            <?php print render($page['content']); ?>
    </div>
    <!-- above footer -->
    <div class="grid-container">
        <div class="grid-x grid-margin-x above-footer">
            <div class="small-12 medium-6 cell">

                <div class="list-block call-out">
                    <a href="#">
                        <h2 class="list-block__title">
                        Recently Added Citations
                        </h2>
                    </a>

                    <ul class="list-block__list">
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                        <li><a href="#">Aliquam tincidunt mauris eu risus.</a></li>
                        <li><a href="#">Vestibulum auctor dapibus neque.</a></li>
                        <li><a href="#">Nunc dignissim risus id metus.</a></li>
                        <li><a href="#">Cras ornare tristique elit.</a></li>
                        <li><a href="#">Vivamus vestibulum nulla nec ante.</a></li>
                        <li><a href="#">Praesent placerat risus quis eros.</a></li>
                    </ul>
                </div>
            </div>

            <div class="small-12 medium-6 cell">

                <div class="list-block call-out">
                    <a href="#">
                        <h2 class="list-block__title">
                        Recently Added Theses
                        </h2>
                    </a>

                    <ul class="list-block__list">
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                        <li><a href="#">Aliquam tincidunt mauris eu risus.</a></li>
                        <li><a href="#">Vestibulum auctor dapibus neque.</a></li>
                        <li><a href="#">Nunc dignissim risus id metus.</a></li>
                        <li><a href="#">Cras ornare tristique elit.</a></li>
                        <li><a href="#">Vivamus vestibulum nulla nec ante.</a></li>
                        <li><a href="#">Praesent placerat risus quis eros.</a></li>
                    </ul>
                </div>
            </div>
            <?php print render($page['above-footer']); ?>
        </div>
    </div>

    <!-- /above footer -->





    <footer class="l-footer" role="contentinfo">
        <div class="top-bar grid-container">
            <div class="top-bar-left">
                <small>
                    <?php print render($page['footer']); ?>
                </small>
            </div>
            <div class="top-bar-right">

                <ul class="menu social-icons">
                    <li><img src="//via.placeholder.com/42X42?text=icon"></li>
                    <li><img src="//via.placeholder.com/42X42?text=icon"></li>
                    <li><img src="//via.placeholder.com/42X42?text=icon"></li>
                    <li><img src="//via.placeholder.com/42X42?text=icon"></li>
                    <li><img src="//via.placeholder.com/42X42?text=icon"></li>
                    <li><img src="//via.placeholder.com/42X42?text=icon"></li>
                </ul>
            </div>
        </div>
    </footer>






</div>
