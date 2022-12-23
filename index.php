<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student List Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 text-white">Student List Database</span>
        </div>
    </nav>

    <div class="container">
        <a href="./tambah.php" class="btn btn-primary mt-5 mb-2">Add[+]</a>
        <div class="">
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>KOM</th>
                    <th>Stambuk</th>
                </tr>

                <?php
                    include './koneksi.php';
                    $query = "SELECT * FROM mahasiswa";
                    $exeQuery = mysqli_query($conn, $query);
                    $i = 1;
                    while ($data = mysqli_fetch_assoc($exeQuery)) {
                    ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $data['nim'] ?></td>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['kom'] ?></td>
                            <td><?= $data['stambuk'] ?></td>
                            <td>
                                <a onclick="return confirm('Do you really want to delete the data?')" href="hapus.php?nim=<?= $data['nim'] ?>" class="btn btn-danger btn-sm">Delete</a>
                                <a href="edit.php?nim=<?= $data['nim'] ?>" class="btn btn-info btn-sm text-white">Edit</a>
                            </td>
                         </tr>
        
                    <?php
                    }
                    ?>


            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>