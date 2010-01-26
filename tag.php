<?php get_header(); ?>
	
		<?php rolopress_before_container(); // Before container hook ?>
		<div id="container">	
			<?php rolopress_before_main(); // Before main hook ?>		
			<div id="main">
			
<?php the_post(); ?>			
			


<?php rewind_posts(); ?>

			<?php rolopress_before_info(); // Before info hook ?>
			<div id="info">		
            
            <h2 class="page-title"><?php _e( 'Items Tagged As:', 'rolopress' ) ?> <span><?php single_tag_title() ?></span></h2>


		
			<?php rolo_loop();?>
		


			</div><!-- #info -->		
			<?php rolopress_after_info(); // After info hook ?>				
			
			</div><!-- #main -->		
			<?php rolopress_after_main(); // After main hook ?>
		</div><!-- #container -->
		<?php rolopress_after_container(); // After container hook ?>
		
<?php get_sidebar(); ?>	
<?php get_footer(); ?>