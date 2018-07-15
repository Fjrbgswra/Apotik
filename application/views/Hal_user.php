<?php $this->load->view('Obat/header'); ?>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <a href="<?php echo base_url('index.php/User/create') ?>" class="btn btn-primary my-3">Tambah</a>
  <h1><div class="panel-heading">Daftar Obat</div></h1>

  <!-- Table -->
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama</th>
        <th scope="col">Password</th>
        <th scope="col">Level</th>
        <th scope="col">Options</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($user_data as $key) { ?>
      <tr>
        <td><?php echo $key['id'] ?></td>
        <td><?php echo $key['username'] ?></td>
        <td><?php echo $key['password'] ?></td>
        <td><?php echo $key['level'] ?></td>
        <td>
          <a href="<?=site_url()?>/User/update/<?php echo$key['id']?>"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span>Update</button></p></a>
        </td>
        <td>
          <a href="<?=site_url()?>/User/deleteData/<?php echo$key['id']?>"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"> <span class="glyphicon glyphicon-trash"></span>Delete</button></p></a>
        </td>
      </tr>
    </tbody>
    <?php } ?>
  </table>
</div>
<?php $this->load->view('Obat/footer');?>
