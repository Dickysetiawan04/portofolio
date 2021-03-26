<?php 
include "./koneksi.php";

// if (isset($_GET['id'])) {
//     header('Location: galery.php');
// }

$id_galery = $_GET['id'];

$deletesql=" DELETE FROM galery WHERE id = '$id_galery'";
$query = mysqli_query($connect,$deletesql);

if ($query) {
   echo "<script>alert('data berhasil di hapus');
   document.location.href = 'galery.php';
   </script>";
}else{
    header('Location: hapus_galery.php?setatus=gagal');
}
?>