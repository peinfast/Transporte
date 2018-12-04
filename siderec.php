<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <script type="text/javascript" src="assets/js/main.js"></script>
        <script type="text/javascript" src="assets/js/modernizr-2.6.2.min.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/main.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style media="screen">
              #menu{
                  position: fixed;
                  top:0px;
                  width: 100%;
              }
        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!--Header-->
        <header>

        </header>

        <!--Barra de Navegacion-->
        <nav class="navbar navbar-default" id="menu">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Cambiar Navegacion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="operacionesrec.php" class="navbar-brand"><img src="assets/img/logo.png" width="100"></a></div>

                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item dropdown">

                        <li><a href="?c=Transporte&a=Clabrec">Registro</a></li>
                    </ul>
                    <form onsubmit="window.open('', 'popup', 'width = 800, height = 600')" target="popup" id="formulario" method="post" class="navbar-form navbar-right" action="model/busqueda.php">
                        <div class="form-group">
                            <input type="text" name="buscar" class="form-control"></div>
                            <button type="submit" id="btn-ingresar" value="Buscar" name="buscador" class="btn btn-primary btn-lg">Buscar</button>
                    </form>
                    <div id="resp"></div>
                    <ul class="nav navbar-nav" style="float:right;">
                      <li><a type="button" class="btn btn-primary" style="color:red;" data-toggle="modal" data-target="#exampleModal">Subir Archivo</a></li>
                        <li><a href="index.html">Cerrar Sesion</a></li>
                    </ul>
                </div>

        </nav>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cargar archivo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action='control/control.php' method='post' enctype="multipart/form-data">
                    <input type='file' name='sel_file'  size='20'>
                    <br/>
                    <input align='right' type='submit' name='submit' class='btn btn-primary' value='Subir archivo'>
                </form>
              </div>
      </div>
      </div>
      </div>
        <footer>

        </footer>



        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.10.1.min.js"><\/script>')</script>


    </body>
</html>
