<?php
$status=false;

if(isset($_POST['cartsubmit'])){
  //set variables
  $status=true;
  $itemdesc=$_POST['descfromcart'];
  $itemcost=$_POST['costfromcart'];
  // echo " itemdesc: ".$itemdesc." itemcost: ".$itemcost;
}
?>
<title>Shop</title>
      <div class="container">
          <article>
            <h2>Shop at Pacific Trails</h2>
            <div class="shopdiv">
              <img src="/pacific_ignite/assets/images/trailguide.jpg" alt="Trail Guide" class="shopimg">
              <div class="shopitemdesc">
                <h3>Pacific Trails Hiking Guide</h3>
                <br>Guided hikes to the best trails around Pacific Trails Resort. Each hike includes a detailed route, distance, elevation change, and estimated time. 187 pages. Softcover. $19.95<br>
                <br><form method="POST" action="<?php echo base_url(); ?>cart">
                      <input type="hidden" name="desc1" id="desc1" value="Hiking Guide">
                      <input type="hidden" name="cost1" id="cost1" value="19.95">
                      <input type="hidden" name="status" value="false">
                      <?php
                          if($status==true){
                            echo '<input type="hidden" name="itemdeschist" value="'.$itemdesc.'">';
                            echo '<input type="hidden" name="itemcosthist" value="'.$itemcost.'">';
                            echo '<input type="hidden" name="status" value="'.$status.'">';
                          }

                        ?>
                      <input type="submit" value="Add to Cart" name="submitbutton1">
                    </form><br><br><br><br><br>
              </div>
            </div>
            <div class="shopdiv">
              <img src="/pacific_ignite/assets/images/yurtyoga.jpg" alt="Yurt Yoga" class="shopimg">
              <div class="shopitemdesc">
                <h3>Yurt Yoga</h3>
                <br>Enjoy the restorative poses of yurt yoga in the comfort of your own home. Each pose is illustraded with several photographs, an explanation, and a description of the restorative benefits. 206 pages. $24.95<br>
                <br><form method="post" action="<?php echo base_url(); ?>cart">
                      <input type="hidden" name="desc2" id="desc2" value="Yurt Yoga">
                      <input type="hidden" name="cost2" id="cost2" value="24.95">
                      <input type="hidden" name="status" value="false">
                      <?php
                          if($status==true){
                            echo '<input type="hidden" name="itemdeschist" value="'.$itemdesc.'">';
                            echo '<input type="hidden" name="itemcosthist" value="'.$itemcost.'">';
                            echo '<input type="hidden" name="status" value="'.$status.'">';
                          }

                        ?>
                      <input type="submit" value="Add to Cart" name="submitbutton2">
                    </form><br><br><br><br>
              </div>
            </div>
          </article>