<?php
    if ( empty(session_id()) ) session_start(); 
    
	if (!isset($_GET['ID'])||(!isset($_GET['pass']))||(($_GET['ID']=='')||($_GET['pass']==''))){
		header('location:index.php?ID=0&pass=0');
	}
	if ($_GET['ID']!=0){
		if ($ouverture_fichierbis=fopen('PHP/utilisateurs.txt',"r")){

    		$data = file('PHP/utilisateurs.txt'); 	
		    $line = array();
			$i=0;
		    foreach( $data as $line){
		        if(!empty($line)){	  
		            $final=explode(' ', $line);
					$tableau[$i]=$final;
            //var_dump($final);
		   		}
			$i++;
    		}     
 		fclose($ouverture_fichierbis);
	}
	else { 
		echo " le fichier n\' a pas été ouvert";
	}
	for($i=0;$i<count($tableau);$i++){
			if(htmlentities($tableau[$i][0])==$_GET['ID']){
				$nom_co=htmlentities($tableau[$i][1]);
				if(htmlentities($tableau[$i][2])!=$_GET['pass']){
					echo "<script>window.history.back()</script>";
				}
			}

	}
	}
	if(isset($_GET['envoie'])){
		if($_GET['envoie']==1){
			echo "<script>alert('Votre mail a bien été envoyé')</script>";
			
		}
		else{
			echo "<script>window.history.back()</script>";
		}
	}
	if(isset($_GET['msg'])){
		if($_GET['msg']==1){
			echo "<script>alert('Votre compte est bien enregistré')</script>";
			
		}
		else{
			if($_GET['msg']==2){
				echo "<script>alert('Vous devez être connecté pour mettre des produits dans votre panier')</script>";
			}
			else{
				echo "<script>window.history.back()</script>";
			}
		}
	}
	unset($_SESSION['panier']);
	if (!isset($_SESSION['panier'])){
		
	
		$_SESSION['panier']=array();
		$_SESSION['panier']['ID']=array();
		$_SESSION['panier']['ID']['catProduit'] = array();
		$_SESSION['panier']['ID']['libelleProduit'] = array();
		$_SESSION['panier']['ID']['qteProduit'] = array();
		$_SESSION['panier']['ID']['prixProduit'] = array();
	}
	 
?> 
<head>
    <meta charset="utf-8" />
	<link rel="stylesheet" href="HTML-CSS/style.css" />
    <title>Sport's Market</title>
</head>
	
	
	<body>
		<header>
		<div class="haut">
			<h1>Sport's Market</h1>
			
			<ul class="menu1">
				
				
				<li onclick="window.location.href=('index.php?ID=<?php echo $_GET['ID'];?>&pass=<?php echo $_GET['pass'];?>')"><a>Accueil</a></li>
				<li onclick="window.location=('PHP/categorie.php?categorie=Football&ID=<?php echo $_GET['ID'];?>&pass=<?php echo $_GET['pass'];?>')"><a>Football</a></li>
				<li onclick="window.location=('PHP/categorie.php?categorie=Basketball&ID=<?php echo $_GET['ID'];?>&pass=<?php echo $_GET['pass'];?>')"><a>Basketball</a></li>
				<li onclick="window.location=('PHP/categorie.php?categorie=Rugby&ID=<?php echo $_GET['ID'];?>&pass=<?php echo $_GET['pass'];?>')"><a>Rugby</a></li>
				<li onclick="window.location.href=('PHP/contact.php?ID=<?php echo $_GET['ID'];?>&pass=<?php echo $_GET['pass'];?>')"><a>Contact</a></li>
				
		</ul>
		</div>
			<ul class="menu2">
				<?php 
				if ($_GET['ID']=='0'){
				echo '<li onclick="window.location=(\'PHP/connexion.php?ID=0&pass=0\')"><a >Me connecter</a></li>';}
				else {
					echo '<li onclick="window.location=(\'index.php\')"><a >Me déconnecter</a></li><br>
					<li onclick="window.location=(\'PHP/monpanier.php?ID='.$_GET['ID'].'&pass='.$_GET['pass'].'\')"><a>Panier</a></li>';
				}?>
		</ul>
		
		<p class="img_site"><img src="images/img_principale.png" alt="" /></p>
		</header>
	
	
	<div class="regroupement_centre">
	<div class="centre_gauche">
		<p align='center'>Nos produits :</p>
		<ul>

			<li><a href="PHP/categorie.php?categorie=Football&ID=<?php echo $_GET['ID'];?>&pass=<?php echo $_GET['pass'];?>">Football</a></li>
			<li><a href="PHP/categorie.php?categorie=basketball&ID=<?php echo $_GET['ID'];?>&pass=<?php echo $_GET['pass'];?>">Basketball</a></li>
			<li><a href="PHP/categorie.php?categorie=rugby&ID=<?php echo $_GET['ID'];?>&pass=<?php echo $_GET['pass'];?>">Rugby</a></li>
			<li><a href="PHP/contact.php&ID=<?php echo $_GET['ID'];?>&pass=<?php echo $_GET['pass'];?>">Contact</a></li>
			
		
			
		</ul>
		</div>




		<div class="centre"><h2>Bienvenue <?php if ($_GET['ID']!=0){echo $nom_co;}?> sur notre site : <b>Market Sport</b></h2><img src="images/img_principale.png" alt="" />
		<p>Si vous avez besoin de conseil, appelez le 00 00 00 00 00. Ceci n'est pas un SAV.</p>
		
	
		</div>
		
		
		
		
		
		
		<!-- laissez la div fermante car on l'importe du header qui ouvre une div  -->
		</div>
		
<?php 

 include("PHP/footer.php"); ?>


