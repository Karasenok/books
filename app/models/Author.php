<?php

namespace App\Models;

use Exception;
use PDOException;

class Author
{
    public int $id;
    public string $name = '';
    public string $year = '';

    public function getAll(){
        //get db connection
        $conn = new \App\Db\Connection();
        $pdo = $conn->openConnection();

        //do something with connection, for example ->
        $data = $pdo->query('SELECT 
                                        a.id as author_id, 
                                        a.name as author_name, 
                                        a.year as author_year                                      
                                      FROM author a')->fetchAll();
        $conn->closeConnection();
        return $data;

    }

    public function save() {
        //get db connection
        $conn = new \App\Db\Connection();
        $pdo = $conn->openConnection();
        $sql = "INSERT INTO authors (name, year) VALUES ('$this->name', '$this->year')";

        try {
            $pdo->beginTransaction();
            $pdo->exec($sql);
            $pdo->commit();
            $sql = "INSERT INTO authors (name, year) VALUES (:author_name,:author_year)";
            $stmt= $pdo->prepare($sql);
            $stmt->bindValue('author_name', $this->name);
            $stmt->bindValue('author_year', $this->year);
            $stmt->execute();
            return $pdo->lastInsertId();


          //  $result = $pdo->fetchColumn();
        } catch (PDOException $e) {
            $pdo->rollback();
            echo "Database error: " . $e->getMessage();
        }


    }
}