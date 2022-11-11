<?php
session_start();
include ("data.php");
global $db;
$warning = false;
$name = '';
$age = '';
$email = '';
$adres = '';
$place = '';
$img = '';


if (isset($_POST['submit'])) {

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $emailcheck = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $adres = filter_input(INPUT_POST, 'adres', FILTER_SANITIZE_SPECIAL_CHARS);
    $place = filter_input(INPUT_POST, 'place', FILTER_SANITIZE_SPECIAL_CHARS);

    $query = $db->prepare("INSERT INTO players (name,age,email,adres,place,img) VALUES (:name, :age, :email, :adres, :place, :img)");
    $query->bindParam("name", $name);
    $query->bindParam("age", $age);
    $query->bindParam("email", $email);
    $query->bindParam("adres", $adres);
    $query->bindParam("place", $place);
    $query->bindParam("img", $img);


    if (empty($_POST['name']) || empty($_POST['age']) || empty($_POST['adres']) || empty($_POST['place']) || empty($_POST['email']) || empty($_POST['img'])) {
        $warning = 'je hebt niet alles ingevuld';
    } elseif (!$emailcheck) {
        $warning = 'Dat is geen correct emailadres';
    } else {



        $_SESSION['name'] = $name;
        $_SESSION['age'] = $age;
        $_SESSION['email'] = $email;
        $_SESSION['adres'] = $adres;
        $_SESSION['place'] = $place;
        $_SESSION['place'] = $img;

        header('Location: thankyou.php');
    }



}

?>

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
                        <a class="nav-link  text-light fs-4 col-1 ps-4" aria-current="page" href="index.php">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-light fs-4 col-1 ps-4" aria-current="page" href="overons.php">S.V.GROENLAND</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light fs-4 col-1" href="aanmelden.php"><u>aanmelden</u></a>
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

        <!--here is the form for conactgegevens-->
        <?php
        if ($warning) {
            echo $warning;
        }
        ?>
        <div class="container">
        <form method="POST" action="" class="">
            <p>
                <label class="form-label">volledige naam</label>
                <br>
                <input type="text" name="name" value="<?=$name?>" class="form-control ">
            </p>

            <p>
                <label class="form-label">leeftijd</label>
                <br>
                <input type="number" name="age" value="<?=$age?>" class="form-control">
            </p>

            <p>
                <label class="form-label">email</label>
                <br>
                <input type="email" name="email" value="<?= $email?>" class="form-control">
            </p>

            <p>
                <label class="form-label">Adres</label>
                <br>
                <input type="text" name="adres" value="<?=$adres?>" class="form-control">
            </p>

            <p>
                <label class="form-label">Woonplaats</label>
                <br>
                <input type="text" name="place" value="<?=$place?>" class="form-control">
            </p>

            <p>
                <label class="form-label">img</label>
                <br>
                <input type="text" name="img" value="<?=$img?>" class="form-control">
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