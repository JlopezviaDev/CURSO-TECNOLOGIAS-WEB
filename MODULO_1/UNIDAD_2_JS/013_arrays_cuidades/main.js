const lista = document.getElementById("lista");

let ciudades = [];//creamos array vacio
//creamos bucle para que usuario introduzca las 4 ciudades
for (i = 1; i < 5; i++){
    let ciudad = prompt("introduce el nombre de la ciudad" + i);
    //para asegurarnos que usuario introduzca nombre ciudad:
    if (!ciudad){
        i--;
        continue;}
    ciudades.push(ciudad);//se añade la ciudad introducida al array
    lista.innerHTML = lista.innerHTML + `<li>${ciudad}</li>`;//se va creando la lista
}
//una vez creado evento onclick en el button del index.html:
//creamos funcion:
function eliminar(){
    lista.innerHTML = "";//esto vacia la lista
    let ciudadEliminada = prompt("Introduce el número de la ciudad que deseas eliminar");
    if (ciudadEliminada < 1 || ciudadEliminada >= ciudades.length || isNaN(ciudadEliminada)){
        alert("Debes introducir un número entre el 1 y el " + ciudades.length);
        return eliminar();
    }
    ciudades.splice(ciudadEliminada - 1, 1);//esto elimina ciudad escogida segun posicion y cantidad a eliminar
    /* opción con "for":
    for(i=0; i<ciudades.length; i++){
        lista.innerHTML = `${lista.innerHTML} <li> ${ciudades[i]} </li>`;
    }*/
   //opción con "forEach":
    ciudades.forEach(ciudad => {
        lista.innerHTML = `${lista.innerHTML} <li> ${ciudad} </li>`;        
    });
}