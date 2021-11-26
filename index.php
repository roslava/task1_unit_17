<?php

require_once 'config.php'; // настройки подключения к базе данных
require_once 'function.php'; // функции

$conn = connect();

//Select
$testSelect = select("SELECT * FROM users");


//Insert
//$testInsert = execQuery('INSERT INTO users (name, age, photo) VALUES ("Spider-man", 50, "https://image.shutterstock.com/image-photo/amsterdam-netherlands-march-2017-spiderman-600w-618809906.jpg")');


//Update
//$testUpdate = execQuery('UPDATE users SET photo = "https://image.shutterstock.com/image-photo/seintpetersburg-russia-june-29-2016-600w-1580912194.jpg" WHERE id = 37');


//Delete
//$testDelete = execQuery('DELETE FROM users WHERE id = 27');


//Вывод на экран
$out = '';
foreach ($testSelect as $item) {
    $out .= " <div> имя: {$item['name']}</div>
              <div> возраст: {$item['age']}</div>
              <div><img src= {$item['photo']} alt=''></div> <hr>";
}
echo $out;