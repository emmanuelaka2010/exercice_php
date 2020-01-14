<?php

    $style = "font-style: italic;font-weight: bold;text-decoration: underline;";
    $texte = $error = "";
    if(isset($_POST['texte'])){
        $texte = $_POST['texte'];
        if(empty($_POST['texte'])){
            $error = "Veuillez saisir un texte";
        }
    }

?>

<div style="margin: 50px">
    <p style="color: red"><?= $error ?></p>
    <form action="" method="post">
        <label for="texte">Texte</label>
        <br>
        <textarea name="texte" id="texte" cols="30" placeholder="Saisissez le texte ici" rows="10"><?=$texte?></textarea>
        <br>
        <button type="submit">Afficher le texte</button>
    </form>

    <div>
        <p style="<?= $style ?>">
        <?=$texte?>
        </p>
    </div>
</div>

