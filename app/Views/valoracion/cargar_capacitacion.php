<?php echo $this->extend('layaout'); ?>


<?php echo $this->section('contenido'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<h1>Titulos de Postgrado</h1>

<form action="<?php echo base_url('guardarCapacitacion') ?>" method="post" autocomplete="off">


     <br>
     <h1>Agregar Capacitación</h1>
     <div id="personContainer">
    <!-- Aquí se agregarán y eliminarán los campos de persona dinámicamente -->
    <div id="personContainer">
    <!-- Aquí se agregarán y eliminarán los campos de persona dinámicamente -->
    
    <div class="person2">
        <h3>Capacitación 1</h3>
         <!-- Nuevo campo de selección -->
         <label for="opciones1">Seleccione opción:</label>
        <select name="persons2[1][id_detalle_capacitacion]" id="opciones1">
            <option value="1">con evaluación, con un mínimo de 30 hs.</option>
            <option value="2">con evaluación, con menos de 30 hs.</option>
            <option value="3">con evaluación, donde se detallan días y no horas.</option>
            <option value="4">sin evaluación, con un mínimo de 30 hs.</option>
            <option value="5">sin evaluación, con menos o sin especificar las horas</option>
            <option value="6">sin evaluación, donde se detallan días y no horas</option>
        </select><br><br>
        <label for="detalle1">Detalle:</label>
        <input type="text" name="persons2[1][detalle_capacitacion]" id="detalle_capacitacion1">
        <br>
        <br>
        <label for="fecha1">Fecha:</label>
        <input type="text" name="persons2[1][fecha]" id="fecha1"><br>
        <br>       
        <button type="button" class="removePerson2">Eliminar Título</button>
    </div>
</div>
<br>
<button type="button" id="addPerson2">Agregar Título</button>


<script>
    $(document).ready(function() {
        var maxPersons = 50; // Cambia este valor según tus necesidades

        $('#addPerson2').click(function() {
            if ($('.person2').length < maxPersons) {
                var personCount = $('.person2').length + 1;
                var html = `
                    <div class="person2">
                        <h3>Titulo ${personCount}</h3>
                        <!-- Nuevo campo de selección -->
                        <label for="opciones${personCount}">Seleccione opción:</label>
                        <select name="persons2[${personCount}][id_detalle_capacitacion]" id="opciones${personCount}">
                          <option value="1">con evaluación, con un mínimo de 30 hs.</option>
                          <option value="2">con evaluación, con menos de 30 hs.</option>
                          <option value="3">con evaluación, donde se detallan días y no horas.</option>
                          <option value="4">sin evaluación, con un mínimo de 30 hs.</option>
                          <option value="5">sin evaluación, con menos o sin especificar las horas</option>
                          <option value="6">sin evaluación, donde se detallan días y no horas</option>
                        </select><br><br>
                        <label for="detalle${personCount}">Detalle:</label>
                        <input type="text" name="persons2[${personCount}][id_detalle_capacitacion]" id="id_detalle_capacitacion${personCount}">
                        <br>
                        <br>
                        <label for="fecha${personCount}">Fecha:</label>
                        <input type="text" name="persons2[${personCount}][fecha]" id="fecha${personCount}"><br>
                        <br>                        
                        <button type="button" class="removePerson2">Eliminar Título</button>
                    </div>
                `;
                $('#personContainer').append(html);
            } else {
                alert('Se ha alcanzado el límite máximo de personas.');
            }
        });

        $(document).on('click', '.removePerson2', function() {
            $(this).closest('.person2').remove();
        });
    });
</script>
      
     </div>

     

<button type="submit" class="btn btn-secondary">Siguiente</button>
<br>
</form>

  
   
   <?php echo $this->endSection() ;?>