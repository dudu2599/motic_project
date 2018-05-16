<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{

    protected $fillable = [
        'name', 'tipoEscola', 'telefone', 'user_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function aluno()
    {
        return $this->belongsTo(Aluno::class, 'escola_id', 'id');
    }

    public function equipe()
    {
        return $this->belongsTo(Equipe::class, 'equipe_id', 'id');
    }

}