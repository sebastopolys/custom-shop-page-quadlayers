<?php

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', false ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php

	do_action( 'woocommerce_archive_description' );
	?>
</header>
<?php

if ( woocommerce_product_loop() ) {
	do_action( 'woocommerce_before_shop_loop' );	
	
	
	echo '<h1>MOST POPULAR !!</h1>'.do_shortcode('[products orderby="popularity" class="m-popular" columns="2" limit="2"]');
	
	echo '<h1>Best Sellers</h1>'.do_shortcode('[best_selling_products limit="9" columns="3" class="b-sellers"]');	
	
	echo '<h1>Top Rated</h1>'.do_shortcode('[top_rated_products class="t-rated"]');
	
	echo '<h1>Clothing taxonomy:</h1>'.do_shortcode('[products category="Clothing" columns="5" limit="10" class="t-clothing"]');
		
	echo '<h1>Posters taxonomy:</h1><h2>Take the best posters to your wall</h2>'.do_shortcode('[products category="Posters" columns="2" limit="4" class="t-posters"]');
	
	do_action( 'woocommerce_after_shop_loop' );
} else {
	
	do_action( 'woocommerce_no_products_found' );
}


do_action( 'woocommerce_after_main_content' );


do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
