<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        'name', 'etapa', 'turma', 'nascimento', 'cpf', 'sexo', 'email', 'telefone', 'rua', 'numero', 'complemento', 'bairro', 'cep', 'cidade', 'estado', 'pais', 'camisa', 'escola_id', 'categoria_id', 'projeto_id',
    ];

    public function projeto()
    {
        return $this->belongsTo(Projeto::class);
    }

    public function escola()
    {
        return $this->belongsTo(Escola::class, 'escola_id', 'id');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id', 'id');
    }
}
