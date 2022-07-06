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
            <table border="1">
                <tr>
<!--                    <th>id</th>-->
                    <th>Книга</th>
                    <th>Автор</th>
                    <th>Год</th>
                    <th>Обложка</th>
                    <th>Удалить</th>
                </tr>
                <?php foreach ($books as $book): ?>
                    <tr>
<!--                        <td>-->
<!--                            --><?php
//                                echo "{$book['id']} <br>";
//                            ?>
<!--                        </td>-->
                        <td>
                            <?php
                                echo "{$book['name']} <br>";
                        ?>
                        </td>
                        <td>
                            <?php
                                echo "{$book['fk_author']} <br>";
                            ?>
                        </td>
                        <td>
                            <?php
                                echo "{$book['year']} <br>";
                            ?>
                        </td>
                        <td>
                            <img src="<?php 
                                        echo "{$book['image']} <br>";
                                      ?>"
                                    width="100" height="150">
                           
                        </td>
                        <td>
                            <form action="/books/remove" method="POST">
                                <input value="<?php echo $book['id'] ?>" type="hidden" name="id">
                                <button type="submit">Удалить</button>
                            </form>
                        </td>
                </tr>
                <?php endforeach;?>
            </table>
          </ul>
    <h1>Успех!</h1>
    <img src="https://shishkino.info/wp-content/uploads/2017/08/blackbooks3.jpg" alt="">


   
</body>
</html>