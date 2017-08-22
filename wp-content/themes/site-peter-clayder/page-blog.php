<?php
/* 
Template Name: Blog
*/ 
?>
<?php $nomePagina = "blog"; ?>
<?php $url = get_home_url(); ?>
<?php include(locate_template('include/paginas/topo-paginas.php')); ?>
<?php $args = array('post_type'=>'post', 'order'=>'DESC'); ?>
<?php $objPosts = get_posts($args); ?>
<?php foreach ($objPosts as $post): ?>
    <?php setup_postdata($post); ?>
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
<?php endforeach; ?>
<div class="row paginacao" >
    <!-- Pager -->
    <ul class="pager">
        <?php wordpress_pagination(); ?>
    </ul>
</div>
<?php get_template_part('include/paginas/footer-paginas'); ?>      


