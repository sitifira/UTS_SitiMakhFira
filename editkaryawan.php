<?php
include_once("../koneksi.php");
$idedit = $_GET['id'];
$qry = "SELECT * FROM karyawan WHERE id_karyawan='$idedit'";
$edit = mysqli_query($koneksi,$qry);
$data = mysqli_fetch_array($edit);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.css">
</head>

<body style="background-color:#d1e6d4">
    <?php
    include_once("../navbar.php");
    ?>

    <div class="container">
        <div class="row my-5">
            <div class="col-8 m-auto">
                <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
                    <div class="card-header">
                        <b><i class="fas fa-user-edit"></i> EDIT EMPLOYEE</b>
                    </div>
                    <div class="card-body">
                        <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_karyawan" value="<?=$data['id_karyawan']?>">
                            <div class="mb-3">
                                <label for="nm_karyawan" class="form-label"><i class="fas fa-user"></i> Full Name</label>
                                <input value="<?=$data['nm_karyawan']?>" name="nm_karyawan" type="text" class="form-control" id="nm_karyawan"
                                    aria-describedby="nameHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label"><i class="fas fa-briefcase"></i> Position</label>
                                <input value="<?=$data['jabatan']?>" name="jabatan" type="text" class="form-control" id="jabatan"
                                    aria-describedby="positionHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="tgl_masuk" class="form-label"><i class="fas fa-calendar-alt"></i> Start Date</label>
                                <input value="<?=$data['tgl_masuk']?>" name="tgl_masuk" type="date" class="form-control" id="tgl_masuk"
                                    aria-describedby="dateHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="gaji" class="form-label"><i class="fas fa-dollar-sign"></i> Salary</label>
                                <input value="<?=$data['gaji']?>" name="gaji" type="number" class="form-control" id="gaji"
                                    aria-describedby="salaryHelp" required>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Update
                            </button>
                            <a href="index.php" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Back
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script src="js/all.js"></script>
</body>

</html>