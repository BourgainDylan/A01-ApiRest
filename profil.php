
<?php 


session_start();
include 'db.php';


if(isset($_GET['id']) AND $_GET['id'] >0){
    
    $getId = intval($_GET['id']);
    $reqUser = $bdd->prepare("SELECT * FROM membres where id = ?");
    $reqUser->execute(array($getId));
    $userInfo = $reqUser->fetch();


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>profil</title>
</head>
<body>
<div class="nav">
        <img class="logo" src="./img/logo-db.svg">
        <h1>ApiRest</h1>
        <?php 

            if(isset($_SESSION['id']) AND $_SESSION['id'] == $userInfo['id']){
        ?>
                    <button class="disconnect"><a href="deconnexion.php">Se deconnecter</a></button>


            <?php 
            }
            ?>

    </div>

 
<div class="container">

    <div class="log-container">
        <img class="icone" src="img/user-icone.svg">
 

     
        <h3>authentification de : <?php echo'<p class="name-authentification">'.$userInfo['mail'].'</p>'?> </h3>
    </div>
</div>
</body>
</html>