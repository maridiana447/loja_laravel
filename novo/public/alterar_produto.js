$(document).ready(function () {

    $("#btn_alterar").click(function () {

        $.ajax({
            type: "PUT",
            url: "/api/alterar_produto",
            data: {
                produto_id:     $("#produto_id").val(),      
                nome_bolo:      $("#nome_produto").val(),    
                recheio_bolo:   $("#recheio").val(),         
                cobertura_bolo: $("#cobertura").val(),     
                descricao_bolo: $("#descricao_produto").val(),
                telefone_bolo:  $("#telefone").val(),        
                endereco_bolo:  $("#endereco").val(),        
                data_bolo:      $("#data_entrega").val(),  
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
                console.log(xhr.responseText);
                Swal.fire({
                    title: "Erro!",
                    text: "Não foi possível conectar ao servidor.",
                    icon: "error"
                });
            }
        });

    });
    $("#btn_excluir").click(function () {

        $.ajax({
            type: "DELETE",
            url: "/api/excluir_produto",
            data: {
                produto_id: $("#produto_id").val()
            },
            dataType: "JSON",
            success: function (info) {

                if (info.erro == 'n') {
                    Swal.fire({
                        title: "Sabe muito!",
                        text: "Produto excluido com sucesso",
                        icon: "success"
                    });
                    window.location.href = "/lista_produto";

                } else {
                    Swal.fire({
                        title: "vish",
                        text: "deu ruim",
                        icon: "error"
                    });
                }

            }

        });
    });

});