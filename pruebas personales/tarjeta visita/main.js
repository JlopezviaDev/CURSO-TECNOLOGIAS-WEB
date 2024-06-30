let edadUsuario = parseInt(prompt('Introduce tu edad en números'));

if (edadUsuario > 17){
    document.write('<h1>Escoge una franja horaria:');
}
else if (isNaN(edadUsuario)){
    alert('¡No has introducido ningun número...prueba otra vez!');
    window.location.reload();
}
else{
    alert('¡Eres menor...no puedes acceder!');
    window.location.reload();
}