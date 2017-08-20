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
	<?php if ( have_posts() ): ?>
		<ul>
			<?php while(have_posts()): ?>
				<a href="<?= get_the_permalink(); ?>">
					<div class="projetos relevo-conteudo-projetos" id="projeto-"<?= $post->ID; ?>>
						<?= get_the_post_thumbnail(null, array(350, 161), array( 'class' => 'img-responsive' ) ); ?>
						<h4 class="titulo-projeto"><?= get_the_title(); ?></h4>
						<p class="resumo-projeto">
							<?php the_excerpt(); ?>
							
						</p>
					</div>
				</a>
				<?php the_post(); ?>
				<li>
					<a href="">
						
					</a>
				</li>
				<li> </li>
				<li><?php echo get_the_content(); ?></li>
			<?php endwhile; ?>
		</ul>
	<?php else: ?>

	<?php endif; ?>
	
	<a href="teste.html">
		<div class="projetos relevo-conteudo-projetos" id="projeto-2">
			<img class="img-responsive" src="images/SistemaFinanceiro.png" alt="img01"/>
			<h4 class="titulo-projeto">Sistema financeiro</h4>
			<p class="resumo-projeto">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
				et dolore magna aliqua.
			</p>
		</div>
	</a>
	<a href="teste.html">
		<div class="projetos relevo-conteudo-projetos" id="projeto-3">
			<img class="img-responsive" src="images/SistemaFinanceiro.png" alt="img01"/>
			<h4 class="titulo-projeto">Sistema financeiro</h4>
			<p class="resumo-projeto">
				Sistema financeiro
			</p>
		</div>
	</a>
</div>
