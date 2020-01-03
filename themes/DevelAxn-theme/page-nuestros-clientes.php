<?php get_header() ?>
	<?php the_post() ?>
	<main class="container">
    <p class="mt-3 pt-3 text-white">.</p>
    <h2 class="text-center m-5 pt-3"><?php the_title() ?></h2>
    <div class="row">
      <?php $arg = array(
       'post_type'     => 'customers',
       'posts_per_page' => -1,
       );
       $get_arg = new WP_Query( $arg );
       while ( $get_arg->have_posts() ) {
       $get_arg->the_post();
       ?>
			 <div class="col-md-4 p-3">
				 <?php the_post_thumbnail('blog_index', array('class' => 'w-75 h-auto data-aos="flip-left" mb-4')) ?>
				 <h3 class="sectionCustomers__title-xl text-secondary"><?php the_title(); ?></h3>
				 <h5 class="mt-2"><?php echo get_post_meta($post->ID, 'position', true); ?></h5>
				 <p class="mt-2"><?php echo get_post_meta($post->ID, 'bajada', true); ?></p>
				 <!-- botoncito colapsable -->
             <div class="sectionCustomers__container-collapsible container">
                <?php
                 echo '<a href="#demo-'.get_the_ID().'" class="sectionCustomers__btn btn btn-sm btn-outline-primary" data-toggle="collapse">ver +</a>';
                 echo '<div id="demo-'.get_the_ID().'" class="collapse">';
                 echo '<p class="sectionCustomers__paragraph font-italic mt-2">'.get_the_content().'</p>';
                 echo '</div>';
                ;?>
             </div>
			 </div>
				 <?php } wp_reset_postdata(); ?>
		</div>
	</main>
<?php get_footer() ?>
