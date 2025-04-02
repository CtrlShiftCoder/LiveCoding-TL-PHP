<?php

class ApiHelper {
    private static $requestCount = [];
    
    // DESAFÍO: Implementar rate limiting
    public static function checkRateLimit($ip) {
        // Limitar requests por IP
    }
    
    // DESAFÍO: Implementar logging
    public static function logOperation($operation, $data) {
        // Registrar operación en log
    }
    
    // DESAFÍO: Implementar respuestas estandarizadas
    public static function jsonResponse($data, $code = 200) {
        http_response_code($code);
        return json_encode([
            'status' => $code < 400 ? 'success' : 'error',
            'data' => $data,
            'timestamp' => time()
        ]);
    }
} 