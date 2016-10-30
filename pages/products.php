<?php
require_once("db/getConnection.php");
require_once("db/models/ProductModel.php");
?>

<h2>Products</h2>
<table>
    <?php
    $pdo = getConnection();

    $model = new ProductModel();
    $model->getAll($pdo);
    ?>
</table>
