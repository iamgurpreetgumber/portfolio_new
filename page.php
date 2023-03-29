<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<div class="main__container">
	<?php
	if ( is_front_page() ) {
		get_template_part( 'template-parts/page', 'front' );
	} else{
		get_template_part( 'template-parts/page', 'content' );
	} 
	?>
</div>
<?php get_footer(); ?>