<div class="container tabela">
    <div class="cabecalho resultado">Resultado da Pesquisa</div>
    <table>
        <tr>
            <th></th>
            <th></th>
            <th>Cliente</th>
            <th>CPF</th>
            <th>Data Nasc.</th>
            <th>Estado</th>
            <th>Cidade</th>
            <th>Sexo</th>
        </tr>
        <tr v-for="c in clientes">
            <td>
                <button type="button" @click="editar(c)" class="corpo-botao sucesso">Editar</button>
            </td>
            <td>
                <button type="button" @click="destroy(c.id)" class="corpo-botao perigo">Excluir</button>
            </td>
            <td>@{{ c.nome }}</td>
            <td>@{{ c.cpf }}</td>
            <td>@{{ c.data_nascimento }}</td>
            <td>@{{ c.nome_estado }}</td>
            <td>@{{ c.nome_cidade }}</td>
            <td>@{{ c.sexo }}</td>
        </tr>
    </table>
    <ul class="pagination pagination-sm m-0 float-right">
        <li v-for="i in linksPage" class="page-item">
            <a :class="i.active ? 'page-link active_page' : 'page-link'" @click="getClientes(i.url)"
                href="javascript:void(0)">
                @{{ getLabelPage(i.label) }}</a>
        </li>
    </ul>
</div>
