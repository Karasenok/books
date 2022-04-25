<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>  
      <form action="/books/store" method="POST">
    
            <label for="name">Название книги:</label>
            <input type="text" name="book_name">
            <br></br>
            <label for="author">Автор книги:</label>
            <input type="text" name="author">
            <br></br>
            <label for="date">Год:</label>
            <input type="date" name="date">
            <br></br>
            <label for="image">Обложка:</label>
            <form enctype="multipart/form-data" method="post">
            <p><input type="file" name="userfile">
            <br></br>
            <button type="submit">Отправить</button>

      </form>  
</body>
<!--<p>Потому что я пуджжжжж пуджжжжж пуджжжжж пуджжжжж пуджжжжж пуджжжжж</p>-->