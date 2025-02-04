
<?php
include 'conect.php';

$id = $_GET['updateid'];

if (isset($_POST['submit'])) {
    $ime = $_POST['ime'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $sifra = $_POST['sifra'];

    $sql = "UPDATE crudtable SET ime='$ime', email='$email', mobile='$mobile', sifra='$sifra' WHERE id=$id"; // Ispravljeno, bez navodnika oko imena tabele

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Uspesno izvrsene promene";
    } else {
        die(mysqli_error($conn));
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>

 <div class="container">
 <form method="post">
  <div class="form-group">
    <label >Ime</label>
    <input type="text" name="ime" class="form-control" id="ime"  placeholder="Unesite vase ime:">
    
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="email" name="email" class="form-control" id="email"  placeholder="Unesite vase e-mail:">
    
  </div>

  <div class="form-group">
    <label >Mobilni</label>
    <input type="mobile" name="mobile" class="form-control" id="mobile"  placeholder="Unesite vase mobilni:">
    
  </div>

  <div class="form-group">
    <label >Sifra</label>
    <input type="password" name="sifra" class="form-control" id="sifra"  placeholder="Unesite vase sifru:">
    
  </div>
  <button name="submit" type="submit" class="btn btn-primary">Promeni</button>
</form>
 </div>


  </body>
</html>