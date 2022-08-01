<?php 

namespace App\Models;

use Exception;
use PDOException;

class Book
{
    public int $id;
    public string $name = '';
    public int $fk_author;
    public string $year = '';
    public string $image = '';

    public function getAll()
    {
        //get db connection
        $conn = new \App\Db\Connection();
        $pdo = $conn->openConnection();

        //do something with connection, for example ->
        $data = $pdo->query('SELECT 
                                        b.id as book_id,
                                        b.name as book_name, 
                                        b.year as book_year,
                                        b.image as book_image,
                                        a.name as author_name, 
                                        a.year as author_year
                                      FROM books b 
                                      INNER JOIN authors a ON  b.fk_author = a.id
                                      ')->fetchAll();
        $conn->closeConnection();
        return $data;

    }

    public function save()
    {
        //get db connection
        $conn = new \App\Db\Connection();
        $pdo = $conn->openConnection();
        $sql = "INSERT INTO books (name, fk_author, year, image) VALUES ('$this->name','$this->fk_author', '$this->year', '$this->image')";

        try {
            $pdo->beginTransaction();
            $pdo->exec($sql);
            $pdo->commit();
        } catch (PDOException $e) {
            $pdo->rollback();
            echo "Database error: " . $e->getMessage();
        }

    }

    // update(){

    // }

    public function delete()
    {
        $conn = new \App\Db\Connection();
        $pdo = $conn->openConnection();
        $id = $_POST['id'];
        $sql = "DELETE FROM books WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue('id', $id);
        $stmt->execute();
    }

}