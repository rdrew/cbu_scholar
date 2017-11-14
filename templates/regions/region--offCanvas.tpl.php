<?php if ($content): ?>

<div class="mobile-menu off-canvas position-right" id="offCanvas" data-off-canvas>

    <?php print $content; ?>
<!-- Close button -->
<button class="close-button" aria-label="Close menu" type="button" data-close>
    <span aria-hidden="true">&times;</span>
</button>

<!-- Menu -->
<ul class="list-group">
    <li class="list-group-item active">Scholars</li>
    <li class="list-group-item">Departments</li>
    <li class="list-group-item">CBU Works</li>
    <li class="list-group-item">My Lists</li>
    <li class="list-group-item">Help</li>
    <li class="list-group-item">Contact Us</li>
</ul>

</div>

<div class="off-canvas-content" data-off-canvas-content>
    <!-- Your page content lives here -->
</div>
<?php endif; ?>

