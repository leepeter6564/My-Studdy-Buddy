<form action="search.php" method="post">
<link href="/css/styles.css" rel="stylesheet"/>
    <fieldset>
        <!--place to enter the name of stock whose price is to be quoted, followed-->
        <!--by button to carry it out-->
        <div class="form-group">
            <span class="searchfieldlabel"> Which Course's Studdy Buddy are you looking for?</span>
            <br>
            <input autocomplete="off" autofocus class="form-control" name="course" placeholder="Course/Subject" type="text"/>
        </div>
        <div class="form-group">
            <span class="searchfieldlabel"> After what date do you want to be with your Studdy Buddy? </span>
            <br>
            <input id="startdate" name="date" min="2015-01-01" max="2050-01-01" type="date">
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                Search for Studdy Buddy!
            </button>
        </div>
    </fieldset>
</form>