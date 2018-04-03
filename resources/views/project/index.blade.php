@extends('layouts.app')
@section('content')
@include('layouts.menu')
<div class="col-sm-9 col-md-10">
    <h1 class="title">Proyectos</h1>
</div>
<div class="col-sm-6 col-md-4">
    <div class="panel panel-default">
        <div class="panel-body">
            <strong>Proyecto</strong><br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
            <i class="fas fa-clock"></i><br>
            <a href=""><span class="label label-primary"><i class="fas fa-file"></i> Recursos</span></a>
            <a href=""><span class="label label-primary"><i class="fas fa-file"></i> Requerimientos</span></a>
            <a href=""><span class="label label-danger"><i class="fas fa-bell"></i> Reportes</span></a>
        </div>
        <div class="panel-footer">
            <div class="row">
                <div class="col-sm-12">
                    <a href="" class="btn btn-primary pull-right item"><i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
