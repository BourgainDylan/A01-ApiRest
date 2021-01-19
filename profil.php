
<?php 



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
<div class="container-login">
    <img class="icone" src="img/user-icone.svg">
    <h3>authentification de : <?php echo'<p class="name-authentification">'.$userInfo['mail'].'</p>'?> </h3>

</div>
</body>
</html>