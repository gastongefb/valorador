<?php echo $this->extend('layaout'); ?>


<?php echo $this->section('contenido'); ?>




<div class="container-fluid">
<table class="table table-hover">
  <thead>
  <tr>
      <th scope="col">Código Materia</th>
      <th scope="col">Nombre</th>
      <th scope="col">Cuatrimestre</th>
      
    </tr>

   
  </thead>

  <?php
    foreach($validaciones as $validacion):

        //echo $titulo;
        
    ?>
  <tbody>
   <tr>
      <th scope="row"><?php echo $validacion['id_materia'];?></th>
      <th scope="col"><?php echo $validacion['nombre_materia'];?></th>
      <th scope="col"><?php echo $validacion['cuatrimestre'];?></th>
      
    </tr>
   
  </tbody>

   <?php
    endforeach
   ?>

</table>
    </div>


<?php echo $this->endSection() ;?>