<?php get_header();?>

<?php if( have_posts() ):
	//きじが1つでもあるとき
	?>

	<?php while ( have_posts() )://記事がある限りループ?>
		<?php the_post();//記事データをロード&セットアップ?>

		<article <?php post_class();?>>
			<h1><?php the_title(); //タイトル?></h1>
			<?php the_category( ',', 'single'  ); ?>
			<?php desk01_post_thumbnail();?>

			<?php the_content(); //本文?>

		</article>

	<?php endwhile;?>

	<?php the_post_navigation();?>

<?php else:
	//存在しないとき。
	?>
	<p>Not Found!</p>
<?php endif;?>


<?php get_footer();?>