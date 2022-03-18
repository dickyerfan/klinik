<section class="konten mt-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card border-primary">
                    <div class="card-header bg-primary text-white">
                        <?= $title; ?>
                        <a href="<?= base_url('kunjungan') ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('kunjungan/update'); ?>" method="post">
                            <input type="hidden" name="id_berobat" value="<?= $kunjungan['id_berobat']; ?>">
                            <div class="form-group">
                                <label for="">Tanggal Berobat</label>
                                <input type="date" name="tanggal" value="<?= $kunjungan['tanggal']; ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Pasien</label>
                                <select name="pasien" id="" class="form-control" required>
                                    <?php
                                    foreach ($pasien as $row) :
                                        if ($row['id_pasien'] == $kunjungan['id_pasien']) {
                                            $aktif = "selected";
                                        } else {
                                            $aktif = "";
                                        }
                                    ?>
                                        <option value="<?= $row['id_pasien']; ?>" <?= $aktif ?>><?= $row['nama_pasien']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Dokter Tujuan</label>
                                <select name="dokter" id="" class="form-control" required>
                                    <?php
                                    foreach ($dokter as $row) :
                                        if ($row['id_dokter'] == $kunjungan['id_dokter']) {
                                            $aktif = "selected";
                                        } else {
                                            $aktif = "";
                                        }

                                    ?>
                                        <option value="<?= $row['id_dokter']; ?>" <?= $aktif ?>><?= $row['nama_dokter']; ?></option>
                                    <?php endforeach; ?>
                                </select>
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