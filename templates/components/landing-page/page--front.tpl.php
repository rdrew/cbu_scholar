<div class="l-page">
    <?php print render($page['header']); ?>
    <div class="l-main">
        <?php //print $messages; ?>
        <?php print render($page['content']); ?>
    </div>
    <!-- above footer -->
    <div class="grid-container">
        <?php print render($page['above-footer']); ?>
    </div>
    <?php print render($page['footer']); ?>
</div>
    <?php print render($page['offCanvas']); ?>
