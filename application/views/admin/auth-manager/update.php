<div class="container-fluid">
	<section class="card">
		<div class="card-block">
			<?php echo validation_errors(); ?>
			<h5 class="with-border">Update Role Autentikasi</h5>
			<form action="<?= base_url()."index.php/auth_manager/update_data" ?>" method="post">
				<input type="hidden" name="id" value="<?= $auth[0]['id'] ?>">
				<div class="col-md-6">
					<fieldset class="form-group row">
						<label class="form-label semibold" for="name">Nama Auth</label>
						<input type="text" name="name" class="form-control" placeholder="Inputkan Nama Autentikasi" value="<?= $auth[0]['name'] ?>">
						<small class="text-muted"><?= form_error('name') ?></small>
					</fieldset>
					<fieldset class="form-group row">
						<label class="form-label semibold" for="name">Tipe</label>
						<select class="bootstrap-select bootstrap-select-arrow" name="tipe" >
							<option value="1" selected="true">Role</option>
						</select>
						<small class="text-muted"><?= form_error('tipe') ?></small>
					</fieldset>
					<fieldset class="form-group row">
						<label class="form-label semibold" for="name">Deskripsi</label>
						<textarea rows="6" name="deskripsi" class="form-control" placeholder="Deskripsi"><?= $auth[0]['description'] ?></textarea>
						<small class="text-muted"><?= form_error('name') ?></small>
					</fieldset>
					
					<fieldset class="button-group">
						<center>
							<a class="btn btn-rounded btn-default btn-sm" href="<?= base_url()."index.php/auth_manager" ?>" style="width:70px;">Batal</a>
							<button type="submit" class="btn btn-rounded btn-primary btn-sm" style="width:70px;">Simpan</button>							
						</center>
						
					</fieldset>
				</div>
				<div class="col-md-6">
					<div class="alert alert-info">
						<h5 style="text-align:center;">Keterangan</h5>
						<ul>
							<li>Isikan <code>Nama Auth</code> dengan nama Authentikasi Misal :<code>"createPost"</code> atau dengan nama Role misalkan : <code>"operator"</code> </li>
							<li>Tipe 1 Untuk Nama Role dan 2 untuk Autentikasi</li>
						</ul>
					</div>
				</div>
			
				
			</form>
		</div>
	</section>
</div>