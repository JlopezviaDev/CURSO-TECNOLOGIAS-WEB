const formulario = document.getElementById('formularioRegistro');
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; //aseguramos formato correo
const telefonoRegex = /^[0-9]{9}$/; //aseguramos 9 dígitos del 0 al 9

formulario.addEventListener('submit', function (e) {
    e.preventDefault(); //evitamos campo vacio
    const email = document.getElementById('email').value; //asignamos valor introducido
    if (!emailRegex.test(email)) {
        alert('Pon un email válido con @ y extensión'); //alert si no pasa expresión regular
    }
    const telefono = document.getElementById('telefono').value; //asignamos valor introducido
    if (!telefonoRegex.test(telefono)) {
        alert('Teléfono no es válido. Debe contener solo 9 dígitos.'); //alert si no pasa expresión regular
    }
    const fechaNacimiento = document.getElementById('fechaNacimiento').value; //asignamos valor introducido
    let fechaNacimientoDate = new Date(fechaNacimiento); //convertimos a formato date
    console.log(fechaNacimientoDate);
    let fechaActual = new Date(); // Obtenemos la fecha actual

    let edad = fechaActual.getFullYear() - fechaNacimientoDate.getFullYear(); // Calculamos edad restando


//...si la fecha de cumpleaños no ha ocurrido aún este año
    // primero: obtenemos los aprámetros por separado, mes y día de nacimiento
    let mesNacimiento = fechaNacimientoDate.getMonth();
    let diaNacimiento = fechaNacimientoDate.getDate();
    // Segundo: obtenemos los aprámetros por separado, mes y día de la fecha actual
    let mesActual = fechaActual.getMonth();
    let diaActual = fechaActual.getDate();
    // comprobamos si aún no ha llegado fecha cumpleaños del año en curso...y le restamos 1 a la edad calculada
    if (mesActual < mesNacimiento || (mesActual === mesNacimiento && diaActual < diaNacimiento)) {
        edad--;
    }

    if (edad < 18){
        alert("debes ser mayor de edad para entrar");
    }

})