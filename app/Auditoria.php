<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auditoria extends Model
{
    protected $fillable = [
        'descricao', 'tipo', 'user', 'id_action',
    ];
}
