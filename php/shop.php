<div class="container">
<div class=" page-header">
    <h2>Shop </h2>
</div>
<form name="proizvodi" action="php/order.php" method="post">
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <h3>Laminat</h3>
                <img src="img/slika3.jpg" alt="..">
                <div class="caption">

                    <p>Postavljanje laminata </p>
                    <p>Cena za m² <strong> 1.100,00 </strong></p>
                    <label for="jedan"></label><input type="text" id="jedan" name="kolicina1" size="3" placeholder="0">
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <h3>Tarket</h3>
                <img src="img/slika1.jpg" alt="...">
                    <div class="caption">
                        <p>Postavljanje tarketa</p>
                        <p>Cena za m² <strong> 1.500,00 </strong></p>
                        <label for="dva"></label><input type="text" id="dva" name="kolicina2" Kocna size="3" size="3"
                            placeholder="0">

                    </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
<h3>Parket</h3>
<img src="img/slika2.jpg" alt="...">
<div class="caption">
<p>Postavljanje parketa </p>
<p>Cena za m² <strong> 1.900,00 </strong></p>
<label for="tri"></label><input type="text" id="tri" name="kolicina3" size="3" placeholder="0">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<tr>
<td>Adresa za dolazak</td>
<td align=center> <input type="text" name="adresa" size=40 maxlength=40></td>
</tr>
<input type="submit" value="Poruci">
</div>
</div>
</form>
</div>

