<<<<<<< HEAD
jQuery(document).on('submit', '#formLg', function (event) {
    event.preventDefault();
    jQuery.ajax({
        url: 'modelo/login.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function () {
            $('#bt').val('Validando....');
        }
    })
    .done(function (respuesta) {
        console.log(respuesta);
        if (!respuesta.error) {
            if (respuesta.tipo == 'Admin') {
                location = 'controlador/Admin/index.html';
            } else if (respuesta.tipo == 'usuario') {
                location = 'index.html';
            }
        } else {
            $('#botonlg').val('Iniciar Secion');
        }
    })
    .fail(function (resp) {
        console.log(resp.responseText);
    })
    .always(function () {
        console.log("complete");
    });
});
=======
jQuery(document).on('submit','#formlg', function(event){
  event.preventDefault();
  jQuery.ajax({
    url: '../modelo/login2.php',
    type: 'POST',
    dataType: 'json',
    data: $(this).serialize(),
    beforeSend: function(){

    }
  })
  .done(function(r){
    console.log(r);
  })
  .fail(function(r2){
    console.log(r2.responseText);
  })
  .always(function()){
    console.log("completo");
  }
});
>>>>>>> 5a280bef883bc3167b33a629a9c3131417ada277
