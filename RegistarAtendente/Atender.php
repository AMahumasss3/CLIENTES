<?php
    require_once '../processa/CRUD.php';

    $a = new operacoes();

    if(isset($_POST['registar'])){

        $nome = $_POST['nome'];
        $apelido = $_POST['apelido'];
        $telefone = $_POST['telefone'];
        $bairro = $_POST['bairro'];
        $sexo = $_POST['sexo'];
                   
        $a->RegistarAtendente($nome, $apelido, $telefone, $bairro, $sexo);
        echo "cadastrado com sucesso!";
    } 
?>