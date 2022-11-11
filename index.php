<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>sv groenland</title>
</head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-expand-lg sticky-top bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="#">
            <img src="img/voetbal.png" alt="Logo" width="70" height="auto" class="d-inline-block align-text-top"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-light fs-4 col-1 ps-4" aria-current="page" href="index.php"><u>home</u></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-light fs-4 col-1 ps-4" aria-current="page" href="overons.php">S.V.GROENLAND</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light fs-4 col-1" href="aanmelden.php">aanmelden</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-light fs-4 col-1" href="lijst.php">lijst</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-light fs-4 col-1" href="toevoegen.php">toevoegen</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--start banner-->
<div class="container-fluid p-0">
    <img src="img/voetbal-banner.jpg" class="pb-5" alt="banner" width="100%">

    <!--welkom with php-->
    <?php
    $todayDate = date("H");

    if ($todayDate >= 6 && $todayDate < 12) {
        echo "<h2 class='text-center'>Goedemorgen welkom bij sv groenland</h2>";
    }
    else if ($todayDate >= 12 && $todayDate < 18 )  {
        echo "<h2 class='text-center'>Goedemiddag welkom bij sv groenland</h2>";
    }
    else if ($todayDate >= 18 && $todayDate < 24 )  {
        echo "<h2 class='text-center'>Goedeavond welkom bij sv groenland</h2>";
    }
    else if ($todayDate === 24 || $todayDate >= 0 && $todayDate< 6 )  {
        echo "<h2 class='text-center'>Goedenacht welkom bij sv groenland</h2>";
    }

    ?>
    <p class="text-center">
        sv groenland is een opkomende club. <br>
        kom eens gezellig langs of neem een kijkje op onze site!
</div>

<!--here comes the 2 imgs-->
<a href="overons.php" class="text-decoration-none">
    <div class="row row-cols-1 row-cols-md-2 g-4 img-2">
        <div class="col">
            <div class="card h-100">
                <img src="img/ons.jpg" class="card-img-top" alt="over ons">
                <div class="card-body">
                    <p class="card-text text-dark text-center">
                        dit zijn wij!!
                    </p>
                </div>
            </div>
        </div>
</a>


<a href="aanmelden.php" class="text-decoration-none">
    <div class="col">
        <div class="card h-100">
            <img src="img/spelers.jpg" width="100px" class="card-img-top" alt="spelers">
            <div class="card-body" >
                <p class="card-text text-dark text-center">
                    kom ook bij ons!!
                </p>
            </div>
        </div>
    </div>
    </div>
</a>
<br>
<br>
<!--start footer-->
<footer class="container-fluid bg-primary">
    <div class="container text-white">
        <div class="row text-center fs-15">
            <!--the first col with contact gegevens-->
            <div class="col-6">
                <div class="text-white">
                    <p>
                    <h5>  Contactgegevens</h5>
                    sv groenland <br>
                    citroenplantsoen 41 <br>
                    2552QS <br>
                    070-3978929<br>
                    </p>
                </div>
            </div>
            <!--the second col with openingstijden-->
            <div class="col-6">
                <div class="text-white">
                    <p>
                    <h5>  teams</h5>
                    Jo9 <br>
                    Jo16 <br>
                    Jo18 <br>
                    1e  <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
</div>
</body>
</html>