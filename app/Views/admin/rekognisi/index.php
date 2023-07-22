<?= $this->extend('layouts/admin') ?>

<?= $this->section('style') ?>
<style>
    .card {
        height: 100%;
    }
</style>
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
                    <h6 class="card-title mb-0">Kelola data Rekognisi Nilai Seluruh data </h6>
                    <div class="dropdown mb-2">
                        <button class="btn p-0" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                            <a class="dropdown-item d-flex align-items-center" href="/admin/rekognisi-nilai/create"><i data-feather="plus" class="icon-sm me-2"></i> <span class="">Tambah</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="/admin/rekognisi-nilai/print"><i data-feather="print" class="icon-sm me-2"></i> <span class="">Print</span></a>
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
                                <th class="pt-0">Nilai</th>
                                <th class="pt-0">Catatan</th>
                                <th class="pt-0">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = count($data_rekognisi);
                            foreach (array_reverse($data_rekognisi) as $row) {
                            ?>
                                <tr>
                                    <th><?= $no-- ?></th>
                                    <td><?= $row['nama_lomba'] ?></td>
                                    <td><?= $row['nama_pembimbing'] ?></td>
                                    <td><?= $row['nama_ketua'] ?></td>
                                    <td><?= $row['nim'] ?></td>
                                    <td><?= $row['kelas'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td><a href="/assets/img/<?= $row['sertifikat'] ?>" target="_blank" class="btn btn-sm btn-success">Sertifikat</a></td>
                                    <td><?= $row['status'] ?></td>
                                    <td><?= $row['note'] ?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#anggotaModal<?= $row['id'] ?>">
                                            Detail Anggota
                                        </button>
                                        <button type="button" class="btn btn-primary btn-sm updateStatus" data-bs-toggle="modal" data-bs-target="#updateStatusModal" data-id="<?= $row['id'] ?>" data-status="<?= $row['status'] ?>">
                                            Perbarui Status
                                        </button>
                                    <td>
                                        <form action="/admin/rekognisi/delete/<?= $row['id'] ?>" method="POST" class="d-inline">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                            <button type="submit" class="btn btn-sm btn-danger tombol-hapus">Hapus</button>
                                        </form>
                                    </td>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">Kelola data Rekognisi - Diterima</h6>
                    <div class="dropdown mb-2">
                        <button class="btn p-0" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                            <a class="dropdown-item d-flex align-items-center" href="/admin/rekognisi/create"><i data-feather="plus" class="icon-sm me-2"></i> <span class="">Tambah</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="/admin/rekognisi/print"><i data-feather="print" class="icon-sm me-2"></i> <span class="">Print</span></a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="pt-0">#</th>
                                <th class="pt-0">Nama Lomba</th>
                                <th class="pt-0">Nama Pembimbing</th>
                                <th class="pt-0">Nama Ketua</th>
                                <th class="pt-0">Status</th>
                                <th class="pt-0">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_rekognisi as $row) : ?>
                                <?php if ($row['status'] === 'diterima') : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row['nama_lomba'] ?></td>
                                        <td><?= $row['nama_pembimbing'] ?></td>
                                        <td><?= $row['nama_ketua'] ?></td>
                                        <td><?= $row['status'] ?></td>
                                        <!-- <td>
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#anggotaModal<?= $row['id'] ?>">
                                                Detail Anggota
                                            </button>
                                            <button type="button" class="btn btn-primary btn-sm updateStatus" data-bs-toggle="modal" data-bs-target="#updateStatusModal" data-id="<?= $row['id'] ?>" data-status="<?= $row['status'] ?>">
                                                Perbarui Status
                                            </button>
                                            <form action="/admin/rekognisi/delete/<?= $row['id'] ?>" method="POST" class="d-inline">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                <button type="submit" class="btn btn-sm btn-danger tombol-hapus">Hapus</button>
                                            </form>
                                        </td> -->
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">Kelola data Rekognisi - Ditolak</h6>
                    <div class="dropdown mb-2">
                        <button class="btn p-0" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                            <a class="dropdown-item d-flex align-items-center" href="/admin/rekognisi/create"><i data-feather="plus" class="icon-sm me-2"></i> <span class="">Tambah</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="/admin/rekognisi/print"><i data-feather="print" class="icon-sm me-2"></i> <span class="">Print</span></a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="pt-0">#</th>
                                <th class="pt-0">Nama Lomba</th>
                                <th class="pt-0">Nama Pembimbing</th>
                                <th class="pt-0">Nama Ketua</th>
                                <th class="pt-0">Status</th>
                                <th class="pt-0">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_rekognisi as $row) : ?>
                                <?php if ($row['status'] === 'ditolak') : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row['nama_lomba'] ?></td>
                                        <td><?= $row['nama_pembimbing'] ?></td>
                                        <td><?= $row['nama_ketua'] ?></td>
                                        <td><?= $row['status'] ?></td>
                                        <!-- <td>
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#anggotaModal<?= $row['id'] ?>">
                                                Detail Anggota
                                            </button>
                                            <button type="button" class="btn btn-primary btn-sm updateStatus" data-bs-toggle="modal" data-bs-target="#updateStatusModal" data-id="<?= $row['id'] ?>" data-status="<?= $row['status'] ?>">
                                                Perbarui Status
                                            </button>
                                            <form action="/admin/rekognisi/delete/<?= $row['id'] ?>" method="POST" class="d-inline">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                <button type="submit" class="btn btn-sm btn-danger tombol-hapus">Hapus</button>
                                            </form>
                                        </td> -->
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">Kelola data Rekognisi - Dalam Proses</h6>
                    <div class="dropdown mb-2">
                        <button class="btn p-0" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                            <a class="dropdown-item d-flex align-items-center" href="/admin/rekognisi/create"><i data-feather="plus" class="icon-sm me-2"></i> <span class="">Tambah</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="/admin/rekognisi/print"><i data-feather="print" class="icon-sm me-2"></i> <span class="">Print</span></a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="pt-0">#</th>
                                <th class="pt-0">Nama Lomba</th>
                                <th class="pt-0">Nama Pembimbing</th>
                                <th class="pt-0">Nama Ketua</th>
                                <th class="pt-0">Status</th>
                                <th class="pt-0">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_rekognisi as $row) : ?>
                                <?php if ($row['status'] === 'dalam proses') : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row['nama_lomba'] ?></td>
                                        <td><?= $row['nama_pembimbing'] ?></td>
                                        <td><?= $row['nama_ketua'] ?></td>
                                        <td><?= $row['status'] ?></td>
                                        <!-- <td>
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#anggotaModal<?= $row['id'] ?>">
                                                Detail Anggota
                                            </button>
                                            <button type="button" class="btn btn-primary btn-sm updateStatus" data-bs-toggle="modal" data-bs-target="#updateStatusModal" data-id="<?= $row['id'] ?>" data-status="<?= $row['status'] ?>">
                                                Perbarui Status
                                            </button>
                                            <form action="/admin/rekognisi/delete/<?= $row['id'] ?>" method="POST" class="d-inline">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                <button type="submit" class="btn btn-sm btn-danger tombol-hapus">Hapus</button>
                                            </form>
                                        </td> -->
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<?php foreach ($data_rekognisi as $row) : ?>
    <div class="modal fade" id="anggotaModal<?= $row['id'] ?>" tabindex="-1" aria-labelledby="anggotaModalLabel<?= $row['id'] ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="anggotaModalLabel<?= $row['id'] ?>">Anggota Kelompok</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php $anggota_rekognisi = $rekognisi_mahasiswa->where('rekognisi_id', $row['id'])->get(); ?>

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
                            <?php foreach ($anggota_rekognisi->getResult() as $anggota) : ?>
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

<!-- Modal -->
<div class="modal fade" id="updateStatusModal" tabindex="-1" aria-labelledby="updateStatusModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updateStatusModalLabel">Perbarui Status</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/admin/rekognisi/update-status" method="post">
                <?= csrf_field() ?>
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="status" class="form-label">Status<span class="text-danger">*</span></label>
                        <select name="status" id="status" class="form-select <?= ($validation->hasError('status')) ? 'is-invalid' : '' ?> <?= ($validation->hasError('status')) ? 'is-invalid' : '' ?>" data-error="Masukkan status" placeholder="Pilih Status">
                            <option selected disabled value="">Pilih Status</option>
                            <option value="diterima">diterima</option>
                            <option value="ditolak">ditolak</option>
                            <option value="dalam proses">dalam proses</option>
                        </select>
                        <small id="status_feedback" class="text-danger fs-6">
                            <?= $validation->getError('status') ?>
                        </small>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="mb-3">
                        <label for="note" class="form-label">Catatan<span class="text-danger">*</span></label>
                        <textarea name="note" id="note" class="form-control <?= ($validation->hasError('note')) ? 'is-invalid' : '' ?> <?= ($validation->hasError('note')) ? 'is-invalid' : '' ?>" data-error="Masukkan note" placeholder="Masukkan Note"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    $(document).on("click", ".updateStatus", function() {
        var id = $(this).data('id');
        $(".modal-body  #id").val(id);

        var status = $(this).data('status');
        $(".modal-body  #status").val(status);
    });
</script>
<?= $this->endSection() ?>