<?php 

//Variaveis para conectar no banco
 $servidor_db ="localhost";
 $usuario_db="root";
 $senha_db=""; //No banco local a senha e vazia, mas se o seu tem senha edicione nesse variavel

 //Conectando com o banco de dados
 $conexao = new mysqli($servidor_db,$usuario_db,$senha_db);

 if ($conexao->connect_error){
    die("Conexão falhou: ". $conexao->connect_error);
 }
 echo "<h5>  Conectado com sucesso no no Mysql.</h5>";

 ?>