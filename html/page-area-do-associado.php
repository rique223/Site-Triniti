<?php get_header(); ?>



        <div class="banner-interno hidden-xs hidden-sm"></div>

        <div class="container associacao internas">
            <div class="row">
                <div class="col-md-offset-3 col-md-6 box-cadastro text-center">
                        <h1 class="ado"><img src="<?php bloginfo('template_url'); ?>/img/IcoAssociado.png" style="padding-right: 20px" alt="">Área do Associado</h1>
                        <p>Faça login para acessar sua página. <br></p>
                        <p> No primeiro acesso use o número do seu CPF como usuário e senha.</p>

                        <form action="https://europa.hinova.com.br/sga/area/4.1/login.action.php" method="post">
                            <div class="row separacao">
                                <div class="col-md-offset-2 col-md-8 text-left">
                                    <label class="padding-label" for="telephone">Usuário*</label>
                                    <input type="text" name="dfsCpf" id="dfsCpf" class="form-control" placeholder="Digite o seu usuário" required>

                                    <label class="padding-label" for="telephone">Senha*</label>
                                    <input type="password" name="dfsSenha" id="dfsSenha" class="form-control" placeholder="************" required>
                                </div>
                            </div>

                           <!--  <div class="row">
                                <div class="col-md-offset-2 col-md-4">
                                    <a class="lembrar" href="#">Lembrar senha</a>
                                </div>
                            </div> -->
                            
                            <br> <br>

                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" name="dfsChave" id="dfsChave" value="f31bf24a9acc43b0b8444836455ede2e75f6941bb833eb63895c628e9e8d83194d58e24de39277d05927070f49c2d677ad085a44ddc58f539b818ea6f5771ac1">
                                    <input type="submit" value="Entrar" name="pbEntrar" class="btn bcolor blogin">
                                </div>
                            </div>
                        </form>
                </div>

               
            </div>
        </div>

<?php get_footer(); ?>