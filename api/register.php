<?php



// if(isset($_POST['formInscription'])){


    $results = ["message"=>"", "error"=>"", "success"=>true];

    $bdd = new PDO('mysql:host=localhost;dbname=apirest', 'root', '');
    $bdd->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ERRMODE_WARNING);

    if (isset($_POST['mailSubscribe'])){
        $email = $_POST['mailSubscribe'];
    }
    if (isset($_POST['mdpSubscribe'])){
        $mdp = sha1($_POST['mdpSubscribe']);
    }
  

    if(empty($email)){
        $results['message']= "veuillez indiquer un email";
        $results['success'] = false;
    }


        if($results['success']){


            $checkdata=$bdd->prepare(" SELECT * FROM membres WHERE mail = ?   ");
            $checkdata->execute(array($email));
            $userExist = $checkdata->rowCount();

                if($userExist == 0){

                    $req=$bdd->prepare('INSERT INTO membres (mail , motdepasse ) VALUES (:mail, :motdepasse )');
                    $req->execute(array(
                        'mail'=>$email,
                        'motdepasse'=>$mdp,
                     
                    
                    ));

                    // $results['error']= $req;
                
                    $results['message'] = "vous êtes bien inscrit dans la bdd";

                }else{

                    $results['message'] ='email déjà existant ';
                }

        }
    
    
    



       
        
    

echo json_encode($results);

// include './form_register.php';


?>