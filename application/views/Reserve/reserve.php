
<!--              Instruction              -->
<!-- Modal -->
<div class="container">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Instruction</h4>
        </div>
        <div class="modal-body">

                  <div class="text-center">
                    <h1>Welcome to Engine4u</h1>
                  </div>
                  <hr>
                  <div>
                    <h4>FOR CUSTOMER</h4><br>
                    <p>To rent a car, you need:</p>
                    <p>1. Login to the system</p>
                    <p>2. Provide searching criterias</p>
                    <p>3. Provide exact your identity and credit car information</p>
                    <p>4. Confirm booking</p>
                  </div>
                  <hr>
                  <div>
                    <h4>FOR HOST</h4><br>
                    <p>To give a car for rent, you need:</p>
                    <p>1. Login to the system</p>
                    <p>2. Add listing</p>
                    <p>3. Equip your listing with details</p>
                    <p>4. Publish your listing</p>
                  </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
</div>
<!--End Instruction-->

<div class="container animate-fadein" style="border-radius: 2%;margin-top:40px;padding:20px;box-shadow:0px 10px 15px 0px;">
  <h1>Reservation</h1>
  <input type="date" hidden id="start_d" value="<?php echo ($calendar[0]['start_date']); ?>"/>
  <input type="date" hidden id="end_d" value="<?php echo ($calendar[0]['end_date']); ?>"/>
  <!--<p id="test" onclick="countingDate()">Test</p>-->

    <!--MAIN contain for reserve-->
      <div class="row">
        <!--Left Panel-->
        <div class="col-sm-6">
          <!--Check in-->
            <div class="col-sm-6">
              <tr>
              <td><label for="">CHECK-IN</label></td>
                  <td>
                      <div class='input-group date' id='datetimepicker_checkin'>
                          <input type='text' id="chkin" class="form-control" name="check_in" />
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
                      <input type='text' id="chkout" class="form-control" name="check_out"/>
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
                <p id="total" class="text-center">Total: </p>
                <p id="totalprices" class="text-center"></p>
              </div>
            </div>
            <div class="col-sm-12 text-center" >
              <?php if(empty($this->session->id)){ ?>
                <a href="<?php echo site_url('user/login');?>"type="button" class=" btn btn-primary ">Reserve</a>
              <?php } ?>
              <?php if($this->session->id){ ?>
                <form action="<?php echo site_url('reserve/car/'.$cars[0]['carID']);?>" method="post">
                  <input type="submit" class=" btn btn-primary " value="Reserve">
                  <input hidden id="test" type="text" name="check_in"><br>
                  <input hidden id="test2" type="text" name="check_out"><br>
                  <input hidden id="test3" type="text" name="prices"><br>
                </form>
              <?php } ?>
            </div>
            <div class="col-sm-12" style="margin-top: 50px;height:300px;overflow-y: scroll;">
                <h3>Review from customer</h3>
            </div>
        </div>
        <!--end Left panel-->

        <!--Right Panel Price display-->
        <!-- print_r($cars) -->
        <div class="col-sm-6">
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
      </div>
    <!--End MAIN contain for reserve-->

    <!--Similar host display images-->
      <div class="row" style="padding:25px;">
          <?php if(!empty($location[0]['city'])) {?>
          <h3>Similar Host in <?php echo $location[0]['city'] ;?></h3>
          <?php for( $i = 0; $i < count($location); $i++)
                {
                  echo '<div class="col-sm-2 text-center">' ;
                  echo '<a href="'.site_url('reserve/reserves/').$location[$i]['carID'].'">'.$location[$i]['title'].'</a>' ;
                  echo '<img class="img-responsive"  src="'.base_url().'cover_gallery/'.$location[$i]['cover_photo'].'" alt="Image" style="height:100px">' ;
                  echo '</div>' ;
                }
           ?>
        <?php } ?>
      </div>
      <!--END Similar host display images-->
</div>
<hr>
<!--calculate date and money function-->
  <script src="<?php echo base_url('js/reserve.js'); ?>"></script>
<!--End calculate day-->
