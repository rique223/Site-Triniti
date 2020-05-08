<?php 
function page_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/class/defaults/login/img/logo_redcake.png);
            padding-bottom: 30px;
            background-size: 287px 63px;
            height: 33px;
            width: 287px;
        }

        #user_login{

        }

        #user_pass{

        }

        #loginform #wp-submit{

        }

        .info-redcake span{
        	display: block;
        	text-align: center;
        	margin-bottom: 10px;
			color: #e41f2a;
			font-size: 20px;
			font-weight: 700;
        }

        .info-redcake a{
        	display: inline-block;
        	margin:0 auto 20px;
        }

        .rede-sociais{
        	text-align: center;
        }

        .rede-sociais a:nth-child(1){
        	text-indent: -99999px;
            background: url(<?php echo get_stylesheet_directory_uri(); ?>/class/defaults/login/img/facebook.png) no-repeat;
            height: 40px;
            width: 40px;
        }
        .rede-sociais a:nth-child(2){
        	text-indent: -99999px;
            background: url(<?php echo get_stylesheet_directory_uri(); ?>/class/defaults/login/img/instagram.png) no-repeat;
            height: 40px;
            width: 40px;
        }
        .rede-sociais a:nth-child(3){
        	text-indent: -99999px;
            background: url(<?php echo get_stylesheet_directory_uri(); ?>/class/defaults/login/img/behance.png) no-repeat;
            height: 40px;
            width: 40px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'page_login_logo' );

function page_login_logo_url() {
    return 'http://www.redcake.com.br';
}
add_filter( 'login_headerurl', 'page_login_logo_url' );

function page_login_logo_title() {
    return 'RedCake Agência Digital';
}
add_filter( 'login_headertitle', 'page_login_logo_title' );

function page_login_content_description() {
    ?>
    	<div class="info-redcake">
    		<span>62 3278-2059</span>
    		<span>contato@redcake.com.br</span>
    		<div class="rede-sociais">
    			<a href="https://www.facebook.com/redcakeweb" title="Facebook" target="_blank">f</a>
    			<a href="http://instagram.com/redcakeweb" title="Instagram" target="_blank">i</a>
    			<a href="https://www.behance.net/redcakeweb" title="Behance" target="_blank">b</a>
    		</div>
    	</div>
    <?php
}
add_filter( 'login_message', 'page_login_content_description' );



?>