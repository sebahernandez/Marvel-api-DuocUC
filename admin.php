<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Admin de Crud Marvel">
    <meta name="author" content="Sebastian Lagos Hernandez">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bowlby+One+SC&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="admin.php">Admin</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="contacto.html">Contacto</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
     <div class="jumbotron rounded-0 p-0 m-0"
        style="background-image: url('img/marvel-bg.jpg'); background-size: cover; background-position: center top; height: 600px; align-items: flex-start; justify-content: center; font-family: 'Bowlby One SC', cursive; display: flex;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="bg-danger pb-3 pl-3 pt-3 text-white">
                        MARVEL HEROES </h3>
                    <p class="text-white">The Marvel
                        Comics API developers.</p>
                </div>
            </div>
        </div>
    </div> 

   <!-- Section_lista de personajes -->
   <section class="lista-personajes py-5">
        <div class="container">
            <h2>Lista de personajes Marvel Comics</h2>
            <p>Crea, edita y elimina los personajes que tu quieras y compartelos en tu pantalla principal</p>

            <!-- Añadir personaje-->
            <button class="btn btn-success agregar mt-3 mb-3" data-toggle="modal" data-target="#modalAgregar"><i
                    class="fas fa-plus"></i> Agregar
                Personaje</button>

            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered  table-striped w-100" id="content">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th class="w-25" scope="col">Acciones</th>

                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


    <!-- Modal Agregar-->
    <div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="modalAgregarLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAgregarLabel">Agregar Personaje</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="url-imagen-label">Url imagen</span>
                        </div>
                        <input type="text" class="form-control" id="url-imagen" placeholder="Url imagen"
                            aria-label="Url imagen" aria-describedby="url-imagen-label">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="nombre-label">Nombre</span>
                        </div>
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre" aria-label="Nombre"
                            aria-describedby="nombre-label">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="desc-label">Descripción</span>
                        </div>
                        <input type="text" class="form-control" id="descripcion" placeholder="Descripción"
                            aria-label="Descripcion" aria-describedby="desc-label">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-outline-dark" id="agregar_btn">Agregar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- // Modal Agregar-->

    <!-- Modal Editar -->
    <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="modalEditarLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditarLabel">Editar Personaje</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="url-imagen-label">Url imagen</span>
                        </div>
                        <input type="text" class="form-control" id="url-imagen" placeholder="Url imagen"
                            aria-label="Url imagen" aria-describedby="url-imagen-label">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="nombre-label">Nombre</span>
                        </div>
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre" aria-label="Nombre"
                            aria-describedby="nombre-label">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="desc-label">Descripción</span>
                        </div>
                        <input type="text" class="form-control" id="descripcion" placeholder="Descripción"
                            aria-label="Descripcion" aria-describedby="desc-label">
                    </div>

                    <input type="hidden" id="identificador">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-outline-dark" id="editar_btn">Editar Personaje</button>
                </div>
            </div>
        </div>
    </div>
    <!-- // Modal Editar-->

    <!-- Modal Eiminar -->
    <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEliminarLabel">Eliminar Personaje</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <p>¿Seguro que quieres eliminar la Personaje?<span></span></p>
                        <input type="hidden" id="identificador">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-outline-dark" id="eliminar_btn">Eliminar Personaje</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // Modal Eiminar -->

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
    
</body>

</html>