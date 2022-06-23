<html>
<head>
	<title> Download file using php</title>
</head>
<body>
	<h2>Download file from HERE:</h2>
	<a href="move_upload.php?file=image.jpg">click HERE</a>
</body>
</html>
<?php
if(!empty($_GET['file']))
{
	$filename=basename($_GET['file']);
	$filepath='param/'.$filename;
	if(!empty($filename)&& file_exists($filepath))
	{
		header("cashe-control: public");
		header("content-discription: file transfer");
		header("content-disposition: attachment; filename=$filename");
		header("content-type: application/zip");
		header("content-transfer-encoding: binary");
		readfile($filepath);
		exit;
	}
	else
	{
		echo"this file doesn't exist";
	}
}
?>