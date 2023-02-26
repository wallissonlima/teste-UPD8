@extends('_layout.index')
@section('style')
    <style>
        * {
            font-family: Roboto, sans-serif;
        }

        select,
        input[type="text"],
        input[type="date"] {
            border-radius: 10px;
            padding: 8px;
            border: 1px solid #000;
            width: 100%;
        }

        input::placeholder {
            color: darkgray;
        }

        .container {
            border: 1px solid #000;
            padding: 1rem;
            border-radius: 10px;
        }

        .logo {
            margin-bottom: 1rem;
        }

        .formulario,
        .tabela {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .campo {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .campo label {
            font-weight: bold;
        }

        .endereco {
            grid-column: 1 / span 2;
        }

        .cabecalho {
            font-size: 1.5rem;
            color: #663399;
            font-weight: bold;
        }

        .resultado {
            color: #4169e1;
        }

        .corpo {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
        }

        .rodape {
            display: flex;
            justify-content: flex-end;
            gap: 0.5rem;
        }

        .corpo-botao {
            padding: 8px 16px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: 0.3s linear;
        }

        .corpo-botao:hover {
            filter: brightness(80%);
        }

        .primario {
            background-color: #3b82f6;
            color: #fff;
        }

        .secundario {
            background-color: #dcdcdc;
            color: #000;
        }

        .sucesso {
            background-color: #008000;
            color: #fff;
        }

        .perigo {
            background-color: #ce0000;
            color: #fff;
        }

        table,
        th,
        td {
            border: 1px solid #000;
            border-collapse: collapse;
        }

        table {
            width: 100%;
            table-layout: fixed;
        }

        th {
            background-color: #dcdcdc;
            height: 3rem;
            cursor: default;
        }

        td {
            text-align: center;
            height: 3rem;
        }

        .pagination {
            display: flex;
            justify-content: center;
        }
    </style>
@stop
@section('content')
    <div id="app_">
        <div class="container">
            <img src="asset\imagem\logo.jpeg" alt="logo" class="logo" />
            <form class="container formulario">
                @csrf
                <div class="cabecalho">Cadastro Cliente</div>
                <div class="corpo">
                    <div class="campo">
                        <label for="cpf">CPF:</label>
                        <input v-model="form.cpf" id="cpf" type="text" placeholder="378.846.758-55" />
                    </div>
                    <div class="campo">
                        <label for="nome">Nome:</label>
                        <input v-model="form.nome" id="nome" type="text" />
                    </div>
                    <div class="campo">
                        <label for="dataNascimento">Data Nascimento:</label>
                        <input v-model="form.data_nascimento" id="dataNascimento" type="date" />
                    </div>
                    <div class="campo">
                        <label for="sexo">Sexo:</label>
                        <span><input v-model="form.sexo" id="sexo" type="radio" value="masculino" />Masculino</span>
                        <span><input v-model="form.sexo" id="sexo" type="radio" value="feminino" />Feminino</span>
                    </div>
                    <div class="campo endereco">
                        <label for="endereco">Endereço:</label>
                        <input v-model="form.endereco" id="endereco" type="text" />
                    </div>
                    <div class="campo">
                        <label for="estado">Estado:</label>
                        <select v-model="form.estado" id="estado">
                            <option v-for="e in estado" :value="e.id">@{{ e.nome }}</option>
                        </select>
                    </div>
                    <div class="campo">
                        <label for="cidade">Cidade:</label>
                        <select v-model="form.cidade" id="cidade">
                            <option v-for="c in cidade" :value="c.id">@{{ c.nome }}</option>
                        </select>
                    </div>
                </div>
                <div class="rodape">
                    <button type="button" @click="salvar()" class="corpo-botao primario">Salvar</button>
                    <button type="button" @click="form = {}" class="corpo-botao secundario">Limpar</button>
                </div>
            </form>
        </div>
        <br /><br />
        @include('cliente.consulta');
    </div>

@section('script')
    @include('cliente/js')
@stop
@endsection
