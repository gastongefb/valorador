<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar Datos</title>
    <!-- Incluimos Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Incluimos jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Incluimos Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-5">
    <h2>Valoración de antecedentes</h2>
    
    <!-- Pestañas -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="titulos-tab" data-toggle="tab" href="#titulos" role="tab">Títulos</a>
        </li>
             
        <li class="nav-item">
            <a class="nav-link disabled" id="postgrado-tab" data-toggle="tab" href="#postgrado" role="tab">Postgrado</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" id="otros-titulos-tab" data-toggle="tab" href="#otros-titulos" role="tab">Otros Títulos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" id="capacitacion-tab" data-toggle="tab" href="#capacitacion" role="tab">Capacitación</a>
        </li>
        <!-- Agrega más pestañas según sea necesario -->
    </ul>

    <!-- Contenido de las pestañas -->
    <div class="tab-content mt-3" id="myTabContent">
        <!-- Pestaña de Títulos -->
        <div class="tab-pane fade show active" id="titulos" role="tabpanel">
            <form id="form-titulos" action="<?= base_url('guardar-titulo') ?>" method="post">
                <!-- Formulario de Títulos -->
                <select name="id_materia_valoracion" class="form-control" required>
                    <option disabled selected>Seleccione la materia</option>
                    <?php foreach($materias as $ci): ?>
                    <option value="<?=$ci['id_materia']?>"><?=$ci['nombre_materia']?></option>
                    <?php endforeach; ?>
                </select> 
                <br>

                <select name="id_titulo" class="form-control" required>
                    <option disabled selected>Seleccione un Título</option>
                    <?php foreach($titulos as $c): ?>
                    <option value="<?=$c['id_titulo']?>"><?=$c['detalle_titulo']?></option>
                    <?php endforeach; ?>
                </select> 
                <br>


                <label for="dni">DNI</label>
                <input type="text" name="dni" id="dni" placeholder="DNI" class="form-control" required>
                <br>
                <label for="j1">JURADO 1</label>
                <input type="text" name="j1" id="j1" placeholder="DNI" class="form-control" required>
                <br>
                <label for="j2">JURADO 2</label>
                <input type="text" name="j2" id="j2" placeholder="DNI" class="form-control" required>
                <br>
                <label for="j3">JURADO 3</label>
                <input type="text" name="j3" id="j3" placeholder="DNI" class="form-control" required>
                <br>
                <button type="submit" class="btn btn-primary" id="next-titulos">Guardar y Siguiente</button>
            </form>
        </div>
        <br>
        

        <!-- Pestaña de Postgrado -->
        <div class="tab-pane fade" id="postgrado" role="tabpanel">
            <form id="form-postgrado" action="<?= base_url('guardar-postgrado') ?>" method="post">
                <br>
                <br>
    <h3>Agregar Título de Postgrado</h3>
    <div id="personContainer">
        <!-- Tabla para mostrar los títulos -->
        <table id="personTable" border="1">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Detalle</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="person">
                    <td>
                        <select name="persons[1][id_titulo_postgrado]" id="opciones1">
                            <option value="1">Doctorado</option>
                            <option value="2">Maestría</option>
                            <option value="3">Especialización</option>
                            <option value="4">Diplomatura</option>
                        </select>
                    </td>
                    <td><input type="text" name="persons[1][detalle_valoracion_postgrado]" id="detalle_valoracion_postgrado1"></td>
                    <td><input type="date" name="persons[1][fecha]" id="fecha1"></td>
                    <td>
                        <button type="button" class="removePerson">Eliminar</button>
                        <button type="button" class="editPerson">Modificar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <button type="button" id="addPerson">Agregar Título</button>
    <br>
    <br>
    <button type="submit" class="btn btn-secondary">Siguiente</button>
    <br>
    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Editar Título de Postgrado</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        <input type="hidden" id="editRowId">
                        <div class="form-group">
                            <label for="editTitulo">Título</label>
                            <select class="form-control" id="editTitulo" name="editTitulo">
                                <option value="1">Doctorado</option>
                                <option value="2">Maestría</option>
                                <option value="3">Especialización</option>
                                <option value="4">Diplomatura</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="editDetalle">Detalle</label>
                            <input type="text" class="form-control" id="editDetalle" name="editDetalle">
                        </div>
                        <div class="form-group">
                            <label for="editFecha">Fecha</label>
                            <input type="date" class="form-control" id="editFecha" name="editFecha">
                        </div>
                        <button type="button" class="btn btn-primary" id="saveEdit">Guardar cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        $(document).ready(function() {
            var maxPersons = 50; // Cambia este valor según tus necesidades
            var personCount = 1;

            $('#addPerson').click(function() {
                if ($('#personTable tbody tr').length < maxPersons) {
                    personCount++;
                    var html = `
                        <tr class="person">
                            <td>
                                <select name="persons[${personCount}][id_titulo_postgrado]" id="opciones${personCount}">
                                    <option value="1">Doctorado</option>
                                    <option value="2">Maestría</option>
                                    <option value="3">Especialización</option>
                                    <option value="4">Diplomatura</option>
                                </select>
                            </td>
                            <td><input type="text" name="persons[${personCount}][detalle_valoracion_postgrado]" id="detalle_valoracion_postgrado${personCount}"></td>
                            <td><input type="date" name="persons[${personCount}][fecha]" id="fecha${personCount}"></td>
                            <td>
                                <button type="button" class="removePerson">Eliminar</button>
                                <button type="button" class="editPerson">Modificar</button>
                            </td>
                        </tr>
                    `;
                    $('#personTable tbody').append(html);
                } else {
                    alert('Se ha alcanzado el límite máximo de personas.');
                }
            });

            $(document).on('click', '.removePerson', function() {
                $(this).closest('tr').remove();
            });

            $(document).on('click', '.editPerson', function() {
                var row = $(this).closest('tr');
                var rowIndex = row.index();

                var options = row.find('select').val();
                var detalle = row.find('input[name$="[detalle_valoracion_postgrado]"]').val();
                var fecha = row.find('input[name$="[fecha]"]').val();

                $('#editRowId').val(rowIndex);
                $('#editTitulo').val(options);
                $('#editDetalle').val(detalle);
                $('#editFecha').val(fecha);

                $('#editModal').modal('show');
            });

            $('#saveEdit').click(function() {
                var rowIndex = $('#editRowId').val();
                var titulo = $('#editTitulo').val();
                var detalle = $('#editDetalle').val();
                var fecha = $('#editFecha').val();

                var row = $('#personTable tbody tr').eq(rowIndex);
                row.find('select').val(titulo);
                row.find('input[name$="[detalle_valoracion_postgrado]"]').val(detalle);
                row.find('input[name$="[fecha]"]').val(fecha);

                $('#editModal').modal('hide');
            });
        });
    </script>

    
</form>
                

                <!-- Modal para editar -->
                <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                    <!-- Contenido del modal -->
                </div>
            </form>
        </div>



        




        <!-- Pestaña de Otros Títulos -->
        <div class="tab-pane fade" id="otros-titulos" role="tabpanel">
            <form id="form-otros-titulos" action="<?= base_url('guardar-otros-titulos') ?>" method="post">
                <!-- Formulario de Otros Títulos -->
                
    <br>
    
    <div id="personContainer">
        <!-- Tabla para mostrar los títulos -->
        <table id="personTable" border="1">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Detalle</th>
                    <th>Año</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="person7">
                    <td>
                        <select name="persons7[1][id_detalle_otros_ant]" id="opciones1">
                          <option value="1">Expositor y/o autor de trabajos presentados en congresos, simposios,etc..</option>
                          <option value="2">Publicaciones relacionadas al espacio curricular a la carrera, de los últimos 5 años.Con referato.</option>
                          <option value="3">Publicaciones relacionadas al espacio curricular a la carrera, de los últimos 5 años.Sin referato.</option>
                          <option value="4">Participación en la elaboración de diseños curriculares de carreras de Nivel Superior Técnico en los.</option>
                        </select>
                    </td>
                    <td><input type="text" name="persons7[1][detalle_otros_ant_doc]" id="detalle_otros_ant_doc1"></td>
                    <td><input type="date" name="persons7[1][fecha]" id="fecha1"></td>
                    <td>
                        <button type="button" class="removePerson7">Eliminar</button>
                        <button type="button" class="editPerson7">Modificar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <button type="button" id="addPerson7">Agregar Antecedente Docente</button>
    <br>
    <br>
    <button type="submit" class="btn btn-secondary">Siguiente</button>
    <br>
    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Editar Antecedente Docente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        <input type="hidden" id="editRowId">
                        <div class="form-group">
                            <label for="editTitulo">Título</label>
                            <select class="form-control" id="editTitulo" name="editTitulo">
                                <option value="1">Expositor y/o autor de trabajos presentados en congresos, simposios,etc..</option>
                                <option value="2">Publicaciones relacionadas al espacio curricular a la carrera, de los últimos 5 años.Con referato.</option>
                                <option value="3">Publicaciones relacionadas al espacio curricular a la carrera, de los últimos 5 años.Sin referato.</option>
                                <option value="4">Participación en la elaboración de diseños curriculares de carreras de Nivel Superior Técnico en los.</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="editDetalle">Detalle</label>
                            <input type="text" class="form-control" id="editDetalle" name="editDetalle">
                        </div>
                        <div class="form-group">
                            <label for="editFecha">Años</label>
                            <input type="date" class="form-control" id="editFecha" name="editFecha">
                        </div>
                        <button type="button" class="btn btn-primary" id="saveEdit">Guardar cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        $(document).ready(function() {
            var maxPersons = 50; // Cambia este valor según tus necesidades
            var personCount = 1;

            $('#addPerson7').click(function() {
                if ($('#personTable tbody tr').length < maxPersons) {
                    personCount++;
                    var html = `
                        <tr class="person7">
                            <td>
                                <select name="persons7[${personCount}][id_detalle_otros_ant]" id="opciones${personCount}">
                                    <option value="1">Expositor y/o autor de trabajos presentados en congresos, simposios,etc..</option>
                                    <option value="2">Publicaciones relacionadas al espacio curricular a la carrera, de los últimos 5 años.Con referato.</option>
                                    <option value="3">Publicaciones relacionadas al espacio curricular a la carrera, de los últimos 5 años.Sin referato.</option>
                                    <option value="4">Participación en la elaboración de diseños curriculares de carreras de Nivel Superior Técnico en los.</option>
                                </select>
                            </td>
                            <td><input type="text" name="persons7[${personCount}][detalle_otros_ant_doc]" id="detalle_otros_ant_doc${personCount}"></td>
                            <td><input type="date" name="persons7[${personCount}][fecha]" id="fecha${personCount}"></td>
                            <td>
                                <button type="button" class="removePerson7">Eliminar</button>
                                <button type="button" class="editPerson7">Modificar</button>
                            </td>
                        </tr>
                    `;
                    $('#personTable tbody').append(html);
                } else {
                    alert('Se ha alcanzado el límite máximo de personas.');
                }
            });

            $(document).on('click', '.removePerson7', function() {
                $(this).closest('tr').remove();
            });

            $(document).on('click', '.editPerson7', function() {
                var row = $(this).closest('tr');
                var rowIndex = row.index();

                var options = row.find('select').val();
                var detalle = row.find('input[name$="[detalle_otros_ant_doc]"]').val();
                var fecha = row.find('input[name$="[fecha]"]').val();

                $('#editRowId').val(rowIndex);
                $('#editTitulo').val(options);
                $('#editDetalle').val(detalle);
                $('#editFecha').val(fecha);

                $('#editModal').modal('show');
            });

            $('#saveEdit').click(function() {
                var rowIndex = $('#editRowId').val();
                var titulo = $('#editTitulo').val();
                var detalle = $('#editDetalle').val();
                var fecha = $('#editFecha').val();

                var row = $('#personTable tbody tr').eq(rowIndex);
                row.find('select').val(titulo);
                row.find('input[name$="[detalle_otros_ant_doc]"]').val(detalle);
                row.find('input[name$="[fecha]"]').val(fecha);

                $('#editModal').modal('hide');
            });
        });
    </script>


            </form>
        </div>








        <!-- Pestaña de Capacitación -->
        <div class="tab-pane fade" id="capacitacion" role="tabpanel">
            <form id="form-capacitacion" action="<?= base_url('guardar-capacitacion') ?>" method="post">
                <!-- Formulario de Capacitación -->
                <div id="personContainer">
        <!-- Tabla para mostrar los títulos -->
        <table id="personTable" border="1">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Detalle</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="person2">
                    <td>
                        <select name="persons2[1][id_detalle_capacitacion]" id="opciones1">
                            <option value="1">con evaluación, con un mínimo de 30 hs.</option>
                            <option value="2">con evaluación, con menos de 30 hs.</option>
                            <option value="3">con evaluación, donde se detallan días y no horas.</option>
                            <option value="5">sin evaluación, con un mínimo de 30 hs.</option>
                            <option value="6">sin evaluación, con menos o sin especificar las horas</option>
                            <option value="7">sin evaluación, donde se detallan días y no horas</option>
                        </select>
                    </td>
                    <td><input type="text" name="persons2[1][detalle_capacitacion]" id="detalle_capacitacion1"></td>
                    <td><input type="date" name="persons2[1][fecha]" id="fecha1"></td>
                    <td>
                        <button type="button" class="removePerson2">Eliminar</button>
                        <button type="button" class="editPerson2">Modificar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <button type="button" id="addPerson2">Agregar Capacitación</button>
    <br>
    <br>
    <button type="submit" class="btn btn-secondary">Siguiente</button>
    <br>
    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Editar Título de Postgrado</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        <input type="hidden" id="editRowId">
                        <div class="form-group">
                            <label for="editTitulo">Título</label>
                              <select class="form-control" id="editTitulo" name="editTitulo">
                              <option value="1">con evaluación, con un mínimo de 30 hs.</option>
                              <option value="2">con evaluación, con menos de 30 hs.</option>
                              <option value="3">con evaluación, donde se detallan días y no horas.</option>
                              <option value="4">sin evaluación, con un mínimo de 30 hs.</option>
                              <option value="5">sin evaluación, con menos o sin especificar las horas</option>
                              <option value="6">sin evaluación, donde se detallan días y no horas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="editDetalle">Detalle</label>
                            <input type="text" class="form-control" id="editDetalle" name="editDetalle">
                        </div>
                        <div class="form-group">
                            <label for="editFecha">Fecha</label>
                            <input type="date" class="form-control" id="editFecha" name="editFecha">
                        </div>
                        <button type="button" class="btn btn-primary" id="saveEdit">Guardar cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        $(document).ready(function() {
            var maxPersons = 50; // Cambia este valor según tus necesidades
            var personCount = 1;

            $('#addPerson2').click(function() {
                if ($('#personTable tbody tr').length < maxPersons) {
                    personCount++;
                    var html = `
                        <tr class="person2">
                            <td>
                                <select name="persons2[${personCount}][id_detalle_capacitacion]" id="opciones${personCount}">
                                    <option value="1">con evaluación, con un mínimo de 30 hs.</option>
                                    <option value="2">con evaluación, con menos de 30 hs.</option>
                                    <option value="3">con evaluación, donde se detallan días y no horas.</option>
                                    <option value="4">sin evaluación, con un mínimo de 30 hs.</option>
                                    <option value="5">sin evaluación, con menos o sin especificar las horas</option>
                                    <option value="6">sin evaluación, donde se detallan días y no horas</option>
                                </select>
                            </td>
                            <td><input type="text" name="persons2[${personCount}][detalle_capacitacion]" id="detalle_capacitacion${personCount}"></td>
                            <td><input type="date" name="persons2[${personCount}][fecha]" id="fecha${personCount}"></td>
                            <td>
                                <button type="button" class="removePerson2">Eliminar</button>
                                <button type="button" class="editPerson2">Modificar</button>
                            </td>
                        </tr>
                    `;
                    $('#personTable tbody').append(html);
                } else {
                    alert('Se ha alcanzado el límite máximo de personas.');
                }
            });

            $(document).on('click', '.removePerson2', function() {
                $(this).closest('tr').remove();
            });

            $(document).on('click', '.editPerson2', function() {
                var row = $(this).closest('tr');
                var rowIndex = row.index();

                var options = row.find('select').val();
                var detalle = row.find('input[name$="[detalle_capacitacion]"]').val();
                var fecha = row.find('input[name$="[fecha]"]').val();

                $('#editRowId').val(rowIndex);
                $('#editTitulo').val(options);
                $('#editDetalle').val(detalle);
                $('#editFecha').val(fecha);

                $('#editModal').modal('show');
            });

            $('#saveEdit').click(function() {
                var rowIndex = $('#editRowId').val();
                var titulo = $('#editTitulo').val();
                var detalle = $('#editDetalle').val();
                var fecha = $('#editFecha').val();

                var row = $('#personTable tbody tr').eq(rowIndex);
                row.find('select').val(titulo);
                row.find('input[name$="[detalle_capacitacion]"]').val(detalle);
                row.find('input[name$="[fecha]"]').val(fecha);

                $('#editModal').modal('hide');
            });
        });
    </script>

    
</form>
        </div>
    </div>
</div>

<script>
    // Variables para controlar el estado de las pestañas
    var pestanasCompletadas = [];

    // Función para habilitar pestañas previas
    function habilitarPestanasPrevias() {
        pestanasCompletadas.forEach(function(pestana) {
            $("#" + pestana + "-tab").removeClass('disabled');
        });
    }

    // Manejadores para los botones de siguiente en cada formulario
    $('#form-titulos').on('submit', function (e) {
        e.preventDefault();
        var form = $(this);
        $.post(form.attr('action'), form.serialize(), function () {
            // Agregar 'titulos' a las pestañas completadas
            if (!pestanasCompletadas.includes('titulos')) {
                pestanasCompletadas.push('titulos');
            }
            habilitarPestanasPrevias();
            // Habilitar y mostrar la siguiente pestaña
            $('#otros-titulos-nuevos-tab').removeClass('disabled');
            $('#otros-titulos-nuevos-tab').tab('show');
        }).fail(function() {
            alert('Error al guardar los datos de Títulos.');
        });
    });

    $('#form-otros-titulos-nuevos').on('submit', function (e) {
        e.preventDefault();
        var form = $(this);
        $.post(form.attr('action'), form.serialize(), function () {
            if (!pestanasCompletadas.includes('otros-titulos-nuevos')) {
                pestanasCompletadas.push('otros-titulos-nuevos');
            }
            habilitarPestanasPrevias();
            $('#postgrado-tab').removeClass('disabled');
            $('#postgrado-tab').tab('show');
        }).fail(function() {
            alert('Error al guardar los datos de Postgrado.');
        });
    });

    $('#form-postgrado').on('submit', function (e) {
        e.preventDefault();
        var form = $(this);
        $.post(form.attr('action'), form.serialize(), function () {
            if (!pestanasCompletadas.includes('postgrado')) {
                pestanasCompletadas.push('postgrado');
            }
            habilitarPestanasPrevias();
            $('#otros-titulos-tab').removeClass('disabled');
            $('#otros-titulos-tab').tab('show');
        }).fail(function() {
            alert('Error al guardar los datos de Postgrado.');
        });
    });

    $('#form-otros-titulos').on('submit', function (e) {
        e.preventDefault();
        var form = $(this);
        $.post(form.attr('action'), form.serialize(), function () {
            if (!pestanasCompletadas.includes('otros-titulos')) {
                pestanasCompletadas.push('otros-titulos');
            }
            habilitarPestanasPrevias();
            $('#capacitacion-tab').removeClass('disabled');
            $('#capacitacion-tab').tab('show');
        }).fail(function() {
            alert('Error al guardar los datos de Otros Títulos.');
        });
    });

    $('#form-capacitacion').on('submit', function (e) {
        e.preventDefault();
        var form = $(this);
        $.post(form.attr('action'), form.serialize(), function () {
            if (!pestanasCompletadas.includes('capacitacion')) {
                pestanasCompletadas.push('capacitacion');
            }
            habilitarPestanasPrevias();
            alert('Datos completados. Guardando en la base de datos...');
            window.location.href = "<?= base_url('guardar-datos-finales') ?>";
        }).fail(function() {
            alert('Error al guardar los datos de Capacitación.');
        });
    });

    // Habilitar navegación a pestañas anteriores
    $('a[data-toggle="tab"]').on('click', function (e) {
        var target = $(e.target).attr("href").substring(1); // Obtener el id de la pestaña

        if ($(this).hasClass('disabled')) {
            e.preventDefault();
            return false;
        }
    });

    // Al cargar la página, habilitar las pestañas completadas si existen datos en la sesión
    $(document).ready(function() {
        <?php if (!empty($datos_titulos)): ?>
            pestanasCompletadas.push('titulos');
            $('#postgrado-tab').removeClass('disabled');
        <?php endif; ?>
        <?php if (!empty($datos_postgrado)): ?>
            pestanasCompletadas.push('postgrado');
            $('#otros-titulos-tab').removeClass('disabled');
        <?php endif; ?>
        <?php if (!empty($datos_otros_titulos)): ?>
            pestanasCompletadas.push('otros-titulos');
            $('#capacitacion-tab').removeClass('disabled');
        <?php endif; ?>
        habilitarPestanasPrevias();
    });
</script>

</body>
</html>
