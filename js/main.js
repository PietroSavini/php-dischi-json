const { createApp } = Vue;

createApp({
    data(){
        return{
            dischi:[],
        }
    },
    mounted(){
        axios
            .get("")
            .then((resp)=>{

            });
    },
}).mount('#app');