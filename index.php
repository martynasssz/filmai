<?php
require 'database.php';

$sql = 'SELECT * FROM Tablo';
$stmt = connect()->prepare($sql);
$stmt->execute();
$information= $stmt->fetchAll(PDO::FETCH_OBJ);
//echo '<pre>';
//var_dump ($data);
//echo '</pre>';

?>

<?php require 'header.php'; ?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Tablo</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Data</th>
                    <th>Laikas</th>
                    <th>Filmo pavadinimas</th>
                    <th>Salė</th>
                    <th>Amžiaus cenzas</th>
                </tr>
                <?php foreach($information as $info): ?>
                <tr>
                    <td><?= $info->date; ?></td>
                    <td><?= $info->time; ?></td>
                    <td><?= $info->movie_name; ?></td>
                    <td><?= $info->hall; ?></td>
                    <td><?= $info->person_age; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>



    <div>
</div>


 <?php require 'footer.php'; ?>








