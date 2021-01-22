
   
<?php 
session_start();
include 'templates/header.html';


include 'db.php';


    //FORMULAIRE DE CONNECTION


    if(isset($_POST['formConnexion']))
    {

        $mailconnect = htmlspecialchars($_POST['mail']);
        $mdpConnect = sha1($_POST['mdpconnect']);

        if(!empty($mailconnect) AND !empty($mdpConnect))
        {

            $reqUser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
            $reqUser->execute(array($mailconnect, $mdpConnect));
            $userExist = $reqUser->rowCount();
       
            if($userExist == 1)
            {
                    $Userinfo = $reqUser->fetch();
                    $_SESSION['id']= $Userinfo['id'] ;
                    
                    header("location: profil.php?id=".$_SESSION['id']."");
                    
            }   
            else
            {
                $wrongData ='mauvais mail ou mot de passe';
            }
        


        }
        else
        {
            $notCompleted = "tous les champs doivent être complétés !";
        }
    }

    //FORMULAIRE D'INSCRIPTION

    if(isset($_POST['formInscription']))
    {


        $mailSubscribe = htmlspecialchars($_POST['mailSubscribe']);
        $mdpSubscribe = sha1($_POST['mdpSubscribe']);
        // $nameSubscribe = htmlspecialchars($_POST['nameSubscribe']);
        // $surnameSubscribe = htmlspecialchars($_POST['surnameSubscribe']);



        if(!empty($mailSubscribe) AND !empty($mdpSubscribe) AND !empty($nameSubscribe) AND !empty($surnameSubscribe))
        {

            $reqCheck = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
            $reqCheck->execute(array($mailSubscribe, $mdpSubscribe, $nameSubscribe, $surnameSubscribe  ));
            $userExist = $reqCheck->rowCount();
       
            if($userExist == 0)
            {
                $reqSubscribe = $bdd->prepare('INSERT INTO membres ');
                    
            }   
            else
            {
                $wrongData ='mauvais mail ou mot de passe';
            }
        


        }
        else
        {
            $notCompleted = "tous les champs doivent être complétés !";
        }
    }


?>
<?php
    if(isset($_GET['subscribe'])){
        include 'api/register.php';
    }

    if(isset($_GET['connection'])){

        include 'form_connexion.php';
    }
?>
 <?php

   
    include 'templates/footer.html';
?>




