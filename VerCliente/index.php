<?php
  require_once '../conexao/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Cliente</title>
    <style>
      .tabela{

                position: absolute;
                left: 58%;
                top: 30%;
                transform: translate(-50%, -50%);
            }

        table{
          width: 1000px;
          height: auto;
          text-align: center;
          color: black;
          font-size: 14pt;
        }
    </style>
  <link rel="stylesheet" href="../WebSite.css">
   
</head>

<body>

  <header>
    <div class="right">
      <h3><samp></samp></h3>
  
    </div> 
  
  </header>
  


    <div class="sidebar">
      <center>
          <img src="../imagem/menu.jpeg" class="image" alt="">
          <h2>Vasco</h2>
      </center>
      <a href="index.html"><ion-icon name="desktop-outline"></ion-icon></ion-icon><samp>Home</samp></a>
        <a href="../CadastrarCliente"><samp>Cadastrar Cliente</samp></a>
        <a href="../VerCliente"><ion-icon name="cadastro.png"></ion-icon><samp>Ver Cliente</samp></a>
        <a href="../Atendimento"><ion-icon name="desktop-outline"></ion-icon><samp>Atender Cliente</samp></a>
        <a href="../Controlo"><ion-icon name="desktop-outline"></ion-icon><samp>Controlo Diario</samp></a>
        <a href="../index"><ion-icon name="desktop-outline"></ion-icon><samp>Sair</samp></a>
    </div>

    
      <div class="tabela">
        <table border="1px solid">
        <thead>
        <tr>
          <th >Nome</th>
          <th >Apelido</th>
          <th >Bairro</th>
          <th >Sexo</th>
          <th >Telefone 1</th>
          <th >Telefone 2</th>
          <th>Accoes</th>
        </tr>
      </thead>

      <?php 
          $stmt = $conexao->query("SELECT * FROM cliente ORDER BY nome ASC");
          $stmt->execute();
          $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
      
          foreach ($resultado as $cliente) {
      ?>
            
      <tbody>
        <tr>
          <td><?php echo $cliente['nome']; ?></td>
          <td><?php echo $cliente['apelido']; ?></td>
          <td><?php echo $cliente['bairro']; ?></td>
          <td><?php echo $cliente['sexo']; ?></td> 
          <td><?php echo $cliente['telefone1']; ?></td>
          <td><?php echo $cliente['telefone2']; ?></td>    
          <td>
             <a href="index.php?id_up=<?php echo $cliente['id'];?>">Editar</a>
             <a href="index.php?id=<?php echo $cliente['id'];?>">Excluir</a>
          </td>
        </tr>

        <?php } ?>
      </tbody>
        </table>
      </div> 
    

</body>

</html>

<?php
    if(isset($_GET['id'])) {
        $id_cliente = addslashes($_GET['id']);
        $c->ExcluirCliente($id_cliente);
        header("location: index.php");
    }
?>