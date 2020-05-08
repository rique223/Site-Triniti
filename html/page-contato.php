<?php get_header(); ?>



        <div class="container fale-conosco">
            <div class="row">
                <div class="col-md-6 fale" style="padding-bottom: 11px">
                    <div class="row">
                        <article class="col-md-offset-1 col-md-10 text-center">
                            <h1 class="ass">Contato</h1>
                            <p>Preencha seus dados e entraremos em contato o mais breve possível</p>
                        </article>
                    </div>

                    <div class="row">
                        <article class="col-md-offset-1 col-md-10">
                            <form action="<?php bloginfo('template_url'); ?>/mail-contato.php" method="POST">
                                <label class="padding-label" for="nome">Nome*</label>
                                <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" required>

                                <label class="padding-label" for="email">E-mail*</label>
                                <input type="email" name="email" class="form-control" placeholder="Digite seu melhor e-mail" required>

                                <label class="padding-label" for="telefone">Telefone*</label>
                                <input type="text" name="telefone" id="txttelefone" class="form-control txttelefone" placeholder="Digite o número do seu telefone" required>

                                <label class="padding-label" for="assunto">Assunto*</label>
                                <input type="text" name="assunto" class="form-control" placeholder="Digite o assunto">

                                <label class="padding-label" for="mensagem">Mensagem*</label>
                                <textarea class="form-control" name="mensagem" rows="5" placeholder="Digite sua mensagem" required></textarea>

                                <button type="submit" class="btn bcolor ler-mais" style="margin-bottom: 60px" role="button">Enviar Mensagem</button>
                            </form>
                        </article>
                    </div>
                </div>

                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.6958870702133!2d-49.30818978451697!3d-16.692094850121315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935ef6a298cf66db%3A0xbcd17f57cd25c65!2sTriniti%20Socorro%20M%C3%BAtuo%20e%20Benef%C3%ADcios!5e0!3m2!1spt-BR!2sbr!4v1583503356029!5m2!1spt-BR!2sbr" width="100%" height="525" frameborder="0" style="border:0px; border-radius: 5px; box-shadow: 0 0 2px;" allowfullscreen=""></iframe>

                    <div class="row box-pr">
                        <br>
                        <article class="col-md-12 box-prancheta fale">
                            <h3>Faça parte de nossa equipe. Cadastre seu currículo.</h3>
                            
                            <label style="padding-left: 20px; font-weight: 500" for="telephone">E-mail*</label> 
                            <input type="email" class="form-control in-pr" placeholder="Digite seu melhor e-mail">

                            <button type="button" class="btn bcolor ler-mais" style="margin-bottom: 60px" role="button">Enviar Mensagem</button>
                        </article>
                    </div>
                </div>
            </div>
        </div>




<?php get_footer(); ?>