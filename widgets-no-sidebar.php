<?php
/**
 * Template Name: Widget Page: No Sidebars
 *
 * Fully Widgetized Page with No Sidebars
 *
 * @package RoloPress
 * @subpackage Template
 */
 get_header(); ?>
	
		<?php rolopress_before_container(); // Before container hook ?>
		<div id="container">	
			<?php rolopress_before_main(); // Before main hook ?>
			<div id="main">
			
			<?php rolopress_before_page_info(); // Before info hook ?>
			<div id="info">
			<?php rolopress_before_page_info_content(); // Before page info content hook ?>			
			
				<h2 class="page-title"><?php the_title(); ?></h2>
			
					<?php rolo_loop();?>
					
					<div class="widget-area">
					<ul class="xoxo">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("widget-page") ) :
						echo '<div class="default-text">This page is totally widgetized. <a href="/wp-admin/widgets.php">Just drop some widgets here to fill it up.</a></div>';
					 endif; ?>
					</ul> 
					<br />

				</div><!-- #widget-area -->				
			
            <?php rolopress_after_page_info_content(); // After page info content hook ?>
        </div><!-- #info -->
			<?php rolopress_after_page_info(); // After page info hook ?>	
			
			</div><!-- #main -->		
			<?php rolopress_after_main(); // After main hook ?>
		</div><!-- #container -->
		<?php rolopress_after_container(); // After container hook ?>
		
<?php get_footer(); ?>