<!-- Begin Page Conect --> 
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

		<div class="col-lg-10">
			
			<?php echo form_open_multipart('user/edit_profile'); ?>
			  <div class="form-group row">
 	 					<label for="email" class="col-sm-2 col-form-label">Email</label>
  					<div class="col-sm-10">
    						<input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
  					</div>
				</div>

				<div class="form-group row">
 	 					<label for="nama" class="col-sm-2 col-form-label">Full Name</label>
  					<div class="col-sm-10">
    						<input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
    						<?= form_error('nama', '<small class="text-danger pl-2">','</small>'); ?>
  					</div>
				</div>

        <div class="form-group row">
            <label for="no_telp" class="col-sm-2 col-form-label">No Telephone</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $user['no_telp']; ?>">
                <?= form_error('no_telp', '<small class="text-danger pl-2">','</small>'); ?>
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $user['alamat']; ?>">
                <?= form_error('alamat', '<small class="text-danger pl-2">','</small>'); ?>
            </div>
        </div>
	 				
	 				<div class="form-group row">
	 					<div class="col-sm-2">Picture</div>
          <div class="col-sm-10">
	 							<div class="row">
                <div class="col-sm-3">
                  <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="img-thumbnail">
                </div>
                <div class="col-sm-9">
                  <div class="custom-file">
	 									  <input type="file" class="custom-file-input" id="image" name="image">
	 									  <label class="custom-file-label" for="image">Choose file</label>
                  </div>
	 							  </div>
              </div>
          </div>
        </div>

	 			<div class="form-group row">
          <div class="col-sm-2"></div>
	 						<div class="col-sm-3">
	 							<button type="submit" class="btn btn-info">Simpan</button>
	 						</div>
	 			</div>

			</div>
		</div>
	</div>

</div>

</div>
<!-- /.Container-fluid -->

</div>
<!-- End of Main Content