<?php
/**
 * @package SKT Black
 * Setup the WordPress core custom functions feature.
 *
*/

// get_the_content format text
function get_the_content_format( $str ){
	$raw_content = apply_filters( 'the_content', $str );
	$content = str_replace( ']]>', ']]&gt;', $raw_content );
	return $content;
}
// the_content format text
function the_content_format( $str ){
	echo get_the_content_format( $str );
}

function is_google_font( $font ){
	$notGoogleFont = array( 'Arial', 'Comic Sans MS', 'FreeSans', 'Georgia', 'Lucida Sans Unicode', 'Palatino Linotype', 'Symbol', 'Tahoma', 'Trebuchet MS', 'Verdana' );
	if( in_array($font, $notGoogleFont) ){
		return false;
	}else{
		return true;
	}
}

// subhead section function
function sub_head_section( $more ) {
	$pgs = 0;
	do {
		$pgs++;
	} while ($more > $pgs);
	return $pgs;
}

//[clear]
function clear_func() {
	$clr = '<div class="clear"></div>';
	return $clr;
}
add_shortcode( 'clear', 'clear_func' );

//[separator height="20"]
function separator_shortcode_func($atts ) {
	extract( shortcode_atts( array(
		'height' => '50',
	), $atts ) );
	$sptr = '<div style="clear:both; min-height:20px; height:'.$height.'px; background:url('.get_template_directory_uri().'/images/hr_double.png) no-repeat center center transparent;"></div>';
	return $sptr;
}
add_shortcode( 'separator', 'separator_shortcode_func' );


//[column_content]Your content here...[/column_content]
function column_content_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'type' => '',
	), $atts ) );
	$colPos = strpos($type, '_last');
	if($colPos === false){
		$cnt = '<div class="'.$type.'">'.do_shortcode($content).'</div>';
	}else{
		$type = substr($type,0,$colPos);
		$cnt = '<div class="'.$type.' last_column">'.do_shortcode($content).'</div>';
	}
	return $cnt;
}
add_shortcode( 'column_content', 'column_content_func' );


//[hr]
function hrule_func() {
	$hrule = '<div class="clear hrule"></div>';
	return $hrule;
}
add_shortcode( 'hr', 'hrule_func' );


//[hr_top]
function hr_top_func() {
	$hr_top = '<div class="clear linktotop"><a title="Top of Page" href="#top">Back to Top</a></div><div class="clear hrule"></div>';
	return $hr_top;
}
add_shortcode( 'hr_top', 'hr_top_func' );


// [searchform]
function searchform_shortcode_func( $atts ){
	return get_search_form( false );
}
add_shortcode( 'searchform', 'searchform_shortcode_func' );

// accordion
function accordion_func( $atts, $content = null ) {
	$acc = '<div>'.get_the_content_format( do_shortcode($content) ).'<div class="clear"></div></div>';
	return $acc;
}
add_shortcode( 'accordion', 'accordion_func' );
function accordion_content_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'title' => 'Accordion Title',
	), $atts ) );
	$content = wpautop(trim($content));
	$acn = '<div class="accordion-box"><h2>'.$title.'</h2>
			<div class="acc-content">'.$content.'</div><div class="clear"></div></div>';
	return $acn;
}
add_shortcode( 'accordion_content', 'accordion_content_func' );


// remove excerpt more
function new_excerpt_more( $more ) {
	return '... ';
}
add_filter('excerpt_more', 'new_excerpt_more');

// get post categories function
function getPostCategories(){
	$categories = get_the_category();
	$catOut = '';
	$separator = ', ';
	$catOutput = '';
	if($categories){
		foreach($categories as $category) {
			$catOutput .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s", 'skt-black' ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
		}
		$catOut = 'Categories: '.trim($catOutput, $separator);
	}
	return $catOut;
}

// replace last occurance of a string.
function str_lreplace($search, $replace, $subject){
	$pos = strrpos($subject, $search);
	if($pos !== false){
		$subject = substr_replace($subject, $replace, $pos, strlen($search));
	}
	return $subject;
}


function skt_blak_pullquote_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'align' => '',
	), $atts ) );
	$quote = ($content == '' ) ? "<blockquote class=\"align-{$align}\">This is a pullquote. Lorem ipsum dolor sit amet, consectetur adipiscing elit sed pharetra aliquet metus.</blockquote>" : "<blockquote class=\"align-{$align}\">$content</blockquote>";

	return $quote;
}
add_shortcode( 'pullquote', 'skt_blak_pullquote_func' );

function skt_black_dropcap_func( $atts, $content = null ) {
	$dcap = '<span class="dropcap">'.$content.'</span>';
	return $dcap;
}
add_shortcode( 'dropcap', 'skt_black_dropcap_func' );

//custom post type for Our Team
function my_custom_post_team() {
	$labels = array(
		'name'               => __( 'Our Team', 'skt-black' ),
		'singular_name'      => __( 'Our Team', 'skt-black' ),
		'add_new'            => __( 'Add New', 'skt-black' ),
		'add_new_item'       => __( 'Add New Team Member', 'skt-black' ),
		'edit_item'          => __( 'Edit Team Member', 'skt-black' ),
		'new_item'           => __( 'New Team Member', 'skt-black' ),
		'all_items'          => __( 'All Team Members', 'skt-black' ),
		'view_item'          => __( 'View Team Members', 'skt-black' ),
		'search_items'       => __( 'Search Team Members', 'skt-black' ),
		'not_found'          => __( 'No team members found', 'skt-black' ),
		'not_found_in_trash' => __( 'No team members found in the Trash', 'skt-black' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Our Team'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Manage Team',
		'public'        => true,
		'menu_position' => 23,
		'supports'      => array( 'title', 'thumbnail', 'editor' ),
		'has_archive'   => true,
	);
	register_post_type( 'team', $args );
}
add_action( 'init', 'my_custom_post_team' );


function pricing_table_shortcode_func( $atts, $content = null ) {
   extract( shortcode_atts( array(
		'columns' => '4',
	), $atts ) );
	$ptbl = '<div class="pricing_table pcol'.$columns.'">'.do_shortcode( str_replace(array('<br />','\t','\n','\r','\0'.'\x0B'), array('','','','','',''), $content) ) .'<div class="clear"></div></div>';
	return $ptbl;
}
add_shortcode( 'pricing_table', 'pricing_table_shortcode_func' );

function price_column_func( $atts, $content = null ) {
   extract( shortcode_atts( array(
		'highlight' => '',
		'bgcolor' => '',
	), $atts ) );
	$pcol = '<div class="price_col '.( (strtolower($highlight) == 'yes') ? 'highlight' : '' ).'" '.( ($bgcolor!='') ? 'style="background-color:'.$bgcolor.' !important;"' : '' ) .'>'.do_shortcode( $content ) .'</div>';
    return $pcol;
}
add_shortcode( 'price_column', 'price_column_func' );

function price_column_header_func( $atts, $content = null ) {
	$pheader = '<div class="th">'.strip_tags($content).'</div>';
    return $pheader;
}
add_shortcode( 'price_header', 'price_column_header_func' );

function price_column_footer_func( $atts, $content = null ) {
   extract( shortcode_atts( array(
		'link' => '#',
	), $atts ) );
	$pfooter = '<div class="tf"><a href="'.$link.'">'.strip_tags($content).'</a></div>';
    return $pfooter;
}
add_shortcode( 'price_footer', 'price_column_footer_func' );

function price_row_footer_func( $atts, $content = null ) {
	$prow = '<div class="td">'.$content.'</div>';
    return $prow;
}
add_shortcode( 'price_row', 'price_row_footer_func' );



function teamoutput_func( $atts ) {
   extract( shortcode_atts( array(
		'show' => '',
	), $atts ) );
	  extract( shortcode_atts( array( 'show' => '',), $atts ) ); $teamoutput = ''; wp_reset_query();
	$teamoutput = '<div class="team-members">';
	$args = array( 'post_type' => 'team', 'posts_per_page' => $show, 'post__not_in' => get_option('sticky_posts'), 'orderby' => 'date', 'order' => 'desc' );
	query_posts( $args );
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			$teamoutput .= '<div class="team-col"><div class="teamimgbx"><a href="'.get_the_permalink().'">'.get_the_post_thumbnail(get_the_ID(), array(257,199)).'</a></div>
						<h3>'.get_the_title().'</h3>
							'.content( of_get_option('teamexcerptlength') ).'
					</div>
			';
		endwhile;
		else:
	  $teamoutput = 'There are not found team member';		
	endif;
	wp_reset_query();
	$teamoutput .= '<div class="clear"></div>';
	$teamoutput .= '</div>';
	return $teamoutput;
}
add_shortcode( 'ourteam', 'teamoutput_func' );



//Testimonials function
function testimonialoutput_func( $atts ){
	extract( shortcode_atts( array( 
	'show' => '',
	), 
	$atts ) ); 
	$testimonialoutput = ''; 
	wp_reset_query();
	$n = 0;	
	query_posts('post_type=testimonial&posts_per_page='.$show);
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			$n++;
			if( $n%2 == 0 )
			$nomgn = ' last';
			else
			$nomgn = ' ';
			$testimonialoutput .= '<div class="testimonial-box'.$nomgn.'">'.get_the_post_thumbnail( get_the_ID(), array(82,82) ).'
				<div class="testimonial-post">
                <div class="testimonial-arrow"></div>
                <h2>'.get_the_title().'</h2>
                '.content( of_get_option('testimonialslength') ).'
                </div>
				</div>';

		endwhile;
		else:
	  $testimonialoutput = 'There are not found Testimonials';		
	endif;
	wp_reset_query();
	$testimonialoutput .= '<div class="clear"></div>';
	
	return $testimonialoutput;
}
add_shortcode( 'testimonials', 'testimonialoutput_func' );


function latestpostsoutput_func( $atts ){
   extract( shortcode_atts( array(
		'show' => 2,
	), $atts ) );
	$postoutput = '';
	wp_reset_query();
	$n = 0;
	query_posts(  array( 'posts_per_page'=>$show, 'post__not_in' => get_option('sticky_posts') )  );
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			$n++;
			if( $n%2 == 0 )
			$nomgn = 'last';
			else
			$nomgn = ' ';
			if ( has_post_thumbnail()) {
				$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
				$imgUrl = $large_image_url[0];
			}else{
				$imgUrl = get_template_directory_uri().'/images/img_404.png';
			}
			$postoutput .= '<div class="news-box '.$nomgn.'">
							<div class="news">
							<div class="newscontent">                		
								<a href="'.get_the_permalink().'"><h2>'.get_the_title().'</h2></a>
								'.content( of_get_option('hmlatestpostslength') ).'
								<a href="'.get_the_permalink().'" class="more"></a>
						    </div>
							
						    <div class="newsthumb">
							    <a href="'.get_the_permalink().'"><img src="'.$imgUrl.'" alt=" " /></a>
							</div>
							<div class="clear"></div>
                    </div>
                        </div>
						';

		endwhile;
	endif;
	wp_reset_query();
	$postoutput .= '<div class="clear"></div>';
	
	return $postoutput;
}
add_shortcode( 'latestposts', 'latestpostsoutput_func' );


function social_media_func( $atts ) {

	$pcol = '<div class="social-icons">';
	if( of_get_option('facebook', true)!= '' )
	$pcol .= '<a href="'.of_get_option('facebook', true).'"><div class="icon-fb"></div></a>';
	if( of_get_option('twitter', true)!= '' )
	$pcol .= '<a href="'.of_get_option('twitter', true).'"><div class="icon-twitt"></div></a>';
	if( of_get_option('youtube', true)!= '' )
	$pcol .= '<a href="'.of_get_option('youtube', true).'"><div class="icon-ytube"></div></a>';
	if( of_get_option('rss', true)!= '' )
	$pcol .= '<a href="'.of_get_option('rss', true).'"><div class="icon-rss"></div></a>';
	if( of_get_option('linkedin', true)!= '' )
	$pcol .= '<a href="'.of_get_option('linkedin', true).'"><div class="icon-in"></div></a>';

	$pcol .= '<div class="clear"></div></div>';
    return $pcol;
}
add_shortcode( 'social_icons', 'social_media_func' );


function contactform_func( $atts ) {
    $atts = shortcode_atts( array(
        'to_email' => get_bloginfo('admin_email'),
		'title' => 'Contact enquiry - '.get_bloginfo('url'),
    ), $atts );

	$cform = "<div class=\"main-form-area\" id=\"contactform_main\">";

	$cerr = array();
	if( isset($_POST['c_submit']) && $_POST['c_submit']=='Submit' ){
		$name 			= trim( $_POST['c_name'] );
		$email 			= trim( $_POST['c_email'] );
		$phone 			= trim( $_POST['c_phone'] );
		$website		= trim( $_POST['c_website'] );
		$comments 		= trim( $_POST['c_comments'] );
		$captcha 		= trim( $_POST['c_captcha'] );
		$captcha_cnf	= trim( $_POST['c_captcha_confirm'] );

		if( !$name )
			$cerr['name'] = 'Please enter your name.';
		if( ! filter_var($email, FILTER_VALIDATE_EMAIL) ) 
			$cerr['email'] = 'Please enter a valid email.';
		if( !$phone )
			$cerr['phone'] = 'Please enter your phone number.';
		if( !$comments )
			$cerr['comments'] = 'Please enter your question / comments.';
		if( !$captcha || (md5($captcha) != $captcha_cnf) )
			$cerr['captcha'] = 'Please enter the correct answer.';

		if( count($cerr) == 0 ){
			$subject = $atts['title'];
			$headers = "From: ".$name." <" . strip_tags($email) . ">\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

			$message = '<html><body>
							<table>
								<tr><td>Name: </td><td>'.$name.'</td></tr>
								<tr><td>Email: </td><td>'.$email.'</td></tr>
								<tr><td>Phone: </td><td>'.$phone.'</td></tr>
								<tr><td>Website: </td><td>'.$website.'</td></tr>
								<tr><td>Comments: </td><td>'.$comments.'</td></tr>
							</table>
						</body>
					</html>';
			mail( $atts['to_email'], $subject, $message, $headers);
			$cform .= '<div class="success_msg">Thank you! A representative will get back to you very shortly.</div>';
			unset( $name, $email, $phone, $website, $comments, $captcha );
		}else{
			$cform .= '<div class="error_msg">';
			$cform .= implode('<br />',$cerr);
			$cform .= '</div>';
		}
	}

	$capNum1 	= rand(1,4);
	$capNum2 	= rand(1,5);
	$capSum		= $capNum1 + $capNum2;
	$sumStr		= $capNum1." + ".$capNum2 ." = ";

	$cform .= "<form name=\"contactform\" action=\"#contactform_main\" method=\"post\">
			<p class=\"left\"><input type=\"text\" name=\"c_name\" value=\"". ( ( empty($name) == false ) ? $name : "" ) ."\" placeholder=\"Name\" /></p>
			<p class=\"right\"><input type=\"email\" name=\"c_email\" value=\"". ( ( empty($email) == false ) ? $email : "" ) ."\" placeholder=\"Email\" /></p><div class=\"clear\"></div>
			<p class=\"left\"><input type=\"tel\" name=\"c_phone\" value=\"". ( ( empty($phone) == false ) ? $phone : "" ) ."\" placeholder=\"Phone\" /></p>
			<p class=\"right\"><input type=\"url\" name=\"c_website\" value=\"". ( ( empty($website) == false ) ? $website : "" ) ."\" placeholder=\"Website with prefix http://\" /></p><div class=\"clear\"></div>
			<p><textarea name=\"c_comments\" placeholder=\"Message\">". ( ( empty($comments) == false ) ? $comments : "" ) ."</textarea></p>";
	$cform .= "<br /><p class=\"left\">$sumStr<input style=\"width:200px;\" type=\"text\" placeholder=\"Captcha\" value=\"". ( ( empty($captcha) == false ) ? $captcha : "" ) ."\" name=\"c_captcha\" /><input type=\"hidden\" name=\"c_captcha_confirm\" value=\"". md5($capSum)."\"></p><div class=\"clear\"></div>";
	$cform .= "<p class=\"sub\"><input type=\"submit\" name=\"c_submit\" value=\"Submit\" /></p>
		</form>
	</div>";

    return $cform;
}
add_shortcode( 'contactform', 'contactform_func' );



add_action("admin_init", "admin_init");
function admin_init(){
	add_meta_box("video_file_url-meta", "Video File URL", "video_file_url", "photogallery", "normal", "low"); 
}

function video_file_url () {
	global $post;  
	$custom     = get_post_custom($post->ID);  
	$video_file_url  = isset ( $custom["video_file_url"][0] ) ? $custom["video_file_url"][0] : '';  ?> 
	<style>
	.amount_input { margin:0; padding:6px; width:80%; }
	</style>
	<table width="100%"> 
		<tr><td width="110">Video File URL : </td><td colspan="2"><input class="amount_input" type="text" name="video_file_url"  value="<?php echo $video_file_url; ?>"  /></td></tr> 
		<tr><td></td><td><strong>YouTube video url:</strong></td><td>http://www.youtube.com/watch?v=qqXi8WmQ_WM</td></tr> 
		<tr><td></td><td width="120"><strong>Vimeo video url:</strong></td><td>http://vimeo.com/8245346</td></tr> 
	</table>
	<?php   
}

add_action('save_post', 'save_details'); 
function save_details(){
	global $post; 
	if ( isset($_POST["video_file_url"]) ) {
		update_post_meta($post->ID, "video_file_url", $_POST["video_file_url"]);
	} 
}

//custom post type for Our photogallery
function my_custom_post_photogallery() {
	$labels = array(
		'name'               => __( 'Photo Gallery','skt-black' ),
		'singular_name'      => __( 'Photo Gallery','skt-black' ),
		'add_new'            => __( 'Add New','skt-black' ),
		'add_new_item'       => __( 'Add New Image / Video','skt-black' ),
		'edit_item'          => __( 'Edit Image/Video','skt-black' ),
		'new_item'           => __( 'New Image/Video','skt-black' ),
		'all_items'          => __( 'All Images/Videos','skt-black' ),
		'view_item'          => __( 'View Image/Video','skt-black' ),
		'search_items'       => __( 'Search Images/Videos','skt-black' ),
		'not_found'          => __( 'No images/videos found','skt-black' ),
		'not_found_in_trash' => __( 'No images/videos found in the Trash','skt-black' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Photo Gallery'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Manage Photo Gallery',
		'public'        => true,
		'menu_position' => 23,
		'supports'      => array( 'title', 'editor', 'thumbnail' ),
		'has_archive'   => true,
	);
	register_post_type( 'photogallery', $args );
}
add_action( 'init', 'my_custom_post_photogallery' );


//  register gallery taxonomy
register_taxonomy( "gallerycategory", 
	array("photogallery"), 
	array(
		"hierarchical" => true, 
		"label" => "Gallery Category", 
		"singular_label" => "Photo Gallery", 
		"rewrite" => true
	)
);

add_action("manage_posts_custom_column",  "photogallery_custom_columns");
add_filter("manage_edit-photogallery_columns", "photogallery_edit_columns");
function photogallery_edit_columns($columns){
	$columns = array(
		"cb" => '<input type="checkbox" />',
		"title" => "Gallery Title",
		"pcategory" => "Gallery Category",
		"view" => "Image",
		"date" => "Date",
	);
	return $columns;
}
function photogallery_custom_columns($column){
	global $post;
	switch ($column) {
		case "pcategory":
			echo get_the_term_list($post->ID, 'gallerycategory', '', ', ','');
		break;
		case "view":
			the_post_thumbnail('thumbnail');
		break;
		case "date":

		break;
	}
}


//[photogallery filter="false"]
function photogallery_shortcode_func( $atts ) {
	extract( shortcode_atts( array(
		'show' => -1,
		'filter' => 'true'
	), $atts ) );
	$pfStr = '';

	$pfStr .= '<div class="photobooth">';
	if( $filter == 'true' ){
		$pfStr .= '<div class="filter-gallery"><ul class="clean" id="filter"><li class="current"><a href="javascript:void(0)">All</a></li>';
		$categories = get_categories( array('taxonomy' => 'gallerycategory') );
		foreach ($categories as $category) {
			$pfStr .= '<li><a href="javascript:void(0)">'.$category->name.'</a></li>';
		}
		$pfStr .= '</ul></div>';
	}

	$pfStr .= '<div class="gallery"><ul class="clean" id="portfolio">';
	$j=0;
	query_posts('post_type=photogallery&posts_per_page='.$show); 
	if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	$j++;
		$videoUrl = get_post_meta( get_the_ID(), 'video_file_url', true);
		$imgSrc = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
		$terms = wp_get_post_terms( get_the_ID(), 'gallerycategory', array("fields" => "all"));
		$slugAr = array();
		foreach( $terms as $tv ){
			$slugAr[] = $tv->slug;
		}
		if ( $imgSrc[0]!='' ) {
			$imgUrl = $imgSrc[0];
		}else{
			$imgUrl = get_template_directory_uri().'/images/img_404.png';
		}
		$pfStr .= '<li class="'.implode(' ', $slugAr).'" '.( ($j%4==0) ? 'style="margin-right:0"' : '' ).'>
                <strong>'.get_the_title().'</strong>               
 <a href="'.( ($videoUrl) ? $videoUrl : $imgSrc[0] ).'" rel="prettyPhoto[pp_gal]"><img src="'.$imgSrc[0].'"/></a>
            </li>';
		unset( $slugAr );
	endwhile; else: 
		$pfStr .= '<p>Sorry, photo gallery is empty.</p>';
	endif; 
	wp_reset_query();
	$pfStr .= '</ul></div>';
	$pfStr .= '<div class="clear"></div></div>';
	return $pfStr;
}
add_shortcode( 'photogallery', 'photogallery_shortcode_func' );


function toggle_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'title' => 'Click here to toggle content',
	), $atts ) );
	$tog_content = "<div class=\"toggle_holder\"><h3 class=\"slide_toggle\"><a href=\"#\">{$title}</a></h3>
					<div class=\"slide_toggle_content\">".get_the_content_format( $content )."</div></div>";

	return $tog_content;
}
add_shortcode( 'toggle_content', 'toggle_func' );

function tabs_func( $atts, $content = null ) {
	$tabs = '<div class="tabs-wrapper"><ul class="tabs">'.do_shortcode($content).'</ul></div>';
	return $tabs;
}
add_shortcode( 'tabs', 'tabs_func' );

function tab_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'title' => 'Tab Title',
	), $atts ) );
	$rand = rand(100,999);
	$tab = '<li><a rel="tab'.$rand.'" href="javascript:void(0)"><span>'.$title.'</span></a><div id="tab'.$rand.'" class="tab-content">'.get_the_content_format($content).'</div></li>';
	return $tab;
}
add_shortcode( 'tab', 'tab_func' );

function gradient_button_func( $atts ) {
	extract( shortcode_atts( array(
		'size' => 'small',
		'bg_color' => '#636b74',
		'color' => '#fff',
		'text' => 'More',
		'title' => 'Click',
		'url' => '',
		'position' => 'center',
	), $atts ) );
	$btn  = "<div class=\"clear\"></div>";
	$btn .= "<a href=\"{$url}\" ";
	$btn .= ($title != "") ? " title=\"{$title}\" " : "";
	$btn .= "class=\"grad-btn-{$size} btn-align-{$position}\" style=\"background-color:{$bg_color}; color:{$color}\">";
	$btn .= "{$text}</a>";
	$btn  .= "<div class=\"clear\"></div>";

	return $btn;
}
add_shortcode( 'gradient_button', 'gradient_button_func' );

function simple_button_func( $atts ) {
	extract( shortcode_atts( array(
		'size' => 'small',
		'bg_color' => '#636b74',
		'color' => '#fff',
		'text' => 'More',
		'title' => 'Click',
		'url' => '',
		'position' => 'left',
	), $atts ) );
	$btn  = "<div class=\"clear\"></div>";
	$btn .= "<a href=\"{$url}\" ";
	$btn .= ($title != "") ? " title=\"{$title}\" " : "";
	$btn .= "class=\"simple-btn-{$size} btn-align-{$position}\" style=\"background-color:{$bg_color}; color:{$color}\">";
	$btn .= "{$text}</a>";
	$btn  .= "<div class=\"clear\"></div>";

	return $btn;
}
add_shortcode( 'simple_button', 'simple_button_func' );

function round_button_func( $atts ) {
	extract( shortcode_atts( array(
		'style' => 'dark',
		'text' => 'More',
		'title' => 'Click',
		'url' => '',
		'position' => 'left',
	), $atts ) );
	$btn  = "<div class=\"clear\"></div>";
	$btn .= "<a href=\"{$url}\" ";
	$btn .= ($title != "") ? " title=\"{$title}\" " : "";
	$btn .= "class=\"round-btn-{$style} round-btn btn-align-{$position}\">";
	$btn .= "<span>{$text}</span></a>";
	$btn  .= "<div class=\"clear\"></div>";

	return $btn;
}
add_shortcode( 'round_button', 'round_button_func' );

function msg_box_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'type' => 'info',
		'bg_color' => '#f6f6f6',
		'color' => '#333',
		'start_color' => "#fff",
		'end_color' => "#eee",
		'border' => "#ccc",
		'align' => '',
		'width' => '100%',
	), $atts ) );
	$msg = '';

	if($type == 'success'){
		$msg  = '<div class="msg-success"><div class="msg-box-icon">';
		$msg .= ($content == '') ? "This is a sample of the 'success' style message box shortcode. To use this style use the following shortcode" : $content;
		$msg .= '</div></div>';
	}elseif($type == 'error'){
		$msg  = '<div class="msg-error"><div class="msg-box-icon">';
		$msg .= ($content == '') ? "This is a sample of the 'error' style message box shortcode. To use this style use the following shortcode." : $content;
		$msg .= '</div></div>';
	}elseif($type == 'warning'){
		$msg  = '<div class="msg-warning"><div class="msg-box-icon">';
		$msg .= ($content == '') ? "This is a sample of the 'warning' style message box shortcode. To use this style use the following shortcode." : $content;
		$msg .= '</div></div>';
	}elseif($type == 'info'){
		$msg  = '<div class="msg-info"><div class="msg-box-icon">';
		$msg .= ($content == '') ? "This is a sample of the 'info' style message box shortcode. To use this style use the following shortcode." : $content;
		$msg .= '</div></div>';
	}elseif($type == 'about'){
		$msg  = '<div class="msg-about"><div class="msg-box-icon">';
		$msg .= ($content == '') ? "This is a sample of the 'about' style message box shortcode. To use this style use the following shortcode." : $content;
		$msg .= '</div></div>';
	}elseif($type == 'custom'){
		$msg  = "<div style=\"width:{$width};\" class=\"msg-align-{$align}\"><div class=\"msg-custom\" style=\"background-color:{$end_color}; background: -moz-linear-gradient(center top , {$start_color}, {$end_color}); background: -webkit-gradient(linear, 0% 0%, 0% 100%, from({$start_color}), to({$end_color})); background: -webkit-linear-gradient(top, {$start_color}, {$end_color}); background: -ms-linear-gradient(top, {$start_color}, {$end_color}); background: -o-linear-gradient(top, {$start_color}, {$end_color}); border:1px {$border} solid; color:{$color};\">";
		$msg .= ($content == '') ? "This is a sample of the 'simple' style message box shortcode." : $content;
		$msg .= '</div></div><div class="clear"></div>';
	}elseif($type == 'simple'){
		$msg  = "<div class=\"msg-simple\" style=\"background-color:{$bg_color}; color:{$color};\">";
		$msg .= ($content == '') ? "This is a sample of the 'simple' style message box shortcode." : $content;
		$msg .= '</div>';
	}
	return $msg;
}
add_shortcode( 'message', 'msg_box_func' );


function unorderedlist_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'style' => 'list-1',
	), $atts ) );
	$content = wpautop(trim($content));
	$ulist = '<ul class="'.$style.'">'.$content.'</ul>';
	return $ulist;
}
add_shortcode( 'unordered_list', 'unorderedlist_func' );

function skt_black_newsletter($atts, $content){
	extract(shortcode_atts(array(
		'title'		=> '',
		'highlight'	=> '',
	),$atts));
	return '<div class="signup-newsletter">
			<div class="newsletter">
				<h2>'.$title.' <span>'.$highlight.'</span></h2>
				<p>'.$content.'</p>
			</div>
			<div class="newsletter-form">
				<form method="post" action="">
                	<input type="text" title="Name" size="40" autocomplete="off" value="Name" id="name" name="name" required="required">
                    <input type="email" title="Email" size="40" autocomplete="off" value="Email" id="email" name="email" required="required">
                    <input type="submit" value="SIGN UP" />
				</form>
                </div>
                <div class="clear"></div>
				</div></div>';
	}
add_shortcode('newsletter','skt_black_newsletter');	

define('SKT_THEME_DOC','http://sktthemesdemo.net/documentation/skt-black-doc/');
define('SKT_PRO_THEME_URL','http://www.sktthemes.net/themes/skt-black-pro/');