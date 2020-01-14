<?php

    $longueur = $largeur = $error = $aire = "";

    if(isset($_POST['largeur']) and isset($_POST['longueur'])){
        $largeur = $_POST['largeur'];
        $longueur = $_POST['longueur'];
        if(filter_var($longueur, FILTER_VALIDATE_FLOAT) == false or filter_var($largeur, FILTER_VALIDATE_FLOAT) == false) {
            $error = "Veuillez entrer des nombres";
        }
    }

    function carre($longueur, $largeur){
        return $longueur * $largeur;
    }

?>

<div style="margin: 50px">
    <p style="color: red"><?= $error ?></p>
    <form action="" method="post">
        <label for="longueur">Entrer la longueur:</label>
        <br>
        <input type="text" name="longueur" id="longueur" value="<?= $longueur?>">
        <br>
        <label for="largeur">Entrer la largeur:</label>
        <br>
        <input type="text" name="largeur" id="largeur" value="<?= $largeur?>">
        <br><br>
        <button type="submit">Afficher l'aire</button>
    </form>
    <div>
        <?php
    if(filter_var($longueur, FILTER_VALIDATE_FLOAT) == true and filter_var($largeur, FILTER_VALIDATE_FLOAT) == true) {
            echo '<p>L\'aire du rectangle est :'. carre($longueur, $largeur) .'<p>';
        }
        ?>
    </div>
</div>