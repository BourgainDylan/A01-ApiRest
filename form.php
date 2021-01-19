<div class="container">

    <h2>API_REST</h2>
    
    <form  class="form" method="POST" action="">

            
        <label for="mail"> mail : </label>
        <input type="mail" placeholder="mail" name="mail" placerholder="mail" id="mail"/>

        <label for="password"> password : </label>
        <input type="password" placeholder="votre pseudo" name="mdpconnect" placerholder="password" id="password"/>

        <button type="submit" name="formConnexion" value="connect">Se connecter</button>

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
