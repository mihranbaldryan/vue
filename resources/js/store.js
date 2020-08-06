import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

 const store = new Vuex.Store({
  state: {
    count:3
  },
    mutations: {
      add: (state,num) => state.count +=num,
      
  },
  actions: {
    addin: ({ commit },num) => {
        commit('add',num);
     }

    },
  getters: {
        getcount: state => {
          return state.count ;
    }  
  }


  });

  export default store;

 