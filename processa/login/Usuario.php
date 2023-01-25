<?php
    session_start();

     class Usuario{

        public function login($utilizador , $senha){
            global $conexao;

            $sql = "SELECT * FROM utilizador WHERE username = :utilizador";
            $sql = $conexao->prepare($sql); 
            $sql-> bindValue(":utilizador", $utilizador);
            $sql->execute();

            if($sql->rowCount() > 0){
                $resultado = $sql->fetch(PDO::FETCH_ASSOC);

                if($resultado["password"] == $senha) {
                    $_SESSION["user-data"] = $resultado;
                    return true;
                } else {
                    $_SESSION["auth"] = "Senha invalida";
                return false;
                }
                
            } else {
                $_SESSION["auth"] = "Usuario nao encontrado";
                return false;
            }
        } 
     }

?>