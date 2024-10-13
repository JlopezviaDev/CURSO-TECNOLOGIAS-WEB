// creamos la función mostrarInputs: 

function mostrarInputs() {
    let numInputs = document.getElementById('numDatos').value;//recogemos el valor del número de campos a crear
    let campos='';
     //con el siguiente FOR generaremos tantos campos de texto cómo "numImputs" se han solicitado y los guardaremos en la variable "campos". 
    for (i=1;i<=numInputs;i++) {
            campos +=  'Indica el valor '+i+': <input type="text" name="dato'+i+'"><br>';
    }
     //ahora incrustamos en el HTML los campos y el button submit:
    document.getElementById('camposFormulario').innerHTML = campos+ '<input type="submit" value="Orden inverso">';
 }