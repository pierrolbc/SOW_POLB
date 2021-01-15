
/* Formulaire de contact : compteur de caractère restant */
$('#message').keyup(function(){
	var nombreCaractere = $(this).val().length;
	
	//On soustrait le nombre limite au nombre de caractère existant
	var nombreCaracteres = 500 - nombreCaractere;
	
	
	var msg = '' + nombreCaracteres + ' ';
	$('#compteur').text(msg);
	
	// on écrit le nombre de caractère en rouge s'il est inférieur à 0
	// la limite est donc dépassée
	if(nombreCaractere <0) { $('#compteur').addClass("incorrect");}
	else{$('#compteur').removeClass("incorrect");}
});