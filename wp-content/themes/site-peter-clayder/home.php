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
        <div class="bloco-info" id="sobre">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?php get_template_part('include/conteudo/apresentacao'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="bloco-info" id="servico">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?php get_template_part('include/conteudo/servico'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="bloco-info" id="habilidade">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?php get_template_part('include/conteudo/atividades'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="bloco-info-esp" id="projeto">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?php get_template_part('include/conteudo/projetos'); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('include/conteudo/blog-index'); ?>
    </div>
    <!-- /#page-content-wrapper -->
</div>

<?php get_footer(); ?>