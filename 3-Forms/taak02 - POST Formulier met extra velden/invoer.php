<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
</head>
  <body>

    <fieldset>

      <legend class="fieldset2">Form</legend>

        <form name id="invoerformulier" action = "mijngegevens.php" method="post">
        <div>
          <label for="fname">Voornaam:</label>
          <input type="text" id="fname" name="fname"><br><br>
          <label for="fname">Achternaam:</label>
          <input type="text"id="fname" name="achternaam"><br><br>
          <label for="lname">Klas:</label>
          <input type="text" id="fname" name="klas"><br><br>
          <label for="lname">Leeftijd:</label>
          <input type="text"id="fname" name="leeftijd"><br><br>
          <label for="lname">Adres:</label>
          <input type="text" id="fname" name="adres"><br><br>
          <label for="lname">Woonplaats:</label>
          <input type="text"  id="fname" name="woonplaats"><br><br>
          <input type="submit" value="verzend">

        </div>
        
        <div id = "div2">
        <p>Geslacht:</p>

          <input type="radio" id="man" name="gender" value="man">
          <label for="html">Man</label>
          <input type="radio" id="vrouw" name="gender" value="vrouw">
          <label for="css">Vrouw</label><br>

       

          
          <p id='label'>lievelingskleur</p>

          <select id class="klas" name="colors">

                    <?php

                      
                        $colors = array("yellow", "green", "red", "blue", "white" );



                        foreach ($colors as $color) {

                            echo "<option value='$color'>$color</option>";

                        }

                    ?>

                    </select> 

                    </div> 
        </form> 
            
                    
    </fieldset>
  </body>
</html>










