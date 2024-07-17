//Sección ENTRANTES:
// Elementos del DOM
const crearEntrantesBtn = document.getElementById('crearEntrantesBtn');
const eliminarEntrantesBtn = document.getElementById('eliminarEntrantesBtn');
const seleccionarEntrantesBtn = document.getElementById('seleccionarEntrantesBtn');
const entrantesList = document.getElementById('entrantesList');
//funciones
function crearEntrante(entrante){
  entrantesList.innerHTML += "<li>" + entrante + "</li>";
}
function eliminarEntrante(entrante){
  entrantesList.children[entrante - 1].remove();
}
function seleccionarEntrante(entrante){
  let entranteSeleccionado = entrantesList.children[entrante - 1].innerText;
  document.getElementById('entrante').innerText = entranteSeleccionado;
}
//Botones
crearEntrantesBtn.addEventListener('click', function(){
  let entrante = prompt("Introduce el nombre del Entrante que deseas crear:");
  crearEntrante(entrante);
})
eliminarEntrantesBtn.addEventListener('click', function(){
  let entrante = prompt("Introduce el número del Entrante que deseas eliminar:");
  eliminarEntrante(entrante);
})
seleccionarEntrantesBtn.addEventListener('click', function(){
  let entrante = prompt("Introduce el número del Entrante que deseas seleccionar para tu menú:");
  seleccionarEntrante(entrante);
})

//Sección PRINCIPALES:
// Elementos del DOM
const crearPrincipalesBtn = document.getElementById('crearPrincipalesBtn');
const eliminarPrincipalesBtn = document.getElementById('eliminarPrincipalesBtn');
const seleccionarPrincipalesBtn = document.getElementById('seleccionarPrincipalesBtn');
const principalesList = document.getElementById('principalesList');
//funciones
function crearPrincipal(principal){
  principalesList.innerHTML += "<li>" + principal + "</li>";
}
function eliminarPrincipal(principal){
  principalesList.children[principal - 1].remove();
}
function seleccionarPrincipal(principal){
  let principalSeleccionado = principalesList.children[principal - 1].innerText;
  document.getElementById('principal').innerText = principalSeleccionado;
}
//Botones
crearPrincipalesBtn.addEventListener('click', function(){
  let principal = prompt("Introduce el nombre del Principal que deseas crear:");
  crearPrincipal(principal);
})
eliminarPrincipalesBtn.addEventListener('click', function(){
  let principal = prompt("Introduce el número del Principal que deseas eliminar:");
  eliminarPrincipal(principal);
})
seleccionarPrincipalesBtn.addEventListener('click', function(){
  let principal = prompt("Introduce el número del Principal que deseas seleccionar para tu menú:");
  seleccionarPrincipal(principal);
})

//Sección POSTRES:
// Elementos del DOM
const crearPostresBtn = document.getElementById('crearPostresBtn');
const eliminarPostresBtn = document.getElementById('eliminarPostresBtn');
const seleccionarPostresBtn = document.getElementById('seleccionarPostresBtn');
const postresList = document.getElementById('postresList');
//funciones
function crearPostre(postre){
  postresList.innerHTML += "<li>" + postre + "</li>";
}
function eliminarPostre(postre){
  postresList.children[postre - 1].remove();
}
function seleccionarPostre(postre){
  let postreSeleccionado = postresList.children[postre - 1].innerText;
  document.getElementById('postre').innerText = postreSeleccionado;
}
//Botones
crearPostresBtn.addEventListener('click', function(){
  let postre = prompt("Introduce el nombre del Postre que deseas crear:");
  crearPostre(postre);
})
eliminarPostresBtn.addEventListener('click', function(){
  let postre = prompt("Introduce el número del Postre que deseas eliminar:");
  eliminarPostre(postre);
})
seleccionarPostresBtn.addEventListener('click', function(){
  let postre = prompt("Introduce el número del Postre que deseas seleccionar para tu menú:");
  seleccionarPostre(postre);
})

//Sección tramitar pedido:
const tramitarPedido = document.getElementById('tramitarBoton');
const listaPedido = document.getElementById('pedidoList');

tramitarPedido.addEventListener('click', function(){
  alert(`¡¡Tu pedido está en marcha!!`)
})