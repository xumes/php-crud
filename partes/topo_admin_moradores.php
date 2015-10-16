<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Administration area - PHP CRUD</title>

        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cerulean/bootstrap.min.css">

        <!-- fontes e icones -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

        <!-- minha propria pagina de estilo -->
        <link rel="stylesheet" href="../../css/estilo.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    
        <div class="container-fluid">

            <div class="row menu-principal">
                <div class="col-md-2">
                    <img class="img-responsive" alt="Nosso logotipo" src="http://flamboyantimoveis.com.br/photos/TE0001-FOTO%20FLAMBOYANT.jpg">
                </div>
                <div class="col-md-10">
                    <nav class="navbar navbar-inverse">
                          <div class="container-fluid">
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                              <a class="navbar-brand" href="#">Welcome (to be updated by username)</a>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="../site/index.php"><i class="fa fa-sign-out"></i> Exit</a></li>
                                </ul>
                            </div>

                          </div>
                        </nav>
                </div>
            </div>


            <div class="row">
                <div class="col-md-2">
                    <!--<img src="http://lorempixel.com/output/people-q-c-80-80-5.jpg" class="img-responsive img-thumbnail" id="img-perfil">-->
                    <div class="list-group">
                      <a class="list-group-item" href="#"><i class="fa fa-home fa-fw"></i>&nbsp; Home</a>
                      <a class="list-group-item" href="./moradores/lista.php"><i class="fa fa-cog  fa-fw"></i>&nbsp; Manage users</a>
                      <a class="list-group-item" href="#"><i class="fa fa-line-chart  fa-fw"></i>&nbsp; Cockpit</a>
                      <a class="list-group-item" href="#"><i class="fa fa-calendar  fa-fw"></i>&nbsp; Events schedule</a>                      
                      <a class="list-group-item" href="#"><i class="fa fa-futbol-o  fa-fw"></i>&nbsp; Book an area</a>
                      <a class="list-group-item" href="#"><i class="fa fa-commenting-o fa-fw"></i>&nbsp; Talk to the major</a>
                      <a class="list-group-item" href="#"><i class="fa fa-sign-out fa-fw"></i>&nbsp; Exit</a>
                    </div>


                </div>