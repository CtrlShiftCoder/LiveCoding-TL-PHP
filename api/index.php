<?php
header("Content-Type: application/json; charset=UTF-8");

require_once "config/MockData.php";
require_once "models/Book.php";
require_once "models/Loan.php";
require_once "controllers/BookController.php";
require_once "controllers/LoanController.php";
require_once "helpers/ApiHelper.php";

// DESAFÍO: Implementar middleware de rate limiting
if (!ApiHelper::checkRateLimit($_SERVER['REMOTE_ADDR'])) {
    echo ApiHelper::jsonResponse(['message' => 'Too many requests'], 429);
    exit;
}

// DESAFÍO: Implementar try-catch global
try {
    // TODO: Implementar routing básico
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $method = $_SERVER['REQUEST_METHOD'];

    // Ejemplo de estructura de routing a implementar:
    switch ($uri) {
        case '/api/books':
            $controller = new BookController();
            if ($method === 'GET') {
                $controller->index();
            } elseif ($method === 'POST') {
                $controller->store();
            }
            break;
        
        case (preg_match('/^\/api\/books\/(\w+)$/', $uri, $matches) ? true : false):
            $controller = new BookController();
            $isbn = $matches[1];
            
            switch ($method) {
                case 'GET':
                    $controller->show($isbn);
                    break;
                case 'PUT':
                    $controller->update($isbn);
                    break;
                case 'DELETE':
                    $controller->delete($isbn);
                    break;
            }
            break;
        // TODO: Implementar las demás rutas
    }
} catch (Exception $e) {
    echo ApiHelper::jsonResponse(['error' => $e->getMessage()], 500);
} 