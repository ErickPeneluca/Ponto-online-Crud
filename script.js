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