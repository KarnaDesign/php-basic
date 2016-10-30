<?php

class NewsModel
{
    function getAll($pdo)
    {
        $statement = $pdo->query('SELECT * FROM news');
        while ($row = $statement->fetch()) {
            echo "<tr>";
            echo "<td>" . $row->title . "</td>";
            echo "<td>" . $row->content . "</td>";
            echo "<td>" . $row->added_date . "</td>";
            echo "</tr>";

        }
    }

    function getById($pdo, $id)
    {
        $sql = "SELECT * FROM news WHERE id = ?";
        $statement = $pdo->prepare($sql);
        $statement->execute([$id]);
        $news = $statement->fetch();

        return $news;
    }
}