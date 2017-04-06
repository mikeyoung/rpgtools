<?php
/**
 * Libre functions and definitions
 *
 * @package Libre
 */

/* BEGIN MIKE YOUNG FUNCTIONS & CLASSES */
function printFormattedAttribute($label,$value) {
	echo "<div><span class='field-label'>$label:</span> <span class='field-value'>$value</span></div>";
}

function formatMod($theNumber) {
	$statSign = "";
	if ($theNumber > 0) {
		$statSign = "+";
	}
	return $statSign.$theNumber;
}

function getStrHit($ability,$exStr) {
	$stat = 0;

	if ($ability == 1) $stat = -5;
	if ($ability >= 2 && $ability < 4) $stat = -3;
	if ($ability >= 4 && $ability < 6) $stat = -2;
	if ($ability >= 6 && $ability < 8) $stat = -1;
	if ($ability == 17) $stat = 1;
	if ($ability == 18) {
		if ($exStr < 51) $stat = 1;
		if ($exStr >= 51 && $exStr < 99) $stat = 2;
		if ($exStr == 100) $stat = 3;
	}
	if ($ability >= 19 && $ability < 21) $stat = 3;
	if ($ability >= 21 && $ability < 23) $stat = 4;
	if ($ability == 23) $stat = 5;
	if ($ability == 24) $stat = 6;
	if ($ability == 25) $stat = 7;

	return $stat;
}

function printStrHit($ability,$exStr) {
	return 'Hit: '.formatMod(getStrHit($ability,$exStr));
}

function getStrDmg($ability,$exStr) {
	$stat = 0;

	if ($ability == 1) $stat = -4;
	if ($ability == 2) $stat = -2;
	if ($ability >= 3 && $ability < 6) $stat = -1;
	if ($ability >= 16 && $ability < 18) $stat = +1;
	if ($ability == 18 && $exStr == 0) $stat = 2;
	if ($ability == 18 && $exStr > 0) {
		if ($exStr < 76) $stat = 3;
		if ($exStr >= 76 && $exStr < 91) $stat = 4;
		if ($exStr >= 91 && $exStr < 100) $stat = 5;
		if ($exStr == 100) $stat = 6;
	}
	if ($ability == 19) $stat = 7;
	if ($ability == 20) $stat = 8;
	if ($ability == 21) $stat = 9;
	if ($ability == 22) $stat = 10;
	if ($ability == 23) $stat = 11;
	if ($ability == 24) $stat = 12;
	if ($ability == 25) $stat = 14;

	return $stat;
}

function printStrDmg($ability,$exStr) {
	return 'Dmg: '.formatMod(getStrDmg($ability,$exStr));
}

function printStrDoors($ability,$exStr) {
	$stat = '1';

	if ($ability == 3) $stat = '2';
	if ($ability >= 4 && $ability < 6) $stat = '3';
	if ($ability >= 6 && $ability < 8) $stat = '4';
	if ($ability >= 8 && $ability < 10) $stat = '5';
	if ($ability >= 10 && $ability < 12) $stat = '6';
	if ($ability >= 12 && $ability < 14) $stat = '7';
	if ($ability >= 14 && $ability < 16) $stat = '8';
	if ($ability == 16) $stat = '9';
	if ($ability == 17) $stat = '10';
	if ($ability == 18 && $exStr == 0) $stat = '11';
	if ($ability == 18 && $exStr > 0) {
		if ($exStr < 51) $stat = '12';
		if ($exStr >= 51 && $exStr < 76) $stat = '13';
		if ($exStr >= 76 && $exStr < 91) $stat = '14';
		if ($exStr >= 91 && $exStr < 100) $stat = '15(3)';
		if ($exStr == 100) $stat = '16(6)';
	}
	if ($ability == 19) $stat = '16(8)';
	if ($ability == 20) $stat = '17(10)';
	if ($ability == 21) $stat = '17(12)';
	if ($ability == 22) $stat = '18(14)';
	if ($ability == 23) $stat = '18(16)';
	if ($ability == 24) $stat = '19(17)';
	if ($ability == 25) $stat = '19(18)';

	return 'Doors:'.$stat;
}

function printStrBarsGates($ability,$exStr) {
	$stat = 0;

	if ($ability >= 8 && $ability < 10) $stat = 1;
	if ($ability >= 10 && $ability < 12) $stat = 2;
	if ($ability >= 12 && $ability < 14) $stat = 4;
	if ($ability >= 14 && $ability < 16) $stat = 7;
	if ($ability == 16) $stat = 10;
	if ($ability == 17) $stat = 13;
	if ($ability == 18 && $exStr == 0) $stat = 16;
	if ($ability == 18 && $exStr > 0) {
		if ($exStr < 51) $stat = 20;
		if ($exStr >= 51 && $exStr < 76) $stat = 25;
		if ($exStr >= 76 && $exStr < 90) $stat = 30;
		if ($exStr >= 91 && $exStr < 100) $stat = 35;
		if ($exStr == 100) $stat = 40;
	}
	if ($ability == 19) $stat = 50;
	if ($ability == 20) $stat = 60;
	if ($ability == 21) $stat = 70;
	if ($ability == 22) $stat = 80;
	if ($ability == 23) $stat = 90;
	if ($ability == 24) $stat = 95;
	if ($ability == 25) $stat = 99;

	return 'Bars/Gates: '.$stat.'%';
}

function getDexMissileAttack($ability) {
	$stat = 0;

	if ($ability == 1) $stat = -6;
	if ($ability == 2) $stat = -4;
	if ($ability == 3) $stat = -3;
	if ($ability == 4) $stat = -2;
	if ($ability == 5) $stat = -1;
	if ($ability == 16) $stat = 1;
	if ($ability >= 17 && $ability < 19) $stat = 2;
	if ($ability >= 19 && $ability < 21) $stat = 3;
	if ($ability >= 22 && $ability < 24) $stat = 4;
	if ($ability >= 24) $stat = 5;

	return $stat;
}

function printDexMissileAttack($ability) {
	return 'Missile Attack Adj: '.formatMod(getDexMissileAttack($ability));
}

function getDexDefAdj($ability) {
	$stat = 0;

	if ($ability >= 1 && $ability < 3) $stat = 5;
	if ($ability == 3) $stat = 4;
	if ($ability == 4) $stat = 3;
	if ($ability == 5) $stat = 2;
	if ($ability == 6) $stat = 1;
	if ($ability == 15) $stat = -1;
	if ($ability == 16) $stat = -2;
	if ($ability == 17) $stat = -3;
	if ($ability >= 18 && $ability < 21) $stat = -4;
	if ($ability >= 21 && $ability < 24) $stat = -5;
	if ($ability >= 24) $stat = -6;

	return $stat;
}

function printDexDefAdj($ability) {
	return 'Defensive Adj: '.formatMod(getDexDefAdj($ability));
}

function printConPoisonAdj($ability) {
	$stat = 0;

	if ($ability == 1) $stat = -2;
	if ($ability == 1) $stat = -1;
	if ($ability >= 19 && $ability < 21) $stat = 1;
	if ($ability >= 21 && $ability < 23) $stat = 2;
	if ($ability >= 23 && $ability < 25) $stat = 3;
	if ($ability == 25) $stat = 4;

	return 'Poison Save Adj: '.formatMod($stat);
}

function printIntMaxSpellLevel($ability) {
	$stat = '--';

	if ($ability == 9) $stat = '4th';
	if ($ability >= 10 && $ability < 12) $stat = '5th';
	if ($ability >= 12 && $ability < 14) $stat = '6th';
	if ($ability >= 14 && $ability < 16) $stat = '7th';
	if ($ability >= 16 && $ability < 18) $stat = '8th';
	if ($ability >= 18) $stat = '9th';

	return 'Max Spell Level: '.$stat;
}

function printWisMagDefAdj($ability) {
	$stat = 0;

	if ($ability == 1) $stat = -6;
	if ($ability == 2) $stat = -4;
	if ($ability == 3) $stat = -3;
	if ($ability == 4) $stat = -2;
	if ($ability >= 5 && $ability < 8) $stat = -1;
	if ($ability == 15) $stat = 1;
	if ($ability == 16) $stat = 2;
	if ($ability == 17) $stat = 3;
	if ($ability >= 18) $stat = 4;

	return 'Mag. Def. Adj: '.formatMod($stat);
}

function getWeaponsArray() {
	$weaponsArray = [];

	array_push($weaponsArray, array(
		"name" => "Arquebus",
		"size" => "M",
		"type" => "P",
		"speed" => 15,
		"damageSM" => "1d10",
		"damageL" => "1d10",
		"rof" => "1/3",
		"rangeS" => "50",
		"rangeM" => "150",
		"rangeL" => "210",
	));

	array_push($weaponsArray, array(
		"name" => "Battle Axe",
		"size" => "M",
		"type" => "S",
		"speed" => 7,
		"damageSM" => "1d8",
		"damageL" => "1d8",
		"rof" => "n/a",
		"rangeS" => "n/a",
		"rangeM" => "n/a",
		"rangeL" => "n/a",
	));

	array_push($weaponsArray, array(
		"name" => "Blowgun w/ Barbed Dart",
		"size" => "S",
		"type" => "P",
		"speed" => 5,
		"damageSM" => "1d3",
		"damageL" => "1d2",
		"rof" => "2/1",
		"rangeS" => "10",
		"rangeM" => "20",
		"rangeL" => "30",
	));

	array_push($weaponsArray, array(
		"name" => "Blowgun w/ Needle",
		"size" => "S",
		"type" => "P",
		"speed" => 5,
		"damageSM" => "1",
		"damageL" => "1",
		"rof" => "2/1",
		"rangeS" => "10",
		"rangeM" => "20",
		"rangeL" => "30",
	));

	array_push($weaponsArray, array(
		"name" => "Short Bow w/ Sheaf Arrow",
		"size" => "M",
		"type" => "P",
		"speed" => 7,
		"damageSM" => "1d8",
		"damageL" => "1d8",
		"rof" => "2/1",
		"rangeS" => "50",
		"rangeM" => "100",
		"rangeL" => "150",
	));

	array_push($weaponsArray, array(
		"name" => "Long Bow w/ Sheaf Arrow",
		"size" => "L",
		"type" => "P",
		"speed" => 8,
		"damageSM" => "1d8",
		"damageL" => "1d8",
		"rof" => "2/1",
		"rangeS" => "50",
		"rangeM" => "100",
		"rangeL" => "170",
	));

	array_push($weaponsArray, array(
		"name" => "Long Bow w/ Flight Arrow",
		"size" => "L",
		"type" => "P",
		"speed" => 8,
		"damageSM" => "1d6",
		"damageL" => "1d6",
		"rof" => "2/1",
		"rangeS" => "70",
		"rangeM" => "140",
		"rangeL" => "210",
	));

	array_push($weaponsArray, array(
		"name" => "Composite Short Bow w/ Sheaf Arrow",
		"size" => "M",
		"type" => "P",
		"speed" => 6,
		"damageSM" => "1d8",
		"damageL" => "1d8",
		"rof" => "2/1",
		"rangeS" => "50",
		"rangeM" => "100",
		"rangeL" => "180",
	));

	array_push($weaponsArray, array(
		"name" => "Composite Long Bow w/ Sheaf Arrow",
		"size" => "L",
		"type" => "P",
		"speed" => 7,
		"damageSM" => "1d8",
		"damageL" => "1d8",
		"rof" => "2/1",
		"rangeS" => "40",
		"rangeM" => "80",
		"rangeL" => "170",
	));

	array_push($weaponsArray, array(
		"name" => "Composite Long Bow w/ Flight Arrow",
		"size" => "L",
		"type" => "P",
		"speed" => 7,
		"damageSM" => "1d6",
		"damageL" => "1d6",
		"rof" => "2/1",
		"rangeS" => "60",
		"rangeM" => "120",
		"rangeL" => "210",
	));

	array_push($weaponsArray, array(
		"name" => "Club",
		"size" => "M",
		"type" => "B",
		"speed" => 4,
		"damageSM" => "1d6",
		"damageL" => "1d3",
		"rof" => "n/a",
		"rangeS" => "n/a",
		"rangeM" => "n/a",
		"rangeL" => "n/a",
	));

	array_push($weaponsArray, array(
		"name" => "Hand Crossbow",
		"size" => "S",
		"type" => "P",
		"speed" => 5,
		"damageSM" => "1d3",
		"damageL" => "1d2",
		"rof" => "1",
		"rangeS" => "20",
		"rangeM" => "40",
		"rangeL" => "60",
	));

	array_push($weaponsArray, array(
		"name" => "Light Crossbow",
		"size" => "M",
		"type" => "P",
		"speed" => 7,
		"damageSM" => "1d4",
		"damageL" => "1d4",
		"rof" => "1",
		"rangeS" => "60",
		"rangeM" => "120",
		"rangeL" => "180",
	));

	array_push($weaponsArray, array(
		"name" => "Heavy Crossbow",
		"size" => "M",
		"type" => "P",
		"speed" => 10,
		"damageSM" => "1d4+1",
		"damageL" => "1d6+1",
		"rof" => "1/2",
		"rangeS" => "80",
		"rangeM" => "160",
		"rangeL" => "240",
	));

	array_push($weaponsArray, array(
		"name" => "Dagger",
		"size" => "S",
		"type" => "P",
		"speed" => 2,
		"damageSM" => "1d4",
		"damageL" => "1d3",
		"rof" => "n/a",
		"rangeS" => "n/a",
		"rangeM" => "n/a",
		"rangeL" => "n/a",
	));

	array_push($weaponsArray, array(
		"name" => "Dirk",
		"size" => "S",
		"type" => "P",
		"speed" => 2,
		"damageSM" => "1d4",
		"damageL" => "1d3",
		"rof" => "n/a",
		"rangeS" => "n/a",
		"rangeM" => "n/a",
		"rangeL" => "n/a",
	));

	array_push($weaponsArray, array(
		"name" => "Dart",
		"size" => "S",
		"type" => "P",
		"speed" => 2,
		"damageSM" => "1d3",
		"damageL" => "1d2",
		"rof" => "3/1",
		"rangeS" => "10",
		"rangeM" => "20",
		"rangeL" => "40",
	));

	array_push($weaponsArray, array(
		"name" => "Footman's Flail",
		"size" => "M",
		"type" => "B",
		"speed" => 7,
		"damageSM" => "1d6+1",
		"damageL" => "2d4",
		"rof" => "n/a",
		"rangeS" => "n/a",
		"rangeM" => "n/a",
		"rangeL" => "n/a",
	));


	return $weaponsArray;
}
/* END MIKE YOUNG FUNCTIONS & CLASSES */

if ( ! function_exists( 'libre_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function libre_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Libre, use a find and replace
	 * to change 'libre' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'libre', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	
	/* Add support for editor styles */	
	add_editor_style( array( 'editor-style.css', libre_fonts_url() ) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'libre' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'libre_custom_background_args', array(
		'default-color' => 'ffffff',
	) ) );
}
endif; // libre_setup
add_action( 'after_setup_theme', 'libre_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function libre_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'libre_content_width', 739 );
}
add_action( 'after_setup_theme', 'libre_content_width', 0 );

/*
 * Adjust $content_width for full-width page template
 */

if ( ! function_exists( 'libre_content_width' ) ) :

function libre_content_width() {
     global $content_width;

     if ( is_page_template( 'fullwidth-page.php' ) ) {
          $content_width = 1088; //pixels
     }
}
add_action( 'template_redirect', 'libre_content_width' );

endif; // if ! function_exists( 'libre_content_width' )

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function libre_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'libre' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widgets 1', 'libre' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widgets 2', 'libre' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widgets 3', 'libre' ),
		'id'            => 'footer-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'libre_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function libre_scripts() {
	wp_enqueue_style( 'libre-style', get_stylesheet_uri() );

	wp_enqueue_style( 'libre-libre', libre_fonts_url(), array(), null );

	wp_enqueue_script( 'libre-script', get_template_directory_uri() . '/js/libre.js', array( 'jquery' ), '20150623', true );

	/* BEGIN MIKE YOUNG MODIFED CODE */
	wp_enqueue_style( 'style-mikeyoung-org', get_template_directory_uri() . '/mikeyoung.org/css/style.v1.css',array( 'libre-style' ));
	wp_enqueue_script( 'vuejs-mikeyoung-org', get_template_directory_uri() . '/mikeyoung.org/js/vue.v2.2.1.min.js');
	wp_enqueue_script( 'main-mikeyoung-org', get_template_directory_uri() . '/mikeyoung.org/js/main.v1.js', array( 'vuejs-mikeyoung-org' ));
	/* END MIKE YOUNG MODIFED CODE */


	$adminbar = is_admin_bar_showing();
	wp_localize_script( 'libre-script', 'libreadminbar', array( $adminbar ) );

	wp_enqueue_script( 'libre-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'libre-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'libre_scripts' );

/**
 * Register Google Fonts
 */
function libre_fonts_url() {
    $fonts_url = '';

    /* Translators: If there are characters in your language that are not
	 * supported by Libre Baskerville, translate this to 'off'. Do not translate
	 * into your own language.
	 */

	/*
	$libre = esc_html_x( 'on', 'Libre Baskerville font: on or off', 'libre' );

	if ( 'off' !== $libre ) {
		$font_families = array();
		$font_families[] = 'Libre Baskerville:400,400italic,700';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}
	*/

	return 'https://fonts.googleapis.com/css?family=Almendra:400,400i,700,700i';

}

/**
 * Enqueue Google Fonts for custom headers
 */
function libre_admin_scripts( $hook_suffix ) {

	wp_enqueue_style( 'libre-libre', libre_fonts_url(), array(), null );

}
add_action( 'admin_print_styles-appearance_page_custom-header', 'libre_admin_scripts' );

/*
 * Filters the Categories archive widget to add a span around the post count
 */

function libre_cat_count_span( $links ) {
	$links = str_replace( '</a> (', '</a><span class="post-count">(', $links );
	$links = str_replace( ')', ')</span>', $links );
	return $links;
}
add_filter( 'wp_list_categories', 'libre_cat_count_span' );

/*
 * Add a span around the post count in the Archives widget
 */

function libre_archive_count_span( $links ) {
  $links = str_replace( '</a>&nbsp;(', '</a><span class="post-count">(', $links );
  $links = str_replace( ')', ')</span>', $links );
  return $links;
}
add_filter( 'get_archives_link', 'libre_archive_count_span' );

if ( ! function_exists( 'libre_continue_reading_link' ) ) :
/**
 * Returns an ellipsis and "Continue reading" plus off-screen title link for excerpts
 */
function libre_continue_reading_link() {
	return '&hellip; <a class="more-link" href="'. esc_url( get_permalink() ) . '">' . sprintf( wp_kses_post( __( 'Continue reading <span class="screen-reader-text">%1$s</span> <span class="meta-nav" aria-hidden="true">&rarr;</span>', 'libre' ) ), esc_attr( strip_tags( get_the_title() ) ) ) . '</a>';
}
endif; // libre_continue_reading_link


/**
 * Replaces "[...]" (appended to automatically generated excerpts) with libre_continue_reading_link().
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 */
function libre_auto_excerpt_more( $more ) {
	return libre_continue_reading_link();
}
add_filter( 'excerpt_more', 'libre_auto_excerpt_more' );


/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 *
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 */
function libre_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= libre_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'libre_custom_excerpt_more' );

/*
 * Custom comments display to move Reply link,
 * used in comments.php
 */
function libre_comments( $comment, $args, $depth ) {
?>
		<li id="comment-<?php comment_ID(); ?>" <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?>>
			<article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
				<footer class="comment-meta">
					<div class="comment-metadata">
						<span class="comment-author vcard">
							<?php if ( 0 != $args['avatar_size'] ) echo get_avatar( $comment, $args['avatar_size'] ); ?>

							<?php printf( '<b class="fn">%s</b>', get_comment_author_link() ); ?>
						</span>
						<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID, $args ) ); ?>">
							<time datetime="<?php comment_time( 'c' ); ?>">
								<?php printf( '<span class="comment-date">%1$s</span><span class="comment-time screen-reader-text">%2$s</span>', get_comment_date(), get_comment_time() ); ?>
							</time>
						</a>
						<?php
						comment_reply_link( array_merge( $args, array(
							'add_below' => 'div-comment',
							'depth'     => $depth,
							'max_depth' => $args['max_depth'],
							'before'    => '<span class="reply">',
							'after'     => '</span>'
						) ) );
						?>
						<?php edit_comment_link( esc_html__( 'Edit', 'libre' ), '<span class="edit-link">', '</span>' ); ?>

					</div><!-- .comment-metadata -->

					<?php if ( '0' == $comment->comment_approved ) : ?>
					<p class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'libre' ); ?></p>
					<?php endif; ?>
				</footer><!-- .comment-meta -->

				<div class="comment-content">
					<?php comment_text(); ?>
				</div><!-- .comment-content -->

			</article><!-- .comment-body -->
<?php
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
