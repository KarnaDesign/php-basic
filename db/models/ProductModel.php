<?php


class ProductModel
{
    function getAll($pdo)
    {
        $statement = $pdo->query('SELECT * FROM products');
        while ($row = $statement->fetch()) {
            echo "<tr>";
            echo "<td>" . $row->name . "</td>";
            echo "<td>" . $row->description . "</td>";
            echo "<td>" . $row->price . "</td>";
            echo "</tr>";
        }
    }
}