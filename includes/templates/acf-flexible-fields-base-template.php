<?php
/**
 * Template Name: ACF flexible field Loop
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<?php
  get_header();
  
	$GLOBALS['section_counter'] = 1;
    if ( have_rows( 'sections' ) ) : while ( have_rows( 'sections' ) ) : the_row();
      $row_template = strtolower( str_replace( ['_', ' '], '-', get_row_layout() ) );
      get_template_part( 'flexible-fields/' . $row_template );
      $GLOBALS['section_counter']++;
    endwhile; endif;
    
  get_footer();
?>