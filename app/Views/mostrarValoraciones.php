
<?php echo $this->extend('layaout'); ?>


<?php echo $this->section('contenido'); ?>



<?php
//ESTO LO HAGO PARA CARGAR EN UN ARREGLO LO QUE TRAIGO EN $VALIDACIONES2 QUE SERÍAN LAS CONDICIONES DOCENTES("DOCENTE" O "HABILITANTE")
$arre = array();

foreach($validaciones2 as $validacion2):

    array_push($arre, $validacion2['detalle_condicion']);
 
endforeach; 

$arre_titulos = array();

foreach($validaciones3 as $validacion3):

    array_push($arre_titulos, $validacion3['detalle_titulo']);
 
endforeach;

/*
$k=count($arre);
$i=0;

while($i<= 2){

  echo $arre[$i];
  $i=$i + 1 ;
}
*/


?>


<div class="container-fluid">
<table class="table table-hover">
  <thead>
  <tr>
  <th scope="col">Cod. Validación</th>
      <th scope="col">Dni</th>
      <th scope="col">Título</th>
      <th scope="col">Jurado 1</th>
      <th scope="col">Jurado 2</th>
      <th scope="col">Jurado 3</th>
      <th scope="col">Condición Docente</th>
      <th scope="col">Materia</th>
      <th scope="col">Puntaje</th>
    </tr>

   
  </thead>

  <?php
  //ESTA VARIABLE LA USO PARA RECORRER EL ARREGLO QUE TIENE LAS CONDICIONES DOCENTE Y LOS TÍTULOS
  $x=0;
    foreach($validaciones as $validacion):

        //echo $titulo;
        
    ?>
  <tbody>
   <tr>
      <th scope="row"><?php echo $validacion['id_valoracion'];?></th>
      <th scope="col"><?php echo $validacion['dni'];?></th>
      <th scope="col"><?php echo $arre_titulos[$x];;?></th>
      <th scope="col"><?php echo $validacion['j1'];?></th>
      <th scope="col"><?php echo $validacion['j2'];?></th>
      <th scope="col"><?php echo $validacion['j3'];?></th>
      <th scope="col"><?php echo $arre[$x];?></th>
      <th scope="col"><?php echo $validacion['nombre_materia'];?></th>
      <th scope="col">#</th>
     
      <?php $x=$x + 1 ; ?>
     
    </tr>
   
  </tbody>

   <?php
    endforeach
   ?>

</table>
    </div>


<?php echo $this->endSection() ;?>