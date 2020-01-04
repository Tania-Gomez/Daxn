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

		<!-- cta-programas -->
		<?php get_template_part('_includes/cta', 'programas') ?>

	</main>

<?php get_footer() ?>
