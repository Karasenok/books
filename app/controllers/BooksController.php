<?php
namespace App\Controllers;

//Simple controller class that controls all the actions in our app!

class BooksController
{
	//Returns view whit all books
   public function index() {
		echo "хелоу ворлд";
   		$book = new \App\Models\Book();
   		$books = $book->getAll();
        return require_once( dirname(__DIR__).'../views/index.php');//retrurn some view whith data;
    }


    // Returns the book creation form
	public function create() {

	}

	// Method that saves the object to db
	public function store($data) {

	}

	//Delete book by id
	public function del($id) {

	}

}
