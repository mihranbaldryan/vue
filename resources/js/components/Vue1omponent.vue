<template>
    <div class="container">
     <form @submit.prevent>
       <input v-model="surname" >
       <h1>Vue Js component {{surname}} {{getcount}}</h1> 
       <button type="submit" v-on:click="alert" class="btn btn-primary ">event</button>
     </form>
       <test  :messages="messages"></test>
       <h1>{{total}}</h1>

    </div>
</template>    
<script>
import Test from './Test.vue';
import {mapGetters}  from 'vuex'

 export default{ 
      data(){
         return {
             messages: [1,2,10],
             arr: [1,2,9],
             surname: 'baldryan',
            
             }
     },
     components:{
         'test': Test
     },
     computed:{
         total: function(){
             return this.surname+'Mihran';
         },
         ...mapGetters(['getcount'])
     },
    
     mounted(){

         let but = this.$el.querySelector('button');
         console.log('comp 1',this.messages);
     },
     methods: {
         surname2(){
               return this.surname+' surname';  
         },
         alert(){
             alert(this.surname);
         },
         makesame(val){
             alert(val);
         }
     },
     

  
    

 }

</script>