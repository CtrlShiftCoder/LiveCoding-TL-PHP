<?php

class LoanController {
    private $db;
    private $loan;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->loan = new Loan($this->db);
    }

    // TODO: Implementar método para crear un nuevo préstamo
    public function create($isbn) {
        
    }

    // TODO: Implementar método para devolver un libro
    public function returnBook($isbn) {
        
    }

    // TODO: Implementar método para listar préstamos activos
    public function activeLoans() {
        
    }
} 