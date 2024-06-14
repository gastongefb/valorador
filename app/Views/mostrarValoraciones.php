
<?php echo $this->extend('layaout'); ?>


<?php echo $this->section('contenido'); ?>

<h1>Valoración</h1> 
    
<h2>Listado de Valoraciones</h2>
  
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

      
    </tr>
  </thead>
  <?php 
  $x=1;

  //LAIDEA ES CREAR OTRO ARREGLO CON SOLO LOS DOCENTES Y LUEGO RECORRER ESTE ARREGLO Y MOSTRAR LOS DATO
  //LUEGO HACER LO MISMO CON LOS HABILITANTES
  /*
  foreach ($datosTabla1 as $registro) {
  
      
     $reg = $registro['dni'];
     $registro['titulo_det'];
     $registro['j1'];
     $registro['j2'];
     $registro['j3'];
     $registro['materia'];
     $registro['condicion'];
     $registro['puntaje'];

     if $reg == "Docente"
     {

      $docente[] = [
        'dni' => $registro['dni'],
        'titulo_det' => $registro['titulo_det'],
        'j1' => ['j1'],
        'j2' => ['j2'],
        'j3' => ['j3'],
        'materia' => $registro['materia'],
        'condicion' => $registro['condicion'],
        'puntaje' => $registro['puntaje'],

    ];

     }
    

} 
*/

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
    </tr>
 </tbody>
 <?php endforeach; ?>
</table>
<br>
<br>
<br>
    


<?php echo $this->endSection() ;?>