<?php

    require("../includes/config.php");

    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        redirect('https://ide50-seungminlee.c9.io/myposts.php');
    }
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // update the event to whatever the user put newly into the fields
        CS50::query("UPDATE event SET event = ?, course = ?, location = ?, date = ?, time_from = ?, time_to = ?, description = ? WHERE user_id = ? AND id = ?", $_POST["event"], $_POST["course"], $_POST["location"], $_POST["date"], $_POST["time_from"], $_POST["time_to"], $_POST["description"], $_SESSION["id"], $_POST["eventid"]);
        // render the "updated successfully" page to show user that the event
        // has been update successfully
        render("update_show.php", ["title" => "Updated"]);
    }
?>