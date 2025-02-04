<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prijava - Parket Koki</title>
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

        form {
            width: 400px;
            border: 2px solid #ccc;
            padding: 30px;
            background: #fff;
            border-radius: 15px;
        }

        h2 {
            text-align: center;
            margin-bottom: 40px;
        }

        input, select {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #555;
            color: white;
            border: none;
            border-radius: 5px;
        }

        button:hover {
            background: #333;
        }

        .error {
            background: #f2dede;
            color: #a94442;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<header>
        <div class="header-container">
            <a href="index.php"><img src="img/logo1.jpg" alt="Parket Koki" class="logo"></a>
        </div>
    </header>
    <form action="login-check.php" method="post">
        <h2>Prijava</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <label for="name">Korisničko ime</label>
        <input type="text" id="name" name="name" placeholder="Unesite  ime" required>

        <label for="password">Lozinka</label>
        <input type="password" id="password" name="password" placeholder="Unesite lozinku" required>

        <label for="role">Odaberite ulogu</label>
        <select id="role" name="role">
            <option value="Admin">Admin</option>
            <option value="Majstor">Majstor</option>
            <option value="Klijent">Klijent</option>
        </select>

        <button type="submit">Prijavi se</button>
        <a href="signup.php" class="ca">Nemate nalog?</a>
    </form>
</body>
</html>
