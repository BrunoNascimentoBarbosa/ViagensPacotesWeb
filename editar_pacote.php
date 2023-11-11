<?php 

$mysqli = new mysqli("localhost", "root","","viagem_db");

$id_pacote = $_POST["id_pacote"];
$cidade= mysqli_real_escape_string( $mysqli, $_POST["cidade"]);
$pais = mysqli_real_escape_string( $mysqli, $_POST["pais"]);
$numero_pessoas = mysqli_real_escape_string( $mysqli, $_POST["numero_pessoas"]);
$numero_noites = mysqli_real_escape_string( $mysqli, $_POST["numero_noites"]);
$valor_Pacote= mysqli_real_escape_string( $mysqli, $_POST["valor_Pacote"]);
$path_imagem = mysqli_real_escape_string( $mysqli, $_POST["path_imagem"]);
$script = "
         UPDATE pacotes
         SET cidade = '$cidade',
             pais = '$pais',
             numero_pessoas = '$numero_pessoas',
             numero_noites = '$numero_noites',
             valor_Pacote = '$valor_Pacote',
             path_imagem = '$path_imagem'
         WHERE id=$id_pacote;
         
         ";    

$query = $mysqli -> query($script);

if ($query) {
    echo "Pacote atualizado";
}
else {
    echo "ERRO AO ATUALIZAR" . $mysqli->error;
}
      
 // Fechar a conexão
$mysqli->close();
 


?>