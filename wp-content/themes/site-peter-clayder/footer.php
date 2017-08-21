		<!-- /#wrapper 
	  	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

	    <script src="http://localhost/www/peter-dev/site-estatico/js/index.js"></script>
		-->
		<?php wp_footer(); ?>
		<?php if(is_page('home')): ?>
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
				});
			</script>
			<script>
				$('#animateTest').addClass('animated infinite jello');
			</script>
		<?php endif; ?>
	</body>
</html>
