<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice4P4</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 4 partie 4</h1>
                <p class="lead text-center">Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :</p>
                <ol>
                    <li>Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième</li>
                    <li>Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième</li>
                    <li>Les deux nombres sont identiques si les deux nombres sont égaux</li>
                </ol>
            </div>
        </header>
        <main>
            <div class="php text-center">
                <?php
                   //déclaration de la fonction
                   function number($firstNum, $secondNum) {
                       //si le 1er chiffre est plus grand que le 2eme le message se dessous se retourne
                       if ($firstNum > $secondNum) {
                           return 'Le premier nombre est plus grand que le second.';
                   //si le 1er chiffre est plus petit que le 2eme le message se dessous se retourne
                       } elseif ($firstNum < $secondNum) {
                           return 'Le premier nombre est plus petit que le second.';
                       //si les deux chiffres sont identique le message se dessous se retourne
                       } elseif ($firstNum == $secondNum) {
                           return 'Les nombres sont identiques.';
                       }
                   }
                   //Déclaration des deux chiffres en condition
                   echo number(15 , 7);
                ?>
            </div>
        </main>
    </body>
</html>
