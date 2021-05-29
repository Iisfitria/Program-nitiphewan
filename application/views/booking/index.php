<div class="container">
<!-- Content Row -->

  <h2 class="display-4 text-dark text-center shadow"><b><?php echo $title; ?></b></h2>
  
  <!-- Row -->
  <div class="row justify-content-sm-center">
    <div class="col-md-5">
      <div class="card" style="width: 25rem;">
        <img src="<?php echo base_url('assets/img/booking/kucing.jpg')?>" class="card-img-top" style="max-width: 450px;"  alt="Kucing">
        <p class="display-4 ml-2 text-dark">Kucing</p>
        <div class="card-body">
          <p class="card-text">Pelayanan Jasa yang kami berikan pada Kucing, memandikannya, memberi makan mengajak kucing bermain dan membersihkan kandang nya.</p>
        </div>
        <div class="row my-3 mx-2 justify-content-between">
          <div class="col-lg-6">
             <a href="<?php echo base_url('booking/booking_'); ?>" class="btn btn-info">Booking</a> 
          </div>
          <div class="col-lg-4">
            <a href="<?php echo base_url('booking/detail'); ?>" class="btn btn-info">Detail</a> 
          
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-2"></div>

    <div class="col-md-5">
      <div class="card" style="width: 25rem;">
        <img src="<?php echo base_url('assets/img/booking/anjing.jpg')?>" class="card-img-top" style="max-width: 450px;"  alt="Anjing">
        <p class="display-4 ml-2 text-dark">Anjing</p>
        <div class="card-body">
          <p class="card-text">Pelayanan Jasa yang kami berikan pada anjing, memandikannya, memberi makan mengajak kucing bermain dan membersihkan kandang nya.</p>
        </div>

        <div class="row my-3 mx-2 justify-content-between">
          <div class="col-lg-6">
            <a href="<?php echo base_url('booking/booking_'); ?>" class="btn btn-info">Booking</a> 
          </div>

          <div class="col-lg-4">
            <a href="<?php echo base_url('booking/detail'); ?>" class="btn btn-info">Detail</a> 
          </div>
        </div>
      </div>
    </div>  
  </div><br>
  <!-- End row -->
</div>

</div>