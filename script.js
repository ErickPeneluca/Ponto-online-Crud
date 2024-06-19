const date = new Date();

const ano_date = date.getFullYear();
let mes_date = date.getMonth();
let dia_date = date.getDay();

let dataFormatada;


if ( dia_date <= 9 && mes_date <= 9) {
    dataFormatada = ano_date + `-` + `0` + mes_date + `-`+ `0` + dia_date;
    
}else if (mes_date <=9) {
    
    dataFormatada = ano_date + `-` + `0` + mes_date + `-` + dia_date;
    
} else if (dia_date <= 9){
    dataFormatada = ano_date + `-` + mes_date + `-` + `0` + dia_date;
    
} else if ( dia_date <= 0 || dia_date >= 32 || mes_date <= 0 || mes_date >= 13 ) {
    window.print("Erro");
} else {
    dataFormatada = ano_date + `-` + mes_date + `-` + dia_date;
}

window.document.getElementById("Data").value = dataFormatada;

// CONSERTAR EXIBICAO DADOS EM TEMPO REAL

let inputData = window.document.getElementById("Data");
let inputInicio = window.document.getElementById("Inicio");
let inputTermino = window.document.getElementById("Termino");

let INPUT_DATA = window.document.getElementById("Data").value;

inputData.addEventListener("input", function () {

    // COMPARACAO ANO

    
    
    var inputValue = inputData.value;
    
    // Remove todos os caracteres que não são números
    var cleanedValue = inputValue.replace(/\D/g, '');
    
    // Limita o número de caracteres para o dia_date (DD) a no máximo 2
    cleanedValue = cleanedValue.substring(0, 8);
    
    // Formata a data no formato YYYY-MM-DD
    var formattedValue = cleanedValue.replace(/(\d{4})(\d{2})?(\d{0,2})?/, function(match, p1, p2, p3) {
        var formattedDate = p1 + (p2 ? '-' + p2 : '') + (p3 ? '-' + p3 : '');
        return formattedDate;
    });
    
    // Atualiza o valor do campo de entrada com a data formatada
    inputData.value = formattedValue;
    
    let ano = INPUT_DATA.substring(0,3);

    if ((ano > ano_date || ano < ano_date) && inputData.value.length == 10 ) {
        alert("Somente o ano atual é válido")
        location.reload();
    }
});