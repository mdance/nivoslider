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

if ( is_array($images) ) {
  foreach ( $images as $image ) {
    if ( is_array($image) ) {
      $imageoutput .= '<img' . drupal_attributes($image) . ' />';
    }
    else {
      $imageoutput .= '<img src="' . check_plain($image) . '" />';
    }
  }
}

?>
<div id="<?php echo $sliderid; ?>"<?php echo $css; ?>>
  <?php echo $imageoutput; ?>
</div>