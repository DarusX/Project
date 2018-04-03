<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" id="btn-menu">
                    <i class="fas fa-bars"></i>
                </button>
                <a href="" class="navbar-toggle collapsed btn-right">
                    <i class="fas fa-sign-in-alt"></i>
                </a>
                <a class="navbar-brand" href="#"><i class="fas fa-terminal"></i> Project</a>
            </div>
            <div class="collapse navbar-collapse hidden-xs">
                <p class="navbar-text navbar-right"><i class="fas fa-user"></i> {{(!Auth::guest())?Auth::user()->name : ""}}</p>
            </div>
        </div>
    </nav>
</header>