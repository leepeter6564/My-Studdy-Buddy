<form action="update.php" method="post">
    <fieldset>
        <!--these are identical fields that appeared on the "Create Event"-->
        <!--form, but with the original values stored in them so that the user-->
        <!--can see what they originally had in those fields before making changes-->
        <div class="form-group">
            <span class="searchfieldlabel"> What's going on?* </span>
            <br>
            <input autocomplete="off" autofocus class="form-control" name="event" placeholder="Name of Event" type="text" value="<?= $originals[0]["event"] ?>" required/>
        </div>
        <div class="form-group">
            <span class="searchfieldlabel"> Which Course?*
            <br>
            (For consistency, please enter exact course code with necessary spaces, ex. COMPSCI 50) </span>
            <br>
            <input autocomplete="off" autofocus class="form-control" name="course" placeholder="Course/Subject" type="text" value="<?= $originals[0]["course"] ?>"required/>
        </div>
        <div class="form-group">
        <span class="searchfieldlabel"> Where? (If not yet decided, put TBD) </span>
        <br>
            <input autocomplete="off" autofocus class="form-control" name="location" placeholder="Location" type="text" value="<?= $originals[0]["location"] ?>" required/>
        </div>   
        <div class="form-group">
            <span class="searchfieldlabel"> When?*</span>
            <br>
            <input id="startdate" name="date" min="2015-01-01" max="2050-01-01" type="date" value="<?= $originals[0]["date"] ?>"required>
            <br>
            <span class="searchfieldlabel"> Time from: </span>
            <input id="exit-time" name="time_from" type="time" value="<?= $originals[0]["time_from"] ?>" required>
            <span class="searchfieldlabel"> Time to: </span>
            <input id="exit-time" name="time_to" type="time" value="<?= $originals[0]["time_to"] ?>" required>
        </div>
        <div>
            <span class="searchfieldlabel"> Tell people about your study event! (255 character limit) </span>
            <br>
            <textarea name="description" rows="6" cols="50"><?= $originals[0]["description"] ?></textarea>
        </div>
        <input type="hidden" name="eventid" value="<?= $originals[0]["id"] ?>">
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                Update!
            </button>
        </div>
    </fieldset>
    
</form>
