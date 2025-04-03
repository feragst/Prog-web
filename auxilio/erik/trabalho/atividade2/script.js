let botaoAumentar = document.getElementById("aumentar");
let botaoDiminuir = document.getElementById("diminuir");
let campoNumero = document.querySelector(".numero");
let numero = 0;

botaoAumentar.addEventListener("click", () => {
    numero++;
    campoNumero.textContent = numero;
});

botaoDiminuir.addEventListener("click", () => {
    numero--;
    campoNumero.textContent = numero;
});