<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice8P4</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 8 partie 4</h1>
                <p class="lead text-center">Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.</p>
                <p class="lead text-center">Tous les paramètres doivent avoir une valeur par défaut.</p>
            </div>
        </header>
        <main>
            <div class="php text-center">
                <?php
                //déclaration de la fonction calcul
                    function calcul($firstNum, $secondNum, $thirstNum){
                        //on renvoit le calcul
                            return $firstNum + $secondNum + $thirstNum;
                    }
                    //affichage du calcul avec les valeurs en parametre
                    echo calcul(2, 8, 9);
                ?>
            </div>
        </main>
    </body>
</html>
