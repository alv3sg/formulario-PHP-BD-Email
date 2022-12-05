<?php
    include("insert.php");
    include("form.php");
    include("connect.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $andar = $_POST['andar'];
    $codigo = $_POST['codigo'];
    $telefone = $_POST['telefone'];

    insert($nome, $email, $endereco, $numero, $andar, $codigo, $telefone, $conexao);//iserir dados no bd
    form($nome, $email, $endereco, $numero, $andar, $codigo, $telefone);//funcao para enviar emails

?>