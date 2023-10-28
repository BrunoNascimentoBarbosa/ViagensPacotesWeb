<?php 

include("conexao.php");

if(isset($_FILES['arquivo'])){
    $arquivo = $_FILES['arquivo'];
    $dados = $_POST;
    var_dump($dados);

    $cidade = $dados['cidadedestino'];
    $pais = $dados['paisdestino'];
    $pessoas = $dados['numero_pessoa'];
    $noites = $dados['numero_noites'];
    $valor = $dados['valor_Pacote'];
    
    // Confirmando se estamos recebendo os dados corretamente.
    echo"<br> $cidade <br> $pais <br>$pessoas <br>$noites <br>  $valor<br>" ;

    if($arquivo['error'])
       die("Falha ao enviar arquivo");

    if($arquivo['size'] > 2097152)
       die("Arquivo muito grande! Max:2MB");

    $pasta = "arquivos/";
    $nomeDoArquivo = $arquivo['name'];
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
     
    if ($extensao != "jpg" && $extensao != "png")
       die("Tipo de arquivo não aceito." . $extensao);
    $path_imagem = $pasta . $novoNomeDoArquivo. "." . $extensao;
    $salvar = move_uploaded_file($arquivo["tmp_name"], $path_imagem);
       if($salvar){
        echo "Imagem enviada com sucesso para pasta arquivos: <a href='arquivos/$novoNomeDoArquivo.$extensao'> clique aqui para ver</a>";
         $mysqli = new mysqli("localhost", "root","", "viagem_db");
        $mysqli -> query ("INSERT INTO viagem_db.pacotes (cidade,pais,numero_pessoas,numero_noites,valor_Pacote,path_imagem	) 
                    VALUES('$cidade', '$pais', '$pessoas', '$noites','$valor','$path_imagem')" ) or die($mysqli->error);
// Redirecionando para pagina home
header("Location: index.html");
exit; // Certifique-se de sair após o redirecionamento

    } else
        echo "FALHA AO ENVIAR AQUIVO. $extensao. $pasta . $nomeArquivo";
     
}

?>