let meses = [
    "Enero",
    "Febrero",
    "Marzo",
    "Abril",
    "Mayo",
    "Junio",
    "Julio",
    "Agosto",
    "Septiembre",
    "Octubre",
    "Noviembre",
    "Diciembre"
];

let mesNacimiento = parseInt(prompt("Introduce tu mes de nacimiento"));

if (isNaN(mesNacimiento) || mesNacimiento <= 0 || mesNacimiento > 12){
    alert("debes introducir un número del 1 al 12");
    location.reload();
}

document.write("<h2>Has nacido en " + meses[mesNacimiento - 1]);