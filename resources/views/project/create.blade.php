@extends('layouts.app')
@section('content')
@include('layouts.menu')
<div class="col-sm-9 col-md-10">
    <h1 class="title">Nuevo Proyecto</h1>
</div>
<div class="col-sm-6">
    <form action="" method="post">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Descripción</label>
            <input type="text" name="description" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Aceptar</button>
        </div>
    </form>
</div>
@endsection