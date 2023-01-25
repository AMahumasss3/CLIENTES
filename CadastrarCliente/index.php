<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
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
  <form action="../processa/cadastraCliente.php" method="POST">
    <h1>Cadastrar Cliente</h1>
    <fieldset>

      <div class="container">
        <input type="text" required name="nome">
        <label>Nome</label>
      </div>
      
      <div class="container">
        <input type="text" required name="apelido">
        <label>Apelido</label>
      </div>
      
    </fieldset>

    <fieldset>

      <div class="container">
        <input type="text" required name="bairro">
        <label>Bairro</label>
      </div>

      <div class="container">
        <!-- <label for="">Sexo</label> -->
        <select  name="sexo">
            <option value="">Sexo</option>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select>

      </div>

    </fieldset>

  <fieldset>

    <div class="container">
      <input type="number" required name="contacto" >
      <label>contacto</label>
    </div>
    
    <div class="container">
      <input type="number" required name="alternativo" >
      <label>alternativo</label>
    </div>
    
  </fieldset>

    <fieldset>
        <!-- <div id="check">
          <input type="checkbox" required name="accept">
          <label>Confirmar Dados</label>
        </div> -->
        <button name="guardar" >Guardar</button>
      </fieldset>

    </fieldset>
  </form>
</section>

</body>

</html>