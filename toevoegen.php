<?php
session_start();
include "data.php";
global $db;

try {

if (isset($_POST['submit'])) {


    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $emailcheck = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $adres = filter_input(INPUT_POST, "adres", FILTER_SANITIZE_SPECIAL_CHARS);
    $place = filter_input(INPUT_POST, "place", FILTER_SANITIZE_SPECIAL_CHARS);
    $image = filter_input(INPUT_POST, "image", FILTER_SANITIZE_STRING);


    $query = $db->prepare ("INSERT INTO players (name,age,email,adres,place,image) VALUES (:name, :age, :email, :adres, :place, :image)");
    $query->bindParam("name", $name);
    $query->bindParam("age", $age);
    $query->bindParam("email", $email);
    $query->bindParam("adres", $adres);
    $query->bindParam("place", $place);
    $query->bindParam("image", $image);


    if ($query->execute())  {
        echo "de nieuwe gegevens zijn toegevoegd";
        header('Location: lijst.php');
    } else{
        echo "er is een fout opgetreden";
    }
        echo "<br>";
}
}catch (PDOException $e) {
    die("error!: " . $e->getMessage());
}


?>

<html lang="en">s
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
                        <a class="nav-link  text-light fs-4 col-1 ps-4" aria-current="page" href="index.php">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-light fs-4 col-1 ps-4" aria-current="page" href="overons.php">S.V.GROENLAND</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light fs-4 col-1" href="aanmelden.php">aanmelden</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light fs-4 col-1" href="lijst.php">lijst</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light fs-4 col-1" href="toevoegen.php"><u>toevoegen</u></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--start banner-->
    <div class="container-fluid p-0">
        <img src="img/voetbal-banner.jpg" class="pb-5" alt="banner" width="100%">

        <!--here is the form for conactgegevens-->
        <div class="container">
            <form method="POST" action="" class="">
                <p>
                    <label class="form-label">volledige naam</label>
                    <br>
                    <input type="text" name="name" class="form-control ">
                </p>

                <p>
                    <label class="form-label">leeftijd</label>
                    <br>
                    <input type="number" name="age" class="form-control">
                </p>

                <p>
                    <label class="form-label">email</label>
                    <br>
                    <input type="email" name="email" class="form-control">
                </p>

                <p>
                    <label class="form-label">Adres</label>
                    <br>
                    <input type="text" name="adres" class="form-control">
                </p>

                <p>
                    <label class="form-label">Woonplaats</label>
                    <br>
                    <input type="text" name="place" class="form-control">
                </p>

                <p>
                    <label>Select Image File:</label>
                    <br>
                    <input type="file" name="image">
                </p>

                <p>
                    <input type="submit" value="Verstuur" name="submit" class="form-control">
                </p>
            </form>
        </div>

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
