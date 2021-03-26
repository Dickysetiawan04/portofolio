<?php 
include "./koneksi.php";

// if (isset($_GET['id_about'])) {
//     header('Location: aboutme.php');
// }

$id_aboutme = $_GET['id_about'];

$deletesql="DELETE FROM aboutme WHERE id_about = $id_aboutme";
$query = mysqli_query($connect,$deletesql);

if ($query) {
   echo "<script>alert('data berhasil di hapus');
   document.location.href = 'aboutme.php';
   </script>";
}else{
    header('Location: hapus_aboutme.php?setatus=gagal');
}
?>