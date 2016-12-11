<?php
/*
*	Displaying the single post
*  @package Minimal Life
*  @subpackage kina
*  @since 1.0
*/
get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
<section class ="entry-content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		    <!--  thumbnail -->
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="post-thumb">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
			<?php endif; ?>
			
			<!-- post title -->
			<div class="post-title"><?php the_title(); ?></div>	
			
			<!-- post content -->
			<div class="post-content"><?php the_content(); ?></div> 
	
			<?php get_template_part( 'post-nav' ); ?>
			<?php comments_template( 'comments' ); ?>
<?php endwhile; endif; ?>		 

</section>
</article>
<?php get_footer(); ?>


			
		