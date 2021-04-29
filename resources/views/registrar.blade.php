@extends('Templates.cabecera')
    <div class="container">
        <h3 class=" center-align">Registrarse</h3>
        <div class="row">
            <form action="registrar" method="POST">
                @csrf {{--Token  --}}
                <input type="text" name="Nombre" id="Nombre" placeholder="Nombre">
                <input type="text" name="Apellido" id="Apellido" placeholder="Apellido">
                <input type="email" name="Email" id="Email" placeholder="Email" required>
                <input type="password" name="Pass" id="Pass" placeholder="Contraseña" required>
                <button class='btn waves 'type="submit">Registrarse</button>
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
            <a class='btn waves' href="/">Volver</a>
        </div>

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {       
            var elems = document.querySelectorAll('.modal');        
            var instances = M.Modal.init(elems);
            var mensaje= document.getElementById('mensaje');
            if(mensaje.textContent)
                document.getElementById('botonModal').click();
          });
    </script>
@extends('Templates.pie')