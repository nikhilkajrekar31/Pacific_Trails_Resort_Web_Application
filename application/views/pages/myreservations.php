<title>My Reservations</title>
<?php echo form_open('pages/myreservation', 'name = "reservations"'); ?>
      <div class="container">
          <article>
            <h2>&nbsp;&nbsp;Reservations at Pacific Trails</h2>
            <fontblue class="fontblue">&nbsp;&nbsp;My Reservation</fontblue>
            <form method="POST" action="" name="reservations">
              <table class="formtable">
              	<tr><td>* E-mail:</td><td><input name="email" type="email"></td><td><?php echo form_error('email'); ?></td></tr>
                <tr><td>First Name:</td><td><input name="firstname" type="text"></td></tr>
                <tr><td>Last Name:</td><td><input name="lastname" type="text"></td></tr>
                <tr><td>Phone:</td><td><input name="tel" type="tel"></td></tr>
                <tr><td>Arrival Date:</td><td><input name="arrivaldate" type="date"></td></tr>
                <tr><td>Departure Date:</td><td><input name="departuredate" type="date"></td></tr>
                <tr><td>* Activities:</td><td><input name="activities" type="text"></td></tr>
                <tr><td>* Packages:</td><td><input name="packages" type="text"></td></tr>
                <tr><td>When:</td><td><input name="when" type="date"></td></tr>
                <tr><td></td><td><input type="submit" name="submit" onclick="return validateMail()"></td></tr>
              </table>
            </form>
          </article>