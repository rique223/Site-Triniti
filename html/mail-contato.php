<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8" />
	<title>Triniti</title>

	<!-- <style>
		html { 
			  background: url(https://www.triniti.org.br/2020/wp-content/themes/triniti/img/Menu/brand.png) no-repeat center center fixed; 
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
			}
	</style> -->
</head>
<body>
	


<?php
require("phpmailer/class.phpmailer.php");

//Inicia a classe PHPMailer
$mail = new PHPMailer();

//Define os dados do servidor e tipo de conexão
$mail->IsSMTP(); // Define que a mensagem será SMTP

$mail->SMTPDebug  = 1;

$mail->Host = "mail.triniti.org.br"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Autenticação
//$mail->SMTPSecure = "tls";
$mail->Username = 'naoresponder@triniti.org.br'; // Usuário do servidor SMTP
$mail->Password = 'C2UhcJ@MM'; // Senha da caixa postal utilizada
//$mail->Port = '587';

//Define o remetente
$mail->From = "naoresponder@triniti.org.br"; 
$mail->FromName = "Clínica Cogni";

//Define os destinatário(s)
$mail->AddAddress('contato@triniti.org.br', 'Contato');
$mail->AddCC('danilorlf@gmail.com', 'Contato');



//Define os dados técnicos da Mensagem
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)



$nome       = $_REQUEST['nome'];
$email      = $_REQUEST['email'];
$telefone   = $_REQUEST['telefone'];
$mens       = $_REQUEST['mensagem'];

$assunto = $_REQUEST['assunto'];

//verificar se tem erros nos campos
$erro = false;
if ( !isset( $_POST ) || empty( $_POST ) ) {
 $erro = 'POST está vazio.';
}

// Variáveis dinâmicas do formulário
foreach ( $_POST as $chave => $valor ) {
 // Limpa todas as tags HTML
 // Limpa os espaços em branco do valor
 $$chave = trim( strip_tags( $valor ) );
 
 // Verifica se existe algum dado nulo
 if ( empty ( $valor ) ) {
 $erro = 'Existem campos em branco.';
 }
}


if ( $erro ) {
 echo $erro;
} else {



	$assunto    = "Contato pelo site";


	$mensagem       = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
	$mensagem	   .= '<html xmlns="http://www.w3.org/1999/xhtml">';
	$mensagem	   .= '<head>';
	$mensagem	   .= '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
	$mensagem	   .= '<title>'. $assunto .'</title>';
	$mensagem	   .= '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
	$mensagem	   .= '</head>';
	$mensagem	   .= '<body style="margin: 0; padding: 0;">';
	$mensagem	   .= '<table border="0" cellpadding="0" cellspacing="0" width="100%">';
	$mensagem	   .= '<tr>';
	$mensagem	   .= '<td>';
	$mensagem	   .= '<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">';
	$mensagem	   .= '<tr>';
	$mensagem	   .= '<td align="center" style="padding: 40px 0 30px 0; border-bottom: 2px solid #fecf2f;">';
	$mensagem	   .= '<img src="https://www.triniti.org.br/2020/wp-content/themes/triniti/img/Menu/brand.png" alt="Triniti" style="display: block;" />';
	$mensagem	   .= '</td>';
	$mensagem	   .= '</tr>';
	$mensagem	   .= '<tr>';
	$mensagem	   .= '<td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">';
	$mensagem	   .= '<table border="0" cellpadding="0" cellspacing="0" width="100%">';
	$mensagem	   .= '<tr>';
	$mensagem	   .= '<td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">';
	$mensagem	   .= '<b>'. $assunto .'</b>';
	$mensagem	   .= '</td>';
	$mensagem	   .= '</tr>';
	$mensagem	   .= '<tr>';
	$mensagem	   .= '<td style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">';

	$mensagem	   .= "<p><b>Nome: </b>" . $nome . "</p>\n\r";
	$mensagem	   .= "<p><b>E-mail: </b>" . $email . "</p>\n\r";
	$mensagem	   .= "<p><b>Telefone: </b>" . $telefone . "</p>\n\r";
	$mensagem	   .= "<p><b>Mensagem: </b>" . $mens . "</p>\n\r";

	$mensagem	   .= '</td>';
	$mensagem	   .= '</tr>';
	$mensagem	   .= '</table>';
	$mensagem	   .= '</td>';
	$mensagem	   .= '</tr>';
	$mensagem	   .= '<tr>';
	$mensagem	   .= '<td bgcolor="#dedede" style="padding: 30px 30px 30px 30px;">';
	$mensagem	   .= '<table border="0" cellpadding="0" cellspacing="0" width="100%">';
	$mensagem	   .= '<tr>';
	$mensagem	   .= '<td align="center" style="color: #222222; font-family: Arial, sans-serif; font-size: 12px;">';
	$mensagem	   .= '© COPYRIGHT - TODOS OS DIREITOS RESERVADOS - Triniti';
	$mensagem	   .= '</td>';
	$mensagem	   .= '</tr>';
	$mensagem	   .= '</table>';
	$mensagem	   .= '</td>';
	$mensagem	   .= '</tr>';
	$mensagem	   .= '</table>';
	$mensagem	   .= '</td>';
	$mensagem	   .= '</tr>';
	$mensagem	   .= '</table>';
	$mensagem	   .= '</body>';
	$mensagem	   .= '</html>';



	//Texto e Assunto
	$mail->Subject  = $assunto; // Assunto da mensagem
	$mail->Body = $mensagem;

	//Envio da Mensagem
	$enviado = $mail->Send();

	//Limpa os destinatários e os anexos
	$mail->ClearAllRecipients();
	$mail->ClearAttachments();


	//Exibe uma mensagem de resultado
	if ($enviado) {
	    echo "<script type='text/javascript'>
	            location.href = 'https://oferta.triniti.org.br/triniti-agradecimento';
	        </script>";
	} else {
		echo "Mailer Error: " . $mail->ErrorInfo;
	    echo "<script type='text/javascript'>
	            alert('Erro ao enviar sua mensagem, tente novamente.'); 
	            location.href = '". $_SERVER['HTTP_REFERER'] ."';
	        </script>";
	}



}

?>

</body>
</html>