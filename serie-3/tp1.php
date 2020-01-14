<?php

    $tab = [];
    $i = 0;

    while($i<10){
        $tab[] = rand(0, 100);
        $i++;
    }

    

    foreach($tab as $number){
        if($number == min($tab)){
            $style = "color: red;";
            // echo min($tab);
        }
        elseif($number == max($tab)){
            $style = "color: blue;";
            // echo max($tab);
        }
        else{
            echo "";
        }
        echo '<p style="'. $style .'">'.$number.'</p>';
    }
    var_dump(min($tab));
    echo '<br>';
    var_dump(max($tab));


?>