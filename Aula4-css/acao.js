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

function mediaAluno(){
    var tabela = document.getElementById("tabelaNotas");
    var soma = 0;
    var notas = 0;

    var rows = tabela.getElementsByTagName("tr");

    for (var i = 1; i < rows.length; i++) {

        var celulas = rows[i].getElementsByTagName("td");

        if(celulas.length == 0){
            continue;
        }

        for (var j = 1; j < celulas.length; j++) {

            var nota = parseFloat(celulas[j].innerText);

            if (!isNaN(nota)) {
                soma += nota;
                notas++;
            }
        }
        var media = parseFloat(notas > 0 ? soma / notas : 0)
        var novaCelula = rows[i].insertCell(celulas.length)
        novaCelula.innerText = media;
    }
}

function mediaBimestre(){
    var tabela = document.getElementById("tabelaNotas");
    var soma = 0;
    var notas = 0;

    var rows = tabela.getElementsByTagName("tr");
    var celulas = rows[2].getElementsByTagName("td");
    var novaLinha = tabela.getElementsByTagName("tbody")[0].insertRow()  
    var linha = rows[2].getElementsByTagName("td");
    for (let index = 0; index < linha.length; index++) {
        novaLinha.insertCell(-1);
    }

    for (var i = 1; i < celulas.length; i++) {

        for (var j = 2; j < rows.length-1; j++) {

            var linha = rows[j].getElementsByTagName("td");
            var nota = parseFloat(linha[i].innerText);

            if (!isNaN(nota)) {
                soma += nota;
                notas++;
            }
        }
        var media = parseFloat(notas > 0 ? soma / notas : 0)
        novaLinha.cells[i].innerText = media;
    }
}