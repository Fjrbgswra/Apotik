<?php $this->load->view('Obat/header'); ?>
<div class="panel panel-default">
	<!-- Default panel contents -->
	<h1><div class="panel-heading">Daftar Obat</div></h1>

	<!-- Table -->
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Nama</th>
				<th scope="col">Spesialis</th>
				<th scope="col">Tanggal</th>
				<th scope="col">Foto</th>
				<th scope="col">Update</th>
				<th scope="col">Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($obat_list as $key) { ?>
			<tr>
				<td><?php echo $key['id'] ?></td>
				<td><?php echo $key['nama'] ?></td>
				<td><?php echo $key['keterangan'] ?></td>
				<td><?php echo $key['tanggal'] ?></td>
				<td><img height="100" width="100" src=<?=base_url("assets/img")."/".$key['foto']?>></td>
				<td>
					<a href="<?=site_url()?>/Obat3/update/<?php echo$key['id']?>"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span>Update</button></p></a>
				</td>
				<td>
					<a href="<?=site_url()?>/Obat3/deleteData/<?php echo$key['id']?>"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"> <span class="glyphicon glyphicon-trash"></span>Delete</button></p></a>
				</td>
			</tr>
		</tbody>
		<?php } ?>
	</table>
</div>
<?php $this->load->view('Obat/footer');?>
