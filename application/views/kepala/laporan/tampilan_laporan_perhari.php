 <div class="row">
     <div class="col-md">
         <div class="alert alert-success" role="alert">
             <h4 class="text-center text-uppercase font-weight-bolder">Laporan Perhari</h4>
         </div>
     </div>
 </div>

 <div class="row">
     <div class="col-md">
         <div class="card">
             <div class="card-header">
                 <h5 class="text-center text-uppercase font-weight-bolder">Filter Cek</h5>
             </div>
             <div class="card-body">
                 <form method="get" action="<?= base_url() ?>Dashboard_kepala/laporan_perhari">
                     <div class="row">
                         <div class="col-md">
                             <div class="form-group">
                                 <input type="date" class="form-control" name="tanggalawal" placeholder="tanggal awal">
                             </div>
                         </div>
                         <div class="col-md">
                             <div class="form-group">
                                 <input type="date" class="form-control" name="tanggalakhir" placeholder="tanggal akhir">
                             </div>
                         </div>
                         <div class="col-md">
                             <button type="submit" class="btn btn-primary text-uppercase font-weight-bolder text-white">filter</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
     <div class="col-md">
         <div class="card">
             <div class="card-header">
                 <h5 class="text-center text-uppercase font-weight-bolder">Filter Per Hari Print</h5>
             </div>
             <div class="card-body">
                 <form method="get" action="<?= base_url() ?>Dashboard_kepala/print_laporan_perhari" target="_blank">
                     <div class="row">
                         <div class="col-md">
                             <div class="form-group">
                                 <input type="date" class="form-control" name="tanggalawal" placeholder="tanggal awal">
                             </div>
                         </div>
                         <div class="col-md">
                             <div class="form-group">
                                 <input type="date" class="form-control" name="tanggalakhir" placeholder="tanggal akhir">
                             </div>
                         </div>
                         <div class="col-md">
                             <button type="submit" class="btn btn-danger text-uppercase font-weight-bolder text-white">print</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <div class="row">
     <div class="col-md">

     </div>
 </div>


 <div class="row">
     <div class="col-md mt-2">
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
                                     <h6 class="font-weight-bold text-uppercase">NIS</h6>
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
                                         <h6 class="text-uppercase "><?= $row['nis']; ?></h6>
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