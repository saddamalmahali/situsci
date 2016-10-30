<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<section class="card">
				<div class="card-block">
					<h5 class="with-border">Auth Manager <div class="pull-right"><a href="<?= base_url()."index.php/auth_manager/tambah" ?>" class="btn btn-primary btn-sm">Tambah Authentikasi</a></div></h5>

					<table class="table table-hovered table-bordered">
						<tr>
							<th style="text-align:center;">No.</th>
							<th style="text-align:center;">Nama Rule</th>
							<th style="text-align:center;">Tipe</th>
							<th style="text-align:center;">Deskripsi</th>
							<th style="text-align:center;">Opsi</th>
						</tr>
						
						<?php if((!is_null($auth)) && is_array($auth) ){ ?>
							<?php foreach ($auth as $i => $da) { ?>
							<tr>
								<td align="center" width="10%"><?= $i + 1 ?></td>
								<td align="center" width="25%"><?= $da['name'] ?></td>
								<td align="center" width="10%"><?= $da['type']== 1 ? "<span class='label label-success'>Role</span>" : "<span></span>" ?></td>
								<td align="center" width="25%"><?= $da['description'] ?></td>
								<td align="center"> <a class="btn btn-primary btn-sm" data-toggle="tooltip" title="Rubah Data <?= $da['name'] ?>" href="<?= base_url()."index.php/auth_manager/update_auth/".$da['id'] ?>"><span class="font-icon font-icon-pencil"></span></a> || <a class="btn btn-success btn-sm" data-toggle="tooltip" title="Beri Hak Akses Untuk Role <?= $da['name'] ?>"><span class="fa fa-key"></span></a> || <a class="btn btn-danger btn-sm" data-toggle="tooltip" title="Hapus <?= $da['name'] ?>"><span class="font-icon font-icon-trash"></span></a></td>
							</tr>
							<?php }}else{ ?>
							<tr>
								<td colspan="5" align="center">Tidak Ditemukan Data</td>
							</tr>

							<?php } ?>
					</table>
				</div>
			</section>
		</div>		
	</div>
</div>
