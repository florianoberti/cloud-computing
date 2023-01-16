<?php
$fichier="utilisateurs.txt";
if ($ouverture_fichier=fopen('utilisateurs.txt',"r"))
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
            
		
        }
		
		$i++;
         
    }
	
     
 fclose($ouverture_fichier);
}
else { echo " le fichier n\' a pas été ouvert";}




if (isset($_POST["utilisateur"])&& ($_POST["mdp"]))
	{
	$boolean=false;
    $count_tab=count($tableau)+1;
		for($i=0;$i<count($tableau);$i++)
		{$login_form= htmlentities($_POST["utilisateur"]);
			$login=$tableau[$i][1];
			
			
			
				
		
				if ($login_form== $login)
				{ 
					$boolean=true;
					$id_co=htmlentities($tableau[$i][0]);
			
				}
		}
				if ($boolean==true)
				{
                    header('Location:inscription.php?ID=0&pass=0&error=tryagain');
				}
			
			
			else 
				{
                    $chaine='azertyuiopmlkjhgfdsqwxcvbnNBVCXWQSDFGHJKLMPOIUYTREZA1234567890';
                    $nbr=61;
                    $tab=array();
                    for($i=0;$i<10;$i++){
                        $tab[$i]=$chaine[rand(0, $nbr)];
                    }
                    
                    $contenudufichier="\n".$count_tab." ".$_POST['utilisateur']." ".$tab[0].$tab[1].$tab[2].$tab[3].$tab[4].$tab[5].$tab[6].$tab[7].$tab[8].$tab[9]." ".$_POST['mdp'];
                    file_put_contents($fichier, $contenudufichier, FILE_APPEND);
					header('Location:../index.php?ID=0&pass=0&msg=1');
				}
	}
    

?>