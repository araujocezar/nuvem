<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InstanciaContainer extends Model
{
    use SoftDeletes;

    protected $fillable = ['hashcode_maquina', 'docker_id', 'user_id', 'dataHora_instanciado', 'dataHora_finalizado', 'nickname', 'image_id'];

    public static $rules = [
        'hashcode_maquina'     => ['required'],
        'docker_id'            => ['required'],
        'dataHora_instanciado' => ['required', 'date'],
        'dataHora_finalizado'  => ['nullable', 'date'],
    ];
}