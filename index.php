<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bowlby+One+SC&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <title>Proyecto API Marvel Heroes</title>
    <!-- Data Table Jquery-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css" />
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <link href="style.css" rel="stylesheet">

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        
    
  <a class="navbar-brand" href="index.php">Marvel Crud </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin.php">Admin</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="contacto.html">Contacto</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

    <header>
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"
            class="animate__animated animate__fadeIn">
            <source src="video/bg-marvel.mp4" type="video/mp4">
        </video>
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1 class="display-3">CRUD Marvel Comics</h1>
                    <p class="lead mb-0">Encuentra tu personaje favorito </p>
                </div>
            </div>
        </div>
    </header>
    <!-- Buscador de cards -->

    <section class="bg-dark py-5">
        <div class="container">
            <h2 class="text-center text-light">Busca tu personaje favorito Marvel</h2>
            <div id="buscador">
                <div class="input-group-prepend">
                    <input type="text" class="form-control searchbox-input w-70 " aria-label="Buscar" placeholder="Escribe tu busqueda">
                </div>
            </div>
        </div>

        <div class="text-center py-3">
            <a href="https://slagosh.laboratoriodiseno.cl/Marvel-API/admin.php" class="btn btn-danger">Añade tu
                personaje</a>
        </div>
    </section>
    <!-- // Buscador de cards -->
    <!-- Cards -->
    <section class="py-5">
        <div class="container mt-5">
            <h2 class="mb-3 text-left text-light">Personajes de Marvel Comics</h2>
            <div class="card-columns" id="contenido"></div>
        </div>
    </section>
    <!-- // Cards -->
    <footer class="py-5 bg-dark text-light text-center">
        <div class="container">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <h4>Diseñado y desarrollado por Sebastián Lagos</h4>
                    <p>Lenguajes de programación DuocUC 2020</p>
                </div>
            </div>
        </div>

    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/listar.js"></script>
    <script src="assets/js/agregar.js"></script>
    <script src="assets/js/editar.js"></script>
    <script src="assets/js/eliminar.js"></script>
    <script src="assets/js/listar-cards.js"></script>
    <script src="assets/js/buscador.js"></script>
</body>

</html>