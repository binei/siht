//var vsavprasanja = JSON.parse(window.localStorage.getItem("vsavprasanja"));

var vsavprasanja = [];


for (var i = 0; i < vsavpr.length; i++) {
	var idod = [];
	for (var j = 0; j < vsiidodg[i].length; j++) {
		idod.push(parseInt(vsiidodg[i][j]));
	}

	var podatki = {
		vprasanje: vsavpr[i],
		odgovori: vsiodg[i],
		tocke: idod
	};
	console.log(podatki);
	vsavprasanja.push(podatki);
	console.log(vsavpr[i]);
}


var vasiodg = Array(vsavprasanja.length).fill(-1);
var vasiodgid = Array(vsavprasanja.length).fill(-1);

var trenutnoVprasanje = 0;
var stvprasanj = vsavprasanja.length;
//document.getElementById('oceni').style.visibility = "hidden";

//za stran

var krogci = function() {
	var prostor = document.querySelector("#krogci");
	for (var i = 1; i <= vsavprasanja.length; i++) {
		prostor.innerHTML += '<div class="inactive-number stevilkaV" id="stevilka' + i + '">' + i + '</div> '


		if (vasiodg[i] != -1) {
			$(".stevilka" + i).addClass("inactive-number active-number stevilkaV");
		}

	}
	obarvaj_krogce();
}

var obarvaj_krogce = function() {

	//ce zbrises if in spodnjo vrstico bojo ostale prizgane ze izpolnejne
	if (trenutnoVprasanje != 0)
		document.getElementById("stevilka" + (trenutnoVprasanje)).className = "inactive-number stevilkaV";

	if (trenutnoVprasanje != vsavprasanja.length - 1)
		document.getElementById("stevilka" + (trenutnoVprasanje + 2)).className = "inactive-number stevilkaV";

	document.getElementById("stevilka" + (trenutnoVprasanje + 1)).className = "inactive-number active-number stevilkaV";

}


var izpisivprasanja = function() {
	for (var vpr in vsavprasanja) {
		var tock = 0;
		console.log(vsavprasanja[vpr].vprasanje);
		//for(var i=0; i<vsavprasanja[vpr].odgovori.length; i++){
		console.log("odgovori: " + vsavprasanja[vpr].odgovori + "tocke " + vsavprasanja[vpr].tocke);
		//}
		for (var i = 0; i < vsavprasanja[vpr].tocke.length; i++) {
			tock += parseInt(vsavprasanja[vpr].tocke[i]);
		}
		console.log("vseh tock je : " + tock)
	}
}

var zamegligumbe = function() {
	
	document.getElementById("naprej").disabled = false;
	document.getElementById("naprej").value = "NAPREJ";
	document.getElementById("nazaj").disabled = false;
	if (trenutnoVprasanje <= 0) {
		document.getElementById("nazaj").disabled = true;
	}
	if (trenutnoVprasanje == vsavprasanja.length - 1) {
		//document.getElementById("naprej").disabled = true;
		document.getElementById("naprej").value = "ZAKLJUCI KVIZ";
	}

}

var mozniodgovori = function() {
	var vpras = document.querySelector("#vprasaj");
	var odg = document.querySelector("#moznost");

	odg.innerHTML = '';
	vpras.innerHTML = '<h2>' + (trenutnoVprasanje + 1) + '. ' + vsavprasanja[trenutnoVprasanje].vprasanje + '</h2>';

	for (var i = 0; i < vsavprasanja[trenutnoVprasanje].odgovori.length; i++) {
		odg.innerHTML += '<div class="radio" id="gumbki"> <label><input type="radio" id="O' + i + '"name="optionsRadios" >' + vsavprasanja[trenutnoVprasanje].odgovori[i] +
			'  </label> </div><br> '
			/*
		 <label>
    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
    Option one is this and that&mdash;be sure to include why it's great
  </label>
  */
	}

	if (vasiodg[trenutnoVprasanje] != -1)
		$("#O" + vasiodg[trenutnoVprasanje]).prop("checked", true);
}


var dl = function(url) {
	// Get file name from url.
	var filename = url.substring(url.lastIndexOf("/") + 1).split("?")[0];
	var xhr = new XMLHttpRequest();
	xhr.responseType = 'blob';
	xhr.onload = function() {
		var a = document.createElement('a');
		a.href = window.URL.createObjectURL(xhr.response); // xhr.response is a blob
		a.download = filename; // Set the file name.
		a.style.display = 'none';
		document.body.appendChild(a);
		a.click();
	}
	xhr.open('GET', url);
	xhr.send();
}

//ko vtipkas potegnidol() v consolo se zdownloadajo fajli...
var potegnidol = function() {
	dl("skripta22.js");
	dl("druga.php");
	dl("stili2.css");
	dl("vprasanja.js");
}

$(document).ready(function() {


	$("#naslov").text(ime);

	mozniodgovori();
	krogci();
	document.getElementById("nazaj").disabled = true;

	//document.getElementById('#oceni').style.visibility = 'hidden';
	var checkradio = function() {
		for (var i = 0; i < vsavprasanja[trenutnoVprasanje].odgovori.length; i++) {
			//console.log("grem ces");
			if ($("#O" + i).is(':checked')) {
				return i;
			}
		}
		return -1;
	}

	var stTock = function() {
		var tock = 0;
		//to je pripravljeno za v naprej.... v arrayu tocke bodo id-ji posameznih odgovorov pri vprasanjih, tako bom s to funkcijo
		//izvedel kateri id.ji so bili izbrani in nato je v PHP potrebno poslati le id array (spodaj) ter tam poracunati koliko tock so vredni....
		var id = [];
		for (var i = 0; i < vsavprasanja.length; i++) {
			tock += vsavprasanja[i].tocke[vasiodg[i]];
			id.push(vsavprasanja[i].tocke[vasiodg[i]]);
		}
		return tock;
	}




	$("#izpisi").click(function() {
		izpisivprasanja();
	});

	$("#naprej").click(function() {

		if (trenutnoVprasanje != -1 && vasiodg[trenutnoVprasanje] == -1) {
			$("#vnosvsajenega").text("izbrati morate en odgovor!");
		}

		if (trenutnoVprasanje != -1) {
			if (checkradio() != -1)
				vasiodg[trenutnoVprasanje] = checkradio();
			vasiodgid[trenutnoVprasanje] = vsiidodg[trenutnoVprasanje][checkradio()];
		}
		if (trenutnoVprasanje == -1 || vasiodg[trenutnoVprasanje] != -1) {
			$("#vnosvsajenega").text("");

			if (trenutnoVprasanje < stvprasanj - 1) {
				trenutnoVprasanje++;
			}
			else{
				zakljuci();
			}
			
			obarvaj_krogce();
			mozniodgovori();

			zamegligumbe();
		}
	});

	$("#nazaj").click(function() {

		$("#vnosvsajenega").text("");
		if (checkradio() != -1)
			vasiodg[trenutnoVprasanje] = checkradio();
		vasiodgid[trenutnoVprasanje] = vsiidodg[trenutnoVprasanje][checkradio()];

		if (trenutnoVprasanje > 0) {
			trenutnoVprasanje--;
		}
		obarvaj_krogce();
		mozniodgovori();
		zamegligumbe();
	});

	//tudi ta funkcija je za stran
	/*
    $("#preveri").click(function(){
		var napis = document.querySelector("#napis");
		napis.innerHTML = '<p> izbran imaste ' + checkradio()  +' gumb </p>';
    });
   */

	//tudi oceni ne bo potrebna in potrebno je odstraniti tudi gumb oceni    
	$("#oceni").click(function() {
		console.log("vase stevilo tock je " + stTock() + " hvala ker ste resili kviz");
	});

	var preveriKonec = function() {
		for (var i = 0; i < vasiodg.length; i++) {
			if (vasiodg[i] == -1) return 0;
		}
		return 1;
	}

	$("#download").click(function() {
		document.getElementById('download').style.visibility = "hidden";
		document.getElementById('oceni').style.visibility = "hidden";
		document.getElementById('izpisi').style.visibility = "hidden";
		potegnidol();
	});

	function zakljuci () {
		if (trenutnoVprasanje == vsavprasanja.length - 1 && checkradio() != -1) {
			vasiodg[trenutnoVprasanje] = checkradio();
			vasiodgid[trenutnoVprasanje] = vsiidodg[trenutnoVprasanje][checkradio()];
		}
		else {
			vasiodg[trenutnoVprasanje] = checkradio();
			vasiodgid[trenutnoVprasanje] = vsiidodg[trenutnoVprasanje][checkradio()];
		}

		if (preveriKonec()) {
			var proba = JSON.stringify(vasiodgid);
			window.location.href = "ocenikviz.php?podatki=" + proba;

		}
		else {
			$("#vnosvsajenega").text("vsi odgovori morajo biti izpolnjeni!");
		}
	};

	/* 
    $("#link1").click(function(){
		$("#myBtn").disabled = true;
    });*/
});