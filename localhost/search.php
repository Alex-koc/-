<!doctype html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Товары</title>
    <style>

    </style>
</head>
<body>
<section class="container">
    <div class="login">
        <h1>Таблица товаров</h1>
        <?php
        require_once 'mysql.php';
        $search = $_POST['search'];
        $stmt= $pdo->query('SELECT * FROM product WHERE `name` LIKE "%'.$search.'%"');
        $stmt= $pdo->query('SELECT * FROM product WHERE `text` LIKE "%'.$search.'%"');
        $stmt= $pdo->query('SELECT * FROM product WHERE `price` LIKE "%'.$search.'%"');
        echo "<table><tr><th>№</th><th>Товары</th><th>Описание</th><th>Цена</th><th>Фото</th></tr>";
        foreach ($stmt as $row)
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
        <form action="spisok.php">
            <br>
            <button>Таблица</button>
        </form>
        <form action="main.html">
            <br>
            <button>Главное меню</button>
        </form>
    </div>
</section>
</body>
</html>
