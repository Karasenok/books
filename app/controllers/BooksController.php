<?php
namespace App\Controllers;

//Simple controller class that controls all the actions in our app!

use App\Models\Author;
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
    public function store($post)
    {
        $author = new Author();
        $author->name = $post['author_name'];
        $author->year = $post['author_year'];
        $authorId = $author->save();

        $book = new Book();
        $book->name = $post['book_name'];
        $book->fk_author = $authorId;
        $book->year = $post['book_year'];
        $book->image = $post['userfile'];;
        $book->save();
    }

    //Delete book by id
    public function remove($id)
    {
        $book = new Book();
        $book->id = $id;
        $book->delete();
    }

}
