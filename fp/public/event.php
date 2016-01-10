<?php

    // configuration
    require("../includes/config.php");
    
    $name = CS50::query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("event_form.php", ["title" => "Create Event"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // create new event information in the event table and take user to
        // successfully posted notification page
        $event = CS50::query("INSERT INTO event (user_id, event, course, location, date, time_from, time_to, first, last, description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", $_SESSION["id"], $_POST["event"], $_POST["course"], $_POST["location"], $_POST["date"], $_POST["time_from"], $_POST["time_to"], $name[0]["first"], $name[0]["last"], $_POST["description"]);
        render("event_show.php", ["title" => "Event Created"]);
    }

?>