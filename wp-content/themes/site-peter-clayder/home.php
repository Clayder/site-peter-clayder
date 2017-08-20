<?php get_header(); ?>
<div id="wrapper">
    <div class="overlay"></div>
	<?php get_sidebar(); ?>
	<?php get_header("topo"); ?>
    <!-- Page Content -->
    <div id="page-content-wrapper">
		<button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
			<span class="hamb-top"></span>
			<span class="hamb-middle"></span>
			<span class="hamb-bottom"></span>
		</button>
        <div class="container">
            <div class="row" id="sobre">
                <div class="col-lg-12">
                    <?php get_template_part('include/conteudo/apresentacao'); ?>
                </div>
            </div>
            <div class="row" id="habilidade">
                <div class="col-lg-12">
                    <?php get_template_part('include/conteudo/atividades'); ?>
                </div>
            </div>
            <div class="row" id="projeto">
                <div class="col-lg-12">
                    <?php get_template_part('include/conteudo/projetos'); ?>
                </div>
            </div>
			<div class="row" id="blog">
                <div class="col-lg-12">
                    <?php get_template_part('include/conteudo/blog-index'); ?>
                </div>
            </div>
            <div class="row" id="contato">
                <div class="col-lg-12">
                	<?php get_template_part('include/conteudo/contato'); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>

<?php get_footer(); ?>