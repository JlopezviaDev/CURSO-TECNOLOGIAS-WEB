<pre>
<?php
print_r($_POST);
print_r($_FILES);
?>

<?php
$message = ''; 
if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Enviar datos')
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
    $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc');

    if (in_array($fileExtension, $allowedfileExtensions)) //Comprobamos si la extensión del archivo esta permitida.
    {
      // directory in which the uploaded file will be moved, la carperta tiene que estar creada previamente.
      $uploadFileDir = './uploaded_files/';
      $dest_path = $uploadFileDir . $newFileName;

      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        echo 'File is successfully uploaded.';
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
