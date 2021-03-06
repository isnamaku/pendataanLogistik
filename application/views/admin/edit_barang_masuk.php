<nav class="navbar navbar-expand-lg navbar-light mb-4" style="background-color: #000000;">
    <a class="navbar-brand ml-4" style="color: honeydew;" href="#">Logistik BPBD DIY</a>
</nav>
<div class="container">
    <a style="color: #000000; font-weight:bold;">Edit Barang Masuk</a>
    <hr>
    <?php if(isset($post)) {
         foreach($post as $post){ ?> 
    <form action="<?= base_url(); ?>admin/update_barang_masuk/<?=$post['id_transaksi_masuk']?>" method="POST">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Tanggal</label>
                    <input type="date" style="background-color: #E5E5E5" class="form-control" name="tanggal_masuk" id="tanggal_masuk" value="<?= $post['tanggal_masuk'] ?>">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Kode Barang</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="barcode" id="barcode" value="<?= $post['barcode'] ?>">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Barang</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="nama_barang" id="nama_barang" value="<?= $post['nama_barang'] ?>">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Stock</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="stock" id="stock" value="<?= $post['stock'] ?>">
                </div>
            </div>
            <div class="col-md-6">
 
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Nama Pengirim</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="sumber" id="sumber" value="<?= $post['sumber'] ?>">
                </div>
                <div class="form-group">
                    <label style="color:#000000; font-weight:bold">Perusahaan Pengirim</label>
                    <input type="text" style="background-color: #E5E5E5" class="form-control" name="sumber_2" id="sumber_2" value="<?= $post['sumber_2'] ?>">
                </div>
            </div>
        </div>
        <button type="submit" class="btn" style="background-color: #FF8C00; color:#000000; font-weight:bold; float:right;">Simpan</button>
        <a href="<?= base_url() ?>admin/barang_masuk" class="btn mr-3" style="background-color: #FF8C00; color:#000000; font-weight:bold; float:right;">Batal</a>
        <?php }
        }?>
    </form>
</div>
