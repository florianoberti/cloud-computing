<?php 

	include("varSession.inc.php");

	if (!isset($_GET['ID'])||(!isset($_GET['pass']))){
		header('location:../index.php?ID=0&pass=0');
	}
	if ($_GET['ID']!=0){
		if ($ouverture_fichierbis=fopen('utilisateurs.txt',"r")){

			$data = file('utilisateurs.txt'); 	
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
				if(htmlentities($tableau[$i][2])!=$_GET['pass']){
					echo "<script>window.history.back()</script>";
				}
			}
	}
	}
?>

<head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="../HTML-CSS/style.css" />
        <title>Sport's Market</title>
</head>
	<body>
		<header >
		<div class="haut">
			<h1>Sport's Market</h1>
			<ul class="menu1">
				<li onclick="window.location=('../index.php?ID=<?php echo $_GET['ID'];?>&pass=<?php echo $_GET['pass'];?>')"><a>Accueil</a></li>
				<li onclick="window.location=('categorie.php?categorie=Football&ID=<?php echo $_GET['ID'];?>&pass=<?php echo $_GET['pass'];?>')"><a>Football</a></li>
				<li onclick="window.location=('categorie.php?categorie=Basketball&ID=<?php echo $_GET['ID'];?>&pass=<?php echo $_GET['pass'];?>')"><a>Basketball</a></li>
				<li onclick="window.location=('categorie.php?categorie=Rugby&ID=<?php echo $_GET['ID'];?>&pass=<?php echo $_GET['pass'];?>')"><a>Rugby</a></li>
				<li onclick="window.location=('contact.php?ID=<?php echo $_GET['ID'];?>&pass=<?php echo $_GET['pass'];?>')"><a>Contact</a></li>
		</ul>
		</div>
			<ul class="menu2">
			<?php 
				if ($_GET['ID']=='0'){
				echo '<li onclick="window.location=(\'connexion.php?ID=0&pass=0\')"><a >Me connecter</a></li>';}
				else {
					echo '<li onclick="window.location=(\'../index.php\')"><a >Me déconnecter</a></li><br>
					<li onclick="window.location=(\'monpanier.php?ID='.$_GET['ID'].'&pass='.$_GET['pass'].'\')"><a>Panier</a></li>';
				}?>
		</ul>
		
		<p class="img_site"><img src="../images/img_principale.png" alt="" /></p>
		</header>
	
	
	<div class="regroupement_centre">
	<div class="centre_gauche">
		<p align='center'>Nos produits :</p>
		<ul>
	<?php while ($nom_cat = current($_SESSION['produits'])){ ?>
	<li><a href="categorie.php?categorie=<?php $save=key($_SESSION['produits']); echo ($save); next($_SESSION['produits']); ?>&ID=<?php echo $_GET['ID'];?>&pass=<?php echo $_GET['pass'];?>"><?php echo ($save);}?></a></li>
			
			<li><a href="contact.php?ID=<?php echo $_GET['ID'];?>&pass=<?php echo $_GET['pass'];?>">Contact</a></li>
			
		</ul>
		</div>
	