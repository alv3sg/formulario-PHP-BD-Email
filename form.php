<?php
  //Compo E-mail
  function form($nome, $email, $endereco, $numero, $andar, $codigo, $telefone){
    //Variáveis
    
    $arquivo = "
      <html>
        <p><b>Nome: </b>$nome</p>
        <p><b>E-mail: </b>$email</p>
        <p><b>Endereço: </b>$endereco</p>
        <p><b>Numero: </b>$numero</p>
        <p><b>Andar: </b>$andar</p>
        <p><b>Codigo Postal: </b>$codigo</p>
        <p><b>Celular: </b>$telefone</p>
       
      </html>
    ";
    
    //Emails para quem será enviado o formulário
    $destino = $email;
    $assunto = "Contato pelo Site";

    //Este sempre deverá existir para garantir a exibição correta dos caracteres
    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    $headers .= "From: $nome <gabriel.alves.rosario@gmail.com>";

    //Enviar
    mail($destino, $assunto, $arquivo, $headers);
  }
  
  echo "<meta http-equiv='refresh' content='5;URL=../index.html'>";
  
?>