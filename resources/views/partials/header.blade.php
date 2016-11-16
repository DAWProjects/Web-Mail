<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid"  style="background-color: lightblue;">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
                MENU
            </button>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('/') }}">
                WebMail
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
            {{--<form class="navbar-form navbar-left" method="GET" role="search">--}}
                {{--<div class="form-group">--}}
                    {{--<input type="text" name="q" class="form-control" placeholder="Search">--}}
                {{--</div>--}}
                {{--<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>--}}
            {{--</form>--}}
            <div class="btn-group pull-right">
                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user" aria-hidden="true">{{Auth::check() ?  Auth::user()->email : ''}}</i><span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="icon-wrench"></i> Perfil</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </div>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>