<?php 

namespace App\Models;

use Exception;
use PDOException;

class Book
{
    public $id = null;
    public $name = null;
    public $fk_author = null;
    public $year = null;
    public $image = null;

    public function getAll(){
    	//get db connection
        $conn = new \App\Db\Connection();
        $pdo = $conn->openConnection();

        //do something with connection, for example ->
        $data = $pdo->query('SELECT * FROM books')->fetchAll();

        $conn->closeConnection();

        return $data;
    }

    public function save(){
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

    // delete(){

    // }

}