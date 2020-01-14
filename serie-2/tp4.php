<?php

function factoriel($nbre) {
    if($nbre < 0){
        return 'Veuillez entrer un nombre positif';
    }
    if($nbre == 0 or $nbre == 1){
        return 1;
    }
    else{
        return $nbre * factoriel($nbre -1);
    }
}

?>

<?= factoriel(-2) ?>