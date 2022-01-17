<?php

    if(isset($_POST['alleKlassen'])){

        echo $_POST['alleKlassen'];

    }

?>



<!DOCTYPE html>

<link rel="stylesheet" href="style.css">

    <body>

        <fieldset>

            <legend>KlassenFormulier</legend>



                <form action ="foreach.php" method="post">

                    <p id='label'>ik zit in klas

                    <select id class="klas" name="alleKlassen">

                    <?php

                        $klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");



                        foreach ($klassen as $klas) {

                            echo "<option value='$klas'>$klas</option>";

                        }

                    ?>

                    </select> </p>

                    <br>

                    <input type="submit" value="verzend">

                </form>
        </fieldset>
    </body>

</html>