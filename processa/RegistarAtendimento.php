<?php
  require_once "CRUD.php";

    $r = new operacoes();

    if(isset($_POST['registar'])){

        $atendente = $_POST['atendente'];
        $cliente = $_POST['cliente'];
        $servico = $_POST['servico'];
        $preco = $_POST['preco'];
                   
        $r->RegistarAtendimento($cliente, $atendente, $servico, $preco);
        echo "cadastrado com sucesso!";
    } 

?>