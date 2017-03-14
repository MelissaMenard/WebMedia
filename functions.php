<?php
/**
 * SKT Black functions and definitions
 *
 * @package SKT Black
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
function content($limit) {
$content = explode(' ', get_the_excerpt(), $limit);
if (count($content)>=$limit) {
array_pop($content);
$content = implode(" ",$content).'...';
} else {
$content = implode(" ",$content);
}	
$content = preg_replace('/\[.+\]/','', $content);
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
return $content;
}



function custom_excerpt_length( $length ) {
	return 100;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

if ( ! function_exists( 'skt_black_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function skt_black_setup() {

	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

	load_theme_textdomain( 'skt-black', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_image_size('homepage-thumb',240,145,true);
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'skt-black' ),
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => '000000'
	) );
	add_editor_style( 'editor-style.css' );
}
endif; // skt_black_setup
add_action( 'after_setup_theme', 'skt_black_setup' );


function skt_black_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'skt-black' ),
		'description'   => __( 'Appears on blog page sidebar', 'skt-black' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'skt-black' ),
		'description'   => __( 'Appears on page', 'skt-black' ),
		'id'            => 'sidebar-main',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 1', 'skt-black' ),
		'description'   => __( 'Appears on footer', 'skt-black' ),
		'id'            => 'sidebar-2',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 2', 'skt-black' ),
		'description'   => __( 'Appears on footer', 'skt-black' ),
		'id'            => 'sidebar-3',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 3', 'skt-black' ),
		'description'   => __( 'Appears on footer', 'skt-black' ),
		'id'            => 'sidebar-4',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'skt_black_widgets_init' );

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once get_template_directory() . '/inc/options-framework.php';

// Loads options.php from child or parent theme
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );


function skt_black_scripts() {
	wp_enqueue_style( 'skt_black-gfonts-opensans', '//fonts.googleapis.com/css?family=Open+Sans:400,600,700' );
	wp_enqueue_style( 'skt_black-gfonts-roboto', '//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' );
	wp_enqueue_style( 'skt_black-gfonts-lobster', '//fonts.googleapis.com/css?family=Lobster' );
	wp_enqueue_style( 'skt_black-gfonts-opensanscondensed', '//fonts.googleapis.com/css?family=Open+Sans+Condensed:300' );
	wp_enqueue_style( 'skt_black-gfonts-lato', '//fonts.googleapis.com/css?family=Lato:400,900,400italic,700,300italic,300,700italic' );

	if( of_get_option('bodyfontface',true) != '' ){
		wp_enqueue_style( 'skt_black-gfonts-body', '//fonts.googleapis.com/css?family='.rawurlencode(of_get_option('bodyfontface',true)).'&subset=cyrillic,arabic,bengali,cyrillic,cyrillic-ext,devanagari,greek,greek-ext,gujarati,hebrew,latin-ext,tamil,telugu,thai,vietnamese,latin' );
	}
	if( of_get_option('logofontface',true) != '' ){
		wp_enqueue_style( 'skt_black-gfonts-logo', '//fonts.googleapis.com/css?family='.rawurlencode(of_get_option('logofontface',true)).'&subset=cyrillic,arabic,bengali,cyrillic,cyrillic-ext,devanagari,greek,greek-ext,gujarati,hebrew,latin-ext,tamil,telugu,thai,vietnamese,latin' );
	}
	if ( of_get_option('navfontface', true) != '' ) {
		wp_enqueue_style( 'skt_black-gfonts-nav', '//fonts.googleapis.com/css?family='.rawurlencode(of_get_option('navfontface',true)).'&subset=cyrillic,arabic,bengali,cyrillic,cyrillic-ext,devanagari,greek,greek-ext,gujarati,hebrew,latin-ext,tamil,telugu,thai,vietnamese,latin' );
	}
	if ( of_get_option('headfontface', true) != '' ) {
		wp_enqueue_style( 'skt_black-gfonts-heading', '//fonts.googleapis.com/css?family='.rawurlencode(of_get_option('headfontface',true)).'&subset=cyrillic,arabic,bengali,cyrillic,cyrillic-ext,devanagari,greek,greek-ext,gujarati,hebrew,latin-ext,tamil,telugu,thai,vietnamese,latin' );
	}
	if ( of_get_option('sldfontface', true) != '' ) {
		wp_enqueue_style( 'skt_black-gfonts-slide', '//fonts.googleapis.com/css?family='.rawurlencode(of_get_option('sldfontface',true)).'&subset=cyrillic,arabic,bengali,cyrillic,cyrillic-ext,devanagari,greek,greek-ext,gujarati,hebrew,latin-ext,tamil,telugu,thai,vietnamese,latin' );
	}
	if ( of_get_option('slddscfontface', true) != '' ) {
		wp_enqueue_style( 'skt_black-gfonts-slidedsc', '//fonts.googleapis.com/css?family='.rawurlencode(of_get_option('slddscfontface',true)).'&subset=cyrillic,arabic,bengali,cyrillic,cyrillic-ext,devanagari,greek,greek-ext,gujarati,hebrew,latin-ext,tamil,telugu,thai,vietnamese,latin' );
	}
	if ( of_get_option('foottitlefontface', true) != '' ) {
		wp_enqueue_style( 'skt_black-gfonts-foottitle', '//fonts.googleapis.com/css?family='.rawurlencode(of_get_option('foottitlefontface',true)).'&subset=cyrillic,arabic,bengali,cyrillic,cyrillic-ext,devanagari,greek,greek-ext,gujarati,hebrew,latin-ext,tamil,telugu,thai,vietnamese,latin' );
	}
	if ( of_get_option('copyfontface', true) != '' ) {
		wp_enqueue_style( 'skt_black-gfonts-copyfont', '//fonts.googleapis.com/css?family='.rawurlencode(of_get_option('copyfontface',true)).'&subset=cyrillic,arabic,bengali,cyrillic,cyrillic-ext,devanagari,greek,greek-ext,gujarati,hebrew,latin-ext,tamil,telugu,thai,vietnamese,latin' );
	}
	if ( of_get_option('designfontface', true) != '' ) {
		wp_enqueue_style( 'skt_black-gfonts-designfont', '//fonts.googleapis.com/css?family='.rawurlencode(of_get_option('designfontface',true)).'&subset=cyrillic,arabic,bengali,cyrillic,cyrillic-ext,devanagari,greek,greek-ext,gujarati,hebrew,latin-ext,tamil,telugu,thai,vietnamese,latin' );
	}

	wp_enqueue_style( 'skt_black-basic-style', get_stylesheet_uri() );
	wp_enqueue_style( 'skt_black-editor-style', get_template_directory_uri().'/editor-style.css' );
	wp_enqueue_style( 'skt_black-base-style', get_template_directory_uri().'/css/style_base.css' );
	wp_enqueue_style( 'skt_black-responsive-style', get_template_directory_uri().'/css/theme-responsive.css' );	
	if ( is_home() || is_front_page() ) { 
		wp_enqueue_script( 'skt_black-nivo-slider', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery') );
		wp_enqueue_style( 'skt_black-nivo-style', get_template_directory_uri().'/css/nivo-slider.css' );
	}
	wp_enqueue_style( 'skt_black-prettyphoto-style', get_template_directory_uri().'/css/prettyPhoto.css' );
	wp_enqueue_script( 'skt_black-prettyphoto-script', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array('jquery') );
	wp_enqueue_script( 'skt_black-customscripts', get_template_directory_uri() . '/js/custom.js', array('jquery') );	
	wp_enqueue_script( 'skt_black-filter-scripts', get_template_directory_uri().'/js/filter-gallery.js' );

	wp_enqueue_style( 'skt_black-fontawesome-style', get_template_directory_uri().'/css/font-awesome.css','',null );
	wp_enqueue_style( 'skt_black-animation-style', get_template_directory_uri().'/css/animation.css' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'skt_black_scripts' );


function media_css_hook(){
	
	?>
    	
    	<script>
			jQuery(window).bind('scroll', function() {
	var wwd = jQuery(window).width();
	if( wwd > 939 ){
		var navHeight = jQuery( window ).height() - 0;
		<?php if( of_get_option('headstick',true) != true) { ?>
		if (jQuery(window).scrollTop() > navHeight) {
			jQuery('.header').addClass('fixed');
		}else {
			jQuery('.header').removeClass('fixed');
		}
		<?php } ?>
	}
});
			jQuery(window).load(function() {
        jQuery('#slider').nivoSlider({
        	effect:'<?php echo of_get_option('slideefect',true); ?>', //sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft, fold, fade, random, slideInRight, slideInLeft, boxRandom, boxRain, boxRainReverse, boxRainGrow, boxRainGrowReverse
		  	animSpeed: <?php echo of_get_option('slideanim',true); ?>,
			pauseTime: <?php echo of_get_option('slidepause',true); ?>,
			directionNav: <?php echo of_get_option('slidenav',true); ?>,
			controlNav: <?php echo of_get_option('slidepage',true); ?>,
			pauseOnHover: <?php echo of_get_option('slidepausehover',true); ?>,
    });
});
		</script>
    <?php
		
	}
add_action('wp_head','media_css_hook');


function skt_black_custom_head_codes() { 
	if ( function_exists('of_get_option') ){
		if ( of_get_option('style2', true) != '' ) {
			echo "<style>". esc_html( of_get_option('style2', true) ) ."</style>";
		}
		echo "<style>";
		if ( of_get_option('bodyfontface', true) != '') {
			echo 'body, .top-grey-box, p, .testimonial-section, .feature-box p, .address, #footer .footer-inner p, .right-features .feature-cell .feature-desc, .price-table{font-family:\''. esc_html( of_get_option('bodyfontface', true) ) .'\', sans-serif;}';
		}
		if ( of_get_option('bodyfontcolor', true) != '' ) {
			echo 'body, .contact-form-section .address, .newsletter, .top-grey-box, .testimonial-section .testimonial-box .testimonial-content .testimonial-mid, .right-features .feature-cell, .accordion-box .acc-content, .work-box .work-info, .feature-box{color:'. esc_html( of_get_option('bodyfontcolor', true) ) .';}';
		}
		if( of_get_option('bodyfontsize',true) != ''){
			echo "body{font-size:".of_get_option('bodyfontsize',true)."}";
		}
		if( of_get_option('logofontface',true) != '' || of_get_option('logofontcolor',true) != '' || of_get_option('logofontsize',true) != ''){
			echo ".header .header-inner .logo h1, .logo a{font-family:".of_get_option('logofontface').";color:".of_get_option('logofontcolor',true).";font-size:".of_get_option('logofontsize',true)."}";
		}
		if ( of_get_option('navfontface', true) != '' || of_get_option('navfontsize',true) != '' ) {
			echo '.header .header-inner .nav ul{font-family:\''. esc_html( of_get_option('navfontface', true) ) .'\', sans-serif;font-size:'.of_get_option('navfontsize',true).'}';
		}
		if ( of_get_option('navfontcolor', true) != '' ) {
			echo '.header .header-inner .nav ul li a, .header .header-inner .nav ul li ul li a{color:'. esc_html( of_get_option('navfontcolor', true) ) .';}';
		}
		if ( of_get_option('navhovercolor', true) != '' ) {
			echo '.header .header-inner .nav ul li a:hover{color:'. esc_html( of_get_option('navhovercolor', true) ) .';}';
		}
		if( of_get_option('sldfontface',true) != '' || of_get_option('sldtitlecolor') != ''){
			echo "#slider .top-bar h2{font-family:".of_get_option('sldfontface',true).";color:".of_get_option('sldtitlecolor',true)."}";
		}
		if( of_get_option('sldtitlesize',true) != ''){
			echo "#slider .top-bar h2{font-size:".of_get_option('sldtitlesize',true)."}";
		}
		if( of_get_option('slddscfontface',true) != '' || of_get_option('slddsccolor',true) != ''){
			echo "#slider .top-bar p{font-family:".of_get_option('slddscfontface',true).";color:".of_get_option('slddsccolor',true)."}";
		}
		if( of_get_option('slddescsize',true) != '' ){
			echo "#slider .top-bar p{font-size:".of_get_option('slddescsize',true)."}";
		}
		if( of_get_option('sectitlesize',true) != '' ){
			echo "section h2{font-size:".of_get_option('sectitlesize',true)."}";
		}
		if ( of_get_option('headfontface', true) != '' || of_get_option('sectitlecolor',true) != '' ) {
			echo 'h1, h2, h3, h4, h5, h6, section h2, #services-box h2, .contact-banner h3, .news h2, .testimonial-box h2, .team-col h3, .newsletter h2{font-family:\''. esc_html( of_get_option('headfontface', true) ) .'\', sans-serif;color:'.of_get_option('sectitlecolor',true).'}';
		}
		if ( of_get_option('linkcolor', true) != '' ) {
			echo 'a{color:'. esc_html( of_get_option('linkcolor', true) ) .';}';
		}
		if ( of_get_option('linkhovercolor', true) != '' ) {
			echo 'a:hover{color:'. esc_html( of_get_option('linkhovercolor', true) ) .';}';
		}
		if( of_get_option('foottitlefontface', true) != ''){
			echo ".footer .footer-col-1 h2, .footer-col-3 h2{font-family:".of_get_option('foottitlefontface', true)."}";
		}
		if( of_get_option('foottitlecolor', true) != ''){
			echo ".footer .footer-col-1 h2, .footer-col-3 h2{color:".of_get_option('foottitlecolor', true)."}";
		}
		if( of_get_option('copyfontface',true) != '' || of_get_option('copycolor', true) != ''){
			echo ".copyright-txt{font-family:".of_get_option('copyfontface',true).";color:".of_get_option('copycolor',true)."}";
		}
		if( of_get_option('designfontface',true) != '' || of_get_option('designcolor', true) != ''){
			echo ".design-by{font-family:".of_get_option('designfontface',true).";color:".of_get_option('designcolor',true)."}";
		}
		if ( of_get_option('headerbgcolor', true) != '' || of_get_option('headerborder', true) != '' ) {
			echo ".header{background-color:". of_get_option('headerbgcolor', true ) ." ; border-bottom-color:". of_get_option('headerborder', true ) .";}";
		}
		if ( of_get_option('imgbrder', true) != ''  ) {
			echo ".message-thumb{border-color:". of_get_option('imgbrder', true ) ." ;}";
		}
		
		if ( of_get_option('serbgcolor', true) != '' ) {
			echo '#services-box{background-color:'. esc_html( of_get_option('serbgcolor', true) ) .';}';
		}
		if ( of_get_option('serhvbgcolor', true) != '' ) {
			echo '#services-box:hover{background-color:'. esc_html( of_get_option('serhvbgcolor', true) ) .';}';
		}
		if ( of_get_option('ser_rdmore_border', true) != '' ) {
			echo '#services-box .read-more{border-color:'. esc_html( of_get_option('ser_rdmore_border', true) ) .';}';
		}
		
		if ( of_get_option('ser_rdmore_hover', true) != '' || of_get_option('ser_rdmore_fonthover', true) != '' ) {
			echo "#services-box:hover .read-more{background-color:".of_get_option('ser_rdmore_hover', true)."; color:".of_get_option('ser_rdmore_fonthover', true)."; }";
		}
		
		if ( of_get_option('cntbgcolor', true) != '' ) {
			echo '#slider .top-bar a, .contact-banner a, input.search-submit, .post-password-form input[type=submit], .newsletter-form input[type="submit"], #commentform input#submit{background-color:'. esc_html( of_get_option('cntbgcolor', true) ) .';}';
		}
		if ( of_get_option('cnthvbgcolor', true) != '' ) {
			echo '#slider .top-bar a:hover, .contact-banner a:hover, input.search-submit:hover, .post-password-form input[type=submit]:hover, #commentform input#submit:hover{background-color:'. esc_html( of_get_option('cnthvbgcolor', true) ) .';}';
		}
		if ( of_get_option('cntfontcolor', true) != '' ) {
			echo '#slider .top-bar a, .contact-banner a{color:'. esc_html( of_get_option('cntfontcolor', true) ) .';}';
		}
		if( of_get_option('socialcolor',true) != ''){
			echo ".social-icon a{color:".of_get_option('socialcolor',true)."}";
		}
		if( of_get_option('socialbgcolor',true) != ''){
			echo ".social-icon a{background-color:".of_get_option('socialbgcolor',true)."}";
		}
		if( of_get_option('socialbghvcolor',true) != ''){
			echo ".social-icon a:hover{background-color:".of_get_option('socialbghvcolor',true)."}";
		}
		if ( of_get_option('wdgttitleccolor', true) != '' ) {
			echo 'h3.widget-title{color:'. esc_html( of_get_option('wdgttitleccolor', true) ) .';}';
		}
		if ( of_get_option('footerbgcolor', true) != '' ) {
			echo '#footer-wrapper{background-color:'. esc_html( of_get_option('footerbgcolor', true) ) .';}';
		}
		if ( of_get_option('copybgcolor', true) != '' ) {
			echo '.copyright-wrapper{background-color:'. esc_html( of_get_option('copybgcolor', true) ) .';}';
		}
		if( of_get_option('galhvcolor',true) != ''){
			echo ".photobooth .gallery ul li:hover{ background:".of_get_option('galhvcolor',true)."; float:left; background:url(".get_template_directory_uri()."/images/camera-icon.png) 50% 50% no-repeat ".of_get_option('galhvcolor',true)."; }";
		}
		if( of_get_option('sldnavbg',true) != ''){
			echo ".nivo-directionNav a{background:url(".get_template_directory_uri()."/images/slide-nav.png) no-repeat scroll 0 0 ".of_get_option('sldnavbg',true).";}";
		}
		if( of_get_option('sldpagebg',true) != ''){
			echo ".nivo-controlNav a{background-color:".of_get_option('sldpagebg',true)."}";
		}
		if( of_get_option('sldpagehvbg',true) != ''){
			echo ".nivo-controlNav a.active{background-color:".of_get_option('sldpagehvbg',true)."}";
		}
		if( of_get_option('blogpagebg',true) != ''){
			echo ".pagination ul li span, .pagination ul li a{background:".of_get_option('blogpagebg',true)."}";
		}
		if( of_get_option('blogpagehvbg',true) != ''){
			echo ".pagination ul li .current, .pagination ul li a:hover{background:".of_get_option('blogpagehvbg',true)."}";
		}
		if( of_get_option('circlebg',true) != ''){
			echo "#some-facts li{border:2px solid ".of_get_option('circlebg',true)."}";
		}
		if( of_get_option('filterfont',true) != ''){
			echo ".photobooth .filter-gallery ul li a{color:".of_get_option('filterfont',true)."}";
		}
		
		if( of_get_option('filterfontactive',true) != ''){
			echo ".photobooth .filter-gallery ul li a:hover, .photobooth .filter-gallery ul li.current a{color:".of_get_option('filterfontactive',true)."}";
		}
		
		if( of_get_option('newshightxt',true) != ''){
			echo ".newsletter h2 span{color:".of_get_option('newshightxt',true)."}";
		}
		if( of_get_option('footerhightxt',true) != ''){
			echo ".recent-post li span, .phone-no strong, .phone-no a{color:".of_get_option('footerhightxt',true)."}";
		}		
		if ( of_get_option('lnmorebgcolor', true) != ''  ) {
			echo ".more{background-color:". of_get_option('lnmorebgcolor', true ) ." ;}";
		}		
		if ( of_get_option('lnmorebghover', true) != ''  ) {
			echo ".more:hover{background-color:". of_get_option('lnmorebghover', true ) ." ;}";
		}		
		if (of_get_option('newsboxbg', true) != '' || of_get_option('newsboxborder', true) != ''  ) {
			echo ".news-box{ background-color:". of_get_option('newsboxbg', true ) ." ;border-color:".of_get_option('newsboxborder', true )." ;}";
		}		
		if ( of_get_option('tmnboxbg', true) != '' || of_get_option('tmnboxborder', true) != '' ) {
			echo ".testimonial-post{background-color:". of_get_option('tmnboxbg', true ) ." ; border-color:". of_get_option('tmnboxborder', true ) ." ;}";
		}		
		if ( of_get_option('tmnboxbg', true) != '' ) {
			echo ".testimonial-box img{ border-color:".of_get_option('tmnboxbg', true ) ." ;}";
		}
		if ( of_get_option('tmtitleborder', true) != '' ) {
			echo ".testimonial-box h2{ border-bottom-color:".of_get_option('tmtitleborder', true ) ." ;}";
		}
		
		if ( of_get_option('teamtitleborder', true) != '' ) {
			echo ".team-col h3{ border-bottom-color:".of_get_option('teamtitleborder', true ) ." ;}";
		}
		if ( of_get_option('filtergallerybg', true) != ''  ) {
			echo ".photobooth .filter-gallery ul{background-color:". of_get_option('filtergallerybg', true ) ." ;}";
		}
		
		if ( of_get_option('newsletterbg', true) != '' || of_get_option('newsletterborder', true) != ''  ) {
			echo ".signup-newsletter{background-color:". of_get_option('newsletterbg', true ) ." ; border-color:". of_get_option('newsletterborder', true ) ." ;}";
		}
		
		if ( of_get_option('inputfieldbg', true) != '' || of_get_option('inputfieldborder', true) != ''  ) {
			echo ".newsletter-form input[type=text], .newsletter-form input[type=email]{background-color:". of_get_option('inputfieldbg', true ) ." ; border-color:". of_get_option('inputfieldborder', true ) ." ;}";
		}
		
		if ( of_get_option('logoheight', true) != '' ) {
			echo ".header .header-inner .logo img{height:".of_get_option('logoheight', true )."px ;}";
		}
		
		echo "</style>";
	}
}
add_action('wp_head', 'skt_black_custom_head_codes');


function skt_black_pagination() {
	global $wp_query;
	$big = 12345678;
	$page_format = paginate_links( array(
	    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	    'format' => '?paged=%#%',
	    'current' => max( 1, get_query_var('paged') ),
	    'total' => $wp_query->max_num_pages,
	    'type'  => 'array'
	) );
	if( is_array($page_format) ) {
		$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
		echo '<div class="pagination"><div><ul>';
		echo '<li><span>'. $paged . ' of ' . $wp_query->max_num_pages .'</span></li>';
		foreach ( $page_format as $page ) {
			echo "<li>$page</li>";
		}
		echo '</ul></div></div>';
	}
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


/**
 * Load custom functions file.
 */
require get_template_directory() . '/inc/custom-functions.php';


function skt_black_custom_blogpost_pagination( $wp_query ){
	$big = 999999999; // need an unlikely integer
	if ( get_query_var('paged') ) { $pageVar = 'paged'; }
	elseif ( get_query_var('page') ) { $pageVar = 'page'; }
	else { $pageVar = 'paged'; }
	$pagin = paginate_links( array(
		'base' 			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' 		=> '?'.$pageVar.'=%#%',
		'current' 		=> max( 1, get_query_var($pageVar) ),
		'total' 		=> $wp_query->max_num_pages,
		'prev_text'		=> '&laquo; Prev',
		'next_text' 	=> 'Next &raquo;',
		'type'  => 'array'
	) ); 
	if( is_array($pagin) ) {
		$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
		echo '<div class="pagination"><div><ul>';
		echo '<li><span>'. $paged . ' of ' . $wp_query->max_num_pages .'</span></li>';
		foreach ( $pagin as $page ) {
			echo "<li>$page</li>";
		}
		echo '</ul></div></div>';
	} 
}

// get slug by id
function skt_black_get_slug_by_id($id) {
	$post_data = get_post($id, ARRAY_A);
	$slug = $post_data['post_name'];
	return $slug; 
}

// custom post type for testimonial
function my_custom_post_testimonial() {
	$labels = array(
		'name'               => __( 'Testimonial','skt-black'),
		'singular_name'      => __( 'Testimonial','skt-black'),
		'add_new'            => __( 'Add Testimonial','skt-black'),
		'add_new_item'       => __( 'Add New Testimonial','skt-black'),
		'edit_item'          => __( 'Edit Testimonial','skt-black'),
		'new_item'           => __( 'New Testimonial','skt-black'),
		'all_items'          => __( 'All Testimonials','skt-black'),
		'view_item'          => __( 'View Testimonial','skt-black'),
		'search_items'       => __( 'Search Testimonial','skt-black'),
		'not_found'          => __( 'No Testimonial found','skt-black'),
		'not_found_in_trash' => __( 'No Testimonial found in the Trash','skt-black'), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Testimonial'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Manage Testimonials',
		'public'        => true,
		'menu_position' => 23,
		'supports'      => array( 'title', 'editor', 'thumbnail'),
		'has_archive'   => true,
	);
	register_post_type( 'testimonial', $args );	
}
add_action( 'init', 'my_custom_post_testimonial' );


// add shortcode for features
function skt_black_services($skt_var, $content = null){
		extract( shortcode_atts(array(
			'title' => 'title',
			'icon'  => get_template_directory_uri().'/images/icon-customizable.png',
			'bold'	=> '',			
		), $skt_var));
		
		return '<div id="services-box">
				<img src="'.$icon.'" />
				<h2>'.$title.' <span>'.$bold.'</span></h2>
				<p>'.do_shortcode( str_replace(array('<br />','\t','\n','\r','\0'.'\x0B'), array('','','','','',''), $content) ) .'</p>			
				</div>';
}
add_shortcode('services','skt_black_services');

//read more button
function readmore_func( $atts) {
	extract(shortcode_atts(array(	
	'button'		=> '',	
	'links'		=> '',
	'align'		=> '',						
	), $atts));
	$rrow = '<a style="text-align:'.$align.'" class="read-more" href="'.$links.'">'.$button.'</a>';
    return $rrow;
}
add_shortcode( 'readmore-link', 'readmore_func' );

// add shortcode for skills
function skt_black_skills($skt_skill_var){
	extract( shortcode_atts(array(
		'title' 	=> 'title',
		'percent'	=> 'percent',
		'bgcolor'	=> 'bgcolor',
	), $skt_skill_var));
	
	return '<div class="skillbar clearfix " data-percent="'.$percent.'%">
			<div class="skillbar-title"><span>'.$title.'</span></div>
			<div class="skill-bg"><div class="skillbar-bar" style="background:'.$bgcolor.'"></div></div>
			<div class="skill-bar-percent">'.$percent.'%</div>
			</div>';
	
}

add_shortcode('skill','skt_black_skills');

//Social
function skt_black_social_area($atts,$content = null){
		return '<div class="social-icon">'.do_shortcode($content).'</div>';
	}
add_shortcode('social_area','skt_black_social_area');

function skt_black_social($atts){
	extract(shortcode_atts(array(
		'icon'	=> '',
		'link'	=> ''
	),$atts));
		return '<a href="'.$link.'" target="_blank" class="fa fa-'.$icon.' fa-2x" title="'.$icon.'"></a>';
}
add_shortcode('social','skt_black_social');
// Social




// add shortcode for statistics main area
function skt_black_stat_main($atts, $stat_main_content = null){

	return '<ul id="some-facts">'.do_shortcode($stat_main_content).'</ul>';
}
add_shortcode('stat_main','skt_black_stat_main');

// add shortcode for statistics
function skt_black_stat($skt_stat_var, $stat_content = null){
	extract( shortcode_atts(array(
		'value'		=> '',
	), $skt_stat_var));
	
	return '<li><h2>'.$value.'</h2><h5>'.$stat_content.'</h5></li>';
}
add_shortcode('stat','skt_black_stat');

?>
