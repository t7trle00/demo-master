
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


<!--SLideshow-->
<div class="container animate-fadein" style="margin-top:50px;">
<div class="row">

  <div class="col-sm-12">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

        <div class="item active">
          <img src="https://placehold.it/800x400?text=IMAGE For promotion campaign" alt="For promotion campaign">
          <div class="carousel-caption">
            <h3>Sell $</h3>
            <p>Money Money.</p>
          </div>
        </div>

        <div class="item">
          <img src="https://placehold.it/800x400?text=Another another marketing campaign" alt="Image">
          <div class="carousel-caption">
            <h3>More Sell $</h3>
            <p>Lorem ipsum...</p>
          </div>
        </div>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

</div>
<hr>
</div>
<!--End Slideshow-->

<!--BEGIN SEARCH ENGINES-->
<div class="container text-center animate-fadein">
  <h3>Book at Engine4U for the Best Rates Guaranteed</h3>
  <br>
  <!--Start form search-->
  <form id="search-form" action="<?php echo site_url('Search/search_engines')?>" method="post">
    <div class="frame-search">
      <div class="row">
        <!--  Location  -->
          <div style="margin-top:10px;" class="col-sm-4">
            <label for="s_name">Choose location:</label>
              <input type="text" id="s_name" name="l_name" class="form-control pick-input" placeholder="Pickup location">
          </div>
        <!--   Check In  -->

          <div style="margin-top:10px;" class="col-sm-3">
              <div class="col-sm-12">
                  <label>Check-in</label>
              </div>
              <br>
              <!--Datepick checkin-->
              <div class="col-sm-12">
                <div class='input-group date' id='datetimepicker_checkin'>
                    <input type='text' id="chkin" class="form-control" name="check_in" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
              </div>
              <!-- Select Type of car -->
              <div class="col-sm-12">
                  <form>
                    <div class="form-group" style="margin-top:10px;">
                      <label for="sel3">Select type of car (select one):</label>
                      <select class="form-control" name="taskOption" onload="loadtypecar()" id="discar">
                        <option name="aa" selected="true">Type of Car</option>
                      </select>
                    </div>
                  </form>
              </div>
          </div>
          <!--   Check out  -->
          <div style="margin-top:10px;" class="col-sm-3">
              <div class="col-sm-12">
                <label>Check-out:</label>
              </div>
              <br>
              <!--Datepick checkout-->
              <div class="col-sm-12">
                <div class='input-group date' id='datetimepicker_checkout'>
                    <input type='text' id="chkout" class="form-control" name="check_out" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
              </div>
              <!--Select Model year-->
              <div class="col-sm-12">
                <form>
                  <div class="form-group" style="margin-top:10px;">
                    <label for="mdy">Select Model year (select one):</label>
                    <select class="form-control"name="taskOption_model" id="mdy" onload="loadmodelyear()">
                      <option selected="true">Model Year (>= selected year)</option>
                    </select>
                  </div>
                </form>
              </div>
            </div>
            <!--    Search button and price display  -->
            <div class="col-sm-2">
              <div >
                <button type="submit" class="btn-search" > <b>Search</b></button>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="slidecontainer" id="pri">
                <input type="range" min="0" max="999" name="pri_range" value="0" class="slider" id="myRange">
                <p>Price: <span id="pricerange"></span></p>
              </div>
            </div>
      </div>
    </div>
  </form>
  <!--End form search-->
  <hr>
</div>
<!--END SEARCH ENGINES-->


<div class="container text-center exp">
  <h3>Our Customers</h3>
  <br>
  <div class="row">
  	<div class="col-sm-5 ">
    	<div class="wells">
        	<h4>Experiences from hosts</h4>
        </div>
    </div>
  </div>

  <div class="row animate-fadein">
        <?php $i = count($dataImage)-1;?>
        <!-- still $carID left -->
        <div class="col-sm-2">
          <a href="<?php echo site_url('main/detail/').$dataImage[$i]['carID']?>">
          <p><?php echo $dataImage[$i]['title']?></p>
          </a>
          <img src="<?php echo base_url('cover_gallery/').$dataImage[$i]['cover_photo']?>" class="img-responsive" style="width:100%;height:100px" alt="Image">
        </div>
        <div class="col-sm-2">
          <a href="<?php echo site_url('main/detail/').$dataImage[$i-1]['carID']?>">
          <p><?php echo $dataImage[$i-1]['title']?></p>
          </a>
          <img src="<?php echo base_url('cover_gallery/').$dataImage[$i-1]['cover_photo']?>" class="img-responsive" style="width:100%;height:100px" alt="Image">
        </div>
        <div class="col-sm-2">
          <a href="<?php echo site_url('main/detail/').$dataImage[$i-2]['carID']?>">
          <p><?php echo $dataImage[$i-2]['title']?></p>
          </a>
          <img src="<?php echo base_url('cover_gallery/').$dataImage[$i-2]['cover_photo']?>" class="img-responsive" style="width:100%;height:100px" alt="Image">
        </div>
        <div class="col-sm-2">
          <a href="<?php echo site_url('main/detail/').$dataImage[$i-3]['carID']?>">
          <p><?php echo $dataImage[$i-3]['title']?></p>
          </a>
          <img src="<?php echo base_url('cover_gallery/').$dataImage[$i-3]['cover_photo']?>" class="img-responsive" style="width:100%;height:100px" alt="Image">
        </div>
        <div class="col-sm-2">
          <a href="<?php echo site_url('main/detail/').$dataImage[$i-4]['carID']?>">
          <p><?php echo $dataImage[$i-4]['title']?></p>
          </a>
          <img src="<?php echo base_url('cover_gallery/').$dataImage[$i-4]['cover_photo']?>" class="img-responsive" style="width:100%;height:100px" alt="Image">
        </div>
        <div class="col-sm-2">
          <a href="<?php echo site_url('main/detail/').$dataImage[$i-5]['carID']?>">
          <p><?php echo $dataImage[$i-5]['title']?></p>
          </a>
          <img src="<?php echo base_url('cover_gallery/').$dataImage[$i-5]['cover_photo']?>" class="img-responsive" style="width:100%;height:100px" alt="Image">
        </div>
   </div><br>
   <div class="row">
     <div class="col-sm-2">
       <p><a href="<?php echo site_url('main/listing_show')?>">See More</a></p>
     </div>
   </div>

  <hr>
</div>

<script src="<?php echo base_url('js/searchstyle.js'); ?>"></script>
<script src="<?php echo base_url('js/search.js'); ?>"></script>
<script src="<?php echo base_url('js/pricerange.js'); ?>"></script>
<script src="<?php echo base_url('js/datepicker.js'); ?>"></script>
