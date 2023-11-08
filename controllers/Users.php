<?php
    require_once "models/User.php";
    class Users{
        public function __construct(){}
        # Crear Usuario
        public function createUser(){ 
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/admin/header.view.php";
                require_once "views/modules/mod01_users/user_create.view.php";
                require_once "views/roles/admin/footer.view.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $rol = new Rol(
                    null,
                    $_POST['rolName']
                );                
                $rol->rolCreate();
                header("Location:?c=Roles&a=readRol");
            }           
            $user = new User(
                1,
                2,
                "albeiro",
                "ramos",
                "profealbeiro2020",
                "12345",
                1);
            // $user->userCreate();
        }
        # Listar Usuarios
        public function readUser(){}
        # Actualizar Usuario
        public function updateUser(){}
        # Eliminar Usuario
        public function deleteUser(){}
    }
?>