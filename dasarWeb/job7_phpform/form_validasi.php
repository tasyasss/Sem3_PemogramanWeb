<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prak7</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    
    <!-- bukan ajax -->
    <!-- <form id="myForm" method="post" action="proses_validasi.php"> -->
    <!-- pake ajax -->
    <form id="myForm" method="post">
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span>
        <br><br>

        <label for="email">Email: </label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span>
        <br><br>

        <input type="submit" value="Submit">
    </form>
    
    <br><br>
    <div id="hasil"></div>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault();
                
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                // Validasi nama
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                // Validasi email
                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                // Validasi password
                if (password.length < 8) {
                    $("#password-error").text("Password harus minimal 8 karakter.");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                // kirim data menggunakan AJAX
                if (valid) {
                    $.ajax({
                        url: "proses_validasi.php",
                        type: "POST",
                        data: { nama: nama, email: email, password: password },
                        // data: { nama: nama, email: email},
                        success: function(response) {
                            // Tampilkan hasil dari server
                            $("#hasil").html(response); 
                        },
                        error: function(xhr, status, error) {
                            $("#hasil").html("Terjadi kesalahan: " + error);
                        }
                    });
                }

                if (valid) {
                    (!event.preventDefault());
                }
            });
        });
    </script>
</body>
</html>