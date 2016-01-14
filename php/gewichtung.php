<html>
 <head>
	<link rel="stylesheet" href="../../style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
	<meta charset="iso-8859-1">
	<title>Gewichtung</title>
 </head>
 <body>
   <h2>Welche Mobilitätsangebote hätten Sie gerne in Ihrer Nähe?</h2>
   
        <form method="POST" action="gewichtung_send.php">
            Fußgängerzonen <br />    
                  nicht wichtig<input type="radio" name="gewichtung_fuss" value="1"/>
                  <input type="radio" name="gewichtung_fuss" value="2"/>
                  <input type="radio" name="gewichtung_fuss" value="3"/>
                  <input type="radio" name="gewichtung_fuss" value="4"/>
                  <input type="radio" name="gewichtung_fuss" value="5"/>
                  <input type="radio" name="gewichtung_fuss" value="6"/>
                  <input type="radio" name="gewichtung_fuss" value="7"/>
                  <input type="radio" name="gewichtung_fuss" value="8"/>
                  <input type="radio" name="gewichtung_fuss" value="9"/>
                  <input type="radio" name="gewichtung_fuss" value="10"/>sehr wichtig<br /><br />
            <?php //if(isset($_REQUEST['gewichtung_fuss'])){}else{echo"Kein Wert eingegeben";}?>
            Stationen Bus und Straßenbahn <br />
                  nicht wichtig<input type="radio" name="gewichtung_busstra" value="1"/>
                  <input type="radio" name="gewichtung_busstra" value="2"/>
                  <input type="radio" name="gewichtung_busstra" value="3"/>
                  <input type="radio" name="gewichtung_busstra" value="4"/>
                  <input type="radio" name="gewichtung_busstra" value="5"/>sehr wichtig<br /><br />
            Stationen U-Bahn<br />
                  nicht wichtig<input type="radio" name="gewichtung_ubahn" value="1"/>
                  <input type="radio" name="gewichtung_ubahn" value="2"/>
                  <input type="radio" name="gewichtung_ubahn" value="3"/>
                  <input type="radio" name="gewichtung_ubahn" value="4"/>
                  <input type="radio" name="gewichtung_ubahn" value="5"/>sehr wichtig<br /><br />
            Stationen S-Bahn<br />
                  nicht wichtig<input type="radio" name="gewichtung_sbahn" value="1"/>
                  <input type="radio" name="gewichtung_sbahn" value="2"/>
                  <input type="radio" name="gewichtung_sbahn" value="3"/>
                  <input type="radio" name="gewichtung_sbahn" value="4"/>
                  <input type="radio" name="gewichtung_sbahn" value="5"/>sehr wichtig<br /><br />
            Citybike-Stationen <br />
                  nicht wichtig<input type="radio" name="gewichtung_citybike" value="1"/>
                  <input type="radio" name="gewichtung_citybike" value="2"/>
                  <input type="radio" name="gewichtung_citybike" value="3"/>
                  <input type="radio" name="gewichtung_citybike" value="4"/>
                  <input type="radio" name="gewichtung_citybike" value="5"/>sehr wichtig<br /><br />
            Abstellanlagen fürs Fahrrad <br />
                  nicht wichtig<input type="radio" name="gewichtung_abstell" value="1"/>
                  <input type="radio" name="gewichtung_abstell" value="2"/>
                  <input type="radio" name="gewichtung_abstell" value="3"/>
                  <input type="radio" name="gewichtung_abstell" value="4"/>
                  <input type="radio" name="gewichtung_abstell" value="5"/>sehr wichtig<br /><br />
            Car-Sharing Standorte<br />
                  nicht wichtig<input type="radio" name="gewichtung_car" value="1"/>
                  <input type="radio" name="gewichtung_car" value="2"/>
                  <input type="radio" name="gewichtung_car" value="3"/>
                  <input type="radio" name="gewichtung_car" value="4"/>
                  <input type="radio" name="gewichtung_car" value="5"/>sehr wichtig<br /><br />
            <input type="submit" value="Berechnen">
            <input type="reset" value="Aktualisieren"> <br /><br />
            Ihre Präferenzen werden berechnet!<br>
        </form>
 </body>
</html> 