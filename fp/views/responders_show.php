
<link href="/css/style.css" rel="stylesheet"/>
<fieldset>
<table align="center">
    <thead>
        <!--display names of people who are interested in the event-->
        <tr>
            <th bgcolor="#d1d1e0"><font size="5">Interested: </font></th>
        </tr>
    </thead>
    
    <tbody align="center">
        <?php 
            foreach ($interesters as $interester)
            {
                echo("<tr>");
                    echo("<td>" . $interester["first"] . "   " . $interester["last"] . "</td>");
                echo("</tr>");
            }
        ?>
    </tbody>
    
</table>

<table align="center">
    <thead>
        <!--display names of people who are going to the event-->
        <tr>
            <th><font size="5">Going: </font></th>
        </tr>
    </thead>
    <br>
    <tbody align="center">
        <?php
            foreach ($goers as $goer)
            {
                echo("<tr>");
                    echo("<td>" . $goer["first"] . "   " . $goer["last"] . "</td>");
                echo("</tr>");
            }
        ?>
    </tbody>
</table>
</fieldset>