<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    use HasFactory;

    protected $fillablle = [
        'titulo',
        'descricao',
        'requisitos',
        'beneficios',
        'outras_informacoes',
        'link_candidatura',
        'nome_empresa',
        'logotipo_empresa',
        'data_expiracao',
        'categoria_id'
    ];

    public function categoria(): HasOne
    {
        return $this->hasOne(Categoria::class);
    }
}
