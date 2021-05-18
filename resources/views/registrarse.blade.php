@extends('plantilla-log')
@section('formulario')
<form action="" method="post" class="container">
    <div class="row"></div>
    <div class="row">
        <div class="col s3 offset-s3">
            <img src="<?= asset('img/registro.png'); ?>" height="300" width="500">
        </div>
    </div>
    <div class="row">
        <div class="col s4 offset-s4">
            Nombre:
            <input type="text" name="nombre" value="<?= 
            $retVal = (isset($_POST['nombre'])) ? $_POST['nombre'] : '' ; ?>
            ">
        </div>
        <div class="col s4 offset-s4">
            Apellidos:
            <input type="text" name="apellidos" value="<?= 
            $retVal = (isset($_POST['apellidos'])) ? $_POST['apellidos'] : '' ; ?>
            ">
        </div>
        <div class="col s4 offset-s4">
            Nombre de Usuario:
            <input type="text" name="usuario" value="<?= 
            $retVal = (isset($_POST['usuario'])) ? $_POST['usuario'] : '' ;
            ?>">
        </div>
        <div class="col s4 offset-s4">
            Contraseña:
            <input type="password" name="contraseña" value="">
        </div>
        <div class="col s4 offset-s4">
            Repetir Contraseña:
            <input type="password" name="contraseñaR" value="">
        </div>
        <div class="col s4 offset-s4">
            Email:
            <input type="text" name="email" value="<?= 
            $retVal = (isset($_POST['email'])) ? $_POST['email'] : '' ; ?>
            ">
        </div>
        <div class="col s4 offset-s4">
            CIF:
            <input type="text" name="cif" value="<?= 
            $retVal = (isset($_POST['cif'])) ? $_POST['cif'] : '' ; ?>
            ">
        </div>
        <div class="col s4 offset-s4">
            Direccion:
            <input type="text" name="direccion" value="<?= 
            $retVal = (isset($_POST['direccion'])) ? $_POST['direccion'] : '' ; ?>
            ">
        </div>
        <div class="col s4 offset-s4">
            Codigo Postal:
            <input type="text" name="cp" value="<?= 
            $retVal = (isset($_POST['cp'])) ? $_POST['cp'] : '' ; ?>
            ">
        </div>
        <div class="col s4 offset-s4">
            Telefono:
            <input type="text" name="telefono" value="<?= 
            $retVal = (isset($_POST['telefono'])) ? $_POST['telefono'] : '' ; ?>
            ">
        </div>
    </div>
    <div class="row">
        <div class="col s4 offset-s4">
            <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Confirmar
                <i class="material-icons right">send</i>
            </button>
        </div>
    </div>
</form>
@endsection