Hola 
<?php 
	echo $_GET['nombre']; 	
?>

<?php 
	echo $_GET['apellido']; 	
?>
.
<br>
Usted tiene 
<?php 
	echo $_GET['edad']; 
?> 
años.
<br>
Tu color preferido es:
<?php
	echo $_GET['color'];
?>
<div style="width:30px; height:30px; background-color:
			<?php echo $_GET['color']; ?>"></div>


<pre>
<?php
	print_r($_GET);
?>
</pre>