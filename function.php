<?php

function connect()
{
    //Создание подключения
    $conn = new mysqli(SERVER, USER, PASSWORD, DB);

    //Проверка подключения
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    mysqli_set_charset($conn, CHARSET); //если киррилица

    return $conn;
}

function select($query)
{
    global $conn;
    $queryResult = [];
    // $result = mysqli_query($conn, $query);
    $result = $conn->query($query);

//Получение ответа
    if (mysqli_num_rows($result) > 0) {
        //если все ОК — вывод данных построчно
        while ($row = mysqli_fetch_assoc($result)) {
            $queryResult[] = $row;
        }
    }
    return $queryResult;
}

//function echo 'execQuery
function execQuery($query)
{
    global $conn;
    if ($conn->query($query)) {
        return true;
    }
    return false;
}