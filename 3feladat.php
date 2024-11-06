<?php
$password = $error = $successMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];
    $validations = [
        'length' => strlen($password) >= 12,
        'number' => preg_match('/[0-9]/', $password),
        'uppercase' => preg_match('/[A-Z]/', $password),
        'special' => preg_match('/[\W]/', $password)
    ];

    if (!array_product($validations)) {
        $errorMessages = [
            'length' => "A jelszónak legalább 12 karakter kell.",
            'number' => "Legalább egy számjegy (0–9)",
            'uppercase' => "Legalább egy nagybetű és egy kisbetű;",
            'special' => "A jelszónak tartalmazina kell egy speciális karaktert."
        ];
        foreach ($validations as $key => $isValid) {
            if (!$isValid) {
                $error .= $errorMessages[$key] . "<br>";
            }
        }
    } else {
        $successMsg = "A jelszó sikeresen ellenőrizve!";
    }
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Jelszóellenőrző</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #202225}
        .container { max-width: 400px; margin: auto; padding: 30px; border: 5px solid #ccc; border-radius: 5px; background-color: #40444b; color: white; font-weight: bold;}
        h2 { text-align: center; }
        .error { color: red; }
        .success { color: green; }
        input[type="password"], input[type="submit"] { width: 100%; padding: 6px; margin: 10px 0; }
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
            <input type="password" name="password" placeholder="Jelszó" required>
            <input type="submit" value="Ellenőrzés">
        </form>
        <div class="error"><?php echo $error; ?></div>
        <div class="success"><?php echo $successMsg; ?></div>
    </div>
</body>
</html>