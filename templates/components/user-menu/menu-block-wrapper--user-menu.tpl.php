<?php
/**
 * @file
 * Default theme implementation to wrap menu blocks.
 *
 * Available variables:
 * - $content: The renderable array containing the menu.
 * - $classes: A string containing the CSS classes for the DIV tag. Includes:
 *   menu-block-DELTA, menu-name-NAME, parent-mlid-MLID, and menu-level-LEVEL.
 * - $classes_array: An array containing each of the CSS classes.
 *
 * The following variables are provided for contextual information.
 * - $delta: (string) The menu_block's block delta.
 * - $config: An array of the block's configuration settings. Includes
 *   menu_name, parent_mlid, title_link, admin_title, level, follow, depth,
 *   expanded, and sort.
 *
 * @see template_preprocess_menu_block_wrapper()
 */
$is_search = module_invoke('islandora_solr', 'block_view', 'simple');
?>
<div class="<?php print $classes; ?>">
  <?php print render($content); ?>

<span class="search-dropdown__button" title="Search" type="button" data-animate="slide-in-down" data-toggle="search-dropdown">Search</span>
<div class="search-dropdown__pane dropdown-pane"  id="search-dropdown" data-position="bottom" data-alignment="right" data-auto-focus="true" data-close-on-click="true" data-dropdown >
<?php print render($is_search['content']); ?>
</div><?php print $frontpage; ?>

</div>
