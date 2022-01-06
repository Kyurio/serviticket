const app = new Vue({

  el: '#app',

  data: {

    valor: 0,

  },

  computed: {

  },

  methods: {

    // funcion que  agrega los titulos al card de cabecera
    SetValores: function(valor){

      app.valor = valor;

    },

  }

});
