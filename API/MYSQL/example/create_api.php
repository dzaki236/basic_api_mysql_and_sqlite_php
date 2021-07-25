<?php
// print_r($_POST);
include "./connection.php";
include "./helper.php";
$result['message']="";

$judul_buku = htmlentities(htmlspecialchars(mysqli_real_escape_string($connection,$_POST['judul_buku'])));
$pengarang = htmlentities(htmlspecialchars(mysqli_real_escape_string($connection,$_POST['pengarang'])));
$penerbit = htmlentities(htmlspecialchars(mysqli_real_escape_string($connection,$_POST['penerbit'])));
$tahunterbit = htmlentities(htmlspecialchars(mysqli_real_escape_string($connection,$_POST['tahunterbit'])));

if($judul_buku == ""){
    $result['message']="<p style='color:red;'>Judul buku tak boleh kosong!</p>";
}
else if($pengarang == ""){
    $result['message']="<p style='color:red;'>Pengarang tak boleh kosong!</p>";
}
else if($penerbit == ""){
    $result['message']="<p style='color:red;'>Penerbit buku tak boleh kosong!</p>";
}
else if($tahunterbit == ""){
    $result['message']="<p style='color:red;'>Tahun terbit tak boleh kosong!</p>";
}else{
    $query = mysqli_query($connection,"INSERT INTO `buku` (`id`, `judul_buku`, `pengarang`, `penerbit`, `tahunterbit`) VALUES(NULL,'$judul_buku','$pengarang','$penerbit','$tahunterbit')");
    if($query){
        $result['message']="<p style='color:green;'>Data berhasil di tambahkan!</p>";

    }else{
        $result['message']="<p style='color:red;'>Data gagal ditambahkan!</p>";
    }
}

echo json_encode($result);
?>