<?php 
session_start();


 include("header.php"); 

 ?> 



<div class="centre" ><h2> Demande de Contact: </h2>
		
		<form  action="envoie_mail.php?ID=<?php echo $_GET['ID'];?>&pass=<?php echo $_GET['pass'];?>" method="POST" >
		

<fieldset >
<div align='center'>


<table class="tabcenter">
	
	
	<tr>
		<td class='col1'>
			<label for="nom">
				<b>Nom:</b>
			</label>
		</td>

		<td class='col2'>
			<input  type=text  name="nom" id="nom" placeholder=Dupont   maxlength=32 required>
		</td>
		<td class='col3'>
			<span id="nom_">
				<?php
					if(isset($_GET['erreur'])){
						if($_GET['erreur']=='nom'){
							echo "Ne doit contenir que des lettres, majuscule autorisé uniquement pour la première lettre, taille minimum de 2 caractères";
						}
					}
				?>
			</span>
		</td>
	</tr>
	
	<tr >
		<td class='col1'>
			<b>Prénom:</b>
		</td>
		<td class='col2'>
			<input   type=text  name="prenom" id="prenom" placeholder=François maxlength=50 value="" required>
		</td>
		<td class='col3'>
			<span id="prenom_">
				<?php
					if(isset($_GET['erreur'])){
						if($_GET['erreur']=='prenom'){
							echo "Ne doit contenir que des lettres, majuscule autorisé uniquement pour la première lettre, taille minimum de 2 caractères";
						}
					}
				?>
			</span>
		</td>
	</tr>

	<tr >
		<td class='col1'>
			<b>Email:</b>
		</td>
		<td class='col2'>
			<input   type=email  name="Email" maxlength=50 placeholder="Dupont.François@gmail.com" required>
		</td>
		<td class='col3'>
			<span id="email_">
				<?php
					if(isset($_GET['erreur'])){
						if($_GET['erreur']=='email'){
							echo "<p>Veuillez rentrer à nouveau votre mail (monmail@exemple.exp)</p>";
						}
					}
				?>
			</span>
		</td>
	</tr>


	<tr >
		<td class='col1'>
			<b>Genre:</b> 
		</td>	
		<td class='col2'>  
			<input   type=radio  name="Genre" value=Femme> <label for="Femme" > Femme</label>	
			<input   type=radio  name="Genre" value=Homme checked> <label for="Homme"> Homme</label>
		</td>
		<td class='col3'>
			<span id="genre_">
				<?php
					if(isset($_GET['erreur'])){
						if($_GET['erreur']=='genre'){
							echo "<p>Veuillez rentrer à nouveau votre genre</p>";
						}
					}
				?>
			</span>
		</td>
	</tr>


	<tr>
		<td class='col1'>
			<b> Date de Naissance: </b>
		</td>
		<td class='col2'>
			<input type="date"  id="date_recup" style="width:82%" name="date_de_naissance" min="1900-01-01" max="2021-12-31" required>
		</td>
		<td class='col3'>
			<span id="date_">
				<?php
					if(isset($_GET['erreur'])){
						if($_GET['erreur']=='date'){
							echo "<p>Vous devez avoir plus de 18 ans</p>";
						}
					}
				?>
			</span>
		</td>
	</tr>

	<tr>
		<td class='col1'>
			<b> Fonction: </b>
		</td>

		<td class='col2'>

		<select name="Fonction" id="Fonction" style="width:85%">
			
			<option value="Agriculteurs exploitants">Agriculteurs exploitants</option>
			<option value="Salariés de l'agriculture">Salariés de l'agriculture</option>
			<option value="Industrie et Commerce"> Industrie et Commerce</option>
			<option value="libéraux et cadres supérieurs">libéraux et cadres supérieurs</option>
			<option value="Cadres moyens">Cadres moyens</option>
			<option value="Employés">Employés</option>
			<option value="Ouvriers">Ouvriers</option>
			<option value="Personnels de services">Personnels de services</option>
			<option value="Autres catégories">Autres catégories</option>
		</select>
		</td>
		<td class='col3'>
			<span id="fonction_">
				<?php
					if(isset($_GET['erreur'])){
						if($_GET['erreur']=='fonction'){
							echo "<p>Veuillez rentrer à nouveau votre fonction</p>";
						}
					}
				?>
			</span>
		</td>

	</tr>


	<tr>
		<td class='col1'>
			<b> Sujet:</b>
		</td>
		<td class='col2'>
			<input   type=text  name="Sujet" maxlength=50 minlength=2 value="" required>
		</td>
	</tr>


	<tr>
		<td class='col1'>
			<b>Contenu:</b>
		</td>

		<td class='col2'>

			<textarea style="height:150px;" name="message" ></textarea>
		</td>
	</tr>
	
	<tr><td><td></tr>
	<tr><td><td></tr>
	<tr> <td></td>
	
	<td>
		<div>
			<input style="text-align:center" class=button  type=submit name="send" value="Envoyer La Demande" id="bouton">
	</div></td>

</table>

</fieldset>
</form>

		
		</div>
		</div>
		
		
		</div>
		<!-- laissez la div fermante car on l'importe du header qui ouvre une div  -->
		</body>
<script src="../js/code_js_formulaire.js"></script>
		
		
		
	
		
		
		
		
<?php 
//}
 include("footer.php"); ?>


