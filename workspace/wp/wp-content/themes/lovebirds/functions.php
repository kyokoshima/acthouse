<?php
/*
 * @package Lovebirds
 */


/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 642; /* pixels */

/**
 * Setup Lovebirds' textdomain.
 *
 * Declare textdomain for this child theme.
 * Translations can be filed in the /languages/ directory.
 */
function lovebirds_setup() {
	load_child_theme_textdomain( 'lovebirds', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'lovebirds_setup' );

/**
 * Define theme colors
 */
if ( ! isset( $themecolors ) ) {
	$themecolors = array(
		'bg'     => 'f8f4ee',
		'text'   => '333333',
		'link'   => '462917',
		'border' => '462917',
		'url'    => '462917',
	);
}

/**
 * Disable Forever's theme options
 */
add_filter( 'forever-enable-theme-options', '__return_false' );

/**
 * Enqueue Google Fonts and small menu
 */
function lovebirds_scripts() {

	wp_enqueue_style( 'lovebirds-niconne',  "https://fonts.googleapis.com/css?family=Niconne" );
	wp_enqueue_style( 'lovebirds-lusitana', "https://fonts.googleapis.com/css?family=Lusitana:400,700" );
	wp_enqueue_script( 'lovebirds-small-menu', get_stylesheet_directory_uri() . '/js/small-menu.js', array( 'jquery' ), '20120206' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
}
add_action( 'wp_enqueue_scripts', 'lovebirds_scripts' );


/**
 * Enqueue Google Fonts in admin
 */
function lovebirds_admin_scripts( $hook_suffix ) {

	if ( 'appearance_page_custom-header' != $hook_suffix )
		return;

	wp_enqueue_style( 'lovebirds-niconne',  "https://fonts.googleapis.com/css?family=Niconne" );
	wp_enqueue_style( 'lovebirds-lusitana', "https://fonts.googleapis.com/css?family=Lusitana:400,700" );

}
add_action( 'admin_enqueue_scripts', 'lovebirds_admin_scripts' );

/**
 * Change default custom background image and color
 */
function lovebirds_custom_background_args( $args ) {

	$args = array(
		'default-color' => 'f8f4ee',
		'default-image' => get_stylesheet_directory_uri() . '/img/background.png',
	);
	return $args;

}
add_filter( 'forever_custom_background_args', 'lovebirds_custom_background_args', 999 );


/**
 * Change default custom header image, color, and size
 */
function lovebirds_custom_header_args( $args ) {

	$args = array(
		'default-image'          => get_stylesheet_directory_uri() . '/img/lovebirds-2x.png',
		'default-text-color'     => 'e55564',
		'width'                  => 250,
		'height'                 => 290,
		'random-default'         => false,
		'wp-head-callback'       => 'lovebirds_header_style',
		'admin-head-callback'    => 'lovebirds_admin_header_style',
		'admin-preview-callback' => 'lovebirds_admin_header_image',
	);
	return $args;

}
add_filter( 'forever_custom_header_args', 'lovebirds_custom_header_args', 999 );


/**
 * Change how custom header is displayed in admin
 */

if ( ! function_exists( 'lovebirds_admin_header_style' ) ) :
/**
 * Custom styles for the custom header page in the admin
 */
function lovebirds_admin_header_style() {
	$header_textcolor = get_header_textcolor();
?>
	<style type="text/css">
	#headimg {
		background: url('<?php echo get_stylesheet_directory_uri(); ?>/img/background.png') #f5f0eb;
		max-width: 250px;
		padding: 30px;
		text-align: center;
		width: 250px;
	}
	#headimg .masthead {
	}
	.appearance_page_custom-header #headimg {
		border: none;
	}
	#headimg h1 {
		font-family: Niconne, script;
		font-size: 48px;
		font-weight: normal;
		line-height: 90%;
		margin: 15px 0;
		text-align: center;
	}
	#headimg h1 a {
		color: #e55564;
		text-decoration: none;
	}
	#headimg h1 a:hover,
	#headimg h1 a:focus,
	#headimg h1 a:active {
	}
	#headimg #desc {
		color: #462917;
		font-family: Lusitana, "Times New Roman", serif;
		font-size: 16px;
		margin: 10px 0;
		text-align: center;
	}
	#headimg img {
		display: block;
		margin: 0 auto;
		max-width: 250px;
	}
	<?php
		// If the user has set a custom color for the text use that
		if ( $header_textcolor != HEADER_TEXTCOLOR ) :
	?>
		#headimg h1 a {
			color: #<?php echo $header_textcolor; ?>;
		}
	<?php endif; ?>
	<?php
		// Has the text been hidden?
		if ( 'blank' == $header_textcolor ) :
	?>
	#headimg .masthead {
		display: none;
	}
	<?php endif; ?>
	</style>
<?php
}
endif; // lovebirds_admin_header_style

if ( ! function_exists( 'lovebirds_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see lovebirds_custom_header_setup().
 *
 * @since _s 1.0
 */
function lovebirds_header_style() {
	$header_textcolor = get_header_textcolor();

	// If no custom options for text are set, let's bail
	// get_header_textcolor() options: HEADER_TEXTCOLOR is default, hide text (returns 'blank') or any hex value
	if ( HEADER_TEXTCOLOR == $header_textcolor )
		return;
	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( 'blank' == $header_textcolor ) :
	?>
		.site-title,
		.site-description {
			position: absolute !important;
			clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that
		else :
	?>
		.site-title a,
		.site-description {
			color: #<?php echo $header_textcolor; ?> !important;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif; // lovebirds_header_style

if ( ! function_exists( 'lovebirds_admin_header_image' ) ) :
/**
 * Custom markup for the custom header admin page
 */
function lovebirds_admin_header_image() {
	$header_textcolor = get_theme_mod( 'header_textcolor', HEADER_TEXTCOLOR );
	$header_image     = get_header_image();
?>
	<div id="headimg">
		<?php if ( ! empty( $header_image ) ) : ?>
		<img src="<?php echo esc_url( $header_image ); ?>" alt="" />
		<?php endif;

		if ( 'blank' == $header_textcolor || '' == $header_textcolor )
			$style = ' style="display:none;"';
		else
			$style = ' style="color:#' . $header_textcolor . ';"';
		?>
		<div class="masthead">
			<h1><a id="name" onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			<div id="desc"<?php echo $style; ?>><?php bloginfo( 'description' ); ?></div>
		</div>
	</div>
<?php }
endif; // lovebirds_admin_header_image

/**
 * Deregister footer sidebars
 */


function lovebirds_remove_sidebars() {
	unregister_sidebar( 'sidebar-2' );
	unregister_sidebar( 'sidebar-3' );
	unregister_sidebar( 'sidebar-4' );
	unregister_sidebar( 'sidebar-5' );
}
add_action( 'widgets_init', 'lovebirds_remove_sidebars', 11 );


/**
 * Infinite Scroll Theme Assets
 *
 * Register support for @Lovebirds and enqueue relevant styles.
 */

/**
 * Add theme support for infinity scroll
 *
 * @uses add_theme_support
 * @uses is_active_sidebar
 * @uses jetpack_is_mobile
 * @action after_setup_theme
 * @return null
 */
function lovebirds_infinite_scroll_init() {
	if ( function_exists( 'jetpack_is_mobile' ) ) {
		$footerwidgets = ( is_active_sidebar( 'sidebar-1' ) && jetpack_is_mobile() );
	} else {
		$footerwidgets = is_active_sidebar( 'sidebar-1' );
	}

	add_theme_support( 'infinite-scroll', array(
		'container'      => 'content',
		'footer_widgets' => $footerwidgets,
	) );
}
add_action( 'after_setup_theme', 'lovebirds_infinite_scroll_init' );

/**
 * Enqueue CSS stylesheet with theme styles for infinity.
 */
function lovebirds_infinite_scroll_enqueue_styles() {
	// Add theme specific styles.
	wp_enqueue_style( 'infinity-lovebirds', plugins_url( 'lovebirds.css', __FILE__ ), array(), '20120806' );
}
add_action( 'wp_enqueue_scripts', 'lovebirds_infinite_scroll_enqueue_styles', 25 );
