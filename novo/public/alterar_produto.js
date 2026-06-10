$(document).ready(function () {

    $("#btn_alterar").click(function () {

        $.ajax({
            type: "PUT",
            url: "/api/alterar_produto",
            data: {
                produto_id:     $("#produto_id").val(),      // ✅ corrigido
                nome_bolo:      $("#nome_produto").val(),    // ✅ corrigido
                recheio_bolo:   $("#recheio").val(),         // ✅ corrigido
                cobertura_bolo: $("#cobertura").val(),       // ✅ adicionado
                descricao_bolo: $("#descricao_produto").val(),
                telefone_bolo:  $("#telefone").val(),        // ✅ adicionado
                endereco_bolo:  $("#endereco").val(),        // ✅ adicionado
                data_bolo:      $("#data_entrega").val(),    // ✅ corrigido
            },
            dataType: "JSON",
            success: function (data) {
                if (data.erro == 'n') {
                    Swal.fire({
                        title: "Sabe muito!",
                        text: "Produto alterado com sucesso",
                        icon: "success"
                    });
                } else {
                    Swal.fire({
                        title: "Vish!",
                        text: "Erro ao alterar o produto!",
                        icon: "error"
                    });
                }
            },
            error: function (xhr) {
                console.log(xhr.responseText); // ✅ ajuda a debugar erros
                Swal.fire({
                    title: "Erro!",
                    text: "Não foi possível conectar ao servidor.",
                    icon: "error"
                });
            }
        });

    });

});