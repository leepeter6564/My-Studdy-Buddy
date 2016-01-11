
<link href="/css/newsfeed.css" rel="stylesheet"/>
<!--go through the event information and display it in a table format-->
<?php foreach ($positions as $position): ?>
    <br>
    <body>
        <header>
            <h1><font color="white"><?= $position["course"] ?></font></h1>
        </header>

            <nav>
                <h1><?= $position["event"] ?></h1>
                <h6><span class="searchfieldlabel"> Created by: <?= $position["first"] . "  " . $position["last"] ?></span></h6>
                <p>
                    <?= $position["description"] ?>
                </p>
                <strong> Location: </strong><?= $position["location"] ?><br>
                <?= $position["time_from"] ?>
                <span class="searchfieldlabel"> to </span>
                <?= $position["time_to"] ?><br>
                <?= $position["date"] ?><br>
                <br>
                <!--here, users may indicate whether they are only interested or actually going-->
                <form action="response.php" method="post">
                    <p>
                        <!--hidden input needed to identify each event-->
                        <input type="hidden" name="eventid" value="<?= $position["eventid"] ?>">
                        <button name="interested" type="submit">Interested!</button>
                        <button name="going" type="submit">Going!</button>
                    </p>
                </form>
            </nav>
        <footer>
            <!--user can click this button to see list of people who are interested or going-->
            <form action="responders.php" method="post">
                <p>
                    <!--hidden input needed to identify each event-->
                    <input type="hidden" name="eventid" value="<?= $position["eventid"] ?>">
                    <button name="responder" type="submit"><font color="black">Check who's going/interested!</font></button>
                </p>
            </form>
        </footer>
    </body>

    <br>
<?php endforeach ?>
