 <div class="row">
     <div class="col-md">
         <div class="alert alert-success" role="alert">
             <h4 class="text-center text-uppercase font-weight-bolder">Laporan Per-Tahun</h4>
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
                                     <h6 class="font-weight-bold text-uppercase">Tahun</h6>
                                 </th>
                                 <th scope="col">
                                     <h6 class="font-weight-bold text-uppercase">setoran</h6>
                                 </th>
                                 <th scope="col">
                                     <h6 class="font-weight-bold text-uppercase">Penarikan</h6>
                                 </th>
                                 <th scope="col">
                                     <h6 class="font-weight-bold text-uppercase">Administrasi</h6>
                                 </th>
                                 <!-- <th scope="col">
                                     <h6 class="font-weight-bold text-uppercase">Aksi</h6>
                                 </th> -->
                             </tr>
                         </thead>
                         <tbody class="text-center">
                             <tr>
                                 <?php
                                    $no = 1;
                                    foreach ($pertahun as $row) {
                                    ?>
                                     <td class="text-centers">
                                         <h6><?php echo $no++; ?></h6>
                                     </td>
                                     <td>
                                         <h6 class="text-uppercase "><?= $row['tahun']; ?></h6>
                                     </td>
                                     <td>
                                         <h6 class="text-uppercase "><?= ("Rp " . number_format($row['setoran'], 2, ',', '.')) ?></h6>
                                     </td>
                                     <td>
                                         <h6 class="text-uppercase"><?= ("Rp " . number_format($row['penarikan'], 2, ',', '.')) ?></h6>
                                     </td>
                                     <td>
                                         <h6 class="text-uppercase"><?= ("Rp " . number_format($row['admin'], 2, ',', '.')) ?></h6>
                                     </td>
                                     <!-- <td>
                                         <h5 class="text-center">
                                             <a class="btn btn-primary btn-sm font-weight-bolder" href="">Perbulan</a>
                                             <a class="btn btn-danger btn-sm font-weight-bolder" href="">PerJurusan</a>
                                         </h5>
                                     </td> -->
                             </tr>
                         <?php } ?>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>