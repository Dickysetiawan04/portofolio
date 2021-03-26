<?php
// Proses nya jadi satu dengan file nya
include "./koneksi.php";

if(isset($_POST['contact'])){
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $pesan = $_POST['pesan'];
  $insertquery = "INSERT INTO `contact` (`nama`, `email`, `pesan`) VALUES ('$nama', '$email', '$pesan');";
  $query = mysqli_query($connect,$insertquery);
  // kondisi jika gagal dan berhasil
  if ($query) {
echo "<script>alert('anda berhasil mengkontak admin!');
document.location.href='perofil.php';
</script>";
  }else{
   echo "<script>alert('kontak gagal di tambahkan');</script>";
  }

}
?>