<div class="container mt-5">

<div class="row">
        <div class="col-lg-6">
            <?php flasher::flash() ?>
        </div>
    </div>

<h1 style="color:gold; text-align: center;"> Tipe Kamar</h1>
<hr>
<br>
<div class="container text-center">
  <div class="row align-items-start">

    <div class="col">
      <img src="<?= BASEURL; ?>/img/kamar1.jpg" alt="Kamar 2" 
    style="
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 200px;
    margin: 7px 7px;">
<h5 style="color: gold;">Studio Room</h5>
<p style="color: white;">Kamar dengan fasilitas ruangan yang kedap suara.</p>
    </div>

    <div class="col">
      <img src="<?= BASEURL; ?>/img/hotel1.jpg" alt="Kamar 2" 
    style="
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 200px;
    margin:  7px 7px;">
<h5 style="color: gold;">Deluxe Room</h5>
<p style="color: white;">Kamar dengan lebih banyak ruang dan fasilitas tambahan.</p>
    </div>

    <div class="col">
      <img src="<?= BASEURL; ?>/img/hotel4.jpg" alt="Kamar 2" 
    style="
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 200px;
    margin: 7px 7px;">
<h5 style="color: gold;">Double Room</h5>
<p style="color: white;">Kamar dengan dua ranjang untuk dua orang.</p>
    </div>

  </div>
</div>

<br>

<div class="row">
        <div class="col-6">
        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
        data-bs-target="#formModal" >
                 Booking Now!
        </button>
        <button type="button" class="btn btn-warning">
            <a href="<?= BASEURL;?>/booking/reservasi" style="color: black;">Check Hasil Reservasi</a>
        </button>
        <br>
        <br>

<div> 
    <br><br><br><br>
</div>

</div>

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
    </div>
  </div>
</div>

