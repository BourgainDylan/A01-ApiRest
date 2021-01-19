
   
<?php 

include 'templates/header.html';


include 'db.php';

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
                    header("location: profil.php?id=".$Userinfo['id']."");
                    
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

    include 'form.php';
    include 'templates/footer.html';
?>




