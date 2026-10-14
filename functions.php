<?php
/**
 * @package BuddyBoss Child
 * The parent theme functions are located at /buddyboss-theme/inc/theme/functions.php
 * Add your own functions at the bottom of this file.
 */


/****************************** THEME SETUP ******************************/

/**
 * Sets up theme for translation
 *
 * @since BuddyBoss Child 1.0.0
 */
function buddyboss_theme_child_languages()
{
  /**
   * Makes child theme available for translation.
   * Translations can be added into the /languages/ directory.
   */

  // Translate text from the PARENT theme.
  load_theme_textdomain( 'buddyboss-theme', get_stylesheet_directory() . '/languages' );

  // Translate text from the CHILD theme only.
  // Change 'buddyboss-theme' instances in all child theme files to 'buddyboss-theme-child'.
  // load_theme_textdomain( 'buddyboss-theme-child', get_stylesheet_directory() . '/languages' );

}
add_action( 'after_setup_theme', 'buddyboss_theme_child_languages' );

/**
 * Enqueues scripts and styles for child theme front-end.
 *
 * @since Boss Child Theme  1.0.0
 */
function buddyboss_theme_child_scripts_styles()
{
  /**
   * Scripts and Styles loaded by the parent theme can be unloaded if needed
   * using wp_deregister_script or wp_deregister_style.
   *
   * See the WordPress Codex for more information about those functions:
   * http://codex.wordpress.org/Function_Reference/wp_deregister_script
   * http://codex.wordpress.org/Function_Reference/wp_deregister_style
   **/

  // Styles
  wp_enqueue_style( 'buddyboss-child-css', get_stylesheet_directory_uri().'/assets/css/custom.css' );

  // Javascript
  wp_enqueue_script( 'buddyboss-child-js', get_stylesheet_directory_uri().'/assets/js/custom.js' );
}
add_action( 'wp_enqueue_scripts', 'buddyboss_theme_child_scripts_styles', 9999 );


/****************************** CUSTOM FUNCTIONS ******************************/

// Add your own custom functions here


add_filter( 'woocommerce_customer_get_downloadable_products', 'add_custom_masterkurse_download', 9999, 1 );
 
function add_custom_masterkurse_download( $downloads ) {

	$is_a_member = false;
	require_once( ABSPATH . 'wp-includes/pluggable.php' );
	
	$is_a_member = Groups_User_Group::read( get_current_user_id() , 2 );

	if ( $is_a_member ) {

		$downloads[] = array(
      'product_name' => 'Masterkurs',
      'download_name' => 'Masterkurs Download',
      'download_url' => '/login_masterkurs_selbstwertgefuhl/',
	 );

	}

   return $downloads;
}

add_filter( 'woocommerce_customer_get_downloadable_products', 'add_custom_ressourcen_download', 9999, 1 );
 
function add_custom_ressourcen_download( $downloads ) {

	$is_a_member = false;
	require_once( ABSPATH . 'wp-includes/pluggable.php' );
	
	$is_a_member = Groups_User_Group::read( get_current_user_id() , 6 );

	if ( $is_a_member ) {

		$downloads[] = array(
      'product_name' => 'Mindset Ressourcen',
      'download_name' => 'Mindset Ressourcen',
      'download_url' => '/login-mindset-ressourcen/',
	 );

	}

   return $downloads;
}

add_filter( 'woocommerce_customer_get_downloadable_products', 'add_custom_kinder_beim_lernen_download', 9999, 1 );
 
function add_custom_kinder_beim_lernen_download( $downloads ) {

	$is_a_member = false;
	require_once( ABSPATH . 'wp-includes/pluggable.php' );
	
	$is_a_member = Groups_User_Group::read( get_current_user_id() , 7 );

	if ( $is_a_member ) {

		$downloads[] = array(
      'product_name' => 'Kinder beim Lernen begleiten',
      'download_name' => 'Kinder beim Lernen begleiten',
      'download_url' => '/login-lernen-begleiten-automatisiert/',
	 );

	}

   return $downloads;
}

add_filter( 'woocommerce_customer_get_downloadable_products', 'add_custom_lernen_begleiten_schnuppern', 9999, 1 );
 
function add_custom_lernen_begleiten_schnuppern( $downloads ) {

	$is_a_member = false;
	require_once( ABSPATH . 'wp-includes/pluggable.php' );
	
	$is_a_member = Groups_User_Group::read( get_current_user_id() , 8 );

	if ( $is_a_member ) {

		$downloads[] = array(
      'product_name' => 'Lernen Begleiten Schnuppern',
      'download_name' => 'Lernen Begleiten Schnuppern',
      'download_url' => '/login-lernen-begleiten-schnuppern/',
	 );

	}

   return $downloads;
}

add_filter( 'woocommerce_customer_get_downloadable_products', 'add_custom_adventskalender', 9999, 1 );

function add_custom_adventskalender( $downloads ) {

	$is_a_member = false;
	require_once( ABSPATH . 'wp-includes/pluggable.php' );
	
	$is_a_member = Groups_User_Group::read( get_current_user_id() , 16 );

	if ( $is_a_member ) {

		$downloads[] = array(
      'product_name' => 'Adventskalender 2024',
      'download_name' => 'Adventskalender 2024',
      'download_url' => '/adventskalender-2024/',
	 );

	}

   return $downloads;
}

add_filter( 'woocommerce_customer_get_downloadable_products', 'add_custom_selbstbild_0922', 9999, 1 );
 
function add_custom_selbstbild_0922( $downloads ) {

	$is_a_member = false;
	require_once( ABSPATH . 'wp-includes/pluggable.php' );
	
	$is_a_member = Groups_User_Group::read( get_current_user_id() , 9 );

	if ( $is_a_member ) {

	$downloads[] = array(
      'product_name' => 'Selbstbild 09-22',
      'download_name' => 'Selbstbild 09-22',
      'download_url' => '/login-selbstbild-0922/',
	 );

	/*$downloads[] = array(
		'product_name' => 'Selbstbild 09-23',
		'download_name' => 'Selbstbild 09-23',
		'download_url' => '/login-selbstbild-0223/',
	);*/

	$downloads[] = array(
		'product_name' => 'Masterkurs',
		'download_name' => 'Masterkurs Download',
		'download_url' => '/login_masterkurs_selbstwertgefuhl/',
	);

	}

   return $downloads;
}

add_filter( 'woocommerce_customer_get_downloadable_products', 'add_custom_selbstbild_0923', 9999, 1 );
 
function add_custom_selbstbild_0923( $downloads ) {

	$is_a_member = false;
	require_once( ABSPATH . 'wp-includes/pluggable.php' );
	
	$is_a_member = Groups_User_Group::read( get_current_user_id() , 11 );

	if ( $is_a_member ) {

		$downloads[] = array(
			'product_name' => 'Selbstbild 09-23',
			'download_name' => 'Selbstbild 09-23',
			'download_url' => '/login-selbstbild-0223/',
		);

		$downloads[] = array(
			'product_name' => 'Masterkurs',
			'download_name' => 'Masterkurs Download',
			'download_url' => '/login_masterkurs_selbstwertgefuhl/',
		);

	}

   return $downloads;
}

add_filter( 'woocommerce_customer_get_downloadable_products', 'add_custom_konfliktkoffer', 9999, 1 );
 
function add_custom_konfliktkoffer( $downloads ) {

	$is_a_member = false;
	require_once( ABSPATH . 'wp-includes/pluggable.php' );
	
	$is_a_member = Groups_User_Group::read( get_current_user_id() , 18 );

	if ( $is_a_member ) {

		$downloads[] = array(
			'product_name' => 'Der kreative Konfliktkoffer',
			'download_name' => 'Der kreative Konfliktkoffer',
			'download_url' => '/courses/konfliktkoffer/',
		);

	}

   return $downloads;
}

add_action( 'woocommerce_payment_complete', 'add_user_to_group_on_deposit' );
function add_user_to_group_on_deposit( $order_id ) {
  $order = wc_get_order( $order_id );
  $user_id = $order->get_user_id();

  // Check if the order contains the specific product
  foreach( $order->get_items() as $item ) {
    if ( $item['product_id'] == 17830 ) {
      $group_id = 11;
      if ( function_exists( 'Groups_User_Group::create' ) ) {
        Groups_User_Group::create( array( 'user_id' => $user_id, 'group_id' => $group_id ) );
      }
      break;
    }
  }
}

add_filter( 'woocommerce_customer_get_downloadable_products', 'add_custom_impact_techniken', 9999, 1 );
 
function add_custom_impact_techniken( $downloads ) {

	$is_a_member = false;
	require_once( ABSPATH . 'wp-includes/pluggable.php' );
	
	$is_a_member = Groups_User_Group::read( get_current_user_id() , 10 );

	if ( $is_a_member ) {

		$downloads[] = array(
      'product_name' => 'Impact Techniken',
      'download_name' => 'Impact Techniken',
      'download_url' => '/courses/impact-techniken/',
	 );

	}

   return $downloads;
}

add_filter( 'woocommerce_customer_get_downloadable_products', 'add_custom_login_members', 9999, 1 );
 
function add_custom_login_members( $downloads ) {
    require_once( ABSPATH . 'wp-includes/pluggable.php' );
    
    if (!Groups_User_Group::read(get_current_user_id(), 12)) {
        return $downloads;
    }

    // Create an array of existing product names for faster lookup
    $existing_products = array_column($downloads, 'product_name');

    // Define new items to potentially add
    $new_items = [
        'Mitgliedschaftsbereich' => [
            'download_name' => 'Mitgliedschaftsbereich',
            'download_url' => '/login-membership/'
        ],
        'Achtsamkeit' => [
            'download_name' => 'Achtsamkeit',
            'download_url' => '/courses/achtsamkeitinderschule/'
        ],
        'Lerngespräche führen' => [
            'download_name' => 'Lerngespräche führen',
            'download_url' => '/courses/lerngespraeche-fuehren/'
        ]
    ];

    // Add only non-existing items
    foreach ($new_items as $product_name => $item) {
        if (!in_array($product_name, $existing_products)) {
            $downloads[] = array_merge(
                ['product_name' => $product_name],
                $item
            );
        }
    }

    return $downloads;
}

add_filter( 'woocommerce_customer_get_downloadable_products', 'add_custom_achtsamkeit_page', 9999, 1 );
 
function add_custom_achtsamkeit_page( $downloads ) {

	require_once( ABSPATH . 'wp-includes/pluggable.php' );
    
	if (!Groups_User_Group::read(get_current_user_id(), 13)) {
			return $downloads;
	}

	// Create an array of existing product names for faster lookup
	$existing_products = array_column($downloads, 'product_name');

	// Define new items to potentially add
	$new_items = [
			'Achtsamkeit' => [
					'download_name' => 'Achtsamkeit',
					'download_url' => '/courses/achtsamkeitinderschule/'
			]
	];

	// Add only non-existing items
	foreach ($new_items as $product_name => $item) {
			if (!in_array($product_name, $existing_products)) {
					$downloads[] = array_merge(
							['product_name' => $product_name],
							$item
					);
			}
	}

	return $downloads;
}

add_filter( 'woocommerce_customer_get_downloadable_products', 'add_custom_innere_starke_page', 9999, 1 );
 
function add_custom_innere_starke_page( $downloads ) {

	require_once( ABSPATH . 'wp-includes/pluggable.php' );
    
	if (!Groups_User_Group::read(get_current_user_id(), 14)) {
			return $downloads;
	}

	// Create an array of existing product names for faster lookup
	$existing_products = array_column($downloads, 'product_name');

	// Define new items to potentially add
	$new_items = [
			'Innere Stärke' => [
			'download_name' => 'Innere Stärke',
			'download_url' => '/courses/innere-staerke/'
			]
	];

	// Add only non-existing items
	foreach ($new_items as $product_name => $item) {
			if (!in_array($product_name, $existing_products)) {
					$downloads[] = array_merge(
							['product_name' => $product_name],
							$item
					);
			}
	}

	return $downloads;
}

add_filter( 'woocommerce_customer_get_downloadable_products', 'add_custom_lerngesprache_fuhren_page', 9999, 1 );
 
function add_custom_lerngesprache_fuhren_page( $downloads ) {

	require_once( ABSPATH . 'wp-includes/pluggable.php' );
    
	if (!Groups_User_Group::read(get_current_user_id(), 15)) {
			return $downloads;
	}

	// Create an array of existing product names for faster lookup
	$existing_products = array_column($downloads, 'product_name');

	// Define new items to potentially add
	$new_items = [
			'Lerngespräche führen' => [
			'download_name' => 'Lerngespräche führen',
			'download_url' => '/courses/lerngespraeche-fuehren/'
			]
	];

	// Add only non-existing items
	foreach ($new_items as $product_name => $item) {
			if (!in_array($product_name, $existing_products)) {
					$downloads[] = array_merge(
							['product_name' => $product_name],
							$item
					);
			}
	}

	return $downloads;
}

add_filter( 'woocommerce_customer_get_downloadable_products', 'add_custom_classroom_management_page', 9999, 1 );
 
function add_custom_classroom_management_page( $downloads ) {

	require_once( ABSPATH . 'wp-includes/pluggable.php' );
    
	if (!Groups_User_Group::read(get_current_user_id(), 17)) {
			return $downloads;
	}

	// Create an array of existing product names for faster lookup
	$existing_products = array_column($downloads, 'product_name');

	// Define new items to potentially add
	$new_items = [
			'Classroom Management' => [
			'download_name' => 'Classroom Management',
			'download_url' => '/courses/classroom-management/'
			]
	];

	// Add only non-existing items
	foreach ($new_items as $product_name => $item) {
			if (!in_array($product_name, $existing_products)) {
					$downloads[] = array_merge(
							['product_name' => $product_name],
							$item
					);
			}
	}

	return $downloads;
}

add_filter( 'woocommerce_customer_get_downloadable_products', 'add_custom_umgang_mit_angst_page', 9999, 1 );

function add_custom_umgang_mit_angst_page( $downloads ) {

	require_once( ABSPATH . 'wp-includes/pluggable.php' );
    
	if (!Groups_User_Group::read(get_current_user_id(), 21)) {
			return $downloads;
	}

	// Create an array of existing product names for faster lookup
	$existing_products = array_column($downloads, 'product_name');

	// Define new items to potentially add
	$new_items = [
			'Umgang mit Angst' => [
			'download_name' => 'Umgang mit Angst',
			'download_url' => '/courses/umgang-mit-angst/'
			]
	];

	// Add only non-existing items
	foreach ($new_items as $product_name => $item) {
			if (!in_array($product_name, $existing_products)) {
					$downloads[] = array_merge(
							['product_name' => $product_name],
							$item
					);
			}
	}

	return $downloads;
}

add_filter( 'woocommerce_customer_get_downloadable_products', 'add_custom_rechtschreibstrategien', 9999, 1 );
 
function add_custom_rechtschreibstrategien( $downloads ) {

	require_once( ABSPATH . 'wp-includes/pluggable.php' );
    
	if (!Groups_User_Group::read(get_current_user_id(), 19)) {
			return $downloads;
	}

	// Create an array of existing product names for faster lookup
	$existing_products = array_column($downloads, 'product_name');

	// Define new items to potentially add
	$new_items = [
			'Rechtschreibstrategien' => [
			'download_name' => 'Rechtschreibstrategien',
			'download_url' => '/courses/rechtschreibstrategien/'
			]
	];

	// Add only non-existing items
	foreach ($new_items as $product_name => $item) {
			if (!in_array($product_name, $existing_products)) {
					$downloads[] = array_merge(
							['product_name' => $product_name],
							$item
					);
			}
	}

	return $downloads;
}

/*
Remove user to the courses if membership got cancelled
*/

// Hook into subscription status change
add_action('subscriptio_status_changed_to_cancelled', 'remove_learndash_access_on_subscription_cancel', 10, 2);

function remove_learndash_access_on_subscription_cancel($subscription, $old_status) {
    // Get user ID from subscription
    $user_id = $subscription->user_id;
    
    // Get product IDs from subscription
    $product_id = $subscription->product_id;
    $variation_id = $subscription->variation_id;
    
    // Check if the cancelled subscription matches your specific products
    if(
				$product_id == 18709 || $variation_id == 18709 || 
				$product_id == 20388 || $variation_id == 20388 || 
				$product_id == 20387 || $variation_id == 20387 || 
				$product_id == 18817 || $variation_id == 18817 || 
				$product_id == 18818 || $variation_id == 18818 || 
				$product_id == 20386 || $variation_id == 20386
			) {
        // Remove access to LearnDash courses
        ld_update_course_access($user_id, 19719, true); // true means remove access
        ld_update_course_access($user_id, 21978, true);
        
        // Remove from groups
        if (class_exists('Groups_User_Group')) {
            Groups_User_Group::delete($user_id, 15);
            Groups_User_Group::delete($user_id, 13);
            Groups_User_Group::delete($user_id, 12);
        }
    }
}

function remove_menu_item_on_specific_pages( $items, $menu, $args ) {
	// Define the menu item labels to remove and the corresponding page slug.
	$menu_item_labels = ['Mitgliedschaft', 'Lernwelt', 'Über Mich', 'Future Skills', 'Spickzettel', 'Blog', 'Fortbildungen für Lehrkräfte', 'Elternberatung', 'Kontakt', 'Termin', 'Email', "Shop", "Achtsamkeitskurs"]; // Add as many as you like
	$other_page_menu_item_labels = ['Home']; // Add as many as you like
	$page_slug = 'login-members';
	$page_slug2 = 'login-membership';
	$news_feed = 'news-feed';
	$themen = 'unterrichtsbereicherung';
	$workshops = 'workshops';
	$kalender = 'kalender';
	$bibliothek = 'bibliothek';
	$webinare = 'webinare';
	$lehrkraftraum = 'lehrkraftraum';
	$achtsamkeitinderschule = 'achtsamkeitinderschule';

	$is_a_member = false;
	require_once( ABSPATH . 'wp-includes/pluggable.php' );
	
	$is_a_member = Groups_User_Group::read( get_current_user_id() , 12 );//if member belongs to emmebrship group

	
	// Check if the current page is the one where the menu items should be removed.
	if ( is_page( $page_slug ) || 
				is_page( $news_feed ) || 
				is_page( $page_slug2 ) || 
				is_page( $themen ) ||
				//is_page( $workshops ) || 
				is_page( $kalender ) || 
				is_page( $webinare ) || 
				is_page( $lehrkraftraum ) || 
				is_page( $achtsamkeitinderschule ) || 
				is_page( $bibliothek ) ||
				is_archive()) {
			// Loop through the menu items and find the ones to remove.

			
			if ( $is_a_member ) {

			}

			foreach ( $items as $key => $item ) {
					if ( in_array($item->title, $menu_item_labels) ) {
							// Remove the menu item from the array.
							unset( $items[$key] );
					}

					if ( $item->title == 'Kurse' && ! $is_a_member ) {
						unset( $items[$key] );
					}
			}
	} else if ( is_page( '' ) && ! bp_is_group()){
		
		// Skip menu item removal on mobile devices
		if ( $is_a_member ) {
			//do nothing since login membership is already in display
		} else {
			//for not member remove login membership page/homepage and others in the array

			// Loop through the menu items and find the ones to remove.
			foreach ( $items as $key => $item ) {

				if ( in_array($item->title, $other_page_menu_item_labels )) {
						// Remove the menu item from the array.
						unset( $items[$key] );
				}

			}
		}

	}

	return $items; // Don't forget to return the modified items!
}

add_filter( 'wp_get_nav_menu_items', 'remove_menu_item_on_specific_pages', 10, 3 );

function remove_menu_item_on_homepage( $items, $menu, $args ) {
	// Define the menu item labels to remove and the corresponding page slug.
	$menu_item_labels = ['Meine Kurse', 'Ressourcen', 'Spickzettel', 'Bibliothek', /*'Download','Workshops',*/  'Kalender', 'Community', 'Lehrkraftraum',  'Webinare', "Kurse" ]; // Add as many as you like

	// Check if the current page is the one where the menu items should be removed.
	if ( is_front_page() ) {
			// Loop through the menu items and find the ones to remove.
			foreach ( $items as $key => $item ) {
					if ( in_array($item->title, $menu_item_labels) ) {
							// Remove the menu item from the array.
							unset( $items[$key] );
					}
			}
	}

	return $items; // Don't forget to return the modified items!
}


add_filter( 'wp_get_nav_menu_items', 'remove_menu_item_on_homepage', 10, 3 );

function remove_links_on_group( $items, $menu, $args ) {
	// Define the menu item labels to remove and the corresponding page slug.
	$menu_item_labels = ['Mitgliedschaft', 'Über Mich', 'Future Skills', 'Spickzettel', 'Blog', ]; // Add as many as you like

	// Check if the current page is the one where the menu items should be removed.
	if ( bp_is_group() ) {
			// Loop through the menu items and find the ones to remove.
			foreach ( $items as $key => $item ) {
					if ( in_array($item->title, $menu_item_labels) ) {
							// Remove the menu item from the array.
							unset( $items[$key] );
					}
			}
	}

	return $items; // Don't forget to return the modified items!
}

add_filter( 'wp_get_nav_menu_items', 'remove_links_on_group', 10, 3 );

function remove_links_on_events( $items, $menu, $args ) {
	// Define the menu item labels to remove and the corresponding page slug.
	$menu_item_labels = ['Mitgliedschaft', 'Über Mich', 'Future Skills', 'Spickzettel', 'Blog', ]; // Add as many as you like

	// Check if the current page is an events page or a single event page.
	if ( tribe_is_event() || tribe_is_event_query() ) {
			// Loop through the menu items and find the ones to remove.
			foreach ( $items as $key => $item ) {
					if ( in_array($item->title, $menu_item_labels) ) {
							// Remove the menu item from the array.
							unset( $items[$key] );
					}
			}
	}

	return $items; // Don't forget to return the modified items!
}

add_filter( 'wp_get_nav_menu_items', 'remove_links_on_events', 10, 3 );


/**
 * Enable oEmbed on activity.
 *
 * @return void
 */
function buddyboss_enable_activity_oembed() {
  add_filter('bp_activity_embed_media', '__return_true');
}
add_action('bp_init', 'buddyboss_enable_activity_oembed');

add_filter( 'gettext', 'jp_translate_text', 99, 3 );
function jp_translate_text( $translated_text, $text, $domain ) {

	if ( $domain == 'plugin_yit_compare_button_text' ) {

		switch ( $text ) {

			case 'Compare' :

					$translated_text = 'Vergleichen';
					break;

			case 'Shipping' :

				$translated_text = 'Versand';
				break;

			case 'Versand' :

				$translated_text = 'Versand';
				break;

			}
			
			
			
	} else if ( $domain == 'woocommerce' ) {

			switch ( $translated_text ) {
	
				case 'Austria' :
	
						$translated_text = 'Österreich';
						break;
				case 'Germany' :
	
						$translated_text = 'Deutschland';
						break;
				case 'Free Shipping' :
	
						$translated_text = 'kostenloser Versand';
						break;
				case 'Versandkostenpauschale' :
	
						$translated_text = 'kostenloser Versand';
						break;
				case 'Compare' :
	
						$translated_text = 'Vergleichen';
						break;
	
				case 'Add to Wishlist' :
	
					$translated_text = 'Auf die Wunschliste';
					break;

				case 'Description' :
	
					$translated_text = 'Beschreibung';
					break;

				case 'Reviews' :
	
					$translated_text = 'Beschreibung';
					break;

				case 'Reviews (%d)' :
	
					$translated_text = 'Bewertungen (%d)';
					break;
				case 'Add to cart' :
	
					//$translated_text = 'In den Warenkorb';
					$translated_text = 'In den Warenkorb';
					break;

				case 'Add a review' :
	
					$translated_text = 'Füge deine Bewertung hinzu';
					break;

				case 'Your rating' :
	
					$translated_text = 'Deine Bewertung';
					break;

				case 'Your review' :

					$translated_text = 'Deine Rezension';
					break;

				case 'Submit' :

					$translated_text = 'Senden';
					break;
				case 'Proceed to checkout' :

					$translated_text = 'Weiter zur Kasse';
					break;
				case 'Change address' :

					$translated_text = 'Adresse ändern';
					break;
				case 'Subtotal' :

					$translated_text = 'Zwischensumme';
					break;

				case 'Shipping' :

					$translated_text = 'Versand';
					break;

				case 'Versand' :

					$translated_text = 'Versand';
					break;

				case 'Total' :

					$translated_text = 'Gesamtsumme';
					break;
				case 'First name' :

					$translated_text = 'Vorname';
					break;
				case 'Last name' :

					$translated_text = 'Nachname';
					break;

				case 'Country' :

					$translated_text = 'Land';
					break;
				case 'Street address' :

					$translated_text = 'Straße';
					break;
				case 'Postcode / ZIP' :

					$translated_text = 'Postleitzahl';
					break;
				case 'Town / City' :

					$translated_text = 'Ort / Stadt';
					break;
				case 'Email address' :

					$translated_text = 'E-Mail-Adresse';
					break;
	
				}	

	} else {
		
		switch ( $translated_text ) {

				case 'Compare' :

						$translated_text = 'Vergleichen';
						break;
						
				case 'Add to Wishlist' :

						$translated_text = 'Auf die Wunschliste';
						break;
				case 'Free Shipping' :

						$translated_text = 'kostenloser Versand';
						break;
				case 'Versandkostenpauschale' :

						$translated_text = 'kostenloser Versand';
						break;

				case 'Post Comment' :

					$translated_text = 'Kommentar abschicken';
					break;

				case '<a href="%1$s" aria-label="%2$s">Logged in as %3$s</a>. <a href="%4$s">Log out?</a>' :

					$translated_text = '<a href="%1$s" aria-label="%2$s">Angemeldet als %3$s</a>. <a href="%4$s">Abmelden?</a>';
					break;

				case 'Shipping' :

					$translated_text = 'Versand';
					break;

				case 'Versand' :

					$translated_text = 'Versand';
					break;
				case 'Annual' :

					$translated_text = 'Jährlich';
					break;
			
				case 'Monthly ' :

					$translated_text = 'Monatlich';
					break;
						
				case 'News Feed' :

					$translated_text = 'Community';
					break;
						
				case 'Preview this Course' :

					$translated_text = 'Kursübersicht';
					break;
				case 'Start Course' :

					$translated_text = 'Kurs Starten';
					break;
						
		}

	}
	
	return $translated_text;
}


// Custom redirection after checkout
function membership_page_redirect($order_id) {
	
	// Get the order object
	$order = wc_get_order($order_id);
	
	// Check if the order contains a specific product (replace 'product_id' with the actual product ID)
	$specific_product_id = 18709; // Replace with your specific product ID

	//loop through items and check if has product in order and if has, then redirect to /membership-thank-you page
	foreach ( $order->get_items() as $item ) {
		$product_id = $item->get_product_id();
		if ( $product_id == $specific_product_id || $product_id == 20386 ) {
			wp_redirect('/membership-thank-you/');
			exit;
		}
	}

}

add_action('woocommerce_thankyou', 'membership_page_redirect', 99, );


// Custom redirection after checkout
function achtsamkeitinderschule_page_redirect($order_id) {
	
	// Get the order object
	$order = wc_get_order($order_id);
	
	// Check if the order contains a specific product (replace 'product_id' with the actual product ID)
	$specific_product_id = [20029, 20142, 20371, 20373, 20374]; // Replace with your specific product ID

	//loop through items and check if has product in order and if has, then redirect to /membership-thank-you page
	foreach ( $order->get_items() as $item ) {
		$product_id = $item->get_product_id();
		if ( in_array( $product_id, $specific_product_id  ) ) {
			wp_redirect('/courses/achtsamkeitinderschule/');
			exit;
		}
	}

}

add_action('woocommerce_thankyou', 'achtsamkeitinderschule_page_redirect', 99, );

add_action('woocommerce_before_checkout_form', 'add_custom_content_to_checkout');

function add_custom_content_to_checkout() {
    // Get the current WooCommerce cart
    $cart = WC()->cart;

    // Define the product ID you want to check for
    $product_id_to_check = 18709; // Change this to your product ID

		//find if product_id_to_check is in cart
		$found = false;

		//loop through items and check if has product in order and if has, then redirect to /membership-thank-you page
		foreach ( $cart->get_cart() as $cart_item ) {
			$product_id = $cart_item['product_id'];
			if ( $product_id == $product_id_to_check ) {
				$found = true;
				break;
			}
		}

		if ( ! $found ) {
			echo '<style>.custom-checkout-section{display: none;}</style>';
		}
}

add_action('woocommerce_order_status_completed', 'send_welcome_email_after_purchase');

function send_welcome_email_after_purchase($order_id) {
    // The ID of the product to check for
    $product_id = 18709; // replace with your product ID

    // Get the order
    $order = wc_get_order($order_id);

    // Get the user
    $user = $order->get_user();

    // Check if the user has any completed orders before this one
    $completed_orders = wc_get_orders(array(
        'status' => 'completed',
        'return' => 'ids',
        'customer' => $user->ID,
        'date_before' => $order->get_date_created(),
    ));

    if (count($completed_orders) > 0) {
        // The user has completed orders before this one, check the items
        foreach ($order->get_items() as $item) {
            if ($item->get_product_id() == $product_id || $item->get_product_id() == 20386 ) {
                // The product was in the order, send the email
                $email = WC()->mailer()->get_emails()['WC_Email_Customer_New_Account'];
                $email->trigger($order->get_user_id());
                break;
            }
        }
    }
}

function redirect_user_based_on_group($user_login, $user) {

	require_once( ABSPATH . 'wp-includes/pluggable.php' );

	$is_a_member = Groups_User_Group::read( $user->ID , 12 );

	if ($is_a_member) {
			wp_redirect('/login-membership/');
			exit;
	}

}
add_action('wp_login', 'redirect_user_based_on_group', 10, 2);

function add_user_to_activecampaign_list_membership($order_id) {
	$order = wc_get_order($order_id);
	$items = $order->get_items();

	foreach ($items as $item) {
			$product_id = $item->get_product_id();

			// Check if the product ID matches the specific product
			if (in_array($product_id, [20386, 18709, 20388, 20387, 18817, 18818])) {

					$email = $order->get_billing_email();
					$first_name = $order->get_billing_first_name();
					$last_name = $order->get_billing_last_name();

					$api_url = 'https://kidster.api-us1.com/api/3/';
					$api_key = '87056f0e22fe1a032697ece3484e10c0539e64ec662e1f72e774ceed552704ea2ced9ce4';

					$list_id = '5'; // Replace with the ID of the ActiveCampaign list you want to add users to.
					$unsubscribe_list_id = '9';

					$data = [
							'contact' => [
									'email' => $email,
									'firstName' => $first_name,
									'lastName' => $last_name,
							],
							'fieldValues' => [
									[
											'field' => '1105',
											'value' => 'yes'
									]
							]
					];

					$curl = curl_init($api_url . 'contact/sync');
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($curl, CURLOPT_HTTPHEADER, ['Api-Token: ' . $api_key]);
					curl_setopt($curl, CURLOPT_POST, true);
					curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

					$response = curl_exec($curl);
					$http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
					curl_close($curl);

					//execute curl twice to prevent tag issues
					$curl = curl_init($api_url . 'contact/sync');
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($curl, CURLOPT_HTTPHEADER, ['Api-Token: ' . $api_key]);
					curl_setopt($curl, CURLOPT_POST, true);
					curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

					$response = curl_exec($curl);
					$http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

					if ($http_code == 200) {
							//get contact id
							$contact = json_decode($response);
							$contact_id = $contact->contact->id;

							// Subscribe to the main list
							$data = [
									'contactList' => [
											'list' => $list_id,
											'contact' => $contact_id,
											'status' => 1,
									]
							];

							$curl = curl_init($api_url . 'contactLists');
							curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
							curl_setopt($curl, CURLOPT_HTTPHEADER, ['Api-Token: ' . $api_key]);
							curl_setopt($curl, CURLOPT_POST, true);
							curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
							$response = curl_exec($curl);
							$http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
							curl_close($curl);

							// Unsubscribe from the unsubscribe list
							$data = [
									'contactList' => [
											'list' => $unsubscribe_list_id,
											'contact' => $contact_id,
											'status' => 2, // 2 means unsubscribed
									]
							];

							$curl = curl_init($api_url . 'contactLists');
							curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
							curl_setopt($curl, CURLOPT_HTTPHEADER, ['Api-Token: ' . $api_key]);
							curl_setopt($curl, CURLOPT_POST, true);
							curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
							$response = curl_exec($curl);
							$http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
							curl_close($curl);

					} else {
							// Handle the error, e.g., log it or display an error message.
					}
			}
	}
}

add_action('woocommerce_order_status_completed', 'add_user_to_activecampaign_list_membership', 10);

/**
* Save the generated password as user meta
*/
function save_generated_password_as_user_meta( $customer_id, $new_customer_data, $password_generated ) {

	$email = $new_customer_data['user_email'];


	$username = $new_customer_data['user_login'];

	$subject = 'Deine Login-Daten für Pädagogik+';

	$message = '<p style="text-align: left">Hallo,</p>
	<p style="text-align: left">Dein Konto steht bereit, und du kannst dich schon mal umschauen. Verwende einfach die folgenden Details, um dich einzuloggen</p>
	<p>Username: ' . $username . '</p>
	<p>Password: ' . $new_customer_data['user_pass'] . '</p>
	<p style="text-align: left">Du kannst dich hier einloggen: <a href="https://xn--pdagogik-plus-bfb.com/mein-konto/">pädagogik-plus.com</a></p>
	<p style="text-align: left">Falls du dein Passwort vergessen hast, klicke einfach <a href="https://xn--pdagogik-plus-bfb.com/wp-login.php?action=lostpassword">hier</a>, um es zurückzusetzen. Wir helfen dir gerne bei der Einrichtung eines neuen Passworts :)</p>
	<p style="text-align: left">Deine Willkommens-E-Mail ist auf dem Weg zu dir, also halte Ausschau danach!</p>
	Nochmals, wir freuen uns riesig, dass du dabei bist, xx!
	<p style="text-align: left">Wir sehen uns drinnen, Team Pädagogik+</p>';

	//set from email to branka@kidster.ch
	$headers = array('Content-Type: text/html; charset=UTF-8', 'From: 
	Pädagogik-Plus <branka.rezan@paedagogik-plus.com>');
	wp_mail( $email, $subject, $message, $headers );

}

add_action( 'woocommerce_created_customer', 'save_generated_password_as_user_meta', 8, 3 );

add_action('woocommerce_order_status_processing', 'send_custom_advent_calendar_email');
function send_custom_advent_calendar_email($order_id) {
    // Get order object
    $order = wc_get_order($order_id);
    
    // Check if the specific product is in the order
    $has_advent_calendar = false;
    foreach ($order->get_items() as $item) {
        if ($item->get_product_id() == 22144) {
            $has_advent_calendar = true;
            break;
        }
    }
    
    // Only send email if the advent calendar was ordered
    if ($has_advent_calendar) {
        // Get customer details
        $customer_name = $order->get_billing_first_name();
        $customer_email = $order->get_billing_email();
        
        // Email headers
        $headers = array(
            'Content-Type: text/html; charset=UTF-8',
            'From: Pädagogik-Plus <branka.rezan@paedagogik-plus.com>'
        );
        
        // Email subject
        $subject = 'Herzlich willkommen zu unserem Pädagogik+ Adventskalender!';
        
        // Email body
        $message = '
        <html>
        <body>
        <p>Hallo ' . esc_html($customer_name) . ',</p>
        <p>🎄 Herzlich willkommen zu unserem Pädagogik+ Adventskalender! 🎄</p>
        
        <p>Wir freuen uns sehr, dass du mit unserem Adventskalender die Vorweihnachtszeit bereichern möchtest. Hier erfährst du, wie es funktioniert:</p>
        
        <p><strong>1️⃣ Einloggen bei Pädagogik+</strong><br>
        Besuche www.pädagogik-plus.com und klicke oben rechts auf „Sign in", um dich anzumelden.</p>
        
        <p><strong>2️⃣ Den Adventskalender finden</strong><br>
        Du findest den Adventskalender im Downloadbereich. Alternativ kannst du direkt hier klicken: Adventskalender 2024.</p>
        
        <p><strong>3️⃣ Mitmachen leicht gemacht</strong><br>
        Auf der Seite erwartet dich eine ausdruckbare Weltkarte, mit der du und deine Schüler:innen (oder dein Kind zu Hause) jedes Land markieren können, das ihr erkundet. Am Vorabend wird das PDF für das jeweilige Fenster im Kalender bereitgestellt.</p>
        
        <p><strong>4️⃣ Eltern einbeziehen</strong><br>
        Falls du den Kalender in der Schule nutzen möchtest, kannst du unseren vorbereiteten Elternbrief verwenden. Dieser informiert die Eltern über die Inhalte des Kalenders und sorgt für eine einfache Organisation. Den Brief findest du unten auf der Seite.</p>
        
        <p><strong>❓ Fragen oder Anregungen?</strong><br>
        Wir sind jederzeit für dich da! Melde dich gerne, falls du Unterstützung oder Ideen benötigst.</p>
        
        <p>Ich wünsche euch viel Freude, leuchtende Augen und eine wunderschöne, besinnliche Adventszeit! ✨</p>
        
        <p>Herzliche Grüsse<br>
        <strong>Branka @ Pädagogik+</strong></p>
        </body>
        </html>';
        
        // Send email
        wp_mail($customer_email, $subject, $message, $headers);
    }
}

add_filter( 'tribe_events_excerpt_length', 'custom_events_excerpt_length', 999 );
function custom_events_excerpt_length( $length ) {
  return 300; // Change 20 to the number of words you want in the event excerpt.
}

function buddyboss_set_default_group_tab() {
	bp_update_option( 'bp-default-component', 'activity' ); // 'activity' represents the Feed tab
}
add_action( 'bp_init', 'buddyboss_set_default_group_tab' );

function wpdocs_change_translate_text( $translated_text ) {
	if ( $translated_text == 'Documents' ) {
			$translated_text = 'Dokumente';
	} else if ( $translated_text == 'News Feed' ) {
		$translated_text = 'Community';
	}
	return $translated_text;
}
add_filter( 'gettext', 'wpdocs_change_translate_text', 99 );

//create custom post type for "Experts"
function create_posttype() {
 
	register_post_type( 'experts',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Experts' ),
				'singular_name' => __( 'Expert' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'experts'),
			'show_in_rest' => true,
			'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions', 'excerpt'),
			'taxonomies' => array('category', 'post_tag'),
			'menu_icon' => 'dashicons-admin-users',
		)
	);

	register_post_type( 'classroom',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Classrooms' ),
				'singular_name' => __( 'Classroom' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'classroom'),
			'show_in_rest' => true,
			'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions', 'excerpt', 'comments'),
			'taxonomies' => array('category', 'post_tag'),
			'menu_icon' => 'dashicons-admin-users',
		)
	);

	register_post_type( 'resourcen',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Ressourcen' ),
				'singular_name' => __( 'Ressourcen' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'ressourcen-post'),
			'show_in_rest' => true,
			'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions', 'excerpt', 'comments'),
			'taxonomies' => array('category', 'post_tag'),
			'menu_icon' => 'dashicons-admin-users',
		)
	);
}

// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

//create a shortcode to display the experts, have it accept a number of experts to display, column number
function display_experts($atts) {
	// Attributes
	extract( shortcode_atts(
		array(
			'number' => '20',
			'columns' => '4',
		), $atts )
	);

	//get the experts
	$args = array(
		'post_type' => 'experts',
		'posts_per_page' => $number,
		'orderby' => 'rand',
	);

	//get experts custom fields from ACF


	$experts = new WP_Query( $args );

	// The Loop
	if ( $experts->have_posts() ) {
		$experts_html = '<div class="experts-container">';
		while ( $experts->have_posts() ) {

			$experts->the_post();
			
			
			// Retrieve custom field values using get_field()
			$link = get_field('link');
			$button_label = get_field('button_label');
			$thumbnail = get_the_post_thumbnail();
			$title = get_the_title();

			//get tags
			$tags = get_the_tags();

			$experts_html .= '
			<div class="expert-item">
				<div class="expert-sub-wrapper">
					<div class="expert-thumbnail">
						' . $thumbnail . '
					</div>
					<div class="expert-tags">
						<ul>';
						foreach ($tags as $tag) {
							$experts_html .= '<li>' . $tag->name . '</li>';
						}
						$experts_html .= '</ul>
					</div>
					<div class="expert-title">
						' . $title . '
					</div>
					<div class="expert-button">
						<a target="_blank" href=' . $link . '>' . $button_label . '</a>
					</div>
				</div>
			</div>
			';
		}
		$experts_html .= '</div>';
	} else {
		// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata();

	return $experts_html;
}

add_shortcode( 'display_experts', 'display_experts' );

function display_classrooms($atts) {
	// Attributes
	extract(shortcode_atts(
			array(
					'number' => '20',
					'columns' => '4',
					'post_ids' => '', // New attribute for post IDs
			), $atts)
	);

	// Get the experts
	$args = array(
			'post_type' => 'classroom',
			'posts_per_page' => $number,
			'orderby' => 'rand',
	);

	// If post_ids are provided, add them to the query arguments
	if (!empty($post_ids)) {
			$post_id_array = array_map('trim', explode(',', $post_ids));
			$args['post__in'] = $post_id_array;
			$args['orderby'] = 'post__in'; // Preserve the order of specified post IDs
	}

	$classrooms = new WP_Query($args);

	// The Loop
	if ($classrooms->have_posts()) {
			$classroom_html = '<div class="classroom-container">';
			while ($classrooms->have_posts()) {
					$classrooms->the_post();

					// Retrieve custom field values using get_field()
					//$link = get_field('link');
					$link = get_the_permalink();
					$button_label = get_field('button_label');
					$thumbnail = get_the_post_thumbnail();
					$title = get_the_title();
					$teacher_name = get_field('teacher');
					$teacher_image = get_field('teacher_image');
					$room_link = get_field('room_link');

					// Get tags
					$tags = get_the_tags();

					$classroom_html .= '
					<div class="classroom-item">
							<div class="classroom-sub-wrapper">
									<div class="classroom-thumbnail">
											' . $thumbnail . '
									</div>
									<div class="classroom-teacher-wrapper">
											<div class="classroom-teacher-img"><img class="teacher-img" src="' . $teacher_image . '" /></div>
											<div class="classroom-teacher-name">' . $teacher_name . '</div>
									</div>
									<div class="classroom-title">
											' . $title . '
									</div>
									<div class="classroom-tags">
											<ul>';
					if ($tags) {
							foreach ($tags as $tag) {
									$classroom_html .= '<li>' . $tag->name . '</li>';
							}
					}
					$classroom_html .= '</ul>
									</div>';

					if ($link) {
						$classroom_html .= '<div class="classroom-link">
										<a href="' . $link . '">View Room</a>
									</div>';
					}

							$classroom_html .= '</div>
					</div>
					';
			}
			$classroom_html .= '</div>';
	} else {
			// No posts found
			$classroom_html = '<p>No classrooms found.</p>';
	}

	/* Restore original Post Data */
	wp_reset_postdata();

	return $classroom_html;
}

add_shortcode('display_classrooms', 'display_classrooms');

//create a shortcode to display the events similar to display_experts design, have it accept a number of events to display, column number
function display_events($atts) {
	// Attributes
	extract( shortcode_atts(
		array(
			'number' => '20',
			'columns' => '4',
		), $atts )
	);

	//get upcoming events order by date
	$args = array(
		'post_type' => 'tribe_events',
		'posts_per_page' => $number,
		'meta_query' => array(
				array(
						'key' => '_EventStartDate', // Adjust key based on your plugin's meta key
						'value' => current_time( 'mysql' ), // Current date and time
						'compare' => '>', // Events after current date
						'type' => 'DATETIME' // Adjust type based on your meta data type
				)
		),
		'orderby' => 'meta_value',
		'meta_key' => '_EventStartDate', // Adjust key based on your plugin's meta key
		'order' => 'ASC',
	);


	$events = new WP_Query( $args );

	// The Loop
	if ( $events->have_posts() ) {
		$events_html = '<div class="experts-container">';
		while ( $events->have_posts() ) {

			$events->the_post();
			
			// Retrieve custom field values using get_field()
			$thumbnail = get_the_post_thumbnail();
			$title = get_the_title();
			$excerpt = get_the_excerpt();
			$link = get_the_permalink();
			//get event date
			$date = tribe_get_start_date( null, false, 'd.m.y' );
			$button_label = $date;

			//get tags
			$tags = get_the_tags();

			$events_html .= '
			<div class="expert-item">
				<div class="expert-sub-wrapper">
					<div class="expert-thumbnail">
						' . $thumbnail . '
					</div>
					<div class="expert-tags">
						<ul>';
						foreach ($tags as $tag) {
							$events_html .= '<li>' . $tag->name . '</li>';
						}
						$events_html .= '</ul>
					</div>
					<div class="expert-title">
						' . $title . '
					</div>
					<div class="expert-button">
						<a href=' . $link . '>' . $button_label . '</a>
					</div>
				</div>
			</div>
			';
		}
		$events_html .= '</div>';
	} else {
		// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata();

	return $events_html;
}

add_shortcode( 'display_events', 'display_events' );

function display_ressourcen($atts) {
	// Attributes
	extract(shortcode_atts(
			array(
					'number' => '3',
					'columns' => '4',
					'post_ids' => '', // Attribute for post IDs
					'tags' => '', // New attribute for tags
			), $atts)
	);

	// Get the resources
	$args = array(
			'post_type' => 'resourcen',
			'posts_per_page' => $number,
			'orderby' => 'rand',
	);

	// If post_ids are provided, add them to the query arguments
	if (!empty($post_ids)) {
			$post_id_array = array_map('trim', explode(',', $post_ids));
			$args['post__in'] = $post_id_array;
			$args['orderby'] = 'post__in'; // Preserve the order of specified post IDs
	}

	// If tags are provided, add them to the query arguments
	if (!empty($tags)) {
			$tag_array = array_map('trim', explode(',', $tags));
			$args['tag_slug__in'] = $tag_array;
	}

	$resources = new WP_Query($args);

	// The Loop
	if ($resources->have_posts()) {
			$resource_html = '<div class="resource-container">';
			while ($resources->have_posts()) {
					$resources->the_post();

					// Retrieve custom field values using get_field()
					$link = get_the_permalink();
					$thumbnail = get_the_post_thumbnail();
					$title = get_the_title();
					$excerpt = wp_trim_words(get_the_excerpt(), 12, '...');
					$room_link = get_field('download_link');

					// Get tags
					$tags = get_the_tags();

					$resource_html .= '
					<div class="resource-item">
						<div class="resource-thumbnail">
								' . $thumbnail . '
						</div>
						<div class="resource-thumbnail-overlay">
						</div>
							<div class="resource-sub-wrapper">
									<div class="resource-title">
											<a href="' . $link . '">' . $title . '</a>
									</div>
									<div class="resource-excerpt">
											' . $excerpt . '
									</div>';

					$resource_html .= '</div>
					</div>
					';
			}
			$resource_html .= '</div>';
	} else {
			// No posts found
			$resource_html = '<p>No resources found.</p>';
	}

	/* Restore original Post Data */
	wp_reset_postdata();

	return $resource_html;
}

add_shortcode( 'display_ressourcen', 'display_ressourcen' );

//create a shortcode to display the events similar to display_experts design, have it accept a number of events to display, column number
function display_events_calendar($atts) {
	// Attributes
	extract( shortcode_atts(
		array(
			'number' => '20',
			'columns' => '4',
		), $atts )
	);

	//get upcoming events order by date
	$args = array(
		'post_type' => 'tribe_events',
		'posts_per_page' => $number,
		'meta_query' => array(
				array(
						'key' => '_EventStartDate', // Adjust key based on your plugin's meta key
						'value' => current_time( 'mysql' ), // Current date and time
						'compare' => '>', // Events after current date
						'type' => 'DATETIME' // Adjust type based on your meta data type
				)
		),
		'orderby' => 'meta_value',
		'meta_key' => '_EventStartDate', // Adjust key based on your plugin's meta key
		'order' => 'ASC',
	);


	$events = new WP_Query( $args );

	// The Loop
	if ( $events->have_posts() ) {
		$events_html = '<div class="events-lists-container">';
		while ( $events->have_posts() ) {

			$events->the_post();
			
			// Retrieve custom field values using get_field()
			$thumbnail = get_the_post_thumbnail();
			$title = get_the_title();
			$excerpt = get_the_content();//get_the_excerpt();

			$excerpt = apply_filters('the_content', $excerpt);
			$excerpt = str_replace(']]>', ']]&gt;', $excerpt);

			$link = get_the_permalink();
			//get event date
			
			$date = tribe_get_start_date( null, false, 'd.m.y' );
			$day = tribe_get_start_date( null, false, 'd' );
			$month = tribe_get_start_date( null, false, 'M' );

			$start_date = tribe_get_start_date( null, false, 'F j' );
			$start_time = tribe_get_start_date( null, false, 'H:i' );
			$end_time = tribe_get_end_date( null, false, 'H:i' );

			$formatted_date = sprintf( '%s @ %s - %s', $start_date, $start_time, $end_time );

			$button_label = $date;

			//get tags
			$tags = get_the_tags();

			$events_html .= '
			<div class="event-list-item">
				<div class="event-list-sub-wrapper">
					<div class="event-list-date">
						<div class="event-list-month">' . $month . '</div>
						<div class="event-list-day">' . $day . '</div>
					</div>
					<div class="event-list-content">
						<div class="event-list-date-start">'. $formatted_date .'</div>
						<div class="event-list-title">
							<a href="' . $link . '">' . $title . '</a>
						</div>
						<div class="event-list-excerpt">
							' . $excerpt . '
						</div>
					</div>
					<div class="event-list-thumbnail">
						' . $thumbnail . '
					</div>
				</div>
			</div>
			';
		}
		$events_html .= '</div>';
	} else {
		// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata();

	return $events_html;
}


add_shortcode( 'display_events_calendar', 'display_events_calendar' );

//create a shortcode to display the events similar to display_experts design, have it accept a number of events to display, column number
function display_events_calendar_grid($atts) {
	// Attributes
	extract( shortcode_atts(
		array(
			'number' => '20',
			'columns' => '4',
		), $atts )
	);

	//get upcoming events order by date
	$args = array(
		'post_type' => 'tribe_events',
		'posts_per_page' => $number,
		'meta_query' => array(
				array(
						'key' => '_EventStartDate', // Adjust key based on your plugin's meta key
						'value' => current_time( 'mysql' ), // Current date and time
						'compare' => '>', // Events after current date
						'type' => 'DATETIME' // Adjust type based on your meta data type
				)
		),
		'orderby' => 'meta_value',
		'meta_key' => '_EventStartDate', // Adjust key based on your plugin's meta key
		'order' => 'ASC',
	);


	$events = new WP_Query( $args );

	// The Loop
	if ( $events->have_posts() ) {
		$events_html = '<div class="events-grid-container">';
		while ( $events->have_posts() ) {

			$events->the_post();
			
			// Retrieve custom field values using get_field()
			$thumbnail = get_the_post_thumbnail();
			$title = get_the_title();
			$excerpt = get_the_excerpt();
			$link = get_the_permalink();
			//get event date
			
			$date = tribe_get_start_date( null, false, 'd.m.y' );
			$day = tribe_get_start_date( null, false, 'd' );
			$month = tribe_get_start_date( null, false, 'M' );

			$start_date = tribe_get_start_date( null, false, 'F j' );
			$start_time = tribe_get_start_date( null, false, 'H:i' );
			$end_time = tribe_get_end_date( null, false, 'H:i' );

			$formatted_date = sprintf( '%s @ %s - %s', $start_date, $start_time, $end_time );

			$button_label = $date;

			//get tags
			$tags = get_the_tags();

			$events_html .= '
			<div class="event-list-item">
				<div class="event-list-thumbnail">
					' . $thumbnail . '
				</div>
				<div class="event-list-sub-wrapper">
					<div class="event-list-date">
						<div class="event-list-month">' . $month . '</div>
						<div class="event-list-day">' . $day . '</div>
					</div>
					<div class="event-list-content">
						<div class="event-list-date-start">'. $formatted_date .'</div>
						<div class="event-list-title">
							<a href="' . $link . '">' . $title . '</a>
						</div>
						<div class="event-list-excerpt">
							' . $excerpt . '
						</div>
					</div>
				</div>
			</div>
			<div class="event-list-item">
				<div class="event-list-thumbnail">
					' . $thumbnail . '
				</div>
				<div class="event-list-sub-wrapper">
					<div class="event-list-date">
						<div class="event-list-month">' . $month . '</div>
						<div class="event-list-day">' . $day . '</div>
					</div>
					<div class="event-list-content">
						<div class="event-list-date-start">'. $formatted_date .'</div>
						<div class="event-list-title">
							<a href="' . $link . '">' . $title . '</a>
						</div>
						<div class="event-list-excerpt">
							' . $excerpt . '
						</div>
					</div>
				</div>
			</div>
			';
		}
		$events_html .= '</div>';
	} else {
		// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata();

	return $events_html;
}


add_shortcode( 'display_events_calendar_grid', 'display_events_calendar_grid' );

function recent_posts_shortcode($atts) {
	// Extract shortcode attributes
	$atts = shortcode_atts(array(
			'exclude_categories' => '',
			'number_of_posts' => 20,
			'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
			'show_pagination' => 'true',
			'max_date' => '' // New attribute for maximum date
	), $atts, 'recent_post');

	// Convert exclude_categories to an array
	$exclude_categories = array_filter(array_map('trim', explode(',', $atts['exclude_categories'])));

	// Get category IDs from slugs
	$exclude_category_ids = array();
	foreach ($exclude_categories as $slug) {
			$category = get_category_by_slug($slug);
			if ($category) {
					$exclude_category_ids[] = $category->term_id;
			}
	}

	// Query arguments
	$args = array(
			'post_type' => 'post',
			'posts_per_page' => intval($atts['number_of_posts']),
			'post_status' => 'publish',
			'orderby' => 'date',
			'order' => 'DESC',
			'category__not_in' => $exclude_category_ids,
			'paged' => $atts['paged']
	);

	// Add date query if max_date is specified
	if (!empty($atts['max_date'])) {
			$args['date_query'] = array(
					array(
							'after' => $atts['max_date'],
							'inclusive' => false
					)
			);
	}

	// Run the query
	$query = new WP_Query($args);

	// Start output buffering
	ob_start();

	if ($query->have_posts()) :
			?>
			<div class="article-grid blog-articles">
					<?php while ($query->have_posts()) : $query->the_post(); ?>
							<div class="article-item">
									<?php if (has_post_thumbnail()) : ?>
											<div class="article-thumbnail">
													<a href="<?php the_permalink(); ?>">
															<?php the_post_thumbnail('medium'); ?>
													</a>
											</div>
									<?php endif; ?>
									<div class="article-content">
											<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
											<div class="article-excerpt">
												<?php
													// Check if the post uses WPBakery
													if (function_exists('vcGridSettings') && get_post_meta(get_the_ID(), '_wpb_vc_js_status', true)) {
														// WPBakery post
														$content = get_post_meta(get_the_ID(), '_wpb_shortcodes_custom_css', true);
														$content .= get_the_content();
												} else {
														// Regular post
														$content = get_the_content();
												}
												
												// Process the content
												$content = do_shortcode($content); // Execute shortcodes
												$content = strip_shortcodes($content); // Remove any remaining shortcode tags
												$content = wp_strip_all_tags($content); // Remove HTML tags
												$content = preg_replace('/\s+/', ' ', $content); // Remove extra whitespace
												$content = trim($content); // Trim leading and trailing whitespace
												
												echo wp_trim_words($content, 18, '...');
												?>
											</div>
									</div>
							</div>
					<?php endwhile; ?>
			</div>
			
			<?php
			// Pagination
			if ($atts['show_pagination'] === 'true') {
					$big = 999999999; // need an unlikely integer
					echo '<div class="pagination">';
					echo paginate_links(array(
							'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
							'format' => '?paged=%#%',
							'current' => max(1, $atts['paged']),
							'total' => $query->max_num_pages
					));
					echo '</div>';
			}
	endif;

	// Reset post data
	wp_reset_postdata();

	// Return the buffered content
	return ob_get_clean();
}
add_shortcode('recent_posts_shortcode', 'recent_posts_shortcode');

function apply_coupon_on_add_to_cart() {
	// Check if 'add-to-cart' and 'coupon' parameters are present in the URL
	if ( isset( $_GET['add-to-cart'] ) && isset( $_GET['coupon'] ) ) {
		
			$coupon_code = sanitize_text_field( $_GET['coupon'] );
			

			// Add the Coupon Code to the WooCommerce session 
			WC()->cart->add_discount( $coupon_code );

			// Redirect to the cart page to show the applied coupon
			wp_safe_redirect( wc_get_cart_url() );
			exit;
	}
}
//add_action( 'wp', 'apply_coupon_on_add_to_cart' );

add_action('woocommerce_checkout_process', 'check_user_coupon_and_add_to_group');

function check_user_coupon_and_add_to_group() {
    // Set the product ID and group ID
    $specific_product_id = 20029;
    $group_id = 12;

    // Check if the specific product is in the cart
    $product_in_cart = false;
    foreach (WC()->cart->get_cart() as $cart_item) {
        if ($cart_item['product_id'] == $specific_product_id) {
            $product_in_cart = true;
            break;
        }
    }

    // If the specific product is in the cart, check if any coupon is applied
    if ($product_in_cart) {
        $coupons_applied = WC()->cart->get_applied_coupons();
        
        // No coupons applied
        if (empty($coupons_applied)) {
            // Check if the Groups plugin is active and add the user to the group
            if (class_exists('Groups_User')) {
                $current_user = wp_get_current_user();
                Groups_User_Group::create(array('user_id' => $current_user->ID, 'group_id' => $group_id));
            }
        }
    }
}

add_action('woocommerce_before_cart', 'custom_cart_notice_and_button');

function custom_cart_notice_and_button() {
    if (is_cart()) {
        // Check if Product with ID 20029 is in the cart
        $has_product = false;
        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
            if ( $cart_item['product_id'] == 20029 ) {
                $has_product = true;
                break;
            }
        }

        // Check if a coupon is applied
        $has_coupon = WC()->cart->has_discount();

        if ( $has_product && $has_coupon ) {
            // Display the message with an upgrade button
            wc_print_notice( 
                '<div class="custom-notice-image-div"><img class="custom-notice-image-1" src="https://xn--pdagogik-plus-bfb.com/wp-content/uploads/2024/06/Paedagogik-Plus-Mitgliedschaft-Warteliste-1-150x150.png" alt=""></div>
								<div class="custom-notice-i">Nutze das einmalige Angebot und erhalte Zugang zum Mitgliederbereich von Pädagogik+<br/>Mit dem Kauf des Achtsamkeitskurses kannst du für nur 100 EUR/CHF Mitglied werden (anstatt CHF/EUR 490.--)</div><div class="custom-notice-button-div"><a href="' . esc_url( add_query_arg( 'upgrade_membership', 'true' ) ) . '" class="button">Upgrade</a></div>',
                'notice' 
            );
        }
    }
}

// Hook function to handle the upgrade button click
add_action( 'template_redirect', 'handle_upgrade_action' );

function handle_upgrade_action() {
    if ( isset( $_GET['upgrade_membership'] ) && $_GET['upgrade_membership'] == 'true' ) {

				WC()->cart->empty_cart();

				// Add the new product with ID 20142 to the cart
				WC()->cart->add_to_cart(20142);

				// Redirect to the cart page to show the updated cart
				wp_safe_redirect(wc_get_cart_url());
				exit;

    }
}

function add_user_to_activecampaign_achtsamkeitskurs_list_membership($order_id) {
	$order = wc_get_order($order_id);
	$items = $order->get_items();

	foreach ($items as $item) {
			$product_id = $item->get_product_id();

			// Check if the product ID matches the specific product
			if ( $product_id == 20029 || $product_id == 20142 || $product_id == 20371 || $product_id == 20373 || $product_id == 20374 ) {
					$email = $order->get_billing_email();
					$first_name = $order->get_billing_first_name();
					$last_name = $order->get_billing_last_name();

					$api_url = 'https://kidster.api-us1.com/api/3/';
					$api_key = '87056f0e22fe1a032697ece3484e10c0539e64ec662e1f72e774ceed552704ea2ced9ce4';
			
					$list_id = 9; // Replace with the ID of the ActiveCampaign list you want to add users to.
					
					$data = [
							'contact' => [
									'email' => $email,
									'firstName' => $first_name,
									'lastName' => $last_name,
							]
					];
			
					$curl = curl_init($api_url . 'contact/sync');
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($curl, CURLOPT_HTTPHEADER, ['Api-Token: ' . $api_key]);
					curl_setopt($curl, CURLOPT_POST, true);
					curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
			
					$response = curl_exec($curl);
					$http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
					curl_close($curl);
					
					//execute curl twice to prevent tag issues
					$curl = curl_init($api_url . 'contact/sync');
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($curl, CURLOPT_HTTPHEADER, ['Api-Token: ' . $api_key]);
					curl_setopt($curl, CURLOPT_POST, true);
					curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
			
					$response = curl_exec($curl);
					$http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
			
					if ($http_code == 200) {
							//get contact id
							$contact = json_decode($response);
							$contact_id = $contact->contact->id;

							$data = [
								'contactList' => [
										'list' => $list_id,
										'contact' => $contact_id,
										'status' => 1,
								]
							];

							$curl = curl_init($api_url . 'contactLists');

							curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
							curl_setopt($curl, CURLOPT_HTTPHEADER, ['Api-Token: ' . $api_key]);
							curl_setopt($curl, CURLOPT_POST, true);
							curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

							$response = curl_exec($curl);
							$http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

					} else {
							// Handle the error, e.g., log it or display an error message.
					}
			
					curl_close($curl);
					
			}
	}
}

add_action('woocommerce_order_status_completed', 'add_user_to_activecampaign_achtsamkeitskurs_list_membership', 10);

// Hook for WooCommerce order creation
add_action('woocommerce_checkout_order_processed', 'check_coupon_on_checkout', 10, 1);

function check_coupon_on_checkout($order_id) {
    $order = wc_get_order($order_id);
    $user_id = $order->get_user_id();
    
    if ($user_id) {
        $coupons = $order->get_coupon_codes();
        
        if (in_array('gast100', $coupons)) {
            // Update or add the meta for using gast100 coupon
            $gast100_count = get_field('gast100_usage_count', 'user_' . $user_id);
            $gast100_count = $gast100_count ? $gast100_count + 1 : 1;
            update_field('gast100_usage_count', $gast100_count, 'user_' . $user_id);
            
            // Update the last usage date
            update_field('last_gast100_usage_date', current_time('mysql'), 'user_' . $user_id);
            
            // If this is their first time using the coupon, mark as registered with coupon
            if ($gast100_count == 1) {
                update_field('registered_with_coupon', 'gast100', 'user_' . $user_id);
            }
        }
    }
}

function check_user_and_redirect() {
	// Check if the current page ID is 18766
	if (is_page(18766)) {
			// Check if the redirect cookie is set
			if (!isset($_COOKIE['redirect_check'])) {
					// Get the current user ID
					$user_id = get_current_user_id();

					// Check if the user is logged in
					if ($user_id) {
							// Get the gast100_usage_count user meta
							$usage_count = get_user_meta($user_id, 'gast100_usage_count', true);

							// Check if gast100_usage_count is not set or 0
							if (empty($usage_count)) {
									// Check if the user has commented on the BuddyPress group with ID 31
									$has_group_activity = bp_has_activities(array(
											'user_id' => $user_id,
											'object' => 'groups',
											'primary_id' => 31,
											'type' => 'activity_update',
											'max' => 1
									));

									// If the user hasn't posted in the group, redirect
									if (!$has_group_activity) {
											// Set a cookie that expires in 30 days
											setcookie('redirect_check', '1', time() + (30 * 24 * 60 * 60), '/');

											// Replace 'your-redirect-url' with the URL you want to redirect to
											wp_redirect('https://xn--pdagogik-plus-bfb.com/groups/vorstellen/');
											exit;
									}
							}
					}
			}
	}
}

// Hook the function to the 'template_redirect' action
//add_action('template_redirect', 'check_user_and_redirect');

function hide_ads_for_specific_categories() {
	// Check if we're on a single post page
	if (is_single()) {
			global $post;
			
			// List of categories to check
			$categories = array(
					'Elternarbeit', 'Konflikte', 'Beurteilung', 'Medien', 'Zusammenarbeit',
					'Delikte', 'Übertritt', 'Selbstregulation', 'Aggression', 'Klassendynamik', 'Burnout', 'Lernen', 'Schulverweigerung'
			);
			
			// Get the categories of the current post
			$post_categories = wp_get_post_categories($post->ID, array('fields' => 'names'));
			
			// Check if any of the specified categories are present
			$hide_ads = false;
			foreach ($categories as $category) {
					if (in_array($category, $post_categories)) {
							$hide_ads = true;
							break;
					}
			}
			
			// If we need to hide ads, add the CSS
			if ($hide_ads) {
					echo '<style type="text/css">
							.ads-for-members1 {
									display: none !important;
							}
					</style>';
			}
	}
}

// Hook the function to wp_head
add_action('wp_head', 'hide_ads_for_specific_categories');

//add_filter('learndash_quiz_check_answers_data', 'modify_essay_responses', 99, 3);

function modify_essay_responses($data, $user_id, $quiz_post_id) {
    // Check if responses exist
    if (isset($data['responses']) && is_array($data['responses'])) {
        foreach ($data['responses'] as $question_id => $info) {
            if (isset($info['type']) && $info['type'] === 'essay') {
                if (empty($info['response'])) {
                    $data['responses'][$question_id]['response'] = "test";
                }
            }
        }
    }
    
    return $data;
}

// Remove address validation
add_filter( 'woocommerce_validate_postcode', '__return_true' );

// Make address fields less strict
add_filter( 'woocommerce_default_address_fields', 'custom_override_address_fields' );
function custom_override_address_fields( $fields ) {
    // Remove required from some fields
    $fields['address_1']['required'] = false;
    $fields['city']['required'] = false;
    $fields['postcode']['required'] = false;
    
    // Make validation pattern less strict
    $fields['postcode']['validate'] = array();
    
    // Increase max length for address fields
    $fields['address_1']['maxlength'] = 100;
    $fields['address_2']['maxlength'] = 100;
    
    return $fields;
}

// Allow special characters in address fields
add_filter( 'woocommerce_process_myaccount_field_billing_address_1', 'allow_special_chars' );
add_filter( 'woocommerce_process_myaccount_field_billing_address_2', 'allow_special_chars' );
add_filter( 'woocommerce_process_myaccount_field_shipping_address_1', 'allow_special_chars' );
add_filter( 'woocommerce_process_myaccount_field_shipping_address_2', 'allow_special_chars' );

function allow_special_chars( $address ) {
    return strip_tags( $address );
}


?>

