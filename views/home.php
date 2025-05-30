<!-- views/home.php -->
<h2>Página de inicio</h2>
<p>Bienvenido a mi sitio web.</p>

<p class="text">Estas es la primera pantalla que aparece desde el controllador y desde las views solicitada por el controllador</p>

<button id="test" class="btn btn-primary">Probar Jquery</button>

<!-- ejemplo de JQuery UI Sortable -->

<style>
    .column {
        width: 30%;
        min-height: 300px;
        margin: 10px;
        padding: 10px;
        float: left;
        border: 1px solid #ccc;
        background: #f9f9f9;
    }

    .user {
        margin: 5px;
        padding: 10px;
        background: #cce5ff;
        border: 1px solid #007bff;
        cursor: move;
    }
</style>

<div class="col-12 mt-4">
    <p>
        Ejemplo de como funcionan los Sortable de JQuery <br>
        Recordando que los usaremos para que el usuario tenga una vista mas sencilla de los flujos de trabajos que han configurado
    <div class="alert alert-primary" role="alert">
        En la parte de la consola al realizar la accion de mover un usuario a otra columna identificara el evento y mostrara un mensaje en la consola, esto nos permite identificar que podemos disparar eventos o accions para realizar al momento de mover un cuadro a otra columna, podria ser uno de esos eventos el hacer una llamada a la API

        <div class="mt-4">
            <h6>Resultados de consola: </h6>
            <div class="alert alert-secondary" role="alert" id="text-console">
                A simple secondary alert—check it out!
            </div>
        </div>

    </div>
    </p>
</div>

<div class="row">
    <div class="column" id="column-1">
        <h5>titulo1</h5>
        <div class="user">Usuario 1</div>
        <div class="user">Usuario 2</div>
    </div>

    <div class="column" id="column-2">
        <div class="user">Usuario 3</div>
    </div>

    <div class="column" id="column-3">
        <!-- Vacía inicialmente -->
    </div>
</div>


<script>
    $('#test').click(() => {
        console.log('hola')
        $('.text').text('Hola a cambiado el texto')
    })

    $(function() {
        $(".column").sortable({
            connectWith: ".column",
            items: ".user",
            placeholder: "ui-state-highlight",
            revert: false,


            receive: function(event, ui) {
                const usuario = ui.item.text();
                const desde = ui.sender.attr('id');
                const hacia = $(this).attr('id');
                console.log(`🟢 ${usuario} se movió de ${desde} a ${hacia}`);
            },

            update: function(event, ui) {
                // Este evento también se dispara cuando se reordena dentro de la misma columna
                // Puedes usarlo si necesitas detectar solo cambios internos
                if (this === ui.item.parent()[0]) {
                    const usuario = ui.item.text();
                    const columna = $(this).attr('id');
                    const text = `🔄 ${usuario} reordenado dentro de ${columna}`
                    console.log(text);
                    $('#text-console').text(text)
                }
            }


        }).disableSelection();
    });
</script>