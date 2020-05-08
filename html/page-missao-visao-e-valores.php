<?php get_header(); ?>

        <div class="box-mvv">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-3 col-md-3">
                        <h1>Missão<span  style="color: #ffcf2e">, Visão e Valores</h1>
                    </div>
                </div>
            </div>
        </div>

        <?php 
            if (have_posts()) : while (have_posts()) : the_post(); 
        ?>

        <div class="container mvv">
            <div class="row mvv-first">
                <div class="col-md-12" style="padding-bottom: 20px;padding-top: 20px">
                    
                    <?php the_content(); ?>

                </div>
            </div>
            
        </div>

        <?php endwhile; ?>
        <?php else : ?>
            <p>Desculpe, nenhum conteúdo disponível.</p>
        <?php endif; wp_reset_query(); ?>

<?php get_footer(); ?>