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
