<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ajouter un utilisateur</title>        
    </head>

    <body>
        <?php require_once('menus.php')?>
        <?php require_once('utilisateurs.php')?>
        <h1>Ajouter un utilisateur</h1>
        <?php
        
           
            $utilisateurs = new Utilisateurs();
            
            if (isset($_POST['pseudo']) && isset($_POST['pseudo']) && isset($_POST['pseudo'])) {
                if ( strlen($_POST['nom'])>0 && strlen($_POST['prenom'])>0 && strlen($_POST['pseudo'])>0) {
                    echo '<h1>'.$utilisateurs->ajoute($_POST['pseudo'], $_POST['nom'].' '.$_POST['prenom']).'<h1>';
                    $utilisateurs->sauvegarde();
                } else {
                    echo "<h1>Vous devez saisir toutes les données.</h1>";                    
                }
            } else {
              echo '<form action="ajoute.php" method="POST">';
                echo '<label for="nom">Votre nom</label>';
                echo '<input name="nom" type="text" />';
                echo '<label for="nom">Votre prénom</label>';
                echo '<input name="prenom" type="text" />';
                echo '<label for="pseudo">Votre pseudo</label>';
                echo '<input name="pseudo" type="text" />';               
                echo '<input type="submit" value="valider" />';
              echo '</form>';                
            }           
            
                          
        ?>
    </body>
</html>