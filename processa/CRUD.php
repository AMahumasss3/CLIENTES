<?php
    require_once '../conexao/conexao.php';


     class operacoes{
        private $conexao;

        public function CadastrarCliente($nome, $apelido, $bairro, $sexo, $contacto, $alternativo){
            global $conexao;

            $stmt = $conexao->prepare("SELECT * FROM cliente WHERE nome = '$nome'");
            $stmt-> execute();

            if($stmt->rowCount() > 0){
                return false;
            } else{
                $stmt = $conexao->prepare("INSERT INTO cliente(nome, apelido, bairro, sexo, telefone1, telefone2)
                Values(:a, :b, :c, :d, :e, :f)");
                  $stmt->bindValue(":a",$nome);
                  $stmt->bindValue(":b",$apelido);
                  $stmt->bindValue(":c",$bairro);
                  $stmt->bindValue(":d",$sexo);
                  $stmt->bindValue(":e",$contacto);
                  $stmt->bindValue(":f",$alternativo);
                  return true;
            }
         
            
        }

        public function RegistarAtendimento($cliente, $atendente, $servico, $preco){
            global $conexao;

            $stmt = $conexao->prepare("INSERT INTO atendimento(id_cliente, id_atendente, tipo_servico, preco)
            Values(:a, :b, :c, :d)");
            $stmt->bindValue(":a",$cliente);
            $stmt->bindValue(":b",$atendente);
            $stmt->bindValue(":c",$servico);
            $stmt->bindValue(":d",$preco);
            return true;
        }


        public function ExcluirCliente($id_cliente){
            global $conexao;
            $cmd = $conexao->prepare("DELETE FROM cliente WHERE id = '$id_cliente'");
            // $cmd->bindValue(":id",$id_cliente);
            $cmd->execute();
        }



        public function RegistarAtendente($nome, $apelido, $telefone, $bairro, $sexo){
            global $conexao;

            $stmt = $conexao->prepare("INSERT INTO atendente(nome, apelido, telefone, bairro, sexo)
            Values(:a, :b, :c, :d, :e)");
            $stmt->bindValue(":a",$nome);
            $stmt->bindValue(":b",$apelido);
            $stmt->bindValue(":c",$telefone);
            $stmt->bindValue(":d",$bairro);
            $stmt->bindValue(":e",$sexo);
            return true;
        }
    }

?>