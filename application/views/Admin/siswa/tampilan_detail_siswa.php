 <div class="row">
     <div class="col-md">
         <div class="alert alert-success" role="alert">
             <h4 class="text-center text-uppercase font-weight-bolder">Siswa <br><?= $header['tahun_ajaran'] ?></h4>
         </div>
     </div>
 </div>

 <div class="row">
     <div class="col-md">
         <div class="card">
             <div class="card-body">
                 <a class="btn btn-success btn-sm text-uppercase font-weight-bolder" href="<?= base_url() ?>Dashboard/siswa">Kembali</a>
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
                                     <h6 class="font-weight-bold text-uppercase">Nama Siswa</h6>
                                 </th>
                                 <th scope="col">
                                     <h6 class="font-weight-bold text-uppercase">Kelas</h6>
                                 </th>
                                 <th scope="col">
                                     <h6 class="font-weight-bold text-uppercase">Jurusan</h6>
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
                                         <h6 class="text-uppercase "><?= $row['id_siswa']; ?></h6>
                                     </td>
                                     <td>
                                         <h6 class="text-uppercase "><?= $row['nama_siswa']; ?></h6>
                                     </td>
                                     <td>
                                         <h6 class="text-uppercase "><?= $row['kelas']; ?></h6>
                                     </td>
                                     <td>
                                         <h6 class="text-uppercase "><?= $row['jurusan']; ?></h6>
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