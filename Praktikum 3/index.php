<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan form prossecing </title>
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="proses.php" method="POST">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="masukan nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">tempat lahir</label> 
    <div class="col-8">
      <input id="tmp_lahir" name="tmp_lahir" placeholder="masukan tempat lahir" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">tanggal lahir</label> 
    <div class="col-8">
      <input id="tgl_lahir" name="tgl_lahir" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

</body>
</html>