

<div class="container animate-left" style="box-shadow:0px 5px 10px;padding: 15px;">
  <div class="container" style="margin-top:80px;">
    <ul class="breadcrumb">
      <li class="active">Booking details</li>
      <li>Identity prove</li>
      <li>Confirm payment</li>
    </ul>
  </div>
  <!--Open row-->
  <div class="row">
      <div class="col-sm-6 animate-left">

        <!--Left Panel-->
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
        <!--end Left panel-->

        <hr>
        <!--Cancellation-->
        <div class="col-sm-12">
            <h3>Cancellation Policy</h3>
            <p><?php echo $cars[0]['cancellation_policy']?></p>
        </div>

      </div>
      <!--Right Panel Price display-->
      <div class="col-sm-6 animate-left">
            <div class="col-sm-12 text-center">
                <h2>Description</h2>
            </div>
            <div class="col-sm-12">
                <h3>Car Price: <input id="price" hidden value="<?php echo $cars[0]['price']?>"><?php echo $cars[0]['price']?>&euro;/Day</h3>
            </div>
            <!--Images-->
            <div class="col-sm-12">
              <?php
              for ($i=0; $i <3 ; $i++)
              {
                echo '<div class="col-sm-4">';
                echo '<img class="img-responsive" src="'.base_url().'other_gallery/'.$cars[$i]['photo']. '" alt="Image" style="height:100px">';
                echo '<br><br>' ;
                echo '</div>' ;
              }
               ?>
            </div>
            <!--End Images-->
            <div class="col-sm-12 text-center">
                <h3>Car specification</h3>
            </div>
            <div class="col-sm-12" style="padding-top:10px;box-shadow:0px 4px 7px 0px;border-radius:10px;background-color:silver;">
              <p>Type of car: <?php echo $cars[0]['type_of_car']?></p>
              <p>Description: <?php echo $cars[0]['description']?></p>
              <p>Model Year: <?php echo $cars[0]['year']?></p>
            </div>
        </div>
        <!--End Right Panel-->
        <div class="col-sm-12 text-left" style="padding-top:20px;">
          <a href="<?php echo site_url('Reserve/reserves/'.$cars[0]['carID']);?>" type="button" class="btn btn-primary" >Discard</a>
          <a href="<?php echo site_url('Cart/identity/'.$cars[0]['carID']);?>" type="button" class="btn btn-primary" >Continue</a>

        </div>
  </div>
  <!--End row-->

</div>
<hr>
  <script src="<?php echo base_url('js/datepicker.js'); ?>"></script>
