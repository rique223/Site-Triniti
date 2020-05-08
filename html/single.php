<?php get_header(); ?>


    
    <div class="banner-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php 
                    if (have_posts()) : while (have_posts()) : the_post(); 
                ?>

                    <?php the_content();?>

                <?php endwhile; ?>
                <?php else : ?>
                    <p>Desculpe, nenhum conteúdo disponível.</p>
                <?php endif; wp_reset_query(); ?>
            </div>
        </div>
    </div>

       

<?php get_footer(); ?>