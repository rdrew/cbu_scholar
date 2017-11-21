<?php
$mainMenu = menu_navigation_links('main-menu');
$userMenu = menu_navigation_links('user-menu');
?>

<?php //if ($content): ?>
<div class="mobile-menu off-canvas position-right" id="offCanvas" data-off-canvas>
    <!-- Close button -->
    <button class="close-button" aria-label="Close menu" type="button" data-close>
        <span aria-hidden="true">&times;</span>
    </button>


    <?php print $content; ?>
</div>
<?php //endif; ?>
