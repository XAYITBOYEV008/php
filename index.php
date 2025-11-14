<?php
// PHP kod qismi: kalkulyator logikasi
$calc_result = "";

if (isset($_POST['calculate'])) {
    $num1 = floatval($_POST['num1']);
    $num2 = floatval($_POST['num2']);
    $operation = $_POST['operation'];

    switch ($operation) {
        case '+':
            $calc_result = $num1 + $num2;
            break;
        case '-':
            $calc_result = $num1 - $num2;
            break;
        case '*':
            $calc_result = $num1 * $num2;
            break;
        case '/':
            if ($num2 != 0) {
                $calc_result = $num1 / $num2;
            } else {
                $calc_result = "0 ga bo‘lish mumkin emas!";
            }
            break;
        default:
            $calc_result = "Noto‘g‘ri amal!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulyator</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 50px; }
        .calculator { background: #fff; padding: 20px; border-radius: 8px; width: 300px; margin: auto; box-shadow: 0 0 10px rgba(0,0,0,0.1);}
        input[type=number], select { width: 100%; padding: 8px; margin: 5px 0 10px 0; border: 1px solid #ccc; border-radius: 4px; }
        input[type=submit] { background-color: #28a745; color: white; padding: 10px; border: none; border-radius: 4px; cursor: pointer; width: 100%; }
        input[type=submit]:hover { background-color: #218838; }
        .result { margin-top: 10px; font-weight: bold; text-align: center; }
    </style>
</head>
<body>

<div class="calculator">
    <h2>Kalkulyator</h2>
    <form method="post">
        <input type="number" name="num1" placeholder="Birinchi son" step="any" required>
        <input type="number" name="num2" placeholder="Ikkinchi son" step="any" required>
        <select name="operation" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="submit" name="calculate" value="Hisobla">
    </form>
    <?php if ($calc_result !== "") echo "<p class='result'>Natija: $calc_result</p>"; ?>
</div>

</body>
</html>
