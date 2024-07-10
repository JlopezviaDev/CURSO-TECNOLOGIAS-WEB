//ENTRANTES
    let listaEntrantes = document.getElementById("listaEntrantes");
    let entrantes = [];
    
    function crearEntrante() {
    let entrante = prompt("introduce el nombre del entrante que deseas crear");
    //para asegurarnos que usuario introduzca nombre entrante:
    /*if (!entrante) {
        i--;
        continue;
    }*/
    entrantes.push(entrante);//se añade el entrante introducido al array
    listaEntrantes.innerHTML = listaEntrantes.innerHTML + `<li>${entrante}</li>`;
}
//una vez creado evento onclick en el button del index.html:
//creamos funcion:
function eliminarEntrante() {
    listaEntrantes.innerHTML = "";
    let entranteEliminado = prompt("Introduce el número del entrante que deseas eliminar");
    /*if (entranteEliminado < 1 || entranteEliminado >= entrantes.length || isNaN(entranteEliminado)) {
        alert("Debes introducir un número entre el 1 y el " + entrantes.length);
        return eliminar();
    }*/
    entrantes.splice(entranteEliminado - 1, 1);
    entrantes.forEach(entrante => {
        listaEntrantes.innerHTML = `${listaEntrantes.innerHTML} <li> ${entrante} </li>`;
    });
}