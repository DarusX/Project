@extends('layouts.app') @section('content') @include('layouts.menu')
<div class="col-sm-9 col-md-10">
    <h1 class="title">{{$feature->feature}}</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{route('project.show', $feature->project->id)}}">{{$feature->project->project}}</a>
        </li>
    </ol>
</div>
<div class="col-sm-6">
    
</div>
@endsection