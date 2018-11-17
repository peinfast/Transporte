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
        <script>
	           $(document).on('ready',function(){

	              $('#btn-ingresar').click(function(){
		                var url = "model/busqueda.php";

		                $.ajax({
		                    type: "POST",
		                     url: url,
		                    data: $("#formulario").serialize(),
		                 success: function(data)
		                 {
			                    $('#resp').html(data);
		                 }
		                 });
	             });
	            });
	      </script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!--Header-->
        <header>

        </header>

        <!--Barra de Navegacion-->
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Cambiar Navegacion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="operaciones.php" class="navbar-brand"><img src="assets/img/logo.png" width="100"></a></div>

                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                      <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Area
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="?c=Transporte&a=L1brem">L1bre</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?c=Transporte&a=Logisticam">Logistica Inversa</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?c=Transporte&a=Movilidadm">Movilidad</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?c=Transporte&a=Proyectosm">Proyectos</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?c=Transporte&a=Recibom">Recibo</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?c=Transporte&a=Retailm">Retail</a>
                      </div>
                    </li>
                        <li><a href="?c=Transporte&a=Clab">Registro</a></li>
                    </ul>
                    <form class="navbar-form navbar-left" method="post" id="formulario">
                        <div class="form-group">
                            <input type="text" name="buscar" class="form-control"></div>
                            <input type="button" id="btn-ingresar" value="Buscar" name="buscador" class="btn btn-primary btn-lg" data-target="#miModal">
                    </form>
                    <div id="resp"></div>

                </div>

        </nav>
        <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="vertical-alignment-helper">
           <div class="modal-dialog vertical-align-center" role="document">
		           <div class="modal-content">
			              <div class="modal-header">
				                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					                       <span aria-hidden="true">&times;</span>
				                           </button>
				                               <h4 class="modal-title" id="myModalLabel">Informacion</h4>
			             </div>
			             <div class="modal-body">
                        Cosas Varias GG izzzzziiiiiiiii...
                   </div>
		           </div>
	           </div>
             </div>
        </div>


        <footer>

        </footer>



        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.10.1.min.js"><\/script>')</script>


    </body>
</html>
