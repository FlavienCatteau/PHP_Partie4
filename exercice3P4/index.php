<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice3P4</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 3 partie 4</h1>
                <p class="lead text-center">Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines</p>
            </div>
        </header>
        <main>
            <div class="php text-center">
                <?php
                //déclaration de la function
                function func($first, $second ){
                    return $first . ' '  . $second;
                }
                //affichage de la fonction
                echo func('ceci est', 'une chaine de caractere');
                ?>
            </div>
        </main>
    </body>
</html>
