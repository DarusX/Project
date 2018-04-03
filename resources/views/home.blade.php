@extends('layouts.app')

@section('content')
    @include('layouts.menu')
@endsection
@section('scripts')
<!--
<script>
    $("body").on("click",".item", function(){
        event.preventDefault();
        $.ajax({
            url: $(this).attr("href"),
            success: function(data){
                $("#workspace").html(data)
            }
        })
    });
    $("body").on("submit", "form", function(){
        event.preventDefault();
        $.ajax
    })
</script>
-->
@endsection