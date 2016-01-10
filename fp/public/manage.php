<?php

    // configuration
    require("../includes/config.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        redirect('https://ide50-seungminlee.c9.io/myposts.php');
    }
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // if user presses edit/update button
        if (isset($_POST["edup"]))
        {
            // take the original values from the post
            $originals = CS50::query("SELECT * FROM event WHERE id = ?", $_POST["eventid"]);
            // pass it into the form where the user will update the post
            render("update_form.php", ["originals" => $originals, "title" => "Edit/Update"]);
    
        }
        // if user presses delete button
        else if (isset($_POST["delete"]))
        {
            // delete the event itself as well as info about who were interested or
            // going to that event
            CS50::query("DELETE FROM event WHERE id = ?", $_POST["eventid"]);
            CS50::query("DELETE FROM log WHERE event_id = ?", $_POST["eventid"]);
            // redirect user to myposts.php
            redirect('https://ide50-seungminlee.c9.io/myposts.php');
        }
    }
?>