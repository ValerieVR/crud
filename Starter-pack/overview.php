<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	<title>Bookworm</title>
</head>
<body>

<h1>Keep Track of Your Favorite Books</h1>

<ul>
<?php foreach ($books as $book) : ?>
    <li><?= $book['title'] . ', ' . $book['author']?></li>
<?php endforeach; ?>
<?php $bookRepository->create(); ?>
</ul>
<form action="" method="post">
	<label for="title">Book Title:</label>
	<input type="text" name="title" id="title">
	<label for="author">Author:</label>
	<input type="text" name="author" id="author"><br><br> 
	<button type="submit">Submit</button>
</form>

</body>
</html>