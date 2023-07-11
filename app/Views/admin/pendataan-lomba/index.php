<?= $this->extend('layouts/admin') ?>


<?= $this->section('style') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0"><?= $title ?></h4>
    </div>
    <div class="d-flex align-items-center flex-wrap text-nowrap">

    </div>
</div>

<?php if (session()->getFlashdata('success')) : ?>
    <div class="alert alert-success">
        <p><?= session()->getFlashdata('success') ?></p>
    </div>
<?php endif; ?>


<div class="row">
    <div class="col-lg-12 col-xl-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">Kelola data lomba Mahasiswa</h6>
                    <div class="dropdown mb-2">
                        <button class="btn p-0" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                            <a class="dropdown-item d-flex align-items-center" href="/admin/pendataan-lomba/create"><i data-feather="plus" class="icon-sm me-2"></i> <span class="">Tambah</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="/admin/pendataan-lomba/print"><i data-feather="print" class="icon-sm me-2"></i> <span class="">Print</span></a>
                            <!-- <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Cetak</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Unduh</span></a> -->
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="dataTableExample" class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th class="pt-0">#</th>
                                <th class="pt-0">Nama Lomba</th>
                                <th class="pt-0">Nama Pembimbing</th>
                                <th class="pt-0">Nama Ketua</th>
                                <th class="pt-0">NIM</th>
                                <th class="pt-0">Kelas</th>
                                <th class="pt-0">Email</th>
                                <th class="pt-0">Bukti</th>
                                <th class="pt-0">Status</th>
                                <th class="pt-0">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $no = 1; ?>
                            <?php foreach ($data_pendataan_lomba as $row) : ?>
                                <tr>
                                    <th><?= $no++ ?></th>
                                    <td><?= $row['nama_lomba'] ?></td>
                                    <td><?= $row['nama_pembimbing'] ?></td>
                                    <td><?= $row['nama_ketua'] ?></td>
                                    <td><?= $row['nim'] ?></td>
                                    <td><?= $row['kelas'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td><a href="/assets/img/<?= $row['sertifikat'] ?>" target="_blank" class="btn btn-sm btn-success">Bukti</a></td>
                                    <td><?= $row['status'] ?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#anggotaModal<?= $row['id'] ?>">
                                            Detail Anggota
                                        </button>
                                    </td>
                                    <td>
                                        <form action="/admin/pendataanlomba/delete/<?= $row['id'] ?>" method="POST" class="d-inline">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                            <button type="submit" class="btn btn-sm btn-danger tombol-hapus">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> <!-- row -->
<!-- Button trigger modal -->
<?php foreach ($data_pendataan_lomba as $row) : ?>
    <!-- Modal -->
    <div class="modal fade" id="anggotaModal<?= $row['id'] ?>" tabindex="-1" aria-labelledby="anggotaModalLabel<?= $row['id'] ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="anggotaModalLabel<?= $row['id'] ?>">Anggota Kelompok</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php $anggota_pendataan_lomba = $pendataan_lomba_mahasiswa->where('pendataan_lomba_id', $row['id'])->get(); ?>

                    <table id="dataTableExample" class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th class="pt-0">#</th>
                                <th class="pt-0">Nama Mahasiswa</th>
                                <th class="pt-0">NIM</th>
                                <th class="pt-0">Kelas</th>
                                <th class="pt-0">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><?= $row['nama_ketua'] ?></td>
                                <td><?= $row['nim'] ?></td>
                                <td><?= $row['kelas'] ?></td>
                                <td>Ketua</td>
                            </tr>

                            <?php $no = 2; ?>


                            <?php foreach ($anggota_pendataan_lomba->getResult() as $anggota) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $anggota->nama_mahasiswa ?></td>
                                    <td><?= $anggota->nim ?></td>
                                    <td><?= $anggota->kelas ?></td>
                                    <td>Anggota</td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<?= $this->endSection() ?>