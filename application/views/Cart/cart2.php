
<!--echo$cars[0]['carID'];-->
<div class="container animate-left" style="box-shadow:0px 5px 10px;padding: 15px;">

  <div class="container" style="margin-top:80px;">
    <ul class="breadcrumb">
      <li><a href="<?php echo site_url('Reserve/car/'.$cars[0]['carID']);?>">Booking details</li></a>
      <li class="active">Identity prove</li>
      <li>Confirm payment</li>
    </ul>
  </div>
  <!--Open row-->
  <div class="row">
      <div class="col-sm-6">

        <!--Left Panel-->
        <div class="col-sm-12 animate-left" style="padding:25px;">
          <!--Check in-->
            <div class="col-sm-6">
              <tr>
              <td><label for="">CHECK-IN</label></td>
                  <td>
                      <div class='input-group date' id='datetimepicker_checkin'>
                          <input disabled value="<?php echo $_SESSION['chkin_session'] ?>" type='text' id="chkin" class="form-control" name="check_in" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </td>
              </tr>
            </div>

          <!--Check out-->
            <div class="col-sm-6">
              <tr>
                <td><label for="">CHECK-OUT</label></td>
                <td>
                  <div class='input-group date' id='datetimepicker_checkout'>
                      <input disabled value="<?php echo $_SESSION['chkout_session'] ?>" type='text' id="chkout" class="form-control" name="check_out"/>
                      <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
                </td>
              </tr>
            </div>
          <!--Total Price-->
            <div class="col-sm-12">
              <label for="">Total price:</label>
              <div style="font-size: 22px;background-color:silver;box-shadow:4px 6px 10px gray; border-radius:5px;width: 300px;margin:auto;">
                <p id="totalprices" class="text-center"><?php echo "Total: ".$_SESSION['price_session']."&euro;" ?></p>
              </div>
            </div>
        </div>
        <!--end Left panel-->

        <hr>
        <!--Cancellation-->
        <div class="col-sm-12">
            <h3>Cancellation Policy</h3>
            <p><?php echo $cars[0]['cancellation_policy']?></p>
        </div>
        <!--End cancellation-->

      </div>
      <!--Right Panel Price display-->
      <div class="col-sm-6 animate-left">
            <!--upload-->
            <div class="col-sm-12 text-center">
                <h2>Driver license attachment</h2>
            </div>
            <div class="col-sm-12">
                <h4>Please attach below pickture of your driving license.
                This is to double check when you check-in with host</h4>
            </div>
            <div class="col-sm-12">
              <form action="upload.php" method="post" enctype="multipart/form-data">
                  <input type="file" name="fileToUpload" id="fileToUpload">
              </form>
            </div>
            <!--End upload-->
            <div class="col-sm-12 text-center">
                <h3>Message to Host</h3>
            </div>
            <div class="col-sm-12 text-left">
                <h4>Say 'hi' to host and tell a little bit about yourself
                as well as reason for you coming</h4>
            </div>
            <div class="col-sm-12" >
                <textarea rows="4" cols="50" name="comment" form="usrform"></textarea>
            </div>
        </div>
        <!--End Right Panel-->

        <!--Continue to cart3-->
        <div class="col-sm-12 text-left" style="padding-top:20px;">

                <form action="<?php echo site_url('Reserve/car/'.$cars[0]['carID']);?>" method="post">
                  <input hidden id="test" type="text" name="check_in" value="<?php echo $check_in=$_SESSION['chkin_session']; ?>"><br>
                  <input hidden id="test2" type="text" name="check_out"value="<?php echo $check_out=$_SESSION['chkout_session']; ?>"><br>
                  <input hidden id="test3" type="text" name="prices" value="<?php echo $price=$_SESSION['price_session']; ?>"><br>
                  <input type="submit" class=" btn btn-primary " value="Back">
                  <a href="<?php echo site_url('Cart/confirmpayment/'.$cars[0]['carID']);?>" type="button" class="btn btn-primary" >Continue</a>
                </form>
        </div>
  </div>
  <!--End row-->

</div>
<hr>
