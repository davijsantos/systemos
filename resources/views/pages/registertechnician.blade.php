@extends('layouts.default')
@section('content')
<div class="container">
    <div class="container">
        <h1>Criar Técnico</h1>
    </div>
    <br>
    <div class="container form-registra-atendimento">
        <form class="form-registra-atendimento" action="" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="tecnico"><b>Técnico</b></label>
                <input name="tecnico" class="form-control" type="text" >
            </div>
            <br>
            <input type="submit" class="form-control btn btn-success">
        </form>
    </div>
</div>
@stop
