Vue.component('example-component', require('./components/ExampleComponent.vue').default);

var app = new Vue({
    el: '#app',
    data: {
      message: 'Hello Vue!'
    }
  })