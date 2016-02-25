<?php
?>

<!doctype html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=windows-1250"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kosice</title>
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/zoomstyle.css">
</head>

<body>

    <?php include('include/header.php'); ?>
    <main class="mainpart">
	<div class="galleryCol">
            <div class="imgContainer"><a class="image-popup-vertical-fit" href="img/buildings/1/1.jpg"><img class="galleryPics" src="img/buildings/1/1.jpg" alt="St. Elisabeth Cathedral"></a></div>
            <div class="imgContainer"><a class="image-popup-vertical-fit" href="img/buildings/2/1.jpg"><img class="galleryPics" src="img/buildings/2/1.jpg" alt="St. Elisabeth Cathedral"></a></div>
            <div class="imgContainer"><a class="image-popup-vertical-fit" href="img/buildings/3/1.jpg"><img class="galleryPics" src="img/buildings/3/1.jpg" alt="St. Elisabeth Cathedral"></a></div>
            <div class="imgContainer"><a class="image-popup-vertical-fit" href="img/buildings/4/1.jpg"><img class="galleryPics" src="img/buildings/4/1.jpg" alt="St. Elisabeth Cathedral"></a></div>
            <div class="imgContainer"><a class="image-popup-vertical-fit" href="img/buildings/5/1.jpg"><img class="galleryPics" src="img/buildings/5/1.jpg" alt="St. Elisabeth Cathedral"></a></div>
            <div class="imgContainer"><a class="image-popup-vertical-fit" href="img/buildings/6/1.jpg"><img class="galleryPics" src="img/buildings/6/1.jpg" alt="St. Elisabeth Cathedral"></a></div>
            <div class="imgContainer"><a class="image-popup-vertical-fit" href="img/buildings/7/1.jpg"><img class="galleryPics" src="img/buildings/7/1.jpg" alt="St. Elisabeth Cathedral"></a></div>
            <div class="imgContainer"><a class="image-popup-vertical-fit" href="img/buildings/8/1.jpg"><img class="galleryPics" src="img/buildings/8/1.jpg" alt="St. Elisabeth Cathedral"></a></div>
            <div class="imgContainer"><a class="image-popup-vertical-fit" href="img/buildings/9/1.jpg"><img class="galleryPics" src="img/buildings/9/1.jpg" alt="St. Elisabeth Cathedral"></a></div>
            <div class="imgContainer"><a class="image-popup-vertical-fit" href="img/buildings/10/1.jpg"><img class="galleryPics" src="img/buildings/10/1.jpg" alt="St. Elisabeth Cathedral"></a></div>
            <div class="imgContainer"><a class="image-popup-vertical-fit" href="img/buildings/11/1.jpg"><img class="galleryPics" src="img/buildings/11/1.jpg" alt="St. Elisabeth Cathedral"></a></div>
            <div class="imgContainer"><a class="image-popup-vertical-fit" href="img/buildings/12/1.jpg"><img class="galleryPics" src="img/buildings/12/1.jpg" alt="St. Elisabeth Cathedral"></a></div>
            <div class="imgContainer"><a class="image-popup-vertical-fit" href="img/buildings/13/1.jpg"><img class="galleryPics" src="img/buildings/13/1.jpg" alt="St. Elisabeth Cathedral"></a></div>
            <div class="imgContainer"><a class="image-popup-vertical-fit" href="img/buildings/14/1.jpg"><img class="galleryPics" src="img/buildings/14/1.jpg" alt="St. Elisabeth Cathedral"></a></div>
            <div class="imgContainer"><a class="image-popup-vertical-fit" href="img/buildings/15/1.jpg"><img class="galleryPics" src="img/buildings/15/1.jpg" alt="St. Elisabeth Cathedral"></a></div>
        </div>    
        
    </main>
    
    <?php include('include/footer.php'); ?>
    <script src="js/jquery-1.12.1.min.js"></script>
    <script src="js/zoombox.js"></script>
    <script>
        $('.image-popup-vertical-fit').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		mainClass: 'mfp-img-mobile',
		image: {
			verticalFit: true
		}
		
	});
    </script>
</body>

</html>
	