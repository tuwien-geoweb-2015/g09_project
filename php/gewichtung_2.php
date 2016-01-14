<html>
 <head>
	<link rel="stylesheet" href="../../style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
	<meta charset="iso-8859-1">
	<title>Gewichtung</title>
 </head>
 <body>
   <h2>Welche Mobilitätsangebote sind Ihnen besonders wichtig?</h2>
   
        <form method="POST" action="gewichtung_send.php">
            <?php //if(isset($_REQUEST['gewichtung_fuss'])){}else{echo"Kein Wert eingegeben";}?>
            OEPNV-Stationen <br />
                  nicht wichtig<input type="radio" name="gewichtung_oepnv" value="1"/>
                  <input type="radio" name="gewichtung_oepnv" value="2"/>wichtig<br /><br />
            Citybike-Stationen <br />
                  nicht wichtig<input type="radio" name="gewichtung_citybike" value="1"/>
                  <input type="radio" name="gewichtung_citybike" value="2"/>wichtig<br /><br />
            Car-Sharing Standorte<br />
                  nicht wichtig<input type="radio" name="gewichtung_car" value="1"/>
                  <input type="radio" name="gewichtung_car" value="2"/>wichtig<br /><br />
            <input type="submit" value="Berechnen">
            <input type="reset" value="Aktualisieren"> <br /><br />
            Ihre Präferenzen werden berechnet!<br>
        </form>
 </body>
</html> 