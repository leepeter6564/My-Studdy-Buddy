<!DOCTYPE html>

<html>

    <head>
        <!-- http://getbootstrap.com/ -->
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="/css/background.css">
        <link href="/css/styles.css" rel="stylesheet"/>
        <link rel="shortcut icon" href="/img/favicon.ico">
        
        <!-- changed website title -->
        <body>
        <?php if (isset($title)): ?>
            <title>My Studdy Buddy: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>My Studdy Buddy</title>
        <?php endif ?>
        
        <!-- https://jquery.com/ -->
        <script src="/js/jquery-1.11.3.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="/js/bootstrap.min.js"></script>

        <script src="/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <div>
                    <a href="/"><img alt="My Studdy Buddy" src="/img/logo.png"/></a>
                </div>
                <!-- links to different locations of the website -->
                <?php if (!empty($_SESSION["id"])): ?>
                    <ul style="background:#80BFFF" class="nav nav-pills">
                        <li><a href="event.php"><font color="navy">Create Event</font></a></li>
                        <li><a href="search.php"><font color="navy">Search</font></a></li>
                        <li><a href="index.php"><font color="navy">Newsfeed</font></a></li>
                        <li><a href="myposts.php"><font color="navy">Manage My Posts</font></a></li>
                        <li><a href="logout.php"><strong><font color="navy">Log Out</font></strong></a></li>
                    </ul>
                <?php endif ?>
            </div>

            <div id="middle">
