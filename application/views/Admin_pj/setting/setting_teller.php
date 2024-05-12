 <div class="row">
     <div class="col-md">
         <div class="alert alert-success" role="alert">
             <h4 class="text-center text-uppercase font-weight-bolder">Setting teller</h4>
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
                                     <h6 class="font-weight-bold text-uppercase">Username</h6>
                                 </th>
                                 <th scope="col">
                                     <h6 class="font-weight-bold text-uppercase">Password</h6>
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
                                    foreach ($teller as $row) {
                                    ?>
                                     <td class="text-centers">
                                         <h6><?php echo $no++; ?></h6>
                                     </td>
                                     <td>
                                         <h6 class="text-uppercase text-center"><?php echo $row['id']; ?></h6>
                                     </td>
                                     <td>
                                         <h6 class=""><?php echo $row['username']; ?></h6>
                                     </td>
                                     <td>
                                         <h6 class=""><?php echo $row['show_pass']; ?></h6>
                                     </td>
                                     <td>
                                         <h6 class="text-uppercase text-center">
                                             <form action="<?= base_url() ?>Dashboard_pj/generate_password_teller" method="post">

                                                 <input type="text" class="form-control" value="<?php echo $row['id']; ?>" name="id" hidden>
                                                 <input type="text" class="form-control" value="<?php echo $row['username']; ?>" name="username" hidden>
                                                 <input type="text" class="form-control" value="" name="password" hidden>
                                                 <input type="text" class="form-control" value="" name="show_pass" hidden>
                                                 <input type="text" class="form-control" value="<?php echo $row['level']; ?>" name="level" hidden>
                                                 <button type="submit" class="btn btn-danger btn-sm">Submit</button>
                                             </form>
                                         </h6>
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