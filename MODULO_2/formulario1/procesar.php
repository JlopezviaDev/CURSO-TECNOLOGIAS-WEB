Hola 
<?php 
	echo $_POST['nombre']; 	
?>

<?php 
	echo $_POST['apellido']; 	
?>
.
<br>
Usted tiene 
<?php 
	echo $_POST['edad']; 
?> 
años.
<br>
Tu color preferido es:
<?php
	echo $_POST['color'];
?>
<div style="width:30px; height:30px; background-color:
			<?php echo $_POST['color']; ?>"></div>


<pre>
<?php
	print_r($_POST);
?>
</pre>