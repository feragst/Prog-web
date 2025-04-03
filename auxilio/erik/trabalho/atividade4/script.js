const input = document.querySelector(".input");
const btnAdicionar = document.querySelector(".adicionar");
const mensagem = document.querySelector(".mensagem");
const lista = document.querySelector(".lista");

btnAdicionar.addEventListener("click", () => {
    let valor = input.value.trim();

    if (valor === "") {
        mensagem.classList.add("mensagem-erro");
    } else {
        mensagem.classList.remove("mensagem-erro");
        let item = document.createElement("li");
        item.textContent = valor;
        lista.appendChild(item);
        input.value = "";
    }
})
