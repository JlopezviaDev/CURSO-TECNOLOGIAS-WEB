const inputName = document.getElementById('inputName');
const addBtn = document.getElementById('addBtn');
const nameList = document.getElementById('nameList');
const randomBtn = document.getElementById('randomBtn');

let names = []; //creamos el array vacio

function addName() {
  const name = inputName.value.trim();
  console.log(name)
  if (name !== '') {
    names.push(name); //añadimos nombre al array
    inputName.value = ''; //vaciamos campo
    const listItem = document.createElement('li');//creamos elemento de la lista
    listItem.textContent = name; //le damos como texto el nombre introducido
    listItem.id = name; //le damos al elemento de la lista un id con su nombre
    nameList.appendChild(listItem);//por último, lo añadimos a la lista con el appendchild
  }
}
function selectRandomName() {
  if (names.length > 0) { //siempre que haya por lo menos un elemento en el array
    const randomIndex = Math.floor(Math.random() * names.length);
    /*Math-floor redondea hacia abajo y Math.random crea aleatoriamente un número
    tal que 0<n<1 */
    const selectedName = names[randomIndex]; //seleccionamos un nombre de la lista
    const selectedListItem = document.getElementById(selectedName); //ubicamos el nombre en la lista
    selectedListItem.style.backgroundColor = "yellow"; //le cambiamos el color de fondo
    selectedListItem.textContent += ` - Felicidades ${selectedName}!!!!`; //le añadimos mensaje al ganador
  } else {
    alert('¡No hay nombres en la lista!');
  }
}

addBtn.addEventListener('click', addName);
randomBtn.addEventListener('click', selectRandomName);
