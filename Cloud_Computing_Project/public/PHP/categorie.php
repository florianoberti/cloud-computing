<?php
session_start();
if (($_GET['categorie']!='Football')&&($_GET['categorie']!='Basketball')&&($_GET['categorie']!='Rugby')){
	echo "<script>window.history.back()</script>";
}

 include("header.php"); 

 ?>





<div class="centre"><h2> <b> <?php echo $_GET['categorie']; ?>    </b></h2>
		<div class="liste_produit">
					<table>
			  <tr>
				<td width=15% class="td_"></td>
				<td width=10% class="td_">ARTICLES</td>
				<td width=45% class="td_">DESCRIPTION</td>
				<td width=10% id="0" style=display:none class="td_">QUANTITÉ RESTANTE</td>
				<td width=5% class="td_">PRIX UNITAIRE </td>
				<td width=15% class=" td_">  QUANTITÉ COMMANDÉ </td>
			  </tr>
			  
 
<?php if (isset ($_GET['categorie'])) 
	
{$cmpt=0;
 foreach ($_SESSION['produits'][$_GET['categorie']] as $produit){
	 
 $cmpt=$cmpt+1;
	  //var_dump($produits[$_GET['categorie']]);
			?>		  
			  <tr>
				<td><div class="zoom"><div class="image"><img src="<?php echo($produit['src']); ?>" alt="" /></div></div></td>
				<td id='ref'><?php echo($produit['ref']); ?>  </td>
				<td><?php echo($produit['description']); ?></td>
				<td id="<?php echo($cmpt); ?>" style=display:none><?php echo($produit['stock']); ?></td>
				<td><?php echo($produit['prix']); ?></td>
				<td>   
					<form  action="ajoutpanier.php?ID=<?php echo $_GET['ID'];?>&pass=<?php echo $_GET['pass'];?>&libproduit=<?php echo($produit['ref']);?>&prix=<?php echo($produit['prix']);?>&cat=<?php echo($_GET['categorie']);?>" method="POST" >
						<input type=button class="moins" value='-' onclick="change_value('-','Q<?php echo($cmpt); ?>','1')"> 
						<input  name="nbr" id='Q<?php echo($cmpt); ?>' id="quantite" class="commande" type=texte readonly value=0  > 
						<input  type=button class="plus" value='+' onclick="change_value('+','Q<?php echo($cmpt); ?>','1')" >  
						<input style="text-align:center" class="commande1"  type=submit name="ajout" value="Ajouter au panier" > 
					</form>
				</td>
			  </tr>
		<?php	  
		
	  }
	  ?>
			   <tr> 
				   <td class="td_"> 

				   </td>  
				   <td class="td_"> 

				   </td> 
				   <td class="td_"> 

				   </td> 
				   <td class="td_"> 
					   <input style="text-align:center"   type=submit class=button value="stock"  onclick="change_view(<?php echo(count($_SESSION['produits'][$_GET['categorie']])) ?>)" > 
				   </td> </tr>
			</table>
		</div>
		</div>
		</div>
<?php }  ?>
		<script src="../js/code_js_categorie.js"></script>
 </body>

 		
 <?php include("footer.php"); ?>