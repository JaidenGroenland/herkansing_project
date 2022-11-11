<?php
session_start();


include ("data.php");
try{
$query = $db->prepare("SELECT * FROM players");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

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
                        <a class="nav-link text-light fs-4 col-1 ps-4" aria-current="page" href="index.php">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fs-4 col-1 ps-4" aria-current="page" href="overons.php">S.V.GROENLAND</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light fs-4 col-1" href="aanmelden.php">aanmelden</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light fs-4 col-1" href="lijst.php"><u>lijst</u></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light fs-4 col-1" href="toevoegen.php">toevoegen</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--here is the text-->
    <div class="container-fluid p-0">
        <img src="img/voetbal-banner.jpg" class="pb-5" alt="banner" width="100%">

        <!--database result comes here-->
        <p/>
        <style type="text/css">
            table {
                border-collapse: collapse;
                border: 1px solid black;
            }

            td{
                border: 1px solid black;
                width: 100px;
            }
        </style>

        <?php
        echo "<table>";
        foreach ($result as $data)  {
            echo "<tr>";
            echo "<td>" . $data["id"] . "</td>";
            echo "<td>" . $data["name"] . "</td>";
            echo "<td>" . $data["age"] . "</td>";
            echo "<td>" . $data["email"] . "</td>";
            echo "<td>" . $data["adres"] . "</td>";
            echo "<td>" . $data["place"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        } catch (PDOException $e) {
            die("error!: " . $e->getMessage());
        }
        ?>
        <img src="img/ <?php echo ["img"]?>>;
        </p>
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
