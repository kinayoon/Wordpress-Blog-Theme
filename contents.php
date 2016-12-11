<?php
/*
*	 
*  @package Minimal Life
*  @subpackage kina
*  @version 1.0
*/
?>

<div class="entry-front">
<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   
	<?php if ( has_post_thumbnail() ) : ?>
			<div class="post-thumb">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
	<?php endif; ?>
			
			<div class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>	
			
			 <div class="post-content">
				<?php  the_excerpt(); ?>
	     	 </div>
  
 </article>
<?php endwhile; else: ?>
</div>
 <section><?php _e( 'Sorry, Nothing to display', 'Minimal Life' ); ?></section>
<?php endif; ?>   

