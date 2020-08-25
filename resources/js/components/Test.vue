<template>
  <div class="container">
      <h2>{{getcount}}</h2>
      <input type="number" v-model.number="num" >
      <button class="btn btn-primary" v-on:click="add">TEST</button>
    <transition name="fade" appear>
      <div v-if="show" class="boxs">
         <div class="box box-1">item 1</div>
         <div class="box box-2">item 2</div>
         <div class="box box-3">item 3</div>
         <div class="box box-4">item 4</div>
         <div class="box box-5">item 5</div>
         <div class="box box-6">item 6</div>
         <div class="box box-1">item 7</div>
         <div class="box box-2">item 8</div>
         <div class="box box-3">item 9</div>
         <div class="box box-4">item 10</div>
      </div>
    </transition>
    <nav>
       <a v-bind:class="{active: show }" @click="newcomp='test1'">Test 1</a> 
       <a @click="newcomp='test2'">Test 2</a>
       <a @click="newcomp='test3'">Test 3</a>
    </nav>
      <component v-bind:is="newcomp"></component>

  </div>
</template>
<script>
  import {mapActions, mapGetters} from 'vuex';
  import Test1 from './Test1.vue';
  import Test2 from './Test2.vue';
  import Test3 from './Test3.vue';

  export default {
   props: [
            'messages'
   ],
    data(){
      return {
         num:0,
         show:true,
         newcomp: 'test1',
      }
    },
    components:{
      'test1': Test1,
      'test2': Test2,
      'test3': Test3,
    },
      mounted(){
        this.messages.push(1000);
      },
      methods:{
          ...mapActions(['addin']),
       
         async add(){
            // this.show = !this.show;
            // this.$store.dispatch('addin', this.num);
            let nav=document.querySelectorAll('nav a');
            console.log(nav[2]);

            this.$store.commit('add',this.num);
            let data;
            await fetch('/api/data').then((r)=>r.json()).then((r)=>data=r);
             console.log(data);
         }
      },
      computed:{
         ...mapGetters(['getcount'])
      }

  }
</script>
<style scoped>
  .boxs{
    display: grid;
    grid-template-columns:repeat(3, 1fr);
    grid-template-rows: repeat(3, 100px); 
  }
  .box{
    background-color: red;
    margin:5px;
    padding:5px;
    font-size: 16px;
    color: white;
    border-radius:10px;
  }
  .fade-enter-active, .fade-leave-active {
    transition: opacity 1s;
  }
  .fade-enter, .fade-leave-to /* .fade-leave-active до версии 2.1.8 */ {
    opacity: 0;
   }
   nav{
     margin-bottom: 15px;
   }
   nav a{
     background-color: black;
     padding:10px;
     font-size:18px;
     color: white;
     cursor:pointer;
   }
  nav a:hover{
    color:white;
  }
  nav .active{
    background-color: blue;
  }
  
</style>