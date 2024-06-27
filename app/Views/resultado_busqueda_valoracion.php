
<?php echo $this->extend('layaout'); ?>


<?php echo $this->section('contenido'); ?>

<h1>Valoración</h1>
<h2>Datos del docente</h2>
  
<table class="table">
  <thead>
    <tr>
      <th scope="col">Dni</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      
    </tr>
  </thead>
  <?php 
  $x=1;
  foreach ($datosTabla6 as $dato6): ?>
  <tbody>
    <tr>
      
      <td><?= $dato6['dni'] ?></td>
      <td><?= $dato6['nombre'] ?></td>
      <td><?= $dato6['apellido'] ?></td>

    </tr>
 </tbody>
 <?php endforeach; ?>
</table>

 
  <?php if (isset($datosTabla2) && is_array($datosTabla2)): 
            //$punt = $datosTabla2['puntaje'];
    
    ?>
            <?php foreach ($datosTabla2 as $key => $value): 
              if ($key == 'detalle') {
                $detalle = $value; // Almacenar el valor del detalle
            } elseif ($key == 'puntaje') {
                $puntaje = $value; // Almacenar el valor del puntaje
            }
            ?>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>No hay datos disponibles.</li>
        <?php endif; 
          //echo "el puntaje es:", $puntaje;
          //echo "el detalle es:", $detalle;
        ?>
  <h2>Datos de Tabla Puntaje Título de base</h2>
  <?php $punt=0;?>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Detalle</th>
      <th scope="col">Puntaje</th>
      
    </tr>
  </thead>
  
  <tbody>
    <tr>
      <th scope="row"><?php echo"#";?></th>
      <td><?= $detalle; ?></td>
      <td><?= $puntaje; ?></td>
      <?php $punt= $punt + $puntaje;?>
     
    </tr>
 </tbody>
 
</table>      
    
  <h2>Datos de Tabla Título Postgrado</h2>
  
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Detalle</th>
      <th scope="col">Puntaje</th>
      
    </tr>
  </thead>
  <?php 
  $x=1;
  foreach ($datosTabla1 as $dato): ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo"$x";?></th>
      <td><?= $dato['detalle'] ?></td>
      <td><?= $dato['puntaje'] ?></td>
      <?php $punt= $punt + $dato['puntaje'];?>
      <?php $x=$x + 1;?>
    </tr>
 </tbody>
 <?php endforeach; ?>
</table>
    

    <h2>Datos de Tabla Certificados</h2>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Detalle</th>
      <th scope="col">Puntaje</th>
      
    </tr>
  </thead>
  <?php 
  $x=1;
  foreach ($datosTabla3 as $dato): ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo"$x";?></th>
      <td><?= $dato['detalle'] ?></td>
      <td><?= $dato['puntaje'] ?></td>
      <?php $punt= $punt + $dato['puntaje'];?>
      
      <?php $x=$x + 1;?>
    </tr>
 </tbody>
 <?php endforeach; ?>
</table>

    <h2>Datos de Tabla Antecedentes laborales (Privado - Estatal)</h2>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Detalle</th>
      <th scope="col">Puntaje</th>
      
    </tr>
  </thead>
  <?php 
  $x=1;
  foreach ($datosTabla4 as $dato): ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo"$x";?></th>
      <td><?= $dato['detalle'] ?></td>
      <td><?= $dato['puntaje'] ?></td>
      <?php $punt= $punt + $dato['puntaje'];?>
      
      <?php $x=$x + 1;?>
    </tr>
 </tbody>
 <?php endforeach; ?>
</table>

    <h2>Datos de Tabla Antecedentes Docentes</h2>
   
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Detalle</th>
      <th scope="col">Puntaje</th>
      
    </tr>
  </thead>
  <?php 
  $x=1;
  foreach ($datosTabla5 as $dato): ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo"$x";?></th>
      <td><?= $dato['detalle'] ?></td>
      <td><?= $dato['puntaje'] ?></td>
      <?php $punt= $punt + $dato['puntaje'];?>
      
      <?php $x=$x + 1;?>
    </tr>
 </tbody>
 <?php endforeach; ?>
</table>
    
<?php 
 echo "TOTAL VALORACIÓN: ", $punt;
 ?>
 <br>
 <br>
 <br>

<?php echo $this->endSection() ;?>