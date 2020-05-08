<?php get_header(); ?>

        <div class="container ben text-center">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="ass">Clube de Descontos</h1>
                </div>
            </div>

            <div class="row cd-first">
                <div class="col-md-offset-2 col-md-8">
                    <?php 
                        query_posts('pagename=textos-clube-de-descontos');
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

         

        <!--Telas Grandes(Desktop)-->
        <div class="container noticias ben" style="padding-bottom: 40px">

            
            <?php 
                $contalinha=0;
                if (have_posts()) : while (have_posts()) : the_post(); 

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
                        <?php the_content(); ?>
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