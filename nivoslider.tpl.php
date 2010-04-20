<?php
// $Id$

/**
 * @file nivoslider.tpl.php
 * Default theme implementation for nivo slider.
 *
 * Available variables:
 * - $images: The array of images to display.
 * - $defaults: The nivo slider defaults.
 * - $sliderid: The nivo slider id
 */

$css = '';

if ( $defaults['css'] != '' ) {
  $css = ' class="' . $defaults['css'] . '"';
}

?>
<div id="$sliderid"<?php echo $css; ?>>
  <?php

  foreach ( $images as $image ) {
    if ( is_array($image) ) {
      $output .= '<img ' . drupal_attributes($image) . ' />';
    }
    else {
      $output .= '<img src="' . check_plain($image) . '" />';
    }
  }

  echo $output;

  ?>
</div>