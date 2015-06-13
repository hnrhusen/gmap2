<html> 
<head>
<title>Linux | Admin Dashboard Template</title>
</head>
<body>

<form method="post" action="<?php echo base_url() ?>buildings/importcsv" enctype="multipart/form-data">
    <input type="file" name="userfile" ><br><br>
    <input type="submit" name="submit" value="UPLOAD" class="btn btn-primary">
</form>
<?php 
if (isset($error)): ?>
    <div class="alert alert-error"><?php echo $error; ?></div>
<?php endif; ?>
<?php
if (isset($csv)){
	print_r(array_values($csv));
	/*foreach ($csv as $key) {
		# code...
		echo $key[0];
	}*/
}
?>
</body>
</html>