<?php get_header(); ?>

	<div id="page" style="margin-top:20px;">
		<div id="page-bgtop">
			<div id="content">
			
	<?php  if ( have_posts() ):
		while ( have_posts() ) : the_post(); ?>		
			<div class="post">
					<h2 class="title" ><?php the_title();?></h2> 
					
					<div class="entry">
						<p> <?php the_content(); ?> </p>
					</div>
					
				</div>
		<?php endwhile;?>
    <?php else :  echo "Sorry, no posts were found"; 
	endif; ?>	
</div><!-- end div#content -->
			
<?php get_sidebar();?>
<?php get_footer();?>