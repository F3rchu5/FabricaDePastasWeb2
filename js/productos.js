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
    url:'api/fabrica/' + idproducto,
    datatype: 'JSON',
    success: function(){
      $('#producto'+idproducto).remove();
    },
    error: function () {
      alert('Imposible borrar producto.');
    }
  });
}

function realizarProducto(idproducto){
  $.ajax({
    method: 'PUT',
    url:'api/fabrica/' + idproducto,
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
  borrarProducto(this.getAttribute('idproducto'));
});

$('body').on('click','a.realizada', function(event){
  event.preventDefault();
  realizarProducto(this.getAttribute('idproducto'));
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
