<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prak4</title>
</head>
<body>
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>prak4</title>
    </head>
    <body>
        <h2>Input Form Aman</h2>
        <form action="html_aman.php" method="post">
            <label for="input">Nama:</label><br>
            <input type="text" id="input" name="input"><br><br>

            <label for="email">Email :</label><br>
            <input type="text" id="email" name="email"><br><br>

            <input type="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST['input'];
            //sanitasi input untuk mencegah XSS
            $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

            //memastikan input tidak kosong
            if (!empty($input)) {
                echo "<p>Data yang dimasukkan : " . $input . "</p>";
            } else {
                echo "<p>Input tidak boleh kosong!</p>";
            }

            //apakah email valid atau tidak
            $email = $_POST['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<p>Email valid: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</p>";
            } else {
                echo "<p>Email tidak valid, silakan input email kembali.</p>";
            }
        }
        ?>
    </body>
</html>