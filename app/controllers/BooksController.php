<?php
namespace App\Controllers;

//Simple controller class that controls all the actions in our app!

use App\Models\Book;

class BooksController
{
	//Returns view with all books
   public function index() {
   		$book = new Book();
   		$books = $book->getAll();
        return require_once( dirname(__DIR__).'../views/index.php');//return some view with data;
    }


    // Returns the book creation form
	public function create() {
	return require_once( dirname(__DIR__).'../views/create.php');
	}

	// Method that saves the object to db
	public function store($post) {
       $book = new Book();
       $book->name = $post['book_name'];
       $book->fk_author = $post['author'];
       $book->year = $post['date'];
       $book->image = $post['userfile'];;
       $book->save();


	}

	//Delete book by id
	public function del($id) {

	}

}
