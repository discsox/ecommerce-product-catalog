<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<style> .post-type-archive-al_product header.al_product {
		margin: 0 auto;
		} 
		p#breadcrumbs { 
		max-width: 1080px;
		margin: 0 auto;
		}
		.single .product-entry {margin: 0 auto;} .tax-al_product-cat .entry-content {padding: 0 176px 0 40px;} .post-type-archive .entry-summary {padding: 0; }</style>
			<?php /* The loop */ ?>
			<?php content_product_adder(); ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>