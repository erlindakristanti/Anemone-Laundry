<div class="container">
    <div class="row my-5">
        <?php
        // eror
            foreach ($about as $row) {?>
                
                <div class="col-md-4">
                    <img class="set-image" src="<?= base_url()?>assets/images/about/<?= $row->gambar_about;?>">
                </div>  

                </div class="col-md-8">
                    <h5><?= $row->judul_about;?></h5>
                    <p><?= $row->deskripsi_about;?></p>
                </div>
           <?php }
        ?>   
    </div>

    <div class="row mb-5">
        <div class="col-md-12" style="padding: 10px">
            <h5>Jenis Paket</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed iure distinctio fugit provident! Quis dolores quidem totam ipsam maiores necessitatibus? Similique quae at nam voluptatibus neque nemo ipsam unde hic!</p>
       
            <table class="table table-bordered">
                <thead>
                    <tr class="th-warna">
                        <th scope="col">No</th>
                        <th scope="col">Nama Paket</th>
                        <th scope="col">Harga Paket</th>
                    </tr>
                </thead>

                <tbody>    
                <?php
                    $no = 1;
                    // eror
                    foreach ($paket as $pkt)  {?>
                        <tr>
                            <td><?= $no++;?></td>
                            <td><?= $pkt->nama_paket;?></td>
                            <td><?= "Rp. ". number_format($pkt->harga_paket,0,'.','.');?></td>
                        </tr>
                    <?php }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
