<label for="annee">Les années de 1900 à 2050</label>
<br>
<select name="annee" id="annee">
    <?php
        for($annee = 1900; $annee <=2050; $annee++) {
            echo '<option value="1900">'.$annee.'</option>';
        }
    ?>
</select>