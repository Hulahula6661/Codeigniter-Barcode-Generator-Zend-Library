<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Barcode Generator Using Zend Library</h1>
	<form action="<?php echo site_url('Zend_Barcode_Example/set_barcode') ?>" method="POST">
		<input type="text" name="code">
		<button type="submit">Generate</button>
	</form>

</body>
</html>