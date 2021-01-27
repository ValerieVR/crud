<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class BookRepository
{
    private $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create()
    {
        if (!empty($_POST['title']) && !empty($_POST['author'])) {
            $title = $_POST['title'];
            $author = $_POST['author'];
            $sql = 'INSERT INTO book(title, author) VALUES(?,?)';
            $result = $this->databaseManager->database->prepare($sql);
            $result->execute([$title, $author]);
            header('Location: index.php');
        }
    }

    // Get one
    public function find(){
        if (!empty($_GET['keyword'])) {
            $keyword = $_GET['keyword'] . "%";
            $sql = "SELECT * FROM book WHERE title LIKE '$keyword' OR author LIKE '$keyword'";
            $result = $this->databaseManager->database->prepare($sql);
            $result->execute();
            return $result->fetch();
        }
    }

    // Get all
    public function get(){
        $sql= 'SELECT * FROM book';
        $result = $this->databaseManager->database->query($sql);
        return $result;
    }

    public function update(int $id, string $title, string $author){
        $sql = 'UPDATE book SET title=?, author=? WHERE id=?';
        $result = $this->databaseManager->database->prepare($sql);
        $result->execute([$title,$author,$id]);
        
        header('Location: index.php');
    }

    public function delete(int $id){
        $sql = 'DELETE FROM book WHERE id=?';
        $result = $this->databaseManager->database->prepare($sql);
        $result->execute([$id]);

        header('Location: index.php');
    }

}