<?php get_header(); ?>

	<section class="interna py-60">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h1 class="text-uppercase"><?php the_title(); ?></h1>
                </div>
			<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
				<div class="col-12">
					<?php the_content(); ?>
					<br class="clear">
					<?php edit_post_link(); ?>
				</div>
			<?php endwhile; ?>
			<?php else : ?>
			<?php endif; ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
