<?php
require 'database.php';

$sql = 'SELECT * FROM tablo';
$stmt = connect()->prepare($sql);
$stmt->execute();
$data= $stmt->fetchAll(PDO::FETCH_OBJ);


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
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>



    <div>
</div>


 <?php require 'footer.php'; ?>








