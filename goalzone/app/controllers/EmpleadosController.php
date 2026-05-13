<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Empleado.php';

class EmpleadosController extends Controller {

    public function index(): void {
        if (!isset($_SESSION['usuario'])) {
            header("Location: " . BASE_URL . "/login");
            exit();
        }
        $modelo = new Empleado();
        $this->view('empleados/reportes', [
            'usuario'  => $_SESSION['usuario'],
            'usuarios' => $modelo->obtenerUsuarios(),
            'clientes' => $modelo->obtenerClientes(),
            'canchas'  => $modelo->obtenerCanchas(),
            'reservas' => $modelo->obtenerReservas(),
        ]);
    }
}
