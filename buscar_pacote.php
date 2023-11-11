
<html> 

<head>
<!--Nosso próprio arquivo CSS-->
<link rel="stylesheet" type="text/css"   href="style/style.css" media="screen"/>

</head>
<?php
$conn = new mysqli("localhost","root","","viagem_db");

$id_pacote = $_POST["id_pacote"];

$sql = "SELECT * FROM pacotes WHERE id= $id_pacote";

 

if ($res = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($res) > 0){
        while($row = mysqli_fetch_array($res)){
            echo "
            <label for='cidadedestino' id='est1'>Cidade</label>
            <input type='text' id='cidadedestino2' name='cidadedestino' 
            value= '".$row['cidade']."'>
            <br>
            <br>
 
            <label for='paisdestino' id='est2'>País</label>
            <input type='text' id='paisdestino2' name='paisdestino' 
            value= '".$row['pais']. "''>
            <br>
            <br>

            <label for='numero_pessoa' id='est3'>Número de pessoas</label>
            <input type='number' id='numero_pessoa2' name='numero_pessoa' 
            value= '".$row['numero_pessoas']. "''>
            <br>
            <br>

            <label for='numero_noites' id='est4'>Noites</label>
            <input type='number' id='numero_noites2' name='numero_noites' 
            value= '".$row['numero_noites']. "'''>
            <br>
            <br>
            <label for='valor_Pacote' id='est5'>Valor do pacote</label>
            <input type='number' name='valor_Pacote' id='valor_Pacote2'
            value= '".$row['valor_Pacote']. "'''>
            <br>
            <br>
            <label for='valor_Pacote' id='est5'>Imagem atual.</label>
           
            <img name='path_imagem' style='width:400px; border-radius:5px;'  src='".$row['path_imagem']. "'> 
            <br>
            <br>
            <input hidden=hidden id='path_imagem2' type='text' value='".$row['path_imagem']. "'/>
           
            <br>

            <input hidden=hidden id='id_pacote2' type='text' value='".$row['id']. "'/>
            
            ";
        }
        mysqli_free_result($res);
     }
  
      else {
           echo "Nenhum registro encontrado";
           }
    }

      else {
           echo "ERRO DE CONEXÃO";
          }

?>


</html> 