<div class="container-fluid">

    <div class="row">
        <div class="col-md-12">
            <a href="<?= base_url()?>konsumen/tambah" class="btn btn-primary">Tambah Konsumen</a> <br><br>
        </div>
    </div>

<h1 class="h3 mb-2 text-gray-800"><?= $judul;?></h1>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><?= $judul;?></h6>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama Konsumen</th>
                                    <th>Alamat</th>
                                    <th>Nomer Telepon</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>