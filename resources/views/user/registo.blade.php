@extends('layouts.user')

@section('content')


    <div class="row col-md-4 col-md-offset-4 custyle">

        <div class="text-center"><h3><b>Registo</b></h3></div>

        <form action="{{ route('salvarUser') }}" method="post" role="form"  id="ajax-register-form"  autocomplete="off">
            <div class="form-group">
                <input type="text" name="nome" id="nome" tabindex="1" class="form-control" placeholder="Nome" value="">
            </div>

            <div class="form-group">
                <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
            </div>
            <div class="form-group">
                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-xs-12">

                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-lg btn-primary btn-block btn-signin" value="Registar">
                        {{ csrf_field() }}
                    </div>
                </div>
            </div>
            {{--<input type="hidden" class="hide" name="token" id="token" value="7c6f19960d63f53fcd05c3e0cbc434c0">--}}
        </form>

    </div>

@stop

