<?php get_header() ?>
	<?php the_post() ?>
	<main class="container">
    <h2 class="text-center m-5"><?php the_title() ?></h2>
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
				 <div data-aos="flip-left">
				 		<?php the_post_thumbnail('blog_index', array('class' => 'w-75 h-auto mb-4')) ?>
				 </div>
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

		<!-- CTA -->
		<div class="cta__container text-center">
				<h3 class="cta__text text-center m-4 py-3">Si quieres saber qué podemos hacer por ti, ¡escríbenos!<a href="https://api.whatsapp.com/send?phone=56968447328&text=Hola,%20estoy%20interesad@%20en%20saber%20cómo%20la%20alianza%20entre%20ingeniería,%20coaching%20y%20técnicas%20terapéuticas%20pueden%20ayudarme%20a%20transformar%20mi%20empresa." target="_blank" class="cta__btn btn btn-primary ml-2" data-aos="flip-left">WhatsApp</a></h3>


			<!-- <h3 class="cta__text m-4 py-3">Si quieres saber qué podemos hacer por ti <a href="contacto" class="SectionAboutUs__btn btn btn-primary ml-2" data-aos="flip-left">CONTÁCTANOS</a></h3> -->
		</div>

	</main>

	<!-- seccion contacto -->
	<?php get_template_part('_includes/contact', 'section') ?>
	
<?php get_footer() ?>
