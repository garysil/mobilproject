<?php
?>

<!doctype html>
<html>

<head>
    <meta charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kosice</title>
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>
    <?php include('include/header.php'); ?>
    <main class="mainpart">
        <img id="kosicemap" src="img/kosice map/kosice map template.png" width="1280px" usemap="#kosice">
		<map name="kosice">
		  <area shape="circle" coords="10,10,3" href="mercur.htm" alt="Mercury">
		</map>
	</main>
    <?php include('include/footer.php'); ?>
</body>

</html>
