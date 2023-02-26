<?php

namespace App\Http\Controllers;

use App\Models\cidadeModel;
use App\Models\ClientesModel;
use App\Models\estadoModel;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class ClientesController extends Controller
{
    // variavel global
    private $clientes;
    private $estado;
    private $cidade;

    public function __construct()
    {
        $this->clientes = new ClientesModel();
        $this->estado = new estadoModel();
        $this->cidade = new cidadeModel();
    }

    public function clientes()
    {
        return view("cliente.cadastro");
    }

    public function salvar(Request $request)
    {

        if (isset($request->id)) {


            $cliente['cpf'] = $request->cpf;
            $cliente['nome'] = $request->nome;
            $cliente['data_nascimento'] = $request->data_nascimento;
            $cliente['sexo'] = $request->sexo;
            $cliente['endereco'] = $request->endereco;
            $cliente['estado'] = $request->estado;
            $cliente['cidade'] = $request->cidade;
            $cliente['created_at'] = $request->created_at;
            $cliente['updated_at'] = date("Y-m-d H:i:s");

            $this->clientes->where('id', $request->id)->update($cliente);
        } else {
            $cliente = $request->all();
            $this->clientes->create($cliente);
        }

        return response()->json(['message' => 'Cadastro realizando com sucesso ']);
    }

    public function getListar()
    {
        $data['estado'] = $this->estado->get();
        $data['cidade'] = $this->cidade->get();

        return response()->json($data);
    }

    public function getClientes(Request $request)
    {
        $clientes = $this->clientes->getClientes($request);

        return response()->json($clientes);
    }
    public function destroy(Request $request)
    {
        $cliente = ClientesModel::find($request->id);

        return $cliente->delete();
    }
}
