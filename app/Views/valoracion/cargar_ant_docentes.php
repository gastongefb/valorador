<?php echo $this->extend('layaout'); ?>


<?php echo $this->section('contenido'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<h1>Antecedentes Docentes</h1>

<form action="<?php echo base_url('guardarAntDocentes') ?>" method="post" autocomplete="off">


     <br>
     <h1>Agregar Antecedentes Docentes</h1>
     <div id="personContainer">
    <!-- Aquí se agregarán y eliminarán los campos de persona dinámicamente -->
    <div id="personContainer">
    <!-- Aquí se agregarán y eliminarán los campos de persona dinámicamente -->
    
    <div class="person3">
        <h3>Antecedentes 1</h3>
         <!-- Nuevo campo de selección -->
         <label for="opciones1">Seleccione opción:</label>
        <select name="persons3[1][id_detalle_doc]" id="opciones1">
            <option value="1">Antiguedad en el espacio curricular o equivalente en el nivel Superior Técnico.</option>
            <option value="2">Antiguedad en otros espacios curriculares del nivel Superior Técnico.</option>
            <option value="3">Antiguedad en otros espacios curriculares del nivel Superior Técnico.</option>
        </select><br><br>
        <label for="detalle1">Detalle:</label>
        <input type="text" name="persons3[1][detalle_ant_doc]" id="detalle_ant_doc1">
        <br>
        <br>
        <label for="fecha1">Fecha:</label>
        <input type="text" name="persons3[1][fecha]" id="fecha1"><br>
        <br>       
        <button type="button" class="removePerson3">Eliminar Título</button>
    </div>
</div>
<br>
<button type="button" id="addPerson3">Agregar Título</button>


<script>
    $(document).ready(function() {
        var maxPersons = 50; // Cambia este valor según tus necesidades

        $('#addPerson3').click(function() {
            if ($('.person3').length < maxPersons) {
                var personCount = $('.person3').length + 1;
                var html = `
                    <div class="person3">
                        <h3>Titulo ${personCount}</h3>
                        <!-- Nuevo campo de selección -->
                        <label for="opciones${personCount}">Seleccione opción:</label>
                        <select name="persons3[${personCount}][id_detalle_doc]" id="opciones${personCount}">
                          <option value="1">con evaluación, con un mínimo de 30 hs.</option>
                          <option value="2">con evaluación, con menos de 30 hs.</option>
                          <option value="3">con evaluación, donde se detallan días y no horas.</option>
                          <option value="4">sin evaluación, con un mínimo de 30 hs.</option>
                          <option value="5">sin evaluación, con menos o sin especificar las horas</option>
                          <option value="6">sin evaluación, donde se detallan días y no horas</option>
                        </select><br><br>
                        <label for="detalle${personCount}">Detalle:</label>
                        <input type="text" name="persons3[${personCount}][detalle_ant_doc]" id="detalle_ant_doc${personCount}">
                        <br>
                        <br>
                        <label for="fecha${personCount}">Fecha:</label>
                        <input type="text" name="persons3[${personCount}][fecha]" id="fecha${personCount}"><br>
                        <br>                        
                        <button type="button" class="removePerson3">Eliminar Título</button>
                    </div>
                `;
                $('#personContainer').append(html);
            } else {
                alert('Se ha alcanzado el límite máximo de personas.');
            }
        });

        $(document).on('click', '.removePerson3', function() {
            $(this).closest('.person3').remove();
        });
    });
</script>
      
     </div>

     

<button type="submit" class="btn btn-secondary">Siguiente</button>
<br>
</form>

  
   
   <?php echo $this->endSection() ;?>