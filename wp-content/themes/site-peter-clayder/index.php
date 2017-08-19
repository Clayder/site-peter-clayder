<?php get_header(); ?>
<?php //get_sidebar(); ?>
<?php get_header("topo"); ?>

<?php if ( have_posts() ): ?>
	<ul>
	    <?php while(have_posts()): ?>
	        <?php the_post(); ?>
	        <li>
	        	<?php echo get_the_permalink(); ?>
	        </li>
	        <li><?php echo get_the_title(); ?> </li>
			<li><?php echo get_the_content(); ?></li>
	    <?php endwhile; ?>
    </ul>
<?php else: ?>
    
<?php endif; ?>

<?php get_footer(); ?>