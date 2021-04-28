@extends('Templates.cabecera')
    <div class="container">
        <h3 class=" center-align">Registrarse</h3>
        <div class="row">
            <form action="registrado" method="POST">
                @csrf {{--Token  --}}
                <input type="text" name="Nombre" id="Nombre" placeholder="Nombre">
                <input type="text" name="Apellido" id="Apellido" placeholder="Apellido">
                <input type="email" name="Email" id="Email" placeholder="Email" required>
                <input type="password" name="Pass" id="Pass" placeholder="Contraseña" required>
                <button class='btn waves 'type="submit">Registrarse</button>
            </form>
            <a class='btn waves' href="/">Volver</a>
        </div>

    </div>

@extends('Templates.pie')