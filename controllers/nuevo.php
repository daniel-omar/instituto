<?php

class Nuevo extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->mensaje="";
        // echo "<p>Nuevo controlador main</p>";
    }
    function render(){
        $this->view->render('nuevo/index');
    }

    function registrarAlumno(){
        $nombre=$_POST['txtNombre'];
        $apellidos=$_POST['txtApellidos'];
        $direccion=$_POST['txtDireccion'];
        $edad=$_POST['txtEdad'];
        $ciclo=$_POST['cbCiclo'];
        $email=$_POST['txtEmail'];
        $fech_create=date("Y-m-d H:i:s");
        
        $mensaje="";
        
        if($this->model->insert(
            [
                'nombre'=>$nombre,
                'apellidos'=>$apellidos,
                'direccion'=>$direccion,
                'edad'=>$edad,
                'ciclo'=>$ciclo,
                'email'=>$email,
                'fech_create'=>$fech_create
            ]
        )){
            
            $mensaje="Alumno registrado correctamente";
        }else{
            $mensaje="Hubo un inconveniente al registrar el alumno";
        }

        $this->view->mensaje=$mensaje;
        $this->render();
    }
}

?>