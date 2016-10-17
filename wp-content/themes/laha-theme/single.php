<?php get_header(); ?>

<div id="main_container">
	<div class="container">
		<div id="main_wrapper">

			<?php

			if (have_posts()):

				while (have_posts()): the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_title('<h2 class="page_title">', '</h2>'); ?>

				<?php

				$images = get_field('фотоотчеты');

				if( $images ): ?>
				<div class="preview_single popup-gallery">
					<div class="row mt-20 media_fix">
						<?php foreach( $images as $image ): ?>
							<div class="col-xs-6 col-sm-2 preview_single_item">
								<a href="<?php echo $image['url']; ?>">
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
								</a>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>

			<small><?php the_category(' '); ?> || <?php the_tags(); ?> || <?php edit_post_link(); ?></small>

		</article>

	<?php endwhile;

	endif;

	?>

</div><!-- #main_wrapper -->
</div><!-- .container -->
</div><!-- #main_wrap -->

<?php get_footer(); ?>
