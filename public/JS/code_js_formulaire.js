
/***************************************************/
var formValid = document.getElementById('bouton');
var nom = document.getElementById('nom');
var nom_ = document.getElementById('nom_');
var nomValid = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;
var prenom = document.getElementById('prenom');
var prenom_ = document.getElementById('prenom_');
var date_actuelle = new Date();
var annee_18= parseInt(date_actuelle.getFullYear())-18;
var mois_18= parseInt(date_actuelle.getMonth())+1;
var jour_18 =parseInt(date_actuelle.getDate());


var date_= document.getElementById('date_');

formValid.addEventListener('click', validation);

function validation(event){
	var date_recup= document.getElementById("date_recup").value;
	var annee_r= parseInt(date_recup[0])*1000+parseInt(date_recup[1])*100+parseInt(date_recup[2])*10+parseInt(date_recup[3])*1;
	var mois_r= parseInt(date_recup[5])*10+parseInt(date_recup[6])*1;
	var jour_r= parseInt(date_recup[8])*10+parseInt(date_recup[9])*1;
	prenom_.textContent ='';
	nom_.textContent ='';
	date_.textContent ='';
	if(nomValid.test(nom.value)== false){
		event.preventDefault();
		nom_.textContent = 'Ne doit contenir que des lettres, majuscule autorisé uniquement pour la première lettre, taille minimum de 2 caractères';
		
	}
	if(nomValid.test(prenom.value)== false){
		event.preventDefault();
		
		prenom_.textContent = 'Ne doit contenir que des lettres, majuscule autorisé uniquement pour la première lettre, taille minimum de 2 caractères ';
		
	}
	
	if(annee_18<annee_r){
		event.preventDefault();
		date_.textContent = 'Vous devez avoir plus de 18 ans';
		
	}else{
		if(annee_r==annee_18){
			if(mois_18<mois_r){
				event.preventDefault();
				date_.textContent = 'Vous devez avoir plus de 18 ans';
				
			}else{
				if(mois_r==mois_18){
					if(jour_18<jour_r){
						event.preventDefault();
						date_.textContent = 'Vous devez avoir plus de 18 ans';
						
					}
				}
			}
		}
	}

}