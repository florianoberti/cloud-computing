<?php
$id_co= $_GET['ID'];
$pass_co=$_GET['pass'];
$nom=$_POST['nom'];
$test_nom=0;
$test_prenom=0;
$test_date=0;
$test_email=0;
$test_genre=0;
$test_fonction=0;
$test_contenu=0;
$test_sujet=0;
$headers = "From: avelthomas@eisti.eu";
if(!preg_match("/^([a-zA-Z' ]+)$/",$nom)){
    header("location:contact.php?ID=".$id_co."&pass=".$pass_co."&erreur=nom");
    $test_nom=1;
}

$prenom=$_POST['prenom'];
if(!preg_match("/^([a-zA-Z' ]+)$/",$prenom)){
    header("location:contact.php?ID=".$id_co."&pass=".$pass_co."&erreur=prenom");
    $test_prenom=1;
}
$date = new DateTime();
$annee_18= $date->format('Y');
$annee_18=(int)$annee_18-18;
$mois_18=$date->format('m');
$jour_18=$date->format('d');
$date_=$_POST['date_de_naissance'];
$annee=(int)$date_[0]*1000+(int)$date_[1]*100+(int)$date_[2]*10+(int)$date_[3]*1;
$mois=(int)$date_[5]*10+(int)$date_[6]*1;
$jour=(int)$date_[8]*10+(int)$date_[9]*1;
if($annee_18<$annee){
    header("location:contact.php?ID=".$id_co."&pass=".$pass_co."&erreur=date");
    $test_date=1;
}
else{
    if($annee==$annee_18){
        if($mois_18<$mois){
            header("location:contact.php?ID=".$id_co."&pass=".$pass_co."&erreur=date");
            $test_date=1;
        }
        else{
            if($mois==$mois_18){
                if($jour_18<$jour){
                    header("location:contact.php?ID=".$id_co."&pass=".$pass_co."&erreur=date");
                    $test_date=1;
                }
            }
        }
    }
}

$email=$_POST['Email'];
$masque ="/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4}$/";
$headers = "From: $email";
if(!preg_match($masque, $email)){
    header("location:contact.php?ID=".$id_co."&pass=".$pass_co."&erreur=email");
    $test_email=1;
}
$genre=$_POST['Genre'];
if(($genre!='Homme')&&($genre!='Femme')){
    header("location:contact.php?ID=".$id_co."&pass=".$pass_co."&erreur=genre");
    $test_genre=1;
}
$fonction=$_POST['Fonction'];
$contenu=$_POST['message'];
$msg = "info mail : 
Nom= ".$nom.'
Prenom= '.$prenom.'
Email= '.$email.'
Genre= '.$genre.'
Fonction= '.$fonction.'
Date de naissance= '.$date_.'
Contenu du mail : 
'.$contenu;
$sujet=$_POST['Sujet'];
// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email

if(($test_nom==0)&&($test_prenom==0)&&($test_date==0)&&($test_contenu==0)&&($test_email==0)&&($test_fonction==0)&&($test_sujet==0)&&($test_genre==0)){
   if(mail("avelthomas@eisti.eu",$sujet,$msg,$headers)){ 
    echo "envoie mail";
    }
    else {echo "echec";}
   //header("location:../index.php?ID=".$id_co."&pass=".$pass_co."&envoie=1");


}
?>