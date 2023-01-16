const prix_unitaire = document.getElementById("0");

function change_view(nb_article){ 

if (prix_unitaire.style.display=='none'){ 
for (h=0;h<=nb_article;h++){ 
document.getElementById(h).style.display='table-cell'; }   /* met toute la colonne de type quantité restante en visible si la colonne n'est pas visible de base */

prix_unitaire.style.display="table-cell";}
else{
	for (h=0;h<=nb_article;h++){ 
	document.getElementById(h).style.display='none';       /* met toute la colonne de type quantité restante en non visible si la colonne est visible de base */
}
	 prix_unitaire.style.display="none";}
								}



function change_value(signe,id,nb_article){
	const val=document.getElementById(id);
	l=document.getElementById(id.slice(1));
	if (signe=='+'){
		if ((val.value)<(parseInt(l.innerHTML))){
		val.value++;}
			else{ 
			 if (prix_unitaire.style.display=='none'){			
				change_view(nb_article);
	alert("stock indisponible");
	}
	
				}
	
	
	
	}
			
			
			
	else{ if (val.value>0) { val.value= val.value-1;}
	
	
	}
}

function ajout_panier(id){
	var objet=document.getElementById('ref');
	var q=document.getElementById('quantite');
	var $_SESSION='<%Session["panier"]%>'
	for($i=0;$i<$_SESSION[id]['libelleProduit'].length;$i++){
		if($_SESSION[id]['libelleProduit'][$i]=object){
			$_SESSION[id]['qteProduit'][$i]=$_SESSION[id]['qteProduit'][$i]+q;
		}
	}
	$_SESSION[id]['libelleProduit'][$i]=objet;
	$_SESSION[id]['qteProduit'][$i]=q;
	
}

function aff_panier(id,$tab){
	console.log($tab['panier']);
}