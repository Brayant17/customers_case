<!-- views/home.php -->
<h2>Página de inicio</h2>
<p>Bienvenido a mi sitio web.</p>

<p>Estas es la primera pantalla que aparece desde el controllador y desde las views solicitada por el controllador</p>

<button id="test">Probar Jquery</button>


<script>
    $('#test').click(()=>{
        console.log('hola')
    })
</script>