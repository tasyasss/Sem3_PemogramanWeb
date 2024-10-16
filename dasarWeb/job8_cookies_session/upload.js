$(document).ready(function() {
    $('#file').change(function(){
        if (this.files.length > 0) {
            $('#upload-button').prop('disabled', false).css('opacity', 1);
            console.log('File dipilih: ' + this.files[0].name); 
        } else {
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);
        }
    });

    $('#upload-form').submit(function(e) {
        e.preventDefault();  // Mencegah form dikirim secara default

        var formData = new FormData(this);  // Mengambil data form beserta file yang diunggah

        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',  // File tujuan upload
            data: formData,
            cache: false,
            contentType: false,  // Agar form tidak di-encode
            processData: false,  // Agar data tidak diubah jadi string query
            success: function(response) {
                $('#status').html(response);  // Menampilkan hasil dari upload
            },
            error: function() {
                $('#status').html("Terjadi kesalahan saat mengunggah file");
            }
        });
    });
});
