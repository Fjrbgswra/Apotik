<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Apotik</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <form class="form-signin" method="post" action="<?php echo base_url('index.php/Login/register') ?>">
           <h2 class="text-center" style="color: #5cb85c;"> <strong> Registrasi  </strong></h2><hr />
            <?php echo validation_errors(); ?>
           <div class="row">
                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                       <div class="input-group">
                          <div class="input-group-addon">
                             <span class="glyphicon glyphicon-user"></span>
                          </div>
                          <input type="text" placeholder="Username" id="username" name="username" class="form-control">
                       </div>
                    </div>
                 </div>
              </div>

              <div class="row">
                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                       <div class="input-group">
                          <div class="input-group-addon">
                             <span class="glyphicon glyphicon-lock"></span>
                          </div>

                          <input type="password" placeholder="Password" name="password" class="form-control">
                       </div>
                    </div>
                 </div>
              </div>
              <div class="form-group">
                <label for="">Level</label>
                <select name="level" id="level" class="form-control" style="height: 45px;">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
              </div>
            <button class="btn btn-warning btn-block btn-lg" type="submit">DAFTAR</button>
          </form>
        </div>
        <div class="col-sm-4"></div>
      </div> 
    </div>
  </body>
</html>