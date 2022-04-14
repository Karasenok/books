<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
            foreach($books as $book):
                echo "книга -- {$book['name']} <br>";
            endforeach;
        ?>
    </ul>
    <h1>Успех!</h1>
    <img src="https://shishkino.info/wp-content/uploads/2017/08/blackbooks3.jpg" alt="">


   
</body>
</html>