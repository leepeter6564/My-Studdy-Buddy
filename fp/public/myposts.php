<?php

    // configuration
    require("../includes/config.php");

        // take information from all events posted by the user
        $rows = CS50::query("SELECT * FROM event WHERE user_id = ?", $_SESSION["id"]);
        // declare new blank array, insert in it the relevant information of
        // the events, provided that they exist
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
            "eventid" => $row["id"]
            ];
        }
        
        

        // makes data available to myposts_form.php
        render("myposts_form.php", ["positions" => $positions, "title" => "Manage My Posts"]);

?>