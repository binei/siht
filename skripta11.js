/*
        <?php
			$vprasanje="ddede";
        ?>
        <script type="text/javascript">
        	var vsavprasanja=[{"vprasanje":"de","odgovori":["de","d"],"tocke":[1,0]}];
        		var vsavprasanja= <?php 
        		echo $vprasanje; 
        ?>
        </script>

*/


var vsavprasanja = [];
var vsetocke = [];
var st = 0;
var od = [];
var toc = [];


var shrani = function() {
	if (st == 0) {
		od = [];
		toc = [];
	}
	for (var i = 0; i < st; i++) {
		od[i] = $("#odg" + i).val();
		toc[i] = parseInt($("#V" + i).val());
	}
	od.push($("#odg" + st).val());
	toc.push(parseInt($("#V" + i).val()));
}

var podaj = function() {
	for (var i = 0; i < st; i++) {
		$("#odg" + i).val(od[i]);
		parseInt($("#V" + i).val(toc[i]));
	}
}
	//za stran
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


$(document).ready(function() {

// jQuery methods go here...


var preglejpolja = function() {
	var odgovori = [];
	//tocke sem dodal samo tako za naprejsnje delo
	//naceloma se vse dela z odgovori...
	var tocke = [];
	var vprasanje = $("#vprasanje").val();
	var ok = 1;

	for (var i = 0; i < st; i++) {
		var odg = $("#odg" + i).val();
		var rez = parseInt($("#V" + i).val());
		if (odg != "" && !isNaN(rez)) {
			//console.log("se izvede" + i);
			odgovori.push(odg);
			tocke.push(rez);
			ok = 1;
		}
		else {
			odgovori = [];
			rez = [];
			$("#opozorilo").text("VSA POLJA SO OBVEZNA!!");
			//console.log("neki ni ql");
			ok = 0;
			break;
		}
	}
	if (vprasanje == "" || st < 2) {
		ok = 0;
		$("#opozorilo").text("VSA POLJA SO OBVEZNA!!");
	}
	if (ok == 1) {
		$("#opozorilo").text("");
		$("#vprasanje").val("");
		var podatki = {
			vprasanje: vprasanje,
			odgovori: odgovori,
			tocke: tocke
		};
		var resnicnntocke = {
			tocke: tocke
		};

		vsavprasanja.push(podatki);
		vsetocke.push(resnicnntocke);

		var vprasanja = document.querySelector("#vprasanja");
		vprasanja.innerHTML = '';
		st = 0;

		izpisivprasanja();

	}
}


function vnesiIme() {
	var txt;
	var imekviza = prompt("PROSIM VNESITE ŠE IME KVIZA", "IME KVIZA");
	vsavprasanja.push(imekviza);
}

// document.querySelector("#dodajGumb").addEventListener('click',preglejpolja);
$("#dodajGumb").click(function() {
	preglejpolja();
});



$("#izdelaj").click(function() {
	//console.log("Gumb izdelaj kviz je bil pritisnjen");
	if (vsavprasanja.length >= 1) {
		vnesiIme();
		//window.localStorage.setItem("vsavprasanja", JSON.stringify(vsavprasanja));
		//window.location = "druga.php";

		var proba = JSON.stringify(vsavprasanja);
		//console.log("TO je proba : " + proba);

		//tocke sem naredil samo za naprej, ko bomo locili tocke od vprasanj
		var probaTocke = JSON.stringify(vsetocke);


		$.post("savekviz.php", {
				podatki: proba
			})
			.done(function(data) {
				alert("Data Loaded: " + data);
			})

		.fail(function() {
			alert("error");
		});

		window.location = "druga.php";
	}
	else {
		$("#opozorilo").text("DODATI MORATE VSAJ ENO VPRASANJE!");
	}
});

$("#dodajOdg").click(function() {
	shrani();
	//console.log("Gumb dodaj odgovor je bil pritisnjen");
	var opomniki = document.querySelector("#vprasanja");
	/*
	opomniki.innerHTML += '<br> <div>Vaš odgovor ' + (st + 1) + ' in stevilo tock zanj:</div> <div class="col-xs-5">'+
		'<input type="text" class="form-control" id="odg' + st + '" name="odg' + st + '"  />'+
		'</div> <input type="number" class="form-control" value=0 min="0" id="V' + st + '" style="width: 4em" >';
	*/	
		
		opomniki.innerHTML +='<br><div>' +
		'<div>Vaš odgovor in stevilo tock zanj:</div> '+
		'<div class="col-xs-5">'+
			'<div class="input-group" >'+
				'<span class="input-group-addon" >' + (st+1) + '</span>' +
				'<input type="text" id= "odg'+st + '" class="form-control" aria-describedby="basic-addon1">'+
			'</div>'+ 
			
		'</div>'+
		'<input type="number" class="form-control" value=0 min="0" id="V' + st + '" style="width: 4em" ></div>';
	
	podaj();
	st++;
});

$("#odstraniOdg").click(function() {
	//console.log("Gumb dodaj odgovor je bil pritisnjen");
	var opomniki = document.querySelector("#vprasanja");
	opomniki.innerHTML = '';
	st = 0;
	$("#opozorilo").text("");
	$("#vprasanje").val("");

});

//tudi ta je neuporabna,saj sem zakomentiral gumb
/*
$("#poizkusi").click(function() {
	for(var i=1; i<=st; i++){
		console.log($("#odg" + i).val() + " " +$("#V" + i).val());
	}
});
*/
    
});