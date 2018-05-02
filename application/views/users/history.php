<?php $this->load->view('menu/header') ; ?>
<div class="container animate-fadein">
 <!-- <?php print_r($historyData); ?>
<?php echo $this->session->id ?> -->
<h3>Booking details:</h3>
  <?php for($i = 0; $i < count($historyData); $i ++)
        {

          if($historyData[$i]['userID'] == $uID  )
          {
            echo '<div class="row text-center animate-left">' ;
            echo '<table class="table table-bordered">' ;
            echo '<th>Start Date</th><th>End Date</th><th>Total Price</th><th>Location</th>' ;
            echo '<tr>' ;
            echo '<td>'.$historyData[$i]['start_date'].'</td>' ;
            echo '<td>'.$historyData[$i]['end_date'].'</td>' ;
            echo '<td>'.$historyData[$i]['total_price'].'</td>' ;
            echo '<td>'.$historyData[$i]['location'].'</td>' ;
            echo '</tr></table>' ;
            echo '</div>' ;
          }
 
          
        }

    ?>
</div>
<?php $this->load->view('menu/footer') ;?>
