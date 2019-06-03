<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice1P4</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 1 partie 4</h1>
                <p class="lead text-center">Faire une fonction qui retourne true.</p>
            </div>
        </header>
        <main>
            <div class="php text-center">
                <?php
                //Déclaration de la Function Booléen
                function func(){
                return true;
                }
                //déclaration de la variable qui récupere la function
                $myVar = func();
                //affichage de la variable.
                echo $myVar;
                ?>
            </div>
        </main>
    </body>
</html>
