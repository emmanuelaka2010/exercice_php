<?php

    $nbre = $error = "";
    if(isset($_POST['nbre'])){
        $nbre = $_POST['nbre'];
        if(filter_var($nbre, FILTER_VALIDATE_INT) == false ) {
            $error = "Veuillez entrer un nombre entier";
        }
    }

    function factoriel($nbre) {
        if($nbre < 0){
            return '<p style="color: red">Veuillez entrer un nombre entier positif</p>';
        }
        elseif($nbre === 0 or $nbre === 1){
            return 1;
        }
        else{
            return $nbre * factoriel($nbre -1);
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
        <button type="submit">Calculer le factoriel</button>
    </form>
</div>

<div>
    <?php
    
    if(filter_var($nbre, FILTER_VALIDATE_INT) == true ) {
        if($nbre === 0){
            echo '<p>Le factoriel de 0 est: 1</p>';
        }
        else{
            echo '<p>Le factoriel de '. $nbre .' est: '. factoriel($nbre) .'</p>';
        }
    }
    else{
        $error = "Veuillez entrer un nombre entier";
    }

    ?>
</div>