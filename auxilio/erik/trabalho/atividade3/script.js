let resultado = document.querySelector(".resultado");
let btnIgual = document.getElementById("igual");
let botoesNumericos = document.querySelectorAll(".number");
let botoesOperadores = document.querySelectorAll(".oper");
let btnC = document.getElementById("c");
let valorCalculo = 0;
let operacao = "";

function adicionarDigito(digito) { //adicionar digito na tela
    if (digito === "." && resultado.textContent.includes(".")) { // não repetir a ","
        return;
    }

    if (resultado.textContent === "0" && digito !== ".") { // impossibilitar "00011"
        resultado.textContent = digito;
    } else {
        resultado.textContent += digito;
    }
}

function adicionarOperador(operador) { // adicionar operador na tela
    if (resultado.textContent.includes("+") ||
        resultado.textContent.includes("-") ||
        resultado.textContent.includes("/") ||
        resultado.textContent.includes("*")) { // só permitir cálculos com um operador 
        return;
    } else {
        resultado.textContent += " " + operador + " ";
    }
}

botoesNumericos.forEach((botaoNum) => { // para cada botão númerico, pegar valor e chamar a função adicionarDigito
    botaoNum.addEventListener("click", (e) => {
        let valor = e.target.innerText;
        adicionarDigito(valor);
    })
});

botoesOperadores.forEach((botaoOper) => { // para cada botão de operação, pegar operador e chamar a função adicionarOperador
    botaoOper.addEventListener("click", (e) => {
        operacao = e.target.innerText;
        adicionarOperador(operacao);
    })
});

btnIgual.addEventListener("click", () => { // calcular
    let numeros = resultado.innerText.split(" ");
    let num1 = parseFloat(numeros[0]);
    console.log(num1);
    let num2 = parseFloat(numeros[2]);
    console.log(num2);

    switch (operacao) {
        case "+":
            valorCalculo = num1 + num2;
            break;
        case "-":
            valorCalculo = num1 - num2;
            break;
        case "/":
            valorCalculo = num1 / num2;
            break;
        case "*":
            valorCalculo = num1 * num2;
            break;
        default:
            return;
    }
    resultado.textContent = valorCalculo;
})

btnC.addEventListener("click", () => { // reset
    resultado.textContent = "0";
});
