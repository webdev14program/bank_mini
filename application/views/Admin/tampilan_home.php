<div class="card">
    <div class="card-body bg-primary text-white">
        <h5 class="alert-heading text-uppercase font-weight-bolder">
            </i>admin utama bank mini - (<?= $ta['tahun_ajaran'] ?>)
        </h5>
    </div>
</div>

<div class="row mb-3">
    <div class="col-md mt-2">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="text-center">
                            <tr class="">

                                <th scope="col">
                                    <h5 class="font-weight-bold text-uppercase">siswa</h5>
                                </th>

                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($siswa as $row) {
                                ?>

                                    <td>
                                        <h5 class="text-uppercase font-weight-bold "><?= $row['jumlah_siswa'] ?></h5>
                                    </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <div class="col-md mt-2">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="text-center">
                            <tr class="">

                                <th scope="col">
                                    <h5 class="font-weight-bold text-uppercase">kelas</h5>
                                </th>

                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($kelas as $row) {
                                ?>

                                    <td>
                                        <h5 class="text-uppercase font-weight-bold"><?= $row['jumlah_kelas'] ?></h5>
                                    </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <div class="col-md mt-2">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="text-center">
                            <tr class="">

                                <th scope="col">
                                    <h5 class="font-weight-bold text-uppercase">jurusan</h5>
                                </th>

                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($jurusan as $row) {
                                ?>

                                    <td>
                                        <h5 class="text-uppercase font-weight-bold"><?= $row['jumlah_jurusan'] ?></h5>
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
<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="text-center">
                            <tr class="">

                                <th scope="col">
                                    <h5 class="font-weight-bold text-uppercase">Nominal Setoran</h5>
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
                                        <h5 class="text-uppercase font-weight-bold"><?= ("Rp " . number_format($row['jumlah_setoran'], 2, ',', '.')) ?></h5>
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
                                    <h5 class="font-weight-bold text-uppercase">Nominal Penarikan</h5>
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
                                        <h5 class="text-uppercase font-weight-bold"><?= ("Rp " . number_format($row['jumlah_penarikan'], 2, ',', '.')) ?></h5>
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
                                    <h5 class="font-weight-bold text-uppercase">Nominal Biaya Admin</h5>
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
                                        <h5 class="text-uppercase font-weight-bold"><?= ("Rp " . number_format($row['jumlah_adm'], 2, ',', '.')) ?></h5>
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