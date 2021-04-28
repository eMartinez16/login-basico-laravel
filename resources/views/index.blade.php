@extends ('Templates/cabecera')
<style>
    .row{
        align-items: center;
        padding-top: 20%;
        width: 50%;
    }
   /* @media only screen and (max-width: 600px) {
        .row{
            padding-left: 30%;
        }
    }
    */
</style>
<div class="container">
    <div class="row">
        <div class="col s12 m12 l12 offset-m6 offset-l5">
            <a class='btn waves' href="ingresar">Ingresar</a>
            <br>
            <br>
            <a class='btn waves' href="registrar">Registrar</a>
        </div>
    </div>
</div>
@extends ('Templates/pie')