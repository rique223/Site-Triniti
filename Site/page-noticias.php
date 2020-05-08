<?php get_header(); ?>

        <div class="container internas text-center">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="ass">Notícias</h1>
                </div>
            </div>
        </div>

         

        <div class="container noticias" style="padding-bottom: 20px">

             <?php 
                $contalinha=0;
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args = array('post_type' => 'post', 'posts_per_page' => 6, 'paged' => $paged);
                $loop = new WP_Query( $args );

                
                if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); 

                    if ($contalinha==0) {
                        echo '<div class="row post">';
                    }
            ?>

                    <div class="col-md-4">
                        <a href="<?php the_permalink(); ?>">
                            <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
                            }
                            else {
                                echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
                                    . '/img/semfoto.png" class="img-responsive" />';
                            }
                            ?>
                        </a>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_time( 'd \d\e F \d\e Y' ); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn bcolor ler-mais" role="button">Ler mais</a>
                    </div>


                    <?php 
                        if ($contalinha==2) {
                            echo "</div>";
                            $contalinha=0;
                        } else{
                            $contalinha++;
                        }
                     ?>

            
            <?php endwhile; ?>
            <?php wp_pagenavi( array('query' => $loop) ); ?>
            <?php else : ?>
                <p>Desculpe, nenhum conteúdo disponível.</p>
            <?php endif; wp_reset_query(); ?>


            <?php 
                if ($contalinha>=1) {
                    echo "</div>";
                }
             ?>

        </div>



 <?php get_footer(); ?>