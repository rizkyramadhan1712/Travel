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
                                <form class="theme-form" action="pages/simpanlaporan.php" method="post">
                                    <div class="form-group">
                                        <label>id_laporan</label>
                                        <input type="int" name="id_laporan" class="form-control">

                                    </div>
                                    <div class="form-group">
                                        <label>id_driver</label>
                                        <select name="id_driver" id="id_driver" class="form-control">
                                            <option value="">pilih</option>
                                            <?php
                                            $driver = mysqli_query($connected, "SELECT * FROM tbdriver") or die(mysqli_error($con));
                                            while ($data_driver = mysqli_fetch_array($driver)) {
                                                echo '<option value= "' . $data_driver['id_driver'] . '">' . $data_driver['nama'] . '</option>';
                                            }
                                            ?>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>id_mobil</label>
                                        <select name="id_mobil" id="id_mobil" class="form-control">
                                            <option value="">pilih</option>
                                            <?php
                                            $driver = mysqli_query($connected, "SELECT * FROM tbtrans") or die(mysqli_error($con));
                                            while ($data_mobil = mysqli_fetch_array($driver)) {
                                                echo '<option value= "' . $data_mobil['id_mobil'] . '">' . $data_mobil['namaken'] . '</option>';
                                            }
                                            ?>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>nopol</label>
                                        <input type="text" name="nopol" maxlength="20" class="form-control">

                                    </div>
                                    <div class="form-group">
                                        <label>tgl</label>
                                        <input type="date" name="tgl" class="form-control">

                                    </div>
                                    <div class="form-group">
                                        <label>pemasukan</label>
                                        <input type="number" name="pemasukan" class="form-control">

                                    </div>
                                    <div class="form-group">
                                        <label>pengeluaran</label>
                                        <input type="number" name="pengeluaran" class="form-control">

                                    </div>
                                    <div class="form-group">
                                        <label>ket</label>
                                        <textarea name="ket" class="form-control"></textarea>

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