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

	
	var x =document.getElementById("true1")
				if (x.checked==true)
				counter ++;
var x =document.getElementById("true2")
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




var percentage =Math.round(100*counter/10);


document.getElementById("results").innerHTML = "Right answers: "+counter+ "</br>Success in percentages: "+percentage+"%";
}

</script>
</head>

<body>
    <?php include('include/header.php'); ?>
    <main class="mainpart">
      
        
<div name="1" id="1" class="show-hide">
 
  <p>1.Question</p>
   <p>The first mention of Ko&#353;ice is from the year?</p>
   <div class="radioChoice"><input type="radio" name="otazka1" value="1"id="true1"> 1230<br></div>
  <div class="radioChoice"><input type="radio" name="otazka1" value="2"> 1150<br></div>
  <div class="radioChoice"><input type="radio" name="otazka1" value="3"> 1245<br></div>
   <div class="radioChoice"><input type="radio" name="otazka1" value="4"> 1267</div>
   <br><a href="#" class="article">Next question</a>
   
</div>
 
</div>

<div name="2" id="2" style="display: none;" class="show-hide">
  <p>2.Question</p><p>What was first name of Ko&#353;ice?</p>
  <div class="radioChoice"><input type="radio" name="otazka2" value="5"> Cassovia<br></div>
  <div class="radioChoice"><input type="radio" name="otazka2" value="6"> Kassa<br></div>
  <div class="radioChoice"><input type="radio" name="otazka2" value="7"id="true2"> Vila Kassa <br> </div>
   <div class="radioChoice"><input type="radio" name="otazka2" value="8"> Cassow</div>
 <br><a href="#" class="article">Next question</a>
 
</div>

<div name="3" id="3" style="display: none;" class="show-hide">
 <p>3.Question</p><p>When was the first cinema opened in Ko&#353;ice?</p>
 <div class="radioChoice"><input type="radio" name="otazka3" value="9"id="true3"> 1909<br></div>
  <div class="radioChoice"><input type="radio" name="otazka3" value="10"> 1896<br></div>
  <div class="radioChoice"><input type="radio" name="otazka3" value="11"> 1921<br></div>
   <div class="radioChoice"><input type="radio" name="otazka3" value="12"> 1936</div>
  
  <br><a href="#" class="article">Next question</a>
</div>

<div name="4" id="4" style="display: none;" class="show-hide">
  <p>4.Question</p><p>In what discrict of Ko&#353;ice is located Sidlisko KVP? </p>
  <div class="radioChoice"><input type="radio" name="otazka4" value="13"> Kosice I<br></div>
  <div class="radioChoice"><input type="radio" name="otazka4" value="14"id="true4"> Kosice II<br></div>
  <div class="radioChoice"><input type="radio" name="otazka4" value="15"> Kosice III<br></div>
   <div class="radioChoice"><input type="radio" name="otazka4" value="16"> Kosice IV</div>
  <br><a href="#" class="article">Next question</a>
</div>

<div name="5" id="5" style="display: none;" class="show-hide">
  
  <p>5.Question</p><p>How much area Ko&#353;ice covers?</p>
  <div class="radioChoice"><input type="radio" name="otazka5" value="17" id="true5"> 243 square kilometres<br></div>
  <div class="radioChoice"><input type="radio" name="otazka5" value="18"> 550 square kilometres<br></div>
  <div class="radioChoice"><input type="radio" name="otazka5" value="19"> 154 square kilometres<br> </div>
   <div class="radioChoice"><input type="radio" name="otazka5" value="20"> 122 square kilometres</div>
  <br><a href="#" class="article">Next question</a>
</div>

<div name="6" id="6" style="display: none;" class="show-hide">
  
  <p>6.Question</p><p>What theater cannot be found in Ko&#353;ice? </p>
  <div class="radioChoice"><input type="radio" name="otazka6" value="21" > V kufri<br></div>
  <div class="radioChoice"><input type="radio" name="otazka6" value="22"> Maskrta<br></div>
  <div class="radioChoice"><input type="radio" name="otazka6" value="23"id="true6"> Na podiu<br> </div>
   <div class="radioChoice"><input type="radio" name="otazka6" value="24"> Na perone</div>
  <br><a href="#" class="article">Next question</a>
</div>

<div name="7" id="7" style="display: none;" class="show-hide">
<p>7.Question</p><p>What is the oldest folk ensemble from Ko&#353;ice? </p>
  <div class="radioChoice"><input type="radio" name="otazka7" value="25"id="true7" > Carnica<br></div>
  <div class="radioChoice"><input type="radio" name="otazka7" value="26"> Zeleziar<br></div>
  <div class="radioChoice"><input type="radio" name="otazka7" value="27"> Borievka<br> </div>
   <div class="radioChoice"><input type="radio" name="otazka7" value="28"> Jahodna</div>
<br><a href="#" class="article">Next question</a>
</div>

<div name="8" id="8" style="display: none;" class="show-hide">
  
  <p>8.Question</p><p>In what year was Ko&#353;ice bombarded?</p>
  <div class="radioChoice"><input type="radio" name="otazka8" value="29" > 1930<br></div>
  <div class="radioChoice"><input type="radio" name="otazka8" value="30"id="true8"> 1941<br></div>
  <div class="radioChoice"><input type="radio" name="otazka8" value="31"> 1920<br></div>
   <div class="radioChoice"><input type="radio" name="otazka8" value="32"> 1935</div>
 <br><a href="#" class="article">Next question</a>
</div>


<div name="9" id="9" style="display: none;" class="show-hide">
  
  <p>9.Question</p><p>What is the name of the shopping center nearest to the St. Elisabeth Cathedral?</p>
  <div class="radioChoice"><input type="radio" name="otazka9" value="33" > Carrefour<br></div>
  <div class="radioChoice"><input type="radio" name="otazka9" value="34"> Optima<br></div>
  <div class="radioChoice"><input type="radio" name="otazka9" value="35"id="true9"> Aupark<br></div>
   <div class="radioChoice"><input type="radio" name="otazka9" value="36"> Galeria</div>
<br><a href="#" class="article">Next question</a>
</div>


<div name="10" id="10" style="display: none;" class="show-hide">
  
  <p>10.Question</p><p>What company does not have office in Ko&#353;ice?</p>
  <div class="radioChoice"><input type="radio" name="otazka10" value="37" > AT&#38;T<br></div>
  <div class="radioChoice"><input type="radio" name="otazka10" value="38"id="true10"> Microsoft<br></div>
  <div class="radioChoice"><input type="radio" name="otazka10" value="39"> Global Logic<br></div>
   <div class="radioChoice"><input type="radio" name="otazka10" value="40"> IBM</div>
  <br><button id="closeQuiz" onclick="rightAnswers()">Click to show results</button> 
  <br>
   <p id="results">
</div>


    </main>
    <?php include('include/footer.php'); ?>
</body>

</html>
