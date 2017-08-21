<?php
	// ativa o thumbnails
	add_theme_support('post-thumbnails');

	function my_wp_scripts(){
		wp_enqueue_style('normalize', sprintf('%s/assets/normalize/normalize.min.css',get_template_directory_uri()));
		wp_enqueue_style('bootstrap', sprintf('%s/assets/bootstrap/css/bootstrap.min.css',get_template_directory_uri()));
		wp_enqueue_style('style_tema', sprintf('%s/assets/css/style.css',get_template_directory_uri()));
		wp_enqueue_style('mystyle', sprintf('%s/assets/css/my-style.css',get_template_directory_uri()));
		wp_enqueue_style('component', sprintf('%s/assets/css/component.css',get_template_directory_uri()));
		wp_enqueue_script('bootstrap', sprintf('%s/assets/js/fontawesome.js',get_template_directory_uri()));
		wp_enqueue_script('bootstrap', sprintf('%s/assets/js/modernizr.custom.js',get_template_directory_uri()));
		wp_enqueue_style('style',get_stylesheet_uri());
		wp_enqueue_script('jqueryjs', sprintf('%s/assets/js/jquery.min.js',get_template_directory_uri()),['jquery'],null,true);
		wp_enqueue_script('bootstrapjs', sprintf('%s/assets/bootstrap/js/bootstrap.min.js',get_template_directory_uri()),['jquery'],null,true);
		wp_enqueue_script('jsindex', sprintf('%s/assets/js/index.js',get_template_directory_uri()),null,null,true);
	}
	
	add_action('wp_enqueue_scripts' , 'my_wp_scripts');
	
	/**
	 * Retorna uma quantidade de post especifica
	 *
	 * @param int $qtd
	 * @return OBJECT
	 */
	function getPostLimitado($qtd){
		$args = array('post_type'=>'post', 'showposts'=>$qtd, 'order'=>'DESC');
		return get_posts($args);
	}

	function wordpress_pagination()
	{
		global $wp_query;
	
		$big = 999999999;
	
		echo paginate_links(array(
			'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
			'format' => '?paged=%#%',
			'current' => max(1, get_query_var('paged')),
			'total' => $wp_query->max_num_pages,
			'type'               => 'list',
		));
	}

	function imprimeLiLink($href, $icone, $titulo, $active = false){
		$brand = "";
		if($active){
			$brand = "class='sidebar-brand'";
		}
		echo "<li ".$brand.">";
			echo "<a href='".$href."'><i class='fa fa-fw ".$icone."'></i> ".$titulo." </a>";
		echo "</li>";
	}

	function imprimeMenu(){
		$home = '#wrapper';
		$sobre = '#sobre';
		$habilidade = '#habilidade';
		$projeto = get_page_link_by_title("Projetos");
		$contato = '#contato';
		$blog = get_page_link_by_title("Blog");
		if(!is_page('home')){
			$home = get_home_url();
			$sobre = get_home_url()."#sobre";
			$habilidade = get_home_url()."#habilidade";
			$contato = get_home_url()."#contato";
		}
		imprimeLiLink($home, "fa-home", "Peter Clayder", true);
		imprimeLiLink($sobre, "fa-info", "Sobre");
		imprimeLiLink($habilidade, "fa-thumbs-up", "Habilidades");
		imprimeLiLink($projeto, "fa-cubes", "Projetos");
		imprimeLiLink($blog, "fa-book", "Blog");
		imprimeLiLink($contato, "fa-envelope-o", "Contato");
	}

	function get_page_link_by_title($title){
		$page = get_page_by_title($title);
		return $page->guid;
	}

	function pre($array){
		echo "<pre>";
		print_r($array);
		echo "</pre>";
	}

	/**
	 * --------------------------------------------------------------
	 *  Criação de Custom Post Types 
	 * --------------------------------------------------------------
	 */
	function bootstrap_son_post_type_projetos(){
		$labels = array(
		
		'name' => "Projetos",
			'singular_name' => "Projeto",
			'add_new'=> "Adicionar Novo Projeto",   
			'add_new_label' => "Adicionar Novo Projeto",
			'all_item' => "Todos os projetos", 
			'add_new_item'=> "Adicionar Novo Projeto",
			'edit_item' => "Editar Projeto",
			'new_item' =>  "Novo Projeto",
			'view_item' => "Visualizar Projeto",
			'search_item' => "Procurar Projeto",
			'not_found' => "Nenhum Projeto Encontrado",
			'not_found_in_trash' => "Nenhum Projeto Na Lixeira"
		);
		$args = array(
			
			'labels' => $labels, 
			'public' => true,
			'has_archive' => true,
			'publicly_queryable' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'supports' => array(
					'title','editor','thumbnail','excerpt'  
				),
			'menu_position' => 5, 
			'exclude_from_search' => false              
		);
		register_post_type('projetos',$args);
	}
	add_action('init','bootstrap_son_post_type_projetos');