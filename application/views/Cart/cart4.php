


<div class="container animate-fadein" style="width: 70%;box-shadow:0px 5px 10px;padding: 15px;">
    <div class="row">
      <div class="col-sm-12 text-center">
            <h2>Thank you! You have made a booking successfully</h2>
              <h5>Check your booking details in history</h5>
      </div>
      <!--Left Panel-->
        <div class="col-sm-12">
          <div class="col-sm-12" style="padding:25px;">
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

          <hr>
          <div class="col-sm-12" style="height=1px;width:100%;background-color:black;"></div>
          <!--Cancellation-->
          <div class="col-sm-12">
              <h3>Cancellation Policy</h3>
              <p><?php echo $cars[0]['cancellation_policy']?></p>
          </div>
          <!--End cancellation-->
          <div class="col-sm-12 text-center">
            <a href="<?php echo site_url('Main/main_page/'.$cars[0]['carID']);?>" type="button" class=" btn btn-primary" >Back to main pages</a>
          </div>

        </div>
      <!--end Left panel-->
    </div>

</div>
