<?php
$id_laporan = $_GET['id_laporan'];
$qr_edit  = "SELECT * FROM laporan WHERE id_laporan ='$id_laporan'";
$res_edit = mysqli_query($connected, $qr_edit);
$data     = mysqli_fetch_array($res_edit);
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
                                <form class="theme-form" action="pages/updatelaporan.php" method="post">
                                    <div class="form-group">
                                        <label>id_laporan</label>
                                        <input type="int" name="id_laporan" value="<?php echo $data['id_laporan']; ?>" class="form-control">

                                    </div>
                                    <div class="form-group">
                                        <label>id_driver</label>
                                        <select name="id_driver" id="id_driver" class="form-control">
                                            <option value="">pilih</option>
                                            <?php
                                            $driver = mysqli_query($connected, "SELECT * FROM tbdriver") or die(mysqli_error($con));
                                            while ($data_driver = mysqli_fetch_array($driver)) {
                                                $selected = ($data['id_driver'] == $data_driver['id_driver']) ? "selected" : "";
                                                echo '<option value="' . $data_driver['id_driver'] . '" ' . $selected . '>' . $data_driver['nama'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>id_mobil</label>
                                        <select name="id_mobil" id="id_mobil" class="form-control">
                                            <option value="">pilih</option>
                                            <?php
                                            $mobil = mysqli_query($connected, "SELECT * FROM tbtrans") or die(mysqli_error($con));
                                            while ($data_mobil = mysqli_fetch_array($mobil)) {
                                                $selected = ($data['id_mobil'] == $data_mobil['id_mobil']) ? "selected" : "";
                                                echo '<option value="' . $data_mobil['id_mobil'] . '" ' . $selected . '>' . $data_mobil['namaken'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>nopol</label>
                                        <input type="text" name="nopol" value="<?php echo $data['nopol']; ?>" maxlength="20" class="form-control">

                                    </div>
                                    <div class="form-group">
                                        <label>tgl</label>
                                        <input type="date" name="tgl" value="<?php echo $data['tgl']; ?>" class="form-control">

                                    </div>
                                    <div class="form-group">
                                        <label>pemasukan</label>
                                        <input type="number" name="pemasukan" value="<?php echo $data['pemasukan']; ?>" class="form-control">

                                    </div>
                                    <div class="form-group">
                                        <label>pengeluaran</label>
                                        <input type="number" name="pengeluaran" value="<?php echo $data['pengeluaran']; ?>" class="form-control">

                                    </div>
                                    <div class="form-group">
                                        <label>ket</label>
                                        <input name="ket" value="<?php echo $data['ket']; ?>" class="form-control"></input>

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