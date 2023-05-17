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
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<h2>CASINO ZVEZDA</h2>
    </head>
	
		
		
    <body>
		
        <div id="celota">
        <div id="naslov">
            <h1>SALA BLU - KOCKE</h1>
        </div>

        <div id="glavni">
            <form action="igra.php" name="form" method="post">
                <div id="igrac">               
                    <div class="igralec">IGRALEC 1<br><br> Ime: <br><br> <input type="text" name="ime1" maxlength="12" autofocus/></div>
                    <div class="igralec">IGRALEC 2<br><br> Ime: <br><br> <input type="text" name="ime2" maxlength="12" autofocus/></div>
                    <div class="igralec">IGRALEC 3<br><br> Ime: <br><br> <input type="text" name="ime3" maxlength="12" autofocus/></div>
                </div>
                    <div id="izbira">Kocke v igri:
							<br>
							<br>
                            <select name="stkock" class="stevilok">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            </select>
                            <br><br>
                        <input type="submit" class="custom-btn btn-9" type="button" onClick="return isEmpty()" name="igraj" value="IGRAJ"/>
                 </div>
                

            </form>
        </div>
		</div>
        
		<img id="diceLeva" src="modre.png" alt="diceLeva">
        
		<div class="diceDesno">
			<img id="diceDesno" src="modre.png" alt="diceDesna">
		</div>
			
    </body>
    <script>
        //preveri če so vnosna polja prazna
        function isEmpty(){
        if(document.forms['forma'].ime1.value == "" || document.forms['forma'].ime2.value == "" || document.forms['forma'].ime3.value == "")
        {
			Swal.fire({
			title: 'Napaka!',
			text: 'Niste vnesli vseh imen.',
			icon: 'error',
			color:'black',
			confirmButtonColor: '#191970',
			confirmButtonText: 'Nazaj',
			});
            return false;
        }
            return true;
        }
    </script>
</html> 