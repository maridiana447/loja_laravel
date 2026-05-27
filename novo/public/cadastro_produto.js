$(document).ready(function () {
    
    $("#btn_cadastrar").click(function () {
        $.ajax({
            type: "POST",
            url: "api/salvar_usuario",
            data: {
                nome_usuario:      $("#nome_usuario").val(),
                telefone_usuario:  $("#telefone_usuario").val(),
                email_usuario:     $("#email_usuario").val(),
                data_usuario:   $("#data_usuario").val(),
                senha_usuario:     $("#senha_usuario").val(),
            },
            dataType: "JSON",
            success: function (data) {

                console.log(data);
                if (data.erro == 'n') {
                    Swal.fire({ 
                    title: "Ótimo!", 
                    text: "Usuario cadastrado!", 
                    icon: "success" });

                } else {
                    Swal.fire({ 
                    title: "Vish!", 
                    text: "Deu erro!", 
                    icon: "error" });
                }
            },
        });
    });
});