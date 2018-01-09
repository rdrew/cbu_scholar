<?php
//dpm($content);
$menu = menu_navigation_links('main-menu');
$is_search = module_invoke('islandora_solr', 'block_view', 'simple');
?>
    <div id="Showcase">
        <div class="inside">
            <?php print render($content['field_cbu_slideshow']); ?>
            <!-- slideshow -->
            <div class="showcase-top">
                <h1 class="site-title">CBU <span class="yellow">Scholar</span></h1>
                <?php print render($is_search['content']); ?>
            </div>
            <div class="showcase-bottom">
                <h3 class="collection-menu__title">
                    Browse Collections
                </h3>
                <?php print theme('links__main-menu', array('links' => $menu, 'attributes' => array('class'=> 'main-menu align-center button-group menu'))); ?>
            </div>
        </div>
    </div>
    <div class="grid-container">
        <?php print $messages; ?>
        <?php print render($content['body']); ?>
    </div>
