<?php get_header(); ?>

        <div class="fluid_container">
            <div class="camera_wrap camera_emboss pattern_0" id="camera_wrap_4">
                <?php 
                    query_posts('post_type=lista-banners&posts_per_page=-1');
                    if (have_posts()) : while (have_posts()) : the_post();

                        if (get_post_meta($post->ID, '_url_banners', true)) {
                    ?>
                            <div data-src="<?php the_post_thumbnail_url('full'); ?>" data-link="<?php echo get_post_meta($post->ID, '_url_banners', true); ?>"></div>
                    <?php } else{ ?>
                            <div data-src="<?php the_post_thumbnail_url('full'); ?>"></div>
                    <?php } ?>

                <?php endwhile; ?>
                <?php else : ?>
                    <p>Desculpe, nenhum conteúdo disponível.</p>
                <?php endif; wp_reset_query(); ?>
            </div>
        </div>

         <!--Telas Grandes(Desktop)-->
        <div class="box-home hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 serdiv">
                        <h2 class="serh2"><span class="ser">Quero saber mais sobre os benefícios do</span> ASSOCIADO TRINITI!</h2>

                        <form action="https://oferta.triniti.org.br/triniti-agradecimento" method="post">
                                <input type="text" name="nome" class="form-control" placeholder="Digite seu nome*">
                                <input type="email" name="email" class="form-control" placeholder="Digite seu melhor e-mail">
                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="text" name="telefone" class="form-control" placeholder="Digite seu telefone*">
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-block">Cadastre-se</button>
                                    </div>
                                </div>
                        </form>
                    </div>

                    <div class="col-md-offset-2 col-md-5 jasou-marg">
                        <h2 class="margem serh2-2">Já sou <span class="sou">Associado Triniti</span></h2>
                        <a href="<?php bloginfo('url'); ?>/beneficios" class="btn btn-default btnc">Benefícios</a>
                    </div>
                </div>
            </div>
        </div>

        <!--Telas Pequenas(Mobile)-->
        <div class="box-home-mobile visible-xs-* hidden-sm hidden-md hidden-lg hidden-xl">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 quero-ser">
                        <h2 style="text-transform: uppercase">Quero ser <span class="ser">Associado Triniti</span></h2>

                        <form action="https://oferta.triniti.org.br/triniti-agradecimento" method="post">
                                <input type="text" name="nome" class="form-control" placeholder="Digite seu nome*">
                                <input type="email" name="email" class="form-control" placeholder="Digite seu melhor e-mail">
                                <input type="text" name="telefone" class="form-control" placeholder="Digite seu telefone*">
                                <button type="submit" class="btn btn-block btn-default">Cadastre-se</button>
                        </form>
                    </div>
                </div>

                <div class="row" style="padding-top: 9px">
                    <div class="col-xs-12 ja-sou">
                        <h2 style="text-transform: uppercase">Já sou <span class="sou">Associado Triniti</span></h2>
                        <a href="<?php bloginfo('url'); ?>/beneficios" class="btn btn-block btnc">Benefícios</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container beneficios internas">
            <div class="row">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="asso">Benefícios do Associado Triniti</h2>
                        <p>Serviços e Produtos para facilitar a sua vida e te fazer economizar muito!</p>
                    </div>
                </div>

                <?php 
                    $contalinha=0;
                    query_posts('post_type=beneficios&posts_per_page=6');
                    if (have_posts()) : while (have_posts()) : the_post();
                        if($contalinha==0){
                            echo '<div class="row">';
                        }
                ?>

                    <div class="col-md-4 text-center">
                        <?php 
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
                            }
                        ?>
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo excerpt(20); ?></p>
                    </div>
                    
                <?php 
                    if($contalinha==2) {
                        echo '</div>';
                        $contalinha = 0;
                    } else{
                        $contalinha++;
                    }
                ?>

                <?php endwhile; ?>
                <?php 
                    if($contalinha != 0) {
                        echo '</div>';
                    }
                ?>
                <?php else : ?>
                    <p>Desculpe, nenhum conteúdo disponível.</p>
                <?php endif; wp_reset_query(); ?>
                
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="<?php bloginfo('url'); ?>/beneficios" class="btn bcolor">Saiba mais</a>
                    </div>
                </div>

            </div>
        </div>

        <hr>

        <!--Telas Grandes(Desktop)-->
        <div class="container noticias hidden-xs">
            <div class="row">
                <div class="col-md-1">
                    <h3>Notícias</h3>
                </div>

                <div class="col-md-offset-4 col-md-7">
                    <div class="row text-right">
                        <a href="https://www.facebook.com/trinitisocorromutuo/" target="blank">
                            <div class="col-md-4" style="padding-right: 0;">
                                <p style="margin-top: 4px;"><img src="<?php bloginfo('template_url'); ?>/img/ico-facebook.png" alt=""> trinitisocorromutuo</p>
                            </div>
                        </a>
                        
                        <a href="https://www.instagram.com/trinitioficial/" target="blank">
                            <div class="col-md-3" style="padding-left: 0;">
                                <p style="margin-top: 4px;"><img src="<?php bloginfo('template_url'); ?>/img/ico-instagram.png" alt=""> trinitioficial</p>
                            </div>
                        </a>

                        <div class="col-md-5">
                            <div class="row youtube">
                                <a href="https://www.youtube.com/channel/UCtaq_giFrbXUqc1lyVTPi3g/?guided_help_flow=5&disable_polymer=true/" target="blank">
                                    <div class="col-md-2" style="padding-right: 0;">
                                        <svg height="32px" width="32px" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube" class="svg-inline--fa fa-youtube fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>
                                    </div>

                                    <div class="col-md-10" style="padding-left: 0;">
                                        <p> TRINITI Socorro Mútuo e Benefícios</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row post">
                <div class="col-md-12" style="padding-right: 0; padding-left: 0">
                    <?php 
                        query_posts('post_type=post&posts_per_page=3');
                        if (have_posts()) : while (have_posts()) : the_post(); 
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
                        </div>

                    <?php endwhile; ?>
                    <?php else : ?>
                        <p>Desculpe, nenhum conteúdo disponível.</p>
                    <?php endif; wp_reset_query(); ?>
                </div>
            </div>

            <div class="row saibamais">
                <div class="col-md-12 text-center">
                    <a href="<?php bloginfo('url'); ?>/noticias" type="button" class="btn bcolor" role="button">Ver mais</a>
                </div>
            </div>
        </div>

        <!--Telas Pequenas(Mobile)-->
        <div class="container noticias visible-xs-* hidden-sm hidden-md hidden-lg hidden-xl">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-xs-6">
                        <h3>Notícias</h3>
                    </div>

                    <div class="col-xs-6">
                        <div class="row">
                            <div class="col-xs-6 text-right " style="padding-left: 0px">
                                <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/ico-facebook.png" alt=""> <span class="hidden-xs hidden-sm">trinitisocorromutuo</span></a>
                            </div>
                            
                            <div class="col-xs-6">
                                <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/ico-instagram.png" alt=""> <span class="hidden-xs hidden-sm">trinitioficial</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row post">
                <?php 
                    query_posts('post_type=post&posts_per_page=3');
                    if (have_posts()) : while (have_posts()) : the_post(); 
                ?>

                    <div class="col-xs-12">
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
                    </div>

                <?php endwhile; ?>
                <?php else : ?>
                    <p>Desculpe, nenhum conteúdo disponível.</p>
                <?php endif; wp_reset_query(); ?>
            </div>

            <div class="row saibamais">
                <div class="col-xs-12 text-center">
                    <a href="<?php bloginfo('url'); ?>/noticias" type="button" class="btn bcolor" role="button">Ver mais</a>
                </div>
            </div>
        </div>

        <div class="box-empresas empresas">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <article>
                            <h3>Seja <br>um consultor <br>Triniti</h3>
                            <p>Faça a sua renda e horário, sem se preocupar com chefe e bater ponto. Se interessou? <br> Área exclusiva para você! </p>
                            <a href="https://oferta.triniti.org.br/consultor-independente-triniti" class="btn bcolor">Saiba mais</a>
                        </article>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-carrousel text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h3>Depoimentos de Associados</h3>
                        <div class="owl-carousel owl-theme">
                            <?php 
                                query_posts('post_type=depoimentos&posts_per_page=-1');
                                if (have_posts()) : while (have_posts()) : the_post();
                            ?>

                                <div class="item">
                                    <img src="<?php bloginfo('template_url'); ?>/img/ico-carrousel.png" alt="Foto do cliente">
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php the_content(); ?></p>
                                </div>

                            <?php endwhile; ?>
                            <?php else : ?>
                                <p>Desculpe, nenhum conteúdo disponível.</p>
                            <?php endif; wp_reset_query(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php get_footer(); ?>