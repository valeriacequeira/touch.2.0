<?php  session_start();

?>
<!DOCTYPE html>
<html lang="es" dir="lrt">
<head>
	<meta charset="utf-8">
	<title>mi perfil</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estilo-inicio-sesion.css">
</head>
<body>
   <header>
		<div class="container">
	<!-- navbar -->
			  <nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="#">TOUCH 2.0</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Mensajes</a>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Ajustes
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="#">Seguridad</a>
			          <a class="dropdown-item" href="#">Privacidad</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">Idioma</a>
			        </div>
			      </li>
			    </ul>
			    <form class="form-inline my-2 my-lg-0">
			      <input class="form-control mr-sm-2" type="seach" placeholder="buscar" aria-label="buscar">
			      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
			    </form>
			  </div>
			</nav>
	    </div>
   </header>
      <div class="container-fluid gedf-wrapper">
              <div class="row">
                  <div class="col-md-3">
                    <div class="card">
          <!-- columna izquierda datos personales -->
                          <div class="card-body">
                              <div class="h5"><h3>Bienvenido <?=$_SESSION["nombre"]?></h3></div>
                              <div> <img  src="fotosPerfil/<?=$_SESSION["foto"];?>" alt=""> </div>
                              <div class="h7 text-muted">Nombre : Sofia Lourdes Sorhanet</div>
                              <div class="h7">Desarollador de Aplicaciones web, JavaScript, PHP, Java, Python, Ruby, Java, Node.js,
                                  etc.
                              </div>
                          </div>
          <!-- seguidores y seguidos -->
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item">
                                  <div class="h6 text-muted">Seguidores</div>
                                  <div class="h5">5.2342</div>
                              </li>
                              <li class="list-group-item">
                                  <div class="h6 text-muted">Siguiendo</div>
                                  <div class="h5">6758</div>
                              </li>
                              <li class="list-group-item">Mensajes</li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-md-6 gedf-main">
        <!--- hacer una publicacion-->
                      <div class="card gedf-card">
                          <div class="card-header">
                              <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                  <li class="nav-item">
                                      <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Hacer una Publicación</a>
                                  </li>
              <!-- publicar una imagen -->
                                  <li class="nav-item">
                                      <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Subi una Imagen</a>
                                  </li>
                              </ul>
                          </div>
        <!-- area para escribir una publicacion -->
                          <div class="card-body">
                              <div class="tab-content" id="myTabContent">
                                  <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                      <div class="form-group">
                                          <label class="sr-only" for="message">posts</label>
                                          <textarea class="form-control" id="message" rows="3" placeholder="¿Qué tenés ganas de contar?"></textarea>
                                      </div>
                                  </div>
                                  <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                                      <div class="form-group">
                                          <div class="custom-file">
                                              <input type="file" class="custom-file-input" id="customFile">
                                              <label class="custom-file-label" for="customFile">Carga de imágenes</label>
                                          </div>
                                      </div>
                                      <div class="py-4"></div>
                                  </div>
                              </div>
              <!-- boton para compartir -->
                              <div class="btn-toolbar justify-content-between">
                                  <div class="btn-group">
                                      <button type="submit" class="btn btn-primary">Compartir</button>
                                  </div>
              <!-- menu desplegable -->
                                  <div class="btn-group">
                                      <button id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                          aria-expanded="false">
                                          <i class="fa fa-globe"></i>
                                      </button>
                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                          <a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Publico</a>
                                          <a class="dropdown-item" href="#"><i class="fa fa-users"></i> Amigos</a>
                                          <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Solo yo</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

          <!--publicacion-->
                      <div class="card gedf-card">
                          <div class="card-header">
                              <div class="d-flex justify-content-between align-items-center">
                                  <div class="d-flex justify-content-between align-items-center">
                  <!-- primer imagen de publicacion -->
                                      <div class="mr-2">
                                          <img class="rounded-circle" width="45" src="fotosPerfil/<?=$_SESSION["foto"];?>" alt="">
                                      </div>
                  <!-- usuario y quien publico  -->
                                      <div class="ml-2">
                                          <div class="h5 m-0"><?=$_SESSION["nombre"]?></div>
                                          <div class="h7 text-muted"><?=$_SESSION["nombre"]?></div>
                                      </div>
                                  </div>
                                  <div>

            <!-- boton para puntos de configuracion -->
                                      <div class="dropdown">
                                          <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              <i class="fa fa-ellipsis-h"></i>
                                          </button>

              <!-- eleccion de configuracion -->
                                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                              <div class="h6 dropdown-header">Configuracion</div>
                                              <a class="dropdown-item" href="#">Seguir</a>
                                              <a class="dropdown-item" href="#">Ocultar</a>
                                              <a class="dropdown-item" href="#">Reportar</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
              <!-- tiempo que lo publico -->
                          <div class="card-body">
                              <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>Hace 10 min </div>
                              <a class="card-link" href="#">
                                  <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adip.</h5>
                              </a>
            <!-- texto publicAdo -->
                              <p class="card-text">
                                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem eos ipsa praesentium esse magnam nemo dolor
                                  sequi fuga quia quaerat cum, obcaecati hic, molestias minima iste voluptates.
                              </p>
                          </div>
          <!-- boton de mg comentar  -->
                          <div class="card-footer">
                              <a href="#" class="card-link"><i class="fa fa-gittip"></i> Me gusta</a>
                              <a href="#" class="card-link"><i class="fa fa-comment"></i> Comentar</a>
                              <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Compartir</a>
                          </div>
                      </div>
			<div class="cerrarsesion">
			    <a href="cerrarsesion.php">Cerrar Sesion</a>
			</div>
  <!-- footer -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
