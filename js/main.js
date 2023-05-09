const { createApp } = Vue;

createApp({
    data(){
        return{
            dischi:[],
            selectedDisk :[],
            apiUrl: "http://localhost/boolean-php/php-dischi-json/server.php",
            //offcanvas proprieties
            show: false,
        }
    },

    methods:{
        handleDiskClick(index){
            axios
                .get(this.apiUrl,{
                    params:{
                        disk_index : index,
                    }   
                }).then((resp)=> {
                    this.selectedDisk = resp.data.results;
                    this.show = true;
                    console.log(this.selectedDisk);
                })
        },
    },

    mounted(){
        axios
            .get(this.apiUrl)
            .then((resp)=>{
                this.dischi = resp.data.results;
                console.log (resp)
            }); 
    },
}).mount('#app');