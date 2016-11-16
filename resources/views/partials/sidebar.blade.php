    <div class="row">
        <!-- uncomment code for absolute positioning tweek see top comment in css -->
        <div class="absolute-wrapper"> </div>
        <!-- Menu -->
        <div class="side-menu">
            <nav class="navbar navbar-default" role="navigation">
                <!-- Main Menu -->
                <div class="side-menu-container"  style="background-color: red;">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ route('/') }}"><span class="fa fa-home"></span> Inicio</a></li>
                        <li class="active"><a href="{{ route('compor') }}"><span class="fa fa-plus"></span> Compor</a></li>
                        <li class="active"><a href="{{ route('inbox') }}">
                                <span class="fa fa-inbox">

                                </span>
                                Inbox
                                <span class="badge">
                                    {{\App\Email::all()->where('destinatario', Auth::user()->email)->count()}}
                                </span>
                            </a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>

        </div>
    </div>
