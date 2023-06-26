<!-- Page Sidebar Ends-->
<div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Data Driver</h3>
                  
                </div>
                
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <!-- Zero Configuration  Starts-->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                  <a class="btn btn-pill btn-primary" href="?p=tambahdriver">Tambah Data</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="basic-1">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>NIK</th>
                          <th>Tempat lahir</th>
                          <th>Tanggal lahir</th>
                          <th>Jenis Kelamin</th>
                          <th>Alamat</th>                          
                          <th>Usia</th>
                          <th>email</th>                          
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                <?php 
                $sql = "SELECT * FROM tbdriver ORDER BY id_driver DESC LIMIT 0, 9";
                $i = 0;
                $res = mysqli_query($connected, $sql);
                while ($data = mysqli_fetch_array($res)) {
                $i++;
                ?>
                  <tr>
                  <th><?php echo $i;?></th>
                  <td><?php echo $data['nama'];?></td>
                  <td><?php echo $data['nik'];?></td>
                  <td><?php echo $data['tmplahir'];?></td>
                  <td><?php echo $data['tgllahir'];?></td>
                  <td><?php echo $data['jkel'];?></td>
                  <td><?php echo $data['alamat'];?></td>
                  <td><?php echo $data['usia'];?></td>
                  <td><?php echo $data['email'];?></td>
                    
                    <td>
                      <ul class="action">
                        <li class="edit"> <a href="?p=editdriver&id_driver=<?php echo ($data['id_driver']) ; ?>"><i class="icon-pencil-alt"></i></a></li>
                        
                        <li><i class="icon-trash" id="del_<?php echo $i;?>"></i></li>
                      </ul>
                    </td>
                  </tr>
                  <script type="text/javascript">
            var btn_del<?php echo $i;?> = document.getElementById
            ('del_<?php echo $i;?>');
            btn_del<?php echo $i; ?>.onclick = function(){
            if(confirm('Menghapus data <?php echo $data['nama'] ?> ?')){
            location.href='pages/hapusdriver.php?id_driver=<?php echo $data['id_driver'];?>';
                }
             }
    </script>
                  

                  <?php
                  }
                  ?>
                </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Zero Configuration  Ends-->
              
              <div class="col-sm-12">
                
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>