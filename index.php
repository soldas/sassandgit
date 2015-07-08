<?php get_header();?>
	<div class="site-content">
		<div class="main">
			<?php 
				if (have_posts()) :
				while (have_posts()) : the_post();
					get_template_part('content', get_post_format());	
				endwhile;
				else :
					echo '<p>No content found1</p>';
				endif;
			?>
				
		</div> <!-- Main -->
		<?php get_sidebar();?>
	</div><!-- Site -->
<?php get_footer();	?>