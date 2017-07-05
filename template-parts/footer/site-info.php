<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
    Copyright &copy; 1995-<?php echo date("Y") ?> <a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a>
    and sponsored by <a href="<?php echo esc_url( __( 'https://renta.net/', 'rentanet' ) ); ?>">RentaNet</a>
</div><!-- .site-info -->
