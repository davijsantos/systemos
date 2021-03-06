@extends('layouts.default')
@section('content')
<div class="container">
    <div class="container">
        <h1>Registrar atendimento</h1>
    </div>
    <br>
    <div class="container form-registra-atendimento">

        <form class="form-registra-atendimento" action="" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="cliente"><b>Cliente</b></label>
                <input name="cliente" class="form-control" type="text" >
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="tecnico"><b>Técnico</b></label>
                <select name="tecnico" class="form-control">
                    <option>Selecione um técnico</option>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="tipoatendimento"><b>Tipo de Atendimento</b></label>
                <select name="tipoatendimento" class="form-control">
                    <option>Selecione um tipo</option>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="dataexecucao"><b>Data de execução</b></label>
                <input type="date" name="dataexecucao" class="form-control">
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="observacao"><b>Observação</b></label>
                <textarea name="observacao" class="form-control"></textarea>
            </div>
            <br>
            <input type="submit" class="form-control btn btn-success">
        </form>

    </div>
</div>
@stop
