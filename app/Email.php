<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{

    protected $table = 'emails';

    protected $fillable = [
        'destinatario',
        'assunto',
        'mensagem',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
