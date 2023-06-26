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
                                <form class="theme-form" action="pages/simpantrans.php" method="post">
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">ID</label>
                                        <input class="form-control" name="id_mobil" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="masukkan ID transportasi"><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Nama Kendaraan</label>
                                        <input class="form-control" name="namaken" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Nama kendaraan"><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Jenis Kendaraan</label>
                                        <input class="form-control" name="jken" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Jenis Kendaraan"><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Nomor Polisi</label>
                                        <input class="form-control" name="nopol" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Nomor Polisi"><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Kapasitas</label>
                                        <input class="form-control" name="kapasitas" id="exampleInputEmail1" type="number" aria-describedby="emailHelp" placeholder="Kapasitas"><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Tahun Pajak</label>
                                        <input class="form-control" name="thpajak" id="exampleInputEmail1" type="date" aria-describedby="emailHelp" placeholder="Tahun Pajak"><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Gambar transportasi</label>
                                        <input class="form-control" name="gambar" id="exampleInputEmail1" type="file" aria-describedby="emailHelp" placeholder="Gambar transportasi"><small class="form-text text-muted" id="emailHelp"></small>
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