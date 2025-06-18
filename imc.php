<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>
</head>
<body>
    <h2>Calculadora de IMC</h2>
    <form method="post">
        Peso (kg): <input type="number" name="peso" step="0.01" required><br><br>
        Altura (m): <input type="number" name="altura" step="0.01" required><br><br>
        <input type="submit" value="Calcular IMC">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        if ($altura > 0) {
            $imc = $peso / ($altura * $altura);
            echo "<h3>Seu IMC é: " . number_format($imc, 2) . "</h3>";

            if ($imc < 18.5) {
                echo "Classificação: Abaixo do peso";
            } elseif ($imc < 24.9) {
                echo "Classificação: Peso normal";
            } elseif ($imc < 29.9) {
                echo "Classificação: Sobrepeso";
            } elseif ($imc < 34.9) {
                echo "Classificação: Obesidade grau 1";
            } elseif ($imc < 39.9) {
                echo "Classificação: Obesidade grau 2";
            } else {
                echo "Classificação: Obesidade grau 3";
            }
        } else {
            echo "Altura inválida.";
        }
    }
    ?>
</body>
</html>
