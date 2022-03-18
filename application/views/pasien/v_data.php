<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary no-gutters">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>
                <a href="<?= base_url('pasien/tambah') ?>" class="btn btn-success btn-sm float-right">Tambah data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-secondary table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama Pasien</th>
                                <th>J. Kelamin</th>
                                <th>Umur</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($pasien as $row) : ?>
                                <tr>
                                    <td class="text-center"><?= $no++ ?></td>
                                    <td><?= $row['nama_pasien']; ?></td>
                                    <td class="text-center"><?= $row['jenis_kelamin']; ?></td>
                                    <td class="text-center"><?= $row['umur']; ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url() . 'pasien/edit/' . $row['id_pasien']; ?>" class="btn btn-warning btn-sm">edit</a>
                                        <a href="<?= base_url() . 'pasien/hapus/' . $row['id_pasien']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau di Hapus.?');">hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>