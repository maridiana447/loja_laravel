$(document).ready(function () {
    
    $("#btn_encomenda").click(function () {
        $.ajax({
            type: "POST",
            url: "api/salvar_bolo",
            data: {
                nome_bolo:      $("#nome_bolo").val(),
                recheio_bolo:      $("#recheio_bolo").val(),
                cobertura_bolo:      $("#cobertura_bolo").val(),
                descricao_bolo:      $("#descricao_bolo").val(),
                telefone_bolo:  $("#telefone_bolo").val(),
                endereco_bolo:     $("#endereco_bolo").val(),
                data_bolo:   $("#data_bolo").val(),
            },
            dataType: "JSON",
            success: function (data) {

                console.log(data);
                if (data.erro == 'n') {
                    Swal.fire({ 
                    title: "Ótimo!", 
                    text: "Bolo cadastrado!", 
                    icon: "success" });

                }
                else {
                    Swal.fire({ 
                    title: "Vish!", 
                    text: "Deu erro!", 
                    icon: "error" });
                }
            },
        });
    });
});