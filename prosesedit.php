<?php
if ($_POST) {
    include 'koneksi.php';
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $stambuk = $_POST['stambuk'];
    $kom = $_POST['kom'];

    $query = "UPDATE mahasiswa SET nama='$nama', kom='$kom', stambuk='$stambuk' WHERE nim='$nim'";
    $execQuery = mysqli_query($conn, $query);

    if ($execQuery) {
        echo
        "<script>
        alert('Data berhasil disimpan');
        window.location.href = 'index.php';
        </script>";
    } else {
        echo
        "<script>
        alert('Data gagal disimpan');
        window.location.href = 'tambah.php';
        </script>";
    }
} else {
    echo "No Access";
}
