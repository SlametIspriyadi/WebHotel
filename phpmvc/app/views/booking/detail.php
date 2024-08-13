<div class="container mt-5">

<div class="card" style="width: 20rem;">
  <div class="card-body">
    <h2 style="font-weight: bold;"> Detail Pemesanan </h2>
    <hr>
    <h5 class="card-title" style="font-weight: bold;"><?= $data['bo']['Nama'];?></h5>
    <p class="card-subtitle mb-2 text-body-secondary"> NIK : <?= $data['bo']['ktp'];?></p>
    <p class="card-text">Email : <?= $data['bo']['email'];?></p>
    <p class="card-text">Tipe Kamar : <?= $data['bo']['tkamar'];?></p>
    <p class="card-text"> Tanggal reservasi : <?= $data['bo']['tgl'];?></p>
    <a href="<?= BASEURL;?>/booking/reservasi" class="badge text-bg-dark">kembali</a>
    
  </div>
</div>


</div>