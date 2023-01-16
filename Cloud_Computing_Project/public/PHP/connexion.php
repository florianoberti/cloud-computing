<?php 
include("varSession.inc.php");
// {"1":{"login":"user1","mdp":"123"},"2":{"login":"user2","mdp":"123"}}
if (isset($_GET['error'])){
	$error='veuillez saisir à nouveaux vos identifiants: l\'identifiant ou le mot de passe est faux';
}
else{$error='';}
include("header.php");
?> 




	
	<div class="centre_">
		<form action="authentification.php" method="POST" >
		<table class="tabcenter">
			<tr>
				<td  style="text-align:center" >
					<b> Login:</b>
				</td>
				<td>
					<input   type=text  name="utilisateur" maxlength=50 minlength=2 value="" required>
				</td>
			</tr>


			<tr>
				<td style="text-align:center">
					<b>Mot de passe:</b>
				</td>

				<td>

					<input type="password"  name="mdp" maxlength=50 minlength=2 value="" required>
				</td>
			</tr>
		
			<tr><td> </td> <td></td></tr>
			<tr><td> </td> <td></td></tr>
			<tr>  <td> </td><td><?php  echo '<span style="color:red">', $error ,'</span>'; ?></td> </tr>
			
			<tr><td> </td> <td><div class="centre_conn">
				
					<input style="text-align:center" class=button  type=submit  value="Connexion" id="se_connecter">
			</div>
			</td></tr>
			
		
		</table>
	</fieldset>
	</form>
	<div class="centre_insc">
		<form action="inscription.php?ID=0&pass=0" method="POST" >
		<input style="text-align:center" class=button  type=submit  value="Inscription" id="inscritption">
	</div>
	</form>
</div>
</div>
</body>
<?php 
include("footer.php");
?>







