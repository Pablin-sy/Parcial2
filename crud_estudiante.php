<?php
     
     if( !empty($_POST) ){
   
     //print_r( $_POST );
       // echo "<hr/>";
       $txt_id = utf8_decode($_POST["txt_id"]);
        $txt_carnet = utf8_decode($_POST["txt_carnet"]);
        $txt_nombres = utf8_decode($_POST["txt_nombres"]);
        $txt_apellidos = utf8_decode($_POST["txt_apellidos"]);
        $txt_direccion = utf8_decode($_POST["txt_direccion"]);
        $txt_telefono = utf8_decode($_POST["txt_telefono"]);
        $txt_genero = utf8_decode($_POST["txt_genero"]);
        $txt_email = utf8_decode($_POST["txt_email"]);
        $txt_fecha_nacimiento = utf8_decode($_POST["txt_fecha_nacimiento"]);
      include("datos_conexion.php");
        $db_conexion = mysqli_connect($db_host,$db_usr,$db_pass,$db_nombre);
        $sql ="";
        if(isset($_POST['btn_agregar'])  ){
          $sql = "INSERT INTO estudiantes(carnet,nombres,apellidos,direccion,telefono,genero,fecha_nacimiento,id_puesto) VALUES ('". $txt_codigo ."','". $txt_nombres ."','". $txt_apellidos ."','". $txt_direccion ."','". $txt_telefono ."','". $txt_fn ."',". $drop_puesto .");";
        }
        if( isset($_POST['btn_modificar'])  ){
          $sql = "update empleados set codigo='". $txt_codigo ."',nombres='". $txt_nombres ."',apellidos='". $txt_apellidos ."',direccion='". $txt_direccion ."',telefono='". $txt_telefono ."',fecha_nacimiento='". $txt_fn ."',id_puesto=". $drop_puesto ." where id_empleado = ". $txt_id.";";
        }
        if( isset($_POST['btn_eliminar'])  ){
          $sql = "delete from empleados  where id_empleado = ". $txt_id.";";
        }
         
          if ($db_conexion->query($sql)===true){
            $db_conexion->close();
           
            header('Location: /empresa_2021');
            //header('Location: index.php');
           
          }else{
            $db_conexion->close();
          
          }

      }
     
    
      
      ?>