<?php 

namespace App\Models;

class Book 
{

    public function getAll(){
    	//get db connection
        $conn = new \App\Db\Connection();
        $pdo = $conn->openConnection();

        //do something with connection, for example ->
        $data = $pdo->query('SELECT * FROM books')->fetchAll();

        $conn->closeConnection();

        return $data;
    }

    // save(){

    // }

    // update(){

    // }

    // delete(){

    // }

}