<div class="container-fluid">
	<section class="card box-typical-full-height">
		<div class="card-block">
			<h5 class="with-border m-t-0">Data Wilayah <div class="pull-right"><a class="btn btn-primary btn-sm" href="<?= base_url()."index.php/data_master_wilayah/tambah" ?>"><div class="ladda-button">Tambah Data</div></a></div></h5>
			<table id="table" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th style="text-align:center;">No</th>
						<th style="text-align:center;">Kode Wilayah</th>
						<th style="text-align:center;">Nama Wilayah</th>
						<th style="text-align:center;">Aktif</th>
						<th style="text-align:center;">Aksi</th>
					</tr>
				</thead>
				<tbody>
					
					<tr>
						<td align="center">1</td>
						<td align="center">001</td>
						<td align="center">Zona Daerah 1</td>
						<td align="center"><span class="label label-pill label-primary">Aktif</span></td>
						<td width="20%" align="center"><button class="btn btn-sm btn-warning ladda-button"><div class="ladda-label">update</div></button> || <a class="btn btn-sm btn-danger ladda-button" ><div class="ladda-label">delete</div></a> </td>
					</tr>
				</tbody>
			</table>


		</div>
	</section>
</div>