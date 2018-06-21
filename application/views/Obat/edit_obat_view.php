<?php $this->load->view('Obat/header'); ?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<?php echo form_open('Obat3/update/'.$this->uri->segment(3)); ?>
	<legend>Edit Data Obat</legend>
	<?php echo validation_errors(); ?>
	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $data_obat[0]->nama ?>" placeholder="Input field">
	</div>
  <div class="form-group">
    <label for="">Keterangan</label>
    <input type="text" class="form-control" name="keterangan" value="<?php echo $data_obat[0]->keterangan ?>" placeholder="Input field">
  </div>
		<div class="form-group">
		<label for="">Tanggal</label>
		<input type="Date" class="form-control" name="tanggal" value="<?php echo $data_obat[0]->tanggal ?>">
	</div>
  <!-- div class="form-group">
      <label class="control-label col-sm-2"></label>
      <div class="col-sm-10">
        <img height="100" width="100" src=<?=base_url("assets/img")."/".$data_obat[0]->foto?>><br><br>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2">Foto :</label>
      <div class="col-sm-10">
        <input type="file" name="foto"><br>
      </div>
    </div> -->
    <div class="form-group">
    <label for="">Foto</label>
    <input type="File" class="form-control" name="foto" id="foto" value="<?php echo $data_obat[0]->foto ?>" placeholder="upload file">
  </div>
	<button type="submit" class="btn btn-primary">Submit</button>
	<?php echo form_close(); ?>
</div>



  <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>
