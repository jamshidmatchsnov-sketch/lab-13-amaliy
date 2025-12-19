<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natija</title>
    <style>
        body { font-family: sans-serif; padding: 20px; background-color: #f4f4f9; }
        .container { max-width: 500px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1 { color: #333; text-align: center; }
        p { font-size: 18px; line-height: 1.6; }
        .back-btn { display: block; width: 100%; text-align: center; margin-top: 20px; padding: 10px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px; }
        .back-btn:hover { background-color: #0056b3; }
    </style>
</head>
<body>

<div class="container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ism = isset($_POST['ism']) ? htmlspecialchars($_POST['ism']) : '';
        $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
        $telefon = isset($_POST['telefon']) ? htmlspecialchars($_POST['telefon']) : '';
        $manzil = isset($_POST['manzil']) ? htmlspecialchars($_POST['manzil']) : '';

        echo "<h1>Qabul qilingan ma'lumotlar:</h1>";
        echo "<p><strong>Ism:</strong> " . $ism . "</p>";
        echo "<p><strong>Email:</strong> " . $email . "</p>";
        echo "<p><strong>Telefon:</strong> " . $telefon . "</p>";
        echo "<p><strong>Manzil:</strong> " . $manzil . "</p>";
    } else {
        echo "<h1>Iltimos, formani to'ldiring.</h1>";
    }
    ?>
    <a href="index.php" class="back-btn">Ortga qaytish</a>
</div>

</body>
</html>
