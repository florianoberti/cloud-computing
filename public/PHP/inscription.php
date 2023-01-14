<?php 
include("varSession.inc.php");
// {"1":{"login":"user1","mdp":"123"},"2":{"login":"user2","mdp":"123"}}
if (isset($_GET['error'])){
	$error='Cette utilisateur a déjà un compte';
}
else{$error='';}
include("header.php");
?> 




	
	<div class="centre_">
        <form action="verif_inscription.php" method="POST" >
            <table class="tabcenter">
                <tr>
                    <td  style="text-align:center" >
                        <b> Login:</b>
                    </td>
                    <td>
                        <input   type=text  name="utilisateur" maxlength=50 minlength=4 value="" required>
                    </td>
                </tr>


                <tr>
                    <td style="text-align:center">
                        <b>Mot de passe:</b>
                    </td>

                    <td>

                        <input type="password"  name="mdp" maxlength=50 minlength=4 value="" required>
                    </td>
                </tr>
            
                <tr><td> </td> <td></td></tr>
                <tr><td> </td> <td></td></tr>
                <tr>  <td> </td><td><?php  echo '<span style="color:red">', $error ,'</span>'; ?></td> </tr>
                
                <tr><td> </td> <td><div class="insc">
                
                    <input style="text-align:center" class=button  type=submit  value="S'inscrire" id="sinscrire">
                    </div>
                    </td></tr>
                
            
            </table>
        </fieldset>
        </form>
    </div>
    </div>

		
    <?php 
//}
 include("footer.php"); ?>