
<?php
include 'conect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <button class="btn btn-primary my-5">
        <a href="user.php" class="text-light">Dodaj korisnika</a>
    </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Ime</th>
      <th scope="col">Email</th>
      <th scope="col">Mobilni</th>
      <th scope="col">Komande</th>
    </tr>
  </thead>
  <tbody>
  <?php
$sql = "SELECT * FROM crudtable"; // Ispravljeno, bez navodnika oko imena tabele
$result = mysqli_query($conn, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $ime = $row['ime'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        echo '<tr>
            <th scope="row">' . $id . '</th>
            <td>' . $ime . '</td>
            <td>' . $email . '</td>
            <td>' . $mobile . '</td>
            <td>
            <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Promeni</a></button>
            <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Brisi</a></button>
          </td>
        </tr>';
    }
} else {
    die(mysqli_error($conn));
}
?>
   
  </tbody>
</table>
</div>
</body>
</html>