function mostrarInputs() {
   let numInputs = document.getElementById('numDatos').value;
   let campos='';
   for (i=1;i<=numInputs;i++) {
   		campos +=  'Indica el valor '+i+': <input type="text" name="dato'+i+'"><br>';
   		//campos = camnpos +  'Indica el valor '+i+': <input type="text" name="dato'+i+'"><br>';
   }
   document.getElementById('camposFormulario').innerHTML = campos+ '<input type="submit" value="Orden inverso">';
}