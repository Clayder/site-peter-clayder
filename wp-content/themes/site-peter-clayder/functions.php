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

	function pre($array){
		echo "<pre>";
		print_r($array);
		echo "</pre>";
	}