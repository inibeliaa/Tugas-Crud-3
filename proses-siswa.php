<?php
include("config.php");
if(isset($_POST['aksi'])){
  if($_POST['aksi'] == 'add'){
  $nama = $_POST['nama'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $agama = $_POST['agama'];
  $alamat = $_POST['alamat'];
  $desa = $_POST['desa'];
  $kecamatan = $_POST['kecamatan'];
  $kota = $_POST['kota'];
  $provinsi = $_POST['provinsi'];
  $kode_pos = $_POST['kode_pos'];
  $no_tel = $_POST['no_tel'];
  $email = $_POST['email'];
  $sekolah_asal = $_POST['sekolah_asal'];  
  $sql = "INSERT INTO pendaftaran (nama, tanggal_lahir, jenis_kelamin, agama, alamat, desa, kecamatan, kota, provinsi, kode_pos, no_tel, email, sekolah_asal) 
        VALUES ('$nama', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$alamat', '$desa', '$kecamatan', '$kota', '$provinsi', '$kode_pos', '$no_tel', '$email', '$sekolah_asal')";
  $query = mysqli_query($db,$sql);
  if($query){
    header('Location:index-siswa.php?status-sukses');
  }else{
    header('Location:index-siswa.php?status-gagal');
  }
  }else if($_POST['aksi']=='edit'){
    $id_pendaftaran = $_POST['id_pendaftaran'];
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $desa = $_POST['desa'];
    $kecamatan = $_POST['kecamatan'];
    $kota = $_POST['kota'];
    $provinsi = $_POST['provinsi'];
    $kode_pos = $_POST['kode_pos'];
    $no_tel = $_POST['no_tel'];
    $email = $_POST['email'];
    $sekolah_asal = $_POST['sekolah_asal'];
    $sql ="UPDATE pendaftaran SET nama='$nama', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin',agama='$agama', alamat='$alamat', desa='$desa', kecamatan='$kecamatan', kota='$kota', provinsi='$provinsi', kode_pos='$kode_pos', email='$email', sekolah_asal='$sekolah_asal' WHERE id_pendaftaran='$id_pendaftaran'";
    $query = mysqli_query($db,$sql);
    if($query){
      header('Location:index-siswa.php?status-sukses');
    }else{
      header('Location:index-siswa.php?status-gagal');
    }
  }
}
if(isset($_GET['hapus'])){
  $id_pendaftaran = $_GET['hapus'];
  $sql = "DELETE FROM pendaftaran WHERE id_pendaftaran = '$id_pendaftaran';";
  $query = mysqli_query($db,$sql);
  if($query){
    header('Location:index-siswa.php?status-sukses');
  }else{
    header('Location:index-siswa.php?status-gagal');
  }
}
?>