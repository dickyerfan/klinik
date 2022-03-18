<section class="konten mt-2">
    <div class="container-fluid">
        <div class="card border-primary no-gutters">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>
                <a href="<?= base_url('kunjungan/tambah') ?>" class="btn btn-success btn-sm float-right">Tambah Kunjungan</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-secondary table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama Pasien</th>
                                <th>Umur</th>
                                <th>Dokter</th>
                                <th>Rekam Medis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($kunjungan as $row) : ?>
                                <tr>
                                    <td class="text-center"><?= $no++ ?></td>
                                    <td class="text-center"><?= $row['tanggal']; ?></td>
                                    <td><?= $row['nama_pasien']; ?></td>
                                    <td class="text-center"><?= $row['umur']; ?></td>
                                    <td><?= $row['nama_dokter']; ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url() ?>kunjungan/rekam/<?= $row['id_berobat'] ?>" class="btn btn-success btn-sm">Rekam</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?= base_url() . 'kunjungan/edit/' . $row['id_berobat']; ?>" class="btn btn-warning btn-sm">edit</a>
                                        <a href="<?= base_url() . 'kunjungan/hapus/' . $row['id_berobat']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau di Hapus.?');">hapus</a>
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