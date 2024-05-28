<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">ISFT ANGACO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Planes de Estudio
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="mostrarPlanes">Listado de Planes de Estudio</a></li>
              <li><a class="dropdown-item" href="#">Cargar Plan de Estudio</a></li>


              <li><a class="dropdown-item" href="#"></a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Materias
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="mostrar_materias">Mostrar Materias</a></li>
              <li><a class="dropdown-item" href="insertar_materia1">Cargar Materias</a></li>


            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Valoraciones
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="cargarValoracion">Cargar Valoración</a></li>
              <li><a class="dropdown-item" href="nuevo">Mostrar Valoración por Docente</a></li>
              <li><a class="dropdown-item" href="mostrar_valoraciones">Mostrar Todas las Valoraciones</a></li>

              <li><a class="dropdown-item" href="#"></a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Docente
          </a>
          <ul class="dropdown-menu">            
            <li><a class="dropdown-item" href="<?= base_url('Docente')?>">Listado Docente</a></li>
            <li><a class="dropdown-item" href="<?= base_url('Docente/create')?>">Cargar Docente</a></li>

          </ul>
        </li> 

          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true"></a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
