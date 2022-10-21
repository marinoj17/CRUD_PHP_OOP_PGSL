<?php
include_once('connection.php'); 
class Db_Class{
    private $table_name = 'alumno';
    function createAlumno(){
        $sql = "INSERT INTO public.".$this->table_name."(nombre,apellido,rut,curso) "."VALUES('".$this->cleanData($_POST['nombre'])."','".$this->cleanData($_POST['apellido'])."','".$this->cleanData($_POST['rut'])."','".$this->cleanData($_POST['curso'])."')";
        return pg_affected_rows(pg_query($sql));
    }
    function getAlumno(){             
        $sql ="select * from public." . $this->table_name . " ORDER BY id_alumno ";
        return pg_query($sql);
    } 
    function getAlumnoId(){    
  
        $sql ="select *from public." . $this->table_name . "  where id_alumno='".$this->cleanData($_POST['id_alumno'])."'";
        return pg_query($sql);
    } 
    function deleteAlumno(){    
  
         $sql ="delete from public." . $this->table_name . "  where id_alumno='".$this->cleanData($_POST['id_alumno'])."'";
        return pg_query($sql);
    } 
    function updateAlumno($data=array()){       
     
        $sql = "update public.alumno set nombre='".$this->cleanData($_POST['nombre'])."',apellido='".$this->cleanData($_POST['apellido'])."', rut='".$this->cleanData($_POST['rut'])."',curso='".$this->cleanData($_POST['curso'])."' where id_alumno = '".$this->cleanData($_POST['id_alumno'])."' ";
        return pg_affected_rows(pg_query($sql));        
    }
    function cleanData($val){
         return pg_escape_string($val);
    }
}
?>