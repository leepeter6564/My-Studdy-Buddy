
<form action="event.php" method="post">
<link href="/css/styles.css" rel="stylesheet"/>
    <fieldset>
        <!--places to enter relevant information about the event that is being posted, followed-->
        <!--by button to carry it out-->
        <div class="form-group">
            <span class="searchfieldlabel"> What's going on?* </span>
            <br>
            <input autocomplete="off" autofocus class="form-control" name="event" placeholder="Name of Event" type="text" required/>
        </div>
        <div class="form-group">
            <span class="searchfieldlabel"> Which Course?*
            <br>
            (For consistency, please enter exact course code <br> with necessary spaces, ex. COMPSCI 50) </span>
            <br>
            <input autocomplete="off" autofocus class="form-control" name="course" placeholder="Course/Subject" type="text" required/>
        </div>
        <div class="form-group">
        <span class="searchfieldlabel"> Where? (If not yet decided, put TBD) </span>
        <br>
            <input autocomplete="off" autofocus class="form-control" name="location" placeholder="Location" type="text" required/>
        </div>   
        <div class="form-group">
            <span class="searchfieldlabel"> When?*</span>
            <br>
            <input id="startdate" name="date" min="2015-01-01" max="2050-01-01" type="date" required>
            <br><br>
            <span class="searchfieldlabel"> Time from: </span>
            <input id="exit-time" name="time_from" type="time" required>
            <span class="searchfieldlabel"> Time to: </span>
            <input id="exit-time" name="time_to" type="time" required>
        </div>
        <div>
            <span class="searchfieldlabel"> Tell people about your study event! (255 character limit) </span>
            <br>
            <textarea name="description" rows="6" cols="50"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                Post it!
            </button>
        </div>
        <span class="searchfieldlabel"> *required fields</span>
    </fieldset>
    
</form>