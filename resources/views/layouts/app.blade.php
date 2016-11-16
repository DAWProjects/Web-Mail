<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>


<body>

    <div>
        @include('partials.header')
    </div>

    <div class="container-fluid main-container">

        <div class="col-md-2 sidebar">
            @include('partials.sidebar')
        </div>

        <div  class="col-md-10 content" style="min-height: 300px;">
            <div class="panel panel-default">
                @yield('content')
            </div>
        </div>

    </div>

    <footer class="pull-left footer" style="background-color: lightblue">
        <hr class="divider">
        <div class="container text-center">
            <p class="col-md-12">
            Copyright &COPY; 2016 <a href="{{ route('/') }}">Webmail</a>
            </p><br/>
        </div>

    </footer>


    @include('partials.javascripts')
</body>
</html>