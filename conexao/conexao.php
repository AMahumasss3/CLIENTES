


<?php 

/**
 * Instancia conexao com Mysql Database
 */

define("HOST", "localhost");
define("DBNAME", "salao");
define("USER", "root");
define("PASSWORD", "");

try {
    $conexao = new PDO("mysql:host=".HOST.";dbname=".DBNAME, USER, PASSWORD);
    return  $conexao;
} 
catch (PDOException $m) {
    echo $m->getMessage();    
} 
catch (Exception $m) {
    echo "Erro generico" .$m->getMessage();
    exit();
}

?>