const numCorrecto = 14;

let resultadoUsuario = parseInt(prompt('Introduce la suma de 5 + 9'));

if (resultadoUsuario == numCorrecto){
    document.write('<h1>¡Enhorabuena, puedes acceder!');
}
else if (isNaN(resultadoUsuario)){
    alert('¡No has introducido ningun número...prueba otra vez!');
    window.location.reload();
}
else{
    alert('¡La suma no es correcta...prueba otra vez!');
    window.location.reload();
}