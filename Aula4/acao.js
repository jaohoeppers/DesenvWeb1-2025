function enviar1() {
    var nome = document.getElementById("nome").value;
    var senha = document.getElementById("senha").value;

    if (nome == "João") {
        document.body.style.backgroundColor = "red";
        alert("Errouuu");
    }
}

function somar() {
    var valor1 = document.getElementById("valor1").value;
    var valor2 = document.getElementById("valor2").value;
    var result = parseFloat(valor1)+parseFloat(valor2);

    enviarResultado(result);
}

function diminuir() {
    var valor1 = document.getElementById("valor1").value;
    var valor2 = document.getElementById("valor2").value;
    var result = parseFloat(valor1-valor2);

    enviarResultado(result);
}

function multiplicar() {
    var valor1 = document.getElementById("valor1").value;
    var valor2 = document.getElementById("valor2").value;
    var result = parseFloat(valor1*valor2);

    enviarResultado(result);
}

function dividir() {
    var valor1 = document.getElementById("valor1").value;
    var valor2 = document.getElementById("valor2").value;
    var result = parseFloat(valor1/valor2);

    enviarResultado(result);
}

function enviarResultado(valor) {
    var resultadoElem = document.getElementById("resultado");
    resultadoElem.innerText = valor;
    
    if (valor > 0) {
        resultadoElem.style.backgroundColor = "green";
    } else if (valor < 0) {
        resultadoElem.style.backgroundColor = "red";
    } else {
        resultadoElem.style.backgroundColor = "gray";
    }
}