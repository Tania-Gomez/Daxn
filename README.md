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
			functions/_ _ options (true)
