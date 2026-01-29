<?php
include "header.php";
include "config.php";
?> 
 <div class="container-fluid py-4">
      <div class="row">
        
        <div class="col-12">  
          <div class="card mb-4">
            <div class="col-5 pt-4 ps-3">
          <button type="button" class="btn btn-primary" onclick="window.location.href='Tambah_admin.php'">Tambah Siswa</button>
        </div>
            <div class="card-header pb-0">
              <h6>Authors table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Password</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <?php
                        $no = 1;
                        $query = mysqli_query($connection, "select * from tbl_admin");
                        foreach ($query as $Data): {
                            
                        }
                        ?>
                      <td class="align-middle text-center">
                        <div class="d-flex px-2 py-1">
                            <h6 class="ps-3 mb-0 text-sm justify-content-center align-middle text-center"><?= $no++?></h6>
                            </div>
                      </td>
                        
                        <td class="align-middle ">
                          <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm ps-3"><?= $Data['Username']?></h6>
                          </div>
                        </td>
                      </td>
                      <td class="align-middle">
                        <p class="text-xs font-weight-bold mb-0 ps-3"><?= $Data['Password']?></p>
                      </td>
                      <td class="align-middle text-sm">
                        <span class="badge badge-sm bg-gradient-success pe-3 ps-3  "><?= $Data['Nama']?></span>
                      </td>
                      <td class="align-middle ">
                        <span class="text-secondary text-xs font-weight-bold ps-3"><?= $Data['Alamat']?></span>
                      </td>
                      <td class= align-middle>
                          <Button type="button" class="btn btn-warning"><a href="edit_admin.php ?id=<?=$Data['ID'];?>"
                          class = "text-secondary font-weight bold-text-xs text-white"
                          data-toggle= "tooltip"
                          data-original-title = "Edit Siswa">
                          Edit</a></Button>
                        </td>
                          <td class= align-middle>
                          <Button type= "button" class = "btn btn-danger"><a href="delete_admin.php ?id=<?=$Data['ID'];?>"
                          class = "text-secondary font-weight bold-text-xs text-white"
                          data-toggle= "tooltip"
                          data-original-title = "Edit Siswa">
                          Delete</a></Button>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>  
            </div>
          </div>
        </div>
    </div>
</div>