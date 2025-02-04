<section>
    <div class="carousel-container">
        <div class="page-header">
            <h2>Galerija slika</h2>
        </div>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                <li data-target="#carousel-example-generic" data-slide-to="5"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/postavljanje1.jpg" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="img/postavljanje2.jpg" alt="parket,tarket,laminat,lajsne,lakiranje,hoblovanje,bajcovanje">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="img/postavljanje3.jpg" alt="parket,tarket,laminat,lajsne,lakiranje,hoblovanje,bajcovanje">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <!-- Add more items as needed -->
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Prethodna</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Sledeća</span>
            </a>
        </div>
    </div>
</section>

<style>
    .carousel-inner img {
        width: 100vw;  /* Popuni horizontalno ekran */
        height: auto;  /* Zadrži originalnu proporciju slike */
        object-fit: cover;  /* Prilagodi sliku, ali obreži višak ako je potrebno */
        max-height: 70vh;  /* Ograniči visinu na 70% visine ekrana */
    }

    .carousel-container {
        margin: 0;
        padding: 0;
    }
</style>
