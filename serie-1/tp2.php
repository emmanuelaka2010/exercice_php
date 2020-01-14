<?php
$error = $nbre1 = $nbre2 = $signe_produit = "";
if(isset($_POST['nbre1']) and isset($_POST['nbre2'])){
    $nbre1 = $_POST['nbre1'];
    $nbre2 = $_POST['nbre2'];

    if(filter_var($nbre1, FILTER_VALIDATE_FLOAT) == true and filter_var($nbre2, FILTER_VALIDATE_FLOAT) == true){
        if(($nbre1 > 0 and $nbre2 > 0) or ($nbre1 < 0 and $nbre2 < 0)){
            $signe_produit = "Le produit est positif";
        }
        elseif($nbre1 == 0 or $nbre2 == 0){
            $signe_produit = "Le produit est null";
        }
        else{
            $signe_produit = "Le produit est negatif";
        }
    }
    else{
        $error = "Veuillez des nombres";
    }
    
}

?>

<div style="margin: 50px">
    <p style="color: red"><?= $error ?></p>
    <form action="" method="post">
        <label for="quantite">Nombre 1</label>
        <br>
        <input type="text" name="nbre1" id="nbre1" value="<?= $nbre1?>">
        <br>
        <label for="prix">Nombre 2</label>
        <br>
        <input type="text" name="nbre2" id="nbre2" value="<?= $nbre2?>">
        <br>
        <button type="submit">Trouver le signe</button>
    </form>

    <p><?= $signe_produit ?></p>
</div>