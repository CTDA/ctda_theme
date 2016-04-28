<?php
/**
 * @file
 * Returns the HTML for the footer region.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728140
 */
?>

<div id="branding" class="branding branding-top <?php print $classes; ?>">
  <div class="limiter">
    <?php if ($content): ?>
      <?php print $content; ?>
    <?php endif; ?>
  </div>
</div>
