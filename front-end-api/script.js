const paragrafo = document.getElementById('titulo');
const paragrafo2 = document.getElementById('autores');
const paragrafo3 = document.getElementById('editora');
const paragrafo4 = document.getElementById('sinopse');

async function main(){


let resultado = await fetch('https://brasilapi.com.br/api/isbn/v1/9788545702870')
let json = await resultado.json()
console.log(json)

//paragrafo2.innerHTML = "Autores:" + json.authors;
//paragrafo3.innerHTML = "Editora:" + json.publisher;
//paragrafo4.innerHTML = "Sinopse:" + json.synopsis;

let texto =""
for(let i = 0; i <json.length; i++){
    let item = json[i]
    texto+="Título: " + item.title
    texto+= "</br>"
}
paragrafo.innerHTML = texto;
}

main()