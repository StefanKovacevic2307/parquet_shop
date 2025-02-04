<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Parket Koki</title>
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

        main {
            width: 80%;
            margin-top: 160px;
            padding: 20px;
            background: #fff;
            border-radius: 15px;
        }

        .section {
            margin-bottom: 30px;
        }

        .section h2 {
            margin-bottom: 20px;
        }

        .reviews {
            border: 2px solid #ccc;
            padding: 15px;
            border-radius: 5px;
        }

        select, input[type="text"], button {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 2px solid #ccc;
        }

        button {
            background: #555;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background: #333;
        }

        .form-container {
            margin-top: 20px;
        }

        .ca {
            display: block;
            width: 100%;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
            background: #555;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .ca:hover {
            background: #333;
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
        <!-- Pregled recenzija -->
        <div class="section">
            <h2>Pregled Recenzija</h2>
            <div class="reviews">
                <p><strong>Recenzija 1:</strong> Izuzetno sam zadovoljan uslugom. Majstor je bio veoma profesionalan i precizan.</p>
                <p><strong>Recenzija 2:</strong> Kvalitet rada je odličan, ali su se radovi malo odužili. Preporučujem ovaj servis.</p>
                <p><strong>Recenzija 3:</strong> Brza usluga i korektni majstori. Ispunili su sve moje zahteve na vreme.</p>
            </div>
        </div>

        <!-- Upravljanje majstorima -->
        <div class="section">
            <h2>Upravljanje Majstorima</h2>
            <form action="admin-actions.php" method="post">
                <label for="master_action">Izvrši promene nad majstorom</label>
                <select id="master_action" name="master_action">
                    <option value="delete">Obriši</option>
                    <option value="update">Izmeni</option>
                </select>

                <label for="master_id">ID Majstora</label>
                <input type="text" id="master_id" name="master_id" placeholder="Unesite ID majstora">

                <label for="master_email">Email Majstora</label>
                <input type="text" id="master_email" name="master_email" placeholder="Unesite novi email majstora (za izmenu)">

                <label for="master_password">Lozinka Majstora</label>
                <input type="text" id="master_password" name="master_password" placeholder="Unesite novu lozinku majstora (za izmenu)">

                <button type="submit">Izvrši akciju</button>
            </form>
        </div>

        <!-- Upravljanje klijentima -->
        <div class="section">
            <h2>Upravljanje Klijentima</h2>
            <form action="admin-actions.php" method="post">
                <label for="client_action">Izvrši promene nad klijentom</label>
                <select id="client_action" name="client_action">
                    <option value="delete">Obriši</option>
                    <option value="update">Izmeni</option>
                </select>

                <label for="client_id">ID Klijenta</label>
                <input type="text" id="client_id" name="client_id" placeholder="Unesite ID klijenta">

                <label for="client_address">Adresa Klijenta</label>
                <input type="text" id="client_address" name="client_address" placeholder="Unesite novu adresu klijenta (za izmenu)">

                <label for="client_password">Lozinka Klijenta</label>
                <input type="text" id="client_password" name="client_password" placeholder="Unesite novu lozinku klijenta (za izmenu)">

                <button type="submit">Izvrši akciju</button>
            </form>
        </div>

        <a href="glavna.php" class="ca">Nastavi na sajt</a>
    </main>
</body>
</html>
