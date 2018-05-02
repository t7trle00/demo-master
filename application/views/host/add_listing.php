<?php $this->load->view('menu/header') ; ?>

<div class="hostNav" style="text-align:center">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li><a class="pointer" onclick="getListing('html')">View your listing</button></a></li>
        <li><a href="<?php echo site_url('host_controller/add_listing') ;?>">Add new listing</a></li>
        <li><a class="pointer" href="<?php echo site_url('host_controller/get_listing_update/').$userID?>">Edit your listing</a></li>
        <li><a class="pointer" onclick="getListingDelete('html')">Delete your listing</a></li>
      </ul>
    </div>
  </nav>
  <input type="number" id="userID" hidden value="<?php echo $this->session->id?>">
</div>
<div id="results" class="addform container animate-fadein">

  <form enctype="multipart/form-data" method="POST" id="AddForm">
    <input type="number" hidden name="userID" value="<?php echo $this->session->id ?>">
    <table class="table" id="table_add">
      <tr>
        <td style="text-align:left">TITLE</td>
        <td style="text-align:left">
          <input type="text" name="title" size="70" maxlength="30" required>
          <p><i>A short title is needed to specify your car</i></p>
        </td>
      </tr>
      <tr>
        <td style="text-align:left">DESCRIPTION</td>
        <td style="text-align:left"><textarea name="description" cols="70" rows="10" placeholder="Give short description for your car"></textarea></td>
      </tr>
      <tr>
        <td style="text-align:left">COVER PHOTO</td>
        <td style="text-align:left">
            <input type="file" name="cover_photo" required>
            <p><i>Cover photo will be displayed as main picture for your car</i></p>
        </td>
      </tr>
      <tr>
        <td style="text-align:left">OTHER PHOTOS</td>
        <td style="text-align:left">
            <input type="file" name="other_photo[]" multiple>
            <p><i>Add more photos to specify your car clearly</i></p>
        </td>
      </tr>
      <tr>
        <td style="text-align:left">TYPE OF CAR</td>
        <td style="text-align:left">
          <select style="width:260px; height:35px;" name="type_of_car">
              <option value="">Choose an option</option>
              <option value="Couple">Coupe</option>
              <option value="Diesel">Diesel</option>
              <option value="Truck">Truck</option>
              <option value="SUV">SUV</option>
              <option value="Sedans">Sedans</option>
              <option value="Sport car">Sport car</option>
          </select>
          <p><i>Give a details about how many seats your car has</i></p>
        </td>
      </tr>
      <tr>
        <td style="text-align:left">YEAR</td>
        <td style="text-align:left">
          <input type="number" name="year" min_length="1993">
          <p><i>Year when your car is manufactured. Your car should be manufactured after 1993</i></p>
        </td>
      </tr>
      <tr>
        <td style="text-align:left">PRICE (&euro;)</td>
        <td style="text-align:left">
          <input type="number" name="price" required>
          <p><i>Note that price is in euro and day based</i></p>
        </td>
      </tr>
      <tr>
        <td style="text-align:left">CANCELLATION POLICY</td>
        <td style="text-align:left">
          <select style="width:260px; height:35px;" name="cancellation_policy">
            <option value="">Choose option</option>
            <option value="flexible">Flexible</option>
            <option value="moderate">Moderate</option>
            <option value="strict">Strict</option>
          </select>
          <p><i>Depend on your choice of cancellation policy, <br>
            customers are allowed to cancel the reservation in a certain way</i></p>
        </td>
      </tr>
      <tr>
        <td style="text-align:left">STARTING DATE</td>
        <td style="text-align:left">
          <div class='input-group date col-sm-4' id='datetimepicker_checkin'>
              <input type='text' id="chkin" class="form-control" name="check_in" required/>
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar" ></span>
            </span>
        </div>
          <p><i>Please give the date that you are going to give the car for rent</i></p>
        </td>
      </tr>
      <tr>
        <td style="text-align:left">ENDING DATE</td>
        <td style="text-align:left">
          <div class='input-group date col-sm-4' id='datetimepicker_checkout'>
              <input type='text' id="chkout" class="form-control" name="check_out" required/>
              <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
              </span>
          </div>
          <p><i>Please give the date that the car is not available for rent</i></p>
        </td>
      </tr>
    </table>
  </form>
  <div style="text-align:center">
      <button onclick="AddListing()" class="btn btn-info" style="font-size:1.0em">SAVE</button>
  </div>
</div>
  <script>
      $(function xxxx() {
      $('#datetimepicker_checkin').datetimepicker({
                  useCurrent: false ,
                  format: 'YYYY-MM-DD',
                  // $('#datetimepicker_checkin').mindate($('#start_d.value'));
              });
      $('#datetimepicker_checkout').datetimepicker({
          useCurrent: false ,
          format: 'YYYY-MM-DD'  //Important! See issue #1075
      });
      $("#datetimepicker_checkin").on("dp.change", function (e) {
          $('#datetimepicker_checkout').data("DateTimePicker").minDate(e.date);
      });
      });

  </script>
  <?php $this->load->view('menu/footer') ; ?>
