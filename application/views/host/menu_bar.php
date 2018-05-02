<?php
  $this->load->view('menu/header') ;
?>
<div class="hostNav animate-left" style="text-align:center">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li><a class="pointer" onclick="getListing('html')">View your listing</button></a></li>
        <li><a class="pointer" href="<?php echo site_url('host_controller/add_listing') ;?>">Add new listing</a></li>
        <li><a class="pointer" href="<?php echo site_url('host_controller/get_listing_update/').$userID?>">Edit your listing</a></li>
        <li><a class="pointer" onclick="getListingDelete('html')">Delete your listing</a></li>
      </ul>
    </div>
  </nav>
</div>
<div>
  <input type="number" id="userID" hidden value="<?php echo $this->session->id?>">
  <script>getListing('html') </script>
  <div id="results"></div>
</div>
<?php  $this->load->view('menu/footer') ;
 ?>
