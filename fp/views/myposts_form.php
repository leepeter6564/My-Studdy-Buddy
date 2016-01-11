
<head>
    <link href="/css/newsfeed.css" rel="stylesheet"/>
</head>
<!--display all posts made by the user -->
<?php foreach ($positions as $position): ?>
    <body>

        <header>
            <h1><font color="white"><?= $position["course"] ?></font></h1>
        </header>

        <nav>
            <h1><?= $position["event"] ?></h1>
        <p>
            <?= $position["description"] ?>
        </p>
            <strong> Location: </strong><?= $position["location"] ?><br>
            <?= $position["time_from"] ?>
            <span class="searchfieldlabel"> to </span>
            <?= $position["time_to"] ?><br>
            <?= $position["date"] ?><br>
            <br>
            <!--pass in following information to manage.php-->
            <form action="manage.php" method="post">
                <p>
                    <!--hidden value used to identify specific event-->
                    <input type="hidden" name="eventid" value="<?= $position["eventid"] ?>">
                    <button name="edup" type="submit">Edit/Update</button>
                    <button name="delete" type="submit">Delete!</button>
                </p>
            </form>
        </nav>
    <footer>
    </footer>
    </body>

    <br>
<?php endforeach ?>
