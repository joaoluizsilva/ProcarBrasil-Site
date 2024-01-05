<?php 
date_default_timezone_set('America/Maceio');
$data = date("d/m/Y H:i" );

$nome = $_POST ['nome'];
$telefone = $_POST ['telefone'];
$estado = $_POST ['estado'];
$email =  $_POST ['email'];
$veiculo = $_POST ['veiculo'];
$placa = $_POST ['placa'];
$ano = $_POST ['ano'];
$moto_app = $_POST ['moto_app'];
$habilitacao = $_POST ['habilitacao'];
$mobile = 'Celular';

 //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
 //==================================================== 
 $email_remetente = "site@procardobrasil.com.br"; // deve ser uma conta de email do seu dominio 
 //====================================================
//Configurações do email, ajustar conforme necessidade
 //==================================================== 
 $email_destinatario = "comunicacao@procardobrasil.com.br" ; // pode ser qualquer email que receberá as mensagens
 $email_reply = "$email"; 
 $email_assunto = "Formulario do Site"; // Este será o assunto da mensagem
 //==================================================== 
//Monta o Corpo da Mensagem
 $email_conteudo = "<html><body>"; 
 $email_conteudo .= "Nome = $nome \n";
 $email_conteudo .= "Telefone = $telefone \n"; 
 $email_conteudo .= "Estado = $estado \n";
 $email_conteudo .= "E-mail = $email \n";
 $email_conteudo .= "Veículo = $veiculo \n";
 $email_conteudo .= "Placa = $placa \n";
 $email_conteudo .= "Ano = $ano \n";
 $email_conteudo .= "App ou Taxi = $moto_app \n";
 $email_conteudo .= "Habilitado $habilitacao \n";
 $email_conteudo .= "Data/Hora $data \n";
 $email_conteudo .= "Forma de captação $mobile \n";
 $email_conteudo .= "</body></html>"; 
 //====================================================
 //Seta os Headers (Alterar somente caso necessario) 
 //==================================================== 
 $email_headers = implode ( "\n",array ( 
    "From: $email_remetente",
    "Reply-To: $email_reply",
    "Return-Path: $email_remetente",
    "MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
 //====================================================
 //Enviando o email 
 //==================================================== 
 if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
 echo "</b>nviado com sucesso!</b>";
?>    
<script> 
setTimeout(function() { 
    window.location.href = "https://procardobrasil.com.br/";
}); 
</script> 
<?php
 } 
 else{ 
//  echo "</b>Falha no envio do E-Mail!</b>"; 
} 

 
 