<?php echo $this->extend('layaout'); ?>


<?php echo $this->section('contenido'); ?>




    <h1>Edición Datos de Docente</h1>

    <form action="<?= base_url() ?><?= route_to('Docente.update', $Docente["id"]) ?>" method="post" autocomplete="off">

   <label fro="nombre" class="col-sm-2 form-label">Nombre Docente</label>
   <input type="text" class="form-control" value="<?= $Docente['nombre'] ?>" name="nombre" >

  <label fro="nombre" class="col-sm-2 form-label">Apellido Docente</label>
  <input type="text" class="form-control" value="<?= $Docente['apellido'] ?>" name="apellido" >

  <label fro="nombre" class="col-sm-2 form-label">DNI</label>
  <input type="text" class="form-control" value="<?= $Docente['dni'] ?>" name="dni" >

  <label fro="nombre" class="col-sm-2 form-label">Usuario</label>
  <input type="text" class="form-control" value="<?= $Docente['usuario'] ?>" name="usuario" >

  <label fro="nombre" class="col-sm-2 form-label">Estado</label>
  <input type="text" class="form-control" value="<?= $Docente['estado'] ?>" name="estado" >
  
  <label fro="nombre" class="col-sm-2 form-label">Contraseña</label>
  <input type="text" class="form-control" value="<?= $Docente['clave'] ?>" name="clave" >



     <br>
     <div class="card-body d-flex justify-content-between align-items-center">
						 
              <input type="hidden"   name="id" value="$Docente['id']">
                <div>  

                <button type="submit" class="btn btn-secondary">Guardar Datos</button>
                  </div>
                </form>
                <a href="<?php echo base_url('Docente') ?>" class="btn btn-primary btn-sm">Volver</a>
      
        </div>
        </form>
   <br>
   <br>
   <br>
   <?php echo $this->endSection() ;?>