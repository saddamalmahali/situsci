<div class="container-fluid">
	<section class="card">
		<div class="card-block">
			<h5 class="with-border">
				<span>User Manager</span>
				<div class="pull-right">
					<a class="btn btn-sm btn-primary" href="<?php echo base_url()."index.php/user_manager/tambah" ?> ">Tambah User</a>
				</div>
			</h5>
			<div class="table-responsive">
				<div class="bootstrap-table">
					<div class="fixed-table-container">
						<div class="fixed-table-body">
							
							<table id="table" class="table table-bordered table-striped">
								
									<tr>
										<th style="text-align:center;">Nama Lengkap</th>
										<th style="text-align:center;">Username</th>
										<th style="text-align:center;">Email</th>
										<th style="text-align:center;">Opsi</th>
									</tr>
								<tbody>
									<?php if(!is_null($users)){ ?>
									<?php foreach($users as $i => $user) : ?>
										<tr>
											<td align="center"><?= $user['nama_lengkap'] ?></td>
											<td align="center"><?= $user['username'] ?></td>
											<td align="center"><?= $user['email'] ?></td>
											
											<td width="20%" align="center">
												<a class="btn btn-sm btn-warning ladda-button" href="<?= base_url()."index.php/user_manager/update/".$user['id'] ?>" data-toggle="tooltip" title="Edit <?= $user['nama_lengkap'] ?>">
													<span class="font-icon font-icon-pencil"></span>
												</a> || 
												<a href="<?= base_url()."index.php/user_manager/authentikasi/".$user['id'] ?>" class="btn btn-sm btn-success ladda-button" data-toggle="tooltip" title="Edit Hak Akses"><span class="font-icon font-icon-revers"></span>
												</a> ||  
												<a href="<?= base_url()."index.php/user_manager/delete_data/".$user['id'] ?>" class="btn btn-sm btn-danger ladda-button" data-toggle="tooltip" title="Hapus <?= $user['nama_lengkap'] ?>">
													<span class="font-icon font-icon-trash"></span>
												</a>												
											</td>
										</tr>
									<?php endforeach; }else{ ?>

										<td colspan="5" align="center">Data Kosong</td>

									<?php } ?>
								</tbody>
							</table>
						</div><!-- Akhir Dari Table Body Container -->
						<div class="fixed-table-pagination">
							<div class="pull-right pagination">
								<?= $this->pagination->create_links(); ?>
							</div>
						</div><!-- Akhir Dari Table Pagination Container -->
					</div>
				</div>
			</div>
			
			
			
		</div>
	</section>
</div>