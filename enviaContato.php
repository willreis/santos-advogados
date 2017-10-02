<?php 

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

    include "Email.php";  
        $nome = utf8_decode($_POST['name']);
        $email = utf8_decode($_POST['email']);
        $telefone = utf8_decode($_POST['telefone']);
        $assunto = utf8_decode($_POST['subject']);
        $mensagem = utf8_decode($_POST['message']);


        $Email = new Email();

        $mensagemHTML = "
		<table width='100%' border='0' cellspacing='0' cellpadding='8' style='font-family:tahoma;'>
		  <tr bgcolor='#DDDDDD'>
			<td width='100'><strong>Nome:</strong></td>
			<td>";
        $mensagemHTML .= $nome;
        $mensagemHTML .= "</td>
		  </tr>
          <tr bgcolor='#d1d1d1'>
            <td width='100'><strong>Email:</strong></td>
            <td>";
        $mensagemHTML .= $email;
        $mensagemHTML .= "</td>
          </tr>
          <tr bgcolor='#DDDDDD'>
			<td width='100'><strong>Telefone:</strong></td>
			<td>";
        $mensagemHTML .= $telefone;
        $mensagemHTML .= "</td>
		  </tr>
          <tr bgcolor='#d1d1d1'>
            <td width='100'><strong>Assunto:</strong></td>
            <td>";
        $mensagemHTML .= $assunto;
        $mensagemHTML .= "</td>
          </tr> 
          <tr bgcolor='#DDDDDD'>
            <td width='100'><strong>Mensagem:</strong></td>
            <td>";
        $mensagemHTML .= $mensagem;
        $mensagemHTML .= "</td>
          </tr> 
		</table>";


        $Email->setMessage($mensagemHTML);    
        $Email->setName('Contato Santos Advogados');
        $Email->setSubject('Santos Advogados');
        $Email->setFrom('santosadvogados.juridico@gmail.com');
        $Email->setTo('santosadvogados.juridico@gmail.com'); 
        $Email->setCc('william.reis.silva@gmail.com');
        $Email->setReply($email); 
        $Email->send();
        
        echo("<script type='text/javascript'> alert('Contato encaminhado com sucesso!'); location.href='contato.php';</script>");


?>