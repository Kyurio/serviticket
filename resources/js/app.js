const app = new Vue({

  el: '#app',

  data: {

    title: 'Serviticket',
    titles: 'Home',

  },

  computed: {

  },

  methods: {

    // funcion que  agrega los titulos al card de cabecera
    SetTitles: function(text){

      app.titles = text;

    },

    //funcion para guardar un usuario en la bd
    GrabarUsuario: function () {

    }

  }

});
