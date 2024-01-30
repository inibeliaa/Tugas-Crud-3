<?php
include'config.php';
  $id_guru = '';
  $nama_guru = '';
  $jenis_kelamin = '';
  $alamat = '';
  $no_tel ='';
  $email ='';
if(isset($_GET['edit'])){
  $id_guru = $_GET['edit'];
  $sql = "SELECT * FROM guru WHERE id_guru='$id_guru';";
  $query = mysqli_query($db,$sql);
  $result = mysqli_fetch_assoc($query);
  $nama_guru = $result['nama_guru'];
  $jenis_kelamin = $result['jenis_kelamin'];
  $alamat = $result['alamat'];
  $no_tel = $result['no_tel'];
  $email = $result['email'];  
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Negeri 123 Jadi Anime</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SMK Negeri 123 Jadi Anime</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="kelola.php">Pemasuk Data Guru</a>
        <a class="nav-link" href="index-siswa.php">Data Siswa</a>
      </div>
    </div>
  </div>
</nav>
<div class="container mt-4">
<h2>PROFIL GURU 123 JADI ANIME</h2><br>
<form action="proses.php" method="POST">
  <input type="hidden" value="<?php echo $id_guru;?>" name="id_guru">
<div class="mb-3">
  <label for="nama_guru" class="form-label">Nama: </label>
  <input type="text" class ="form-control" name="nama_guru" value="<?php echo $nama_guru;?>" placeholder="nama lengkap" />
</div>
<div class="mb-3">
<div class="form-check">
<label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label><br>
  <input class="form-check-input" type="radio" name="jenis_kelamin" <?php if($jenis_kelamin == 'laki-laki'){echo "checked";}?> value="laki-laki">
  <label class="form-check-label" for="laki-laki">Laki-Laki</label><br>
  <input class="form-check-input" type="radio" name="jenis_kelamin" <?php if($jenis_kelamin == 'perempuan'){echo "checked";}?> value="perempuan">
  <label class="form-check-label" for="laki-laki">Perempuan</label>
</div>
</div>
<div class="mb-3">
  <label for="alamat" class="form-label">Alamat</label>
  <textarea class="form-control" name="alamat" rows="3"><?php echo $alamat;?></textarea>
</div>
<div class="mb-3">
    <label for="no_tel" class="form-label">No Telepon: </label>
    <input type="text" class ="form-control" name="no_tel" value="<?php echo $no_tel;?>" placeholder="no telepon" />
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email: </label>
    <input type="email" class ="form-control" name="email" value="<?php echo $email;?>" placeholder="email" />
</div>
<div class="mb-3 row mt-4">
  <div class="col">
<?php
if(isset($_GET['edit'])){
  ?>
  <button type="submit" class="btn btn-primary" value="edit" name="aksi"> Simpan Perubahan </button>
<?php
}else{
  ?>
  <button type="submit" class="btn btn-primary" value="add" name="aksi"> Daftar </button>
<?php
}
?>
<a href="index.php" type="button" class="btn btn-danger">Batal</a> 
</div>
</div>
    </form>  
</div>
    </body>
</html>