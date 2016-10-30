<div class="container-fluid">
	<section class="card col-md-6">
		<div class="card-block">
			<h5 class="with-border">Update User</h5>
			<div class="row">
				<div class="col-md-12">
					<form method="POST" action="<?= base_url()."index.php/user_manager/update_data" ?>">
						<input type="hidden" name="id" value="<?php echo $id ?>">
						<fieldset class="form-group">
							<label class="form-label">Nama Lengkap</label>
							<input type="text" name="nama_lengkap" class="form-control" placeholder="Input Nama Lengkap" value="<?php echo $nama_lengkap ?>">
						</fieldset>
						<fieldset class="form-group">
							<label class="form-label">Email</label>
							<input type="email" name="email" class="form-control" placeholder="Input Input Email" value="<?php echo $email ?>">
						</fieldset>
						
						<fieldset class="form-group">
							<label class="form-label">Username</label>
							<input type="text" name="username" class="form-control" placeholder="Input Username" value="<?php echo $username ?>" disabled>
						</fieldset>

						<fieldset class="form-group">
							<center><button type="submit" class="btn  btn-inline btn-primary" style="width:100px;">Simpan</button> <a class="btn btn-inline btn-danger ladda-button" style="width:100px;" href="<?= base_url()."index.php/user_manager" ?>">Batal</a></center>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</section>	
</div>