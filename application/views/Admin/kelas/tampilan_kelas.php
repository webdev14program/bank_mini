<div class="row">
    <div class="col-md">
        <div class="alert alert-success" role="alert">
            <h4 class="text-center text-uppercase font-weight-bolder">Kelas</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-primary btn-sm text-uppercase font-weight-bolder" data-toggle="modal" data-target="#exampleModal">
                    Upload Kelas
                </button>
                <a class="btn btn-danger btn-sm text-uppercase font-weight-bolder" href="<?= base_url() ?>Dashboard/hapus_all_kelas">Hapus Kelas</a>
            </div>
        </div>
    </div>
</div>

<?= $this->session->flashdata('pesan') ?>

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
                                    <h6 class="font-weight-bold text-uppercase">Tahun Ajaran</h6>
                                </th>
                                <th scope="col">
                                    <h6 class="font-weight-bold text-uppercase">Jumlah Kelas</h6>
                                </th>
                                <th scope="col">
                                    <h6 class="font-weight-bold text-uppercase">Aksi</h6>
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
                                        <h6 class="text-uppercase "><?= $row['id_ta']; ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="text-uppercase "><?= $row['tahun_ajaran']; ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="text-uppercase"><?= $row['jumlah_kelas']; ?> Kelas</h6>
                                    </td>
                                    <td>
                                        <h5 class="">
                                            <a class="btn btn-primary btn-sm text-uppercase font-weight-bolder" href="<?= base_url() ?>Dashboard/detail_kelas/<?= $row['id_ta']; ?>">detail</a>
                                        </h5>
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


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white text-uppercase font-weight-bolder">
                <h5 class="modal-title" id="exampleModalLabel">Upload Kelas</h5>
            </div>
            <div class="modal-body">
                <?= form_open_multipart('Dashboard/upload_kelas'); ?>
                <div class="form-group">
                    <input type="file" name="excel" class="form-control-file" name="file" required accept=".xlsx">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" value="upload" class="btn btn-primary">Upload</button>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>