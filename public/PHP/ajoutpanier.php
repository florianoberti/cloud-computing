<?php
if (empty(session_id())) session_start(); 
    include("header.php"); 
    $id=$_GET['ID']-1;
    $lib=$_GET['libproduit'];
    $q=$_POST['nbr'];
    $p=$_GET['prix'];
    $cat=$_GET['cat'];
    $cmp=0;
    $verif_=0;
    if($id!=-1){
        if ($q!=0){
            foreach($_SESSION['panier'][$id]['libelleProduit'] as $panier){
                if(isset($_SESSION['panier'][$_GET['ID']-1]['libelleProduit'][$cmp])){
                if(($_SESSION['panier'][$id]['libelleProduit'][$cmp]==$lib)&&($_SESSION['panier'][$id]['catProduit'][$cmp]==$cat)){
                    
                    $verif_=1;
                    $_SESSION['panier'][$id]['qteProduit'][$cmp]=$_SESSION['panier'][$id]['qteProduit'][$cmp]+$q;
                    if($_SESSION['panier'][$id]['qteProduit'][$cmp]>$_SESSION['produits'][$cat][$lib]['stock']){
                        $_SESSION['panier'][$id]['qteProduit'][$cmp]=$_SESSION['produits'][$cat][$lib]['stock'];
                    }
                }
                $cmp=$cmp+1;

            }}
            if($verif_==0){
                $_SESSION['panier'][$id]['libelleProduit'][$cmp]=$lib;

                $_SESSION['panier'][$id]['qteProduit'][$cmp]=$q;
                
                $_SESSION['panier'][$id]['prixProduit'][$cmp]=$p;
                
                $_SESSION['panier'][$id]['catProduit'][$cmp]=$cat;

            }
        }
            echo "<script>window.history.back()</script>";
    }
    else{
        echo '<script language="Javascript">
        <!--
        document.location("../index.php?ID=0&pass=0&msg=2");
        // -->
        </script>';
        }
?>
    