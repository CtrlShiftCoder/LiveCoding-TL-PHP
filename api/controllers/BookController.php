<?php

class BookController {
    private $book;

    public function __construct() {
        $this->book = new Book();
    }

    // TODO: Implementar método para listar libros
    public function index() {
        $books = $this->book->getAll();
        echo json_encode(['data' => $books]);
    }

    // TODO: Implementar método para obtener un libro
    public function show($isbn) {
        
    }

    // TODO: Implementar método para crear un libro
    public function store() {
        $data = json_decode(file_get_contents('php://input'), true);
        
    }

    // TODO: Implementar método para actualizar un libro
    public function update($isbn) {
        
    }

    // TODO: Implementar método para eliminar un libro
    public function delete($isbn) {
        
    }

    // DESAFÍO: Implementar búsqueda avanzada
    public function search() {
        $query = $_GET['q'] ?? '';
        $page = $_GET['page'] ?? 1;
        $limit = $_GET['limit'] ?? 10;
        
        $books = $this->book->search($query);
        $paginatedBooks = $this->book->getPaginated($page, $limit);
        
        echo ApiHelper::jsonResponse([
            'books' => $paginatedBooks,
            'total' => count($books),
            'page' => $page,
            'limit' => $limit
        ]);
    }
} 