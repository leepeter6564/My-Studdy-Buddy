<?php

    // configuration
    require("../includes/config.php");
    
    // make queries for the user information (for the first and last names)
    $name = CS50::query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);
    // make queries for information about who is interested in and who is going
    // to the event in question
    $interest_find = CS50::query("SELECT * FROM log WHERE user_id = ? AND event_id=? AND status = ?", $_SESSION["id"], $_POST["eventid"], "interested");
    $going_find = CS50::query("SELECT * FROM log WHERE user_id = ? AND event_id=? AND status = ?", $_SESSION["id"], $_POST["eventid"], "going");

    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        redirect('/');
    }
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // if user presses interested button, take user to appropriate response form
        if (isset($_POST["interested"]))
        {
            // if the user was going before, update status to interested
            if ($going_find)
            {
                CS50::query("UPDATE log SET status = ? WHERE user_id = ? AND event_id = ?", "interested", $_SESSION["id"], $_POST["eventid"]);
                render("response_form1.php", ["title" => "Interested"]);
            }
            // if user was already interested, remind that user is already
            // interested
            else if ($interest_find)
            {
                render("response_form2.php", ["title" => "Interested"]);
            }
            // if hadn't indicated anything, simply insert user info to table and
            // set status to interested in that particular event
            else
            {
                CS50::query("INSERT INTO log (event_id, user_id, first, last, status) VALUES (?, ?, ?, ?, ?)", $_POST["eventid"], $_SESSION["id"], $name[0]["first"], $name[0]["last"], "interested");
                render("response_form3.php", ["title" => "Interested"]);
            }
        }
        // same logic as above code, with the statuses (interested/going) switched
        // around
        else if (isset($_POST["going"]))
        {
            if ($interest_find)
            {
                CS50::query("UPDATE log SET status = ? WHERE user_id = ? AND event_id = ?", "going", $_SESSION["id"], $_POST["eventid"]);
                render("response_form4.php", ["title" => "Going"]);
            }
            else if ($going_find)
            {
                render("response_form5.php", ["title" => "Going"]);
            }
            else
            {
                CS50::query("INSERT INTO log (event_id, user_id, first, last, status) VALUES (?, ?, ?, ?, ?)", $_POST["eventid"], $_SESSION["id"], $name[0]["first"], $name[0]["last"], "going");
                render("response_form6.php", ["title" => "Going"]);
            }
        }
    }
?>