<?php echo $this->extend('layaout'); ?>


<?php echo $this->section('contenido'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<h1>Titulos de Postgrado</h1>

<form action="<?php echo base_url('guardarPostgrado') ?>" method="post" autocomplete="off">


     <br>
     <h1>Agregar Titulo de Postgrado</h1>
     <div id="personContainer">
    <!-- Aquí se agregarán y eliminarán los campos de persona dinámicamente -->
    <div id="personContainer">
    <!-- Aquí se agregarán y eliminarán los campos de persona dinámicamente -->
    
    <div class="person">
        <h3>Título 1</h3>
         <!-- Nuevo campo de selección -->
         <label for="opciones1">Seleccione opción:</label>
        <select name="persons[1][id_titulo_postgrado]" id="opciones1">
            <option value="1">Dcotorado</option>
            <option value="2">Maestría</option>
            <option value="3">Especialización</option>
            <option value="4">Diplomatura</option>
        </select><br><br>
        <label for="detalle1">Detalle:</label>
        <input type="text" name="persons[1][detalle_valoracion_postgrado]" id="detalle_valoracion_postgrado1">
        <br>
        <br>
        <label for="fecha1">Fecha:</label>
        <input type="text" name="persons[1][fecha]" id="fecha1"><br>
        <br>       
        <button type="button" class="removePerson">Eliminar Título</button>
    </div>
</div>
<br>
<button type="button" id="addPerson">Agregar Título</button>


<script>
    $(document).ready(function() {
        var maxPersons = 50; // Cambia este valor según tus necesidades

        $('#addPerson').click(function() {
            if ($('.person').length < maxPersons) {
                var personCount = $('.person').length + 1;
                var html = `
                    <div class="person">
                        <h3>Titulo ${personCount}</h3>
                        <!-- Nuevo campo de selección -->
                        <label for="opciones${personCount}">Seleccione opción:</label>
                        <select name="persons[${personCount}][id_titulo_postgrado]" id="opciones${personCount}">
                          <option value="1">Doctorado</option>
                          <option value="2">Maestría</option>
                          <option value="3">Especialización</option>
                          <option value="4">Diplomatura</option>
                        </select><br><br>
                        <label for="detalle${personCount}">Detalle:</label>
                        <input type="text" name="persons[${personCount}][detalle_valoracion_postgrado]" id="detalle_valoracion_postgrado${personCount}">
                        <br>
                        <br>
                        <label for="fecha${personCount}">Fecha:</label>
                        <input type="text" name="persons[${personCount}][fecha]" id="fecha${personCount}"><br>
                        <br>                        
                        <button type="button" class="removePerson">Eliminar Título</button>
                    </div>
                `;
                $('#personContainer').append(html);
            } else {
                alert('Se ha alcanzado el límite máximo de personas.');
            }
        });

        $(document).on('click', '.removePerson', function() {
            $(this).closest('.person').remove();
        });
    });
</script>
      
     </div>

     

<button type="submit" class="btn btn-secondary">Siguiente</button>
<br>
</form>

  
   
   <?php echo $this->endSection() ;?>