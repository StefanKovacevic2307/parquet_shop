<?php
require 'conect.php';

// Funkcija za pripremu i izvršenje upita
function execute_query($conn, $query, $params, $types) {
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param($types, ...$params);
        $stmt->execute();
        $stmt->close();
        return true;
    } else {
        echo "Greška u pripremi upita: " . $conn->error;
        return false;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = '';
    $message_type = '';

    // Proveri akciju za majstore
    if (isset($_POST['master_action'])) {
        $action = $_POST['master_action'];
        $master_id = $_POST['master_id'];
        $master_email = $_POST['master_email'] ?? null;
        $master_password = $_POST['master_password'] ?? null;

        if ($action === 'delete') {
            $query = "DELETE FROM Majstor WHERE IDMajstora = ?";
            if (execute_query($conn, $query, [$master_id], 'i')) {
                $message = "Majstor uspešno obrisan.";
                $message_type = 'success';
            } else {
                $message = "Greška pri brisanju majstora.";
                $message_type = 'error';
            }
        } elseif ($action === 'update') {
            if ($master_email || $master_password) {
                $query = "UPDATE Majstor SET ";
                $params = [];
                $types = '';
                
                if ($master_email) {
                    $query .= "email = ?";
                    $params[] = $master_email;
                    $types .= 's';
                }
                
                if ($master_password) {
                    if ($types) {
                        $query .= ", ";
                    }
                    $query .= "sifra = ?";
                    $params[] = $master_password;
                    $types .= 's';
                }
                
                $query .= " WHERE IDMajstora = ?";
                $params[] = $master_id;
                $types .= 'i';

                if (execute_query($conn, $query, $params, $types)) {
                    $message = "Majstor uspešno ažuriran.";
                    $message_type = 'success';
                } else {
                    $message = "Greška pri ažuriranju majstora.";
                    $message_type = 'error';
                }
            } else {
                $message = "Nema podataka za izmenu.";
                $message_type = 'warning';
            }
        }
    }

    // Proveri akciju za klijente
    if (isset($_POST['client_action'])) {
        $action = $_POST['client_action'];
        $client_id = $_POST['client_id'];
        $client_address = $_POST['client_address'] ?? null;
        $client_password = $_POST['client_password'] ?? null;

        if ($action === 'delete') {
            $query = "DELETE FROM Klijent WHERE IDKlijenta = ?";
            if (execute_query($conn, $query, [$client_id], 'i')) {
                $message = "Klijent uspešno obrisan.";
                $message_type = 'success';
            } else {
                $message = "Greška pri brisanju klijenta.";
                $message_type = 'error';
            }
        } elseif ($action === 'update') {
            if ($client_address || $client_password) {
                $query = "UPDATE Klijent SET ";
                $params = [];
                $types = '';
                
                if ($client_address) {
                    $query .= "adresa = ?";
                    $params[] = $client_address;
                    $types .= 's';
                }
                
                if ($client_password) {
                    if ($types) {
                        $query .= ", ";
                    }
                    $query .= "sifra = ?";
                    $params[] = $client_password;
                    $types .= 's';
                }
                
                $query .= " WHERE IDKlijenta = ?";
                $params[] = $client_id;
                $types .= 'i';

                if (execute_query($conn, $query, $params, $types)) {
                    $message = "Klijent uspešno ažuriran.";
                    $message_type = 'success';
                } else {
                    $message = "Greška pri ažuriranju klijenta.";
                    $message_type = 'error';
                }
            } else {
                $message = "Nema podataka za izmenu.";
                $message_type = 'warning';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezultat Akcije</title>
    <style>
        body {
            background: #f4f4f4;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }
        .message {
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
            display: inline-block;
        }
        .success {
            background: #d4edda;
            color: #155724;
        }
        .error {
            background: #f8d7da;
            color: #721c24;
        }
        .warning {
            background: #fff3cd;
            color: #856404;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            background: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <?php if (isset($message)): ?>
        <div class="message <?php echo $message_type; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>
    
    <a href="glavna.php" class="button">Nastavi na sajt</a>
    <a href="admin.php" class="button">Vrati se na izmenu</a>
</body>
</html>
