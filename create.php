<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'database.php';

if (isset($_POST['date']) &&
    isset($_POST['time']) &&
    isset($_POST['movieName']) &&
    isset($_POST['hall']) &&
    isset($_POST['age'])){
    $date = $_POST['date'];
    $time = $_POST['time'];
    $movieName = $_POST['movieName'];
    $hall = $_POST['hall'];
    $age = $_POST['age'];
    createFilm($date, $time, $movieName, $hall, $age);
 }

function createProduct($date, $time, $movieName, $hall, $age)
{

    $sql = "INSERT INTO Tablo(date, time, movie_name, hall, person_age) VALUES (:date, :time, :movieName, :hall, :age)";
    $stmt = connect()->prepare($sql);
    $stmt->bindValue(':date', $date, PDO::PARAM_STR_CHAR); //nespėjau sutvarkyti tipų
    $stmt->bindValue(':time', $time);
    $stmt->bindValue(':movie_name', $movieName, PDO::PARAM_INT);
    $stmt->bindValue(':hall', $hall, PDO::PARAM_STR_CHAR);
    $stmt->bindValue(':person_age', $age, PDO::PARAM_STR_CHAR);
     $stmt->execute();

 ?>



<?php require 'header.php'; ?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Sukurti įrašą</h2>
        </div>
        <div class="card-body">
            <?php if(!empty($message)): ?>
                <div class="alert alert-success">
                    <?= $message; ?>
                </div>
            <?php endif; ?>

            <form method="post">

                <div class="form-group">
                    <label for="time">Data</label>
                    <input type="date" name="date" id="data" class="form-control">
                </div>

                <div class="form-group">
                    <label for="time">Laikas</label>
                    <input type="time" name="time" id="time" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Filmo pavadinimas</label>
                    <input type="number" name="movieName" id="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="age">Salė</label>
                    <input type="number" name="hall" id="hall" class="form-control">
                </div>


                <div class="form-group">
                    <label for="weight">Amžiaus cenzas</label>
                    <input type="number" name="age" id="age" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-info">Sukurti filmą</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>
