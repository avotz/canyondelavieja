<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package canyon
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php canyon_post_thumbnail(); ?>

	<div class="entry-content">
		<div class="contact-container flex-container-sb">
            <div class="contact-info">
                    <?php echo do_shortcode('[contact-form-7 id="22" title="Contact form"]');
                    ?>       
            </div>
            <div class="contact-media">
               <?php
                the_content();


                ?>
            </div>
        </div>
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
