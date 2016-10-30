<?php
function getPage()
{
    $page = "home"; //Om inte valt något, visa home

    if (isset($_GET["page"])) {
        $page = $_GET["page"]; // Om valt en sida, visa den
        if(!file_exists("pages/$page.php")) {
            $page = "error"; // Om den valda sidan inte existerar, visa detta felmeddelande
        }
    }

    $url = "pages/$page.php"; // Skapar sökvägen till den valda och existerande sidan
    require_once($url); // Läs in och visa den valda sidan

}
?>