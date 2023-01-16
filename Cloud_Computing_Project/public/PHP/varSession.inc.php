<?php 

if (!file_exists("donnees.json")){
	echo "le fichier n existe pas , on va le créer et lui importer des données";
$_SESSION['produits'] = array(
'Football' => array
						(
							'Ballon'=> array		
							(
								'src'=>'../images/ballon_foot.png',
								'ref'=>'Ballon de football',
								'description'=>'Ballon résistant, convient à tout type de terrain, à tout type de joueur',
								'stock'=>'20',
								'prix'=>'15€'
								
							),
							'Crampons'=>array		
							(
								'src'=>'../images/crampon_foot.png',
								'ref'=>'Crampons de football',
								'description'=>'Crampons pour tout type de joueur, terrain préférentiel : synthétique, mais convient à tout type de terrain',
								'stock'=>'10',
								'prix'=>'75€'
								
							),
							'Chaussettes'=>array		
							(
								'src'=>'../images/chaussette_foot.png',
								'ref'=>'Chaussettes de football',
								'description'=>'Chaussettes confortables pour jouer avec des crampons',
								'stock'=>'25',
								'prix'=>'8€'
								
							),
							'Maillot'=>array		
							(
								'src'=>'../images/maillot_foot.png',
								'ref'=>'Maillot de football',
								'description'=>'Maillots de foot avec système anti-transipirant pour le confort du joueur',
								'stock'=>'22',
								'prix'=>'55€'
								
							),
							'Cages'=>array		
							(
								'src'=>'../images/Cage_foot.png',
								'ref'=>'Cages de football',
								'description'=>'Cages de foot pour s\'entrainer',
								'stock'=>'8',
								'prix'=>'500€'
								
							),
						),
'Basketball' => array
						(
							'Ballon'=> array		
							(
								'src'=>'../images/ballon_basket.png',
								'ref'=>'Ballon de basketball',
								'description'=>'Ballon résistant, convient à tout type de terrain, à tout type de joueur',
								'stock'=>'28',
								'prix'=>'11€'
								
							),
							'Chaussures'=>array		
							(
								'src'=>'../images/chaussure_basket.png',
								'ref'=>'Chaussures de basketball',
								'description'=>'Chaussures pour tout type de joueur, terrain préférentiel : terrain en salle',
								'stock'=>'24',
								'prix'=>'80€'
								
							),
							'Chaussettes'=>array		
							(
								'src'=>'../images/chaussette_basket.png',
								'ref'=>'Chaussettes de basketball',
								'description'=>'Chaussettes confortables pour jouer au basketball',
								'stock'=>'50',
								'prix'=>'8€'
								
							),
							'Maillot'=>array			
							(
								'src'=>'../images/maillot_basket.png',
								'ref'=>'Maillot de basketball',
								'description'=>'Maillot de basketball avec système anti-transipirant pour le confort du joueur',
								'stock'=>'24',
								'prix'=>'55€'
								
							),
							'Panier'=>array			
							(
								'src'=>'../images/panier_basketball.png',
								'ref'=>'Panier de basketball',
								'description'=>'Panier de basketball pour s\'entrainer',
								'stock'=>'4',
								'prix'=>'70€'
								
							),
						),
'Rugby' => array
						(
							'Ballon'=>array			
							(
								'src'=>'../images/ballon_rugby.png',
								'ref'=>'Ballon de rugby',
								'description'=>'Ballon résistant, convient à tout type de terrain, à tout type de joueur',
								'stock'=>'18',
								'prix'=>'12€'
								
							),
							'Crampons'=>array			
							(
								'src'=>'../images/crampon_rugby.png',
								'ref'=>'Crampons de rugby',
								'description'=>'Crampons pour tout type de joueur, terrain préférentiel : naturel, ne convient pas à tout type de terrain',
								'stock'=>'18',
								'prix'=>'65€'
								
							),
							'Chaussettes'=>array			
							(
								'src'=>'../images/chaussettes_rugby.png',
								'ref'=>'Chaussettes de rugby',
								'description'=>'Chaussettes confortables pour jouer avec des crampons',
								'stock'=>'25',
								'prix'=>'8€'
								
							),
							'Maillot'=>array			
							(
								'src'=>'../images/maillot_rugby.png',
								'ref'=>'Maillot de rugby',
								'description'=>'Maillot de rugby avec système anti-transipirant pour le confort du joueur',
								'stock'=>'27',
								'prix'=>'45€'
								
							),
							'Poteaux'=>array			
							(
								'src'=>'../images/poto_rugby.png',
								'ref'=>'Poteaux de rugby',
								'description'=>'Poteaux de rugby pour s\'entrainer',
								'stock'=>'21',
								'prix'=>'65€'
								
							),
						),
);
file_put_contents('donnees.json', json_encode($_SESSION['produits']));} 


else{

if ($ouverture_fichier=fopen('donnees.json',"r")){


$_SESSION['produits']=json_decode(file_get_contents('donnees.json'), true);
	
 fclose($ouverture_fichier);
}
else { echo " le fichier n\' a pas été ouvert";}




}














?>