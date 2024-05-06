 <div class="row">
     <div class="col-md">
         <div class="alert alert-success" role="alert">
             <h4 class="text-center text-uppercase font-weight-bolder">Transaksi <br><?= $header['nama_siswa'] ?></h4>
         </div>
     </div>
 </div>

 <div class="row">
     <div class="col-md mt-2">
         <div class="row">
             <div class="col">
                 <div class="card">
                     <div class="card-body">
                         <div class="table-responsive">
                             <table class="table table-striped table-bordered">
                                 <thead class="text-center">
                                     <tr class="">
                                         <th scope="col">
                                             <h6 class="font-weight-bold text-uppercase">Setoran</h6>
                                         </th>
                                         <th scope="col">
                                             <h6 rowspan=2 class="font-weight-bold text-uppercase">Penarikan</h6>
                                         </th>

                                     </tr>
                                 </thead>
                                 <tbody class="text-center">
                                     <tr>
                                         <td>
                                             <button type="button" class="btn btn-primary btn-primary  text-uppercase font-weight-bolder btn-sm" data-toggle="modal" data-target="#setoran">
                                                 tambah setoran
                                             </button>
                                         </td>
                                         <td>
                                             <button type="button" class="btn btn-primary btn-danger  text-uppercase font-weight-bolder btn-sm" data-toggle="modal" data-target="#penarikan">
                                                 tambah penarikan
                                             </button>
                                         </td>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>

         </div>
     </div>
     <div class="col-md-7 mt-2">
         <div class="card">
             <div class="card-body">
                 <div class="table-responsive">
                     <table class="table table-striped table-bordered">
                         <thead class="text-center">
                             <tr class="">

                                 <th scope="col">
                                     <h6 class="font-weight-bold text-uppercase">total tabungan</h6>
                                 </th>

                             </tr>
                         </thead>
                         <tbody class="text-center">
                             <tr>
                                 <?php
                                    $no = 1;
                                    foreach ($total_tabungan as $row) {
                                    ?>

                                     <td>
                                         <h6 class="text-uppercase font-weight-bold "><?= ("Rp " . number_format($row['total_tabungan_siswa_nis'], 2, ',', '.')) ?></h6>
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
     <div class="col-md-5 mt-3 mb-4">
         <div class="card">
             <div class="card-header alert alert-primary">
                 <h5 class="text-center">Detail Kelas</h5>
             </div>
             <div class="card-body">
                 <div class="row">
                     <div class="col-md mt-2">
                         <div class="card">
                             <div class="card-body">
                                 <div class="table-responsive">
                                     <table class="table table-striped table-bordered">
                                         <thead class="text-center">
                                             <tr class="">
                                                 <th scope="col">
                                                     <h6 class="font-weight-bold">#</h6>
                                                 </th>
                                                 <th scope="col">
                                                     <h6 class="font-weight-bold text-uppercase">Kelas</h6>
                                                 </th>
                                                 <th scope="col">
                                                     <h6 class="font-weight-bold text-uppercase">Tahun Ajaran</h6>
                                                 </th>
                                             </tr>
                                         </thead>
                                         <tbody class="text-center">
                                             <tr>
                                                 <?php
                                                    $no = 1;
                                                    foreach ($siswa as $row) {
                                                    ?>
                                                     <td class="text-centers">
                                                         <h6><?php echo $no++; ?></h6>
                                                     </td>
                                                     <td>
                                                         <h6 class="text-uppercase "><?= $row['kelas']; ?></h6>
                                                     </td>
                                                     <td>
                                                         <h6 class="text-uppercase "><?= $row['tahun_ajaran']; ?></h6>
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
             </div>
         </div>
     </div>
     <div class="col-md mt-3 mb-4">
         <div class="card">
             <div class="card-header alert alert-success">
                 <h5 class="text-center">Transaksi</h5>
             </div>
             <div class="card-body">
                 <div class="table-responsive">
                     <table class="table table-striped table-bordered">
                         <thead class="text-center">
                             <tr class="">
                                 <th scope="col">
                                     <h6 class="font-weight-bold">#</h6>
                                 </th>
                                 <th scope="col">
                                     <h6 class="font-weight-bold text-uppercase">Jenis Transaksi</h6>
                                 </th>
                                 <th scope="col">
                                     <h6 class="font-weight-bold text-uppercase">Nominal Transaksi</h6>
                                 </th>
                                 <th scope="col">
                                     <h6 class="font-weight-bold text-uppercase">Nominal Transaksi</h6>
                                 </th>
                             </tr>
                         </thead>
                         <tbody class="text-center">
                             <tr>
                                 <?php
                                    $no = 1;
                                    foreach ($transaksi as $row) {
                                    ?>
                                     <td class="text-centers">
                                         <h6><?php echo $no++; ?></h6>
                                     </td>
                                     <td>
                                         <h6 class="text-uppercase "><?= $row['jenis_transaksi']; ?></h6>
                                     </td>
                                     <td>
                                         <h6 class="text-uppercase "><?= ("Rp " . number_format($row['nominal'], 2, ',', '.')) ?></h6>
                                     </td>
                                     <td>
                                         <h6 class="text-uppercase "><?= $row['timestamp']; ?></h6>
                                     </td>
                             </tr>
                         <?php } ?>
                         </tbody>
                     </table>
                 </div>
                 <tbody>

                 </tbody>
                 </table>
             </div>
         </div>
     </div>
 </div>

 <div class="modal fade" id="setoran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header bg-primary text-white">
                 <h5 class="modal-title text-uppercase font-weight-bolder">Tambah Setoran</h5>
             </div>
             <div class="modal-body">
                 <form method="post" action="<?= base_url() ?>Dashboard/tambah_transaksi">
                     <div class="form-group">
                         <label class="text-uppercase font-weight-bolder">NIS</label>
                         <input type="text" name="nis" value="<?= $header['nis'] ?>" class="form-control" require hidden>
                     </div>
                     <div class="form-group">
                         <label class="text-uppercase font-weight-bolder">NAMA SISWA</label>
                         <input type="text" value="<?= $header['nama_siswa'] ?>" class="form-control" disabled require>
                     </div>
                     <div class="form-group">
                         <label class="text-uppercase font-weight-bolder">Tahun Ajaran</label>
                         <input type="text" value="<?= $header['tahun_ajaran'] ?>" class="form-control" disabled require>
                     </div>
                     <div class="row">
                         <div class="col-md"></div>
                     </div>
                     <div class="form-group">
                         <label class="text-uppercase font-weight-bolder">Jenis Transaksi</label>
                         <input type="text" value="setoran" name="jenis_transaksi" class="form-control" readonly require>
                     </div>
                     <div class="form-group">
                         <label class="text-uppercase font-weight-bolder">Norek</label>
                         <span class="text-danger text-lower">(Diisi input pakai Nomor Rekening, jika tidak ada nomor rekenig di input 0)</span>
                         <input type="text" name="no_rek" value="0" class="form-control" require>
                     </div>
                     <div class="row">
                         <div class="col-md">
                             <div class="form-group">
                                 <label class="text-uppercase font-weight-bolder">Nominal Transaksi</label>
                                 <input type="text" name="nominal" class="form-control" require>
                             </div>
                         </div>
                         <div class="col-md">
                             <div class="form-group">
                                 <label class="text-uppercase font-weight-bolder">Nominal ADM</label>
                                 <input type="text" name="nominal_adm" value="1000" class="form-control" readonly require>
                             </div>
                         </div>
                     </div>

                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary">Save changes</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>

 <div class="modal fade" id="penarikan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header bg-danger text-white">
                 <h5 class="modal-title text-uppercase font-weight-bolder">Tambah Penarikan</h5>
             </div>
             <div class="modal-body">
                 <form method="post" action="<?= base_url() ?>Dashboard/tambah_transaksi">
                     <div class="form-group">
                         <label class="text-uppercase font-weight-bolder">NIS</label>
                         <input type="text" name="nis" value="<?= $header['nis'] ?>" class="form-control" require hidden>
                     </div>
                     <div class="form-group">
                         <label class="text-uppercase font-weight-bolder">NAMA SISWA</label>
                         <input type="text" value="<?= $header['nama_siswa'] ?>" class="form-control" disabled require>
                     </div>
                     <div class="form-group">
                         <label class="text-uppercase font-weight-bolder">Tahun Ajaran</label>
                         <input type="text" value="<?= $header['tahun_ajaran'] ?>" class="form-control" disabled require>
                     </div>
                     <div class="row">
                         <div class="col-md"></div>
                     </div>
                     <!-- <div class="form-group text-uppercase font-weight-bolder">
                         <label class="text-uppercase font-weight-bolder">Jenis Transaksi</label>
                         <select class="form-control" name="jenis_transaksi">
                             <option value="setoran">Setoran</option>
                             <option value="penarikan">Penarikan</option>
                         </select>
                     </div> -->
                     <div class="form-group">
                         <label class="text-uppercase font-weight-bolder">Jenis Transaksi</label>
                         <input type="text" value="penarikan" name="jenis_transaksi" class="form-control" readonly require>
                     </div>
                     <div class="form-group">
                         <label class="text-uppercase font-weight-bolder">Norek</label>
                         <span class="text-danger text-lower">(Diisi input pakai Nomor Rekening, jika tidak ada nomor rekenig di input 0)</span>
                         <input type="text" name="no_rek" value="0" class="form-control" require>
                     </div>
                     <div class="row">
                         <div class="col-md">
                             <div class="form-group">
                                 <label class="text-uppercase font-weight-bolder">Nominal Transaksi</label>
                                 <input type="text" name="nominal" class="form-control" require>
                             </div>
                         </div>
                         <div class="col-md">
                             <div class="form-group">
                                 <label class="text-uppercase font-weight-bolder">Nominal ADM</label>
                                 <input type="text" name="nominal_adm" value="5000" class="form-control" readonly require>
                             </div>
                         </div>
                     </div>

                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary">Save changes</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>