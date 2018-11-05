<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/bootstrap.js"></script>
    <title>Tambah Data</title>
</head>

<body>
    <?php
        require 'functions.php';
        // cek apakah button submit sudah di tekan atau belum
        if(isset($_POST['submit']))
        {
    
            //cek sukses data ditambah menggunakan function tambah data pada functions.php
            if(tambah($_POST)>0)
            {
                echo "
                <script>
                    alert('data berhasil disimpan');
                    document.location.href = 'index.php';
                </script>
                ";
            }
            else
            {
                echo "
                <script>
                    alert('data gagal disimpan');
                    document.location.href = 'index.php';
                </script>
                ";
                echo"<br>";
                echo mysqli_error($conn);
            }
        }
    ?>
    <ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" href="./index.php">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="./tambah_data.php">Tambah Data</a>
    </li>
    </ul>
    <center><h1>Tambah Data Mahasiswa</h1></center><br>
    <form class="form-horizontal" action="" method="post">
        <div class="form-group">
            <label for="Nama" class="col-sm-4 control-label">Nama</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="Nama" placeholder="Nama" name="Nama" required>
            </div>
        </div>
        <div class="form-group">
            <label for="Nim" class="col-sm-4 control-label">Nim</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="Nim" placeholder="Nim" name="Nim" required>
            </div>
        </div>
        <div class="form-group">
            <label for="Email" class="col-sm-4 control-label">Email</label>
            <div class="col-sm-5">
                <input type="email" class="form-control" id="Email" placeholder="Email" name="Email" required>
            </div>
        </div>
        <div class="form-group">
            <label for="Jurusan" class="col-sm-4 control-label">Jurusan</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="Jurusan" placeholder="Jurusan" name="Jurusan" required>
            </div>
        </div>
        <div class="form-group">
            <label for="Gambar" class="col-sm-4 control-label">Gambar</label>
            <div class="col-sm-5">
                <input type="file" name="Gambar" id="Gambar" required>
            </div>
        </div>
        <div class="form-group">
        <div>
            <center><button type="submit" name="submit" class="btn btn-primary">Tambah</button>
        </div>
    </div>
    </form>
</body>

</html>

