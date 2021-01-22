<div class="container">

 
    <form  class="form" method="POST" action="">

            
        <!-- <label for="mail"> mail : </label> -->
        <input type="mail" class="connexionInput" autocomplete="off" placeholder="mail" name="mail" placerholder="mail" id="mail"/>

        <!-- <label for="password"> password : </label> -->
        <input type="password"  class="connexionInput"  name="mdpconnect" placeholder="password" id="password"/>

        <button type="submit" class="registerButton" name="formConnexion" value="connect">Se connecter</button>

        <?php

        if(isset($wrongData)){

           echo'<p class="alert-message">'.$wrongData.'</p>';
        }

       

        if(isset($notCompleted)){

            echo'<p class="alert-message">'.$notCompleted.'</p>';
        }

        ?>  
        
    </form>



</div>
