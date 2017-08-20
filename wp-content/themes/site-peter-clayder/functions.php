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
		$args = array('post_type'=>'post', 'number_posts'=>$qtd, 'order'=>'DESC');
		return get_posts($args);
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
		$home = 'Home';
		$sobre = 'Sobre';
		$habilidade = 'Habilidade';
		$projeto = 'Projeto';
		$contato = 'Contato';
		$blog ='Blog';
		if(is_page('home')){
			$home = '#wrapper';
			$sobre = '#sobre';
			$habilidade = '#habilidade';
			$projeto = '#projeto';
			$contato = '#contato';
			$blog = '#blog';
		}

		imprimeLiLink($home, "fa-home", "Peter Clayder", true);
		imprimeLiLink($sobre, "fa-info", "Sobre");
		imprimeLiLink($habilidade, "fa-thumbs-up", "Habilidades");
		imprimeLiLink($projeto, "fa-cubes", "Projetos");
		imprimeLiLink($blog, "fa-book", "Blog");
		imprimeLiLink($contato, "fa-envelope-o", "Contato");
	}

	function pre($array){
		echo "<pre>";
		print_r($array);
		echo "</pre>";
	}

