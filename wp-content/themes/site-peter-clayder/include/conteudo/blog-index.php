<?php $objPosts = getPostLimitado(3); ?>
<?php if (count($objPosts) > 0): ?>
	<h2 class="page-header">  Blog <a class="saiba-mais" href="<?= get_page_link_by_title("Blog"); ?>"> + notícias </a></h2>
	<div class="row" style="margin-top: 40px;">	
		<?php foreach ($objPosts as $post): ?>
			<?php setup_postdata($post); ?>
			<div class="projetos relevo-conteudo-projetos" id="blog-<?= $post->ID; ?>">
				<?= get_the_post_thumbnail(null, array(350, 161), array( 'class' => 'img-responsive' ) ); ?>
				<a href="<?= get_the_permalink(); ?>">
					<h4 class="titulo-projeto"><?= get_the_title(); ?></h4>
				</a>
				<p class="resumo-projeto">
					<?= imprimeResumo(get_the_excerpt()); ?>
				</p>
				<a class="more-link" href="<?= get_the_permalink(); ?>">Saiba mais</a>
			</div>
		<?php endforeach; ?>
	</div>
<?php else: ?>

<?php endif; ?>
