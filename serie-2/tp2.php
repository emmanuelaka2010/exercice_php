<?php

    $nbre = $error = "";
    if(isset($_POST['nbre'])){
        $nbre = $_POST['nbre'];
        if(filter_var($nbre, FILTER_VALIDATE_INT) == false){
            $error = "Veuillez entrer un nombre entier";
        }
    }

?>

<div style="margin: 50px">
    <p style="color: red"><?= $error ?></p>
    <form action="" method="post">
        <label for="nbre">Entrer un nombre:</label>
        <br>
        <input type="text" name="nbre" id="nbre" value="<?= $nbre?>">
        <br><br>
        <button type="submit">Afficher la table</button>
    </form>

    <div style="">
    <?= '<p>La table de '.$nbre.' est :</p>'?>
        <?php
        if(filter_var($nbre, FILTER_VALIDATE_INT) == true){
            for($i = 0; $i <= 10; $i++){
                echo '<p>'.$nbre. ' x '. $i .' = '. $i * $nbre .'</p>';
            }
        }
            
        ?>
    </div>
</div>