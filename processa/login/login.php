<?php 
    require_once '../../conexao/conexao.php';
    require_once 'Usuario.php'; 


      $l = new Usuario();

        $utilizador = $_POST['usuario'];
        $senha = addslashes($_POST['senha']);
      
        if($l->login($utilizador, $senha) == true){
          header("Location: ../../PaginaInicial");

        }else{
           echo 'Falhou';
        }
?>