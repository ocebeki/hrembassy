<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package blank
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
 *
 * @return void
 */
function blank_woocommerce_setup() {
	add_theme_support( 'woocommerce' );
//	add_theme_support( 'wc-product-gallery-zoom' );
//	add_theme_support( 'wc-product-gallery-lightbox' );
//	add_theme_support( 'wc-product-gallery-slider' );
//    add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
}
add_action( 'after_setup_theme', 'blank_woocommerce_setup' );

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function blank_woocommerce_scripts() {
	wp_enqueue_style( 'blank-woocommerce-style', get_template_directory_uri() . '/woocommerce.css' );

	$font_path   = WC()->plugin_url() . '/assets/fonts/';
	$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';

	wp_add_inline_style( 'blank-woocommerce-style', $inline_font );
}
add_action( 'wp_enqueue_scripts', 'blank_woocommerce_scripts' );

/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
//add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function blank_woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter( 'body_class', 'blank_woocommerce_active_body_class' );

/**
 * Products per page.
 *
 * @return integer number of products.
 */
function blank_woocommerce_products_per_page() {
	return 14;
}
add_filter( 'loop_shop_per_page', 'blank_woocommerce_products_per_page' );

/**
 * Product gallery thumnbail columns.
 *
 * @return integer number of columns.
 */
function blank_woocommerce_thumbnail_columns() {
	return 6;
}
add_filter( 'woocommerce_product_thumbnails_columns', 'blank_woocommerce_thumbnail_columns' );

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function blank_woocommerce_related_products_args( $args ) {
	$defaults = array(
		'posts_per_page' => 3,
		'columns'        => 3,
	);

	$args = wp_parse_args( $defaults, $args );

	return $args;
}

// Remove the sorting dropdown from Woocommerce
// Remove the result count from WooCommerce
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );

add_filter( 'woocommerce_output_related_products_args', 'blank_woocommerce_related_products_args' );

/**
    remove breadcrumbs

 * Remove default WooCommerce wrapper.
 */
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( 'blank_woocommerce_wrapper_before' ) ) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function blank_woocommerce_wrapper_before() {
		?>
		<div id="primary" class="woocommerce__wrapper">
			<main id="main" class="container" role="main">
			<?php
	}
}
add_action( 'woocommerce_before_main_content', 'blank_woocommerce_wrapper_before' );

if ( ! function_exists( 'blank_woocommerce_wrapper_after' ) ) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
	function blank_woocommerce_wrapper_after() {
			?>
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php
	}
}
add_action( 'woocommerce_after_main_content', 'blank_woocommerce_wrapper_after' );

/**
 * Sample implementation of the WooCommerce Mini Cart.
 *
 * You can add the WooCommerce Mini Cart to header.php like so ...
 *
	<?php
		if ( function_exists( 'blank_woocommerce_header_cart' ) ) {
			blank_woocommerce_header_cart();
		}
	?>
 */

if ( ! function_exists( 'blank_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function blank_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		blank_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'blank_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'blank_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function blank_woocommerce_cart_link() {
		?>
		<a class="menu__cart cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'blank' ); ?>">
            <svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="31px" viewBox="0 0 30 31"><path fill-rule="evenodd"  fill="rgb(55, 39, 97)" d="M15.000,30.500 C6.716,30.500 0.000,23.784 0.000,15.500 C0.000,7.216 6.716,0.500 15.000,0.500 C23.284,0.500 30.000,7.216 30.000,15.500 C30.000,23.784 23.284,30.500 15.000,30.500 ZM23.092,23.749 L21.899,11.550 C21.867,11.218 21.564,10.962 21.200,10.962 L18.743,10.962 L18.743,9.943 C18.743,8.045 17.064,6.500 14.999,6.500 C12.935,6.500 11.255,8.045 11.255,9.943 L11.255,10.962 L8.797,10.962 C8.434,10.962 8.130,11.218 8.097,11.550 L6.901,23.796 C6.883,23.977 6.949,24.156 7.082,24.290 C7.216,24.424 7.403,24.500 7.601,24.500 L22.396,24.500 C22.397,24.500 22.397,24.500 22.398,24.500 C22.786,24.500 23.101,24.210 23.101,23.854 C23.101,23.818 23.097,23.783 23.092,23.749 ZM9.439,12.254 L11.255,12.254 L11.255,13.410 C11.255,13.766 11.569,14.055 11.958,14.055 C12.346,14.055 12.661,13.766 12.661,13.410 L12.661,12.254 L17.338,12.254 L17.338,13.410 C17.338,13.766 17.652,14.055 18.041,14.055 C18.430,14.055 18.743,13.766 18.743,13.410 L18.743,12.254 L20.558,12.254 L21.627,23.208 L8.369,23.208 L9.439,12.254 ZM12.661,9.943 C12.661,8.757 13.710,7.792 14.999,7.792 C16.290,7.792 17.338,8.757 17.338,9.943 L17.338,10.962 L12.661,10.962 L12.661,9.943 Z"/></svg><span class="menu__cart-number"><?php echo WC()->cart->get_cart_contents_count() ?></span>
		</a>
		<?php
	}
}

if ( ! function_exists( 'blank_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function blank_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php blank_woocommerce_cart_link(); ?>
			</li>
			<li>
				<?php
				$instance = array(
					'title' => '',
				);

				the_widget( 'WC_Widget_Cart', $instance );
				?>
			</li>
		</ul>
		<?php
	}
}

// remove title single product
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
// remove default stock in single product
add_filter( 'woocommerce_get_stock_html', '__return_empty_string', 10, 2 );

// content-product.php loop product

    // add 'category' loop product
if ( ! function_exists( 'latus_shop_product_category' ) ) {
    function latus_shop_product_category(){
        $product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );
        if ( $product_cats && ! is_wp_error ( $product_cats ) ){
            $single_cat = array_shift( $product_cats ); ?>
            <div itemprop="name" class="sklep__kind"><span><?php echo $single_cat->name; ?></span></div>
    <?php }
    }
}
add_action( 'woocommerce_shop_loop_item_title', 'latus_shop_product_category', 5 );

    // remove 'add to cart' loop product
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );

remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );

// product
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );   
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

// koszyk cart
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	ob_start();
	?>
	<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf (_n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a> 
	<?php
	
	$fragments['a.cart-contents'] = ob_get_clean();
	
	return $fragments;
}

remove_action( 'woocommerce_cart_is_empty', 'wc_empty_cart_message', 10 );  

// zamowienia billing
add_action('woocommerce_before_order_notes', 'latus_faktury_checkbox');
 
function latus_faktury_checkbox($checkout)
{
	echo '<div id="latus_faktury_checkbox" class="zamowienie__faktura"><div class="zamowienie__heading">' . __('Dane do faktury') . '</div>';
	woocommerce_form_field('faktura_checkbox', array(
		'type' => 'checkbox',
		'class' => array(
			'my-field-class form-row-wide'
		) ,
		'label' => __('Takie same jak dane zamawiającego') ,
		'placeholder' => __('Guidence') ,
		'required' => false,
        'checked' => true
	) , $checkout->get_value('faktura_checkbox'));
	echo '</div>';
}

add_action('woocommerce_checkout_update_order_meta', 'latus_faktury_checkbox_update_order_meta');
 
function latus_faktury_checkbox_update_order_meta($order_id)
{
	if (!empty($_POST['faktura_checkbox'])) {
		update_post_meta($order_id, 'Dane do faktury', sanitize_text_field($_POST['faktura_checkbox']));
	}
}

add_action('woocommerce_before_order_notes', 'latus_order_notes_heading');

function latus_order_notes_heading($checkout)
{
	echo '<div class="zamowienie__notes-cloud">' . 'Dodaj uwagi do swojego zamówienia 
i/lub dane pozostałych uczestników: Imię i Nazwisko + e-mail + nr telefonu' . '</div>';
}

add_action( 'woocommerce_checkout_order_review', 'paymentHeading', 19 );

function paymentHeading () { 
?>
    <div class="zamowienie__platnosc">
        <div class="zamowienie__heading">Płatność</div>
    </div>
<?php
}

add_action( 'woocommerce_checkout_order_review', 'latus_privacy_checkbox', 10 );
   
function latus_privacy_checkbox() {
  
woocommerce_form_field( 'privacy_policy', array(
    'type'          => 'checkbox',
    'class'         => array('form-row privacy'),
    'label_class'   => array('woocommerce-form__label woocommerce-form__label-for-checkbox checkbox'),
    'input_class'   => array('woocommerce-form__input woocommerce-form__input-checkbox input-checkbox'),
    'required'      => true,
    'label'         => '<span>Oświadczam, że wyrażam zgodę na postanowienia <a href="'. get_site_url() .'/regulamin">Regulaminu</a> i <a href="'. get_site_url() .'/polityka-prywatnosci">Polityki prywatności</a></span>',
)); 
  
}

remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
  
// Show notice if customer does not tick
   
add_action( 'woocommerce_checkout_process', 'latus_privacy_chockbox_not_approved' );
  
function latus_privacy_chockbox_not_approved() {
    if ( ! (int) isset( $_POST['privacy_policy'] ) ) {
        wc_add_notice( __( 'Proszę zaakceptować regulamin' ), 'error' );
    }
}

function md_custom_woocommerce_checkout_fields( $fields ) 
{
    $fields['order']['order_comments']['placeholder'] = '';
    $fields['order']['order_comments']['label'] = 'Wiadomość';

    return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'md_custom_woocommerce_checkout_fields' );

// PHP: Remove "(optional)" from our non required fields
add_filter( 'woocommerce_form_field' , 'remove_checkout_optional_fields_label', 10, 4 );
function remove_checkout_optional_fields_label( $field, $key, $args, $value ) {
    // Only on checkout page
    if( is_checkout() && ! is_wc_endpoint_url() ) {
        $optional = '&nbsp;<span class="optional">(' . esc_html__( 'optional', 'woocommerce' ) . ')</span>';
        $field = str_replace( $optional, '<span></span>', $field );
    }
    return $field;
}

// moje-konto myaccount
add_filter ( 'woocommerce_account_menu_items', 'latus_remove_my_account_links' );
function latus_remove_my_account_links( $menu_links ){
 
//    unset( $menu_links['edit-address'] ); // Addresses
	unset( $menu_links['dashboard'] ); // Remove Dashboard
	//unset( $menu_links['payment-methods'] ); // Remove Payment Methods
	//unset( $menu_links['orders'] ); // Remove Orders
	unset( $menu_links['downloads'] ); // Disable Downloads
	//unset( $menu_links['edit-account'] ); // Remove Account details tab
	unset( $menu_links['customer-logout'] ); // Remove Logout link
 
	return $menu_links;
}

add_filter ( 'woocommerce_account_menu_items', 'misha_rename_downloads' );
 
function misha_rename_downloads( $menu_links ){
 
	// $menu_links['TAB ID HERE'] = 'NEW TAB NAME HERE';
	$menu_links['edit-account'] = 'Dane użytkownika';
	$menu_links['edit-address'] = 'Dane do faktury';
 
	return $menu_links;
}

//moje konto login
remove_action( 'woocommerce_before_customer_login_form', 'woocommerce_output_all_notices', 10 );
add_action( 'woocommerce_after_customer_login_form', 'woocommerce_output_all_notices', 10 );


// avatar
remove_action('wpua_before_avatar', 'wpua_do_before_avatar');
remove_action('wpua_after_avatar', 'wpua_do_after_avatar');

//view order
add_filter( 'woocommerce_localisation_address_formats', 'woocommerce_custom_address_format', 20 );
function woocommerce_custom_address_format( $formats ) {
    $formats[ 'pl' ]  = "{company}\n{name}\n{address_1}\n{address_2}\n{city}, {state_code} {postcode}\n{country}";
     
    return $formats;
}
// remove product image
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
remove_action( 'woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20 );

// images size
add_filter( 'woocommerce_get_image_size_gallery_thumbnail', function( $size ) {
    return array(
        'width' => 75,
        'height' => 50,
        'crop' => 1,
    );
} );


// buy now
function buy_now_submit_form() {
 ?>
  <script>
      jQuery(document).ready(function(){
          // listen if someone clicks 'Buy Now' button
          jQuery('#buy_now_button').click(function(){
              // set value to 1
              jQuery('#is_buy_now').val('1');
              //submit the form
              jQuery('form.cart').submit();
          });
      });
  </script>
 <?php
}
add_action('woocommerce_after_add_to_cart_form', 'buy_now_submit_form');

add_filter('woocommerce_add_to_cart_redirect', 'redirect_to_checkout');
function redirect_to_checkout($redirect_url) {
  if (isset($_REQUEST['is_buy_now']) && $_REQUEST['is_buy_now']) {
     global $woocommerce;
     $redirect_url = wc_get_cart_url();
  }
  return $redirect_url;
}

//disable product purchasing twice
function sv_wc_customer_purchased_product_in_cat( $product ) {

    // enter the category for which a single purchase is allowed
    $non_repeatable = 'szkolenie-online';
    
    // bail if this product is in not in our target category
    if ( ! has_term( $non_repeatable, 'product_cat', $product->get_id() ) ) {
        return false;
    }
    
    // the product has our target category, so return whether the customer purchased
    return wc_customer_bought_product( wp_get_current_user()->user_email, get_current_user_id(), $product->get_id() );
}

function sv_wc_disable_repeat_purchase( $purchasable, $product ) {

    if ( sv_wc_customer_purchased_product_in_cat( $product ) ) {
        $purchasable = false;
    }
    
    // double-check for variations: if parent is not purchasable, then variation is not
    if ( $purchasable && $product->is_type( 'variation' ) ) {
        $purchasable = $product->parent->is_purchasable();
    }
    
    return $purchasable;
}
add_filter( 'woocommerce_variation_is_purchasable', 'sv_wc_disable_repeat_purchase', 10, 2 );
add_filter( 'woocommerce_is_purchasable', 'sv_wc_disable_repeat_purchase', 10, 2 );

function sv_wc_purchase_disabled_message() {

    // get the current product to check if purchasing should be disabled
    global $product;
    
    // now we know we're in the category, check if we've purchased already
    if ( sv_wc_customer_purchased_product_in_cat( $product ) ) {
        // Create your message for the customer here
        echo '<div class="woocommerce"><div class="woocommerce-error wc-nonpurchasable-message">
        Uwaga! Kupiłeś już to szkolenie. Nie możesz nabyć go ponownie.</div></div>';
    }
}
add_action( 'woocommerce_before_single_product', 'sv_wc_purchase_disabled_message', 31 );

function user_logged_in_product_already_bought() {
    if ( is_user_logged_in() ) {
        global $product;
        $current_user = wp_get_current_user();
        if ( wc_customer_bought_product( $current_user->user_email, $current_user->ID, $product->get_id() ) ) {
            return true;
        } else {
            return false;
        }
    }
}

// variable product price
function ssp_always_show_variation_prices($show, $parent, $variation) {
return false;
}
add_filter( 'woocommerce_show_variation_price', 'ssp_always_show_variation_prices', 99, 3);

 add_filter( 'woocommerce_price_trim_zeros', '__return_true' );

add_filter( 'woocommerce_price_trim_zeros', 'wc_hide_trailing_zeros', 10, 1 );
function wc_hide_trailing_zeros( $trim ) {
    // set to false to show trailing zeros
    return true;
}

// register form
add_action( 'woocommerce_register_form', 'bbloomer_add_registration_privacy_policy', 11 );
   
function bbloomer_add_registration_privacy_policy() {
 
woocommerce_form_field( 'privacy_policy_reg', array(
    'type'          => 'checkbox',
    'class'         => array('form-row privacy'),
    'label_class'   => array('woocommerce-form__label woocommerce-form__label-for-checkbox checkbox'),
    'input_class'   => array('woocommerce-form__input woocommerce-form__input-checkbox input-checkbox'),
    'required'      => true,
    'label'         => '<span>Oświadczam, że wyrażam zgodę na postanowienia <a href="'. get_site_url() .'/regulamin">Regulaminu</a> i <a href="'. get_site_url() .'/polityka-prywatnosci">Polityki prywatności</a></span>',
));
  
}
  
// Show error if user does not tick
   
add_filter( 'woocommerce_registration_errors', 'bbloomer_validate_privacy_registration', 10, 3 );
  
function bbloomer_validate_privacy_registration( $errors, $username, $email ) {
if ( ! is_checkout() ) {
    if ( ! (int) isset( $_POST['privacy_policy_reg'] ) ) {
        $errors->add( 'privacy_policy_reg_error', __( 'Proszę zaakceptować regulamin', 'woocommerce' ) );
    }
}
return $errors;
}