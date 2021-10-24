<?php


/**
 * Clase para manejo de sesiones de usuario en nuestra página (inicio de sesión, cierre de sesión, si existe la sesión, etc.)
 *
 * @author DAW2
 */
class Sesion {
    static public function iniciar($id){
        $_SESSION['id_usuario_sesion']=$id;
    }
    
    static public function existe() {
        return isset($_SESSION['id_usuario_sesion']);
    }
    
    static public function cerrar(){
        unset($_SESSION['id_usuario_sesion']);
    }
    
    static public function obtener(){
        return $_SESSION['id_usuario_sesion'];
    }
}
