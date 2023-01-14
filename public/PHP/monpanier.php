<?php
 if ( empty(session_id()) ) session_start(); 
 include("header.php"); 
?>
 <script src="../js/code_js_categorie.js"></script>
		<div class="centre"><h2> <b>MON PANIER</b></h2>
		
		<?php
//var_dump($_SESSION['panier'][$_GET['ID']-1]);
$cmp=0;
if((isset($_SESSION['panier'][$_GET['ID']-1]['libelleProduit']))&&(count($_SESSION['panier'][$_GET['ID']-1]['libelleProduit'])!=0)){
	?>
	<div class="liste_produit">
	<table>
		<tr>
			<td width=10% class='td_'></td>
			<td width=10% class='td_'>ARTICLES</td>
			<td width=10% class='td_'>PRIX UNITAIRE</td>
			<td width=10% class='td_'>QUANTITÉ COMMANDÉ</td>
			<td width=10% class='td_'>PRIX TOTAL</td>
			<td width=10% class='td_'></td>
		 </tr>
			  
	<?php		
	 
	 
	foreach ($_SESSION['panier'][$_GET['ID']-1]['libelleProduit'] as $panier){
		if(isset($_SESSION['panier'][$_GET['ID']-1]['libelleProduit'][$cmp])){
			$nom=$_SESSION['panier'][$_GET['ID']-1]['libelleProduit'][$cmp];
			$cat=$_SESSION['panier'][$_GET['ID']-1]['catProduit'][$cmp];
			
			?>
				<tr>
					<td><div class="zoom"><div class="image"><img src="<?php  
						echo $_SESSION['produits'][$cat][$nom]['src'];
					?>"></div></div>
					</td>
					<td id="ref"><?php echo $_SESSION['panier'][$_GET['ID']-1]['libelleProduit'][$cmp];?></td>
					<td><?php echo $_SESSION['panier'][$_GET['ID']-1]['prixProduit'][$cmp];?></td>
					<td><?php 
					
					echo $_SESSION['panier'][$_GET['ID']-1]['qteProduit'][$cmp];
					
					
					
					?></td>
					<td><?php echo $_SESSION['panier'][$_GET['ID']-1]['prixProduit'][$cmp]*$_SESSION['panier'][$_GET['ID']-1]['qteProduit'][$cmp];?>€</td>
					<td class="img_suppr"><img src="../images/suppr.png" onclick="window.location=('suppr_panier.php?ID=<?php echo $_GET['ID']?>&pass=<?php echo $_GET['pass']?>&catproduit=<?php echo $cat?>&nomproduit=<?php echo $nom?>')"></td>
				</tr>
			<?php
			
			$cmp=$cmp+1;
	}
}
echo "</table></div>";
}
else{
	echo "<p> Votre panier est vide pour le moment</p>";
}


?>
		</div>
		</div>
 
		
 

 		
 <?php include("footer.php"); ?>
    </body>
</html>