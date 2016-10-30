<?php
require_once("db/getConnection.php");
require_once("db/models/NewsModel.php");
?>

<h2>News</h2>
<table>
    <?php
    $pdo = getConnection();

    $model = new NewsModel();
    $model->getAll($pdo);
    ?>
</table>

<?php
    $news = $model->getById($pdo, 2);
print_r($news);
?>
