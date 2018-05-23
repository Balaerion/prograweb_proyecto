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
