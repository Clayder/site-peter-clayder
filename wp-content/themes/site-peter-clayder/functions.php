<?php
	// ativa o thumbnails
	add_theme_support('post-thumbnails');

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

