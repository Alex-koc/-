<?php
require_once 'mysql.php';




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Товары</title>
    <style>
        .login {
            width: 620px;
        }
    </style>
</head>
<body>
<section class="container">
    <div class="login">
        <form name="search" method="post" action="search.php">
            <input type="" name="search" placeholder="Поиск">
            <button type="submit">Найти</button>
        </form>
        <h1>Таблица товаров</h1>
        <?php
        $sql = "SELECT * FROM product";
        $result = $pdo->query($sql);
        echo "<table><tr><th>№</th><th>Товары</th><th>Описание</th><th>Цена</th><th>Фото</th></tr>";
        while ($row = $result->fetch())
        {

            echo "<tr>";
            echo '<td>'.$row['id'].'</td>';
            echo '<td>'.$row['name'].'</td>';
            echo '<td>'.$row['text'].'</td>';
            echo '<td>'.$row['price'].'</td>';
            echo '<td><img src="'.$row['photo'].'" alt="Картинка" width="150" height="150"></td>';
            echo "</tr>";

        }
        ?>
        </table>
        <br>
        <form action="main.html">
            <br>
            <button>Главное меню</button>
        </form>
    </div>
</section>
</body>
</html>