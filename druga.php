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
		<script src="skripta22.js"></script>

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
			<div class="row">
				<div class="col-sm-4">
					<p class="uniC"><img src="img/unicredit.png" class="logo-unicredit"></p>
				</div>
				<div class="col-sm-4 col-sm-offset-4">
					<p class="azi"><img src="img/azimut-logo.png" class="logo-azimut"></p>
				</div>
			</div>
		</section>

		<header class="intro-header" style="background-image: url('img/hero.jpg'); background-position: center top">
			<div class="row">
				<div class="col-md-10">
					<div class="hero-content">
						<h1 class="zanima_me">zanima me,</h1>
						<h4 class="koliko_vem">koliko vem.</h4>
						<h6 id="naslov" class="nagradni_kviz">Kviz za preverjanje znanja</h6>
					</div>
				</div>
			<div class="pasica">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="col-xs-12 stevilkeV" id=krogci>
							</div>  
						</div>
					</div>
				</div>    
			</div>
		</header>
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
$kvizID = 28;

//ce zelite zadnji vneseni kviz odkomentirajte spodnje vrstice 
/*
$sq="SELECT id FROM kvizi WHERE id=(SELECT MAX(id) FROM kvizi)";
if ($rezu=mysqli_query($db,$sq)){
	while ($vrsta=mysqli_fetch_row($rezu)){
		//echo $vrstica[1]. " ";
		$kvizID=$vrsta[0];
	}
}
*/

$ime="";
$sq="SELECT  ime_kviza FROM kvizi WHERE id = $kvizID ";
if ($rezu=mysqli_query($db,$sq)){
	while ($vrsta=mysqli_fetch_row($rezu)){
		$ime=$vrsta[0];
	}
}




$sql="SELECT id, vprasanje FROM vprasanja WHERE id_kviza=$kvizID";
if ($result=mysqli_query($db,$sql)){
	while ($row=mysqli_fetch_row($result)){	
		$odg = array();
		$id_odg=array();
		$vp=array();
		
		$vpr="SELECT id, odgovor FROM odgovori WHERE id_vprasanja = $row[0] ";
		if ($rez=mysqli_query($db,$vpr)){
			while ($vrstica=mysqli_fetch_row($rez)){
				array_push($odg, $vrstica[1]);
				array_push($id_odg,$vrstica[0]);
			}
		}
		array_push($vsavpr,$row[1]);
		array_push($vsiodg,$odg);
		array_push($vsiidodg,$id_odg);
	}

}

file_put_contents("vprasanja.js", "", LOCK_EX);
file_put_contents("vprasanja.js","var vsavpr= " .json_encode($vsavpr).";\n",FILE_APPEND | LOCK_EX);
file_put_contents("vprasanja.js","var vsiidodg= " .json_encode($vsiidodg).";\n",FILE_APPEND | LOCK_EX);
file_put_contents("vprasanja.js","var vsiodg= " .json_encode($vsiodg).";\n",FILE_APPEND | LOCK_EX);
file_put_contents("vprasanja.js","var ime= " .json_encode($ime).";\n",FILE_APPEND | LOCK_EX);

?>

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
			</div>
			
			<br>
			
			<div id="drugigumbi" align="center">
				<input  id="oceni" type="button" class="btn  answer" value="oceni me!" />
				<input  id="download" type="button" class="btn  answer" value="download!" />
			</div>        
			<div id ="napis">
			
			</div>
			<p id = "vnosvsajenega" class="lead"></p>
		</section>
	</body>

</html>