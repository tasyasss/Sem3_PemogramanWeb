<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prak3</title>
</head>
<body>
    <h2>Form Input PHP</h2>
    <form action="proses_form.php" method="post">
        <label for="nama">Nama: </label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" required><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>