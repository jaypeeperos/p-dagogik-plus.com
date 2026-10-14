<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_account_navigation' );
?>

<nav class="woocommerce-MyAccount-navigation" aria-label="<?php esc_html_e( 'Account pages', 'buddyboss-theme' ); ?>">
	<div class="wc-MyAccount-navigation-heading">
		<h5>
			<?php esc_html_e( 'My account', 'buddyboss-theme' ); ?>
			<a href="#" class="push-my-account-nav" aria-label="<?php esc_attr_e( 'Toggle account navigation', 'buddyboss-theme' ); ?>"><i class="bb-icon-l bb-icon-bars"></i></a>
		</h5>
	</div>
	<ul class="woocommerce-MyAccount-menu">
		<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
			<li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
				<a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>" <?php echo wc_get_account_menu_item_classes( $endpoint ) === 'is-active' ? 'aria-current="page"' : ''; ?>><?php echo esc_html( $label ); ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
</nav>

<?php do_action( 'woocommerce_after_account_navigation' ); ?>