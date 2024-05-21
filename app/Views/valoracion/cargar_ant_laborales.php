<?php echo $this->extend('layaout'); ?>


<?php echo $this->section('contenido'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<h1>Antecedentes Laborales</h1>

<form action="<?php echo base_url('guardarAntLab') ?>" method="post" autocomplete="off">


     <br>
     <h1>Agregar Antecedentes Laborales</h1>
     <div id="personContainer">
    <!-- Aquí se agregarán y eliminarán los campos de persona dinámicamente -->
    <div id="personContainer">
    <!-- Aquí se agregarán y eliminarán los campos de persona dinámicamente -->
    
    <div class="person4">
        <h3>Antecedentes 1</h3>
         <!-- Nuevo campo de selección -->
         <label for="opciones1">Seleccione opción:</label>
        <select name="persons4[1][id_detalle_lab]" id="opciones1">
            <option value="1">Antiguedad en el sector Público.</option>
            <option value="2">Antiguedad en el sector Privado.</option>
        </select><br><br>
        <label for="detalle1">Detalle:</label>
        <input type="text" name="persons4[1][detalle_ant_lab]" id="detalle_ant_lab1">
        <br>
        <br>
        <label for="fecha1">Fecha:</label>
        <input type="text" name="persons4[1][fecha]" id="fecha1"><br>
        <br>       
        <button type="button" class="removePerson4">Eliminar Título</button>
    </div>
</div>
<br>
<button type="button" id="addPerson4">Agregar Título</button>


<script>
    $(document).ready(function() {
        var maxPersons = 50; // Cambia este valor según tus necesidades

        $('#addPerson4').click(function() {
            if ($('.person4').length < maxPersons) {
                var personCount = $('.person4').length + 1;
                var html = `
                    <div class="person4">
                        <h3>Titulo ${personCount}</h3>
                        <!-- Nuevo campo de selección -->
                        <label for="opciones${personCount}">Seleccione opción:</label>
                        <select name="persons4[${personCount}][id_detalle_lab]" id="opciones${personCount}">
                            <option value="1">Antiguedad en el sector Público.</option>
                            <option value="2">Antiguedad en el sector Privado.</option>
                        </select><br><br>
                        <label for="detalle${personCount}">Detalle:</label>
                        <input type="text" name="persons4[${personCount}][detalle_ant_lab]" id="detalle_ant_doc${personCount}">
                        <br>
                        <br>
                        <label for="fecha${personCount}">Fecha:</label>
                        <input type="text" name="persons4[${personCount}][fecha]" id="fecha${personCount}"><br>
                        <br>                        
                        <button type="button" class="removePerson4">Eliminar Título</button>
                    </div>
                `;
                $('#personContainer').append(html);
            } else {
                alert('Se ha alcanzado el límite máximo de personas.');
            }
        });

        $(document).on('click', '.removePerson4', function() {
            $(this).closest('.person4').remove();
        });
    });
</script>
      
     </div>

     

<button type="submit" class="btn btn-secondary">Guardar</button>
<br>
</form>

  
   
   <?php echo $this->endSection() ;?>