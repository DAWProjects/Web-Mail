@extends('layouts.app')

@section('content')

            <div class="panel-heading">
                Compor Email
            </div>

            <div class="panel-body">

                <div class="row col-md-10 col-md-offset-1 custyle">

                    {!! Form::open() !!}

                    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

                        <div id="sms" class="alert alert-success alert-dismissible" role="alert" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                {{--<span  aria-hidden="true">&times;</span>--}}
                            </button>
                            Mensagem Enviada com Sucesso!
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <!-- Form :: tipo (name, value, [atributos] ) -->
                                {!! Form::label('email', 'Email') !!}
                                {!! Form::text('destinatario', null, ['id'=>'destinatario', 'class'=>'form-control', 'placeholder'=>'Email']  )!!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                 {!! Form::label('assunto', 'Assunto') !!}
                                {!! Form::text('assunto', null, ['id'=>'assunto', 'class'=>'form-control', 'placeholder'=>'Assunto']  )!!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                {!! Form::label('mensagem', 'Mensagem') !!}
                                {!! Form::text('mensagem', null, ['id'=>'mensagem', 'class'=>'form-control', 'placeholder'=>'Mensagem']  )!!}
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <br/>
                                <a id="responder" class="btn btn-primary form-control fa fa-reply"> Responder</a>
                                {{--{!! Form::submit('Enviar', ['id'=>'registo', 'class'=>'btn btn-primary form-control fa fa-reply']) !!}--}}
                            </div>
                        </div>

                    {!! Form::close() !!}

                </div>


            </div>
 @stop