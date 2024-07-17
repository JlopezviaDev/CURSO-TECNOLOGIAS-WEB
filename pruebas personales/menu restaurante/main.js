//ENTRANTES
let listaEntrantes = document.getElementById("listaEntrantes");
let entrantes = [];

function crearEntrante() {
    let entrante = prompt("introduce el nombre del entrante que deseas crear");
    entrantes.push(entrante);//se añade el entrante introducido al array
    listaEntrantes.innerHTML = listaEntrantes.innerHTML + `<li>${entrante}</li>`;
}
//una vez creado evento onclick en el button del index.html:
//creamos funcion:
function eliminarEntrante() {
    listaEntrantes.innerHTML = "";
    let entranteEliminado = prompt("Introduce el número del entrante que deseas eliminar");
    entrantes.splice(entranteEliminado - 1, 1);
    entrantes.forEach(entrante => {
        listaEntrantes.innerHTML = `${listaEntrantes.innerHTML} <li> ${entrante} </li>`;
    });
}
//SEGUNDOS
let listaSegundos = document.getElementById("listaSegundos");
let segundos = [];

function crearSegundo() {
    let segundo = prompt("introduce el nombre del segundo que deseas crear");
    segundos.push(segundo);//se añade el segundo introducido al array
    listaSegundos.innerHTML = listaSegundos.innerHTML + `<li>${segundo}</li>`;
}
//una vez creado evento onclick en el button del index.html:
//creamos funcion:
function eliminarSegundo() {
    listaSegundos.innerHTML = "";
    let segundoEliminado = prompt("Introduce el número del segundo que deseas eliminar");
    segundos.splice(segundoEliminado - 1, 1);
    segundos.forEach(segundo => {
        listaSegundos.innerHTML = `${listaSegundos.innerHTML} <li> ${segundo} </li>`;
    });
}
//POSTRES
let listaPostres = document.getElementById("listaPostres");
let postres = [];

function crearPostre() {
    let postre = prompt("introduce el nombre del postre que deseas crear");
    postres.push(postre);//se añade el postre introducido al array
    listaPostres.innerHTML = listaPostres.innerHTML + `<li>${postre}</li>`;
}
//una vez creado evento onclick en el button del index.html:
//creamos funcion:
function eliminarPostre() {
    listaPostres.innerHTML = "";
    let postreEliminado = prompt("Introduce el número del postre que deseas eliminar");
    postres.splice(postreEliminado - 1, 1);
    postres.forEach(postre => {
        listaPostres.innerHTML = `${listaPostres.innerHTML} <li> ${postre} </li>`;
    });
}