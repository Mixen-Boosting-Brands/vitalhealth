<?php get_header(); ?>

	<section class="interna py-60">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h1 class="text-uppercase"><?php esc_html_e( 'Error 404: Página no encontrada', 'html5blank' ); ?></h1>
                </div>
			<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
				<div class="col-12">
					<p>La página solicitada no existe o cambió de ubicación. <a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'Regresar al inicio', 'html5blank' ); ?></a>.</p>
				</div>
			<?php endwhile; ?>
			<?php else : ?>
			<?php endif; ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
