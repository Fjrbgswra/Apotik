<html>
<head>
	<meta charset="UTF-8">
	<title>Apotik</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>bootstrap/css/bootstrap.min.css">
    <script src="<?php echo base_url()?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/jsgrid/jsgrid.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/jsgrid/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/jsgrid/jsgrid-theme.min.css" />
    <script src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/style.css">
    <script type="text/javascript" src="<?php echo base_url()?>assets/jsgrid/jsgrid.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/custom/grid.js"></script>

</head>
<body>
	
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Apotik</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    </form>
    <form class="form-inline mt-2 mt-md-0">
          <a href="<?php echo base_url('index.php/Login/logout') ?>" class="btn btn-success my-2 my-sm-0 ml-2">Masuk/Daftar</a>
    </form>
  </div>
</nav>
	<div class="container">
<div class="panel panel-default">
	<!-- Default panel contents -->
	<h1><div class="panel-heading">Daftar Obat</div></h1>

	<!-- Table -->
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Nama</th>
				<th scope="col">Keterangan</th>
				<th scope="col">Tanggal</th>
				<th scope="col">Foto</th>
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
			</tr>
		</tbody>
		<?php } ?>
	</table>
</div>
<footer>
	<img src="assets/img/2.jpg" width="1060" height="100">           
	<a>Copyright @<span class="glyphicon glyphicon-copyright-mark"></span>Apotik</a>   
</footer>
</div>
</body>
</html>