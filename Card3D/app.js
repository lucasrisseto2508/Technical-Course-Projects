//animação de movimento
const card = document.querySelector('.card');
const container = document.querySelector('.container');
//selecionar tamanho
const tamanhos = document.querySelectorAll('.tamanhos button');
const size = document.querySelectorAll('.size');
//itens
const title = document.querySelector('.title');
const tenis  = document.querySelector('.tenis img');
const comprar = document.querySelector('.comprar button');
const descricao = document.querySelector('.info h3');
const tamanhosContainer = document.querySelector('.tamanhos');


//impedir as transições no carregamento da página
const corpo = document.querySelector('body');
corpo.classList.remove('preload');


//selecionar o tamanho
const limparTamanho = () => {
    size.forEach(botao => {
        botao.classList.remove('active');
    });
}
tamanhos.forEach(tamanho => {
    tamanho.addEventListener('click',() => {
        limparTamanho();
        tamanho.classList.toggle('active');
    })
});


container.addEventListener('mousemove', (e) => {
    //console.log(e.pageX);
    let xAxis = -(window.innerWidth / 2 - e.pageX) / 25;
    let yAxis = (window.innerHeight / 2 - e.pageY) / 25;
    card.style.transform = `rotateX(${yAxis}deg) rotateY(${xAxis}deg)`;
});

//entra na animação
container.addEventListener('mouseenter', (e) => {
    card.style.transition = "none";
    tenis.style.transform = `translateZ(150px) rotate(-45deg)`;
    title.style.transform = `translateZ(125px)`;
    descricao.style.transform = `translateZ(125px)`;
    tamanhosContainer.style.transform = `translateZ(100px)`;
    comprar.style.transform = `translateZ(75px)`;
});

//quando o mouse sai
container.addEventListener('mouseleave', (e) => {
    card.style.transform = `rotateX(0deg) rotateY(0deg)`;
    card.style.transition = "all 0.5s ease";
    tenis.style.transform = `translateZ(0px) rotate(0deg)`;
    title.style.transform = `translateZ(0px)`;
    descricao.style.transform = `translateZ(0px)`;
    tamanhosContainer.style.transform = `translateZ(0px)`;
    comprar.style.transform = `translateZ(0px)`;
});