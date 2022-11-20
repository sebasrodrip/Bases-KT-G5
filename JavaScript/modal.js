$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })

$('#btn-login').click(function(){
    var user = $('#user').val();
    var pass = $('#pass').val();

    var url = 'login/controller_login.php'
    $.post(url,{user:user, pass:pass}, function(datos){
        $('#respuesta').html(datos);
    });
  });

  