<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forma</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        form { max-width: 400px; margin: 0 auto; }
        div { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input { width: 100%; padding: 8px; box-sizing: border-box; }
        button { padding: 10px 15px; background-color: #28a745; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #218838; }
    </style>
</head>
<body>

    <h2 style="text-align:center;">Ma'lumotlarni kiriting</h2>

    <form action="2.php" method="POST">
        <div>
            <label for="ism">Ism:</label>
            <input type="text" id="ism" name="ism" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="telefon">Telefon:</label>
            <input type="tel" id="telefon" name="telefon">
        </div>

        <div>
            <label for="manzil">Manzil:</label>
            <input type="text" id="manzil" name="manzil">
        </div>

        <button type="submit">Yuborish</button>
    </form>

</body>
</html>
