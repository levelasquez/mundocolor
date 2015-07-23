<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="/css/back/bootstrap.min.css">
    <link rel="stylesheet" href="/css/back/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Administración</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-main">
              <ul class="nav navbar-nav">
                <li class="active"><a href="/admin/categorias">Categorias <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Productos</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Salir</a></li>
              </ul>
            </div>
          </div>
        </nav>
    </header>

    @yield('contenido')

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>