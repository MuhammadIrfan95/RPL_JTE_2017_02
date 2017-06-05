<?php
/**
 * Auth form login
 *
 * @author  WooThemes
 * @package WooCommerce/Templates/Auth
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<?php do_action( 'woocommerce_auth_page_header' ); ?>

<h1><?php printf( esc_html__( '%s would like to connect to your store' , 'shopme' ), esc_html( $app_name ) ); ?></h1>

<?php wc_print_notices(); ?>

<p><?php printf( esc_html__( 'To connect to %1$s you need to be logged in. Log in to your store below, or %2$scancel and return to %1$s%3$s', 'shopme' ), wc_clean( $app_name ), '<a href="' . esc_url( $return_url ) . '">', '</a>' ); ?></p>

<form method="post" class="wc-auth-login">
	<p class="form-row form-row-wide">
		<label for="username"><?php esc_html_e( 'Username or email address', 'shopme' ); ?> <span class="required">*</span></label>
		<input type="text" class="input-text" name="username" id="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( $_POST['username'] ) : ''; ?>" />
	</p>
	<p class="form-row form-row-wide">
		<label for="password"><?php esc_html_e( 'Password', 'shopme' ); ?> <span class="required">*</span></label>
		<input class="input-text" type="password" name="password" id="password" />
	</p>
	<p class="wc-auth-actions">
		<?php wp_nonce_field( 'woocommerce-login' ); ?>
		<input type="submit" class="button button-large button-primary wc-auth-login-button" name="login" value="<?php esc_attr_e( 'Login', 'shopme' ); ?>" />
		<input type="hidden" name="redirect" value="<?php echo esc_url( $redirect_url ); ?>" />
	</p>
</form>

<?php do_action( 'woocommerce_auth_page_footer' ); ?>
