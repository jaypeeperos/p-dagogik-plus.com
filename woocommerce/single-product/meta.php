<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>
<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<h4 class="pr-sub-heading"><?php esc_html_e( 'Specs', 'buddyboss-theme' ); ?></h4>

	<?php if ( $product->has_dimensions() ) : ?>
		<span class="dimensions_wrapper pr-atts-row">
			<span class="pr-atts-title"><?php esc_html_e( 'Dimensions:', 'buddyboss-theme' ); ?></span>
			<span class="product_dimensions" aria-label="<?php esc_attr_e( 'Product dimensions', 'buddyboss-theme' ); ?>"><?php echo esc_html( wc_format_dimensions( $product->get_dimensions( false ) ) ); ?></span>
		</span>
	<?php endif; ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>
		<span class="sku_wrapper pr-atts-row">
			<span class="pr-atts-title"><?php esc_html_e( 'SKU:', 'buddyboss-theme' ); ?></span>
			<span class="sku" aria-label="<?php esc_attr_e( 'Product SKU', 'buddyboss-theme' ); ?>"><?php echo ( $sku = $product->get_sku() ) ? esc_html( $sku ) : esc_html__( 'N/A', 'buddyboss-theme' ); ?></span>
		</span>
	<?php endif; ?>

	<?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in pr-atts-row">' . _n( '<span class="pr-atts-title" aria-label="' . esc_attr__( 'Category', 'buddyboss-theme' ) . '">Category:</span>', '<span class="pr-atts-title" aria-label="' . esc_attr__( 'Categories', 'buddyboss-theme' ) . '">Categories:</span>', count( $product->get_category_ids() ), 'buddyboss-theme' ) . ' ', '</span>' ); ?>

	<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as pr-atts-row">' . _n( '<span class="pr-atts-title" aria-label="' . esc_attr__( 'Tag', 'buddyboss-theme' ) . '">Tag:</span>', '<span class="pr-atts-title" aria-label="' . esc_attr__( 'Tags', 'buddyboss-theme' ) . '">Tags:</span>', count( $product->get_tag_ids() ), 'buddyboss-theme' ) . ' ', '</span>' ); ?>

	<?php
	$availability = $product->get_availability();
	if ( ! empty( $availability['availability'] ) ) : ?>
		<span class="sku_wrapper pr-atts-row">
			<span class="pr-atts-title"><?php esc_html_e( 'Availability:', 'buddyboss-theme' ); ?></span>
			<span class="stock" aria-label="<?php esc_attr_e( 'Product availability', 'buddyboss-theme' ); ?>"><?php echo wp_kses_post( wc_get_stock_html( $product ) ); ?></span>
		</span>
	<?php endif; ?>

	<?php
	$attributes = $product->get_attributes();
	if ( ! empty( $attributes ) ) : ?>
		<?php foreach ( $attributes as $attribute ) : ?>
			<?php
			if ( $attribute->get_visible() ) {
				$values = array();

				if ( $attribute->is_taxonomy() ) {
					$attribute_values = wc_get_product_terms( $product->get_id(), $attribute->get_name(), array( 'fields' => 'all' ) );
					foreach ( $attribute_values as $attribute_value ) {
						$values[] = esc_html( $attribute_value->name );
					}
				} else {
					$values = $attribute->get_options();
					$values = array_map( 'esc_html', $values );
				}

				if ( ! empty( $values ) ) : ?>
					<span class="attribute_wrapper pr-atts-row">
						<span class="pr-atts-title" aria-label="<?php echo esc_attr( wc_attribute_label( $attribute->get_name() ) ); ?>"><?php echo esc_html( wc_attribute_label( $attribute->get_name() ) ); ?>:</span>
						<span class="attribute-values"><?php echo esc_html( implode( ', ', $values ) ); ?></span>
					</span>
				<?php endif; ?>
			<?php } ?>
		<?php endforeach; ?>
	<?php endif; ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>