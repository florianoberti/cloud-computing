<?php 


if ($ouverture_fichierbis=fopen('utilisateurs.txt',"r"))
{


     
    $data = file('utilisateurs.txt'); 
	
    $line = array();

	 $i=0;
	
    foreach( $data as $line)
    {
		
        if(!empty($line))
        {
	  
             $final=explode(' ', $line);
		$tableau[$i]=$final;
            //var_dump($final);
		
        }
		
		$i++;
         
    }
	
     
 fclose($ouverture_fichierbis);
}
else { echo " le fichier n\' a pas été ouvert";}

//include("varSession.inc.php");


if (isset($_POST["utilisateur"])&& ($_POST["mdp"]))
	{
	$boolean=false;
		for($i=0;$i<count($tableau);$i++)
		{$login_form= htmlentities($_POST["utilisateur"]);
			$mdp_form=htmlentities($_POST["mdp"]);
			$login=$tableau[$i][1];
			if ($i==count($tableau)-1)
			{
				$mot_de_passe=htmlentities($tableau[$i][3]);
				
			
			
			}
			else
			{
			$mot_de_passe=htmlentities($tableau[$i][3]);
			$mot_de_passe=substr($mot_de_passe, 0, -2);
			
						
			}
			
			
				
		
				if (($login_form== $login) and ($mdp_form==$mot_de_passe))
				{ 
					$boolean=true;
					$id_co=htmlentities($tableau[$i][0]);
					$pass_co=htmlentities($tableau[$i][2]);
			
				}
		}
				if ($boolean==true)
				{
				
				header('Location:../index.php?ID='.$id_co.'&pass='.$pass_co);
				}
			
			
			else 
				{header('Location:connexion.php?error=tryagain');
				}
	}
else{
	echo (" utilisateur ou mot de passe incorrect");	
	}
										
								
								
	
	?>