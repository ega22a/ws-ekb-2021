<?php
    header("Content-Type: application/json");
    // var_dump($_GET);
    if (isset($_GET['uri'])) {
        // switch {
        //     ""
        // }
    } else {
        http_response_code(404);
        echo json_encode([
            "path" => '/index'
        ]);
    }