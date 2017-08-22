		
		<?php $classFooterPag = "footerPagina"; ?>
		<?php $isPrincipal = false; ?>
		<?php if(is_page('home') || (is_front_page() && is_home())): ?>
			<?php $classFooterPag = "footerPrincipal"; ?>
			<?php $isPrincipal = false; ?>
		<?php endif; ?>
		<div class="footer <?= $classFooterPag; ?>">
			<div class="container" >
				<div class="row">
					<div class="col-md-8"><span class="font14">© 2017 - 2017 Site Peter Clayder - Todos os direitos reservados.</span></div>
					<div class="col-md-4"><span class="font14">Mantido à base de <i class="fa fa-coffee margin-left" aria-hidden="true"></i></span></div>			
				</div>
			</div>
		</div>
		<?php wp_footer(); ?>
		<?php if($isPrincipal): ?>
			<script>
				function blink(selector) {
					$(selector).fadeOut('slow', function() {
						$(this).fadeIn('slow', function() {
							blink(this);
						});
					});
				}
				blink('#cursor');
			</script>

			<script>
				var div = document.getElementById('texto-topo');

				var texto = 'Carioca . * Desenvolvedor Web . * Apaixonado por * tecnologias . * Viciado em * filmes e séries .';

				function escrever(frase, el) {
						var char = frase.split('').reverse();
						var typer = setInterval(function () {
							if (!char.length){
								//return clearInterval(typer);
								el.innerHTML = '';
								clearInterval(typer);
								return escrever(texto, el);
							}
							var next = char.pop();
							if(next === "*"){
								el.innerHTML = '';
								next = char.pop();
							}
							el.innerHTML += next;
						}, 200);
				}

				escrever(texto, div);

			</script>

			
			<script>
				// deslizar Ancora
				var $doc = $('html, body');
				$('a').click(function() {
					$doc.animate({
						scrollTop: $( $.attr(this, 'href') ).offset().top
					}, 500);
					return false;
				});
			</script>
			<script>
				$(function(){
					$(".skill").hover(
						function(e){
							$("#"+this.id).addClass('animated rotateIn');
						},
						function(){
							$("#"+this.id).removeClass('animated rotateIn');
						}
					);

					$(".projetos").hover(
						function(e){
							$("#"+this.id).addClass('animated pulse');
						},
						function(){
							$("#"+this.id).removeClass('animated pulse');
						}
					);
					$("a.saiba-mais").hover(
						function(e){
							$("a.saiba-mais").addClass('animated rubberBand');
						},
						function(){
							$("a.saiba-mais").removeClass('animated rubberBand');
						}
					);
				});
			</script>
			<script>
				$('#animateTest').addClass('animated infinite jello');
			</script>
		<?php endif; ?>
	</body>
</html>


