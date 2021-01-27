<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookworm</title>
</head>
<body>
    <!-- <?php var_dump($_POST);?>
    <?= "<br>"; ?>
    <?php var_dump($_GET);?> -->
    <form action="" method="post">
        <label for="title">Book Title:</label>
        <input type="text" name="title" id="title">
        <label for="author">Author:</label>
        <input type="text" name="author" id="author">
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>