<?php get_header() ?>
	<?php the_post() ?>

	<!-- <header class="container-fluid position-relative mt-5 pt-3 bg-warning">
		<?php the_post_thumbnail('super-big', array('class' => 'w-100 h-auto')) ?>
	</header> -->

	<header class="w-100 text-center mt-5">
			<div class="headerInicio__jumbotron">
				<?php the_post_thumbnail('super-big', array('class' => 'w-100 h-auto')) ?>
			</div>
	</header>

	<main class="SectionPrograma__container container">
		<h2 class="SectionPrograma__title-xxxl text-center my-5"><?php the_title() ?></h2>
		<div class="row">
			<p><?php the_content() ?></p>
		</div>

		<div class="cta text-center">
				<h3 class="text-center m-4 pt-3 pb-4"><a href="#" class="btn btn-primary mr-2">CONTÁCTANOS</a>Si quieres cotizar algún programa o quieres que desarrollemos uno a tu medida</h3>
		</div>

	</main>

<?php get_footer() ?>
