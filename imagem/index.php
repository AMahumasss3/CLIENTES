<?php
  require_once '../conexao/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atendimento do Cliente</title>
  <link rel="stylesheet" href="../editar.css">   
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
          <h2></h2>
      </center>
        <a href="index.html"><ion-icon name="desktop-outline"></ion-icon></ion-icon><samp>Home</samp></a>
        <a href="../CadastrarCliente"><samp>Cadastrar Cliente</samp></a>
        <a href="../VerCliente"><ion-icon name="cadastro.png"></ion-icon><samp>Ver Cliente</samp></a>
        <a href="../Atendimento"><ion-icon name="desktop-outline"></ion-icon><samp>Atender Cliente</samp></a>
        <a href="../Controlo"><ion-icon name="desktop-outline"></ion-icon><samp>Controlo Diario</samp></a>
        <a href="../index"><ion-icon name="desktop-outline"></ion-icon><samp>Sair</samp></a>
</div>

 <section>
  <form action="../processa/RegistarAtendimento.php" method="POST">
    <h1>Atendimento</h1>
    <fieldset>

      <div class="container">
        <p>Nome do Atendente</p>
        <select name="atendente" required>
            <option value=""></option>
            <?php
              $stmt = $conexao->query("SELECT * FROM atendente");
              $stmt->execute();
              $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
              foreach($resultado as $option){
            ?>
                <option value="<?php echo $option['id']?>">
                <?php echo $option['nome']?>
                <?php echo $option['apelido']?></option>
              <?php
                }
              ?>        
        </select>
      </div>
      
      
      <div class="container">
        <p>Nome do Cliente</p>
        <select  name="cliente" required>
            <option value=""></option>
            <?php
              $stmt = $conexao->query("SELECT * FROM cliente");
              $stmt->execute();
              $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
              foreach($resultado as $option){
            ?>
                <option value="<?php echo $option['id']?>">
                <?php echo $option['nome']?>
                <?php echo $option['apelido']?></option>
              <?php
                }
              ?>        
        </select>
      </div>
      
    </fieldset>

    <fieldset>

    <div class="container">
      <input type="text" required name="preco" autofocus>
      <label>Preco A Pagar</label>
    </div>

      <div class="container">
        <input type="text" required name="servico" autofocus>
        <label>Tipo de Servico</label>
      </div>

    </fieldset>

    <fieldset>
         <div id="check">
          <input type="checkbox" required name="accept">
          <label>Confirmar Dados</label>
        </div>
        <button>Registrar</button>
      </fieldset>

    </fieldset>
  </form>
</section> 
    
</body>

</html>