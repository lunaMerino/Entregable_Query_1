<?php

require_once './php/connection.php';

$con = connection();

$sql = "SELECT ProductID, ProductName, UnitsInStock FROM products";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso a datos</title>
</head>
<body>
    <div class="container d-flex justify-content-center .align-items-center gap-3">

        <table>
            <header>
                <tr>
                    <th>ProductID</th>
                    <th>ProductName</th>
                    <th>UnitsInStock</th>
                </tr>
            </header>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <td><p><?= $row['ProductID'] ?></p></td>
                        <td><p><?= $row['ProductName'] ?></p></td>
                        <td><p><?= $row['UnitsInStock'] ?></p></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
        
</body>
</html>