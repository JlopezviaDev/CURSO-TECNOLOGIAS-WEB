<?php
require_once __DIR__.'/../modelos/barcosArchivadosClass.php';
require_once __DIR__.'/../modelos/barcoClass.php';

//Vamos a subir el archivo
	if (isset($_POST['botonSubmit']) && $_POST['botonSubmit'] == 'Enviar')
	{
  		if (isset($_FILES['fichero1']) && $_FILES['fichero1']['error'] === UPLOAD_ERR_OK)
  		{
    		// get details of the uploaded file
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
					$imagen->writeImage(__DIR__.'/../datos/imgpeques/'.$newFileName);  					
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


$barco = new Barco($_POST['astillero'],$_POST['modelo'],$_POST['descripcion'],$_POST['Puerto'],$newFileName);
$barcosObj = new barcosArchivados();
$barcosObj->anadirBarco($barco);
header('Location: ../index.php');