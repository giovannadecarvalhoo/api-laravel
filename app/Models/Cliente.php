<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Cliente extends Model
{
    use Notifiable;

    protected $fillable = [
        'nome',
        'image',
        'cpf_cnpj',
    ];

    /**
     * @return string[]
     */
    public function rules()
    {
        return [
            'nome' => 'required',
            'image' => 'image',
            'cpf_cnpj' => 'required|unique:clientes',
        ];
    }
}
