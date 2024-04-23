<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="<?= base_url('program'); ?>">Program</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Program UKM</h4>
                        <button type="button" class="btn btn-rounded btn-outline-primary" data-toggle="modal" data-target="#basicModal">Tambah</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <?= $this->session->flashdata('message'); ?>
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th style="width: 5px;">No</th>
                                        <th>Kegiatan</th>
                                        <th>Sasaran Target</th>
                                        <th>Waktu Pelaksanaan</th>
                                        <th>Tempat</th>
                                        <th>Tim Petugas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php $no = 1;
                                        foreach ($program as $p) { ?>
                                            <td><?= $no++ ?></td>
                                            <td><?= $p['kegiatan'] ?></td>
                                            <td><?= $p['sasaran'] ?></td>
                                            <td><?= date('d - m - Y', strtotime($p['waktu'])) ?></td>
                                            <td><?= $p['tempat'] ?></td>
                                            <td><?= $p['tim'] ?></td>
                                            <td>
                                                <span>
                                                    <a href="" class="mr-4" data-target="#EditProgram<?= $p['id']; ?>" data-toggle="modal"><i class="fa fa-pencil color-muted"></i></a>
                                                    <a href="<?php echo base_url() . 'program/hapus_program/' . $p['id'] ?>" onClick='return confirm("Apakah anda yakin ingin menghapus data ini?")' data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a>
                                                </span>
                                            </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bootstrap-modal">
    <!-- Modal -->
    <div class="modal fade" id="basicModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah UKM</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="<?= base_url(); ?>program/tambah_program" method="post" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Kegiatan</label>
                                    <input type="text" name="kegiatan" class="form-control" placeholder="Masukkan Kegiatan">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Sasaran Target</label>
                                    <input type="text" name="sasaran" class="form-control" placeholder="Masukkan Sasaran Target">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Waktu Pelaksanaan</label>
                                    <input type="date" name="waktu" class="form-control" placeholder="Masukkan Waku Pelaksanaan">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Tempat</label>
                                    <input type="text" name="tempat" class="form-control" placeholder="Masukkan Tempat">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Tim Petugas</label>
                                    <input type="text" name="tim" class="form-control" placeholder="Masukkan Tim Petugas">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php foreach ($program1 as $p) { ?>
    <div class="bootstrap-modal">
        <!-- Modal -->
        <div class="modal fade" id="EditProgram<?= $p['id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit UKM</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="<?= base_url(); ?>program/edit_program" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Kegiatan</label>
                                        <input type="hidden" value="<?= $p['id'] ?>" name="id">
                                        <input type="text" name="kegiatan" class="form-control" placeholder="Masukkan Kegiatan" value="<?= $p['kegiatan'] ?>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Sasaran Target</label>
                                        <input type="text" name="sasaran" class="form-control" placeholder="Masukkan Sasaran Target" value="<?= $p['sasaran'] ?>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Waktu Pelaksanaan</label>
                                        <input type="date" name="waktu" class="form-control" placeholder="Masukkan Waku Pelaksanaan" value="<?= $p['waktu'] ?>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Tempat</label>
                                        <input type="text" name="tempat" class="form-control" placeholder="Masukkan Tempat" value="<?= $p['tempat'] ?>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Tim Petugas</label>
                                        <input type="text" name="tim" class="form-control" placeholder="Masukkan Tim Petugas" value="<?= $p['tim'] ?>">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php } ?>