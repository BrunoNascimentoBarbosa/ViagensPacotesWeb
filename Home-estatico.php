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
        <link rel="stylesheet" href="estilo/bootstrap-3.4.1-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="estilo/justified-nav.css">
        <link rel="stylesheet" href="bootstrap-4.6.2-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style/style.css">
    </head>
    
    <body>  
            <nav class="navbar navbar-expand-lg navbar-light bg-light menu">
                <a class="navbar-brand item-menu" href="index.html">VIAGENS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link item-menu" href="review.html">SOBRE</a>
                    </li>
                     </ul>
                     
                     <button class="btn-cadastro"><a href="cadastroPacotes.html" >Cadastrar Pacotes</a></button>
                </div>
                </nav>
                <div class="imagem">
                <img src="img/capa-viagens.jpg" alt="imagem capa viagem" class="img-home">
                </div>

                <h1 class="lead">Escolha o seu próximo destino.</h1>
                
                <div class="container">
                  <div class="row">
                      <div class="col-sm">
                        
                        <div class="box-pacote">
    
                             <img class="img" src="img/paris.jpg"> 
                             
                             <div class="row titulo-pacote"> 
                             <img src="img/icons8-avião-50 1.jpg" style="width: 40px;">
                             
                             <style>
                                #paris p {
                                 font-size: 18px;
                               }
                                #valor p {
                                 font-size: 22px;
                               }
                             </style>
                              
                               <div id="paris">
                                 <p class="titulo-pacote"><b>Paris 7 noites</b></p>
                               </div>                      
                             
                             </div>
                             <div>                    
                                <p class="titulo-pacote">2 Pessoas</p>
                                <br>
                                <div id="valor"><p class="titulo-pacote">Valor:<br>R$15.000,00</p>
                                </div>
                                <p class="titulo-pacote"><a href="#"> Comprar</a></p>
                              </div> 
    
                        </div>
                      </div>
                    
                    
                        <div class="col-sm">
                          <div class="box-pacote">
        
                            <img class="img" src="img/Japan-2107x1406 1.png"> 
                            
                            <div class="row titulo-pacote"> 
                            <img src="img/icons8-avião-50 1.jpg" style="width: 40px;">
                            
                            <style>
                               #japao p {
                                font-size: 18px;
                              }
                               #valor p {
                                font-size: 22px;
                              }
                            </style>
                             
                              <div id="japao">
                                <p class="titulo-pacote"><b>Japão 7 noites</b></p>
                              </div>                      
                             
                            </div>
                            <div>                    
                               <p class="titulo-pacote">2 Pessoas</p>
                               <br>
                               <div id="valor"><p class="titulo-pacote">Valor:<br>R$15.000,00</p>
                               </div>
                               <p class="titulo-pacote"><a href="#"> Comprar</a></p>
                            </div> 
   
                          </div>
                            
                        </div>

                        <div class="col-sm">

                            <div class="box-pacote">
        
                              <img class="img" src="img/torre-de-pisa.jpg"> 
                              <div class="row titulo-pacote"> 
                              <img src="img/icons8-avião-50 1.jpg" style="width: 40px;">
                                 
                                 <style>
                                  #italia p {
                                   font-size: 18px;
                                 }
                                  #valor p {
                                   font-size: 22px;
                                 }
                               </style>
                               
                                 <div id="italia">
                                   <p class="titulo-pacote"><b>Itália 7 noites</b></p>
                                 </div>                      
                               
                                </div>
                               <div>                    
                                  <p class="titulo-pacote">2 Pessoas</p>
                                  <br>
                                  <div id="valor"><p class="titulo-pacote">Valor:<br>R$15.000,00</p>
                                  </div>
                                  <p class="titulo-pacote"><a href="#"> Comprar</a></p>
                                </div>
        
                            </div>
                         </div>
                         <div class="col-sm">
                                           
                            <div class="box-pacote">
                              <img class="img" src="img/nova-york.jpg"> 
                                <div class="row titulo-pacote"> 
                                  <img src="img/icons8-avião-50 1.jpg" style="width: 40px;">

                                    <style>
                                    #NewYork p {
                                      font-size: 18px;
                                      }
                                    #valor p {
                                      font-size: 22px;
                                      }
                                    </style>

                                      <div id= "NewYork">
                                        <p class= "titulo-pacote"><b>New York 7 noites</b></p>
                                      </div>
                                 
                                        <div>
                                          <p class="titulo-pacote">2 Pessoas</p>
                                          <br>
                                          <div id="valor">
                                            <p class="titulo-pacote">Valor:<br>R$15.000,00</p>
                                          </div>

                                          <p class="titulo-pacote"><a href= "#"> Comprar</p>
                                        </div>
                                 </div>
                          </div>
                        <br>
                        <br>
                        <br>

              
               
 
                <script src="bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
                <script src="bootstrap-4.6.2-dist/js/bootstrap.js"></script>
     </body>
     
</html>
