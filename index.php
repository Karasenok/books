<?php
require_once 'vendor/autoload.php';
$request = $_SERVER['REQUEST_URI'];
$isPost = $_SERVER['REQUEST_METHOD'] === 'POST';
$controller = new \App\Controllers\BooksController();

switch ($request) {
    case '/' :
        echo '<img src="https://images.squarespace-cdn.com/content/v1/53022ff8e4b0c6ad9e417ced/1439057771549-41GI6QQ9IY6X0I8UW70M/image-asset.jpeg"
        	width="1000" height="600"
         alt="Домашняя страница, которая не используется у нас, вот дела">
         <h1>Домашняя страница, которая не используется у нас, вот дела</h1>';
        break;
    case '' :
        echo "Домашняя страница, которая не используется у нас, вот дела";
        break;
    case '/books/' :
      	$isPost ? $controller->store() : $controller->index();
        break;
    case '/books/create' :
    	$controller->create();
   		break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}