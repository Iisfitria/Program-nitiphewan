        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">My Profile</h1><br><br>
          </div>

          <div class="row">
            <div class="col-lg6">
              <?= $this->session->flashdata('massage'); ?>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">
              <div class="col-lg-10">
              <div class="row">
                <div class="col-md-3 mr-3">
                  <img src="<?php echo base_url('assets/img/profile/') . $user['image'] ?>" class="card-img-top" style="max-width: 300px;">
                </div>
                
                  <div class="col-md-6">
                    <table class="table table-hover"> 
                  <tr>
                    <th>Nama</th>
                    <td><?php echo $user['nama']; ?></td>
                  </tr>
                  <tr>
                    <th>Email</th>
                    <td><?php echo $user['email']; ?></td>
                  </tr>
                  <tr>
                    <th>Tanggal Pendaftaran</th>
                    <td><?php echo date('d F Y', $user['date_created']); ?></td>
                  </tr>
                </table>
                
                <a href="<?php echo base_url('user/edit_profile') ?>" class="btn btn-info">Edit Profile</a> 
                </div>
              </div>
              </div>
            </div>
            
              </div>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->