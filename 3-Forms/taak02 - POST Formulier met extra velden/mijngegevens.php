
</head>
    
<?php

switch ($_POST["colors"]) {
    case "yellow":
      echo '<body style="background-color: yellow;">';
      break;
    case "red":
        echo '<body style="background-color: red;">';
      break;
    case "blue":
        echo '<body style="background-color: blue;">';
      break;
      case "green":
        echo '<body style="background-color: green;">';
      break;
      case "white":
        echo '<body>';
      break;
    default:
      echo "<body>";
  }

echo $_POST["fname"] , "<br>"; 

echo $_POST["achternaam"] , "<br>"; 

echo $_POST["klas"] , "<br>"; 

echo $_POST["leeftijd"] , "<br>"; 

echo $_POST["adres"] , "<br>"; 

echo $_POST["woonplaats"] , "<br>"; 

echo $_POST["gender"] , "<br>";




?>

</body>
</html>
