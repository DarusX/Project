<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/toastr.css')}}">
    <link rel="stylesheet" href="{{asset('css/fmontero.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>
    
    <title>Notes</title>
</head>
<body>
    @include('layouts.navbar')
    <main>
        <div class="container-fluid">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </main>
    <script>
    $("#btn-menu").click(function(){
        $(".sidebar").toggleClass("hidden-xs");
    });
    @if(Session::has('msg'))
    toastr.options = {
        "positionClass": "toast-bottom-right"
    };
    toastr.success("{{Session::get('msg')}}");
    @endif
    </script>
    @yield('scripts')
</body>
</html>