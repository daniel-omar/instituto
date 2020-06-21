<?php

class NuevoModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    //insertar tecnico en la base datos
    public function insert($datos){
        try{
            $query=$this->db->connect()->prepare('INSERT INTO alumnos(Nombre,Apellidos,Direccion,Edad,Ciclo,Email,Estado,Fech_Create) values(:nombre,:apellidos,:direccion,:edad,:ciclo,:email,:estado,:fech_create)');
            $query->execute([
                'nombre'=>$datos['nombre'],
                'apellidos'=>$datos['apellidos'],
                'direccion'=>$datos['direccion'],
                'edad'=>$datos['edad'],
                'ciclo'=>$datos['ciclo'],
                'email'=>$datos['email'],
                'estado'=>1,
                'fech_create'=>$datos['fech_create']
            ]);
            return true;
        }catch(Exception $ex){
            print_r('Error_Connection: ' . $ex->getMessage());
            return false;
        }
       
        // echo "Insertar datos";

    }
}   

?>