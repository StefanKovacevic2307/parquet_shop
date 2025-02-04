<?php
// Uključivanje fajla za povezivanje sa bazom
include 'conect.php';

// Preuzimanje podataka iz POST zahteva
$name = $_POST['name'];
$password = $_POST['password'];
$role = $_POST['role'];

// Proveravanje da li su svi podaci prisutni
if (empty($name) || empty($password) || empty($role)) {
    header("Location: index.php?error=Molimo popunite sva polja");
    exit();
}

// Funkcija za proveru korisnika u bazi
function checkUser($conn, $table, $name, $password) {
    $sql = "SELECT * FROM $table WHERE ime=?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Greška u pripremi upita za proveru korisnika: " . $conn->error);
    }

    $stmt->bind_param("s", $name); // Bindovanje parametra
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if (!$user) {
        // Debug: Korisnik nije pronađen
        die("Debug: Korisnik nije pronađen u tabeli $table");
    }

    // Debug: Ispisivanje lozinke iz baze
    echo "Debug: Lozinka u bazi - " . $user['sifra'] . "<br>";

    // Proveravanje da li je lozinka tačna
    if ($password === $user['sifra']) {
        return true;
    } else {
        // Debug: Lozinka nije tačna
        die("Debug: Lozinka nije tačna. Uneta lozinka - " . $password);
    }
}

// Provera da li korisnik postoji u odgovarajućoj tabeli
if ($role == 'Admin') {
    if (checkUser($conn, 'admin', $name, $password)) {
        header("Location: admin.php");
    } else {
        header("Location: index.php?error=Netačan korisničko ime ili lozinka za Admin");
    }
} elseif ($role == 'Majstor') {
    if (checkUser($conn, 'majstor', $name, $password)) {
        header("Location: majstor.php");
    } else {
        header("Location: index.php?error=Netačan korisničko ime ili lozinka za Majstor");
    }
} elseif ($role == 'Klijent') {
    if (checkUser($conn, 'klijent', $name, $password)) {
        header("Location: glavna.php");
    } else {
        header("Location: index.php?error=Netačan korisničko ime ili lozinka za Klijent");
    }
} else {
    header("Location: index.php?error=Nepoznata uloga");
}
exit();
?>
