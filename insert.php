<?php
    function insert($nome, $email, $endereco, $numero, $andar, $codigo, $telefone, $conexao)
    {
        $sql = "INSERT INTO usuarios(nome, email, endereco, numero, andar, codigo, telefone) 
                VALUE ('$nome', '$email', '$endereco', '$numero', '$andar', '$codigo', '$telefone')"; //inserir dados na tabela

        if(mysqli_query($conexao, $sql)){
            echo "usuario cadastrado com sucesso \n 
            <html>
            <p><b>Nome: </b>$nome</p>
            <p><b>E-mail: </b>$email</p>
            <p><b>Endereço: </b>$endereco</p>
            <p><b>Numero: </b>$numero</p>
            <p><b>Andar: </b>$andar</p>
            <p><b>Codigo Postal: </b>$codigo</p>
            <p><b>Celular: </b>$telefone</p>
            </html>";
        } else{
            echo "Erro" . mysqli_connect_error($conexao);
        }
    }
    mysqli_close($conexao);//fechar a conexao