<?php
  require_once 'CRUD.php';

    $c = new operacoes();

if(isset($_POST['guardar'])){

    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $bairro = $_POST['bairro'];
    $sexo = $_POST['sexo'];
    $contacto = $_POST['contacto'];
    $alternativo = $_POST['alternativo'];

    $c->CadastrarCliente($nome, $apelido, $bairro, $sexo, $contacto, $alternativo);
        
        if($c != null){
            echo "Cadastrado com sucesso!";
        }

        
}
?>