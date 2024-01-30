<?php
include("config.php");
if(isset($_POST['aksi'])){
  if($_POST['aksi']=='add'){
  $nama_guru= $_POST['nama_guru'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $alamat = $_POST['alamat'];
  $no_tel = $_POST['no_tel'];
  $email = $_POST['email'];
  $sql = "INSERT INTO guru (nama_guru, jenis_kelamin, alamat, no_tel, email) 
        VALUES ('$nama_guru', '$jenis_kelamin', '$alamat', '$no_tel', '$email')";
  $query = mysqli_query($db,$sql);
  if($query){
    header('Location:index.php?status-sukses');
  }else{
    header('Location:index.php?status-gagal');
  }
}else if($_POST['aksi']=='edit'){
  $id_guru = $_POST['id_guru'];
  $nama_guru= $_POST['nama_guru'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $alamat = $_POST['alamat'];
  $no_tel = $_POST['no_tel'];
  $email = $_POST['email'];
  $sql ="UPDATE guru SET nama_guru = '$nama_guru', jenis_kelamin = '$jenis_kelamin', alamat='$alamat',
     no_tel = '$no_tel', email = '$email' WHERE id_guru ='$id_guru'";
  $query = mysqli_query($db,$sql);
  if($query){
    header('Location:index.php?status-sukses');
  }else{
    header('Location:index.php?status-gagal');
  } 
}
}
if(isset($_GET['hapus'])){
  $id_guru =$_GET['hapus'];   
  $sql ="DELETE FROM guru WHERE id_guru ='$id_guru';";
  $query = mysqli_query($db,$sql);
  if($query){
    header('Location:index.php?status-sukses');
  }else{
    header('Location:index.php?status-gagal');
  }
}
?>