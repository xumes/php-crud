<?php
/* Redirect browser */
//header("Location: http://www.xumes.com/residencialflamboyant/site/index.php");
//header("Location: /site/index.php");
 /* Make sure that code below does not get executed when we redirect. */
//exit;
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>PHP CRUD</title>

        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cerulean/bootstrap.min.css">

        <!-- fontes e icones -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

        <!-- minha propria pagina de estilo -->
        <link rel="stylesheet" href="../css/estilo.css">

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
                    <nav class="navbar navbar-default">
                          <div class="container-fluid">
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                            </div>

                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="fa fa-user"></i> Login <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <form class="navbar-form" action = "../admin/index.php" role="login">
                                                <li>
                                                    <div class="form-group input-group-sm">
                                                        <label>E-mail:</label>
                                                        <input type="email" class="form-control input-sm" placeholder="nome@email.com">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group input-group-sm">
                                                        <label>Password:</label>
                                                        <input type="password" class="form-control input-sm">
                                                    </div>
                                                </li>
                                                <li><button type="submit" class="btn btn btn-primary">Submit</button></li>
                                            </form>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                          </div>
                        </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">

				    <div class="btn-group-vertical">
					    <a href="#" class="btn btn-default">Public website</a>
					    <a href="#" class="btn btn-primary">Restrict to users</a>
					    <a href="admin/index.php" class="btn btn-success">Administration area</a>
					    
					</div>
				</div>



                <div class="col-md-10">
                   
                            <div class="jumbotron">
                                <h1>PHP CRUD</h1>
                                <p>The purpose os this website is to give you all CRUD (Create, Read, Update and Delete) features of an PHP website using PDO.</p>
                                <p>Only the Administration area exists on this module. Other modules are part of other projects deployed or not (yet) into my Github account.</p>
                            </div>

                </div>


			</div>
		
</body>
</html>

<?php include 'partes/rodape.php'; ?>