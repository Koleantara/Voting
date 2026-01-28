<?php
include "header.php";
include "config.php";
?> 
 <div class="container-fluid py-4">
      <div class="row">
        
        <div class="col-12">  
          <div class="card mb-4">
            <div class="col-5 pt-4 ps-3">
          <button type="button" class="btn btn-primary" onclick="window.location.href='Tambah_Siswa.php'">Tambah Siswa</button>
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
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kelas</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jurusan</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <?php
                        $no = 1;
                        $query = mysqli_query($connection, "select * from tbl_siswa");
                        foreach ($query as $Data): {
                            
                        }
                        ?>
                      <td>
                        <div class="d-flex px-2 py-1">
                            <h6 class="mb-0 text-sm me-3 justify-content-center"><?= $no++?></h6>
                          
                        </div>
                        <td>
                          <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm"><?= $Data['Nama']?></h6>

                          </div>
                        </td>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?= $Data['Kelas']?></p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success"><?= $Data['Jurusan']?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $Data['Alamat']?></span>
                      </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>  
            </div>
          </div>
        </div>
    </div>
</div>