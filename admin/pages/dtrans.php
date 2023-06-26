<!-- Page Sidebar Ends-->
<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-sm-6">
          <h3>Data Transportasi</h3>

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

            <a class="btn btn-pill btn-primary" href="?p=tambahtrans">Tambah Data</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="display" id="basic-1">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Nama Kendaraan</th>
                    <th>Jenis Kendaraan</th>
                    <th>PLat Nomer</th>
                    <th>Kapasitas</th>
                    <th>Tahun pajak</th>
                    <th>Gambar</th>
                    <th>Action</th> 
                  </tr>
                </thead>
                <tbody>
                <?php 
                $sql = "SELECT * FROM tbtrans ORDER BY id_mobil DESC LIMIT 0, 9";
                $i = 0;
                $res = mysqli_query($connected, $sql);
                while ($data = mysqli_fetch_array($res)) {
                $i++;
                ?>
                  <tr>
                  <th><?php echo $i;?></th>
                  <td><?php echo $data['namaken'];?></td>
                  <td><?php echo $data['jken'];?></td>
                  <td><?php echo $data['nopol'];?></td>
                  <td><?php echo $data['kapasitas'];?></td>
                  <td><?php echo $data['thpajak'];?></td>
                  <td><?php echo $data['gambar'];?></td>
                    
                    <td>
                      <ul class="action">
                        <li class="edit"> <a href="?p=edittrans&id_mobil=<?php echo ($data['id_mobil']) ; ?>"><i class="icon-pencil-alt"></i></a></li>
                        
                        <li><i class="icon-trash" id="del_<?php echo $i;?>"></i></li>
                      </ul>
                    </td>
                  </tr>
                  <script type="text/javascript">
            var btn_del<?php echo $i;?> = document.getElementById
            ('del_<?php echo $i;?>');
            btn_del<?php echo $i; ?>.onclick = function(){
            if(confirm('Menghapus data <?php echo $data['namaken'] ?> ?')){
            location.href='pages/hapustrans.php?id_mobil=<?php echo $data['id_mobil'];?>';
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