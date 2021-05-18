@extends('plantilla-log')
@section('formulario')
    <form action="" method="post" class="container">
        <div class="row"></div>
        <div class="row">
            <div class="col s3 offset-s3">
                <img src="<?= asset('img/candado.png'); ?>" height="300" width="500">
            </div>
        </div>
        <div class="row">
            <div class="col s4 offset-s4">
                Usuario:
                <input type="text" name="usuario" value="<?= 
                $retVal = (isset($_POST['usuario'])) ? $_POST['usuario'] : '' ;
                ?>">
            </div>
            <div class="col s4 offset-s4">
                Contraseña:
                <input type="text" name="contraseña" value="<?= 
                $retVal = (isset($_POST['contraseña'])) ? $_POST['contraseña'] : '' ; ?>
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