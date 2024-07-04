//matriz:
let matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
   ];
//comprobamos matriz entera en consola:
console.log(matriz);
//imprimimos elementos solicitados de la matriz en consola y pantalla:
console.log(matriz[0][2], matriz[1][1]);
document.write(matriz[0][2] + ", " + matriz[1][1]);//separo con comas
document.write("<hr>");

//imprimimos matriz en 3 columnas y 3 filas con forEach
matriz.forEach(elPrimario => {
    elPrimario.forEach(elSecundario=>{
        document.write(elSecundario + " , ");//separo con comas
    })
    document.write("<br>");
    
});
document.write("<hr>");

//sustituimos los múltiplos de "3" por la letra "m"
matriz.forEach(el=>{
    el.forEach(elSec=>{
        if(elSec%3 == 0)
        elSec="m";
        document.write(elSec + " , ");
    });
    document.write("<br>");
})