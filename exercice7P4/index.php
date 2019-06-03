<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice7P4</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 7 partie 4</h1>
                <p class="lead text-center">Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :</p>
                <ol>
                    <li>Homme</li>
                    <li>Femme</li>
                </ol>
                <p>La fonction doit renvoyer en fonction des paramètres :</p>
                <ol>
                    <li>Vous êtes un homme et vous êtes majeur</li>
                    <li>Vous êtes un homme et vous êtes mineur</li>
                    <li>Vous êtes une femme et vous êtes majeur</li>
                    <li>Vous êtes une femme et vous êtes mineur</li>
                </ol>
                <p>Gérer tous les cas.</p>
            </div>
        </header>
        <main>
            <div class="php text-center">
                <?php
                //Déclaration de la fonction
                function func($genre, $age) {
                    /*si le genre est Homme et l'age supperieur ou egale a 18 le message
                    'Vous êtes un homme et vous êtes majeur' se retourne*/
                    if ($age >= 18 && $genre == 'Homme') {
                        return 'Vous êtes un homme et vous êtes majeur';
                    /*si le genre est Homme et l'age inferieur a 18 le message
                    'Vous êtes un homme et vous êtes mineur' se retourne*/
                    } elseif ($age < 18 && $genre == 'Homme') {
                        return 'Vous êtes un homme et vous êtes mineur';
                    /*si le genre est Femme et l'age inferieur a 18 le message
                    'Vous êtes une femme et vous êtes mineur' se retourne*/
                    } elseif ($age < 18 && $genre == 'Femme') {
                        return 'Vous êtes une Femme et vous êtes mineur';
                    /*si le genre est Femme et l'age supperieur ou egale a 18 le message
                    'Vous êtes un Femme et vous êtes majeur' se retourne*/
                    } elseif ($age >= 18 && $genre == 'Femme') {
                        return 'Vous êtes une Femme et vous êtes majeur';
                    }
                }
                //affichage du message avec les parametres.
                echo func('Femme', 21);
                ?>
            </div>
        </main>
    </body>
</html>
