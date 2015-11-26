//------------------PRODUCTOS-----------------------//
function crearProductoHTML(producto) {
  $.ajax({ url: 'js/templates/productos.mst',
     success: function(template) {
       var rendered = Mustache.render(template,producto);
       $('#listaProductos').append(rendered);
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


function crearProductos(){
  $.ajax({
    method: 'GET',
    url:'api/fabrica',
    datatype: 'JSON',
    success: function(productos){
      $('#listaProductos').html('');
      productos.forEach(function(producto){
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
    url:'api/fabrica',
    datatype: 'JSON',
    data: producto,
    success: function(id_producto){
      producto.id_producto=id_producto;
      var html = crearProductoHTML(fixRealizada(producto));
      $('#listaProductos').append(html);
    },
    error: function () {
      alert('Error');
    }
  });
}

function borrarProducto(id_producto){
  $.ajax({
    method: 'DELETE',
    url:'api/fabrica/' + id_producto,
    datatype: 'JSON',
    success: function(){
      $('#product'+id_producto).remove();
    },
    error: function () {
      alert('Imposible borrar producto.');
    }
  });
}

function realizarProducto(id_producto){
  $.ajax({
    method: 'PUT',
    url:'api/fabrica/' + id_producto,
    datatype: 'JSON',
    success: function(){
      $('#product' + idproducto +' span').wrap('<s>');
    },
    error: function () {
      alert('Error');
    }
  });
}


$('body').on('click','a.borrar', function(event){
  event.preventDefault();
  borrarProducto(this.getAttribute('id_producto'));
});

$('body').on('click','a.realizada', function(event){
  event.preventDefault();
  realizarProducto(this.getAttribute('id_producto'));
});
$(document).ready(function(){
  $('#refresh').on('click', function(event){
    event.preventDefault();
    crearProductos();
  });
  $('#agregarProducto').on('click', function(event){
    event.preventDefault();
    var producto= {producto:$('#product').val()}+','+{precio: $('#price').val()}+','+{categoria:$('#category').val()}+','+
      {imagen:$('#imagesToUpload').val()};
    agregarProducto(producto);
  });



  crearProductos();

});
