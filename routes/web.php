<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', [
        'uses' =>  function () {
                        return view('index');
                    },
        'as' => '/',
        'middleware' => 'auth'  //Enquanto nao exitiver logado, a rota fica indisponivel e redireciona a rota login
    ]
);

//Route::resource('enviarMensagem,','EmailController');

Route::post('enviarMensagem',  [
        'uses' =>'EmailController@store',
        'as'=> 'enviarMensagem',
        'middleware' => 'auth'  //Enquanto nao exitiver logado, a rota fica indisponivel e redireciona a rota login
    ]
);


Route::get('inbox', [
        'uses' => 'EmailController@index',
        'as' => 'inbox',
        'middleware' => 'auth'  //Enquanto nao exitiver logado, a rota fica indisponivel e redireciona a rota login
    ]
);

Route::get('compor', [
        'uses' => 'EmailController@create',
        'as' => 'compor',
        'middleware' => 'auth'  //Enquanto nao exitiver logado, a rota fica indisponivel e redireciona a rota login
    ]
);


// -----------------------------USER------------------------
Route::get('user', [
        'uses' => 'UserController@login',
        'as' => 'user',
        'middleware' => 'guest' //Se estiver logado essa rota fica indisponivel
    ]
);

Route::post('autenticarUser', [
        'uses' => 'UserController@autenticarUser',
        'as' => 'autenticarUser',
        'middleware' => 'guest'
    ]
);

Route::get('registoUser', [
        'uses' => 'UserController@registoUser',
        'as' => 'registoUser',
        'middleware' => 'guest'

    ]
);

Route::post('salvarUser', [
        'uses' => 'UserController@salvarUser',
        'as' => 'salvarUser',
        'middleware' => 'guest'
    ]
);

Route::get('logout', [
    'uses' => 'UserController@logout',
    'as' => 'logout',
    'middleware' => 'auth'  //Enquanto nao exitiver logado, a rota fica indisponivel e redireciona a rota login
]);


