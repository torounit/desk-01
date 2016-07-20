<?php

function desk01_setup() {
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'vanilla-featured-image', 640, 9999 );
	add_image_size( 'vanilla-featured-image', 800, 9999 );
}

add_action( 'after_setup_theme', 'desk01_setup' );


function desk01_scripts() {
	wp_enqueue_style( 'desk01-style', get_stylesheet_uri() );
	//wp_enqueue_script( 'vanilla-bundle', get_template_directory_uri() . '/bundle.js', array( 'jquery', 'underscore' ), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'desk01_scripts' );

function desk01_post_thumbnail () {
	if( has_post_thumbnail() ) :?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'full' ); ?>
			</a>
		</div>
	<?php endif;
}
