$('.title').click(function (e) {
    proximo = $(this).next();
    $(proximo).slideToggle(800);
});

const campos = document.querySelectorAll('fieldset');
const inicio = () => {  
    campos.forEach(campo => {
        $(campo).slideToggle(0);
    });
}
inicio();

function areaRetangulo(b,h){
    area = b * h;
    $('#resultRetangulo').html("A área do rentângulo é "+ area + " unidades²");
    $('#baseRetangulo').focus();
}

function areaQuadrado(lado){
    area = Math.pow(lado,2);
    $('#resultQuadrado').html("A área do quadrado é: "+area+" unidades².");
}
function areaTrapezio(B,b,h){
    area = (B + b) * h/2;
    $('#resulttrapezio').html("A área do Trapézio é: "+area+" unidades².");
}


















