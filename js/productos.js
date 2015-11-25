
// function crearTareaHTML(tarea) {
//   var html = '<li class="list-group-item">';
//   if(tarea.realizada){
//     html +='<s>'+ tarea.tarea +'</s>';
//   }
//   else{
//     html += tarea.tarea;
//   }
//   html+='<a class="glyphicon glyphicon-trash" href="index.php?action=borrar_tarea&id_task=' + tarea.id + '"></a>';
//   html+='<a class="glyphicon glyphicon-ok" href="index.php?action=realizar_tarea&id_task=' + tarea.id + '"></a>';
//   return  html;
// }

function crearProductoHTML(producto) {
  $.ajax({ url: 'js/templates/productos.mst',
     success: function(template) {
       var rendered = Mustache.render(template,producto);
       $('#listaProducto').append(rendered);
      }
    });
}

function fixRealizada(producto){
  if(producto.realizada == '1')
    producto.realizada = 1;
  else
    producto.realizada = 0;

  return producto;
}


function creaProductos(){
  $.ajax({
    method: 'GET',
    url:'api/fabrica',
    datatype: 'JSON',
    success: function(productos){
      $('#listaProductos').html('');
      tareas.forEach(function(producto){
         var html = crearProductoHTML(fixRealizada(producto));
        $('#listaProductos').append(html);
      });
      console.log(producto);
    },
    error: function () {
      alert('Error');
    }
  });
}

function agregarProducto(producto){
  $.ajax({
    method: 'POST',
    url:'api/producto',
    datatype: 'JSON',
    data: producto,
    success: function(idProducto){
      producto.id_producto=idProducto;
      var html = crearProductoHTML(fixRealizada(producto));
      $('#listaProductos').append(html);
    },
    error: function () {
      alert('Error');
    }
  });
}

function borrarProducto(idproducto){
  $.ajax({
    method: 'DELETE',
    url:'api/producto/' + idproducto,
    datatype: 'JSON',
    success: function(){
      $('#producto'+idproducto).remove();
    },
    error: function () {
      alert('Error');
    }
  });
}

function realizarProducto(idproducto){
  $.ajax({
    method: 'PUT',
    url:'api/producto/' + idproducto,
    datatype: 'JSON',
    success: function(){
      $('#producto' + idproducto +' span').wrap('<s>');
    },
    error: function () {
      alert('Error');
    }
  });
}


$('body').on('click','a.borrar', function(event){
  event.preventDefault();
  borrarTarea(this.getAttribute('idproducto'));
});

$('body').on('click','a.realizada', function(event){
  event.preventDefault();
  realizarTarea(this.getAttribute('idproducto'));
});
$(document).ready(function(){
  $('#refresh').on('click', function(event){
    event.preventDefault();
    crearTareas();
  });
  $('#agregarProducto').on('click', function(event){
    event.preventDefault();
    var tarea= {
      tarea:$('#product').val()
    };
    $('#product').val('');
    agregarProducto(producto);
  });



  crearProductos();

});
