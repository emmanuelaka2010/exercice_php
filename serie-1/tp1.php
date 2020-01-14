<?php


$prix = $quantite = $prix_achat = $prix_ttc = $montant_red = $error = "";
    if(isset($_POST['prix']) and isset($_POST['quantite'])){
        $prix = $_POST['prix'];
        $quantite = $_POST['quantite'];

        if(filter_var($prix, FILTER_VALIDATE_INT) == true and filter_var($quantite, FILTER_VALIDATE_INT) == true){
                $prix_achat = $prix * $quantite;
                $prix_ttc = $prix_achat * 1.18;
                if($prix_ttc < 50000){
                    $red = 0.02;
                }
                elseif($prix_ttc >= 50000 and $prix_ttc < 100000){
                    $red = 0.04;
                }
                else{
                    $red = 0.06;
                }

                $montant_red = $prix_ttc * $red;
        }
        else{
            $error = "Veuillez entrer des nombres entiers";
        }
    };

?>

<div style="margin: 50px">
    <p style="color: red"><?= $error ?></p>
    <form action="" method="post">
        <label for="quantite">Quantité</label>
        <br>
        <input type="text" name="quantite" id="quantite" value="<?= $quantite?>">
        <br>
        <label for="prix">Prix</label>
        <br>
        <input type="text" name="prix" id="prix" value="<?= $prix?>">
        <br>
        <button type="submit">Calculer</button>
    </form>

    <div>
        <p>Prix d'achat: <?= $prix_achat ?></p>
        <p>Prix TTC (TVA 18%): <?= $prix_ttc ?></p>
        <p>Montant de la reduction: <?= $montant_red ?></p>
    </div>
</div>