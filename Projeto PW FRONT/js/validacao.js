function verifica(valor) {

   let dados = valor.value;


   // Verifica se e Numeros.
   if (isNaN(dados[dados.length - 1])) {
      valor.value = dados.substring(0, dados.length - 1);
      return;
   }

   // Insere os Pontos e ifen.
   valor.setAttribute("maxlength", "14");
   if (dados.length == 3 || dados.length == 7) valor.value += ".";
   if (dados.length == 11) valor.value += "-";

}

let cpf = document.getElementById("cpf");
let senha = document.getElementById("senha");
let bt = document.getElementsByTagName("button")[0];


bt.onclick = () => {

   if (cpf.value == 0) {
      alert("Campo do CPF Obrigatório")
      cpf.focus();
      return;
   }

   if (senha.value == 0) {
      alert("Campo de Senha Obrigatório");
      senha.focus();
      return;
   }
}


