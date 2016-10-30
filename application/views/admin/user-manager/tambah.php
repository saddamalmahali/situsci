<div class="container-fluid">
	<section class="card col-md-6">
		<div class="card-block">
			<h5 class="with-border">Tambah User</h5>
			<div class="row">
				<div class="col-md-12">
					<form method="POST" action="<?= base_url()."index.php/user_manager/tambah_data" ?>">
						<fieldset class="form-group">
							<label class="form-label">Nama Lengkap</label>
							<input type="text" name="nama_lengkap" class="form-control" placeholder="Input Nama Lengkap">
						</fieldset>
						<fieldset class="form-group">
							<label class="form-label">Email</label>
							<input type="email" name="email" class="form-control" placeholder="Input Input Email">
						</fieldset>
						
						<fieldset class="form-group">
							<label class="form-label">Username</label>
							<input type="text" name="username" class="form-control" placeholder="Input Username">
						</fieldset>

						<fieldset class="form-group">
							<label class="form-label">Password</label>
							<input type="password" name="password" class="form-control" placeholder="Input Password">
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