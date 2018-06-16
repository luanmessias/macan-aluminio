<?php
 
/* Medida preventiva para evitar que outros domínios sejam remetente da sua mensagem. */
if (eregi('tempsite.ws$|locaweb.com.br$|hospedagemdesites.ws$|websiteseguro.com$|publiccloud.com.br$', $_SERVER[HTTP_HOST])) {
        $emailsender='contato@macanaluminio.com.br'; // Substitua essa linha pelo seu e-mail@seudominio
} else {
        $emailsender = "contato@macanaluminio.com.br";
        //    Na linha acima estamos forçando que o remetente seja 'webmaster@seudominio',
        // Você pode alterar para que o remetente seja, por exemplo, 'contato@seudominio'.
}
 
/* Verifica qual éo sistema operacional do servidor para ajustar o cabeçalho de forma correta.  */
if(PATH_SEPARATOR == ";") $quebra_linha = "\r\n"; //Se for Windows
else $quebra_linha = "\n"; //Se "nÃ£o for Windows"
 
// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente     = $_POST['nomeremetente'];
$emailremetente    = $_POST['emailremetente'];
$emaildestinatario = $_POST['emaildestinatario'];
$assunto           = $_POST['assunto'];
$nome 			   = $_POST['nome'];
$empresa 		   = $_POST['empresa'];
$email 			   = $_POST['email'];
$telefone 		   = $_POST['telefone'];
 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '
	<h3>Mensagem eviada atrav&eacute;s do formul&aacute;rio de contato do site</h3>
	<strong>Nome:</strong>'.$nome.' <br />
	<strong>Empresa:</strong>'.$empresa.' <br />
	<strong>E-Mail:</strong>'.$email.' <br />
	<strong>Telefone:</strong>'.$telefone.' <br />
';
 
/* Montando o cabeÃ§alho da mensagem */
$headers = "MIME-Version: 1.1" .$quebra_linha;
$headers .= "Content-Type: text/html; charset=ISO-8859-1" .$quebra_linha;
// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
$headers .= "From: " . $emailsender.$quebra_linha;
$headers .= "Reply-To: " . $emailremetente . $quebra_linha;
// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)
 
/* Enviando a mensagem */
//É obrigatório o uso do parâmetro -r (concatenação do "From na linha de envio"), aqui na Locaweb:
if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix
    $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
    mail($emaildestinatario, $assunto, $mensagemHTML, $headers );
}
 
/* Mostrando na tela as informações enviadas por e-mail */
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('E-Mail enviado com sucesso!')
    window.location.href='http://www.macanaluminio.com.br/construcao';
    </SCRIPT>");
?>
