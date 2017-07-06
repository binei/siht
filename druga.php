<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <title>Kaj veste o financiranju?</title>
        
          <link href="css/clean-blog.css" rel="stylesheet">
    
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css?version=<?php echo $ver; ?>" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="vprasanja.js"></script>
        
        

        <script src="skripta2.js"></script>
        
            <style>
	
		a{
			text-decoration: none !important;
			cursor: pointer; 
			cursor: hand; 
		}
		.inactive-number{
			display:inline-block;
		}
		
		.inactive-number{
		background:url('img/inactive-circle-new.png');
		background-repeat: no-repeat;
		background-position:center;
		width:50px;
		height: 50px;
		/*margin-right:1%;*/
		color:#fff;
		text-align:center;
		padding-top:15px;
}

.active-number{
	color:#ffffff;
	background:url('img/active-back.png');
	background-repeat: no-repeat;
	background-position:center;
		width:50px;
		height: 50px;
		color:#fff;
		text-align:center;
		padding-top:15px;
}
.solved-number{
	background:url('img/red-circle-new.png');
	background-repeat: no-repeat;
		background-position:center;
		width:50px;
		height: 50px;
		/*margin-right:1%;*/
		color:#fff;
		text-align:center;
		padding-top:15px;
}
		
		.pageMovement {
			margin-top: 45px;
		}
		.navbutton.button-back{
			/*background:url('img/portfolio/prev-active.png');*/
			background-repeat: no-repeat;
			background-position:center;
		}
		
		.navbutton{
	/*background:url('img/neaktiven-color.png');*/
	background-repeat: no-repeat;
	background-position:center;
		width:50px;
		height: 50px;
		margin-right:10px;
		color:#b5bcdf;
		text-align:center;
		padding-top:15px;
		display: inline-block;
		cursor: pointer;
		
}


.navbutton.inactive {
	cursor: default;
}
.navbutton.button-back.inactive {
	/*background: url('img/prev-inactive.png');*/
	background-repeat: no-repeat;
	background-position:center;
}
.navbutton.button-next.inactive {
	/*background: url('img/next-inactive.png');*/
	background-repeat: no-repeat;
	background-position:center;
}
.button-next{
	/*background:url('img/portfolio/next-active.png');*/
	background-repeat: no-repeat;
	background-position:center;
}
.navbutton.button-back{
	/*background:url('img/portfolio/prev-active.png');*/
	background-repeat: no-repeat;
	background-position:center;
}

.button-back {
	margin-right: 35px;
}

		
	.selAnswer {
	/*background: #006db7;*/
	/*height:230px;*/
}	
.test-back:before{

position: absolute;

    
    content: " ";
    /*background: url(img/portfolio/drzi.png);*/
   
    width: 158px;
    height: 158px;
    
	
}
/*.answerS:hover{
	background:#006db7;
}*/
.icon1{
	width:100%;
	height:180px;
	background:url('img/portfolio/drzi-bel.png');
	background-size: 158px 158px;
    background-repeat: no-repeat;
	text-align:center;
	background-position: center;
	color:#fff !important; 
}
.icon1:hover{
	color:#ffce00 !important;
	background:url('img/portfolio/drzi.png');
	background-size: 158px 158px;
    background-repeat: no-repeat;
	text-align:center;
	background-position: center; 
}
.selAnswer .answer .icon1{
	color:#ffce00 !important;
	background:url('img/portfolio/drzi.png');
	background-size: 158px 158px;
    background-repeat: no-repeat;
	text-align:center;
	background-position: center; 
}
.icon2{
	width:100%;
	height:180px;
	background:url('img/portfolio/nedrzi.png');
	background-size: 158px 158px;
    background-repeat: no-repeat;
	text-align:center;
	background-position: center;
	color:#fff !important; 
}
.icon2:hover{
	color:#ffce00 !important;
	background:url('img/portfolio/nedrzi-rumen.png');
	background-size: 158px 158px;
    background-repeat: no-repeat;
	text-align:center;
	background-position: center; 
}
.selAnswer .answer .icon2{
	color:#ffce00 !important;
	background:url('img/portfolio/nedrzi-rumen.png');
	background-size: 158px 158px;
    background-repeat: no-repeat;
	text-align:center;
	background-position: center; 
}

.icon3{
	width:100%;
	height:180px;
	background:url('img/portfolio/nevem-bel.png');
	background-size: 158px 158px;
    background-repeat: no-repeat;
	text-align:center;
	background-position: center;
	color:#fff !important; 
}
.icon3:hover{
	color:#ffce00 !important;
	background:url('img/portfolio/nevem-rumen.png');
	background-size: 158px 158px;
    background-repeat: no-repeat;
	text-align:center;
	background-position: center; 
}
.selAnswer .answer .icon3{
	color:#ffce00 !important;
	background:url('img/portfolio/nevem-rumen.png');
	background-size: 158px 158px;
    background-repeat: no-repeat;
	text-align:center;
	background-position: center; 
}

.textA{
	position: relative;
   top: 170px;
   
}
.blue{
	color:#b3b3b3;
	border:1px solid #b3b3b3;
	border-radius:5px;
	
	padding:10px 30px;
	width:100%;
	 font-size: 14px;
  width: 180px;
  border-radius: 4px;
  display: inline-block;
  line-height: 1;
  padding: 15px 16px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  user-select: none;
  max-width: 100%;
  text-align: center;
  cursor: pointer;
	
	
	
}
.red{
	color:#b3b3b3;
	border:1px solid #b3b3b3;
	border-radius:5px;
	
	padding:10px 30px;
	width:100%;
	 font-size: 14px;
  width: 180px;
  border-radius: 4px;
  display: inline-block;
  line-height: 1;
  padding: 15px 16px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  user-select: none;
  max-width: 100%;
  text-align: center;
  cursor: pointer;
	
	
	
}
.blue:hover{
	background:#00afd0;
	color:#fff;	
	
	
	/*border-radius: 5px;*/
	border:1px solid #00afd0;
}
.red:hover{
	background:#e2001a;
	color:#fff;	
	border:1px solid #ed1c24;
}

#questions{
		margin-top:40px;
}
.stevilkeV{
	text-align:center;
}

@media screen and (max-width: 767px) {
	.blue{
		width:90%;
	}
	.red{
		width:90%;
	}
}

	</style>
        
    </head> 
    <body>

    	
    	
    	
        <section id="logos">
        	<!--<div class="container">-->
            	<div class="row">
                	<div class="col-sm-4">
                    	<p class="uniC"><img src="img/unicredit.png" class="logo-unicredit"></p>
                    </div>
    
                	<div class="col-sm-4 col-sm-offset-4">
                    	<p class="azi"><img src="img/azimut-logo.png" class="logo-azimut"></p>
                    </div>
                </div>
            <!--</div>-->
        </section>
        
            <header class="intro-header" style="background-image: url('img/hero.jpg'); background-position: center top">
        <!--<div class="container">-->
            <div class="row">
                <div class="col-md-10">
                  <div class="hero-content">
                  	<h1 class="zanima_me">zanima me,</h1>
                    <h4 class="koliko_vem">koliko vem.</h4>
                    <h6 class="nagradni_kviz">Kviz za preverjanje znanja</h6>
                  </div>
                </div>
           <!-- </div>-->
           <div class="pasica">
        	<div class="container">
                
            </div>    
        </div>
    </header>
        
        
<!--        <h1>To je vas kviz</h1> -->
<?php

$vsavpr=array();
$vsiodg=array();
$vsiidodg=array();


$servername = getenv('IP');
$username = getenv('C9_USER');
$password = "";
$database = "c9";
$dbport = 3306;

// Create connection
$db = new mysqli($servername, $username, $password, $database, $dbport);
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

$kvizID = 1;
$sql="SELECT id, vprasanje FROM vprasanja WHERE id_kviza=$kvizID";
if ($result=mysqli_query($db,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result)){	
  	$odg = array();
	$id_odg=array();
	$vp=array();
	
	echo "<br> vprasanje";
	echo $row[0]. " ";
    echo $row[1]. " ";
    	
    $vpr="SELECT id, odgovor FROM odgovori WHERE id_vprasanja = $row[0] ";
    if ($rez=mysqli_query($db,$vpr)){
		while ($vrstica=mysqli_fetch_row($rez)){
			echo $vrstica[1]. " ";
			array_push($odg, $vrstica[1]);
			array_push($id_odg,$vrstica[0]);
		}
    }
	array_push($vsavpr,$row[1]);
	array_push($vsiodg,$odg);
	array_push($vsiidodg,$id_odg);
    }
    
    
}

echo "<br> PRINTAMO ARRAYE <br>";
print_r ($vsavpr);
echo "<br>";
print_r ($vsiodg);
echo "<br>";
print_r ($vsiidodg);

//file_put_contents("vprasanja.js","var vsavpr= " .$vsavpr.";",FILE_APPEND);
//file_put_contents("vprasanja.js","var vsiid0dg= " .$vsiidodg.";",FILE_APPEND);
//file_put_contents("vprasanja.js","var vsiodg= " .$vsiodg.";",FILE_APPEND);

?>
<script type="text/javascript">
	var vsavpr=<?php echo json_encode($vsavpr);   ?>;
	var vsiodg=<?php echo json_encode($vsiodg);   ?>;
	var vsiidodg=<?php echo json_encode($vsiidodg);   ?>;

</script>



<section id="heading2">
	
        <input  id="izpisi" type="button" class="btn  answer" value="izpisi" />
        <div id= vprasaj></div>
        <form class="form-inline">
            <div id="moznost">
                
            </div>
            
        </form>
        <div id="gumbi" align="center">
            <input  id="nazaj" type="button" class="btn  answer red" value="NAZAJ" />
            <input  id="naprej" type="button" class="btn  answer blue" value="NAPREJ" />
            <input  id="zakljuci" type="button" class="btn  answer blue" value="zakljuci kviz" />
            <!-- <input  id="preveri" type="button" value="preveri" /> -->
        </div>
        <br>
        <div id="drugigumbi" align="center">
            <!-- <input  id="preveri" type="button" value="preveri" /> -->
            <input  id="oceni" type="button" class="btn  answer" value="oceni me!" />
            <input  id="download" type="button" class="btn  answer" value="download!" />
            
        </div>        
        <!--
        <div id=izbris>
            <button  onclick="document.getElementById('link1').click()">Download!</button>
            <a id="link1" href="skripta2.js" download hidden></a>
            <button onclick="document.getElementById('link2').click()">Download!</button>
            <a id="link2" href="stili.css" download hidden></a>
            <button onclick="document.getElementById('link3').click()">Download!</button>
            <a id="link3" href="druga.php" download hidden></a>
            <a onclick="skripta2.js" href="#" download="page.html">Download</a>
        </div>
        -->
        <div id ="napis">
            
        </div>
        <p id = "vnosvsajenega" class="lead"></p>
</section>
    </body>
		
</html>