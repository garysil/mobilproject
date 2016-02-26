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
   <p>What is the name of the famous Ko&#353;ice marathon?</p>
   <div class="radioChoice"><input type="radio" name="otazka1" value="1"> Marathon of Life<br></div>
    <div class="radioChoice"><input type="radio" name="otazka1" value="2"> Ko&#353;ice Running<br></div>
    <div class="radioChoice"><input type="radio" name="otazka1" value="3"> Ko&#353;ice Health Marathon<br> </div>
    <div class="radioChoice"><input type="radio" name="otazka1" value="4"id="true1"> Ko&#353;ice Peace Marathon</div>
   <br><a href="#" class="article">Next question</a>
   
</div>
 


<div name="2" id="2" style="display: none;" class="show-hide">
   <p>2.Question</p><p>How many people live in Ko&#353;ice?</p>
    <div class="radioChoice"><input type="radio" name="otazka2" value="5"> 250 000<br></div>
    <div class="radioChoice"><input type="radio" name="otazka2" value="6" id="true2"> 355 000<br></div>
    <div class="radioChoice"><input type="radio" name="otazka2" value="7"> 423 000 <br> </div>
    <div class="radioChoice"><input type="radio" name="otazka2" value="8"> 325 500</div>
   <br><a href="#" class="article">Next question</a>
 
</div>

<div name="3" id="3" style="display: none;" class="show-hide">
   <p>3.Question</p><p>In what year was Ko&#353;ice a European central city of culture?</p>
    <div class="radioChoice"><input type="radio" name="otazka3" value="9"> 2010<br></div>
    <div class="radioChoice"><input type="radio" name="otazka3" value="10"> 2015<br></div>
    <div class="radioChoice"><input type="radio" name="otazka3" value="11"> 2007<br> </div>
    <div class="radioChoice"><input type="radio" name="otazka3" value="12"id="true3"> 2013</div>
   <br><a href="#" class="article">Next question</a>
</div>

<div name="4" id="4" style="display: none;" class="show-hide">
   <p>4.Question</p><p>What river flows near the city?</p>
    <div class="radioChoice"><input type="radio" name="otazka4" value="13"> Dunaj<br></div>
    <div class="radioChoice"><input type="radio" name="otazka4" value="14"> Vltava<br></div>
    <div class="radioChoice"><input type="radio" name="otazka4" value="15"> Hron<br> </div>
    <div class="radioChoice"><input type="radio" name="otazka4" value="16"id="true4"> Hornad</div>
   <br><a href="#" class="article">Next question</a>
</div>

<div name="5" id="5" style="display: none;" class="show-hide">
  
   <p>5.Question</p><p>What is the name of our hockey stadium?</p>
    <div class="radioChoice"><input type="radio" name="otazka5" value="17" id="true5"> Steel Arena<br></div>
    <div class="radioChoice"><input type="radio" name="otazka5" value="18"> Iron Arena<br></div>
    <div class="radioChoice"><input type="radio" name="otazka5" value="19"> Sport Arena<br> </div>
    <div class="radioChoice"><input type="radio" name="otazka5" value="20"> Ice Arena</div>
   <br><a href="#" class="article">Next question</a>
</div>

<div name="6" id="6" style="display: none;" class="show-hide">
  
   <p>6.Question</p><p>In what part of Slovakia is Ko&#353;ice?</p>
    <div class="radioChoice"><input type="radio" name="otazka6" value="21" > North East<br></div>
    <div class="radioChoice"><input type="radio" name="otazka6" value="22"> North West<br></div>
    <div class="radioChoice"><input type="radio" name="otazka6" value="23"id="true6"> South East<br> </div>
    <div class="radioChoice"><input type="radio" name="otazka6" value="24"> South West</div>
   <br><a href="#" class="article">Next question</a>
</div>

<div name="7" id="7" style="display: none;" class="show-hide">
<p>7.Question</p><p>Which of the options cannot be found in Ko&#353;ice?</p>
    <div class="radioChoice"><input type="radio" name="otazka7" value="25" > Zoo<br></div>
    <div class="radioChoice"><input type="radio" name="otazka7" value="26"> Museum<br></div>
    <div class="radioChoice"><input type="radio" name="otazka7" value="27"> Airport<br> </div>
    <div class="radioChoice"><input type="radio" name="otazka7" value="28"id="true7"> Aquapark</div>
   <br><a href="#" class="article">Next question</a>
</div>

<div name="8" id="8" style="display: none;" class="show-hide">
  
   <p>8.Question</p><p>Which company is the biggest employer in the region?</p>
    <div class="radioChoice"><input type="radio" name="otazka8" value="29" > Slovnaft<br></div>
    <div class="radioChoice"><input type="radio" name="otazka8" value="30"id="true8"> U.S. Steel<br></div>
    <div class="radioChoice"><input type="radio" name="otazka8" value="31"> Sedita<br> </div>
    <div class="radioChoice"><input type="radio" name="otazka8" value="32"> SPP</div>
   <br><a href="#" class="article">Next question</a>
</div>


<div name="9" id="9" style="display: none;" class="show-hide">
  
   <p>9.Question</p><p>What is the currency used in Ko&#353;ice?</p>
    <div class="radioChoice"><input type="radio" name="otazka9" value="33" > dollar<br></div>
    <div class="radioChoice"><input type="radio" name="otazka9" value="34"id="true9"> euro<br></div>
    <div class="radioChoice"><input type="radio" name="otazka9" value="35"> rubel<br> </div>
    <div class="radioChoice"><input type="radio" name="otazka9" value="36"> forint</div>
   <br><a href="#" class="article">Next question</a>
</div>

<div name="10" id="10" style="display: none;" class="show-hide">
  
   <p>10.Question</p><p>Which one from the options is not a cultural heritage of Ko&#353;ice?</p>
    <div class="radioChoice"><input type="radio" name="otazka10" value="37" > St. Elisabeth Cathedral<br></div>
    <div class="radioChoice"><input type="radio" name="otazka10" value="38"> St. Michael Chapel<br></div>
    <div class="radioChoice"><input type="radio" name="otazka10" value="39"> St. Urban Tower<br></div>
    <div class="radioChoice"><input type="radio" name="otazka10" value="40" id="true10"> State Theatre Ko&#353;ice</div>
   <br><button id="closeQuiz" onclick="rightAnswers()">Click to show results</button> 
   <br>
   <p id="results">
</div>


    </main>
    <?php include('include/footer.php'); ?>
</body>

</html>
