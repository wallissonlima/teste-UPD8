<script>
    const app_ = new Vue({
        el: "#app_",
        data: {
            form: {},
            clientes: {},
            estado: {},
            cidade: {},
            linksPage: {},
            filter: {},
        },
        mounted() {
            this.getListar();
            this.getClientes();
        },
        methods: {
            salvar() {
                axios.post("{{ route('salvar') }}", this.form).then((resp) => {
                    alert(resp.data.message)
                    this.form = {}
                    this.getClientes()
                }).catch((e) => {
                    console.log(e);
                });
            },
            getListar() {
                axios.get("{{ route('getListar') }}").then((r) => {
                    this.estado = r.data.estado;
                    this.cidade = r.data.cidade;
                }).catch((error) => {
                    console.log(error);
                });
            },
            getClientes(url = null, filter = null) {
                if (url == null) url = "{{ route('getClientes') }}"
                if (filter == null) filter = {}

                axios.post(url, filter).then((r) => {
                    this.clientes = r.data.data;
                    this.linksPage = r.data.links;
                }).catch((error) => {
                    console.log(error);
                });
            },
            getLabelPage(str) {
                if (str == '&laquo; Previous')
                    return '<<';
                else if (str == 'Next &raquo;')
                    return '>>';
                else
                    return str;
            },
            editar(cliente) {
                this.form = cliente
            },
            destroy(id) {
                if (confirm('deseja excluir?')) {
                    axios.post("{{ route('destroy') }}", {
                        id: id
                    }).then((r) => {
                        Swal.fire({
                            position: 'top-end',
                            icon: "success",
                            title: "Cliente excluido com sucesso",
                            showConfirm: false,
                            timer: 1500,
                        });
                        this.getClientes()
                    })
                }
            }
        }
    })
</script>
