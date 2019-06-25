<?php
include 'header.php'
?>



<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Transaksi Penjualan</li>
    </ol>
</nav>

<div class="card">
    <div class="card-body">
        <?php date_default_timezone_set("Asia/Bangkok"); ?>
        <form action="#" method="POST">
            <div class="card" style="margin-bottom: 1em;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="date" class="form-control" placeholder="Tangggal Transaksi" name="tgl" value="<?php echo date('Y-m-d') ?>">
                            </div>
                        </div>
                        <div class="col-md-4 ml-auto">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nama" name="nama">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Alamat" name="alamat">
                            </div>
                        </div>
                        <div class="col-md-4 ml-auto">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="No. Telepon" name="tlp">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Keterangan" name="ket" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-auto">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">+</button>
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control" placeholder="Kode Barang" name="kode" id="kode">
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" placeholder="Nama Barang" name="nama" id="nama">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control" placeholder="Satuan Barang" name="satuan" id="satuan">
                </div>
                <div class="col-auto">
                    <input type="number" class="form-control" placeholder="Harga Barang" name="harga" id="harga">
                </div>
                <div class="col-md-1">
                    <input type="number" class="form-control" placeholder="Jumlah Barang" name="jml" id="jml">
                </div>
                <div class="col-auto">
                    <input type="submit" class="btn btn-success" value="Add">
                </div>
            </div>
            <div class="col-md-3 ml-auto" style="margin-top: 1em;">
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="Total" name="total">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="PPN" name="ppn">   
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="Diskon" name="diskon">   
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="Grand Total" name="gtot">   
                </div>
            </div>
        </form>
    </div>
</div>

<!-- modal -->

<div class="modal fade bd-example-modal-xl" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-hover" id="mytable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Satuan Barang</th>
                            <th>Harga Barang</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM barang";
                        $row = mysqli_query($conn, $query);
                        ?>

                        <?php
                        $no = 1;
                        $rec = 1;
                        while ($data = mysqli_fetch_assoc($row)) {
                            ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td id=ko<?php echo $rec ?>><?php echo $data["kode_barang"]; ?></td>
                                <td id=na<?php echo $rec ?>><?php echo $data["nama_barang"]; ?></td>
                                <td id=sa<?php echo $rec ?>><?php echo $data["satuan"]; ?></td>
                                <td id=ha<?php echo $rec ?>><?php echo $data["harga_jual"]; ?></td>
                                <td>
                                    <button type="button" data-dismiss="modal" class="btn btn-success" onclick="addrecord(<?php echo $rec ?>)">Add</button>
                                </td>
                            </tr>
                            <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="barang-store.php"><button type="button" class="btn btn-primary">+ Tambah Barang</button></a>
            </div>
        </div>
    </div>
</div>



<?php
include 'footer.php'
?>