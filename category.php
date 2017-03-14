<?php
/**
 * The template for displaying all category pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package SKT Black
 */

get_header(); 

if( of_get_option('singlelayout',true) != ''){
	$layout = of_get_option('singlelayout');
}
?>
<style>
<?php
if( of_get_option('singlelayout', true) == 'singleleft' ){
	echo '#sidebar { float:left !important; }'; 
}
?>
</style>

<div class="content-area">
    <div class="middle-align content_sidebar">
        <div class="site-main <?php echo $layout; ?>" id="sitemain">
            <header class="page-header">
				<h1 class="page-title"><?php single_cat_title('Category: '); ?></h1>
            </header><!-- .page-header -->
			<?php if ( have_posts() ) : ?>
				<?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; ?>
                <?php skt_black_pagination(); ?>
            <?php else : ?>
                <?php get_template_part( 'no-results', 'archive' ); ?>
            <?php endif; ?>
        </div>
         <?php 
		if( $layout != 'sitefull' && $layout != 'nosidebar' ){
		  get_sidebar('blog');
		} ?>
        <div class="clear"></div>
    </div>
</div>

<?php get_footer(); ?>