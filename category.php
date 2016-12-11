<?php
/*
*	Displaying the Category Page
*  @package Minimal Life
*  @subpackage kina
*  @since 1.0
*/
get_header(); ?>

<header class="category-title"><div class="entry-title"><?php single_cat_title(); ?></div></header>

<div class="entry-category">
<?php if (have_posts() ) : while (have_posts()) : the_post();  ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 	
		<!-- thumbnail -->
		<?php if( has_post_thumbnail() ) : ?>
		<div class="post-thumb">	
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'category-thumbnail' ); ?></a></div>
		<?php endif; ?>
		
		<!-- post title--> 
		<div class="post-title">
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>	    
 </article>
<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>

<!-- add  pagination -->
