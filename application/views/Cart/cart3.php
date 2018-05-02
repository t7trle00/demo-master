

<!--echo$cars[0]['carID'];-->
<div class="container animate-left" style="box-shadow:0px 5px 10px;padding: 15px;">
  <div class="container" >
    <ul class="breadcrumb">
      <li><a href="<?php echo site_url('Reserve/car/'.$cars[0]['carID']);?>">Booking details</li></a>
      <li><a href="<?php echo site_url('Cart/identity/'.$cars[0]['carID']);?>">Identity prove</li></a>
      <li class="active">Confirm payment</li>
    </ul>
  </div>
  <!--Open row-->
  <div class="row">
    <!--Left Panel-->
      <div class="col-sm-6 animate-left">
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
        <!--Cancellation-->
        <div class="col-sm-12">
            <h3>Cancellation Policy</h3>
            <p><?php echo $cars[0]['cancellation_policy']?></p>
        </div>
        <!--End cancellation-->
      </div>
    <!--end Left panel-->

      <!--Right Panel Price display-->
      <div class="col-sm-6 animate-left">
            <!--upload-->
            <div class="col-sm-12 text-center">
                <h2>Confirm your payment</h2>
            </div>
            <div class="col-sm-12 text-center">
                <i class="fa fa-cc-visa" style="font-size:50px"></i>
                <i class="fa fa-cc-mastercard" style="font-size:50px"></i>
                <i class="fa fa-cc-paypal" style="font-size:50px"></i>
            </div>
          <!--Checking card information-->
          <form action="<?php echo site_url('Cart/confirmpayment/'.$cars[0]['carID']);?>" method="post">
                <div class="col-sm-12">
                  <div class="col-sm-12 text-center form-group">
                    <label for="">Full name :</label>
                    <input class="form-control" name="fn" placeholder="Enter your full name" required></input>
                  </div>
                </div>
                <!--End upload-->
                <div class="col-sm-12">
                  <div class="col-sm-12 text-center form-group">
                    <label for="">Card information</label>
                      <input class="form-control" id="cif" placeholder="Card number" required></input>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="col-sm-6 text-center form-group">
                    <input class="form-control" name="Expiration" placeholder="Expiration" required></input>
                  </div>
                  <div class="col-sm-6 text-center form-group">
                    <input class="form-control" name="CCV" placeholder="CCV/CVV" required></input>
                  </div>
                </div>
                <div class="col-sm-12">
                    <div class="checkbox text-center">
                      <label><input type="checkbox" value="" required>I agree to the <a href="">host's rules</a>, <a href=""> Cancellation</a>.
                      <br>I also agree on <a href="">term of use</a> ,<a href="">privacy</a> of Engine4U</label>
                    </div>
                </div>
                <div class="col-sm-12 text-center">
                    <input type="submit" class=" btn btn-primary " value="Confirm">
                </div>
                <input hidden id="myID_add" type="text" name="myID_add" value="<?php echo $_SESSION['id'] ?>"><br>
                <input hidden id="city_add" type="text" name="city_add" value="<?php echo $add_city ?>"><br>
                <input hidden id="carID_add" type="text" name="carID_add" value="<?php echo $car_id ?>"><br>
                <input hidden id="check_in" type="text" name="check_in"value="<?php echo $check_out=$_SESSION['chkin_session']; ?>"><br>
                <input hidden id="check_out" type="text" name="check_out"value="<?php echo $check_out=$_SESSION['chkout_session']; ?>"><br>
                <input hidden id="prices" type="text" name="prices" value="<?php echo $price=$_SESSION['price_session']; ?>"><br>
          </form>
        <!--End Checking card information-->
        </div>
        <!--End Right Panel-->
        <div class="col-sm-12 text-left" style="padding-top:20px;">
          <a href="<?php echo site_url('Cart/identity/'.$cars[0]['carID']);?>" type="button" class="btn btn-primary" >Back</a>
        </div>
  </div>
  <!--End row-->
</div>

<hr>
<hr>
