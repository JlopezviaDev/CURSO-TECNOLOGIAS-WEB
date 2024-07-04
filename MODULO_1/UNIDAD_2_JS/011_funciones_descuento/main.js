//prompt para introducir precio:
const precioOriginal = parseInt(prompt('Introduce en euros el precio original del producto seleccionado'));

//prompt para introducir descuento:
const descuento = parseInt(prompt('Introduce el porcentaje de descuento que deseas aplicar'));

// variable del precio con el descuento aplicado a partir de la función:
let precioFinal = calcularDescuento(precioOriginal, descuento);

//Mensaje a raíz de la ejecución de la función:
alert('El precio final del producto, descontando un ' + descuento + '%, te quedaría en: ' + precioFinal + ' €');

//FUNCIÓN:
function calcularDescuento(precioOriginal, descuento) {
    let descuentoAplicado = descuento * precioOriginal / 100;
    let precioFinalCalculado = precioOriginal - descuentoAplicado;
    return precioFinalCalculado;
}