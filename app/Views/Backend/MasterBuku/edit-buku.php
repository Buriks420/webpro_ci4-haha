<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

    <div class="row">
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <span class="glyphicon glyphicon-home"></span>
                </a>
            </li>
            <li>Master Data Buku</li>
            <li class="active">Edit Data Buku</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-body">

                    <h3>Edit Buku</h3>
                    <hr />

                    <form action="<?= base_url('admin/update-buku'); ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group col-md-6">
                            <label>Judul Buku</label>
                            <input type="text" class="form-control" name="judul_buku" placeholder="Masukkan Judul Buku" value="<?= $data_buku['judul_buku']; ?>" required="required">
                        </div>

                        <div style="clear:both;"></div>

                        <div class="form-group col-md-6">
                            <label>Pengarang</label>
                            <input type="text" class="form-control" name="pengarang" placeholder="Masukkan Nama Pengarang" value="<?= $data_buku['pengarang']; ?>" required="required">
                        </div>

                        <div style="clear:both;"></div>

                        <div class="form-group col-md-6">
                            <label>Penerbit</label>
                            <input type="text" class="form-control" name="penerbit" placeholder="Masukkan Nama Penerbit" value="<?= $data_buku['penerbit']; ?>" required="required">
                        </div>

                        <div style="clear:both;"></div>

                        <div class="form-group col-md-6">
                            <label>Tahun</label>
                            <input type="text" class="form-control" name="tahun" placeholder="Masukkan Tahun" value="<?= $data_buku['tahun']; ?>" required="required">
                        </div>

                        <div style="clear:both;"></div>

                        <div class="form-group col-md-6">
                            <label>Jumlah Eksemplar</label>
                            <input type="number" class="form-control" name="jumlah_eksemplar" placeholder="Masukkan Jumlah Eksemplar" value="<?= $data_buku['jumlah_eksemplar']; ?>" required="required">
                        </div>

                        <div style="clear:both;"></div>

                        <div class="form-group col-md-6">
                            <label>Kategori Buku</label>
                            <select class="form-control" name="kategori_buku" required="required">
                                <option value="">-- Pilih Kategori Buku --</option>

                                <?php foreach($data_kategori as $kategori){ ?>
                                    <option value="<?= $kategori['id_kategori']; ?>" <?= ($data_buku['id_kategori'] == $kategori['id_kategori']) ? 'selected' : ''; ?>>
                                        <?= $kategori['nama_kategori']; ?>
                                    </option>
                                <?php } ?>

                            </select>
                        </div>

                        <div style="clear:both;"></div>

                        <div class="form-group col-md-6">
                            <label>Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" placeholder="Masukkan Keterangan" value="<?= $data_buku['keterangan']; ?>" required="required">
                        </div>

                        <div style="clear:both;"></div>

                        <div class="form-group col-md-6">
                            <label>Rak</label>
                            <select class="form-control" name="rak" required="required">
                                <option value="">-- Pilih Rak --</option>

                                <?php foreach($data_rak as $rak){ ?>
                                    <option value="<?= $rak['id_rak']; ?>" <?= ($data_buku['id_rak'] == $rak['id_rak']) ? 'selected' : ''; ?>>
                                        <?= $rak['nama_rak']; ?>
                                    </option>
                                <?php } ?>

                            </select>
                        </div>

                        <div style="clear:both;"></div>

                        <div class="form-group col-md-6">
                            <label>Cover Buku</label><br>
                            <?php if ($data_buku['cover_buku'] != "") { ?>
                                <img src="<?= base_url('Assets/CoverBuku/'.$data_buku['cover_buku']); ?>" style="width: 250px; margin-bottom: 10px;">
                            <?php } ?>
                            <input type="file" class="form-control" name="cover_buku">
                            <small><i>Format file yang diizinkan : jpg, jpeg, png Maksimal ukuran 1 MB</i></small>
                        </div>

                        <div style="clear:both;"></div>

                        <div class="form-group col-md-6">
                            <label>E-Book</label><br>
                            <?php if ($data_buku['e_book'] != "") { ?>
                                <iframe src="<?= base_url('Assets/E-Book/'.$data_buku['e_book']); ?>" style="width: 100%; height: 300px; margin-bottom: 10px;"></iframe>
                            <?php } ?>
                            <input type="file" class="form-control" name="e_book">
                            <small><i>Format file yang diizinkan : pdf Maksimal ukuran 10 MB</i></small>
                        </div>

                        <div style="clear:both;"></div>

                        <div class="form-group col-md-6">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>

                            <a href="<?= base_url('admin/master-buku'); ?>">
                                <button type="button" class="btn btn-danger">
                                    Batal
                                </button>
                            </a>
                        </div>

                        <div style="clear:both;"></div>

                    </form>

                </div>
            </div>

        </div>
    </div><!--/.row-->

</div>
