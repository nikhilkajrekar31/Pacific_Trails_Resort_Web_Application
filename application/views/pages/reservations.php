<title>Reservations</title>
<?php echo form_open('pages/reservation', 'name = "reservations"'); ?>
      <div class="container">
          <article>
            <h2>Reservations at Pacific Trails</h2>
            <fontblue class="fontblue">Contact Us</fontblue>
              <br><br>Required information is marked with an asterisk (*)<br>
              <table class="formtable">
                <tr><td>* First Name:</td><td><input name="firstname" type="text"></td><td><?php echo form_error('firstname'); ?></td></tr>
                <tr><td>* Last Name:</td><td><input name="lastname" type="text"></td><td><?php echo form_error('lastname'); ?></td></tr>
                <tr><td>* E-mail:</td><td><input name="email" type="email"></td><td><?php echo form_error('email'); ?></td></tr>
                <tr><td>Phone:</td><td><input name="tel" type="tel"></td><td><?php echo form_error('tel'); ?></td></tr>
                <tr><td>Arrival Date:</td><td><input name="arrivaldate" type="date"></td><td><?php echo form_error('arrivaldate'); ?></td></tr>
                <tr><td>Nights:</td><td><input name="nights" type="number" min="1" max="100"></td></tr>
                <tr><td>* Comments</td><td><textarea name="comments"></textarea></td><td><?php echo form_error('comments'); ?></td></tr>
                <tr><td>* Activities:</td><td>
                  <select name="activity">
                    <?php foreach($activities as $option): ?>
                      <option value="<?= $option['activityid']; ?>">
                        <?= $option['activitydescription']; ?>
                      </option><?php endforeach; ?>
                    </select></td>
                  </tr>
                <tr><td>* Packages:</td><td>
                  <select name="packages">
                    <?php foreach($package as $option1): ?>
                      <option value="<?= $option1['packageid']; ?>">
                        <?= $option1['pkgname']; ?>
                      </option><?php endforeach; ?>
                  </select></td>
                </tr>
                <tr><td>When:</td><td><input name="when" type="date"></td><td><?php echo form_error('when'); ?></td></tr>
                <tr><td></td><td><input type="submit" name="submit" onclick="return validateForm()"></td></tr>
              </table>
            </form>
          </article>