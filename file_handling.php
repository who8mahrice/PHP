<!--
File Handing:
-->

<?PHP

//Uploading Files
echo 'Uploading Files:'.'<br>';
echo '<br>';
echo <<<__end
<html><head><title>Beast Ass PHP File Handing</title></head><body>
<form method='post' action='file_handling.php' enctype='multipart/form-data'>
Select File: <input type='file' name='filename' size='10'>
<input type='submit' value='Upload'>
</form>
__end;

$fileResults = " ";
$target_dir = "uploads/"; //dir to be uploaded in
$target_file = $_FILES['filename']['name']; //file name.
$full_dir = $target_dir.$target_file; //full dir of file name.
$uploadOk = 0; //boolean, if upload = 0 (false), dont upload. 1 other wise.

if (file_exists($full_dir))
	{

		echo 'Sorry, file already exists';
		echo '<br>';
		$uploadOk=0;
	}

else
	{
		
		move_uploaded_file($_FILES['filename']['tmp_name'], $full_dir); 
		//bool move_uploaded_file ( string $filename , string $destination )
		
		$fileResults = 
		"Uploaded: ".$_FILES['filename']['name'].'<br>'.
		"Type: ".$_FILES['filename']['type'].'<br>'.
		"Temp file: ". $_FILES['filename']['tmp_name'].'<br>'.
		"Directory: ".$full_dir;
		
		echo $fileResults;
		
	}

echo "</body></html>";

?>