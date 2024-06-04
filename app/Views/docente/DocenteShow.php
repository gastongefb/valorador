<?php echo $this->extend('layaout'); ?>


<?php echo $this->section('contenido'); ?>




    <h1>Datos de Docente</h1>
   

   <label fro="nombre" class="col-sm-2 form-label">Nombre Docente</label>
   <input type="text" class="form-control" value="<?= $Docente['nombre'] ?>" name="nombre" disabled>

  <label fro="nombre" class="col-sm-2 form-label">Apellido Docente</label>
  <input type="text" class="form-control" value="<?= $Docente['apellido'] ?>" name="nombre" disabled>

  <label fro="nombre" class="col-sm-2 form-label">DNI</label>
  <input type="text" class="form-control" value="<?= $Docente['dni'] ?>" name="nombre" disabled>

  <label fro="nombre" class="col-sm-2 form-label">Usuario</label>
  <input type="text" class="form-control" value="<?= $Docente['usuario'] ?>" name="nombre" disabled>

  <label fro="nombre" class="col-sm-2 form-label">Estado</label>
  <input type="text" class="form-control" value="<?= $Docente['estado'] ?>" name="nombre" disabled>
  
  <label fro="nombre" class="col-sm-2 form-label">Contraseña</label>
  <input type="text" class="form-control" value="<?= $Docente['clave'] ?>" name="nombre" disabled>



     <br>
     <div class="card-body d-flex justify-content-between align-items-center">
						 
						<a href="<?php echo base_url('Docente') ?>" class="btn btn-primary btn-sm">Volver</a>
            <form action="<?php //echo base_url('editar_docente') ?>" method="post" autocomplete="off">
              <input type="hidden"   name="id" value="$Docente['id']">
                <div>  

                <button type="submit" class="btn btn-secondary">Editar Datos</button>
                  </div>
                </form>
        </div>
     
   <br>
   <br>
   <br>
   <?php echo $this->endSection() ;?>