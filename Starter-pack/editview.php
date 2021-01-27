<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookworm</title>
</head>
<body>
    <form action="" method="post">
        <label for="title">Book Title:</label>
        <input type="text" name="title" id="title" value="<?=$_GET['title']?>">
        <label for="author">Author:</label>
        <input type="text" name="author" id="author" value="<?=$_GET['author']?>">
        <button type="submit" name="update" value="update">Update</button>
    </form><br><br>
    <a href="index.php">Go Back</a>
</body>
</html>