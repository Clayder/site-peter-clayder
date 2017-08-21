<?php $objPosts = getPostLimitado(3); ?>
<?php if (count($objPosts) > 0): ?>
	<h2 class="page-header">  Blog </h2>
	<div class="row">
		<div class="col-lg-12">
			<div class="relevo-conteudo" id="texto-projetos">
				<p class="texto">
					Amo o que faço, adoro desenvolver para resolver problemas, automatizar
					coisas e ajudar pessoas.
				</p>
			</div>
		</div>
	</div>
	<div class="row" style="margin-top: 40px;">	
		<ul>
			<?php foreach ($objPosts as $post): ?>
				<?php setup_postdata($post); ?>
				
					<div class="projetos relevo-conteudo-projetos" id="blog-"<?= $post->ID; ?>>
						<?= get_the_post_thumbnail(null, array(350, 161), array( 'class' => 'img-responsive' ) ); ?>
						<a href="<?= get_the_permalink(); ?>">
							<h4 class="titulo-projeto"><?= get_the_title(); ?></h4>
						</a>
						<p class="resumo-projeto">
							<?= get_the_content( "Continue lendo"); ?>
						</p>
					</div>
			
			<?php endforeach; ?>
		</ul>
	</div>
<?php else: ?>

<?php endif; ?>
