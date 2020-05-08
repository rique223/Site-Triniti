<?php get_header(); ?>

        <div class="banner-interno hidden-xs hidden-sm"></div>

        <div class="container associacao box-bentab">
            <div class="row">
                <div class="col-md-12">
                    <div class="row" style="padding-bottom: 50px">
                        <div class="col-md-12 text-center">
                            <h1 class="bentab">Benefícios</h1>
                            <p>Saiba mais sobre os benefícios Triniti</p>
                        </div>
                    </div>

                    <form action="https://oferta.triniti.org.br/triniti-agradecimento" method="post" name="beneficios">
                        <div class="row" style="padding-bottom: 25px">
                            <div class="col-md-offset-1 col-md-10">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label style="padding-left: 20px; font-weight: 500" for="telephone">Nome*</label>
                                        <input type="text" name="nome" class="form-control" placeholder="Digite seu nome*">

                                    </div>
                                    <div class="col-md-4">
                                        <label style="padding-left: 20px; font-weight: 500" for="telephone">E-mail*</label>
                                        <input type="email" name="email" class="form-control" placeholder="Digite seu melhor e-mail">
                                    </div>
                                    <div class="col-md-4">
                                        <label style="padding-left: 20px; font-weight: 500" for="telephone">Telefone*</label>
                                        <input type="text" name="telefone" class="form-control" placeholder="Digite o número do seu telefone">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn bcolor">Saiba mais</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="exTab1" class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills">
                        <li class="active">
                            <a  href="#1a" data-toggle="tab">Todos</a>
                        </li>

                        <li><a href="#2a" data-toggle="tab">Assistência Emergencial</a></li>

                        <li><a href="#3a" data-toggle="tab">Saúde</a></li>

                        <li><a href="#4a" data-toggle="tab">Serviços Automotivos</a></li>

                        <li><a href="#5a" data-toggle="tab">Ensino</a></li>
                    </ul>

                    <div class="tab-content clearfix">
                        <div class="tab-pane active" id="1a">


                            <?php 
                                if (have_posts()) : while (have_posts()) : the_post(); 
                            ?>

                                <article>
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
                                    }
                                    ?>
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php echo excerpt(20); ?></p>

                                    <a href="<?php the_permalink(); ?>" class="bcolor btn">Leia mais</a>
                                </article>

                                

                            <?php endwhile; ?>
                            <?php else : ?>
                                <p>Desculpe, nenhum conteúdo disponível.</p>
                            <?php endif; wp_reset_query(); ?>



                           
                        </div>
                        
                        <div class="tab-pane" id="2a">
                            <?php 

                                $args = array('post_type' => 'beneficios',
                                                'tax_query' => array(
                                                    array(
                                                        'taxonomy' => 'categoria-beneficios',
                                                        'field' => 'slug',
                                                        'terms' => 'assistencia-emergencial',
                                                    ),
                                                ),
                                             );

                                query_posts( $args );
                                if (have_posts()) : while (have_posts()) : the_post(); 
                            ?>

                                <article>
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
                                    }
                                    ?>
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php echo excerpt(20); ?></p>

                                    <a href="<?php the_permalink(); ?>" class="bcolor btn">Leia mais</a>
                                </article>

                                

                            <?php endwhile; ?>
                            <?php else : ?>
                                <p>Desculpe, nenhum conteúdo disponível.</p>
                            <?php endif; wp_reset_query(); ?>
                        </div>
                        
                        <div class="tab-pane" id="3a">
                            <?php 

                                $args = array('post_type' => 'beneficios',
                                                'tax_query' => array(
                                                    array(
                                                        'taxonomy' => 'categoria-beneficios',
                                                        'field' => 'slug',
                                                        'terms' => 'saude',
                                                    ),
                                                ),
                                             );

                                query_posts( $args );
                                if (have_posts()) : while (have_posts()) : the_post(); 
                            ?>

                                <article>
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
                                    }
                                    ?>
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php echo excerpt(20); ?></p>

                                    <a href="<?php the_permalink(); ?>" class="bcolor btn">Leia mais</a>
                                </article>

                                

                            <?php endwhile; ?>
                            <?php else : ?>
                                <p>Desculpe, nenhum conteúdo disponível.</p>
                            <?php endif; wp_reset_query(); ?>
                        </div>
                        
                        <div class="tab-pane" id="4a">
                            <?php 

                                $args = array('post_type' => 'beneficios',
                                                'tax_query' => array(
                                                    array(
                                                        'taxonomy' => 'categoria-beneficios',
                                                        'field' => 'slug',
                                                        'terms' => 'servicos-automotivos',
                                                    ),
                                                ),
                                             );

                                query_posts( $args );
                                if (have_posts()) : while (have_posts()) : the_post(); 
                            ?>

                                <article>
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
                                    }
                                    ?>
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php echo excerpt(20); ?></p>

                                    <a href="<?php the_permalink(); ?>" class="bcolor btn">Leia mais</a>
                                </article>

                                

                            <?php endwhile; ?>
                            <?php else : ?>
                                <p>Desculpe, nenhum conteúdo disponível.</p>
                            <?php endif; wp_reset_query(); ?>
                        </div>

                        <div class="tab-pane" id="5a">
                            <?php 

                                $args = array('post_type' => 'beneficios',
                                                'tax_query' => array(
                                                    array(
                                                        'taxonomy' => 'categoria-beneficios',
                                                        'field' => 'slug',
                                                        'terms' => 'ensino',
                                                    ),
                                                ),
                                             );

                                query_posts( $args );
                                if (have_posts()) : while (have_posts()) : the_post(); 
                            ?>

                                <article>
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
                                    }
                                    ?>
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php echo excerpt(20); ?></p>

                                    <a href="<?php the_permalink(); ?>" class="bcolor btn">Leia mais</a>
                                </article>

                                

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
