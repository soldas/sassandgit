<?php
	
/*
Template Name: Full Width
*/

<?php get_header();?>
	<div class="site-content">
		<div class="main-home">
			<?php 
				if (have_posts()) :
					while (have_posts()) : the_post(); ?>
						<article class="page">
							<?php
								if(has_children() OR $post->post_parent > 0){?>
									<nav class="child-nav">
										<ul>
											<?php
												$child = array(
													'child_of' => get_top_id(),
													'title_li' => ''
												);
											?>
											<?php wp_list_pages($child);?>
										</ul>
									</nav>
									<?php }?>
										<h1 class="heading"><?php the_title();?></h1><div class="header"></div>
									<?php the_content();?>
						</article>
						<?php 
							endwhile;
								else :
									echo '<p>No content found1</p>';
									 endif;?>
		</div> <!-- Main -->
	</div><!-- Site -->
<?php get_footer();?>