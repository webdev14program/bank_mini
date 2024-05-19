<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Bank Mini SMK Tunas Harapan</title>
    <link rel="icon" href="https://smkth-jakbar.com/assets/images/logo.png">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <h5 class="text-center text-uppercase font-weight-bold">BANK MINI (Project AKL) </h5>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h5 class="text-center text-uppercase font-weight-bold">smk tunas harapan jakarta barat</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="text-center text-uppercase font-weight-bold">Antara <?= $tanggalawal ?> Sampai <?= $tanggalakhir ?></h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="row">
        <div class="col-md mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="">
                                <tr class="">
                                    <th scope="col">
                                        <h6 class="font-weight-bold">#</h6>
                                    </th>
                                    <th scope="col">
                                        <h6 class="font-weight-bold text-uppercase">Nama Siswa</h6>
                                    </th>
                                    <th scope="col">
                                        <h6 class="font-weight-bold text-uppercase">Kelas</h6>
                                    </th>
                                    <th scope="col">
                                        <h6 class="font-weight-bold text-uppercase">Transaksi</h6>
                                    </th>
                                    <th scope="col">
                                        <h6 class="font-weight-bold text-uppercase">Nominal</h6>
                                    </th>
                                    <th scope="col">
                                        <h6 class="font-weight-bold text-uppercase">Nominal ADM</h6>
                                    </th>
                                    <th scope="col">
                                        <h6 class="font-weight-bold text-uppercase">Tanggal</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr>
                                    <?php
                                    $no = 1;
                                    foreach ($perhari as $row) {
                                    ?>
                                        <td class="text-centers">
                                            <h6><?php echo $no++; ?></h6>
                                        </td>

                                        <td>
                                            <h6 class="text-uppercase "><?= $row['nama_siswa']; ?></h6>
                                        </td>
                                        <td>
                                            <h6 class="text-uppercase "><?= $row['kelas']; ?></h6>
                                        </td>
                                        <td>
                                            <h6 class="text-uppercase "><?= $row['jenis_transaksi']; ?></h6>
                                        </td>
                                        <td>
                                            <h6 class="text-uppercase "><?= ("Rp " . number_format($row['nominal'], 2, ',', '.')) ?></h6>
                                        </td>
                                        <td>
                                            <h6 class="text-uppercase "><?= ("Rp " . number_format($row['nominal_adm'], 2, ',', '.')) ?></h6>
                                        </td>
                                        <td>
                                            <h6 class="text-uppercase "><?= $row['timestamp']; ?></h6>
                                        </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md mt-3">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="">
                                <tr>
                                    <th scope="col ">
                                        <h6 class="text-center text-uppercase font-weight-bolder">Setoran</h6>
                                    </th>
                                    <th scope="col ">
                                        <h6 class="text-center text-uppercase font-weight-bolder">Penarikan</h6>
                                    </th>
                                    <th scope="col ">
                                        <h6 class="text-center text-uppercase font-weight-bolder">ADM</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    $no = 1;
                                    foreach ($total_kepala as $row) {
                                    ?>
                                        <td>
                                            <h6 class="text-uppercase text-center"><?= ("Rp " . number_format($row['setoran'], 2, ',', '.')) ?></h6>
                                        </td>
                                        <td>
                                            <h6 class="text-uppercase text-center"><?= ("Rp " . number_format($row['penarikan'], 2, ',', '.')) ?></h6>
                                        </td>
                                        <td>
                                            <h6 class="text-uppercase text-center"><?= ("Rp " . number_format($row['adm'], 2, ',', '.')) ?></h6>
                                        </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md mt-3">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-uppercase text-center">
                                    <th scope="col">Teler 1</th>
                                    <th scope="col">Teler 2</th>
                                    <th scope="col">PJ HARIAN Bank MIni</th>
                                    <th scope="col">KEPALA Bank Mini</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><br><br><br><br><br></td>
                                    <td><br><br><br><br><br></td>
                                    <td><br><br><br><br><br></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script>
        window.print();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>

</html>