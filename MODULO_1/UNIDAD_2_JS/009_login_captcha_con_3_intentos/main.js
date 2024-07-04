const numCorrecto = 14;
let intentos = 0;
while (intentos < 3) {

    let resultadoUsuario = parseInt(prompt('Introduce la suma de 5 + 9'));

    if (resultadoUsuario == numCorrecto) {
        document.write('<h1>¡Enhorabuena, puedes acceder!');
        break;
    }
    else if (isNaN(resultadoUsuario)) {
        alert('¡No has introducido ningun número...prueba otra vez!');
       
    }
    else {
        alert('¡La suma no es correcta...prueba otra vez!');
        
    }
    intentos++;
    if (intentos==3){
        alert('Vas a la policía por hacker');
        window.location.href="https://mossos.gencat.cat/ca/inici";
    }

    
}


