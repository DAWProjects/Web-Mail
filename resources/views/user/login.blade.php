@extends('layouts.user')

@section('content')


        <div class="row col-md-4 col-md-offset-4 custyle">

            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <div class="text-center"><h3><b>Login</b></h3></div>

            <form action="{{ route('autenticarUser') }}" method="post" class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>
                <br/>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>

                <button type="submit" class="btn btn-lg btn-primary btn-block btn-signin" >Login</button>
                <a href="{{route('registoUser')}}" class="btn" >Registar Conta</a>
                {{ csrf_field() }}
            </form>

        </div>

@stop