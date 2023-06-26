<?php
 $id_driver = $_GET['id_driver']; 
  $qr_edit  ="SELECT * FROM tbdriver WHERE id_driver ='$id_driver'";
  $res_edit = mysqli_query($connected, $qr_edit);
  $data     =mysqli_fetch_array($res_edit);
?>
<!-- Page Sidebar Ends-->
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Form Tambah Data Driver</h3>

                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 ">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                        
                            <div class="card-body">
                                <form class="theme-form" action="pages/updatedriver.php" method="post">
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Id driver</label>
                                        <input class="form-control" name="id_driver" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="<?php echo $data['id_driver']; ?>"><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Nama</label>
                                        <input class="form-control" name="nama" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="<?php echo $data['nama']; ?>"><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">NIK</label>
                                        <input class="form-control" name="nik" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="<?php echo $data['nik']; ?>"><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Tempat Lahir</label>
                                        <input class="form-control" name="tmplahir" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="<?php echo $data['tmplahir']; ?>"><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Tanggal lahir</label>
                                        <input class="form-control" name="tgllahir" id="exampleInputEmail1" type="date" aria-describedby="emailHelp" value="<?php echo $data['tgllahir']; ?>"><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" id="L" type="radio" name="jkel" value="L" <?php if($data['jkel']=='L') echo 'checked'?>>
                                            <label class="form-check-label" for="L">Laki-Laki</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="P" type="radio" name="jkel" value="P" <?php if($data['jkel']=='P') echo 'checked'?>>
                                            <label class="form-check-label" for="P">Perempuan</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Alamat</label>
                                        <input class="form-control" name="alamat" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="<?php echo $data['alamat']; ?>"><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Usia</label>
                                        <input class="form-control" name="usia" id="exampleInputEmail1" type="number" aria-describedby="emailHelp" value="<?php echo $data['usia']; ?>"><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Email</label>
                                        <input class="form-control" name="email" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="<?php echo $data['email']; ?>"><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="card-footer">
                                <button class="btn btn-primary">Simpan</button>
                                <button class="btn btn-secondary">Cancel</button>
                            </div>

                                </form>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>