@extends('layouts.app') @section('content') @include('layouts.menu')
<div class="col-sm-9 col-md-10">
    <h1 class="title">{{$project->project}}</h1>
</div>
<div class="col-sm-9 col-md-10">
    <div class="row">
        <div class="col-sm-4 column">
            <h4 class="title">Reportes</h4>
        </div>
        <div class="col-sm-4 column">
            <h4 class="title">Características</h4>
            <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#modalFeature"><i class="fas fa-plus"></i> Agregar</button>
            @forelse($project->features as $feature)
            <div class="media">
                <div class="row">
                    <div class="col-xs-10">
                        <div class="media-body feature" style="border-color: {{$feature->status->color}}">
                            <h4 class="media-heading">{{$feature->feature}}</h4>
                            <strong>Estatus</strong> {{$feature->status->status}}<br>
                            <strong>{{$feature->user->name}}</strong> {{$feature->created_at->diffForHumans()}}<br>
                        </div>
                    </div>
                    <div class="col-xs-2 text-center">
                        <a href="{{route('feature.show', $feature->id   )}}"><i class="fas fa-plus more"></i></a>   
                    </div>
                </div>
            </div>
            @empty 
            @endforelse
        </div>
        <div class="col-sm-4">
            <h4 class="title">Recursos</h4>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modalFeature">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Característica</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <form action="{{route('feature.store')}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="user_id" value="{{Auth::id()}}">
                            <input type="hidden" name="project_id" value="{{$project->id}}">
                            <div class="form-group">
                                <label for="">Característica</label>
                                <input type="text" class="form-control" name="feature" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default pull-right">Aceptar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection