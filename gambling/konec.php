<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <link rel="stylesheet"  href="styles.css" />
		<link rel="icon" type="image/x-icon" href="favicon.png">
        <title>Gambling room</title>
		<h2>CASINO ZVEZDA</h2>
    </head>
    <body>
        <div id="celota3">
        <div id="naslov3">
            <h1>SALA BLU - KOCKE</h1>
        </div>

        <div id="glavni3">
		<div class="firework"></div>
		<div class="firework"></div>
		<div class="firework"></div>
            <form action="igra.php" name="form" method="post">
                <div id="igrac3">  
					<div class="igralec3">
                    <?php
       
		
		if($_SESSION["vsota3"]<=$_SESSION["vsota1"] && $_SESSION["vsota1"]>=$_SESSION["vsota2"]){
			if($_SESSION["vsota1"]==$_SESSION["vsota2"] && $_SESSION["vsota1"]==$_SESSION["vsota3"]){
				echo "Zmagovalci so: <br>",$_SESSION["i1"],", ",$_SESSION["i2"]," in ",$_SESSION["i3"];
			}
			elseif($_SESSION["vsota1"]==$_SESSION["vsota2"]){
				echo "Zmagovalca sta: <br>",$_SESSION["i1"]," in ",$_SESSION["i2"];
			}
			elseif($_SESSION["vsota1"]==$_SESSION["vsota3"]){
				echo "Zmagovalca sta: <br>",$_SESSION["i1"]," in ",$_SESSION["i3"];
			}
			else{
				echo "Zmagovalec je: <br>",$_SESSION["i1"];	
			}
		}
	
		elseif($_SESSION["vsota2"]>=$_SESSION["vsota3"]){
			if($_SESSION["vsota2"]>$_SESSION["vsota1"]){
				echo "Zmagovalec je: <br>", $_SESSION["i2"];	
			}
			else{
				echo "Zmagovalca sta: <br>",$_SESSION["i2"]," in ",$_SESSION["i3"];
			}
		}
		
		else{
			echo "Zmagovalec je: <br>",$_SESSION["i3"];
		}
		
        //echo $_SESSION["vsota1"]," ",$_SESSION["vsota2"]," ",$_SESSION["vsota3"];
        ?>
				
		</div>
                </div>
                    <div id="izbira3">
							
							<div class="zmaga">DOBITEK!</div>
							<br>
                            <div>Preusmeritev domov v <span id="cas">10</span> sekundah...</div>
                 </div>
                

            </form>
        </div>
		</div>
        
		<img id="diceLeva" src="modre.png" alt="diceLeva">
        
		<div class="diceDesno">
			<img id="diceDesno" src="modre.png" alt="diceDesna">
		</div>
			
		
		
    </body>
        <!--skripta za redirect čez 15 sek-->
        <script>
        function redirTimer() {self.setTimeout ("self.location.href='index.php';",10000);} 
        redirTimer();

        var seconds_left = 10;
        setInterval(function() {
            document.getElementById('cas').innerHTML = --seconds_left;}, 1000);
        </script>

</html> 