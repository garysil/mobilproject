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
        <h1>Interactive Map</h1>
        <img id="kosicemap" src="img/kosice map/kosice map template.png" width="960px">
        <div class="onmapdiv">
            
            <img class="dotOnMap" src="img/dotmap.png" style="top: 340px; left: 454px" onclick="visInfo('1')">
            <div id="div1" class="infoOnMap" style="margin-top: 140px; margin-left: 454px">
                <div class="infoPop">
                    State Theatre Košice
                    <div class="closePop" onclick="closeInfo('1')">X</div>
                </div>
                <div class="mainPop">
                    <img src="img/buildings/1/1.jpg" style="max-width: 290px"> 
                </div>
                <div class="footerPop"></div>
            </div>
            
            <img class="dotOnMap" src="img/dotmap.png" style="top: 280px; left: 435px" onclick="visInfo('2')">
            <div id="div2" class="infoOnMap" style="margin-top: 140px; margin-left: 435px">
                <div class="infoPop">
                    Immaculata
                    <div class="closePop" onclick="closeInfo('2')">X</div>
                </div>
                <div class="mainPop">
                    <img src="img/buildings/2/1.jpg" style="max-width: 290px"> 
                </div>
                <div class="footerPop"></div>
            </div>
            
            <img class="dotOnMap" src="img/dotmap.png" style="top: 416px; left: 478px" onclick="visInfo('3')">
            <div id="div3" class="infoOnMap" style="margin-top: 200px; margin-left: 478px">
                <div class="infoPop">
                    St. Elisabeth Cathedral
                    <div class="closePop" onclick="closeInfo('3')">X</div>
                </div>
                <div class="mainPop">
                    <img src="img/buildings/3/1.jpg" style="max-width: 290px"> 
                </div>
                <div class="footerPop"></div>
            </div>
            
            <img class="dotOnMap" src="img/dotmap.png" style="top: 398px; left: 480px" onclick="visInfo('4')">
            <div id="div4" class="infoOnMap" style="margin-top: 180px; margin-left: 480px">
                <div class="infoPop">
                    St. Urban Tower
                    <div class="closePop" onclick="closeInfo('4')">X</div>
                </div>
                <div class="mainPop">
                    <img src="img/buildings/4/1.jpg" style="max-width: 290px"> 
                </div>
                <div class="footerPop"></div>
            </div>
            
            <img class="dotOnMap" src="img/dotmap.png" style="top: 40px; left: 355px" onclick="visInfo('5')">
            <div id="div5" class="infoOnMap" style="margin-top: 40px; margin-left: 355px">
                <div class="infoPop">
                    East Slovak Museum
                    <div class="closePop" onclick="closeInfo('5')">X</div>
                </div>
                <div class="mainPop">
                    <img src="img/buildings/5/1.jpg" style="max-width: 290px"> 
                </div>
                <div class="footerPop"></div>
            </div>
            
            <img class="dotOnMap" src="img/dotmap.png" style="top: 53px; left: 322px" onclick="visInfo('6')">
            <div id="div6" class="infoOnMap" style="margin-top: 53px; margin-left: 322px">
                <div class="infoPop">
                    Statue of The Runner
                    <div class="closePop" onclick="closeInfo('6')">X</div>
                </div>
                <div class="mainPop">
                    <img src="img/buildings/6/1.jpg" style="max-width: 290px"> 
                </div>
                <div class="footerPop"></div>
            </div>
            
            <img class="dotOnMap" src="img/dotmap.png" style="top: 123px; left: 370px" onclick="visInfo('7')">
            <div id="div7" class="infoOnMap" style="margin-top: 123px; margin-left: 370px">
                <div class="infoPop">
                    Constitutional Court of Slovakia
                    <div class="closePop" onclick="closeInfo('7')">X</div>
                </div>
                <div class="mainPop">
                    <img src="img/buildings/7/1.jpg" style="max-width: 290px"> 
                </div>
                <div class="footerPop"></div>
            </div>
			
			<img class="dotOnMap" src="img/dotmap.png" style="top: 394px; left: 364px" onclick="visInfo('8')">
            <div id="div8" class="infoOnMap" style="margin-top: 123px; margin-left: 364px">
                <div class="infoPop">
                    Dominican church
                    <div class="closePop" onclick="closeInfo('8')">X</div>
                </div>
                <div class="mainPop">
                    <img src="img/buildings/8/1.jpg" style="max-width: 290px"> 
                </div>
                <div class="footerPop"></div>
            </div>
			
			<img class="dotOnMap" src="img/dotmap.png" style="top: 413px; left: 613px" onclick="visInfo('9')">
            <div id="div9" class="infoOnMap" style="margin-top: 223px; margin-left: 613px">
                <div class="infoPop">
                    Synagogue on Puškinova street
                    <div class="closePop" onclick="closeInfo('9')">X</div>
                </div>
                <div class="mainPop">
                    <img src="img/buildings/9/1.jpg" style="max-width: 290px"> 
                </div>
                <div class="footerPop"></div>
            </div>
            
			<img class="dotOnMap" src="img/dotmap.png" style="top: 584px; left: 351px" onclick="visInfo('10')">
            <div id="div10" class="infoOnMap" style="margin-top: 423px; margin-left: 351px">
                <div class="infoPop">
                    Neological synagogue
                    <div class="closePop" onclick="closeInfo('10')">X</div>
                </div>
                <div class="mainPop">
                    <img src="img/buildings/10/1.jpg" style="max-width: 290px"> 
                </div>
                <div class="footerPop"></div>
            </div>
			
			<img class="dotOnMap" src="img/dotmap.png" style="top: 587px; left: 328px" onclick="visInfo('11')">
            <div id="div11" class="infoOnMap" style="margin-top: 423px; margin-left: 328px">
                <div class="infoPop">
                    Košice State Philharmonic
                    <div class="closePop" onclick="closeInfo('11')">X</div>
                </div>
                <div class="mainPop">
                    <img src="img/buildings/11/1.jpg" style="max-width: 290px"> 
                </div>
                <div class="footerPop"></div>
            </div>
			
			<img class="dotOnMap" src="img/dotmap.png" style="top: 660px; left: 137px" onclick="visInfo('12')">
            <div id="div12" class="infoOnMap" style="margin-top: 430px; margin-left: 137px">
                <div class="infoPop">
                    Steel Arena
                    <div class="closePop" onclick="closeInfo('12')">X</div>
                </div>
                <div class="mainPop">
                    <img src="img/buildings/12/1.jpg" style="max-width: 290px"> 
                </div>
                <div class="footerPop"></div>
            </div>
			
			<img class="dotOnMap" src="img/dotmap.png" style="top: 273px; left: 523px" onclick="visInfo('13')">
            <div id="div13" class="infoOnMap" style="margin-top: 273px; margin-left: 523px">
                <div class="infoPop">
                    Mikluš Prison
                    <div class="closePop" onclick="closeInfo('13')">X</div>
                </div>
                <div class="mainPop">
                    <img src="img/buildings/13/1.jpg" style="max-width: 290px"> 
                </div>
                <div class="footerPop"></div>
            </div>
			
			<img class="dotOnMap" src="img/dotmap.png" style="top: 333px; left: 643px" onclick="visInfo('14')">
            <div id="div14" class="infoOnMap" style="margin-top: 333px; margin-left: 643px">
                <div class="infoPop">
                    Jakab´s Palace
                    <div class="closePop" onclick="closeInfo('14')">X</div>
                </div>
                <div class="mainPop">
                    <img src="img/buildings/14/1.jpg" style="max-width: 290px"> 
                </div>
                <div class="footerPop"></div>
            </div>
			
			<img class="dotOnMap" src="img/dotmap.png" style="top:152px; left: 116px" onclick="visInfo('15')">
            <div id="div15" class="infoOnMap" style="margin-top: 152px; margin-left: 116px">
                <div class="infoPop">
                    Watchtower
                    <div class="closePop" onclick="closeInfo('15')">X</div>
                </div>
                <div class="mainPop">
                    <img src="img/buildings/15/1.jpg" style="max-width: 290px"> 
                </div>
                <div class="footerPop"></div>
            </div>
        </div>	
    </main>
    <?php include('include/footer.php'); ?>
</body>
<script>
    function visInfo(name) {
        var i=1;
        var popup = document.getElementById('div'+name);
        var vision = window.getComputedStyle(popup,null).getPropertyValue("visibility");
        if (vision==="hidden"){
            for (i=1;i<16;i++){
                document.getElementById('div'+i).style.visibility= "hidden";
            }
            popup.style.visibility= "visible";
        }
           
        else popup.style.visibility= "hidden";
    }
    
    function closeInfo(name) {
        var popup = document.getElementById('div'+name);
        popup.style.visibility= "hidden";
    }
</script>
</html>
