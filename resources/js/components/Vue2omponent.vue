<template>
    <div class="container">
       <h1>Vue Js component 2</h1> 
       <form class="d-flex flex-column" @submit.prevent>
          <input type="text" v-model="name" placeholder="name..." >
          <input class="input-image" type="file">
          <button @click="sendData" class="btn btn-primary mt-3 btn-send">Send</button>
       </form>
    </div>
</template>    
<script>
 export default{
     data(){
         return {
             name:''
         }
     },
     mounted(){
         console.log('vue js 2');
     },
     methods:{
         sendData(){
             if(this.name.trim().length){
                 let image = document.querySelector('.input-image');
                 let formData = new FormData();
                 formData.append('name', this.name);
                 formData.append('image', image.files[0]);

                fetch('api/sendData',
                {
                    method:'POST',
                    body: formData
                }).then(d => {console.log(d)});


             } else {
                 alert('empty');
             }
         }

     }

 }

</script>
<style scoped>
.btn-send{
    width:100px;
}

</style>