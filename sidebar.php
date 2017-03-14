<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package SKT Black
 */
?>
<div id="sidebar">
    
    <?php if ( ! dynamic_sidebar( 'sidebar-main' ) ) : ?>
        <aside id="our_skills" class="widget">
            <h3 class="widget-title"><?php _e( 'Our Skills', 'skt-black' ); ?></h3>
            <?php echo do_shortcode('[skill title="Coding" percent="90" bgcolor="#ff8a00"][skill title="Design" percent="80" bgcolor="#ff8a00"][skill title="Wordpress" percent="70" bgcolor="#ff8a00"][skill title="SEO" percent="90" bgcolor="#ff8a00"] '); ?>           
        </aside>
        <aside id="client_tm" class="widget">
            <h3 class="widget-title"><?php _e( 'Sign Up For Newsletter', 'skt-black' ); ?></h3>
           <?php echo do_shortcode('[newsletter title="Sign Up Our" highlight="Newsletter"]Stay updated with latest news from SKT Black[/newsletter] '); ?> 
        </aside>
    <?php endif; // end sidebar widget area ?>
	
</div><!-- sidebar -->