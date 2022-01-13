<?php
	if ( ! function_exists('wpn_terminos') ) {

		// Register Custom Post Type terminos
		function wpn_terminos() {

			$labels = array(
				'name'                  => _x( 'terminos', 'Post Type General Name', 'text_domain' ),
				'singular_name'         => _x( 'termino', 'Post Type Singular Name', 'text_domain' ),
				'menu_name'             => __( 'terminos', 'text_domain' ),
				'name_admin_bar'        => __( 'terminos', 'text_domain' ),
				'archives'              => __( 'Archivo de terminos', 'text_domain' ),
				'attributes'            => __( 'Atributos de termino', 'text_domain' ),
				'parent_item_colon'     => __( 'termino padre', 'text_domain' ),
				'all_items'             => __( 'Todas las terminos', 'text_domain' ),
				'add_new_item'          => __( 'Añadir nuevo termino', 'text_domain' ),
				'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
				'new_item'              => __( 'Nieva termino', 'text_domain' ),
				'edit_item'             => __( 'Editar termino', 'text_domain' ),
				'update_item'           => __( 'Actualizar termino', 'text_domain' ),
				'view_item'             => __( 'Ver termino', 'text_domain' ),
				'view_items'            => __( 'Ver termino', 'text_domain' ),
				'search_items'          => __( 'Buscar terminos', 'text_domain' ),
				'not_found'             => __( 'No encontrado', 'text_domain' ),
				'not_found_in_trash'    => __( 'No encontrado en la basura', 'text_domain' ),
				'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
				'set_featured_image'    => __( 'Configurar imagen destacada', 'text_domain' ),
				'remove_featured_image' => __( 'Borrar imagen destacada', 'text_domain' ),
				'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
				'insert_into_item'      => __( 'Insertar en el termino', 'text_domain' ),
				'uploaded_to_this_item' => __( 'Actualizar en esta termino', 'text_domain' ),
				'items_list'            => __( 'Listado de terminos', 'text_domain' ),
				'items_list_navigation' => __( 'Lista navegable de terminos', 'text_domain' ),
				'filter_items_list'     => __( 'Filtro lista de terminos', 'text_domain' ),
			);
			$args = array(
				'label'                 => __( 'termino', 'text_domain' ),
				'description'           => __( 'Entradas de terminos', 'text_domain' ),
				'labels'                => $labels,
				'supports'              => array( 'title', 'excerpt', 'editor', 'thumbnail', 'custom-fields' ),
				'taxonomies'            => array( 'category', 'post_tag' ),
				'hierarchical'          => false,
				'public'                => true,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'menu_position'         => 5,
				'show_in_admin_bar'     => true,
				'show_in_nav_menus'     => true,
				'can_export'            => true,
				'has_archive'           => true,
				'exclude_from_search'   => false,
				'publicly_queryable'    => true,
				'capability_type'       => 'page',
			);
			register_post_type( 'terminos', $args );

		}
		add_action( 'init', 'wpn_terminos', 0 );

		}
		if ( ! function_exists('wpn_documentos') ) {

			// Register Custom Post Type terminos
			function wpn_documentos() {

				$labels = array(
					'name'                  => _x( 'documentos', 'Post Type General Name', 'text_domain' ),
					'singular_name'         => _x( 'documento', 'Post Type Singular Name', 'text_domain' ),
					'menu_name'             => __( 'documentos', 'text_domain' ),
					'name_admin_bar'        => __( 'documentos', 'text_domain' ),
					'archives'              => __( 'Archivo de documentos', 'text_domain' ),
					'attributes'            => __( 'Atributos de documento', 'text_domain' ),
					'parent_item_colon'     => __( 'documento padre', 'text_domain' ),
					'all_items'             => __( 'Todas las documentos', 'text_domain' ),
					'add_new_item'          => __( 'Añadir nuevo documento', 'text_domain' ),
					'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
					'new_item'              => __( 'Nieva documento', 'text_domain' ),
					'edit_item'             => __( 'Editar documento', 'text_domain' ),
					'update_item'           => __( 'Actualizar documento', 'text_domain' ),
					'view_item'             => __( 'Ver documento', 'text_domain' ),
					'view_items'            => __( 'Ver documento', 'text_domain' ),
					'search_items'          => __( 'Buscar documentos', 'text_domain' ),
					'not_found'             => __( 'No encontrado', 'text_domain' ),
					'not_found_in_trash'    => __( 'No encontrado en la basura', 'text_domain' ),
					'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
					'set_featured_image'    => __( 'Configurar imagen destacada', 'text_domain' ),
					'remove_featured_image' => __( 'Borrar imagen destacada', 'text_domain' ),
					'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
					'insert_into_item'      => __( 'Insertar en el documento', 'text_domain' ),
					'uploaded_to_this_item' => __( 'Actualizar en esta documento', 'text_domain' ),
					'items_list'            => __( 'Listado de documentos', 'text_domain' ),
					'items_list_navigation' => __( 'Lista navegable de documentos', 'text_domain' ),
					'filter_items_list'     => __( 'Filtro lista de documentos', 'text_domain' ),
				);
				$args = array(
					'label'                 => __( 'documento', 'text_domain' ),
					'description'           => __( 'Entradas de documentos', 'text_domain' ),
					'labels'                => $labels,
					'supports'              => array( 'title', 'excerpt', 'editor', 'thumbnail', 'custom-fields' ),
					'taxonomies'            => array( 'category', 'post_tag' ),
					'hierarchical'          => false,
					'public'                => true,
					'show_ui'               => true,
					'show_in_menu'          => true,
					'menu_position'         => 5,
					'show_in_admin_bar'     => true,
					'show_in_nav_menus'     => true,
					'can_export'            => true,
					'has_archive'           => true,
					'exclude_from_search'   => false,
					'publicly_queryable'    => true,
					'capability_type'       => 'page',
				);
				register_post_type( 'documentos', $args );

			}
			add_action( 'init', 'wpn_documentos', 0 );

			}
