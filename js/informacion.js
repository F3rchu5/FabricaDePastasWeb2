$(document).ready(function(){
      function guardarInformacion(grupo){
        var producto = $("#product").val();
        var precio = $("#price").val();
        var informacion = [producto, precio];
        var info = {
              "group": grupo,
              "thing": informacion
                    };

          if (grupo && informacion){
                $.ajax({
                   type: "POST",
                   dataType: 'JSON',
                   data: JSON.stringify(info),
                   contentType: "application/json; charset=utf-8",
                   url: "http://web-unicen.herokuapp.com/api/create",
                   success: function(data){
                      obtenerProducto();
                      alert('Se agrego correctamente');

                     },
                     error:function(data){
                       alert('No se pudo comunicar con el servidor');
                     }
                });
            }
        }

            function obtenerProducto(){
                $.ajax({
                   type: "GET",
                   dataType: 'JSON',
                   url: "http://web-unicen.herokuapp.com/api/group/" + grupo,
                   success: function(data){
                      var producto = "";
                      var precio = "";
                      $("#contenidotabla").html('');
                      for (var i = 0; i < data.information.length; i++) {
                         roducto = data.information[i]['thing'][0];
                         precio = data.information[i]['thing'][1];
                         $("#contenidotabla").append("<tr><td>" + producto + "</td><td>" + precio + "</td></tr>");
                      }

                   }
                });
              }
        var grupo=16;
        obtenerProducto(grupo);

        // Llama a la Funcion cargarActividades cuando se Presiona el Boton Correspondiente
        $('#agregarProducto').on('click', function(event){
          event.preventDefault();
          guardarInformacion(grupo);
        });
});
