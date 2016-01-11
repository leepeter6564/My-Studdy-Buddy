

<form action="register.php" method="post">
<link href="/css/styles.css" rel="stylesheet"/>
        <fieldset>
        <!--fields for email, names, password, password confirmation, and button to-->
        <!--finalize the registering-->
        <div class="form-group">
            Email* <br>
            <input autocomplete="off" autofocus class="form-control" name="email" placeholder="College email" type="email" required/>
        </div>
        <div class="form-group">
            First Name* <br>
            <input autocomplete="off" autofocus class="form-control" name="first" placeholder="First Name" type="text" required/>
        </div>
        <div class="form-group">
            Last Name* <br>
            <input autocomplete="off" autofocus class="form-control" name="last" placeholder="Last Name" type="text" required/>
        </div>
        <div class="form-group">
            Password* <br>
            <input class="form-control" name="password" placeholder="Password" type="password" required/>
        </div>
        <div class="form-group">
             Confirm Password* <br>
            <input class="form-control" name="confirmation" placeholder="Confirmation" type="password" required/>
        </div>
        <div>
            *required fields
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Register
            </button>
        </div>
    </fieldset>
</form>
<div>
    <!--option to log in-->
    or <a href="login.php">log in</a>
</div>
