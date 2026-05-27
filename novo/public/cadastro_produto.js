$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#btn_cadastrar").click(function () {
        $.ajax({
            type: "POST",
            url: "/api/salvar_produto",
            data: {
                nome_produto:      $("#nome_produto").val(),
                telefone_produto:  $("#telefone_produto").val(),
                email_produto:     $("#email_produto").val(),
                data_nascimento:   $("#data_nascimento").val(),
            },
            dataType: "JSON",
            success: function (data) {
                if (data.erro == 'n') {
                    Swal.fire({ title: "Ótimo!", text: data.msg, icon: "success" });
                } else {
                    Swal.fire({ title: "Erro!", text: data.msg, icon: "error" });
                }
            },
            error: function (xhr) {
                Swal.fire({ title: "Erro!", text: "Status " + xhr.status + " - veja o console.", icon: "error" });
            }
        });
    });
});