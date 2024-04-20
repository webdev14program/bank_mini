<div class="row">
    <div class="col-md">
        <div class="alert alert-success" role="alert">
            <h4 class="text-center text-uppercase font-weight-bolder">Jurusan</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="">
                                <th scope="col">
                                    <h6 class="font-weight-bold">#</h6>
                                </th>
                                <th scope="col">
                                    <h6 class="font-weight-bold text-uppercase">ID</h6>
                                </th>
                                <th scope="col">
                                    <h6 class="font-weight-bold text-uppercase">Kode</h6>
                                </th>
                                <th scope="col">
                                    <h6 class="font-weight-bold text-uppercase">Jurusan</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($jurusan as $row) {
                                ?>
                                    <td class="text-centers">
                                        <h6><?php echo $no++; ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="text-uppercase text-center"><?php echo $row['id_jurusan']; ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="text-uppercase text-center"><?php echo $row['kode']; ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="text-uppercase"><?php echo $row['jurusan']; ?></h6>
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