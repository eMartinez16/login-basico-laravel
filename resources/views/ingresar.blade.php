@extends ('Templates/cabecera')
<div class="container">
    <h3 class='text-black-50 center-align'>Ingresar</h3>
    <form action="{{route('validar')}}" class='form' method="POST">
        @csrf
        <input type="text"  name='Email' id='Email' placeholder="Email">
        <input type="password" name="Pass" id="Pass" placeholder="Contraseña">
        <button class='btn waves'type="submit">Ingresar</button>

    </form>
    @isset($mensaje)
        <a class="waves-effect waves-light btn modal-trigger " style='display:none' href="#modal1" id='botonModal' >Modal</a>
            <div id="modal1" class="modal">
                <div class="modal-content">
                <h4>Error</h4>
                <p id='mensaje' class='red-text darken-1'>{{ $mensaje}}</p>
                </div>
                <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Aceptar</a>
                </div>
            </div>   
    @endisset 
    @isset($bienvenido)
        <a class="waves-effect waves-light btn modal-trigger " style='display:none' href="#modal2" id='botonModal2' >Modal</a>
        <div id="modal2" class="modal">
            <div class="modal-content">
            <h4>Bienvenido</h4>
            <p id='bienvenido' class='green-text darken-1'>{{ $bienvenido}}</p>
            </div>
            <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Aceptar</a>
            </div>
        </div> 
    @endisset 
    
    <a class='btn waves' href="/">Volver</a>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {       
        var elems = document.querySelectorAll('.modal');        
        var instances = M.Modal.init(elems);
        var mensaje= document.getElementById('mensaje');
        var bienvenido= document.getElementById('bienvenido');
        if(mensaje && mensaje.textContent)
            document.getElementById('botonModal').click();
        
        if(bienvenido && bienvenido.textContent)
            document.getElementById('botonModal2').click();
        
      });
</script>
@extends ('Templates/pie')