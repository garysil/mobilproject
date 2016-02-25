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
   <p>When was written first mention of Kosice :             " </p>
   <input type="radio" name="otazka1" value="1"id="true"> 1230<br>
  <input type="radio" name="otazka1" value="2"> 1150<br>
  <input type="radio" name="otazka1" value="3"> 1245 <br>
   <input type="radio" name="otazka1" value="4"> 1267
   <br><a href="#" class="article">Next question </a>
   
</div>
 
</div>

<div name="2" id="2" style="display: none;" class="show-hide">
  <p>2.Question</p><p>What was first name of Kosice ? </p>
  <input type="radio" name="otazka2" value="5"> Cassovia<br>
  <input type="radio" name="otazka2" value="6"> Kassa<br>
  <input type="radio" name="otazka2" value="7"id="true1"> Vila Kassa <br> 
   <input type="radio" name="otazka2" value="8"> Cassow
 <br><a href="#" class="article">Next question </a>
 
</div>

<div name="3" id="3" style="display: none;" class="show-hide">
 <p>3.Question</p><p>In what year was opened first cinema in kosice ?  </p>
 <input type="radio" name="otazka3" value="9"id="true3"> 1909<br>
  <input type="radio" name="otazka3" value="10"> 1896<br>
  <input type="radio" name="otazka3" value="11"> 1921 <br> 
   <input type="radio" name="otazka4" value="12"> 1936
  
  <br><a href="#" class="article">Next question </a>
</div>

<div name="4" id="4" style="display: none;" class="show-hide">
  <p>4.Question</p><p>In what discrict of kosice is located Sidlosko KVP? </p>
  <input type="radio" name="otazka4" value="13"> Kosice I<br>
  <input type="radio" name="otazka4" value="14"id="true4"> Kosice II<br>
  <input type="radio" name="otazka4" value="15"> Kosice III <br> 
   <input type="radio" name="otazka4" value="16"> Kosice IV
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
  
  <p>6.Question</p><p>What theater you wont find in Kosice? </p>
  <input type="radio" name="otazka6" value="21" >V kufri<br>
  <input type="radio" name="otazka6" value="22"> Maskrta<br>
  <input type="radio" name="otazka6" value="23"id="true6"> Na podiu <br> 
   <input type="radio" name="otazka6" value="24"> Na perone
  <br><a href="#" class="article">Next question </a>
</div>

<div name="7" id="7" style="display: none;" class="show-hide">
<p>7.Question</p><p>Whats the oldest folk ensemble from kosice? </p>
  <input type="radio" name="otazka7" value="25"id="true7" >Carnica<br>
  <input type="radio" name="otazka7" value="26"> Zeleziar<br>
  <input type="radio" name="otazka7" value="27"> Borievka <br> 
   <input type="radio" name="otazka7" value="28"> Jahodná
<br><a href="#" class="article">Next question </a>
</div>

<div name="8" id="8" style="display: none;" class="show-hide">
  
  <p>8.Question</p><p>In what year was kosice bombarded ? </p>
  <input type="radio" name="otazka8" value="29" >1930<br>
  <input type="radio" name="otazka8" value="30"id="true8">1941<br>
  <input type="radio" name="otazka8" value="31"> 1920 <br> 
   <input type="radio" name="otazka8" value="32"> 1935
 <br><a href="#" class="article">Next question </a>
</div>


<div name="9" id="9" style="display: none;" class="show-hide">
  
  <p>9.Question</p><p>How its called shopping center near to Elisabeth Catedral? </p>
  <input type="radio" name="otazka9" value="33" >Carefour<br>
  <input type="radio" name="otazka9" value="34"> Optima<br>
  <input type="radio" name="otazka9" value="35"id="true9"> Aupark <br> 
   <input type="radio" name="otazka9" value="36"> Galeria 
<br><a href="#" class="article">Next question </a>
</div>

<div name="10" id="10" style="display: none;" class="show-hide">
  
  <p>10.Question</p><p>What was  art name of known public enetertainer from kosice? </p>
  <input type="radio" name="otazka10" value="37" id="true10" >Ander<br>
  <input type="radio" name="otazka10" value="38"> Karol<br>
  <input type="radio" name="otazka10" value="39"> Onda <br> 
   <input type="radio" name="otazka10" value="40"> Peter
 <br><a href="#" class="article">Next question </a>
</div>

<div name="11" id="11" style="display: none;" class="show-hide">
  
  <p>11.Question</p><p>What company doesnt have office in kosice?  </p>
  <input type="radio" name="otazka11" value="41" >AT&T<br>
  <input type="radio" name="otazka11" value="42"id="true11"> Microsoft<br>
  <input type="radio" name="otazka11" value="43"> Global logic <br> 
   <input type="radio" name="otazka11" value="44"> IBM
   <br><button onclick="rightAnswers()">Click to show results :</button> 
  <br>
   <p id="results">
</div>


    </main>
    <?php include('include/footer.php'); ?>
</body>

</html>
