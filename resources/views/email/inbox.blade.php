@extends('layouts.app')

@section('content')

    <div class="panel-heading">
        Mensagens Recebidas
    </div>

    <div class="panel-body">

        <div class="row col-md-10 col-md-offset-1 custyle">

                 <table class="table table-striped custab table-bordered" id="tabela">
                    <thead>
                    <div class="col-md-4 form-group">
                        <input type="text" placeholder="Pesquisar Mensagem" class="form-control" id="searchField">
                    </div>
                    <a href="{{route('compor')}}" class="btn btn-primary btn-xs pull-right"><b>+</b>Compor</a>
                    <tr>
                         <th>Nome</th>
                         <th>Email</th>
                        <th>Assunto</th>
                        <th>Mensagem</th>
                        <th></th>

                    </tr>
                    </thead>


                    <tbody>
                    @foreach($emails as $m)
                        <tr>

                             <td>{{\App\User::find($m->user_id)->name}}</td>
                             <td>{{\App\User::find($m->user_id)->email}}</td>
                            <td>{{$m->assunto}}</td>
                            <td>{{$m->mensagem}}</td>

                            <td>
                                {{--{!! link_to_route('responderMensagem', $title = 'Responder', $parameters = $m->user_id, $attributes = [ 'class'=>'btn fa fa-reply']) !!}--}}
                                <a class="btn fa fa-reply" href="{{ route('compor', ['email'=> App\User::find($m->user_id)->email, 'assunto'=>$m->assunto]) }}">Responder</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


        </div>


    </div>
@stop