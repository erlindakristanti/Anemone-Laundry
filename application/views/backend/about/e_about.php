<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- gak ada -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800"><?= $judul;?></h1>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="post" action="<?= base_url()?>about/update" enctype="multipart/form-data">
                <div class="form-group" hidden>
                    <input type="text" name="id_about" value="<?= $about['id_about'];?>" class="form-control" placeholder="Input Id About" required>
                </div>
                <div class="form-group">
                    <input type="text" name="judul_about" value="<?= $about['judul_about'];?>" class="form-control" placeholder="Input Judul About" required>
                </div>
                <div class="form-group">
                    <textarea name="deskripsi_about" class="form-control" cols="30" rows="6" placeholder="Input Deskripsi About" required> <?= $about['deskripsi_about'];?> </textarea>
                </div>
                <div class="form-group">
                    <input type="file" name="gambar_about" class="form-control" placeholder="Input Gambar About">
                    <img src="<?= base_url()?>assets/images/about/<?= $about['gambar_about'];?>" alt="" width="200">
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Update </button>
                    <a href="<?= base_url()?>about" class="btn btn-danger"> Batal</a>
                </div>
                
            </form>
            </div>
        </div>
    </div>
</body>
</html>