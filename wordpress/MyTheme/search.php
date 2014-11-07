
<?php get_header(); ?>
	<div id="page" style="margin-top:20px;">
		<div id="page-bgtop">
			<div id="content">
	<h2 style="margin-bottom:20px;"><?php echo 'Результат поиска: ' . '<span>' . get_search_query() . '</span>'; ?></h2>
        			
	<?php  if ( have_posts() ):
		while ( have_posts() ) : the_post(); ?>		
			<div class="post">
					<h2 class="title" ><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2> 
					<p class="byline"> Author: <?php the_author() ?></i></p>
					<div class="entry">
						<p> <a href="<?php the_permalink() ?>"><?php the_excerpt(); ?> </a></p>
					</div>
			</div>
		<?php endwhile;?>
    <?php else :  echo "Sorry, no posts were found"; 
	endif; ?>	
</div><!-- end div#content -->
			
<?php get_sidebar();?>
<?php get_footer();?>
