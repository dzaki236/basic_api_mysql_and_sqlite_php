<?php
include "./connection.php";
include "./helper.php";
$resultdatas = query("SELECT * FROM buku");

if (count($resultdatas) > 0) {
    foreach ($resultdatas as $resultdata) {
        $results[] = array(
            'status' => 'success',
            'id' => $resultdata['id'],
            'judul_buku' => $resultdata['judul_buku'],
            'pengarang' => $resultdata['pengarang'],
            'penerbit' => $resultdata['penerbit'],
            'tahunterbit' => $resultdata['tahunterbit']
        );
    }
} 
else {
    $results[] = array('status' => 'error 404, data not found!');
}
echo json_encode($results);
