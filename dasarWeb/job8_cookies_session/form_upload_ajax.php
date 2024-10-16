<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prak3</title>
</head>
<body>
    <h2>Form Ajax</h2>
    <form action="upload_ajax.php" method="post" id="upload-form" enctype="multipart/form-data">
        <input type="file" name="file[]" id="file" multiple="multiple">
        <br><br>
        <input type="submit" name="submit" id="Unggah">
    </form>

    <div id="status"></div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="upload.js"></script>
</body>
</html>