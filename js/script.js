const {createApp} = Vue;

const app = createApp({

    data(){
        return{
            newTask: '',
            list: [],
        }
    },

    methods: {

        send() {
            const data = {
                newTask: this.newTask,
            }

            axios.post(
                'server.php',
                data, 
                {headers: {'Content-Type': 'multipart/form-data'}}
            ).then((response) => {

                this.getList();

                this.newTask = '';
            });
        },

        getList() {
            axios.get('server.php').then((res) => {
                this.list = [...res.data];
            })
        },

        taskDone(i) {
            const data = {
                index: i
            };

            axios.post(
                'server.php',
                data,
                {headers: {'Content-Type': 'multipart/form-data'}}
            ).then((response) => {
                    // console.log(response.data);
                    this.getList();
            });
        },

        deleteTask(i) {
            const data = {
                index: i
            };

            axios.post(
                'server.php',
                data,
                {headers: {'Content-Type': 'multipart/form-data'}}
            ).then((response) => {
                    // console.log(response.data);
                    this.getList();
            });
        }
    },

    mounted() {
        this.getList()
    }

}).mount('#app');