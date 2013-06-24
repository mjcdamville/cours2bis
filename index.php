<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Liste des utilisateurs</title>        
    </head>

    <body>
        <?php require_once('menus.php')?>
        <?php require_once('utilisateurs.php')?>
        <?php
           
            $utilisateurs = new Utilisateurs();
           
            echo '<table>
                    <thead>
                      <tr>
                          <th><td></td><td></td></th>
                      </tr>
                    </thead>
                    <tbody>';


            foreach($utilisateurs->obtientListe() as $pseudo => $utilisateur)
            {
                  echo '<tr>';                    
                  echo '  <td>'.$pseudo.'</td><td>'.$utilisateur.'</td>';
                  echo '</tr>';
            }
            echo '</tbody></table>';
                          
        ?>
    </body>
</html>