<?php
   if (isset($_POST['submit'])) {
       $num1 = $_POST['num1'];
       $num2 = $_POST['num2'];
       $operations = $_POST['func'];
       $result = 0;

       if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "<p class='text-danger'>Veuillez saisir des valeurs numériques dans les deux champs.</p>";
       } else {
            switch ($operations) {
                case '+':
                    $result = $num1 + $num2;
                    break;
                case '-':
                    $result = $num1 - $num2;
                    break;
                case '*':
                    $result = $num1 * $num2;
                    break;
                case '/':
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        echo "La division par zéro n'est pas autorisée.";
                    }
                    break;
                default:
                    echo "Opération non valide.";
            }
            echo "<h2>Calcul et résultat</h2>";
            echo "<h3>{$num1} {$operations} {$num2} = {$result}</h3>";
        }
    }
?>
    <a href="index.php">Retourner à la calculatrice</a>