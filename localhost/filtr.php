<?php
require_once 'mysql.php';


$sql = "SELECT * FROM product ";
$result = $pdo->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Товары</title>
    <style>
        .login {
            width: 700px;
        }
    </style>
</head>
<body>
<section class="container">
    <div class="login">
        <h1>Таблица товаров</h1>
        <?php
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
        <form action="pousk">
            <p><input type="text" name="name" value="" placeholder="Название"></p>
            <p class="submit"><input type="submit" name="commit" value="Добавить"></p>
        </form>
        </table>
        <br>

    </div>
</section>
</body>
</html>