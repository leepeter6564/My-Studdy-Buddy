<?php

    // configuration
    require("../includes/config.php");

    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // render form
        render("search_form.php", ["title" => "Search"]);
    }
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // if both search criteria filled in
        if (!empty($_POST["date"]) && !empty($_POST["course"]))
        {
            // take information of events that match the search criteria
            $rows = CS50::query("SELECT * FROM event WHERE date >= ? AND course = ?", $_POST["date"], $_POST["course"]);
        }
        // if only course filled in
        else if (empty($_POST["date"]) && !empty($_POST["course"]))
        {
            // take info of events past current time and relevant course
            $rows = CS50::query("SELECT * FROM event WHERE date >= NOW() AND course = ?", $_POST["course"]);
        }
        // if only date filled in
        else if (!empty($_POST["date"]) && empty($_POST["course"]))
        {
            // take info of events past the inputted date
            $rows = CS50::query("SELECT * FROM event WHERE date >= ?", $_POST["date"]);
        }
        // if both fields empty
        else if (empty($_POST["date"]) && empty($_POST["course"]))
        {
            // take info from all events past current date
            $rows = CS50::query("SELECT * FROM event WHERE date >= NOW()");
        }
    }
        // declare new blank array, insert in it the relevant information of
        // the events that fit the search criteria
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
            "eventid" =>$row["id"],
            "first" => $row["first"],
            "last" => $row["last"]
            ];
        }
        // pass info to search_show.php
        render("search_show.php", ["positions" => $positions, "title" => "Search"]);
    
        
?>