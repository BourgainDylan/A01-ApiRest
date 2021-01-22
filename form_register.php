<div class="container">

<form class="form" action="" method="POST">

         
        <!-- <label for="mail"> mail : </label> -->
        <input type="mail" class="subscribeInput" autocomplete="off" placeholder="mail" name="mailSubscribe" placerholder="mail" id="mail"/>

        <!-- <label for="password"> password : </label> -->
        <input type="password" class="subscribeInput" name="mdpSubscribe" placeholder="password" id="password"/>

      
        <button type="submit" class="subscribeButton" name="formInscription" value="connect">Inscrire</button>
        <?php
                
        // echo'<p class="alert-message">'.$notif.'</p>';
        // echo'<p class="alert-message">'.$notif2.'</p>';
        
        ?>

</form>
        <?php
        if(isset($json)){
                echo''.$json.'';

        }

        if(isset($jsonEmail)){
                echo''.$jsonEmail.'';
        }

        ?>
</div>