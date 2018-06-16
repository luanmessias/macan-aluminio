<?php

require("phpmailer/class.phpmailer.php");
$mail = new PHPMailer();

$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.macanaluminio.com.br"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Autenticação
$mail->Username = 'webdesign@macanaluminio.com.br'; // Usuário do servidor SMTP
$mail->Password = 'macan102030**'; // Senha da caixa postal utilizada

$mail->From = "contato@macanaluminio.com.br"; 
$mail->FromName = "[SITE] - Formulario de contato";

$mail->AddAddress('contato@macanaluminio.com.br', 'Contato');
//$mail->AddAddress('e-mail@destino2.com.br');
//$mail->AddCC('copia@dominio.com.br', 'Copia'); 
//$mail->AddBCC('CopiaOculta@dominio.com.br', 'Copia Oculta');


$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)

$mail->Subject  = "[SITE] - Formulario de contato"; // Assunto da mensagem


$title = "Formulário de contato <br><br>";
$nome = "<strong>Nome:</strong> " . $_POST["name"] . "<br>";
$contato = "<strong>E-Mail:</strong> " . $_POST["email"] . "<br>";
$assunto = "<strong>Assunto:</strong> " . $_POST["subject"] . "<br>";
$obs = "<strong>Observações:</strong> " . $_POST["message"];

$mail->Body = title . $nome . $contato . $obs;

$enviado = $mail->Send();

$mail->ClearAllRecipients();
$mail->ClearAttachments();

if ($enviado) {
  echo "E-mail enviado com sucesso!";
} else {
  echo "Não foi possível enviar o e-mail.";
  echo "Informações do erro: 
  " . $mail->ErrorInfo;
}

//header('Location: http://www.macanaluminio.com.br/teste') ;

?>




