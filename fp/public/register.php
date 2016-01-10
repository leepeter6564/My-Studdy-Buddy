<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // received code from:
        // http://stackoverflow.com/questions/15098426/validate-e-mail-domains
        function validEmail($email)
        {
            $allowedDomains = array('college.harvard.edu');
            list($user, $domain) = explode('@', $email);
            if (checkdnsrr($domain, 'MX') && in_array($domain, $allowedDomains))
            {
                return true;
            }
            return false;
        }

        if (!validEmail($_POST["email"]))
        {
            apologize("Please enter a valid Harvard email address!");
        }
        else
        {
            // if successful, create new user data in sql table, unless username is already taken
            $result = CS50::query("INSERT IGNORE INTO users (email, first, last, hash) VALUES(?, ?, ?, ?)", $_POST["email"], $_POST["first"], $_POST["last"], password_hash($_POST["password"], PASSWORD_DEFAULT));
            if ($result == false)
            {
                apologize("This email is already registered!");
            }
            else
            {
                $rows = CS50::query("SELECT LAST_INSERT_ID() AS id");
                
                $id = $rows[0]["id"];
                
                $_SESSION["id"] = $id;
                
                redirect("/");
            }
        }
    }

?>