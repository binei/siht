<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>
<html>
    <head>
        <meta charset="utf-8">
        <link href="stili1.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="skripta11.js"></script>
        <link href="css/clean-blog.css" rel="stylesheet">
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css?version=<?php echo $ver; ?>" rel="stylesheet">
        
        <style type="text/css">
            body {
                padding: 0 20px;
            }

        </style>

    
    </head> 
    <body>
        <h1>Postavite vprasanje:</h1>
        <form name="forma" method = "POST" >
            
			Vaše vprašanje:
            <div class="form-group">
                <div class="col-xs-5">
			     <input id="vprasanje" class="form-control" name="vprasanje" />
			    </div>
			<div>
			<input  id="dodajOdg" type="button" class="btn btn-default" value="Dodaj odgovor" />
			<input  id="odstraniOdg" type="button" class="btn btn-default" value="izbrisi polja z odgovori" />
        	<h2>Podajte še mozne odgovore in stevilo tock: </h2>
        	<div id="vprasanja" class="form-group" >

            </div>
           <input  id="dodajGumb" type="button" class="btn btn-default" value="Dodaj vprasanje" />
           <input  id="izdelaj" type="button" class="btn btn-default" value="izdelaj kviz" /><br>
          <!-- <input  id="poizkusi" type="button" value="poizkusi" /><br> -->
           <p id="opozorilo"></p>
		</form>
    </body>
</html>