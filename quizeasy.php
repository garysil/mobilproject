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




var percentage =Math.round(100*counter/11)


document.getElementById("results").innerHTML = "Count of right answer's is :  "+counter + "   Percentage succes is : "+percentage+"%";
}

</script>
</head>

<body>
    <?php include('include/header.php'); ?>
    <main class="mainpart">
      
        
<div name="1" id="1" class="show-hide">
 
  <p>1.Question</p>
   <p>How its called kosice marathon "marathon of :             " </p>
   <input type="radio" name="otazka1" value="1"> sport<br>
  <input type="radio" name="otazka1" value="2"> health<br>
  <input type="radio" name="otazka1" value="3"> Kosice <br> 
   <input type="radio" name="otazka1" value="4"id="true"> peace
   <br><a href="#" class="article">Next question </a>
   
</div>
 
</div>

<div name="2" id="2" style="display: none;" class="show-hide">
  <p>2.Question</p><p>How many peoples live in kosice ?  </p>
  <input type="radio" name="otazka2" value="5"> 250 000<br>
  <input type="radio" name="otazka2" value="6"id="true1"> 355 000<br>
  <input type="radio" name="otazka2" value="7"> 423 000 <br> 
   <input type="radio" name="otazka2" value="8"> 325 500
 <br><a href="#" class="article">Next question </a>
 
</div>

<div name="3" id="3" style="display: none;" class="show-hide">
 <p>3.Question</p><p>In what year was kosice European  central city of culture ?  </p>
 <input type="radio" name="otazka3" value="9"> 2010<br>
  <input type="radio" name="otazka3" value="10"> 2015<br>
  <input type="radio" name="otazka3" value="11"> 2013 <br> 
   <input type="radio" name="otazka4" value="12"id="true3"> 2007
  
 <br><a href="#" class="article">Next question </a>
</div>

<div name="4" id="4" style="display: none;" class="show-hide">
  <p>4.Question</p><p>What river flows north of city ? </p>
  <input type="radio" name="otazka4" value="13"> Dunaj<br>
  <input type="radio" name="otazka4" value="14"> Vltava<br>
  <input type="radio" name="otazka4" value="15"> Hron <br> 
   <input type="radio" name="otazka4" value="16"id="true4"> Hornad
  <br><a href="#" class="article">Next question </a>
</div>

<div name="5" id="5" style="display: none;" class="show-hide">
  
  <p>5.Question</p><p>How its called arena  where is played hockey ?  </p>
  <input type="radio" name="otazka5" value="17" id="true5"> Steel<br>
  <input type="radio" name="otazka5" value="18"> Iron<br>
  <input type="radio" name="otazka5" value="19"> Sport <br> 
   <input type="radio" name="otazka5" value="20"> Ice
 <br><a href="#" class="article">Next question </a>
</div>

<div name="6" id="6" style="display: none;" class="show-hide">
  
  <p>6.Question</p><p>Where in slovakia are Kosice located ?</p>
  <input type="radio" name="otazka6" value="21" >South<br>
  <input type="radio" name="otazka6" value="22"> North<br>
  <input type="radio" name="otazka6" value="23"id="true6"> East <br> 
   <input type="radio" name="otazka6" value="24"> West
  <br><a href="#" class="article">Next question </a>
</div>

<div name="7" id="7" style="display: none;" class="show-hide">
<p>7.Question</p><p>Witch of atractions you cant find in Kosice? </p>
  <input type="radio" name="otazka7" value="25" >Zoo<br>
  <input type="radio" name="otazka7" value="26"> Museum<br>
  <input type="radio" name="otazka7" value="27"> Airport <br> 
   <input type="radio" name="otazka7" value="28"id="true7"> Aquapark
 <br><a href="#" class="article">Next question </a>
</div>

<div name="8" id="8" style="display: none;" class="show-hide">
  
  <p>8.Question</p><p>What company is biggest employeer in region?  </p>
  <input type="radio" name="otazka8" value="29" >Slovnaft<br>
  <input type="radio" name="otazka8" value="30"id="true8"> U.S. Steel<br>
  <input type="radio" name="otazka8" value="31"> Sedita <br> 
   <input type="radio" name="otazka8" value="32"> SPP
  <br><a href="#" class="article">Next question </a>
</div>


<div name="9" id="9" style="display: none;" class="show-hide">
  
  <p>9.Question</p><p>Was Kosice capital city of Slovakia ? If Yes choose year </p>
  <input type="radio" name="otazka9" value="33" >Kosice are<br>
  <input type="radio" name="otazka9" value="34"id="true9"> Never was<br>
  <input type="radio" name="otazka9" value="35"> 1855 <br> 
   <input type="radio" name="otazka9" value="36"> 1654
<br><a href="#" class="article">Next question </a>
</div>

<div name="10" id="10" style="display: none;" class="show-hide">
  
  <p>10.Question</p><p>Witch museum you can find in Kosice </p>
  <input type="radio" name="otazka10" value="37" id="true10" >Technical museum<br>
  <input type="radio" name="otazka10" value="38"> Museum of WW II<br>
  <input type="radio" name="otazka10" value="39"> Slovak musical museum <br> 
   <input type="radio" name="otazka10" value="40"> Mining museum
  <br><a href="#" class="article">Next question </a>
</div>

<div name="11" id="11" style="display: none;" class="show-hide">
  
  <p>11.Question</p><p>Witch one from these are not cultural heritage of Kosice? </p>
  <input type="radio" name="otazka11" value="41" >Elisabeth Catedral<br>
  <input type="radio" name="otazka11" value="42"> Saint Michaels Chapel<br>
  <input type="radio" name="otazka11" value="43"> Urbans tower <br> 
   <input type="radio" name="otazka11" value="44"id="true11"> State theater
  <br><button onclick="rightAnswers()">Click to show results :</button> 
  <br>
   <p id="results">
</div>















    </main>
    <?php include('include/footer.php'); ?>
</body>

</html>
