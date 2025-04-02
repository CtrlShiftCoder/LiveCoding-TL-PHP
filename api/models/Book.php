<?php
require_once "config/MockData.php";

class Book {
    // Propiedades
    public $isbn;
    public $title;
    public $author;
    public $available;
    public $created_at;
    public $updated_at;

    // TODO: Implementar método para obtener todos los libros
    public function getAll() {
        
    }

    // TODO: Implementar método para obtener un libro por ISBN
    public function getByIsbn($isbn) {
        
    }

    // TODO: Implementar método para crear un nuevo libro
    public function create($data) {
        
    }

    // TODO: Implementar método para actualizar un libro
    public function update($isbn, $data) {
        
    }

    // TODO: Implementar método para eliminar un libro
    public function delete($isbn) {
        
    }

    // DESAFÍO: Implementar búsqueda avanzada
    public function search($query) {
        // Buscar por título o autor
    }

    // DESAFÍO: Implementar sistema de caché
    private $cache = [];
    
    public function getFromCache($isbn) {
        // Obtener libro desde caché si existe
    }

    // DESAFÍO: Implementar paginación
    public function getPaginated($page = 1, $limit = 10) {
        // Retornar libros paginados
    }
} 