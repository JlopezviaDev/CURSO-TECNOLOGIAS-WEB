<?php
	
	require_once(__DIR__.'/../modelos/perfilClass.php');
	require_once(__DIR__.'/../modelos/perfilesArchivadosClass.php');
?>
<pre>
print_r($_POST);
</pre>
<?php
	//Subimos el archivo
	if (isset($_POST['botonSubmit']) && $_POST['botonSubmit'] == 'Enviar')
	{
  		if (isset($_FILES['fichero1']) && $_FILES['fichero1']['error'] === UPLOAD_ERR_OK)
  		{
    		// cogemos los detalles del archivo subido
    		$fileTmpPath = $_FILES['fichero1']['tmp_name'];
    		$fileName = $_FILES['fichero1']['name'];
    		$fileSize = $_FILES['fichero1']['size'];
    		$fileType = $_FILES['fichero1']['type'];
 
    		$fileNameCmps = explode(".", $fileName);  // ['Captura de Pantalla 2024-08-05 a las 19','55','44','png']
    		$fileExtension = strtolower(end($fileNameCmps)); // 'png'

    		// sanitize file-name
    		$newFileName = md5(time() . $fileName) . '.' . $fileExtension; //creamos un nombre único para nuestro archivo.

    		// check if file has one of the following extensions
    		$allowedfileExtensions = array('jpg', 'gif', 'png','webp');

    		if (in_array($fileExtension, $allowedfileExtensions)) //Comprobamos si la extensión del archivo esta permitida.
    		{
      			// directory in which the uploaded file will be moved, la carperta tiene que estar creada previamente.
      			$uploadFileDir = __DIR__.'/../datos/uploaded_files/';
      			$dest_path = $uploadFileDir . $newFileName;

      			if(move_uploaded_file($fileTmpPath, $dest_path)) 
      			{
					$imagen = new Imagick($dest_path);
					//$imagen->cropThumbnailImage(200,200);
					$imagen->resizeImage(200,200,Imagick::FILTER_UNDEFINED, 1);
					$imagen->writeImage(__DIR__.'/../datos/imgperfiles/'.$newFileName);  					
      			}
      			else 
      			{
        			echo 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
      			}
    		}
    		else
    		{
      				echo 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
    		}
  		}
  		else
  		{
    		echo 'There is some error in the file upload. Please check the following error.<br>';
    		echo 'Error:' . $_FILES['fichero1']['error'];
  		}
	} else {
		echo 'No viene del formulario correcto';
	}

//Generamos el array para guardar los datos en el archivo JSON
$perfil = new Perfil($_POST['nombre'], $_POST['ape1'], $_POST['year'],$_POST['orientacion'],$_POST['genero'], $newFileName, $_POST['aficiones']);
//recuperar los perfiles
$perfilesObj = new perfilesArchivados();
//$expedientes = $expedientesObj->getExpedientes;

//Añadimos el expediente nuevo a los expedientes.
$perfilesObj->anadirPerfil($perfil);
header('Location: ../index.php');
