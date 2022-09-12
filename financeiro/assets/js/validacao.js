function ValidarMeusDados() {
    var nome = document.getElementById("nome").value;
    var email = $("#email").val();

    if (nome.trim() == '') {
        alert("Preencher os campos em vermelho/vazio!");
        $("#nome").focus();
        $("#divMeusDados_1").addClass("has-error");
        return false;
    } else {
        $("#divMeusDados_1").removeClass("has-error").addClass("has-success");
    }

    if (email.trim() == '') {
        alert("Preencher os campos em vermelho/vazio!");
        $("#email").focus();
        $("#divMeusDados_2").addClass("has-error");
        return false;
    } else {
        $("#divMeusDados_2").removeClass("has-error").addClass("has-success");
    }
}

function ValidarCategoria() {

    if ($("#nome_categoria").val().trim() == '') {
        alert("Preencher os campos em vermelho/vazio!");
        $("#nome_categoria").focus();
        $("#divCategoria").addClass("has-error");
        return false;
    } else {
        $("#divCategoria").removeClass("has-error").addClass("has-success");
    }
}

function ValidarEmpresa() {

    if ($("#nome").val().trim() == '') {
        alert("Preencher os campos em vermelho/vazio!");
        $("#nome").focus();
        $("#divEmpresa").addClass("has-error");
        return false;
    } else {
        $("#divEmpresa").removeClass("has-error").addClass("has-success");
    }
}

function ValidarConta() {

    if ($("#nome_banco").val().trim() == '') {
        alert("Preencher os campos em vermelho/vazio!");
        $("#nome_banco").focus();
        $("#divConta_1").addClass("has-error");
        return false;
    } else {
        $("#divConta_1").removeClass("has-error").addClass("has-success");
    }

    if ($("#agencia").val().trim() == '') {
        alert("Preencher os campos em vermelho/vazio!");
        $("#agencia").focus();
        $("#divConta_2").addClass("has-error");
        return false;
    } else {
        $("#divConta_2").removeClass("has-error").addClass("has-success");
    }

    if ($("#numero_conta").val().trim() == '') {
        alert("Preenceher os campos em vermelho/vazio!");
        $("#numero_conta").focus();
        $("#divConta_3").addClass("has-error");
        return false;
    } else {
        $("#divConta_3").removeClass("has-error").addClass("has-success");
    }

    if ($("#saldo").val().trim() == '') {
        alert("Preencher os campos em vermelho/vazio!");
        $("#saldo").focus();
        $("#divConta_4").addClass("has-error");
        return false
    } else {
        $("#divConta_4").removeClass("has-error").addClass("has-success");
    }
}

function ValidarMovimento() {

    if ($("#tipo_movimento").val() == '') {
        alert("Preencher os campos em vermelho/vazio!");
        $("#tipo_movimento").focus();
        $("#divMovimento_1").addClass("has-error");
        return false;
    } else {
        $("#divMovimento_1").removeClass("has-error").addClass("has-success");
    }

    if ($("#data").val().trim() == '') {
        alert("Preencher os campos em vermelho/vazio!");
        $("#data").focus();
        $("#divMovimento_2").addClass("has-error");
        return false;
    } else {
        $("#divMovimento_2").removeClass("has-error").addClass("has-success");
    }

    if ($("#valor").val().trim() == '') {
        alert("Preencher os campos em vermelho/vazio!");
        $("#valor").focus();
        $("#divMovimento_3").addClass("has-error");
        return false;
    } else {
        $("#divMovimento_3").removeClass("has-error").addClass("has-success");
    }

    if ($("#categoria").val() == '') {
        alert("Preencher os campos em vermelho/vazio!");
        $("#categoria").focus();
        $("#divMovimento_4").addClass("has-error");
        return false;
    } else {
        $("#divMovimento_4").removeClass("has-error").addClass("has-success");
    }

    if ($("#empresa").val() == '') {
        alert("Preencher os campos em vermelho/vazio!");
        $("#empresa").focus();
        $("#divMovimento_5").addClass("has-error");
        return false;
    } else {
        $("#divMovimento_5").removeClass("has-error").addClass("has-success");
    }

    if ($("#conta").val() == '') {
        alert("Preencher os campos em vermelho/vazio!");
        $("#conta").focus();
        $("#divMovimento_6").addClass("has-error");
        return false;
    } else {
        $("#divMovimento_6").removeClass("has-error").addClass("has-success");
    }
}

function ValidarConsultaPeriodo() {

    if ($("#tipo_movimento").val().trim() == '') {
        alert("Preencher os campos em vermelho/vazio!");
        $("#tipo_movimento").focus();
        $("#divMovimento_1").addClass("has-error");
    } else {
        $("#divMovimento_1").removeClass("has-error").addClass("has-success");
    }

    if ($("#data_inicial").val().trim() == '') {
        alert("Preencher os campos em vermelho/vazio!");
        $("#data_inicial").focus();
        $("#divMovimento_2").addClass("has-error");
    } else {
        $("#divMovimento_2").removeClass("has-error").addClass("has-success");
    }

    if ($("#data_final").val().trim() == '') {
        alert("Preencher os campos em vermelho/vazio");
        $("#data_final").focus();
        $("#divMovimento_3").addClass("has-error");
    } else {
        $("#divMovimento_3").removeClass("has-error").addClass("has-success");
    }
}

function ValidarConsultaPeriodoEmpresa() {

    if ($("#empresa").val().trim() == '') {
        alert("Preencher os campos em vermelho/vazio!");
        $("#empresa").focus();
        $("#divEmpresa").addClass("has-error");
        return false;
    } else {
        $("#divEmpresa").removeClass("has-error").addClass("has-success");
    }

    if ($("#data_inicial").val().trim() == '') {
        alert("Preencher os campos em vermelho/vazio!");
        $("#data_inicial").focus();
        $("#divMovimento_2").addClass("has-error");
    } else {
        $("#divMovimento_2").removeClass("has-error").addClass("has-success");
    }

    if ($("#data_final").val().trim() == '') {
        alert("Preencher os campos em vermelho/vazio");
        $("#data_final").focus();
        $("#divMovimento_3").addClass("has-error");
    } else {
        $("#divMovimento_3").removeClass("has-error").addClass("has-success");
    }
}

function ValidarLogin() {

    if ($("#email").val().trim() == '') {
        alert("Preencher os campos em vermelho/vazio!");
        $("#email").focus();
        $("#divLogin_1").addClass("has-error");
        return false;
    } else {
        $("#divLogin_1").removeClass("has-error").addClass("has-success");
    }

    if ($("#senha").val().trim() == '') {
        alert("Preencher os campos em vermelho/vazio!");
        $("#senha").focus();
        $("#divLogin_2").addClass("has-error");
        return false;
    } else {
        $("#divLogin_2").removeClass("has-error").addClass("has-success");
    }
}

function ValidarCadastro() {

    if ($("#nome").val().trim() == '') {
        alert("Preencher os campos em vermelho/vazio!");
        $("#nome").focus();
        $("#divCadastro_1").addClass("has-error");
        return false;
    } else {
        $("#divCadastro_1").removeClass("has-error").addClass("has-success");
    }

    if ($("#email").val().trim() == '') {
        alert("Preencher os campos em vermelho/vazio!");
        $("#email").focus();
        $("#divCadastro_2").addClass("has-error");
        return false;
    } else {
        $("#divCadastro_2").removeClass("has-error").addClass("has-success");
    }

    if ($("#senha").val().trim() == '') {
        alert("Preencher os campos em vermelho/vazio!");
        $("#senha").focus();
        $("#divCadastro_3").addClass("has-error");
        return false;
    } else {
        $("#divCadastro_3").removeClass("has-error").addClass("has-success");
    }

    if ($("#senha").val().trim().length < 6) {
        alert("A senha deverá conter no mínimo 6 caracteres!")
        $("#senha").focus();
        $("#divCadastro_3").addClass("has-error");
        return false;
    } else {
        $("#divCadastro_3").removeClass("has-error").addClass("has-success");
    }

    if ($("#senha").val().trim() != $("#repetir_senha").val().trim()) {
        alert("A senha e o Repitir Senha não estão iguais!");
        $("#repetir_senha").focus();
        $("#divCadastro_4").addClass("has-error");
        return false;
    } else {
        $("#divCadastro_4").removeClass("has-error").addClass("has-success");
    }
}


