<?php
include 'conect.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM crudtable WHERE id=$id"; // Ispravljeno, bez navodnika oko imena tabele
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Uspesno brisanje iz baze";
    } else {
        die(mysqli_error($conn));
    }
}
?>