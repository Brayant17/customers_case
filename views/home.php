<!-- views/home.php -->
<h2>Página de inicio</h2>
<p>Bienvenido a mi sitio web.</p>

<p class="text">Estas es la primera pantalla que aparece desde el controllador y desde las views solicitada por el controllador</p>

<button id="test" class="btn btn-primary">Probar Jquery</button>


<script>
    $('#test').click(()=>{
        console.log('hola')
        $('.text').text('Hola a cambiado el texto')
    })
</script>