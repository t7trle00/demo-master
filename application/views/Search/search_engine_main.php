
<!--THIS IS SEARCH FUNCTION WHEN CLICK SEARCH IN MAIN PAGES-->

<!--Begin Search -->
    <div class="container text-center animate-fadein">
      <h3>Book at Engine4U for the Best Rates Guaranteed</h3>
      <br>
      <div class="frame-search">
          <div class="row">
            <!--   Location   -->
              <div style="margin-top:10px;" class="col-sm-4">
                <label for="s_name">Choose location:</label>
                  <input type="text" id="s_name" value="<?php echo $location; ?>"class="form-control pick-input" placeholder="Pickup location">
              </div>
            <!--    Check In  -->

              <div style="margin-top:10px;" class="col-sm-3">
                  <div class="col-sm-12">
                      <label>Check-in</label>
                  </div>
                  <br>
                  <div class="col-sm-12">
                    <div class='input-group date' id='datetimepicker_checkin'>
                        <input type='text' id="chkin" value="<?php echo $check_in ?>" class="form-control" name="check_in" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <form>
                    <div class="form-group" style="margin-top:10px;">
                      <label for="sel3">Select type of car (select one):</label>
                      <select class="form-control" name="taskOption_type" onload="loadtypecar()" id="main_search_type">
                        <option>Type of Car</option>
                        <option value="op1" selected="true"><p hidden><?php echo $option?></p></option>
                      </select>
                    </div>
                  </form>
                  </div>
              </div>
              <!--    Check Out  -->
              <div style="margin-top:10px;" class="col-sm-3">
                  <div class="col-sm-12">
                    <label>Check-out:</label>
                  </div>
                  <br>
                  <div class="col-sm-12">
                    <div class='input-group date' id='datetimepicker_checkout'>
                        <input type='text' id="chkout" value="<?php echo $check_out ?>" class="form-control" name="check_out"/>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <form>
                      <div class="form-group" style="margin-top:10px;">
                        <label for="mdy">Select Model year (select one):</label>
                        <select class="form-control" name="taskOption_model" id="main_search_model" onload="loadmodelyear()">
                          <option selected="true">Model Year(>= selected year)</option>
                        </select>
                      </div>
                    </form>
                  </div>
                </div>
                <!--    Search and price range  -->
                <div class="col-sm-2">
                  <div >
                    <button type="button" class="btn-search" onclick="GetCars()"> Search</button>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="slidecontainer" id="pri">
                    <input type="range" min="0" max="999" value="<?php echo $price_range ?>" class="slider" id="myRange">
                    <p>Price: <span id="pricerange"></span></p>
                  </div>
                </div>
          </div>
        </div>
      <hr>
</div>
<!--End Search-->
<!-- body content-->
  <div class="container">
    <div class="row" >
      <!-- Google map API-->
      <div class="col-sm-6 animate-left">
        <h3>My Google Maps Demo</h3>
        <div id="floating-panel">
          <input id="address" type="textbox" value="Sydney, NSW">
          <input id="submit" type="button" value="Search Location">
        </div>
        <div id="map"></div>
      </div>
      <!-- End google map -->
      <!--Images display-->
      <div class="col-sm-6 animate-fadein" style="overflow-y:scroll;height: 500px;">
        <label for="result">Results:</label>
        <p id='result'></p>
      </div>
      <!--End images display-->
    </div>
  </div>
<!-- End body content-->
<script src="<?php echo base_url('js/search_by_main.js'); ?>"></script>
  <script src="<?php echo base_url('js/pricerange.js'); ?>"></script>
  <script src="<?php echo base_url('js/datepicker.js'); ?>"></script>
    <script src="<?php echo base_url('js/googlemap.js');?>"></script>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcvzlX3wXewDZjucmkOLPL1U_baon3TEA&callback=initMap">
  </script>
