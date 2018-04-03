@extends('layouts.app')
@section('content')
@include('layouts.menu')
<div class="col-sm-9 col-md-10">
    <h1 class="title">Proyectos</h1>
</div>
@forelse($projects as $project)
<div class="col-sm-6 col-md-4">
    <div class="panel panel-default">
        <div class="panel-body">
            <strong>{{$project->project}}</strong><br>
            {{$project->description}}<br>
            <i class="fas fa-clock"></i> {{$project->created_at->diffForHumans()}}<br>
            <a href="{{route('project.show', $project->id)}}"><span class="label label-primary"><i class="fas fa-file"></i> Recursos</span></a>
            <a href="{{route('project.show', $project->id)}}"><span class="label label-primary"><i class="fas fa-file"></i> Requerimientos</span></a>
            <a href="{{route('project.show', $project->id)}}"><span class="label label-danger"><i class="fas fa-bell"></i> Reportes</span></a>
        </div>
        <div class="panel-footer">
            <div class="row">
                <div class="col-sm-12">
                    <a href="{{route('project.show', $project->id)}}" class="btn btn-primary pull-right item"><i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@empty

@endforelse
@endsection
