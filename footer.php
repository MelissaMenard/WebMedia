<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT Black
 */
?>
 <div id="footer-wrapper">
    	<footer class="footer">
        	<div class="footer-col-1">
            	<?php if(! dynamic_sidebar('sidebar-2')) { ?>
            	<h2><?php if( of_get_option('footerabttitle',true) != '') { echo of_get_option('footerabttitle'); }; ?></h2>
                <p><?php if( of_get_option('footerabttext') != ''){ echo of_get_option('footerabttext');}; ?></p>
                <?php } ?>
            </div>
            
            <div class="footer-col-1">
            	<?php if(! dynamic_sidebar('sidebar-3')) { ?>
            	<h2><?php if( of_get_option('recenttitle') != ''){ echo of_get_option('recenttitle');}; ?></h2>
                <ul class="recent-post">
                	<?php query_posts('post_type=post&showposts=2'); ?>
                    <?php  while( have_posts() ) : the_post(); ?>
                  	<li><a href="<?php the_permalink() ?>"><?php get_the_post_thumbnail( get_the_ID(), array(67,49) ); ?><?php echo content( of_get_option('footerexcerptlength') ); ?><br />
                    <span><?php if( of_get_option('ftrreadmoretext') != ''){ echo of_get_option('ftrreadmoretext');}; ?></span></a></li>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </ul>
                <?php } ?>
            </div>
            
            <div class="footer-col-3">
            	<?php if(! dynamic_sidebar('sidebar-4')) { ?>
            	<h2><?php if( of_get_option('addresstitle') != '') { echo of_get_option('addresstitle'); } ; ?></h2>
                <p><?php if( of_get_option('address',true) != '') { echo of_get_option('address',true) ; } ; ?></p>
                <div class="phone-no">
                	<?php if( of_get_option('phone',true) != ''){ ?>
                	<p><strong><?php _e('Phone:','skt-black'); ?></strong> <?php echo of_get_option('phone'); ?> </p>
                 	 <?php } ?>
                     <?php if( of_get_option('email',true) != '' ) { ?>
                    <p><strong><?php _e('E-mail:','skt-black'); ?></strong><a href="mailto:<?php echo of_get_option('email',true); ?>"><?php echo of_get_option('email',true) ;?></a></p>
                 <?php }; ?>
                 	<?php if( of_get_option('weblink',true) != ''){ ?>
                    <p><strong><?php _e('Website:','skt-black'); ?></strong><a href="http://<?php echo of_get_option('weblink',true); ?>" target="_blank"><?php echo of_get_option('weblink',true); ?></a></p>
                    <?php }; ?> 
                </div>
                <?php } ?>
            </div>
            <div class="clear"></div>
        </footer>
        
        <div class="copyright-wrapper">
        	<div class="copyright">
            	<div class="copyright-txt"><?php if( of_get_option('copytext',true) != ''){ echo of_get_option('copytext',true); }; ?></div>
                <div class="design-by"><?php if( of_get_option('ftlink', true) != ''){echo of_get_option('ftlink',true);}; ?></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
  
<?php wp_footer(); ?>

</body>
</html>