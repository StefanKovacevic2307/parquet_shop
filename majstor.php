<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majstor - Parket Koki</title>
    <style>
        body {
            background: burlywood;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
            font-family: sans-serif;
        }

        header {
            width: 100%;
            background: #fff;
            position: fixed;
            top: 0;
            left: 0;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header-container {
            display: flex;
            align-items: center;
        }

        .logo {
            height: 100px;
        }

        .content {
            margin-top: 120px;
            width: 500px;
            border: 2px solid #ccc;
            padding: 30px;
            background: #fff;
            border-radius: 15px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .review {
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            background: #f9f9f9;
        }

        button {
            display: block;
            margin: 20px auto 0;
            background: #555;
            padding: 10px 15px;
            color: #fff;
            border-radius: 5px;
            border: none;
        }

        button:hover {
            opacity: .7;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <a href="index.php"><img src="img/logo1.jpg" alt="Parket Koki" class="logo"></a>
        </div>
    </header>

    <main class="content">
        <h2>Pregled Recenzija</h2>

        <div class="review">
            <p><strong>Korisnik 1:</strong> Odličan majstor, vrlo profesionalan i brz u radu.</p>
        </div>

        <div class="review">
            <p><strong>Korisnik 2:</strong> Zadovoljan sam uslugom, sve je urađeno kako treba.</p>
        </div>

        <div class="review">
            <p><strong>Korisnik 3:</strong> Majstor je bio tačan i veoma ljubazan, preporučujem.</p>
        </div>

        <a href="glavna.php"><button>Nastavi</button></a>
    </main>
</body>
</html>
