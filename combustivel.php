<!DOCTYPE html>
<html>
<head>
    <title>Gasolina vs Álcool</title>
</head>
<body>
    <h2>Gasolina ou Álcool: Qual compensa mais?</h2>
    <form method="post">
        Preço do Álcool (R$): <input type="number" name="alcool" step="0.01" required><br><br>
        Preço da Gasolina (R$): <input type="number" name="gasolina" step="0.01" required><br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $alcool = $_POST["alcool"];
        $gasolina = $_POST["gasolina"];

        if ($gasolina > 0) {
            $relacao = $alcool / $gasolina;
            echo "<h3>Relação: " . number_format($relacao * 100, 1) . "%</h3>";

            if ($relacao <= 0.7) {
                echo "<strong>Compensa abastecer com Álcool (Etanol).</strong>";
            } else {
                echo "<strong>Compensa abastecer com Gasolina.</strong>";
            }
        } else {
            echo "O preço da gasolina deve ser maior que zero.";
        }
    }
    ?>
</body>
</html>
