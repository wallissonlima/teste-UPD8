<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ClientesModel extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'clientes';
    protected $fillable = [
        'cpf',
        'nome',
        'data_nascimento',
        'sexo',
        'endereco',
        'estado',
        'cidade',
    ];
    public function getClientes($r)
    {
        $resp = DB::table('clientes');
        $resp->select(
            'clientes.*',
            'estado.nome as nome_estado',
            'cidade.nome as nome_cidade',

        );
        $resp->leftJoin('estado', 'estado.id', '=', 'clientes.estado');
        $resp->leftJoin('cidade', 'cidade.id', '=', 'clientes.cidade');

        if (isset($r->cpf))
            $resp->where('clientes.cpf', 'like', "%$r->cpf%");
        if (isset($r->nome))
            $resp->where('clientes.nome', 'like', "%$r->nome%");
        if (isset($r->data_nascimento))
            $resp->where('clientes.data_nascimento', 'like', "%$r->data_nascimento%");
        if (isset($r->sexo))
            $resp->where('clientes.sexo', 'like', "%$r->sexo%");
        if (isset($r->estado))
            $resp->where('clientes.estado', 'like', "%$r->estado%");
        if (isset($r->cidade))
            $resp->where('clientes.cidade', 'like', "%$r->cidade%");

        return $resp->paginate(2);
    }
}
