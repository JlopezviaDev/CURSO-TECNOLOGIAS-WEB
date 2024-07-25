<?php
   print_r($_POST);
   $numMes =$_POST['numMes'];
?>
<br>
<br>
<br>
<?php   
   if (($numMes > 0) and ($numMes <= 12)) { 
   switch ($numMes) {
	   case 1: 
		   $nombreMes = "Enero";
		   break;
	   case 2: 
		   $nombreMes = "Febrero";
		   break;
	   case 3:
		  $nombreMes = "Marzo";
		   break;
	   case 4:
		   $nombreMes = "Abril";
		   break;
	   case 5:
		   $nombreMes = "Mayo";
		   break;
	   case 6:
		   $nombreMes = "Junio";
		   break;
	   case 7:
		   $nombreMes = "Julio";
		   break;
	   case 8:
		   $nombreMes = "Agosto";
		   break;
	   case 9:
		   $nombreMes = "Septiembre";
		   break;	 
	   case 10:
		   $nombreMes = "Octubre";
		   break;
	   case 11:
		   $nombreMes = "Noviembre";
		   break;
		   
	   default:
		    $nombreMes = "Diciembre";
   }
	echo 'El número de mes '.$numMes.' corresponde al mes de '.$nombreMes;
   } else {
     echo 'Debes introducir un número de mes entre el 1 y el 12';
   }
?>
<br>
<br>
<a href="actividad4_b.html">Volver a introducir un número de mes</a>