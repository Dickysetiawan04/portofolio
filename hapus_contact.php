<?php 
include "./koneksi.php";

// if (isset($_GET['id_about'])) {
//     header('Location: aboutme.php');
// }

$id_contact = $_GET['id_contact'];

$deletesql="DELETE FROM contact WHERE id_contact = $id_contact";
$query = mysqli_query($connect,$deletesql);

if ($query) {
   echo "<script>alert('data berhasil di hapus');
   document.location.href = 'contact.php';
   </script>";
}else{
    header('Location: hapus_contact.php?setatus=gagal');
}
?>