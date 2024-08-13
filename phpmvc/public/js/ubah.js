$(function() {

  $('.tampilModalUbah').on('click', function(){

    $('#judulmodal').html('Ubah Data Pemesanan');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/booking/ubah');


    const id = $(this).data('id');
    console.log(id);
    
    $.ajax({
        url : 'http://localhost/phpmvc/public/booking/getUbah',
        data : {id : id},
        method : 'post',
        dataType : 'json',
        success : function(data){
            $('#Nama').val(data.Nama);
            $('#ktp').val(data.ktp);
            $('#email').val(data.email);
            $('#tkamar').val(data.tkamar);
            $('#tgl').val(data.tgl);
            $('#id').val(data.id);
        }
    });
    
  });
});