<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Menu Management</h1>
        <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#modalTambahMenuBaru"><i class="fas fa-plus-square fa-fw text-white-50"></i> Tambah Menu Baru</button>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Card -->
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Menu</h6>
                    <!-- Dropdown -->
                    <!-- <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div> -->
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <?php if(validation_errors()) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Data Gagal Diinput!</strong>
                            <?= validation_errors('<div>', '</div>'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <?= $this->session->flashdata('pesan'); ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">Urutan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Looping Menu -->
                                <?php $no = 1; foreach ($menu as $menu) : ?>
                                    <tr>
                                        <th scope="row"><?= $no; ?></th>
                                        <td><?= filter_output($menu['menu']); ?></td>
                                        <td><?= filter_output($menu['urutan']); ?></td>
                                        <td>
                                            <a href="<?= base_url('menu/editMenu/'.$menu['id']); ?>" class="badge badge-primary"><i class="fas fa-fw fa-edit"></i> Edit</a> | 
                                            <a href="" data-name="<?= $menu['menu']; ?>" data-href="<?= base_url('menu/deleteMenu/' . $menu['id']) ?>" data-toggle="modal" data-target="#modalKonfirmasiHapusMenu" class="badge badge-danger"><i class="fas fa-fw fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                <?php $no++; endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->