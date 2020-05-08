<?php get_header(); ?>

        <div class="banner-interno hidden-xs hidden-sm"></div>

        <?php 
            if (have_posts()) : while (have_posts()) : the_post(); 
        ?>

        <div class="container internas text-center">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="ass"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>

        <div class="container associacao internas">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'full', array( 'class' => 'img-responsive presimg' ) );
                    }
                    else {
                        echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
                            . '/img/bg-associacao.jpg" class="img-responsive presimg" />';
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="container sede">
            <div class="row">
                <div class="col-md-11" style="padding-bottom: 20px">
                    <?php the_content();?>
                </div>
            </div>

               
        </div>

        <?php endwhile; ?>
        <?php else : ?>
            <p>Desculpe, nenhum conteúdo disponível.</p>
        <?php endif; wp_reset_query(); ?>

<?php get_footer(); ?>