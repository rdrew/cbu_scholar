<?php if ($page['sidebar']): ?>
    <div class="l-page has-sidebar">
<?php else: ?>
    <div class="l-page">
<?php endif; ?>
    <?php print render($page['header']); ?>
    <div class="l-main">
        <div class="content l-content" role="main">
            <?php print render($page['highlighted']); ?>
            <?php //print $breadcrumb; ?>
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
            <?php print render($page['content']); ?>
            <?php print $feed_icons; ?>
        </div>
        <?php print render($page['sidebar']); ?>
    </div>
    <div class="grid-container">
        <?php print render($page['above-footer']); ?>
    </div>
    <?php print render($page['footer']); ?>
</div>

    <!-- /above footer -->

    <?php print render($page['offCanvas']); ?>
