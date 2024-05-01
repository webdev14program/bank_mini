 <div class="row">
     <div class="col-md">
         <div class="alert alert-success" role="alert">
             <h4 class="text-center text-uppercase font-weight-bolder">Transaksi <br><?= $header['nama_siswa'] ?></h4>
         </div>
     </div>
 </div>

 <div class="row">
     <div class="col-md mt-2">
         <div class="alert alert-primary" role="alert">
             <h6>Rp 0</h6>
         </div>
     </div>
     <div class="col-md mt-2">
         <div class="alert alert-success" role="alert">
             <h6>Rp 0</h6>
         </div>
     </div>
     <div class="col-md mt-2">
         <div class="alert alert-danger" role="alert">
             <h6>Rp 0</h6>
         </div>
     </div>
 </div>
 <div class="row">
     <div class="col-md mt-2">
         <div class="card">
             <div class="card-body">
                 <button type="button" class="btn btn-primary btn-primary btn-sm text-uppercase font-weight-bolder" data-toggle="modal" data-target="#exampleModal">
                     tambah transaksi
                 </button>
             </div>
         </div>
     </div>
 </div>
 <div class="row">
     <div class="col-md mt-3">
         <div class="card">
             <div class="card-header">
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
             <div class="card-footer text-muted">
                 <a href=""></a>
             </div>
         </div>
     </div>
     <div class="col-md mt-3">
         <div class="card">
             <div class="card-header">
                 <h5 class="text-center">Transaksi</h5>
             </div>
             <div class="card-body">
                 <table class="table table-bordered">
                     <thead class="text-center">
                         <tr class="">
                             <th scope="col">
                                 <h6 class="font-weight-bold">#</h6>
                             </th>
                             <th scope="col">
                                 <h6 class="font-weight-bold text-uppercase">Transaksi</h6>
                             </th>
                             <th scope="col">
                                 <h6 class="font-weight-bold text-uppercase">Waktu Transaksi</h6>
                             </th>
                         </tr>
                     </thead>
                     <tbody>

                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </div>

 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title text-uppercase font-weight-bolder" id="exampleModalLabel">Tambah Transaksi</h5>

             </div>
             <div class="modal-body">
                 <form>
                     <div class="form-group">
                         <label>NIS</label>
                         <input type="text" class="form-control">

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