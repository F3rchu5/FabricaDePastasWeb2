
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
/*
function crearProductoHTML(producto) {
  $.ajax({ url: 'js/templates/tarea.mst',
     success: function(template) {
       var rendered = Mustache.render(template,tarea);
       $('#listaTareas').append(rendered);
      }
    });
}

function fixRealizada(tarea){
  if(tarea.realizada == '1')
    tarea.realizada = 1;
  else
    tarea.realizada = 0;

  return tarea;
}


function crearProductos(){
  $.ajax({
    method: 'GET',
    url:'api/fabrica',
    datatype: 'JSON',
    success: function(tareas){
      $('#listaTareas').html('');
      tareas.forEach(function(tarea){
         var html = crearTareaHTML(fixRealizada(tarea));
        $('#listaTareas').append(html);
      });
      console.log(tareas);
    },
    error: function () {
      alert('Error');
    }
  });
}

function agregarTarea(tarea){
  $.ajax({
    method: 'POST',
    url:'api/tarea',
    datatype: 'JSON',
    data: tarea,
    success: function(idTarea){
      tarea.id=idTarea;
      var html = crearTareaHTML(fixRealizada(tarea));
      $('#listaTareas').append(html);
    },
    error: function () {
      alert('Error');
    }
  });
}

function borrarTarea(idtarea){
  $.ajax({
    method: 'DELETE',
    url:'api/tarea/' + idtarea,
    datatype: 'JSON',
    success: function(){
      $('#tarea'+idtarea).remove();
    },
    error: function () {
      alert('Error');
    }
  });
}

function realizarTarea(idtarea){
  $.ajax({
    method: 'PUT',
    url:'api/tarea/' + idtarea,
    datatype: 'JSON',
    success: function(){
      $('#tarea' + idtarea +' span').wrap('<s>');
    },
    error: function () {
      alert('Error');
    }
  });
}


$('body').on('click','a.borrar', function(event){
  event.preventDefault();
  borrarTarea(this.getAttribute('idtarea'));
});

$('body').on('click','a.realizada', function(event){
  event.preventDefault();
  realizarTarea(this.getAttribute('idtarea'));
});
$(document).ready(function(){
  $('#refresh').on('click', function(event){
    event.preventDefault();
    crearTareas();
  });
  $('#agregarTarea').on('click', function(event){
    event.preventDefault();
    var tarea= {
      tarea:$('#task').val()
    };
    $('#task').val('');
    agregarTarea(tarea);
  });



  crearTareas();

});
