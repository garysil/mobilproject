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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>

$(document).ready(function() {
  $('.show-hide').hide();
  $('#1').show();
  $('.article').click(function() {
    $('.show-hide').hide();
    $(this).closest('.show-hide').hide().next('.show-hide').show();
    return false;
  });
});
function rightAnswers(){
var counter =0;

	
	var x =document.getElementById("true")
				if (x.checked==true)
				counter ++;
var x =document.getElementById("true1")
				if (x.checked==true)

								counter ++;


var x =document.getElementById("true3")
				if (x.checked==true)

								counter ++;

var x =document.getElementById("true4")
				if (x.checked==true)
				counter ++;
var x =document.getElementById("true5")
				if (x.checked==true)

								counter ++;

var x =document.getElementById("true6")
				if (x.checked==true)
				counter ++;
 
   var x =document.getElementById("true7")
				if (x.checked==true)

								counter ++;

var x =document.getElementById("true8")
				if (x.checked==true)
				counter ++;
var x =document.getElementById("true9")
				if (x.checked==true)

								counter ++;

var x =document.getElementById("true10")
				if (x.checked==true)

								counter ++;

var x =document.getElementById("true11")
				if (x.checked==true)

								counter ++;




var percentage =100*counter/11
alert("Spravnych odpovedi bolo "+counter + "  __percentualna uspesnost"+percentage);

}

</script>


<style>
.button {
   background-color: white;
    color: black;
    border: 2px solid #e7e7e7;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</head>

<body>
    <?php include('include/header.php'); ?>
    <main class="mainpart">
      


<br>
<a href="quizeasy.php" class="button">Easy</a><a href="quizhard.php" class="button">Hard</a>

    </main>
    <?php include('include/footer.php'); ?>
</body>

</html>
