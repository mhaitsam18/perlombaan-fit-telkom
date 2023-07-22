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
                    <h6 class="card-title mb-0">Kelola data lomba</h6>
                    <div class="dropdown mb-2">
                        <button class="btn p-0" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                            <a class="dropdown-item d-flex align-items-center" href="/admin/lomba/create"><i data-feather="plus" class="icon-sm me-2"></i> <span class="">Tambah</span></a>
                            <!-- <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Cetak</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Unduh</span></a> -->
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <h5>Lomba Aktif</h5>
                    <table id="dataTableExample" class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th class="pt-0">#</th>
                                <th class="pt-0">Poster</th>
                                <th class="pt-0">Judul</th>
                                <th class="pt-0">Link</th>
                                <th class="pt-0">Slug</th>
                                <th class="pt-0">Penyelenggara</th>
                                <th class="pt-0">Deadline</th>
                                <th class="pt-0">Menghitung Hari</th>
                                <th class="pt-0">Validasi</th>
                                <th class="pt-0">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $no = count($data_lomba);
                            foreach (array_reverse($data_lomba) as $row) : ?>
                                <?php if ($row['kategori_lomba_id'] == 1) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><img src="/assets/img/<?= $row['poster'] ?>" class="img-fluid"></td>
                                        <td><?= $row['Title'] ?></td>
                                        <td><?= $row['link'] ?></td>
                                        <td><?= $row['slug'] ?></td>
                                        <td><?= $row['Penyelenggara'] ?></td>
                                        <td><?= $row['Deadline'] ?></td>
                                        <td><?= $row['counting_day'] ?></td>
                                        <td><?= $row['output'] ?></td>
                                        <td>
                                            <a href="/admin/lomba/edit/<?= $row['id'] ?>" class="btn btn-sm btn-success d-inline">Ubah</a>
                                            <form action="/admin/lomba/delete/<?= $row['id'] ?>" method="POST" class="d-inline">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                <button type="submit" class="btn btn-sm btn-danger tombol-hapus">Hapus</button>
                                            </form>
                                            <form action="/admin/lomba/nonaktifkan/<?= $row['id'] ?>" method="POST" class="d-inline">
                                                <button type="submit" class="btn btn-sm btn-secondary tombol-nonaktifkan">Nonaktifkan Lomba</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive mt-5">
                    <h5>Lomba Tidak Aktif</h5>
                    <table id="dataTableNonaktifExample" class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th class="pt-0">#</th>
                                <th class="pt-0">Poster</th>
                                <th class="pt-0">Judul</th>
                                <th class="pt-0">Link</th>
                                <th class="pt-0">Slug</th>
                                <th class="pt-0">Penyelenggara</th>
                                <th class="pt-0">Deadline</th>
                                <th class="pt-0">Menghitung Hari</th>
                                <th class="pt-0">Validasi</th>
                                <th class="pt-0">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data_lomba as $row) : ?>
                                <?php if ($row['kategori_lomba_id'] == 0) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><img src="/assets/img/<?= $row['poster'] ?>" class="img-fluid"></td>
                                        <td><?= $row['Title'] ?></td>
                                        <td><?= $row['link'] ?></td>
                                        <td><?= $row['slug'] ?></td>
                                        <td><?= $row['Penyelenggara'] ?></td>
                                        <td><?= $row['Deadline'] ?></td>
                                        <td><?= $row['counting_day'] ?></td>
                                        <td><?= $row['output'] ?></td>
                                        <td>
                                            <a href="/admin/lomba/edit/<?= $row['id'] ?>" class="btn btn-sm btn-success d-inline">Ubah</a>
                                            <form action="/admin/lomba/aktifkan/<?= $row['id'] ?>" method="POST" class="d-inline">
                                                <button type="submit" class="btn btn-sm btn-info tombol-aktifkan">Aktifkan Lomba</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> <!-- row -->


<?= $this->endSection() ?>

<?= $this->section('script') ?>
<?= $this->endSection() ?>