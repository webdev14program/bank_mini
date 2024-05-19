<div class="row">
    <div class="col-md">
        <div class="alert alert-success" role="alert">
            <h4 class="text-center text-uppercase font-weight-bolder">Tahun Ajaran</h4>
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
                            <tr class="text-center">
                                <th scope="col">
                                    <h6 class="font-weight-bold">#</h6>
                                </th>
                                <th scope="col">
                                    <h6 class="font-weight-bold text-uppercase">ID</h6>
                                </th>
                                <th scope="col">
                                    <h6 class="font-weight-bold text-uppercase">Tahun AJaran</h6>
                                </th>
                                <th scope="col">
                                    <h6 class="font-weight-bold text-uppercase">Status</h6>
                                </th>
                                <th scope="col">
                                    <h6 class="font-weight-bold text-uppercase">Aksi</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($data_ta as $row) {
                                ?>
                                    <td class="text-centers">
                                        <h6><?php echo $no++; ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="text-uppercase text-center"><?php echo $row['id_ta']; ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="text-uppercase text-center"><?php echo $row['tahun_ajaran']; ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="text-uppercase"><?php echo $row['status']; ?></h6>
                                    </td>
                                    <td>
                                        <h5 class="text-center">
                                            <form>
                                                <input type="text" class="form-control" value="<?php echo $row['id_ta']; ?>" name="id_ta">
                                                <input type="text" class="form-control" value="<?php echo $row['tahun_ajaran']; ?>" name="tahun_ajaran">
                                                <input type="text" class="form-control" value="<?php echo $row['status']; ?>" name="status
                                                ">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
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