<?php

include 'conect.php';


$name = $_POST['name'];
$surname = $_POST['surname'];
$address = $_POST['address'];
$email = $_POST['email'];
$password = $_POST['password'];
$re_password = $_POST['re_password'];


if (empty($name) || empty($surname) || empty($address) || empty($email) || empty($password) || empty($re_password)) {
    header("Location: signup.php?error=Molimo popunite sva polja&name=$name&surname=$surname&address=$address&email=$email");
    exit();
}


if ($password !== $re_password) {
    header("Location: signup.php?error=Lozinke se ne poklapaju&name=$name&surname=$surname&address=$address&email=$email");
    exit();
}


$sql = "SELECT * FROM klijent WHERE email=?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Greška u pripremi upita za proveru e-maila: " . $conn->error);
}

$stmt->bind_param("s", $email); 
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user) {
    header("Location: signup.php?error=E-mail već postoji&name=$name&surname=$surname&address=$address&email=$email");
    exit();
}


$hashed_password = password_hash($password, PASSWORD_DEFAULT);


$sql = "INSERT INTO klijent (ime, prezime, adresa, email, sifra) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Greška u pripremi upita za unos: " . $conn->error);
}

$stmt->bind_param("sssss", $name, $surname, $address, $email, $hashed_password); // Bindovanje parametara

if ($stmt->execute()) {
    header("Location: signup.php?success=Registracija uspešna");
} else {
    die("Greška prilikom izvršavanja upita za unos: " . $stmt->error);
}

exit();
?>
