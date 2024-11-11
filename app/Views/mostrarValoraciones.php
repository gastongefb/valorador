
<?php echo $this->extend('layaout'); ?>


<?php echo $this->section('contenido'); ?>


<br>   
<h2 class="text-center">Listado de Valoraciones</h2>
<br>
<style>
        /* Estilos para la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
  
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Dni</th>
      <th scope="col">Título</th>
      <th scope="col">Jurado 1</th>
      <th scope="col">Jurado 2</th>
      <th scope="col">Jurado 3</th>
      <th scope="col">Materia</th>
      <th scope="col">Condición</th>
      <th scope="col">Puntaje</th>
      <th scope="col">Detalle</th>

      
    </tr>
  </thead>
  <?php 
  $x=1;


  foreach ($datosTabla1 as $registro): ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo"$x";?></th>
      <td><?= $registro['dni']; ?></td>
      <td><?= $registro['titulo_det'];?></td>
      <td><?= $registro['j1'];?></td>
      <td><?= $registro['j2'];?></td>
      <td><?= $registro['j3'];?></td>
      <td><?= $registro['materia'];?></td>
      <td><?= $registro['condicion'];?></td>
      <td><?= $registro['puntaje'];?></td>
      <td><h5>Detalle</h5></td>
      <?php //echo"$x";
      $x=$x + 1;
      ?>
    </tr>
 </tbody>
 <?php endforeach; ?>
</table>
<br>
<br>
<br>




<?php echo $this->endSection() ;?>