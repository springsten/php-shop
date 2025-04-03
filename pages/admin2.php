<?php
require_once("Models/Product.php");
require_once("Models/Database.php");

$dbContext = new Database();

$sortCol = $_GET['sortCol'] ?? "";
$sortOrder = $_GET['sortOrder'] ?? "";

// $sortCol = $_GET['sortCol'];
// if(!isset($_GET['sortCol'])){
//     $sortCol = '';
// }
?>
<html>
    <body>
        <h1>Admin</h1>
        <table border="1">
            <tr>
                <th>
                    <a href="admin2.php?sortCol=title&sortOrder=desc">UP</a>
                    Title
                    <a href="admin2.php?sortCol=title&sortOrder=asc">DOWN</a>
                </th>
                <th>
                    <a href="admin2.php?sortCol=price&sortOrder=desc">UP</a>
                    Price
                    <a href="admin2.php?sortCol=price&sortOrder=asc">DOWN</a>
                </th>
                <th>
                    <a href="admin2.php?sortCol=stockLevel&sortOrder=desc">UP</a>
                    Stock Level
                    <a href="admin2.php?sortCol=stockLevel&sortOrder=asc">DOWN</a>
                </th>
                <th>
                    <a href="admin2.php?sortCol=categoryName&sortOrder=desc">UP</a>
                    Category name
                    <a href="admin2.php?sortCol=categoryName&sortOrder=asc">DOWN</a>
                </th>
            </tr>
            <?php
            foreach($dbContext->getAllProducts($sortCol,$sortOrder) as $product){
                echo "<tr>";
                echo "<td>$product->title</td>";
                echo "<td>$product->price</td>";
                echo "<td>$product->stockLevel</td>";
                echo "<td>$product->categoryName</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>