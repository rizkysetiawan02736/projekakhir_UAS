$(function(){

    $('.tombolTambahKoleksi').on('click', function(){
    
        $('#formModalLabel').html('Tambah Koleksi Buku');
        $('.modal-footer button[type=submit]').html('Tambah Koleksi');
    });

$('.tampilModalUbah').on('click', function(){
    
    $('#formModalLabel').html('Ubah Koleksi Buku');
    $('.modal-footer button[type=submit]').html('Ubah Koleksi');
    $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/koleksi/ubah');
    const id = $(this).data('id');

    $('.tombolTambahKoleksi').on('click', function() {
        $('#formModalLabel').html('Tambah Koleksi Buku');
        $('.modal-footer button[type=submit]').html('Tambah Koleksi');
        $('#judul').val('');
        $('#pengarang').val('');
        $('#penerbit').val('');
        $('#id').val('');
    });    

    $.ajax({
        url: 'http://localhost/phpmvc/public/koleksi/getubah',
        data: {id : id},
        method: 'post',
        dataType: 'json',
        success: function(data){
            $('#judul').val(data.judul);
            $('#pengarang').val(data.pengarang);
            $('#penerbit').val(data.penerbit);
            $('#id').val(data.id);
        }
    });
});

});