<?php get_header();?>
<?php if( have_posts() ):?>
	<?php while ( have_posts() ):?>
		<?php the_post();?>

		<article <?php post_class();?>>
			<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>

			<?php desk01_post_thumbnail();?>

			<?php the_excerpt();?>
		</article>

	<?php endwhile;?>

	<?php the_posts_navigation();?>
<?php else:?>
	<p>Not Found!</p>
<?php endif;?>


<?php get_footer();?>