<!DOCTYPE html>
<html lang="en">
<head>
<title>Кіно</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
  <h1>Дивитись фільми та серіали онлайн українською</h1>
  <p>У чудовій якості та якісній озвучці</p>
</div>

<div class="navbar">
  <a href="./index.php">Головна сторінка</a>
  <a href="./index2.php">Жанри</a>
</div>

<div class="row">
  <div class="side">
      <div class="a" id="clock">16:23:04</div>
      <script src="js.js"></script>
      <div class="data"><?php echo date("d.m.y");?></div>
  </div>
  <div class="main">
      <h2>Дивитися найпопулярніші фільми українською онлайн</h2>
      <p>Разом з людством розвивається і сучасна кіноіндустрія. Кілька десятиліть кіношні творіння відображають безліч проблем, які зачіпають важливі та суперечливі питання населення. Сьогодні фільми, які вже вийшли, здатні змусити людину абсолютно по-іншому дивитися на навколишній світ. Перші винахідники навіть не думали, наскільки важливим для людей стане кінематограф. Це приголомшливий прорив, на блакитні екрани вийшли тисячі кінокартин різноманітних жанрів, які знайшли власний натовп шанувальників.</p>
      <br>
      <p>У далекі часи, щоб перенестися в чудовий світ кіно, необхідно було стояти в довгих чергах, щоб придбати бажаний квиток і насолодитися переглядом улюбленої кінострічки. Шум і величезні натовпи шанувальників завжди відволікали від сюжету, але іншого виходу, щоб споглядати картини не було. Тепер все неабияк змінилося, дивитися нові фільми 2019, 2020, 2021 року українською онлайн можна в затишній домашній атмосфері, самостійно обираючи собі компанію або просто насолодитися улюбленою стрічкою поодинці. Сучасна ера інтернету зробила кіно доступним в будь-який час дня і ночі.</p>
  </div>
</div>

<div class="footer">
  <h2>Коментарі</h2>
    <form method="post">  
    Name: <input type="text" name="name">
    <br><br>
    E-mail: <input type="text" name="email">
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>     
    <br><br>
    <input type="submit" name="submit" value="Відправити">  
    </form>
    <div class="com">
  <?php 
    $file_name = "index.txt";
    include 'write_file.php';
	?>
	
	<?php include 'read_file.php';?>
</div>

</body>
</html>