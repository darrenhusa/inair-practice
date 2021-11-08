require('./bootstrap');

import Vue from 'vue'
// require('../node_modules/vue/dist/vue.js');
// require('~vue/dist/vue.js');
// require('~/vue/dist/vue.js');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('stacked-column-chart', require('./components/StackedColumnChartAlt.vue').default);

var app = new Vue({
    el: '#app',
    data: {
      message: 'Hello Vue!'
    }
  })