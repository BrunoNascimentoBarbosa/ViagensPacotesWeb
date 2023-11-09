<?php
$mysqli = new mysqli("localhost","root","","viagem_db");

$id_pacote = $_POST["id_pacote"];

$script = "
     DELETE FROM pacotes
     WHERE id = $id_pacote;

";

$query = $mysqli -> query($script);

if ($query){
     echo "Pacote deletado com sucesso";
}
else {
    echo "Erro ao deletar";
}


?>