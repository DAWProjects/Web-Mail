<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>


<body>


<div class="container-fluid main-container">

    <div  class="col-md-12 content" style="min-height: 300px;">
        <div class="panel panel-default">
            @yield('content')
        </div>
    </div>

</div>


@include('partials.javascripts')
</body>
</html>