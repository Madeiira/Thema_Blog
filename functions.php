
 

<?php
 
        function my_wp_scripts() {
            
            wp_enqueue_style('bootstrap',
            sprintf('%s/assets/css/bootstrap.min.css', get_template_directory_uri()));
            wp_enqueue_style('style', get_stylesheet_uri());
            wp_enqueue_script('bootstrap',
            sprintf('%s/assets/css/bootstrap.min.js', get_template_directory_uri()), array('jquery'),null,true);
        
        }
  
            add_action('wp_enqueue_scripts','my_wp_scripts');
  
            add_theme_support('post-thumbnails');
            set_post_thumbnail_size(120,150);
  
    
    /* CRIAÇÃO DE CUSTOM POST TYPES */
    
        function theme_blog_post_type_postagem() { //function posts
            $labels=array(
                'name' => "Postagem",
                'singular_name' => "Postagem",
                'add_new' => "Adicionar Nova Postagem",
                'add_new_label' => "Adicionar Nova Postagem",
                'all_item' => "Todos as Postagens",
                'add_new_item' => "Adicionar Nova Postagem",
                'edit_item' => "Adicionar Nova Postagem",
                'new_item' => "Nova Postagem",
                'view_item' => "Visualizar Postagem",
                'search_item' => "Procurar Postagem",
                'not_found' => "Nenhuma Postagem Encontrada",
                'not_found_in_trash' => "Nenhuma postagem Na Lixeira"
                );
  
            $args=array(
            
                'labels' => $labels,
                'public' => true,
                'has_archive' => true,
                'publicly_queryable' => true, 
                'query_var' => true,
                'rewrite' => true,
                'capability_type' => 'post',
                'supports' => array (
                'title','editor','thumbnail','excerpt'
                    ),
                    'menu_position' => 5,
                    'exclude_from_search' => false
                    );
            
            register_post_type('postagem',$args); // name of the parameter 
            
            }
  
            add_action('init','theme_blog_post_type_postagem');
 
     
 
        function theme_blog_taxonomias() {   // Taxonomia que não possui pai/filho - Tema  //   Taxonomy not having parent / child - theme
        
          
            
            $labels=array(
                'name' => "Tema",
                'singular_name' => "Tema",
                'search_item' => "Procurar Tema",
                'all_items' => "Todos os Temas",
                'parent_item' => "Tema Pai",
                'parent_item_colon' => "Tema Pai",
                'edit_item' => "Editar Tema",
                'update_item' => "Atualizar Tema",
                'add_new_item' => "Adicionar Novo Tema",
                'new_item_name' => "Novo Tema",
                'menu_name' => "Tema"
            );
            
            $args=array(
                'hierarchical' => false,
                'labels' => $labels,
                'show_admin_column' => true,
                'query_var' => true,
                'rewrite' => array("slug"=>"temas")
             );
        
                register_taxonomy('temas','postagem',$args);
        
 
            $labels=array( //taxonomia  hierarquica -Publicadores  //  Hierarchical taxonomy - Publishers
                'name' => "Publicadores",
                'singular_name' => "Publicador",
                'search_item' => "Procurar Publicador",
                'all_items' => "Todos os Publicadores",
                'parent_item' => "Publicador Pai",
                'parent_item_colon' => "Publicador Pai",
                'edit_item' => "Editar Publicador",
                'update_item' => "Atualizar Publicador",
                'add_new_item' => "Adicionar Novo Publicador",
                'new_item_name' => "Novo Publicador",
                'menu_name' => "Publicador"
             );
  
            $args=array(
                'hierarchical' => true,
                'labels' => $labels,
                'show_admin_column' => true,
                'query_var' => true,
                'rewrite' => array("slug"=>"publicadores")
             );
                 register_taxonomy('publicadores','postagem',$args);
            
            }
            
                add_action('init','theme_blog_taxonomias');
        
 

?>
 