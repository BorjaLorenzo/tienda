@extends('plantilla-conf')
@section('cuerpo')
    <form action="" method="post">
        <div class="row"><br><br><br></div>
        <div class="row">
            <div class="col s4 offset-s4">
                Identificador:
                <input type="text" name="id" value="<?= 
                $retVal = (isset($_POST['id'])) ? $_POST['id'] : '' ;
                ?>">
            </div>
        </div>
        <div class="row">
            <div class="col s4 offset-s4">
                <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Confirmar
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>
        <a class="waves-effect waves-light btn-large" href="<?= url('adm'); ?>"><i class="material-icons left">arrow_back</i>Volver</a>
    </form>
@endsection