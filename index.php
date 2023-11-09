<!--Projeto da Disciplina DES.WEB em HTML,CSS,JS e PHP Estácio 
Curso Análise e Desenvolvimento de Sistemas -->


<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <!--Cabeçalho inicial iniciando Framework Bootstrap-->
        <title>Viaje.com</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width"/> 
        <meta name="description" content="Página Agencia de Viagem">
        <meta name="keywords" content="Destinos,Roteiros,Pacotes,Voos">
        <meta name="author" content="Renato Nogueira Nery - Rio de Janeiro ,Brasil 2023 ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link rel="stylesheet" href="bootstrap-4.6.2-dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css"   href="style/style.css" media="screen"/>
    </head>

    <script>
         $(function(){
           $('button#deletar').click(function(){
             var id_pacote = $(this).val();
               $.post(
                 'deletar_pacote.php',
                   {
                     action : "deletar",
                     id_pacote: id_pacote
                   },
                    function(res){
                   location.reload();
                   }
                 )
             })
        })

    </script>
    
    <body>  

    
            <nav class="navbar navbar-expand-lg navbar-light bg-light menu">
                <a class="navbar-brand item-menu" href="index.php">VIAGENS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link item-menu" href="review.html">SOBRE</a>
                    </li>
                     </ul>
                     
                     <button class="btn-menu"><a href="cadastroPacotes.html" >Cadastrar Pacotes</a></button>
                </div>
                </nav>

                <div class="">
                <img src="img/capa-viagens.jpg" alt="imagem capa viagem" class="imagem-Home">
                </div>

                <h1 class="lead">Escolha o seu próximo destino.</h1>

 
                
                  <div class='container'>
                     <div class="row">

                <?php

                   $conn = mysqli_connect("localhost", "root","", "viagem_db");

                   $sql = "SELECT * FROM pacotes";
                   if($res = mysqli_query($conn, $sql)){
                   if(mysqli_num_rows($res) > 0){
        
                   while ($pacote = mysqli_fetch_array($res)){

            echo "
                 <div class='row'>
                <div class='col'>
                <div class='box-pacote'>
                <img class='img' src='$pacote[path_imagem]'>  
                <div class='row titulo-pacote'>
                <img src='img/icons8-avião-50 1.jpg' style='width: 30px;'>
                <div>
                <p class='titulo-pacote'><b> $pacote[pais] &nbsp; $pacote[numero_noites] noites  </b></p></div> </div>
                
                <div>
                <p class='pacote_cidade'>Cidade: &nbsp; $pacote[cidade]</p>
                  
                </div>
                <p class='titulo-pacote'>$pacote[numero_pessoas] &nbsp; Pessoas </p><br>
                <div id='valor'><p class='titulo-pacote'>Valor:<br> R$ $pacote[valor_Pacote]</p></div>
              
                 
                <button type='button' id='editar' class='btn btn-primary' value='" .$pacote['id'] ."'>Editar</button> 

                <button type='button'   id='deletar' class='btn btn-danger' value='" .$pacote['id'] ."'>Deletar</button> 
                
                </div>
                </div>
            
            
            ";
                        
           
         
         
       
        }
         
        mysqli_free_result($res);    }

}
else {
    echo "Nenhum registro foi encontrada";
}


?>
              
                          </div>
                          </div>
                          </div>
                          
                        <br>
                        <br>
                      

               
     
                <script src="bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
                <script src="bootstrap-4.6.2-dist/js/bootstrap.js"></script>
     </body>
     
</html>
