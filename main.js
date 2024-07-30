const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            list: [],
            todoItem: '',
        }
    },
    methods: {
        getApi() {
            axios.get(this.apiUrl)
                .then(response => {
                    this.list = response.data;
                })
        },

        // metodo per aggiungere elemento alla lista
        updateList() {
            const data = {
                todoItem: this.todoItem
            }
            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            })
                .then(response => {
                    this.list = response.data;
                    // svuoto l'input
                    this.todoItem = '';
                })
        },

        // metodo per rimuovere elemento dalla lista
        removeItem(index) {
            const data = {
                indexToDelete: index
            }
            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            })
                .then(response => {
                    this.list = response.data;
                })
        }
    },
    mounted() {
        this.getApi();
    }
}).mount('#app');