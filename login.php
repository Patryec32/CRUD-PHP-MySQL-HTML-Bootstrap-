<?php
    require_once('app/model/Usuario.php');
    $usuario=new Usuario();

    if( !isset( $_POST['email']) && !isset($_POST['password'])) {
        echo "Datos ivalido";
        return;
    }

    $usuario->email = $_POST['email'];
    $usuario->password = $_POST['password'];
    $respuesta =$usuario->loguear();

    if( count($respuesta) > 0){
        echo "Log Ok";
        // llamar a una funcion para4el login
        session_start();
        $_SESSION['user'] = $email;
        header('location: admin.php');
    } else if($email == 'user@gmail.com' && $password == 'user' ){
        header('location: inscripcion.php');    
    }else{
        require_once('index.php');
        require_once('template/pie.php');
        
    }
?>