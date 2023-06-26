<?php
 $id_mobil = $_GET['id_mobil']; 
  $qr_edit  ="SELECT * FROM tbtrans WHERE id_mobil ='$id_mobil'";
  $res_edit = mysqli_query($connected, $qr_edit);
  $data     =mysqli_fetch_array($res_edit);
?>
<!-- Page Sidebar Ends-->
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Form Tambah Data Transportasi</h3>

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
                                <form class="theme-form" action="pages/updatetrans.php" method="post">
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">ID</label>
                                        <input class="form-control" name="id_mobil" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="<?php echo $data['id_mobil']; ?>"><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Nama Kendaraan</label>
                                        <input class="form-control" name="namaken" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="<?php echo $data['namaken']; ?>"><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Jenis Kendaraan</label>
                                        <input class="form-control" name="jken" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="<?php echo $data['jken']; ?>"><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Nomor Polisi</label>
                                        <input class="form-control" name="nopol" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="<?php echo $data['nopol']; ?>"><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Kapasitas</label>
                                        <input class="form-control" name="kapasitas" id="exampleInputEmail1" type="number" aria-describedby="emailHelp" value="<?php echo $data['kapasitas']; ?>"><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Tahun Pajak</label>
                                        <input class="form-control" name="thpajak" id="exampleInputEmail1" type="date" aria-describedby="emailHelp" value="<?php echo $data['thpajak']; ?>"><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Gambar transportasi</label>
                                        <input class="form-control" name="gambar" id="exampleInputEmail1" type="file" aria-describedby="emailHelp" value="<?php echo $data['gambar']; ?>"><small class="form-text text-muted" id="emailHelp"></small>
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