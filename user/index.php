<?php
    require __DIR__ . "/../internal/init.php";          # Подгружаем подключение к БД, системные функции
    header("Content-Type: application/json");           # Передаем клиенту в HTTP Header Content-Type
    
    $user = checkBearer();
    if ($user) {
        # Логика этой страницы при авторизованном пользователе
    } else {
        http_response_code(401);
        echo json_encode([
            "error" => [
                "code" => 401,
                "message" => "Unauthorized"
            ]
        ]);
    }
?>