<?php 
/**
Template Name: Ambientação
*/
 ?>
<?php get_header(); ?>

    <div id="content">
           <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="artigo">
                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_content(); ?></p>
                </div>            
            <?php endwhile; ?>
                 
            <?php endif; ?>
    </div>   

<?php get_footer(); ?>
