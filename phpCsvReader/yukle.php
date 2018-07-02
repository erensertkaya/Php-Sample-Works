<?php 
if ($_POST['submit'] && $_FILES['file'] && $_FILES['file']['type']=="application/vnd.ms-excel") {
	print_r($_FILES['file']);
    $tmp_path=$_FILES['file']['tmp_name'];
    $upload_path='/upload';
    $name=$_FILES['file']['name'];
    $randnum=rand();
	$upload=move_uploaded_file($tmp_path, __DIR__."/upload/$randnum{$_FILES['file']['name']}");
	if ($upload) {
		header("Location:liste.php");
	}
}
	else
	{
		echo "basarisiz";
	}



 ?>