$("#enviar").click(function () {


    var destinatario = $("#destinatario").val();
    var assunto = $("#assunto").val();
    var mensagem = $("#mensagem").val();

   // var user_id =<?php echo "1"; ?>;

    // alert(user_id);


    // alert(user_id);
    var route = "http://localhost:8000/enviarMensagem";
    var token = $("#token").val();

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data:{
            destinatario: destinatario,
            assunto: assunto,
            mensagem: mensagem
            // user_id: user_id,
         },

        success:function () {
            $("#sms").fadeIn();
        }
    });

    // $("#nome").clear();

});