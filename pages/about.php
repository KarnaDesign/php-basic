<?php
require_once("db/getConnection.php");
require_once("db/models/ContactModel.php");
?>

<h2>About</h2>

<table>
    <?php

    $pdo = getConnection();

    $model = new ContactModel();
    $model->getAll($pdo);
    ?>
</table>