<?php get_header(); ?>


        <div class="banner-interno hidden-xs hidden-sm"></div>

        <div class="container internas associacao text-center">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="pres">Presidência</h1>
                </div>
            </div>
        </div>

        <?php 
            if (have_posts()) : while (have_posts()) : the_post(); 
        ?>

        <div class="container internas" style="padding-bottom: 20px">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'full', array( 'class' => 'img-responsive presimg' ) );
                    }
                    else {
                        echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
                            . '/img/bg-presidencia.jpg" class="img-responsive presimg" />';
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="container" style="padding-bottom: 25px">
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <h2 class="presidenciah1">Presidência Triniti</h2>

                    <div class="presidenciap">
                        <?php the_content();?>
                    </div>
                </div>
            </div>
        </div>

        <?php endwhile; ?>
        <?php else : ?>
            <p>Desculpe, nenhum conteúdo disponível.</p>
        <?php endif; wp_reset_query(); ?>

<?php get_footer(); ?>