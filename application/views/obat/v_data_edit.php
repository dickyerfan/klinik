<section class="konten mt-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card border-primary">
                    <div class="card-header bg-primary text-white">
                        <?= $title; ?>
                        <a href="<?= base_url('obat') ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('obat/update'); ?>" method="post">
                            <input type="hidden" name="id_obat" value="<?= $obat['id_obat']; ?>">
                            <div class="form-group">
                                <label for="">Nama obat</label>
                                <input type="text" name="nama_obat" value="<?= $obat['nama_obat']; ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm" type="submit">Update</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>