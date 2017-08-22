<?php get_header(); ?>
<div id="wrapper">
    <div class="overlay"></div>
	<?php get_sidebar(); ?>
	<header class="paginas">
        <a href="<?= $url; ?>">    
            <h1 class="paginas">
                <span style="color: #333333"><\</span> 
                    <?= $nomePagina; ?> 
                <span style="color: #333333">></span> Peter Clayder 
            </h1>
        </a>
    </header>
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
			<span class="hamb-top icon-button-menu"></span>
			<span class="hamb-middle icon-button-menu"></span>
			<span class="hamb-bottom icon-button-menu"></span>
		</button>
        <div class="container">
            <div class="row" style="margin-top: 100px;">
                <div class="col-lg-12">