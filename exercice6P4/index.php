<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice6P4</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 6 partie 4</h1>
                <p class="lead text-center">Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :</p>
                <p class="lead text-center">"Bonjour" + nom + prénom + ",tu as" + age + "ans".</p>
        </header>
        <main>
            <div class="php text-center">
                <?php
                //déclaration de la fonction avec 3 parametres
                function concat($nom, $prenom, $age){
                  return 'Bonjour' . ' ' . $nom . ' ' . $prenom . ' ' . 'tu as' . ' ' . $age . 'ans.';
                }
                //affichage de la fonction avec les 3 parametres.
                echo concat('Catteau', 'Flavien', 15);
                ?>
            </div>
        </main>
    </body>
</html>
