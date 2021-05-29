<body class="bg-gradient-info">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-md-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Login Page!</h1>
                  </div>
                  <?php echo $this->session->flashdata('pesan'); ?>
                  <form class="user" action="<?php echo base_url('autentifikasi'); ?>" method="post">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email Address">
                      <?php echo form_error('email', '<small class="text-danger pl-2">','</small>'); ?> 
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                      <?php echo form_error('password', '<small class="text-danger pl-2">','</small>'); ?> 
                    </div>
                    <button type="submit" class="btn btn-info btn-user btn-block">
                      Login
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url('autentifikasi/registrasi'); ?>">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  