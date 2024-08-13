<div class="container mt-5">

<div class="row">
        <div class="col-lg-6">
            <?php flasher::flash() ?>
        </div>
    </div>

<h1 style="color: gold;"> Daftar Booking</h1>
<br>


<table class="table-responsive" style="border: solid 2px white; text-align:center; margin-top:20px;">
    <thead style="border: solid 2px white; text-align:center;">
        <tr>
        <th scope="col" style="color: white;">Nama</th>
        <th scope="col" style="color: white;">No.KTP</th>
        </tr>
    </thead>
    <tbody>

<tr>
    <th>
<ul class="list-group">
    <?php foreach( $data['bo'] as $bo) : ?>
<li class="list-group-item d-flex justify-content-between align-items-start">
    <?= $bo['Nama'];?>
</li>
    <?php endforeach; ?>
</ul>
    </th>


    <th>
<ul class="list-group">
    <?php foreach( $data['bo'] as $bo) : ?>
<li class="list-group-item d-flex justify-content-between align-items-start">
    <?= $bo['ktp'];?>
</li>
    <?php endforeach; ?>
</ul>
    </th>


    <th>
<ul class="list-group">
    <?php foreach( $data['bo'] as $bo) : ?>
<li class="list-group-item d-flex justify-content-between align-items-start">
    <a href="<?= BASEURL;?>/booking/detail/<?= $bo['id'];?>" class="badge text-bg-dark">Detail Pemesanan</a>
    <a href="<?= BASEURL;?>/booking/ubah/<?= $bo['id'];?>" class="badge text-bg-warning tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $bo['id']; ?>">Ubah Pemesanan</a>
    <a href="<?= BASEURL; ?>/booking/hapus/<?= $bo['id']; ?>"
    class="badge text-bg-danger float-sm-end ms-2" onclick="return confirm('Apakah anda yakin membatalkan pesanan?');">Batalkan Pemesanan</a>
</li>
    <?php endforeach; ?>
</ul>
    </th>

    </tr>
    </tbody>   
</div>


<a href="<?= BASEURL;?>/booking/index" class="badge text-bg-warning">Kembali</a><br>


<div class="modal fade" id="formModal" tabindex="-1"
aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulmodal">New Booking</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="<?= BASEURL; ?>/booking/tambah" method="post">
        <input type="hidden" name="id" id="id">
      <div class="form-group">
            <label for="Nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="Nama" name="Nama">
        </div>

        <div class="form-group">
            <label for="NIM">Nomor KTP</label>
            <input type="number" class="form-control" id="ktp" name="ktp">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="tkamar">Tipe Kamar</label>
            <select class="form-control" id="tkamar" name="tkamar">
                <option selected>Pilih Tipe Kamar Anda</option>
                <option value="Deluxe Room">Deluxe Room</option>
                <option value="Studio Room">Studio Room</option>
                <option value="Single Room">Single Room</option>
                <option value="Double Room">Double Room</option>
            </select>
        </div>

        <div class="form-group">
            <label for="tgl">Tanggal Booking</label>
            <input type="date" class="form-control" id="tgl" name="tgl">
        </div>

        


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Booking!</button>
     </form>  
    </div>