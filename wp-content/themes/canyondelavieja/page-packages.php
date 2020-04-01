<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * Template Name: Page Packages 
 * @package canyon
 */

$categorySelected = pll__('packages');
   

get_header(); ?>

	<section class="main">
		
			 <div class="tours">
                  <div class="services-header">
                    <h2 class="tours-title services-title"><?php the_title(); ?></h2>
                   
                  </div>
                  <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'product',
                        //'order' => 'ASC',
                        'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
                        'posts_per_page' => 10,
                        'paged' => $paged,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'product_cat',
                                'field' => 'slug',
                                'terms' => $categorySelected
                            )
                        )


                    );


                    $items = new WP_Query($args);
                    // Pagination fix
                    $temp_query = $wp_query;
                    $wp_query = null;
                    $wp_query = $items;
                    $index = 0;
                    if ($items->have_posts()) {
                        while ($items->have_posts()) {
                            $items->the_post();

                            ?>
                         <?php if (has_post_thumbnail()) :

                            $id = get_post_thumbnail_id($post->ID);
                        $thumb_url = wp_get_attachment_image_src($id, 'item-home-thumb', true);

                        ?>
                            <?php else :
                                $thumb_url = ''; ?>     
                                            
                              <?php endif; ?>
                         <article class="tours-item services-item">
                            <div class="tours-item-img services-item-img">
                                <img src="<?php echo $thumb_url[0]; ?>">
                            </div>
                            <div class="tours-item-content services-item-content">
                                <h3 class="services-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <!-- <div class="services-item-subtitle">loremp ipsum, loremp ipsum</div> -->
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="tours-item-details services-item-details">
                                <div class="top">
                                    <div class="price">
                                        <?php $currency = get_woocommerce_currency_symbol();

                                        $product = new WC_Product($post->ID); 
                                        /*echo $product->get_price_html();
                                        
                                        woocommerce_template_loop_price(); */
                                        echo $currency;

                                        if (get_post_meta(get_the_ID(), '_wc_display_cost', true))
                                            echo get_post_meta(get_the_ID(), '_wc_display_cost', true);
                                        else
                                            echo get_post_meta(get_the_ID(), '_wc_booking_cost', true) ?>
                                    </div>
                                </div>
                                <div class="bottom">
                                <a href="<?php the_permalink(); ?>" class="btn success"><?php pll_e('Read more'); ?></a>
                                </div>
                            </div>
                        </article>
                        

    
                        
                        
                        <?php

                        $index++;
                    }
                }

                ?>
                 
               </div>
                 <?php the_posts_pagination(array('mid_size' => 2));
                wp_reset_postdata(); ?>
	</section><!-- #primary -->

<?php
//get_sidebar();
get_footer();
