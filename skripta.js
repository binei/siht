
var vsavprasanja=[];
var vsetocke=[];
var st = 1;

//za stran
var izpisivprasanja=function(){

	for (var vpr in vsavprasanja) {
		var tock=0;
		console.log(vsavprasanja[vpr].vprasanje);
		//for(var i=0; i<vsavprasanja[vpr].odgovori.length; i++){
			console.log("odgovori: "+vsavprasanja[vpr].odgovori + "tocke "+vsavprasanja[vpr].tocke);
		//}
		for(var i=0; i<vsavprasanja[vpr].tocke.length; i++){
			tock+=parseInt(vsavprasanja[vpr].tocke[i]);
		}
		console.log("vseh tock je : " + tock)
	}
}


$(document).ready(function(){

   // jQuery methods go here...
  
   
   var preglejpolja = function(){
   	var odgovori=[];
   	
   	//tocke sem dodal samo tako za naprejsnje delo
   	//naceloma se vse dela z odgovori...
   	var tocke=[];
   	var vprasanje = $("#vprasanje").val();
   	var ok =1;
   	
   	for(var i=1; i<st; i++){
		var odg = $("#odg" + i).val();
		var rez = parseInt($("#V" + i).val());
		if(odg != "" && !isNaN(rez) ){
			console.log("se izvede" + i);
			odgovori.push(odg);
			tocke.push(rez);
			ok = 1;
		}
		else{
			odgovori=[];
			rez = [];
			$("#opozorilo").text("VSA POLJA SO OBVEZNA!!");
			console.log("neki ni ql");
			ok = 0;
			break;
		}
	}
	if(vprasanje == "" || st < 2){
   		ok =0;
   		$("#opozorilo").text("VSA POLJA SO OBVEZNA!!");
   	}
	if(ok == 1){
		$("#opozorilo").text("");
		$("#vprasanje").val("");
	    var podatki = {vprasanje: vprasanje,odgovori: odgovori, tocke: tocke };
	    var resnicnntocke={tocke:tocke};
	    
	    vsavprasanja.push(podatki);
	    vsetocke.push(resnicnntocke);
	    
		var vprasanja = document.querySelector("#vprasanja");
		vprasanja.innerHTML= '';
		st = 1; 
	    
	    izpisivprasanja();
		
	}
}

   // document.querySelector("#dodajGumb").addEventListener('click',preglejpolja);
    $("#dodajGumb").click(function() {
      preglejpolja();  
    });
    

    
    $("#izdelaj").click(function() {
		    	
    	
    	console.log("Gumb izdelaj kviz je bil pritisnjen");
    	if(vsavprasanja.length >= 1){
	    	//window.localStorage.setItem("vsavprasanja", JSON.stringify(vsavprasanja));
	    	//window.location = "druga.php";
	    	
	    	
	    	
	    	
	    	var proba=JSON.stringify(vsavprasanja);
	    	console.log("TO je proba : " + proba);
	    	
	    	//tocke sem naredil samo za naprej, ko bomo locili tocke od vprasanj
	    	var probaTocke=JSON.stringify(vsetocke);
	    	/*
	    	var jqxhr = $.post( "savekviz.php", function() {
			  alert( "success" );
			})
			  .done(function() {
			    alert( "second success" );
			  })
			  .fail(function() {
			    alert( "error" );
			  })
			  .always(function() {
			    alert( "finished" );
			  });
			  
			  */
			  
			  $.post( "savekviz.php",{podatki:proba})
				  .done(function( data ) {
				    alert( "Data Loaded: " + data );
				  })
				  
				  .fail(function() {
			    alert( "error" );
			  });
			  
			window.location = "druga.php";
 

    	}
    	else{
    		$("#opozorilo").text("DODATI MORATE VSAJ ENO VPRASANJE!");
    	}
    });
    
    $("#dodajOdg").click(function() {
    	console.log("Gumb dodaj odgovor je bil pritisnjen");
    	var opomniki = document.querySelector("#vprasanja");
		opomniki.innerHTML += 'Vaš odgovor '+ st+  ' in stevilo tock zanj: <input id="odg'+ st +'" name="odg'+ st +'"  /> <input type="number" value=0 min="0" id="V'+ st +'" style="width: 4em" ><br>';
    	st++;

    });
    $("#odstraniOdg").click(function() {
		console.log("Gumb dodaj odgovor je bil pritisnjen");
		var opomniki = document.querySelector("#vprasanja");
		opomniki.innerHTML ='';
		st = 1;

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