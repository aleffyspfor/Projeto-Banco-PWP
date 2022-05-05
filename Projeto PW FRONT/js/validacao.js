function verifica(valor){
   
    let dados = valor.value;
    

    // Verifica se e Numeros.
    if(isNaN(dados[dados.length-1])){ 
       valor.value = dados.substring(0, dados.length-1);
       return;
    }
    
    // Insere os Pontos e ifen.
    valor.setAttribute("maxlength", "14");
    if (dados.length == 3 || dados.length == 7) valor.value += ".";
    if (dados.length == 11) valor.value += "-";
 
 }