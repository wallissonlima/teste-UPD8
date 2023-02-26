<div class="container">
    <img src="asset\imagem\logo.jpeg" alt="logo" class="logo" />
    <form class="container formulario">
        <div class="cabecalho">Consulta Cliente</div>
        <div class="corpo">
            <div class="campo">
                <label for="cpf">CPF:</label>
                <input v-model="filter.cpf" id="cpf" type="text" placeholder="378.846.758-55" />
            </div>
            <div class="campo">
                <label for="nome">Nome:</label>
                <input v-model="filter.nome" id="nome" type="text" />
            </div>
            <div class="campo">
                <label for="dataNascimento">Data Nascimento:</label>
                <input v-model="filter.data_nascimento" id="dataNascimento" type="date" />
            </div>
            <div class="campo">
                <label for="sexo">Sexo:</label>
                <span><input v-model="filter.sexo" id="sexo" type="radio" value="masculino" />Masculino</span>
                <span><input v-model="filter.sexo" id="sexo" type="radio" value="feminino" />Feminino</span>
            </div>
            <div class="campo">
                <label for="estado">Estado:</label>
                <select v-model="filter.estado" id="estado">
                    <option v-for="e in estado" :value="e.id">@{{ e.nome }}</option>
                </select>
            </div>
            <div class="campo">
                <label for="cidade">Cidade:</label>
                <select v-model="filter.cidade" id="cidade">
                    <option v-for="c in cidade" :value="c.id">@{{ c.nome }}</option>
                </select>
            </div>
        </div>
        <div class="rodape">
            <button type="button" @click="getClientes(null, filter)" class="corpo-botao primario">Pesquisar</button>
            <button type="button" @click="getClientes(), filter = {}" class="corpo-botao secundario">Limpar</button>
        </div>
    </form>
    <br />
    @include('cliente.tabela');
</div>
