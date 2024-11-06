<?php
$result = $error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    if (!is_numeric($num1) || !is_numeric($num2)) {
        $error = "Kérjük, érvényes számokat adjon meg.";
    } else {
        switch ($operation) {
            case "add": $result = $num1 + $num2; break;
            case "subtract": $result = $num1 - $num2; break;
            case "multiply": $result = $num1 * $num2; break;
            case "divide":
                $result = $num2 == 0 ? "NULLÁVAL NEM LEHET OSZTANI." : $num1 / $num2;
                break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Kalkulátor</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #202225; color: white; font-weight: bold;}
        .container { max-width: 400px; margin: auto; padding: 20px; background-color: #40444b; border: 5px solid #ccc; border-radius: 5px;}
        h2 { text-align: center; }
        input[type="text"], select, input[type="submit"] { width: 100%; padding: 10px; margin: 10px 0;}
        .error { color: red; }
        .result { color: green; }
        input[type="submit"]{ color:  white; background-color: #4CAF50; }
        input:hover{
            transition: 0.8s;
            color: black;
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="post">
            <input type="text" name="num1" placeholder="Első szám" required>
            <input type="text" name="num2" placeholder="Második szám" required>
            <select name="operation" required>
                <option value="add">Összeadás</option>
                <option value="subtract">Kivonás</option>
                <option value="multiply">Szorzás</option>
                <option value="divide">Osztás</option>
            </select>
            <input type="submit" value="Számítás">
        </form>

        <div class="error"><?php echo $error; ?></div>
        <div class="result"><?php if ($result !== "") echo "Eredmény: $result"; ?></div>
    </div>
</body>
</html>