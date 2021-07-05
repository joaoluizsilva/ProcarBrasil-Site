<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href="../src/imagens/procarbrasil.png">
    <!-- INDEX DE 2º VIA DE BOLETO FORNECIDO PELA HINOVA SGA -->
    <title>2ª via de Boleto</title>
    <!-- CSS DO SGA -->
    <link rel="stylesheet" href="https://vsn4ik.github.io/bootstrap-submenu/dist/css/bootstrap-submenu.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/dt/dt-1.10.11/datatables.min.css" />
    <!-- css sga -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../src/css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- CSS DO SGA -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;0,800;1,300;1,400;1,600;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/css/style2.css">
    <link rel="stylesheet" href="../src/css/mobile600.css">
    <link rel="stylesheet" href="../src/css/nav-mobile.css">
    <link rel="stylesheet" href="./css/estilo2via.css">
    <!-- INDEX DE 2º VIA -->
</head>

<body>
<div class="information">
        <div class="info">
            <span>SOCORRO 24H</span>
            <span class="number"> 0800 082 9484</span>
            <div class="info-redesocial">
                <a href="https://www.instagram.com/procardobrasil/" target="_blank">
                    <img class="social" src="./src/imagens/instagram-novo.png"  alt=""  loading="lazy">
                </a>
                <a  href="https://www.facebook.com/procardobrasil/" target="_blank">
                    <img class="social" src="./src/imagens/facebook-novo.png" alt=""  loading="lazy">
                </a>
            </div>
        </div>    
    </div>
<header>
    <!-- NavBar 2 -->
    <div class="nav-desktop mobile-apaga">
            <div class="logo-procar">
                <img src="../src/imagens/Logo-procar.png" alt="Procar Brasil">
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-procar">
                <button class="navbar-toggler " type="button" data-toggle="collapse" 
                data-target="#nav-procar" aria-controls="navbarText" aria-expanded="false" 
                aria-label="Toggle navigation">
                    <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                          </svg>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="nav-procar">
                 <div class="menu-nav">
                     <ul class="navbar-nav ml-auto">
                         <li class="nav-link hover-linha"><a href="">INÍCIO</a></li>
                         <li class="nav-link dropdown mr-3">
                            <a class="nav-link dropdown-toggle hover-linha" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                FILIAIS
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="./arapiraca.html">ARAPIRACA</a>
                                <a class="dropdown-item" href="./pernambuco.html">PERNAMBUCO</a>
                                <a class="dropdown-item" href="./bahia.html">BAHIA</a>
                                <a class="dropdown-item" href="./sergipe.html">SERGIPE</a>
                                <a class="dropdown-item" href="#">RIO GRANDE DO NORTE</a>
                                <a class="dropdown-item" href="./belo-horizonte.html">BELO HORIZONTE</a>
                            </div>
                        </li>
                         <!-- <li class="nav-link hover-linha"><a href="#beneficios"> VANTAGENS</a></li>
                         <li class="nav-link hover-linha"><a href="#aplicativo"> APLICATIVO</a></li> -->
                         <li class="nav-link">
                             <a href="https://api.whatsapp.com/send?phone=5582981594877"><button class="btn btn-warning btn-descktop"> SEU VEÍCULO BATEU? CLIQUE AQUI </button></a>
                         </li>
                     </ul>
                 </div>
                 </div>
            </nav>
            <!-- FIM DA nav -->
        </div>        
        <div id="nav-mobile">
            <nav class="navbar navbar-expand-lg navbar-light bg-nav-mobile ">
                <a class="navbar-brand" href="#">
                    <img src="../src/imagens/logo-procar-png.png" alt="Procar Brasil">
                </a>
                <div class="btn-reboque">
                    <a href="https://api.whatsapp.com/send?phone=5582981594877"><button class="btn btn-warning">SOLICITAR REBOQUE</button></a>
                </div>
                <div class="btn-2via">
                    <a href="https://www.procardobrasil.com.br/2via/index.php"><button class="btn btn-success">2º VIA BOLETO</button></a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">INÍCIO</li>
                         <!-- <li class="nav-item">FILIAIS</li> -->
                         <li class="nav-item dropdown mr-3">
                            <a class="nav-link dropdown-toggle drop-nav-top" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                FILIAIS
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="./arapiraca.html">ARAPIRACA</a>
                                <a class="dropdown-item" href="./pernambuco.html">PERNAMBUCO</a>
                                <a class="dropdown-item" href="./bahia.html">BAHIA</a>
                                <a class="dropdown-item" href="./sergipe.html">SERGIPE</a>
                                <a class="dropdown-item" href="#">RIO GRANDE DO NORTE</a>
                                <a class="dropdown-item" href="./belo-horizonte.html">BELO HORIZONTE</a>
                            </div>
                        </li>
                  </ul>
                </div>
              </nav>
        </div>           

</header>
    <!-- Fim da Nav Bar -->

    <!-- Div SGA 2º via !! NÃO MEXER !!  -->
    <div class="container-2via">
        <div class="row">
            <div class="md-sm">
                <div class="col-sm aliamento-2via">
                    <div class="form-group text-center">
                        <input type="button" class="btn btn-success btn-lg classModal btn-2via" data-toggle="modal" data-target=".bs-example-modal-lg" id="pbSegundaVia" name="pbSegundaVia" value="2° Via Boleto" url="segundaVia.php">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Div SGA 2º via !! NÃO MEXER !!  -->
    <div id="aplicativo">
        <div class="aplicativo">
            <div class="vantagem" id="VANTAGENS" style="height: 5rem">
                <h4 class="tx-amarelo">Aplicativo</h4>
                <h1 class="tx-verde">A Facilidade em suas <span class="tx-amarelo">Mãos</span> </h1>
            </div>
            <div class="botoes-app">
                <div class="botao-div">
                <a type="button" href="https://apps.apple.com/br/app/procar-brasil/id1449854728">
                        <img class="appbtn" src="..\src/imagens/Applestorebotao_app.png"></a>
                </div>
                <div class="botao-div">
                <a type="button" href="https://play.google.com/store/apps/details?id=br.com.hinovamobile.procarbrasil&hl=pt_BR">
                        <img class="appbtn" src="..\src/imagens/googleplaybotao_app.png"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Roda pé -->
    <footer>
        <div class="rodape">
            <div class="col-rodape mobile-apaga">
                <div class="rodape-logo mobile-apaga"><img src="../src/imagens/logo-procar-png.png" alt=""></div>
            </div>
            <div class="col-rodape a-esqueda">
                <div class="col-rodape-conteudo">
                    <label for="">Mapa do Site</label>
                <ul class="list-group">
                    <li class="list-item">INÍCIO</li>
                    <li class="item-list dropdown cursor-link"> 
                        <div class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">FILIAIS</div>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item texto-brc" href="./arapiraca.html">ARAPIRACA</a>
                                <a class="dropdown-item texto-brc" href="./pernambuco.html">PERNAMBUCO</a>
                                <a class="dropdown-item texto-brc" href="./bahia.html">BAHIA</a>
                                <a class="dropdown-item texto-brc" href="./sergipe.html">SERGIPE</a>
                                <a class="dropdown-item texto-brc" href="#">RIO GRANDE DO NORTE</a>
                                <a class="dropdown-item texto-brc" href="./belo-horizonte.html">BELO HORIZONTE</a>
                        </div>
                    </li>
                    <li class="item-list">VANTAGENS</li>
                    <li class="item-list">APLICATIVO</li>
                    <li class="item-list">2º VIA DE BOLETO</li>
                    <li class="item-list dropdown cursor-link"> 
                        <div class="dropdown-toggle area-colaborador btn-colaborador" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ÁREA DO COLABORADOR</div>
                            <div class="dropdown-menu texto-brc" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item texto-brc" href="https://webmail1.hostinger.com.br/" target="_blank">EMAIL</a>
                            <a class="dropdown-item texto-brc" href="https://eris.hinova.com.br/sga/sgav4_procar_do_brasil/v5/login.php" target="_blank">SGA</a>
                            <a class="dropdown-item texto-brc" href="https://procardobrasil.com.br/assistencia24hr/" target="_blank">ASSISTÊNCIA</a>
                            <a class="dropdown-item texto-brc" href="http://plataformaprocar.com.br:8082/" target="_blank">MONITORAMENTO</a>
                        </div>
                    </li>
                </ul>
                </div>
            </div>
            <div class="col-rodape a-esqueda text-center">
                <div class="col-rodape-conteudo a-esqueda">
                    <label> Rede Sociais</label>
                <div class="rodape-redesocial a-esqueda">
                    <a href="https://www.facebook.com/procardobrasil/">
                        <img src="../src/imagens/footer-facebook.png" alt="Facebook Procar Brasil">
                    </a>
                    <a href="https://www.instagram.com/procardobrasil/">
                        <img src="../src/imagens/footer-Instagram.png" alt="Instagram Procar Brasil">
                    </a>
                </div>    
            </div>
            </div>
            <div class="col-rodape a-esqueda">
                <div class="col-rodape-conteudo">
                    <div class="rodape-localizacao">
                        <label>Encontre-nos</label>
                        <p>R. Comendador Palmeira,<br> Nº 507 - Farol, Maceió - AL, <br> 57051-150</p>
                    </div>
                    <div class="rodape-mapa" href="#">
                        <!-- <img src="./src/imagens/footer-maps.png" alt="Mapa da Procar Brasil"> -->
                        <a href="#">
                            <button><img src="../src/imagens/footer-maps.png" alt="Mapa da Procar Brasil">
                                Encontre no Maps</button>
                        </a>
                    </div>
                    <!-- <img src="./src/imagens/footer-maps.png" alt="Mapa da Procar Brasil"> -->
                    <!-- <div class="rodape-mapa-waze" href="#">
                        <a href="#">
                            <button><img src="./src/imagens/footer-maps.png" alt="Mapa da Procar Brasil">
                                Encontre no Maps</button>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </footer>
</body>

<!-- ## Modal NÃO MEXER ## -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                <h4 class="" id="myModalLabel"></h4>
            </div>

            <div class="modal-body" id="modal-corpo">
                <div id="body" style="display: table; width:100%"></div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<!-- ## Fim Modal NÃO MEXER ## -->

</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- old -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="script.js"></script>