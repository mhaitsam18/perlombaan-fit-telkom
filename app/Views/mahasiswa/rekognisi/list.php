<?= $this->extend('layouts/home') ?>


<?= $this->section('style') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>


<div class="inner-banner">
    <div class="container">
        <div class="inner-title text-center">
            <div class="talk-content text-center">
                <div class="section-title text-center">
                    <!-- <span class="sp-color1">Let's Talk</span> -->
                    <h3><?= $title ?></h3>
                </div>
                <ul>
                    <li>
                        <a href="/">Beranda</a>
                    </li>
                    <li>
                        <i class='bx bx-chevrons-right'></i>
                    </li>
                    <li><?= $title ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="inner-shape">
        <img src="/assets-techex-demo/images/shape/inner-shape.png" alt="Images">
    </div>
</div>


<div class="contact-form-area pt-100 pb-70">
    <div class="container m-auto">
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif ?>
        <div class="section-title text-center">
            <h2>Rekognisi</h2>
            <div class="fs-4">Rekognisi digunakan ketika mahasiswa sudah selesai dalam mengikuti perlombaan</div>
            <div class="fs-4">Ingin menambahkan rekognisi ? masukkan prestasi kamu <a href="/mahasiswa/rekognisi" class="badge bg-primary">di sini</a></div>
        </div>
        <div class="row pt-45">
            <div class="col-lg-12">
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
                            <th class="pt-0">Prestasi</th>
                            <th class="pt-0">Status</th>
                            <th class="pt-0">Catatan (Admin)</th>
                            <th class="pt-0">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($data_rekognisi) : ?>
                            <?php $no = count($data_rekognisi); ?>
                            <?php foreach (array_reverse($data_rekognisi) as $row) : ?>
                                <tr>
                                    <th><?= $no-- ?></th>
                                    <td><?= $row->nama_lomba ?></td>
                                    <td><?= $row->nama_pembimbing ?></td>
                                    <td><?= $row->nama_ketua ?></td>
                                    <td><?= $row->nim ?></td>
                                    <td><?= $row->kelas ?></td>
                                    <td><?= $row->email ?></td>
                                    <td><?= $row->prestasi ?></td>
                                    <td><?= $row->status ?></td>
                                    <td><?= $row->note ?></td>
                                    <td>
                                        <a href="/assets/img/<?= $row->sertifikat ?>" target="_blank" class="btn btn-sm btn-success">Sertifikat</a>
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#anggotaModal<?= $row->id ?>">
                                            Anggota
                                        </button>
                                        <form action="/mahasiswa/rekognisi/delete/<?= $row->id ?>" method="POST" class="d-inline">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="id" value="<?= $row->id ?>">
                                            <button type="submit" class="btn btn-sm btn-danger tombol-hapus">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <!-- Tampilkan pesan jika tidak ada data -->
                            <tr>
                                <td colspan="9" class="text-center">Tidak Ada data</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- <div class="map-area">
    <div class="container-fluid m-0 p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50194.82376159623!2d-79.09792989247224!3d38.159337740034566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b4a08eb8621697%3A0xe5d6e4710a09b66e!2sStaunton%2C%20VA%2024401%2C%20USA!5e0!3m2!1sen!2sbd!4v1607173226867!5m2!1sen!2sbd"></iframe>
    </div>
</div> -->
<!-- Button trigger modal -->
<?php foreach ($data_rekognisi as $row) : ?>
    <!-- Modal -->
    <div class="modal fade" id="anggotaModal<?= $row->id ?>" tabindex="-1" aria-labelledby="anggotaModalLabel<?= $row->id ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="anggotaModalLabel<?= $row->id ?>">Anggota Kelompok</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php $rekognisi_lomba = $rekognisi_mahasiswa->where('rekognisi_id', $row->id)->get(); ?>

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
                                <td><?= $row->nama_ketua ?></td>
                                <td><?= $row->nim ?></td>
                                <td><?= $row->kelas ?></td>
                                <td>Ketua</td>
                            </tr>

                            <?php $no = 2; ?>


                            <?php foreach ($rekognisi_lomba->getResult() as $anggota) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $anggota->nama_mahasiswa ?></td>
                                    <td><?= $anggota->nim ?></td>
                                    <td><?= $anggota->kelas ?></td>
                                    <td>Anggota</td>
                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="5">
                                    <label for="">Tambahkan Anggota</label>
                                    <form action="/mahasiswa/rekognisi/anggota" method="post">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="rekognisi_id" value="<?= $row->id ?>">
                                        <div class="input-group">
                                            <input type="text" name="nama_mahasiswa" aria-label="Nama Lengkap" class="form-control" placeholder="Nama Lengkap">
                                            <input type="text" name="nim" aria-label="NIM" class="form-control" placeholder="NIM">
                                            <input type="text" name="kelas" aria-label="Kelas" class="form-control" placeholder="Kelas">
                                            <button class="btn btn-outline-primary" type="submit" id="button-addon2">Tambah</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
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
<script>
    const csrfToken = document.querySelector('[name="csrf-token"]').getAttribute('content');
    FilePond.create(
        document.querySelector('.filepond')
    );
    FilePond.setOptions({
        server: {
            process: '/tmp-upload',
            revert: '/tmp-delete',
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
        },
        labelIdle: 'Seret & Lepaskan file Anda atau <span class="filepond--label-action"> Jelajahi </span>'
    });
</script>
<?= $this->endSection() ?>