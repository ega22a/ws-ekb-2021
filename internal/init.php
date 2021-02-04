<?php
    $database = new mysqli("localhost", "ws", "ws", "ws");
    if ($database -> errno) die;

    function checkBearer() { # Функция проверки токена. Если токен существует - возвращается ID пользователя.
        $bearer = !empty(getallheaders()["Authorization"]) ? explode(" ", getallheaders()["Authorization"])[1] : false;
        if ($bearer) {
            $query = $database -> query("SELECT `id` FROM `users` WHERE `token` = '{$bearer}';");
            if ($query -> num_rows)
                return int($query -> fetch_assoc()["id"]);
            else
                return false;
        } else
            return false;
    }