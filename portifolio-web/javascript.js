








// OPERAÇÃO EM JAVA PARA TRANSIÇÃO GRADATIVA DE SEÇÕES ETC.
// um observer que captura quando um elemento entra em tela, entries são as seções observadas, observer é o próprio objeto.

// entries.foreach percore por todas as entradas que estão sendo observadas. 
// se uma seção (entry) estiver visível (entry.isIntersecting), a classe show é adicionada à seção, 
// acionando a animação (ou transição) definida no CSS.
const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
            observer.unobserve(entry.target);
        }
        //observer.unobserve(entry.target) remove o monitoramento dessa seção, para que a animação aconteça uma única vez.
    });
}, { threshold: 0.5 }); // a animação será acionada quando 50% da seção estiver visível

// Seleciona todas as seções da página que tem como class="section"
const sections = document.querySelectorAll('.section');
sections.forEach(section => {
    observer.observe(section);
});

