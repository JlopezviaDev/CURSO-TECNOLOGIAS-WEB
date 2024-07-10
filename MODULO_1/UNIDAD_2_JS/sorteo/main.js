const inputName = document.getElementById('inputName');
const addBtn = document.getElementById('addBtn');
const nameList = document.getElementById('nameList');
const randomBtn = document.getElementById('randomBtn');

let names = [];

function addName() {
  const name = inputName.value.trim();
  console.log(name)
  if (name !== '') {
    names.push(name);
    inputName.value = '';
    const listItem = document.createElement('li');
    listItem.textContent = name;
    listItem.id = name;
    nameList.appendChild(listItem);
  }
}
function selectRandomName() {
  if (names.length > 0) {
    const randomIndex = Math.floor(Math.random() * names.length);
    const selectedName = names[randomIndex];
    const selectedListItem = document.getElementById(selectedName);
    selectedListItem.style.backgroundColor = "yellow"
    selectedListItem.textContent += ` - Ganador: ${selectedName}`;
  } else {
    alert('¡No hay nombres en la lista!');
  }
}

addBtn.addEventListener('click', addName);
randomBtn.addEventListener('click', selectRandomName);
console.log(Math.floor(Math.random()*3));