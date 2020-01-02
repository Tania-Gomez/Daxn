<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>

		<article class="EntradaBlog__container container mt-2">
        <div class="text-center mt-5 pt-5">
          <h2 class="EntradaBlog__title-xxxl mt-5"><?php the_title() ?></h2>

          <img class="w-100 h-auto my-4" src="<?php the_post_thumbnail('blog-featured', array('class' => 'w-100 h-auto')) ?>">
        </div>
				<p><?php the_content() ?></p>

              <!-- CTA -->
          <div class="text-center m-5 py-3">
            <h3>Ingeniería, coaching y técnicas terapéuticas. Movimiento. Transformación <a href="#" class=" btn btn-primary mr-2">CONTÁCTANOS</a></h3>
          </div>

          <div class="bread-crumb d-flex justify-content-between">
            <p class="EntradaBlog__fecha calendario">
							<i class="fas fa-calendar-alt pr-2"></i>
							<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time>
						</p>
            <p>Volver al Blog <i class="far fa-arrow-alt-circle-right"></i></p>
          </div>

    </article>

	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>

<?php get_footer() ?>
