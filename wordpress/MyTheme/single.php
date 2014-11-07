<?php include 'header_slider.php'; ?>

	<div id="page" style="margin-top:20px;">
		<div id="page-bgtop">
			<div id="content">
			
	<?php  if ( have_posts() ):
		while ( have_posts() ) : the_post(); ?>		
			<div class="post">
					<h2 class="title" ><?php the_title(); ?></h2> 
					<p class="byline"> Автор: <?php the_author() ?></i></p>
					<div class="entry">
						<p><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></p>
						<p> <?php the_content( $more_link_text, $strip_teaser ); ?>  </p>
					</div>
					<div class="meta">
						<p class="links"> <?php comments_template( '', true ); ?> </p>
					</div>
				</div>
		<?php endwhile;?>
    <?php else :  echo "Sorry, no posts were found"; 
	endif; ?>	
</div><!-- end div#content -->
			
<?php get_sidebar();?>
<?php get_footer();?>