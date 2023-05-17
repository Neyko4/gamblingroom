<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <link rel="stylesheet"  href="styles.css" />
        <title>Gambling room</title>
		<link rel="icon" type="image/x-icon" href="favicon.png">
        <script src="js/igra.js"></script>
		<h2>CASINO ZVEZDA</h2>
    </head>
    <body >
		
		<div id="celota2">
        <div id="naslov2">
            <h1>IGRA</h1>
        </div>
        
        <?php 

           

            

            $_SESSION["i1"]=$_POST['ime1'];
            $_SESSION["i2"]=$_POST['ime2'];
            $_SESSION["i3"]=$_POST['ime3'];
            $_SESSION["stKock"]=$_POST['stkock'];
            
            
            $_SESSION["vsota1"]=0;
            $_SESSION["vsota2"]=0;
            $_SESSION["vsota3"]=0;
            
            switch ($_SESSION["stKock"]) {
                case 1:
                    $_SESSION["igralec1k1"]=rand(1,6);
                  break;
                case 2:
                    $_SESSION["igralec1k1"]=rand(1,6);
                    $_SESSION["igralec1k2"]=rand(1,6);
                  break;
                case 3:
                    $_SESSION["igralec1k1"]=rand(1,6);
                    $_SESSION["igralec1k2"]=rand(1,6);
                    $_SESSION["igralec1k3"]=rand(1,6);
                  break;
                  
                default:
                  ;
              } 

              
              switch ($_SESSION["stKock"]) {
                case 1:
                    $_SESSION["igralec2k1"]=rand(1,6);
                  break;
                case 2:
                    $_SESSION["igralec2k1"]=rand(1,6);
                    $_SESSION["igralec2k2"]=rand(1,6);
                  break;
                case 3:
                    $_SESSION["igralec2k1"]=rand(1,6);
                    $_SESSION["igralec2k2"]=rand(1,6);
                    $_SESSION["igralec2k3"]=rand(1,6);
                  break;
                  
                default:
                  ;
              } 
              
              switch ($_SESSION["stKock"]) {
                case 1:
                    $_SESSION["igralec3k1"]=rand(1,6);
                  break;
                case 2:
                    $_SESSION["igralec3k1"]=rand(1,6);
                    $_SESSION["igralec3k2"]=rand(1,6);
                  break;
                case 3:
                    $_SESSION["igralec3k1"]=rand(1,6);
                    $_SESSION["igralec3k2"]=rand(1,6);
                    $_SESSION["igralec3k3"]=rand(1,6);
                  break;
                  
                default:
                  ;
              } 

        ?>          

        <div id="glavni2">
           
                <div id="igrac2">               
                    <div class="igralec2"><?php echo $_SESSION["i1"],"<br><br>";
                    
                   // sleep(1);
                    switch ($_SESSION["stKock"]) {
                        case 1:
                            echo "<div id='anim1' style='height:48px;'><img style='margin:5px 0;' src='slike/dice-anim.gif'></div>";
                            
                            echo "<div id='kocke1' style='display:none;'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec1k1"],".gif'></div>";
                            $_SESSION["vsota1"]=$_SESSION["igralec1k1"];
							
							echo "<br><br>";
							echo "<div id='delayedContent1' style='display: none;'>$_SESSION[vsota1]</div>";
							
                          break;
                        case 2:
                            echo "<div id='anim1' style='height:48px;'><img style='margin:5px 0;' src='slike/dice-anim.gif'><img style='margin:5px 0;' src='slike/dice-anim.gif'></div>";
                            echo "<div id='kocke1' style='display:none;'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec1k1"],".gif'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec1k2"],".gif'></div>";
                            $_SESSION["vsota1"]=$_SESSION["igralec1k1"]+$_SESSION["igralec1k2"];
							echo "<br><br>";
							echo "<div id='delayedContent1' style='display: none;'>$_SESSION[vsota1]</div>";
                            break;
                        case 3:
                            echo "<div id='anim1' style='height:48px;'><img style='margin:5px 0;' src='slike/dice-anim.gif'><img style='margin:5px 0;' src='slike/dice-anim.gif'><img style='margin:5px 0;' src='slike/dice-anim.gif'></div>";
                            echo "<div id='kocke1' style='display:none;'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec1k1"],".gif'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec1k2"],".gif'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec1k3"],".gif'></div>";
                            $_SESSION["vsota1"]=$_SESSION["igralec1k1"]+$_SESSION["igralec1k2"]+$_SESSION["igralec1k3"];
							echo "<br><br>";
							echo "<div id='delayedContent1' style='display: none;'>$_SESSION[vsota1]</div>";
                            break;
                            
                        default:
                          ;
                      } 
                    ?></div>
                    <div class="igralec2"><?php echo $_SESSION["i2"],"<br><br>";
                     
                    switch ($_SESSION["stKock"]) {
                        case 1:
                            echo "<div id='anim2' style='height:48px;'><img style='margin:5px 0;' src='slike/dice-anim.gif'></div>";
                            echo "<div id='kocke2' style='display:none;'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec2k1"],".gif'></div>";
                            $_SESSION["vsota2"]=$_SESSION["igralec2k1"];
							echo "<br><br>";
							echo "<div id='delayedContent2' style='display: none;'>$_SESSION[vsota2]</div>";
                          break;
                        case 2:
                            echo "<div id='anim2' style='height:48px;'><img style='margin:5px 0;' src='slike/dice-anim.gif'><img style='margin:5px 0;' src='slike/dice-anim.gif'></div>";
                            echo "<div id='kocke2' style='display:none;'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec2k1"],".gif'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec2k2"],".gif'></div>";
                            $_SESSION["vsota2"]=$_SESSION["igralec2k1"]+$_SESSION["igralec2k2"];
							echo "<br><br>";
							echo "<div id='delayedContent2' style='display: none;'>$_SESSION[vsota2]</div>";
                            break;
                        case 3:
                            echo "<div id='anim2' style='height:48px;'><img style='margin:5px 0;' src='slike/dice-anim.gif'><img style='margin:5px 0;' src='slike/dice-anim.gif'><img style='margin:5px 0;' src='slike/dice-anim.gif'></div>";
                            echo "<div id='kocke2' style='display:none;'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec2k1"],".gif'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec2k2"],".gif'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec2k3"],".gif'></div>";
                            $_SESSION["vsota2"]=$_SESSION["igralec2k1"]+$_SESSION["igralec2k2"]+$_SESSION["igralec2k3"];
							echo "<br><br>";
							echo "<div id='delayedContent2' style='display: none;'>$_SESSION[vsota2]</div>";
                            break;
                        
                        default:
                          ;
                      } 
                    ?></div>
                    <div class="igralec2"><?php echo $_SESSION["i3"],"<br><br>";
                   
                        
                        switch ($_SESSION["stKock"]) {
                            case 1:
                                echo "<div id='anim3' style='height:48px;'><img style='margin:5px 0;' src='slike/dice-anim.gif'></div>";
                                echo "<div id='kocke3' style='display:none;'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec3k1"],".gif'></div>";
                                $_SESSION["vsota3"]=$_SESSION["igralec3k1"];
								echo "<br><br>";
								echo "<div id='delayedContent3' style='display: none;'>$_SESSION[vsota3]</div>";
                            break;
                            case 2:
                                echo "<div id='anim3' style='height:48px;'><img style='margin:5px 0;' src='slike/dice-anim.gif'><img style='margin:5px 0;' src='slike/dice-anim.gif'></div>";
                                echo "<div id='kocke3' style='display:none;'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec3k1"],".gif'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec3k2"],".gif'></div>";
                                $_SESSION["vsota3"]=$_SESSION["igralec3k1"]+$_SESSION["igralec3k2"];
								echo "<br><br>";
								echo "<div id='delayedContent3' style='display: none;'>$_SESSION[vsota3]</div>";
                                break;
                            case 3:
                                echo "<div id='anim3' style='height:48px;'><img style='margin:5px 0;' src='slike/dice-anim.gif'><img style='margin:5px 0;' src='slike/dice-anim.gif'><img style='margin:5px 0;' src='slike/dice-anim.gif'></div>";
                                echo "<div id='kocke3' style='display:none;'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec3k1"],".gif'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec3k2"],".gif'><img style='margin:5px 0;' src='slike/dice",$_SESSION["igralec3k3"],".gif'></div>";
                                $_SESSION["vsota3"]=$_SESSION["igralec3k1"]+$_SESSION["igralec3k2"]+$_SESSION["igralec3k3"];
								echo "<br><br>";
								echo "<div id='delayedContent3' style='display: none;'>$_SESSION[vsota3]</div>";
                                break;
                            
                            default:
                            ;
                        } ?>
                        </div>
                </div>
                
                    <div id="izbira2">
                    <?php echo "Kocke v igri: <br>",$_SESSION["stKock"],"<br><br>";
                      echo " <form action=\"konec.php\" name=\"form\" method=\"post\"><input type=\"submit\" class=\"custom-btn btn-9\"  name=\"rezultati\" value=\"REZULTATI\"/></form>"; 

                       ?>
                 </div>
				 <script>
					function showDelayedContent(elementId, delay) {
						setTimeout(function() {
							document.getElementById(elementId).style.display = "block";
						}, delay);
					}

					showDelayedContent("delayedContent1", 1300); // Delayed execution for the first div
					showDelayedContent("delayedContent2", 1300); // Delayed execution for the second div
					showDelayedContent("delayedContent3", 1300); // Delayed execution for the second div
				</script>
                

            
        </div>
		</div>
        
		<img id="diceLeva" src="modre.png" alt="diceLeva">
        
		<div class="diceDesno">
			<img id="diceDesno" src="modre.png" alt="diceDesna">
		</div>
		
    </body>
</html> 