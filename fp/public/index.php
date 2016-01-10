<?php

    // configuration
    require("../includes/config.php");

    // select information from all relevent events (where the date has not yet past today)
    $rows = CS50::query("SELECT * FROM event WHERE date >= CURDATE()");
    // declare new blank array, insert in it the relevant information of
    // the event, provided that it exists
    $positions = [];
    foreach ($rows as $row){
        $positions[] = [
        "event" => $row["event"],
        "course" => $row["course"],
        "location" => $row["location"],
        "date" => $row["date"],
        "time_from" => $row["time_from"],
        "time_to" => $row["time_to"],
        "description" => $row["description"],
        "eventid" => $row["id"],
        "first" => $row["first"],
        "last" => $row["last"]
        ];
        
    }


    // makes data available to newsfeed_form.php
    render("newsfeed_form.php", ["positions" => $positions, "title" => "Newsfeed"]);

?>