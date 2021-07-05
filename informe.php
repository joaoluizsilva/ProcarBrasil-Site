<?php 
date_default_timezone_set('America/Maceio');
$data = date("d/m/Y" );

$hora = date("H");
$minutos = date("i");
$tempo = $hora .":". $minutos;
$msn = "O Botão Whatsapp foi acionado em ".$data. " as " . $tempo ."." ;

//Var do formulario


 //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
 //==================================================== 
 $email_remetente = "site@procardobrasil.com.br"; // deve ser uma conta de email do seu dominio 
 //====================================================
//Configurações do email, ajustar conforme necessidade
 //==================================================== 
 $email_destinatario = "comunicacao@procardobrasil.com.br" ; // pode ser qualquer email que receberá as mensagens
 $email_reply = "$email"; 
 $email_assunto = "Whatsapp Procar Brasil"; // Este será o assunto da mensagem
 //==================================================== 
//Monta o Corpo da Mensagem
 $email_conteudo = "<html><body>"; 
 $email_conteudo .= "$msn \n";
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


 
 