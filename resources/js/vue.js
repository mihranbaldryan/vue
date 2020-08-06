/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'


Vue.config.productionTip = false


Vue.use(VueRouter)

import Example from './components/ExampleComponent.vue';
import Vue1 from './components/Vue1omponent.vue';
import Vue2 from './components/Vue2omponent.vue';
import store from './store.js'

const routes = [
    { path: '/', component: Example },
    { path: '/vue1', component: Vue1 },
    { path: '/vue2', component: Vue2 }
  ]


  const router = new VueRouter({
    mode: 'history',
    routes
  })
  
  new Vue({
    el:'#app',
    router,
    store
  })
  