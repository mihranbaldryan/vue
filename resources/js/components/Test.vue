<template>
  <div class="container">
      <h2>{{getcount}}</h2>
      <input type="number" v-model.number="num" >
      <button class="btn btn-primary" v-on:click="add">TEST</button>
  </div>
</template>
<script>
  import {mapActions, mapGetters} from 'vuex';

  export default {
   props: [
            'messages'
   ],
    
    data(){
      return {
         num:0
      }
    },
      mounted(){
        this.messages.push(1000);
        console.log(this.messages);
      },
      methods:{
          ...mapActions(['addin']),
       
         add(){
            this.$store.dispatch('addin', this.num)
         }
      },
      computed:{
         ...mapGetters(['getcount'])
      }

  }
</script>