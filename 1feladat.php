<?php
$name = $email = $message = "";
$errors = [];
$successMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if (empty($name)) {
        $errors['name'] = "A név mező kötelező.";
    }

    if (empty($email)) {
        $errors['email'] = "Az e-mail cím mező kötelező.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Kérjük, adjon meg egy érvényes e-mail címet.";
    }

    if (!empty($message) && strlen($message) < 5) {
        $errors['message'] = "Az üzenet legalább 5 karakter hosszú kell legyen.";
    }

    if (empty($errors)) {
        $successMsg = "Sikeres elküldés!<br>Név: $name<br>E-mail: $email<br>Üzenet: $message";
    }
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Kontakt űrlap</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 500px; margin: auto; padding: 20px; background-color: #202225; color: white; font-weight: bold;}
        .container{max-width: 400px; margin: auto; padding: 30px; border: 5px solid #ccc; border-radius: 5px; background-color: #40444b;}
        .error { color: red; }
        .success { color: green; }
        input[type="text"], textarea { width: 100%; padding: 10px; margin: 10px 0; }
        input[type="submit"] { width: 100%; padding: 10px; color:  white; background-color: #4CAF50; }

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
        <label for="name">Név:</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>" id="name">
        <span class="error"><?php echo $errors['name'] ?? ''; ?></span>
        
        <label for="email">E-mail:</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>" id="email">
        <span class="error"><?php echo $errors['email'] ?? ''; ?></span>
        
        <label for="message">Üzenet:</label>
        <textarea name="message" id="message"><?php echo htmlspecialchars($message); ?></textarea>
        <span class="error"><?php echo $errors['message'] ?? ''; ?></span>
        
        <input type="submit" value="Küldés">
    </form>
    
    <div class="success"><?php echo $successMsg; ?></div>
  </div>
</body>
</html>