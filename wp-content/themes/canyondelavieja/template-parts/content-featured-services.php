<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package canyon
 */
/*if (get_locale() == "es_CR") {
	$categoryPackages = "packages-es";
	$categoryRooms = "rooms-es";
	$categoryActivities = "activities-es";

} else {
	$categoryPackages = "packages";
	$categoryRooms = "rooms";
	$categoryActivities = "activities";

} */
?>

<section class="services">
	<div class="services-container">
		<div class="rooms">
			<div class="services-header">
			<h2 class="rooms-title services-title"><?php pll_e('Rooms'); ?></h2>
			<a href="<?php echo esc_url(home_url(pll__('/rooms'))); ?>"><?php pll_e('View more'); ?></a>
			</div>
			<?php
				$args = array(
					'post_type' => 'product',
					'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
					'posts_per_page' => 3,
					'tax_query' => array(
						array(
							'taxonomy' => 'product_cat',
							'field' => 'slug',
							'terms' => pll__('rooms')
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

						<article class="rooms-item services-item">
							<div class="rooms-item-img services-item-img">
								<img src="<?php echo $thumb_url[0]; ?>">
							</div>
							<div class="rooms-item-content services-item-content">
								<h3 class="services-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<!-- <div class="services-item-subtitle">loremp ipsum, loremp ipsum</div> -->
								<?php the_excerpt(); ?>
							</div>
							<div class="rooms-item-details services-item-details">
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

		<div class="tours">
			<div class="services-header">
			<h2 class="tours-title services-title"><?php pll_e('Featured activities'); ?></h2>
			<a href="<?php echo esc_url(home_url(pll__('/activities'))); ?>"><?php pll_e('View more'); ?></a>
			</div>
			<?php
					$args = array(
						'post_type' => 'product',
						'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
						'posts_per_page' => 3,
						'tax_query' => array(
							array(
								'taxonomy' => 'product_cat',
								'field' => 'slug',
								'terms' => pll__('activities')
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

		<div class="packages">
			<div class="services-header">
			<h2 class="packages-title services-title"><?php pll_e('Featured packages'); ?></h2>
			<a href="<?php echo esc_url(home_url(pll__('/packages'))); ?>"><?php pll_e('View more'); ?></a>
			</div>

			<?php
		$args = array(
			'post_type' => 'product',
			'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
			'posts_per_page' => 3,
			'tax_query' => array(
				array(
					'taxonomy' => 'product_cat',
					'field' => 'slug',
					'terms' => pll__('packages')
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
						<article class="packages-item services-item">
						<div class="packages-item-img services-item-img">
							<img src="<?php echo $thumb_url[0]; ?>">
						</div>
						<div class="packages-item-content services-item-content">
							<h3 class="services-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<!-- <div class="services-item-subtitle">loremp ipsum, loremp ipsum</div> -->
							<?php the_excerpt(); ?>
						</div>
						<div class="packages-item-details services-item-details">
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
	</div>
</section>