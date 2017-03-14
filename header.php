<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package SKT Black
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" type="text/css" media="all" />
<![endif]-->
<?php 
	wp_head(); 
	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );
	if( !get_option( 'optionsframework_skt_black_pro' ) ) {
	require get_template_directory() . '/index-default.php';
	exit;
	}
?>
</head>

<body <?php body_class(); ?>>
<?php if ( is_home() || is_front_page() ) { ?>

<?php $slidershortcode = of_get_option('slidershortcode'); ?>
    <?php if( !empty($slidershortcode)){?>	       
            <?php if( of_get_option('slidershortcode') != ''){ echo do_shortcode(of_get_option('slidershortcode', true));}; ?>      
    <?php } else { ?>
    <div class="slider-main">    
       <?php	   
			$slAr = array();
			$m = 0;
			for ($i=1; $i<11; $i++) {
				if ( of_get_option('slide'.$i, true) != "" ) {
					$imgSrc 	= of_get_option('slide'.$i, true);
					$imgTitle	= of_get_option('slidetitle'.$i, true);
					$imgDesc	= of_get_option('slidedesc'.$i, true);
					$slidebutton	= of_get_option('slidebutton'.$i, true);
					$imglink	= of_get_option('slidelink'.$i, true);
					if ( strlen($imgSrc) > 10 ) {
						$slAr[$m]['image_src'] = of_get_option('slide'.$i, true);
						$slAr[$m]['image_title'] = of_get_option('slidetitle'.$i, true);
						$slAr[$m]['image_desc'] = of_get_option('slidedesc'.$i, true);
						$slAr[$m]['image_button'] = of_get_option('slidebutton'.$i, true);
						$slAr[$m]['image_url'] = of_get_option('slidelink'.$i, true);
						$m++;
					}
				}
				
			}
			$slideno = array();
			if( $slAr > 0 ){
				$n = 0;?>
                <div id="slider" class="nivoSlider">                
                <?php 
                foreach( $slAr as $sv ){
                    $n++; ?><img src="<?php echo esc_url($sv['image_src']); ?>" alt="<?php echo esc_attr($sv['image_title']);?>" title="<?php echo '#slidecaption'.$n ; ?>"/>
					<?php $slideno[] = $n;
                }
                ?>                
                </div><?php
                foreach( $slideno as $sln ){ ?>
                    <div id="slidecaption<?php echo $sln; ?>" class="nivo-html-caption">
                    <div class="top-bar">
                        <?php if( of_get_option('slidetitle'.$sln, true) != '' ){ ?>
                            <h2><?php echo of_get_option('slidetitle'.$sln, true); ?></h2>
                        <?php } ?>
                        <?php if( of_get_option('slidedesc'.$sln, true) != '' ){ ?>
                            <p><?php echo of_get_option('slidedesc'.$sln, true); ?></p>
                        <?php } ?>
						<?php if( of_get_option('slideurl'.$sln, true) != ''){ ?>
                        	<a class="read" href="<?php echo of_get_option('slideurl'.$sln,true); ?>"><?php echo of_get_option('slidebutton'.$sln, true); ?></a>
                        <?php } ?>
						<?php if( of_get_option('contactlink', true) != ''){ ?>
                        	<?php echo of_get_option('contactlink',true); ?>
                        <?php } ?>
                    </div>
                    </div><?php 
                } ?>
                <a href="<?php echo get_site_url(); ?>/#services" class="arrow-down"></a>              
                <div class="clear"></div><?php 
			}
            ?>       
       
    </div><!-- slider -->
<?php } } ?>

<div class="header">
    <div class="header-inner">
            <div class="logo">
                    <a href="<?php echo home_url('/'); ?>">
                        <?php if( of_get_option( 'logo', true ) != '' ) { ; ?>
                           <img src="<?php echo esc_url( of_get_option( 'logo', true )); ?>" / >
                           <span class="tagline"><?php bloginfo( 'description' ); ?></span>		
                        <?php } else { ?>
                            <h1><?php bloginfo('name'); ?></h1>
                            <span class="tagline"><?php bloginfo( 'description' ); ?></span>
                        <?php } ?>
                    </a>
             </div><!-- logo -->
            <div class="toggle">
            <a class="toggleMenu" href="#">
			   <?php if( of_get_option('menutextchange',true) != '') { ?>
                    <?php echo of_get_option('menutextchange'); ?>         
				  <?php } else { ?>                 
                     <?php _e('Menu','skt-black'); ?>                
                  <?php } ?>            
            </a>
            </div><!-- toggle -->
            <div class="nav">
                <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
            </div><!-- nav --><div class="clear"></div>
    </div><!-- header-inner -->
</div><!-- header -->

 <?php if ( !is_home() && !is_front_page() ) { ?>           
      <div class="innerbanner">                 
         <?php
			$header_image = get_header_image();
			
			if( is_single() || is_archive() || is_category() || is_author()|| is_search()) { 
				if(!empty($header_image)){
					echo '<img src="'.esc_url( $header_image ).'" width="'.get_custom_header()->width.'" height="'.get_custom_header()->height.'" alt="" />';
				} else {
        			echo '<img src="'.esc_url( of_get_option( 'innerpagebanner', true )).'" alt="">';
				}
			}
			elseif( has_post_thumbnail() ) {
				$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
				$thumbnailSrc = $src[0];
				echo '<img src="'.$thumbnailSrc.'" alt="">';
			} 
			elseif ( ! empty( $header_image ) ) {
				echo '<img src="'.esc_url( $header_image ).'" width="'.get_custom_header()->width.'" height="'.get_custom_header()->height.'" alt="" />';
            }	
			else { 
            	echo '<img src="'.esc_url( of_get_option( 'innerpagebanner', true )).'" alt="">';
		    } ?>
      
    </div> 
 <?php } ?>
 
 <?php 
if ( is_home() || is_front_page() ) {
if( get_option( 'show_on_front' ) == 'page' ){
if( of_get_option('numsection', true) > 0 ) { 
        $numSections = esc_attr( of_get_option('numsection', true) );
        for( $s=1; $s<=$numSections; $s++ ){ 
            $title 			= ( of_get_option('sectiontitle'.$s, true) != '' ) ? esc_html( of_get_option('sectiontitle'.$s, true) ) : '';
			$secid			= ( of_get_option('menutitle'.$s, true) != '') ? esc_html( of_get_option('menutitle'.$s, true) ) : '';
            $class			= ( of_get_option('sectionclass'.$s, true) != '' ) ? esc_html( of_get_option('sectionclass'.$s, true) ) : '';
            $content		= ( of_get_option('sectioncontent'.$s, true) != '' ) ? of_get_option('sectioncontent'.$s, true) : ''; 
			$hide			= ( of_get_option('hidesec'.$s, true) != '' ) ? of_get_option('hidesec'.$s, true) : '';
            $bgcolor		= ( of_get_option('sectionbgcolor'.$s, true) != '' ) ? of_get_option('sectionbgcolor'.$s, true) : '';
            $bgimage		= ( of_get_option('sectionbgimage'.$s, true) != '' ) ? of_get_option('sectionbgimage'.$s, true) : '';
            ?>
            <section <?php if( $bgcolor || $bgimage || $hide) { ?>style="<?php echo ($bgcolor != '') ? 'background-color:'.$bgcolor.'; ' : '' ; echo ($bgimage != '') ? 'background-image:url('.$bgimage.'); background-repeat:no-repeat; background-position: center center;' : '' ; echo ($hide) != false ? 'display:none;': ''; ?>"<?php } ?> id="<?php echo $secid; ?>" class="<?php echo ( of_get_option('menutitle'.$s, true) != '' ) ? 'menu_page' : '';?>">
            	<div class="container" <?php if($class == 'our-projects'){ ?>style="width:100%"<?php } ?>>
                    <div class="<?php echo ( ($s>22) && $class=='') ? 'top-grey-box' : $class; ?>">
                        <?php if( $title != '' ) { ?>
                        <h2 class="sectiontitle"><?php echo $title; ?></h2>
                    <?php } ?>
                    <?php the_content_format( $content ); ?>
                     </div><!-- middle-align -->
                    <div class="clear"></div>
                    </div>
                    <!-- container here test -->
            </section><div class="clear"></div>
        
            <?php 
        }
    }
	}
}
?>