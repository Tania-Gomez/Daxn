# PROYECTO DEVELAXN

## Memoria del Proyecto
- Cargar WP en local
- Creación de Base de Datos y usuario
			Base de Datos: daxn
			Usuario: daxn
			Pass DB: daxn_DB
- Ingresar a WP
			usuario WP: admin_Daxn20
			clave WP: Daxn_2020
			mail: gomez.tania@gmail.com
- Borrar tema por defecto y cargar Boilerplate (renombrado DevelAxn-theme)
			Modificar archivo style.css
			Cambiar screenshot
- En wp-config activar debug mode
			define( 'WP_DEBUG', true );
			define( 'WP_DEBUG_LOG', true );
			define( 'WP_DEBUG_DISPLAY', true );
- Inicializar GIT en carpeta wp-content
- Traspasar estilos a WP
			En assets de Boilerplate pegar mis estilos
			Nota: que hay que llamar a aos.css y aos.js (animation on scroll)
			LLamar a los estilos en
			wp-content/functions/wp_enqueue-style.php
			LLamar a los scripts en
			wp-content/functions/wp_enqueue-style.php
- Activar Bootstrap 4 en
			theme/functions/_ _ options (true)
- Tamaño personalizado de imágenes
			En functions/add_image_sizes.php
			add_image_size( 'rounded', 320, 320, true );   // imagenes clientes
			add_image_size( 'superbig', 1980, 985, true );   // top img pagina inicio y servicios
			add_image_size( 'blog_featured', 1400, 870, true );   // img destacada de blog
			add_image_size( 'blog_index', 440, 320, true );   // img en pagina indice de blog
			add_image_size( 'services_index', 700, 400, true );   // img en seccion indice de servicios en pg inicio