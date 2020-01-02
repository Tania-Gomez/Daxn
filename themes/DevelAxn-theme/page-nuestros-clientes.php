<?php get_header() ?>
	<?php the_post() ?>

	<main class="container">
    <p class="mt-3 pt-3 text-white">.</p>
    <h2 class="text-center m-5 pt-3"><?php the_title() ?></h2>
    <div class="row">

      <?php $arg = array(
       'post_type'     => 'cliente',
       'posts_per_page' => -1,
       );

       $get_arg = new WP_Query( $arg );

       while ( $get_arg->have_posts() ) {
       $get_arg->the_post();
       ?>

			 <div class="col-md-4 p-3">
				 <?php the_post_thumbnail('blog_index', array('class' => 'w-75 h-auto data-aos="flip-left" mb-4')) ?>
				 <h3 class="sectionCustomers__title-xl text-secondary"><?php the_title(); ?></h3>
				 <p class="sectionCustomers__paragraph font-italic"><?php the_content(); ?></p>
			 </div>
 <!-- data-aos="flip-left" alt="Cliente DevelAxn"> -->
       <?php } wp_reset_postdata(); ?>
    </div>
	</main>

<?php get_footer() ?>
