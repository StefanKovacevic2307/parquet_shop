<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija - Parket Koki</title>
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

        form {
            width: 500px;
            border: 2px solid #ccc;
            padding: 30px;
            background: #fff;
            border-radius: 15px;
            margin-top: 100px; 
        }

        h2 {
            text-align: center;
            margin-bottom: 40px;
        }

        input {
            display: block;
            border: 2px solid #ccc;
            width: 95%;
            padding: 10px;
            margin: 10px auto;
            border-radius: 5px;
        }

        label {
            color: #888;
            font-size: 18px;
            padding: 10px;
        }

        button {
            float: right;
            background: #555;
            padding: 10px 15px;
            color: #fff;
            border-radius: 5px;
            margin-right: 10px;
            border: none;
        }

        button:hover {
            opacity: .7;
        }

        .error {
            background: #F2DEDE;
            color: #A94442;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            margin: 20px auto;
        }

        .success {
            background: #D4EDDA;
            color: #40754C;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            margin: 20px auto;
        }

        a.ca {
            font-size: 14px;
            display: inline-block;
            padding: 10px;
            text-decoration: none;
            color: #444;
        }

        a.ca:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <a href="index.php"><img src="img/logo1.jpg" alt="Parket Koki" class="logo"></a>
        </div>
    </header>

    <main>
        <form action="signup-check.php" method="post">
            <h2>Registracija</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>

            <label>Ime</label>
            <input type="text" 
                   name="name" 
                   placeholder="Ime"
                   value="<?php echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : ''; ?>"><br>

            <label>Prezime</label>
            <input type="text" 
                   name="surname" 
                   placeholder="Prezime"
                   value="<?php echo isset($_GET['surname']) ? htmlspecialchars($_GET['surname']) : ''; ?>"><br>

            <label>Adresa</label>
            <input type="text" 
                   name="address" 
                   placeholder="Adresa"
                   value="<?php echo isset($_GET['address']) ? htmlspecialchars($_GET['address']) : ''; ?>"><br>

            <label>E-mail</label>
            <input type="text" 
                   name="email" 
                   placeholder="E-mail"
                   value="<?php echo isset($_GET['email']) ? htmlspecialchars($_GET['email']) : ''; ?>"><br>

            <label>Lozinka</label>
            <input type="password" 
                   name="password" 
                   placeholder="Lozinka"><br>

            <label>Ponovite lozinku</label>
            <input type="password" 
                   name="re_password" 
                   placeholder="Ponovite lozinku"><br>

            <button type="submit">Registruj se</button>
            <a href="index.php" class="ca">Već imate nalog?</a>
        </form>
    </main>
</body>
</html>
