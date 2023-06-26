<!-- Page Sidebar Ends-->
<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-sm-6">
          <h3>Data Laporan</h3>

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
          <a class="btn btn-pill btn-primary" href="?p=tambahlaporan">Tambah Data</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="display" id="basic-1">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Nama driver</th>
                    <th>Nama mobil</th>
                    <th>Tanggal</th>
                    <th>Pemasukan</th>
                    <th>Pengeluaran</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  $sql = "SELECT * FROM laporan 
                INNER JOIN tbdriver ON laporan.id_driver = tbdriver.id_driver
                INNER JOIN tbtrans ON laporan.id_mobil = tbtrans.id_mobil";
                  $res = mysqli_query($connected, $sql);
                  while ($data = mysqli_fetch_array($res)) {
                  ?>
                    <tr>
                      <th><?php echo $i++; ?></th>
                      <td><?php echo $data['nama']; ?></td>
                      <td><?php echo $data['namaken']; ?></td>
                      <td><?php echo $data['tgl']; ?></td>
                      <td><?php echo $data['pengeluaran']; ?></td>
                      <td><?php echo $data['pemasukan']; ?></td>
                      <td><?php echo $data['ket']; ?></td>


                      <td>
                        <ul class="action">
                          <li class="edit"> <a href="?p=editlaporan&id_laporan=<?php echo ($data['id_laporan']); ?>"><i class="icon-pencil-alt"></i></a></li>

                          <li><i class="icon-trash" id="del_<?php echo $i; ?>"></i></li>
                        </ul>
                      </td>
                    </tr>
                    <script type="text/javascript">
                      var btn_del<?php echo $i; ?> = document.getElementById('del_<?php echo $i; ?>');
                      btn_del<?php echo $i; ?>.onclick = function() {
                        if (confirm('Menghapus data <?php echo $data['tgl'] ?> ?')) {
                          location.href = 'pages/hapuslaporan.php?id_laporan=<?php echo $data['id_laporan']; ?>';
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