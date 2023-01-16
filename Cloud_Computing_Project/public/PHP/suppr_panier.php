<?php
session_start();


 include("header.php"); 

 $id=$_GET['ID']-1;
 $lib=$_GET['nomproduit'];

 $cat=$_GET['catproduit'];
 $cmp=0;
 $cmp_max=count($_SESSION['panier'][$id]['libelleProduit']);
 echo $cmp_max;
 foreach ($_SESSION['panier'][$_GET['ID']-1]['libelleProduit'] as $panier){
    if(($_SESSION['panier'][$id]['libelleProduit'][$cmp]==$lib)&&($_SESSION['panier'][$id]['catProduit'][$cmp]==$cat)){
        $_SESSION['panier'][$id]['libelleProduit'][$cmp]=$_SESSION['panier'][$id]['libelleProduit'][$cmp_max-1];
        $_SESSION['panier'][$id]['qteProduit'][$cmp]=$_SESSION['panier'][$id]['qteProduit'][$cmp_max-1];
        $_SESSION['panier'][$id]['catProduit'][$cmp]=$_SESSION['panier'][$id]['catProduit'][$cmp_max-1];
        $_SESSION['panier'][$id]['prixProduit'][$cmp]=$_SESSION['panier'][$id]['prixProduit'][$cmp_max-1];
    }
    $cmp=$cmp+1;
}
    unset($_SESSION['panier'][$id]['libelleProduit'][$cmp_max-1]);
    unset($_SESSION['panier'][$id]['qteProduit'][$cmp_max-1]);
    unset($_SESSION['panier'][$id]['catProduit'][$cmp_max-1]);
    unset($_SESSION['panier'][$id]['prixProduit'][$cmp_max-1]); 
 echo "<script>window.history.back()</script>";


 ?>