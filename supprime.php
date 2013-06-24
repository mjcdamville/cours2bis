<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Supprimer un utilisateur</title>        
    </head>

    <body>
        <?php require_once('menus.php')?>
        <?php require_once('utilisateurs.php')?>
        <h1>Supprimer un utilisateur</h1>
        <?php
                   
            $utilisateurs = new Utilisateurs();
            
            if (isset($_POST['pseudo'])) {
                if ( strlen($_POST['pseudo'])>0 ) {
                    echo '<h1>'.$utilisateurs->supprime($_POST['pseudo']).'<h1>';
                    $utilisateurs->sauvegarde();
                } else {
                    echo "<h1>Vous devez saisir le pseudo.</h1>";                    
                }
            } else {
              echo '<form action="supprime.php" method="POST">';
                echo '<label for="pseudo">Votre pseudo</label>';
                echo '<input name="pseudo" type="text" />';               
                echo '<input type="submit" value="Supprimer" />';
              echo '</form>';                
            }           
            
                          
        ?>
    </body>
</html>