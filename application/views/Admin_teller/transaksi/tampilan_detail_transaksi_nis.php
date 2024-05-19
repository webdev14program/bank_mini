 <div class="row">
     <div class="col-md">
         <div class="alert alert-success" role="alert">
             <h4 class="text-center text-uppercase font-weight-bolder">Transaksi</h4>
         </div>
     </div>
 </div>
 <div class="row">
     <div class="col-md">
         <div class="alert alert-primary" role="alert">
             <h6 class="text-uppercase font-weight-bolder">Nama Siswa : <?= $header['nama_siswa'] ?></h6>
         </div>
     </div>
     <div class="col-md-3">
         <div class="alert alert-primary" role="alert">
             <h6 class="text-uppercase font-weight-bolder">Kelas : <?= $header['kelas'] ?></h6>
         </div>
     </div>
     <div class="col-md-3">
         <div class="alert alert-primary" role="alert">
             <h6 class="text-uppercase font-weight-bolder">Tahun Ajaran : <?= $header['tahun_ajaran'] ?></h6>
         </div>
     </div>
 </div>

 <h5 class="text-right">
     <div class="row">
         <div class="col-md-5 mt-2">
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
         <div class="col-md-7 mt-3 mb-4">
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
                                         <h6 class="font-weight-bold text-uppercase">Jenis Jenis</h6>
                                     </th>
                                     <th scope="col">
                                         <h6 class="font-weight-bold text-uppercase">Nominal Transaksi</h6>
                                     </th>
                                     <th scope="col">
                                         <h6 class="font-weight-bold text-uppercase">Waktu Transaksi</h6>
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
 </h5>




 <div class="modal fade" id="setoran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header bg-primary text-white">
                 <h5 class="modal-title text-uppercase font-weight-bolder">Tambah Setoran</h5>
             </div>
             <div class="modal-body">
                 <form method="post" action="<?= base_url() ?>Dashboard_teller/tambah_transaksi">
                     <div class="form-group">
                         <input type="text" name="nis" value="<?= $header['nis'] ?>" class="form-control" require hidden>
                     </div>
                     <div class="form-group">
                         <input type="text" name="id_siswa" value="<?= $header['id_siswa'] ?>" class="form-control" require hidden>
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
                 <form method="post" action="<?= base_url() ?>Dashboard_teller/tambah_transaksi">
                     <div class="form-group">
                         <input type="text" name="nis" value="<?= $header['nis'] ?>" class="form-control" require hidden>
                     </div>
                     <div class="form-group">
                         <input type="text" name="id_siswa" value="<?= $header['id_siswa'] ?>" class="form-control" require hidden>
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