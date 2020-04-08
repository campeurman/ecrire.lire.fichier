
<?php

$recup = fopen("recup.csv", "a+");

fputcsv($recup, $_POST);

fclose($recup);

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Les entrées</title>
    <link rel="stylesheet" type="text/css" href="cuisine.css">
</head>
<body>


<h2>Ajouter une recette</h2>

<form action="#" method="POST" id="formAjout">
    <div class="field">
        <label for="titre">Titre de la recette</label>
        <input type="text" id="titre" name="titre" required>
    </div>
    <div class="field">
        <label for="description">Description</label>
        <input type="text" id="description" name="description" required>
    </div>
    <div class="row">
        <div class="field">
            <label for="nbPers">Nombre de personnes</label>
            <input type="number" id="nbPers" name="nbPers" required>
        </div>
        <div class="field">
            <label for="temps">Temps de réalisation</label>
            <input type="number" id="temps" name="temps" required>
        </div>
        <div class="field">
            <label for="difficulte">Difficulté</label>
            <select id="difficulte" name="difficulte" required>
                <option value="1" selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="field">
                    <p>Coût : 
                    <label for="cout1">1</label>
                    <input type="radio" id="cout1" name="cout" value="1"checked>
                    <label for="cout2">2</label>
                    <input type="radio" id="cout2" name="cout" value="2">
                    <label for="cout3">3</label>
                    <input type="radio" id="cout3" name="cout" value="3">
                    <label for="cout4">4</label>
                    <input type="radio" id="cout4" name="cout" value="4">
                    <label for="cout5">5</label>
                    <input type="radio" id="cout5" name="cout" value="5">
                    </p>
                </div>
            </div>
            <div class="field">
                <label for="ingredients">Ingrédients</label>
                <textarea name="ingredients" id="ingredients" cols="30" rows="5" required></textarea>
            </div>
            <div class="field">
                <label for="etapes">Etapes</label>
                <textarea name="etapes" id="etapes" cols="30" rows="5" required></textarea>
            </div>
     
    </div>
    
 

    <input type="submit" value="Ajouter la recette">
</form>
</section>


</body>
</html>
<?php 
function import_csv_to_array(recup.csv,",")