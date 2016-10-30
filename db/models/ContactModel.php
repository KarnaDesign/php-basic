<?php


class ContactModel
{
    function getAll($pdo)
    {
        $statement = $pdo->query('SELECT * FROM contact');
        while ($row = $statement->fetch()) {
            echo "<tr>";
            echo "<td>" . $row->name . "</td>";
            echo "<td>" . $row->email . "</td>";
            echo "<td>" . $row->phone . "</td>";
            echo "</tr>";
        }
    }
}