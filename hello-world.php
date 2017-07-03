<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>
<html>
    <head>
        <meta charset="utf-8">
        <link href="stili.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="skripta.js"></script>

    
    </head> 
    <body>
        <h1>Postavite vprasanje:</h1>
            <form name="forma" method = "POST">
                <table>
        			<tr>
        				<td>
        					Vaše vprašanje: <input id="vprasanje" size="50" name="vprasanje" />
        				<td>
        					<input  id="dodajOdg" type="button" value="Dodaj odgovor" />
        				</td>
        				<td>
        					<input  id="odstraniOdg" type="button" value="izbrisi polja z odgovori" />
        				</td>
        			</tr>
        		</table>
        		
            	<h2>Podajte še mozne odgovore in stevilo tock: </h2>
            	<div id="vprasanja">

                </div>
               <input  id="dodajGumb" type="button" value="Dodaj vprasanje" />
               <input  id="izdelaj" type="button" value="izdelaj kviz" /><br>
              <!-- <input  id="poizkusi" type="button" value="poizkusi" /><br> -->
               <p id="opozorilo"></p>
    		</form>
<?php
/*
    class vprasanje {
        public $vprasanje;
        public $odgovori;
        public $tocke;
                    
        public function __construct($vprasanje, $odgovori, $tocke) {
            $this->vprasanje = $vprasanje;
            $this->odgovori = $odgovori;
            $this->tocke = $tocke;
        }
                    
                    
    }


    //echo "dsadda";
    if (isset($_POST['dodaj'])) {
        if($_POST['vprasanje'] && $_POST['odg1'] && $_POST['odg2'] && $_POST['odg3'] && $_POST['odg4'] ){
            echo 'vase vprasanje je: '.$_POST['vprasanje'].' vasi mozni odgovori so: '.$_POST['odg1'].', '.$_POST['odg2'].', '.$_POST['odg3'].', '.$_POST['odg4'];  
            
            $tock = array();
            if($_POST['V1'] && $_POST['V2'] && $_POST['V3'] && $_POST['V4']){
                
                array_push($tock, $_POST['V1']);
                array_push($tock, $_POST['V2']);
                array_push($tock, $_POST['V3']);
                array_push($tock, $_POST['V4']);
            }
            
            $arrlength = count($tock);

            for($x = 0; $x < $arrlength; $x++) {
                echo $tock[$x];
                echo "<br>";
            }
            
            
            /*
             $prvi= new vprasanje($_POST['vprasanje'],[$_POST['odg1'],$_POST['odg2'],$_POST['odg3'],$_POST['odg4']],$tock);
             //echo $prvi->vprasanje;
            // $a = intval($prvi->tocke[0]) + intval($prvi->tocke[1]) + intval($prvi->tocke[2]) + intval($prvi->tocke[3]);
            echo $prvi->tocke[0];
            echo $prvi->tocke[1];
            echo $prvi->tocke[2];
            echo $prvi->tocke[3];
            
        }
        else{
            echo "Izpolniti morate vsa polja";
        } 
    }
    
   */

?>
    		
    </body>
		
</html>