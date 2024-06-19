const date = new Date();

let ano = date.getFullYear();
let mes = date.getMonth();
let dia = date.getDay();

let dataFormatada;


if ( dia <= 9 && mes <= 9) {
    dataFormatada = ano + `-` + `0` + mes + `-`+ `0` + dia;
    
}else if (mes <=9) {
    
    dataFormatada = ano + `-` + `0` + mes + `-` + dia;
    
} else if (dia <= 9){
    dataFormatada = ano + `-` + mes + `-` + `0` + dia;
    
} else if ( dia <= 0 || dia >= 32 || mes <= 0 || mes >= 13 ) {
    window.print("Erro");
} else {
    dataFormatada = ano + `-` + mes + `-` + dia;
}

window.document.getElementById("Data").value = dataFormatada;

// CONSERTAR EXIBICAO DADOS EM TEMPO REAL

let inputData = window.document.getElementById("Data");
let inputInicio = window.document.getElementById("Inicio");
let inputTermino = window.document.getElementById("Termino");

inputData.addEventListener("input", function () {
    var inputValue = inputData.value;

    // Remove todos os caracteres que não são números
    var cleanedValue = inputValue.replace(/\D/g, '');

    // Limita o número de caracteres para o dia (DD) a no máximo 2
    cleanedValue = cleanedValue.substring(0, 8);

    // Formata a data no formato YYYY-MM-DD
    var formattedValue = cleanedValue.replace(/(\d{4})(\d{2})?(\d{0,2})?/, function(match, p1, p2, p3) {
        var formattedDate = p1 + (p2 ? '-' + p2 : '') + (p3 ? '-' + p3 : '');
        return formattedDate;
    });

    // Atualiza o valor do campo de entrada com a data formatada
    inputData.value = formattedValue;
});