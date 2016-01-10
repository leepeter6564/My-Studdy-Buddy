<?php
    
    require("../includes/config.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        redirect('/');
    }
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // store names of people who are interested in the event in the array
        // called interesters
        $ints = CS50::query("SELECT * FROM log WHERE event_id = ? AND status = ?", $_POST["eventid"], "interested");
        $interesters = [];
        foreach ($ints as $int){
            $interesters[] =[
            "first" => $int["first"],
            "last" => $int["last"]
            ];
        }
        
        // store names of people who are going to the event in the array
        // called goers
        $gos = CS50::query("SELECT * FROM log WHERE event_id = ? AND status = ?", $_POST["eventid"], "going");
        $goers = [];
        foreach ($gos as $go){
            $goers[] = [
            "first" => $go["first"],
            "last" => $go["last"]
            ];
        }
    
    }
    // pass the information to and render the page responders_show.php
    render("responders_show.php", ["interesters" => $interesters, "goers" => $goers, "title" => "Responders"]);
?>