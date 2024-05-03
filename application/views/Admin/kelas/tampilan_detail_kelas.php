<div class="row">
    <div class="col-md">
        <div class="alert alert-success" role="alert">
            <h4 class="text-center text-uppercase font-weight-bolder">Kelas<br><?= $header['tahun_ajaran'] ?> </h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-success btn-sm text-uppercase font-weight-bolder" href="<?= base_url() ?>Dashboard/kelas">Kembali</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md mt-2">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr class="">
                                <th scope="col">
                                    <h6 class="font-weight-bold">#</h6>
                                </th>
                                <th scope="col">
                                    <h6 class="font-weight-bold text-uppercase">ID</h6>
                                </th>
                                <th scope="col">
                                    <h6 class="font-weight-bold text-uppercase">kelas</h6>
                                </th>
                                <th scope="col">
                                    <h6 class="font-weight-bold text-uppercase">jurusan</h6>
                                </th>
                                <th scope="col">
                                    <h6 class="font-weight-bold text-uppercase">tahun ajaran</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($kelas as $row) {
                                ?>
                                    <td class="text-centers">
                                        <h6><?php echo $no++; ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="text-uppercase "><?= $row['id_kelas']; ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="text-uppercase "><?= $row['kelas']; ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="text-uppercase"><?= $row['jurusan']; ?> Kelas</h6>
                                    </td>
                                    <td>
                                        <h6 class="text-uppercase"><?= $row['tahun_ajaran']; ?></h6>
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