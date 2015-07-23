<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Mundo a Color</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/docs.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,700">
</head>
<body>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top" id="menu" >
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#desplegar" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <figure class=imagen-container>

          </figure>
        </div>
        <div class="collapse navbar-collapse" id="desplegar">
          <ul class="nav navbar-nav">
            <li><a href="/"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
            <li><a href="/productos"><span class="glyphicon glyphicon-paperclip"></span> Productos</a></li>
            <li><a href="/empresa"><span class="glyphicon glyphicon-blackboard"></span> La Empresa</a></li>
            <li><a href="/contacto"><span class="glyphicon glyphicon-send"></span> Contacto</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="bg-holder pic1" data-width="1024" data-height="768">
      <div class="content intro">
        <h1>El Mundo a Color</h1>
        <p>Calidad en Pinturas</p>
      </div>
    </div>
  </header>

    @yield('contenido')

    <footer class="content-info" role="contentinfo">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <p class="navbar-text pull-left">El Mundo a Color C.A. J-00029572-7 Empresa del Grupo Pinturas C.A. Todos los derechos reservados.</p>
                    </div>

                    <div class="col-xs-6">
                        <p class="navbar-text">Sistema actualmente en <strong>Desarrollo</strong>.</p>
                    </div>
                </div>
            </div>
        </nav>
    </footer>
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.parallax-scroll.min.js"></script>
    <script>
      $(function() {
        $(".bg-holder").parallaxScroll({
          friction: 0.5,
          direction: "vertical"
        });
      });
    </script>
</body>
</html>