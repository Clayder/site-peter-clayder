<?php $nomePagina = "blog"; ?>
<?php include(locate_template('include/paginas/topo-paginas.php')); ?>
<?php if(have_posts()):?>
    <?php while(have_posts()): the_post(); ?>
        <div class="row">
            <div class="col-lg-12 conteudo-lista-post">
                <a href="<?= get_the_permalink(); ?>"><h2><?= get_the_title(); ?></h2></a>
                <p class="text-right">
                    <span style="color: #01579b"> <?php the_time('j \d\e F \d\e Y') ?> </span>
                </p>
                <?php the_content('Leia mais'); ?>
                
            </div>
        </div>
        <hr>
    <?php endwhile; ?>
<?php endif; ?>
<div class="row paginacao" >
    <!-- Pager -->
    <ul class="pager">
        <?php wordpress_pagination(); ?>
    </ul>
</div>
<?php get_template_part('include/paginas/footer-paginas'); ?>      

