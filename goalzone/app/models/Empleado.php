<?php
require_once __DIR__ . '/../core/Database.php';

class Empleado {
    private PDO $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function obtenerUsuarios(): array {
        $stmt = $this->db->prepare("SELECT id_usuario, nombre_usuario, roles FROM usuario");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function obtenerClientes(): array {
        $stmt = $this->db->prepare("SELECT * FROM clientes");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function obtenerCanchas(): array {
        $stmt = $this->db->prepare("SELECT * FROM canchas");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function obtenerReservas(): array {
        $stmt = $this->db->prepare("SELECT * FROM reservas");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
