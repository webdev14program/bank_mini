<div class="card">
    <div class="card-body bg-primary text-white">
        <h5 class="alert-heading text-uppercase font-weight-bolder">
            </i>kepala bank mini - (<?= $kelas['tahun_ajaran'] ?>)
            </h4>
    </div>
</div>

<div class="row mb-3">
    <div class="col-sm mt-2">
        <div class="card rounded">
            <div class="card-body bg-success">
                <div class="row">
                    <div class="col">
                        <h3 class="text-white  font-italic font-weight-bold"><?= $siswa['jumlah_siswa'] ?></h3>
                        <h4 class=" text-white font-italic font-weight-bold">Siswa</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm mt-2">
        <div class="card">
            <div class="card-body bg-info">
                <div class="row">
                    <div class="col">
                        <h3 class="text-white  font-italic font-weight-bold"><?= $kelas['jumlah_kelas'] ?></h3>
                        <h4 class=" text-white font-italic font-weight-bold">Kelas</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm mt-2">
        <div class="card">
            <div class="card-body bg-danger">
                <div class="row">
                    <div class="col">
                        <h3 class="text-white  font-italic font-weight-bold "><?= $jurusan['jumlah_jurusan'] ?></h3>
                        <h4 class="text-white  font-italic font-weight-bold">Jurusan</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="text-center">
                            <tr class="">

                                <th scope="col">
                                    <h6 class="font-weight-bold text-uppercase">Nominal Setoran</h6>
                                </th>

                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($setoran as $row) {
                                ?>

                                    <td>
                                        <h6 class="text-uppercase "><?= ("Rp " . number_format($row['jumlah_setoran'], 2, ',', '.')) ?></h6>
                                    </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="text-center">
                            <tr class="">

                                <th scope="col">
                                    <h6 class="font-weight-bold text-uppercase">Nominal Penarikan</h6>
                                </th>

                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($penarikan as $row) {
                                ?>

                                    <td>
                                        <h6 class="text-uppercase "><?= ("Rp " . number_format($row['jumlah_penarikan'], 2, ',', '.')) ?></h6>
                                    </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="text-center">
                            <tr class="">

                                <th scope="col">
                                    <h6 class="font-weight-bold text-uppercase">Nominal Biaya Admin</h6>
                                </th>

                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($adm as $row) {
                                ?>

                                    <td>
                                        <h6 class="text-uppercase "><?= ("Rp " . number_format($row['jumlah_adm'], 2, ',', '.')) ?></h6>
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