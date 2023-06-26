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
                                <form class="theme-form" action="pages/simpandriver.php" method="post">
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Id Driver</label>
                                        <input class="form-control" name="id_driver" id="exampleInputEmail1" type="int" aria-describedby="emailHelp" placeholder="masukkan id"><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Nama</label>
                                        <input class="form-control" name="nama" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Nama "><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">NIK</label>
                                        <input class="form-control" name="nik" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="NIK"><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Tempat Lahir</label>
                                        <input class="form-control" name="tmplahir" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Tempat Lahir"><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Tanggal lahir</label>
                                        <input class="form-control" name="tgllahir" id="exampleInputEmail1" type="date" aria-describedby="emailHelp" placeholder="Tanggal Lahir"><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" id="L" type="radio" name="jkel" value="L" checked>
                                                <label class="form-check-label" for="L">Laki-Laki</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="P" type="radio" name="jkel" value="P">
                                                <label class="form-check-label" for="P">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Alamat</label>
                                        <input class="form-control" name="alamat" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Alamat"><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Usia</label>
                                        <input class="form-control" name="usia" id="exampleInputEmail1" type="number" aria-describedby="emailHelp" placeholder="Usia"><small class="form-text text-muted" id="emailHelp"></small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Email</label>
                                        <input class="form-control" name="email" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Email"><small class="form-text text-muted" id="emailHelp"></small>
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