<title>My Reservations</title>
<div class="container">
          <article>
            <h2>&nbsp;&nbsp;Reservations at Pacific Trails</h2>
            <fontblue class="fontblue">&nbsp;&nbsp;My Reservation</fontblue>
            <form method="POST" action="" name="reservations">
              <table class="formtable">
              	<tr><td>* E-mail:</td><td><input name="email" type="text" value="<?php echo $posts[0] ?>"></td></tr>
                <tr><td>First Name:</td><td><input name="firstname" type="text" value="<?php echo $posts[1] ?>"></td></tr>
                <tr><td>Last Name:</td><td><input name="lastname" type="text" value="<?php echo $posts[2] ?>"></td></tr>
                <tr><td>Phone:</td><td><input name="tel" type="tel" value="<?php echo $posts[3] ?>"></td></tr>
                <tr><td>Arrival Date:</td><td><input name="arrivaldate" type="date" value="<?php echo $posts[4] ?>"></td></tr>
                <tr><td>Departure Date:</td><td><input name="departuredate" type="date" value="<?php echo $posts[5] ?>"></td></tr>
                <tr><td>* Activities:</td><td><input name="activities" type="text" value="<?php echo $posts[6] ?>"></td></tr>
                <tr><td>* Packages:</td><td><input name="packages" type="text" value="<?php echo $posts[7] ?>"></td></tr>
                <tr><td>When:</td><td><input name="when" type="date" value="<?php echo $posts[4] ?>"></td></tr>
                <tr><td></td><td><input type="submit" name="submit"></td></tr>
              </table>
            </form>
          </article>